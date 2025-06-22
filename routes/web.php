<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\FitController;
use App\Http\Controllers\CheckoutController;

Route::get('/', function () {
    return view('index1.app');
});

Route::get("/services", function (){
    return view('index1.services');
});

Route::prefix('services')->group(function(){
    Route::get('/',[FitController::class, "index"]);
});

Route::get('/checkout-fit-reset-consultation', [CheckoutController::class, 'show'])->name('checkout-fit-reset-consultation');
Route::get('/checkout-personal-fitness-training', [CheckoutController::class, 'checkout_personal_fitness_training'])->name('checkout-personal-fitness-training');



Route::post('/checkout/pay', [CheckoutController::class, 'pay'])->name('checkout.pay');

Route::get('/checkout/success', fn() => 'Payment successful!');
Route::get('/checkout/cancel', fn() => 'Payment canceled.');
