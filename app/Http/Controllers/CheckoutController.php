<?php

namespace App\Http\Controllers;
use Illuminate\Http\Request;
use Stripe\Stripe;
use Stripe\Checkout\Session;
use App\Models\Presale;

use function PHPUnit\Framework\returnSelf;

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
        if (isset($request->name_complete))
        {
            return "Spam detected";
        }

        $presale = new Presale();
        $presale->name = $request->name;
        $presale->email = $request->email;
        $presale->phone = $request->phone;
        $presale->amount = $request->amount;
        $presale->product = $request->product;
        $presale->product_name = $request->product_name;
        $presale->description = $request->desc;
        $presale->save();


        $request->validate([
                'amount' => 'required|numeric|min:1.0',
            ]);

        $amountInCents = intval(round($request->amount * 100));

        Stripe::setApiKey(env('STRIPE_SECRET'));

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

}
