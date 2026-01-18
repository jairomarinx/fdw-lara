<?php

namespace App\Http\Controllers;
use Illuminate\Http\Request;
use Stripe\Stripe;
use Stripe\Checkout\Session;
use App\Models\Presale;
use Stripe\Webhook;
use Stripe\Exception\SignatureVerificationException;
use Illuminate\Support\Facades\Log;

use App\Mail\PresalePaidMail;
use Illuminate\Support\Facades\Mail;


class CheckoutController extends Controller
{

    public function general_checkout(Request $request,  string $product)    
    {
        $productDict = config("products.$product");
        $productPrice = $productDict['price'];
        $productName = $productDict['name'];
        $productDesc = $productDict['desc'];

        $amount = $productPrice * 100;

        return view('checkout')->with('amount', $amount)
                                ->with('productName',$productName)
                                ->with('desc',$productDesc)
                                ->with('product',$product);


    }

     public function show()
    {
        $amount = 12900; // en centavos (120.00 USD)
        $productName = "Fit.Reset.Consultation";
        return view('checkout')->with('amount', $amount)
                                      ->with('product_name',$productName);
    }

    public function checkout_personal_fitness_training()
    {
        $amount = 12900; // en centavos (120.00 USD)
        $productName = "Fit.Reset.Consultation";
        return view('checkout')->with('amount',$amount)
                                        ->with('productName',$productName);
    }

    public function pay(Request $request)
    {
        $request->validate([
                'amount' => 'required|numeric|min:1.0',
            ]);

        if (isset($request->name_complete))
        {
            return "Spam detected";
        }

        Log::info('Checkout pay initiated', [
            'email'   => $request->email ?? null,
            'product' => $request->product ?? null,
            'amount'  => $request->amount ?? null,
        ]);


        $presale = new Presale();
        $presale->name = $request->name;
        $presale->email = $request->email;
        $presale->phone = $request->phone;
        $presale->amount = $request->amount;
        $presale->product = $request->product;
        $presale->product_name = $request->product_name;
        $presale->description = $request->desc;
        $presale->save();

        Log::info('Presale created', [
            'presale_id' => $presale->id,
            'email'      => $presale->email,
            'product'    => $presale->product,
            'amount'     => $presale->amount,
        ]);


        $amountInCents = intval(round($request->amount * 100));

        Stripe::setApiKey(env('STRIPE_SECRET'));

        Log::info('Creating Stripe Checkout Session', [
            'presale_id'    => $presale->id,
            'amount_cents'  => $amountInCents,
            'checkout_mode' => 'payment',
        ]);

        $session = Session::create([
            
            'line_items' => [[
                'price_data' => [
                    'currency' => 'usd',
                    'product_data' => [
                        'name' => "$request->product",
                    ],
                    'unit_amount' => $amountInCents,
                ],
                'quantity' => 1,
            ]],
            'mode' => 'payment',
            'success_url' => url('/checkout/success'),
            'cancel_url' => url('/checkout/cancel'),
            'metadata' => [
                'presale_id'    => (string) $presale->id,
                'email'         => $presale->email,
                'product'       => $presale->product,
                'product_name'  => $presale->product_name,
                'checkout_mode' => 'payment',
                'amount'        => (string) $presale->amount,
                'env'           => app()->environment(),
                'source'        => 'fitdonewell_web',
            ],
        ]);

        Log::info('Stripe Checkout Session created', [
            'presale_id' => $presale->id,
            'session_id' => $session->id,
        ]);

        return redirect($session->url);
    }

    public function mealCheckout(Request $request)
    {
        $items = $request->input('items', []);
        $comments = trim($request->input('comments', ''));

        $products = config('products');
        $total = 0;
        $summary = [];

        foreach ($items as $key => $qty) {
            if ($qty > 0 && isset($products[$key])) {
                $price = $products[$key]['price'];
                $total += $price * $qty;
                $summary[] = "{$qty} x {$products[$key]['name']}";
            }
        }

        if ($total <= 0) {
            return back()->withErrors('Please select at least one item.');
        }

        return view('checkout')
            ->with('amount', $total * 100)
            ->with('productName', 'Meal Prep Order')
            ->with('desc', implode(', ', $summary) . ($comments ? " | Notes: $comments" : ''))
            ->with('product', 'meal-prep-bundle');
    }

public function stripeWebhook(Request $request)
{
    Log::info('RAW STRIPE EVENT', [
        'payload' => json_decode($request->getContent(), true),
    ]);

    $payload = $request->getContent();
    $signature = $request->header('Stripe-Signature');
    $secret = config('services.stripe.webhook_secret_test');

    try {
        $event = Webhook::constructEvent($payload, $signature, $secret);
    } catch (\Throwable $e) {
        Log::error('Stripe webhook error', ['error' => $e->getMessage()]);
        return response('Invalid webhook', 400);
    }

    if ($event->type !== 'checkout.session.completed') {
        Log::info("Salida del WebHook", ["Tipo de evento diferente completed"] );
        return response('Ignored', 200);
    }

    $session = $event->data->object;
    $presaleId = $session->metadata->presale_id ?? null;

    if (!$presaleId) {
        Log::warning('Missing presale_id', ['session_id' => $session->id]);
        return response('Missing presale_id', 200);
    }

    $presale = Presale::find($presaleId);

    Log::info("Seguimiento", ["PresaleId $presaleId "] );

    if (!$presale) {
        Log::error('Presale not found', ['presale_id' => $presaleId]);
        return response('Presale not found', 200);
    }

    if ($presale->payment_status === 'paid') {
        Log::info('Presale already paid', ['presale_id' => $presaleId]);
        return response('Already paid', 200);
    }

    Log::info("Antes de Update", ["Todo Ok"] );

    $presale->stripe_session_id = $session->id;
    $presale->stripe_payment_intent_id = $session->payment_intent;
    $presale->stripe_customer_id = $session->customer;
    $presale->checkout_mode = $session->mode;
    $presale->payment_status = 'paid';
    $presale->stripe_event_id = $event->id;
    $presale->paid_at = now();

    $presale->save();

    Log::info('Presale marked as paid', [
        'presale_id' => $presale->id,
        'amount' => $presale->amount,
    ]);

    Mail::to($presale->email)
        ->bcc([
            'blpeterson000@icloud.com',
            'lalytawellness@gmail.com',
            'laly@fitdonewell.com',
            'brad@fitdonewell.com',
            'jairomarinx@gmail.com',
        ])
        ->send(new PresalePaidMail($presale));    



    return response('OK', 200);
}


public function mealPrepMonthly()
{
    // Reemplazado config() por env() para consistencia con tu método pay()
    Stripe::setApiKey(env('STRIPE_SECRET'));

    $session = \Stripe\Checkout\Session::create([
        'mode' => 'subscription',
        'line_items' => [
            [
                // Asegúrate que este ID de precio exista en tu dashboard de Stripe y sea recurrente
                'price' => 'price_1Sqyk4K6HXM7yt99HLensuX7',
                'quantity' => 1,
            ],
        ],
        'success_url' => url('/checkout/success'),
        'cancel_url' => url('/checkout/cancel'),
        'metadata' => [
            'product' => 'Meal Prep Monthly',
        ],
    ]);

    return redirect($session->url);
}








}
