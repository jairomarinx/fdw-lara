<?php

namespace App\Http\Controllers;
use Illuminate\Http\Request;
use Stripe\Stripe;
use Stripe\Checkout\Session;


class CheckoutController extends Controller
{
     public function show()
    {
        $amount = 12900; // en centavos (120.00 USD)
        return view('checkout', compact('amount'));
    }

    public function checkout_personal_fitness_training()
    {
        $amount = 12900; // en centavos (120.00 USD)
        return view('checkout', compact('amount'));
    }

    public function pay(Request $request)
    {
        $amount = $request->amount;

        Stripe::setApiKey(env('STRIPE_SECRET'));

        $session = Session::create([
            'payment_method_types' => ['card'],
            'line_items' => [[
                'price_data' => [
                    'currency' => 'usd',
                    'product_data' => [
                        'name' => 'Fit.Reset.Consultation',
                    ],
                    'unit_amount' => $amount,
                ],
                'quantity' => 1,
            ]],
            'mode' => 'payment',
            'success_url' => url('/checkout/success'),
            'cancel_url' => url('/checkout/cancel'),
        ]);

        return redirect($session->url);
    }
}
