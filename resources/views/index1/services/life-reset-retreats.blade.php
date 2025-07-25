@extends('index1.app')   

@section('title', 'Fit.Done.Well.')

@section('index1.content')

    @include('index1.services.hero-services', [
        'hero_image'=>'t1/img/services/r1.webp',
        'h1_title' => 'Life.Reset.Retreats',
        'h2_subtitle' => 'Kind Hearts. Deep Reset. Lasting Change.'
    ])

    <div class="mb-5 text-center mt-5">
        <h1 class="display-3 text-uppercase mb-0">Life.Reset.Retreats</h1>
        <h4 class="text-body mb-4">Multi-day experiences to restore your body, mind, and spirit</h4>

        <h5 class="text-gray fs-1"><span class="text-primary"> WHAT YOU GET</span></h5>
        <h6 class="text-gray fs-3">(Sedona & Colombia)</h6>
    </div>

    <div class="container-fluid programe position-relative px-5 mt-5" style="margin-bottom: 135px;">
        <div class="row g-5 gb-5">
            <div class="col-lg-4 col-md-6">
                <div class="bg-light rounded text-justify p-5">
                    <img src="{{ asset('t1/img/services/r2.webp') }}" alt="plan" class="img-fluid">
                    <h3 class="text-uppercase my-4 fs-1 text-center">Immersive Setting</h3>
                    <p class="text-center text-uppercase"><strong>Step away from routine and into transformation</strong><br><br></p>
                    <span class="text-justify">
Our retreats are held in sacred natural environments that inspire healing.  
Disconnect from distraction and connect with your purpose.  
Every detail is designed for peace, reflection, and transformation.  
This is your space to reset fully.
                    </span>
                    <a href="{{ route('checkout-fit-reset-consultation') }}" class="btn btn-warning d-block text-center mx-auto mt-4">Book Your Spot</a>
                </div>
            </div>

            <div class="col-lg-4 col-md-6">
                <div class="bg-light rounded text-justify p-5">
                    <img src="{{ asset('t1/img/services/s1.webp')  }}" class="img-fluid">
                    <h3 class="text-uppercase my-4 fs-1 text-center">Transformative Practices</h3>
                    <p class="text-center text-uppercase"><strong>Mindful tools and movement to awaken your energy</strong><br><br></p>
                    <span class="text-justify">
You will experience breathwork, movement, meditation, and guided journaling.  
We help you build habits that last long after the retreat ends.  
Each day brings clarity and renewed vitality.  
This is change you can feel.
                    </span>
                    <a href="{{ route('checkout-fit-reset-consultation') }}" class="btn btn-warning d-block text-center mx-auto mt-4">Start Your Reset</a>
                </div>
            </div>

            <div class="col-lg-4 col-md-6">
                <div class="bg-light rounded text-justify p-5">
                    <img src="{{ asset('t1/img/services/s4.webp')  }}" class="img-fluid" alt="">
                    <h3 class="text-uppercase my-4 fs-1 text-center">Lasting Impact</h3>
                    <p class="text-center text-uppercase"><strong>Return home renewed, grounded, and connected</strong><br><br></p>
                    <span class="text-justify">
This is not just a break. It is a rebirth.  
You leave with tools, insights, and community support.  
Our retreats awaken your heart and strengthen your path.  
Transformation begins here.
                    </span>
                    <a href="{{ route('checkout-fit-reset-consultation') }}" class="btn btn-warning d-block text-center mx-auto mt-4">Make the Shift</a>
                </div>
            </div>
        </div>
    </div>

    <div class="text-center" style="background-color: #FDD709; padding: 4rem 2rem; border-radius: 2rem; box-shadow: 0 0 30px rgba(0,0,0,0.2); margin-top: 4rem;">
      <h2 class="fw-bold mb-4 text-black display-5">Reserve Your Life Reset Retreat</h2>
      <p class="fs-4 mb-5 text-dark">
        Multi-day full-body reset experiences in Sedona and Colombia<br>
        <span class="fw-semibold">Coach will confirm dates after payment. Flights not included.</span>
      </p>
      <a href="/checkout-fit-reset-consultation" class="btn fw-bold" style="background-color: #28a745; color: white; font-size: 1.5rem; padding: 1.4rem 4rem; border-radius: 2rem;">
        Reserve Now
      </a>
    </div>

@endsection
