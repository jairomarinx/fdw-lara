@extends('index1.app')

@section('title', 'Fit.Done.Well.')

@section('index1.content')

    @include('index1.services.hero-services', [
        'hero_image'=>'t1/img/services/brad-recipe.webp',
        'h1_title' => 'Nutrition.Reset.Consultation',
        'h2_subtitle' => 'Rebuild Your Habits and Fuel Your Health with a 1:1 Nutrition Reset'
    ])

    <div class="mb-5 text-center mt-5">
        <h1 class="display-3 text-uppercase mb-0">Nutrition.Reset.Consultation</h1>
        <h4 class="text-body mb-4">Get clarity, structure, and expert support to reset your eating habits</h4>

        <h5 class="text-gray fs-1"><span class="text-primary"> WHAT YOU GET</span></h5>
        <h6 class="text-gray fs-3">(Face Time or Scottsdale Facility)</h6>
    </div>

    <div class="container-fluid programe position-relative px-5 mt-5" style="margin-bottom: 135px;">
        <div class="row g-5 gb-5">
            <div class="col-lg-4 col-md-6">
                <div class="bg-light rounded text-justify p-5">
                    <img src="{{ asset('t1/img/services/n3.webp') }}" alt="plan" class="img-fluid">
                    <h3 class="text-uppercase my-4 fs-1 text-center">Custom Plan</h3>
                    <p class="text-center text-uppercase"><strong>A realistic reset plan based on your body and goals</strong><br><br></p>
                    <span class="text-justify">
We evaluate your eating habits and lifestyle to create a custom plan.
You receive structure that matches your needs and daily rhythm.
Nothing extreme, just smart adjustments you can maintain.
This is sustainable nutrition that works for real life.
                    </span>
                    <a href="{{ route('checkout-fit-reset-consultation') }}" class="btn btn-warning d-block text-center mx-auto mt-4">Get Your Custom Plan</a>
                </div>
            </div>

            <div class="col-lg-4 col-md-6">
                <div class="bg-light rounded text-justify p-5">
                    <img src="{{ asset('t1/img/services/corey-recipe.webp')  }}" class="img-fluid">
                    <h3 class="text-uppercase my-4 fs-1 text-center">Action Steps</h3>
                    <p class="text-center text-uppercase"><strong>Clear and doable habits to change your nutrition</strong><br><br></p>
                    <span class="text-justify">
We break down the plan into small daily actions.
No confusion or overwhelm, just clear direction.
You know what to eat, when, and why.
This is how real change starts, one habit at a time.
                    </span>
                    <a href="{{ route('checkout-fit-reset-consultation') }}" class="btn btn-warning d-block text-center mx-auto mt-4">Start Your Reset</a>
                </div>
            </div>

            <div class="col-lg-4 col-md-6">
                <div class="bg-light rounded text-justify p-5">
                    <img src="{{ asset('t1/img/services/brad-recipe2.webp')  }}" class="img-fluid" alt="">
                    <h3 class="text-uppercase my-4 fs-1 text-center">Mind Shift</h3>
                    <p class="text-center text-uppercase"><strong>A new mindset to support better eating long-term</strong><br><br></p>
                    <span class="text-justify">
This is not about restriction. It is about reconnection.
We help you rethink your relationship with food in a healthy, kind way.
No more guilt. No more all or nothing.
You leave with clarity, peace, and a plan that respects your body.
                    </span>
                    <a href="{{ route('checkout-fit-reset-consultation') }}" class="btn btn-warning d-block text-center mx-auto mt-4">Make the Shift</a>
                </div>
            </div>
        </div>
    </div>


    <div class="text-center" style="background-color: #FDD709; padding: 4rem 2rem; border-radius: 2rem; box-shadow: 0 0 30px rgba(0,0,0,0.2); margin-top: 4rem;">
      <h2 class="fw-bold mb-4 text-black display-5">Start Your Nutrition Reset</h2>
      <p class="fs-4 mb-5 text-dark">
        One-on-one consultation to help you reset, rebuild, and feel your best<br>
        <span class="fw-semibold">Only 10 sessions offered each week</span>
      </p>
      <a href="/checkout-fit-reset-consultation" class="btn fw-bold" style="background-color: #28a745; color: white; font-size: 1.5rem; padding: 1.4rem 4rem; border-radius: 2rem;">
        Book Now for $129
      </a>
    </div>

@endsection
