<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\FitController;
use App\Http\Controllers\CheckoutController;
use App\Http\Controllers\ZelleController;
use App\Http\Controllers\AdminController;

// Home
Route::get('/', fn() => view('index1.home'))->name('root');

// Services landing
Route::get("/services", fn() => view('index1.services'))->name('route-services');

// Services - detallados
Route::prefix('services')->group(function () {
    Route::get('/', [FitController::class, "index"]);
    Route::get('/fit-reset-consultation', [FitController::class, "frc"])->name('fitness-reset-consultation');
    Route::get('/personal-fitness-training', [FitController::class, "personal_fitness_training"])->name('personal-fitness-training');
    Route::get('/group-fitness-training', [FitController::class, "group_fitness_training"])->name('group-fitness-training');
    Route::get('/nutrition-reset-consultation', [FitController::class, "nutrition_reset_consultation"])->name('nutrition-reset-consultation');
    Route::get('/grocery-reset-tour', [FitController::class, "grocery_reset_tour"])->name('grocery-reset-tour');
    Route::get('/weekly-meal-prepping', [FitController::class, "weekly_meal_prepping"])->name('weekly-meal-prepping');
    Route::get('/life-reset-consultation', [FitController::class, "life_reset_consultation"])->name('life-reset-consultation');
    Route::get('/sunrise-life-reset', [FitController::class, "sunrise_life_reset"])->name('sunrise-life-reset');
    Route::get('/life-reset-retreats', [FitController::class, "life_reset_retreats"])->name('life-reset-retreats');
    Route::get('/saturday-booty-camp', [FitController::class, "saturday_booty_camp"])->name('saturday-booty-camp');
    Route::get('/kayak-with-us', [FitController::class, "kayak_with_us"])->name('kayak-with-us');
    Route::get('/intentional-make-over',[FitController::class,"intentional_make_over"])->name('intentional-make-over');
});

// Programs (agrupado y consolidado)
Route::prefix('programs')->group(function () {

    Route::get('/fit-reset-programs', [FitController::class, "fit_reset_programs"])->name('fit-reset-programs');
    Route::get('/mind-reset-programs', [FitController::class, "mind_reset_programs"])->name('mind-reset-programs');
    Route::get('/life-reset-programs', [FitController::class, "life_reset_programs"])->name('life-reset-programs');

    Route::get('/fit-without-gym', [FitController::class, "fit_without_gym"])->name('fit-without-gym');
    Route::get('/mindfulness-morning-habits', [FitController::class, "mindfulness_morning_habits"])->name('mindfulness-morning-habits');

    Route::get('/mind-program', fn() => view('index1.programs'));
    Route::get('/fit-forever', [FitController::class,"fit_forever"])->name('fit-forever');
});

// Events
Route::prefix('events')->group(function () {
    Route::get('/', [FitController::class, "events"])->name('main-events');
    Route::get('/website-launch-party', [FitController::class, "website_launch_party"])->name('website-launch-party');
});

// Contacts
Route::get('/contacts', [FitController::class, "contacts"])->name('contacts');
Route::get('/contact-us',[FitController::class,"contact_us"])->name('contact-us');
Route::post('/save-contact', [FitController::class, "save_contact"])->name('save-contact');

// Donations
Route::get('/donate', [FitController::class, "donate"]);

// Checkout
Route::get('/checkout-fit-reset-consultation', [CheckoutController::class, 'show'])->name('checkout-fit-reset-consultation');
Route::get('/checkout-personal-fitness-training', [CheckoutController::class, 'checkout_personal_fitness_training'])->name('checkout-personal-fitness-training');

Route::post('/checkout/pay', [CheckoutController::class, 'pay'])->name('checkout.pay');
Route::get('/checkout/success', fn() => view('success'));
Route::get('/checkout/cancel', fn() => 'Payment canceled.');

Route::post('/zelle-checkout',[ZelleController::class,"zelle_checkout"])->name('zelle-checkout');

Route::get('/our-programs', fn() => view('programs.root-programs')); //'programs.main')

Route::get('/general-checkout/{product}',[CheckoutController::class,'general_checkout'])->name('general-checkout');

Route::get('/new', function(){
    return view('index1.newtemplate');
});


