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

Route::get('/checkout', [CheckoutController::class, 'show'])->name('checkout');
Route::post('/checkout/pay', [CheckoutController::class, 'pay'])->name('checkout.pay');

Route::get('/checkout/success', fn() => 'Payment successful!');
Route::get('/checkout/cancel', fn() => 'Payment canceled.');
