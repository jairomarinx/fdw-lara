@extends('index1.app') 

@section('title', 'Fit.Done.Well.')

@section('index1.content')

    @include('index1.services.hero-services', [
        'hero_image'=>'t1/img/services/brad-recipe3.webp',
        'h1_title' => 'Life.Reset.Consultation',
        'h2_subtitle' => 'Open Minds. Clear Path. Better Priorities.'
    ])

    <div class="mb-5 text-center mt-5">
        <h1 class="display-3 text-uppercase mb-0">Life.Reset.Consultation</h1>
        <h4 class="text-body mb-4">A 1:1 conversation to reconnect, realign, and reset your direction</h4>

        <h5 class="text-gray fs-1"><span class="text-primary"> WHAT YOU GET</span></h5>
        <h6 class="text-gray fs-3">(Face Time or Scottsdale Facility)</h6>
    </div>

    <div class="container-fluid programe position-relative px-5 mt-5" style="margin-bottom: 135px;">
        <div class="row g-5 gb-5">
            <div class="col-lg-4 col-md-6">
                <div class="bg-light rounded text-justify p-5">
                    <img src="{{ asset('t1/img/services/w1.webp') }}" alt="plan" class="img-fluid">
                    <h3 class="text-uppercase my-4 fs-1 text-center">Personal Insight</h3>
                    <p class="text-center text-uppercase"><strong>Step back, reflect, and reconnect with what matters</strong><br><br></p>
                    <span class="text-justify">
We guide you through a focused conversation to reset your mental space.  
Explore what is working, what is not, and what you truly need.  
Clarity begins with intention and space to reflect.  
This is a starting point for realignment and progress.
                    </span>
                    <a href="{{ route('checkout-fit-reset-consultation') }}" class="btn btn-warning d-block text-center mx-auto mt-4">Book Your Session</a>
                </div>
            </div>

            <div class="col-lg-4 col-md-6">
                <div class="bg-light rounded text-justify p-5">
                    <img src="{{ asset('t1/img/services/w2.webp')  }}" class="img-fluid">
                    <h3 class="text-uppercase my-4 fs-1 text-center">Focused Tools</h3>
                    <p class="text-center text-uppercase"><strong>Gain structure and guidance for your next steps</strong><br><br></p>
                    <span class="text-justify">
Leave the session with direction, not confusion.  
We help you clarify priorities and take action with intention.  
You receive simple tools that fit into your life.  
Nothing overwhelming, just what moves you forward.
                    </span>
                    <a href="{{ route('checkout-fit-reset-consultation') }}" class="btn btn-warning d-block text-center mx-auto mt-4">Start Your Reset</a>
                </div>
            </div>

            <div class="col-lg-4 col-md-6">
                <div class="bg-light rounded text-justify p-5">
                    <img src="{{ asset('t1/img/services/w3.webp')  }}" class="img-fluid" alt="">
                    <h3 class="text-uppercase my-4 fs-1 text-center">Mental Clarity</h3>
                    <p class="text-center text-uppercase"><strong>Feel grounded, clear, and empowered to move forward</strong><br><br></p>
                    <span class="text-justify">
This is not therapy. It is a space to check in and reset.  
Walk away with renewed energy and mental calm.  
You are not stuck. You are just one conversation away from direction.  
Strong body. Open mind. Kind heart.
                    </span>
                    <a href="{{ route('checkout-fit-reset-consultation') }}" class="btn btn-warning d-block text-center mx-auto mt-4">Make the Shift</a>
                </div>
            </div>
        </div>
    </div>

    <div class="text-center" style="background-color: #FDD709; padding: 4rem 2rem; border-radius: 2rem; box-shadow: 0 0 30px rgba(0,0,0,0.2); margin-top: 4rem;">
      <h2 class="fw-bold mb-4 text-black display-5">Book Your Life Reset Consultation</h2>
      <p class="fs-4 mb-5 text-dark">
        One-on-one session for reflection, clarity, and direction<br>
        <span class="fw-semibold">Just $129. One conversation can shift everything.</span>
      </p>
      <a href="/checkout-fit-reset-consultation" class="btn fw-bold" style="background-color: #28a745; color: white; font-size: 1.5rem; padding: 1.4rem 4rem; border-radius: 2rem;">
        Book Now
      </a>
    </div>

@endsection
