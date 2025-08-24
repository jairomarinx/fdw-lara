<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\FitController;
use App\Http\Controllers\CheckoutController;

Route::get('/', function () {
    return view('index1.home');
})->name('root');

Route::get("/services", function (){
    return view('index1.services');
})->name('route-services');

Route::prefix('services')->group(function(){
    Route::get('/',[FitController::class, "index"]);
    Route::get('/fit-reset-consultation',[FitController::class, "frc"])->name('fitness-reset-consultation');
    Route::get('/personal-fitness-training',[FitController::class,"personal_fitness_training"])->name('personal-fitness-training');
    Route::get('/group-fitness-training',[FitController::class,"group_fitness_training"])->name('group-fitness-training');
    Route::get('/nutrition-reset-consultation',[FitController::class,"nutrition_reset_consultation"])->name('nutrition-reset-consultation');
    Route::get('/grocery-reset-tour',[FitController::class,"grocery_reset_tour"])->name('grocery-reset-tour');
    Route::get('/weekly-meal-prepping',[FitController::class,"weekly_meal_prepping"])->name('weekly-meal-prepping');
    Route::get('/life-reset-consultation',[FitController::class,"life_reset_consultation"])->name('life-reset-consultation');
    Route::get('/sunrise-life-reset',[FitController::class,"sunrise_life_reset"])->name('sunrise-life-reset');
    Route::get('/life-reset-retreats',[FitController::class,"life_reset_retreats"])->name('life-reset-retreats'); 
    Route::get('/saturday-booty-camp',[FitController::class,"saturday_booty_camp"])->name('saturday-booty-camp');
    Route::get('/kayak-with-us',[FitController::class,"kayak_with_us"])->name('kayak-with-us');
});

Route::prefix('programs')->group(function(){
    Route::get('/fit-without-gym',[FitController::class, "fit_without_gym"])->name('fit-without-gym');
    Route::get('/mindfulness-morning-habits',[FitController::class,"mindfulness_morning_habits"])->name('mindfulness-morning-habits');
});

Route::prefix('/programs/fit-reset-programs')->group(function (){
    Route::get('/',[FitController::class, "fit_reset_programs"])->name('fit-reset-programs');
});

Route::prefix('/programs/mind-reset-programs')->group(function (){
    Route::get('/',[FitController::class, "mind_reset_programs"])->name('mind-reset-programs');
});


Route::prefix('/programs/life-reset-programs')->group(function (){
    Route::get('/',[FitController::class, "life_reset_programs"])->name('life-reset-programs');
});

Route::prefix('events')->group(function () {
    Route::get('/',[FitController::class, "events"])->name('main-events');
    Route::get('/website-launch-party',[FitController::class,"website_launch_party"])->name('website-launch-party');

});


Route::post('/save-contact',[FitController::class,"save_contact"])->name('save-contact');





Route::get('/checkout-fit-reset-consultation', [CheckoutController::class, 'show'])->name('checkout-fit-reset-consultation');
Route::get('/checkout-personal-fitness-training', [CheckoutController::class, 'checkout_personal_fitness_training'])->name('checkout-personal-fitness-training');



Route::post('/checkout/pay', [CheckoutController::class, 'pay'])->name('checkout.pay');

Route::get('/checkout/success', fn() => 'Payment successful!');
Route::get('/checkout/cancel', fn() => 'Payment canceled.');

Route::prefix('programs')->group(function(){
    Route::get("/mind-program", function (){
        return view('index1.programs');
    });
});

Route::get('/contacts', [FitController::class,"contacts"])->name('contacts');
Route::get('/donate',[FitController::class,"donate"]);
