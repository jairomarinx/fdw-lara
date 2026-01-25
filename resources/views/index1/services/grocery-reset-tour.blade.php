@extends('index1.app')

@section('title', 'Fit.Done.Well.')

@section('index1.content')

    @include('index1.services.hero-services', [
        'hero_image'=>'t1/img/services/brad-backwrds.webp',
        'h1_title' => 'Grocery.Reset.Tour',
        'h2_subtitle' => 'Shop with Purpose. Eat with Confidence.'
    ])

    <div class="mb-5 text-center mt-5">
        <h1 class="display-3 text-uppercase mb-0">Grocery Reset Tour</h1>
        <h4 class="text-body mb-4">Navigate the supermarket with purpose and build smart eating habits</h4>

        <h5 class="text-gray fs-1"><span class="text-primary"> WHAT YOU GET</span></h5>
        <h6 class="text-gray fs-3">(Face Time or Scottsdale Facility)</h6>
    </div>

    <div class="container-fluid programe position-relative px-5 mt-5" style="margin-bottom: 135px;">
        <div class="row g-5 gb-5">
            <div class="col-lg-4 col-md-6">
                <div class="bg-light rounded text-justify p-5">
                    <img src="{{ asset('t1/img/services/grocery1.webp') }}" alt="plan" class="img-fluid">
                    <h3 class="text-uppercase my-4 fs-1 text-center">Custom Plan</h3>
                    <p class="text-center text-uppercase"><strong>A realistic grocery strategy based on your needs</strong><br><br></p>
                    <span class="text-justify">
We assess your current habits and guide you through smarter grocery decisions.  
You get a plan that matches your lifestyle and supports long-term health.  
No extremes, just practical steps that make sense.  
Fuel your body with intention, not confusion.
                    </span>
                    <a href="{{ route('meal','grocery-reset-tour') }}" class="btn btn-warning d-block text-center mx-auto mt-4">Get Your Custom Plan $199 USD</a>
                </div>
            </div>

            <div class="col-lg-4 col-md-6">
                <div class="bg-light rounded text-justify p-5">
                    <img src="{{ asset('t1/img/services/action.webp')  }}" class="img-fluid">
                    <h3 class="text-uppercase my-4 fs-1 text-center">Action Steps</h3>
                    <p class="text-center text-uppercase"><strong>Know what to choose, when, and why</strong><br><br></p>
                    <span class="text-justify">
We walk through the store and break down smart swaps and priorities.  
You learn how to read labels, build better meals, and avoid common traps.  
No guesswork, no gimmicks. Just practical tools for everyday decisions.  
Change starts in your cart.
                    </span>
                    <a href="{{ route('meal','grocery-reset-tour') }}" class="btn btn-warning d-block text-center mx-auto mt-4">Start Your Reset $199 USD</a>
                </div>
            </div>

            <div class="col-lg-4 col-md-6">
                <div class="bg-light rounded text-justify p-5">
                    <img src="{{ asset('t1/img/services/lalyrec.webp')  }}" class="img-fluid" alt="">
                    <h3 class="text-uppercase my-4 fs-1 text-center">Mind Shift</h3>
                    <p class="text-center text-uppercase"><strong>Reset how you think and feel about food</strong><br><br></p>
                    <span class="text-justify">
This is more than a shopping list. It is a mindset shift.  
We help you reconnect with food in a way that is kind and empowering.  
You stop fearing food and start using it as a tool for wellness.  
Confidence, peace, and clarity—one grocery trip at a time.
                    </span>
                    <a href="{{ route('meal','grocery-reset-tour') }}" class="btn btn-warning d-block text-center mx-auto mt-4">Make the Shift $199 USD</a>
                </div>
            </div>
        </div>
    </div>

    <div class="text-center" style="background-color: #FDD709; padding: 4rem 2rem; border-radius: 2rem; box-shadow: 0 0 30px rgba(0,0,0,0.2); margin-top: 4rem;">
      <h2 class="fw-bold mb-4 text-black display-5">Start Your Nutrition Reset</h2>
      <p class="fs-4 mb-5 text-dark">
        One-on-one supermarket tour to help you shop smarter, eat better, and feel amazing<br>
        <span class="fw-semibold">Only 10 sessions offered each week</span>
      </p>
      <a href="{{ route('meal','grocery-reset-tour') }}" class="btn fw-bold " style="background-color: #28a745; color: white; font-size: 1.5rem; padding: 1.4rem 4rem; border-radius: 2rem;">
        Book Now for only $199
      </a>
    </div>



@endsection
