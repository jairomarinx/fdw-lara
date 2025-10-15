@extends('index1.app')    

@section('title', 'Fit.Done.Well.')

@section('index1.content')

    @include('index1.services.hero-services', [
        'hero_image'=>'hero-booty.png',
        'h1_title' => 'Saturday.Booty.Camp',
        'h2_subtitle' => 'Strong Bodies. Fun Energy. Real Results.'
    ])

    <div class="mb-5 text-center mt-5">
        <h1 class="display-3 text-uppercase mb-0">Saturday.Booty.Camp</h1>
        <h4 class="text-body mb-4">A high-energy group class focused on legs, glutes, and abs</h4>

        <h5 class="text-gray fs-1"><span class="text-primary">Next: Jan 10/2026</span></h5>
        <h6 class="text-gray fs-3">(Scottsdale)</h6>
    </div>

    <div class="container-fluid programe position-relative px-5 mt-5" style="margin-bottom: 135px;">
        <div class="row g-5 gb-5">
            <div class="col-lg-4 col-md-6">
                <div class="bg-light rounded text-justify p-5">
                    <img src="{{ asset('booty1.webp') }}" alt="plan" class="img-fluid">
                    <h3 class="text-uppercase my-4 fs-1 text-center">Targeted Training</h3>
                    <p class="text-center text-uppercase"><strong>Legs, glutes, and abs done the right way</strong><br><br></p>
                    <span class="text-justify">
This class is built to challenge and activate your lower body.  
Expect focused circuits that sculpt and strengthen key areas.  
You will feel the burn and leave with confidence.  
Progress comes from smart movement and good energy.
                    </span>
                    <a href="{{ route('general-checkout',['product' => 'saturday-booty-camp']) }}" class="btn btn-warning d-block text-center mx-auto mt-4">Save Your Spot</a>
                </div>
            </div>

            <div class="col-lg-4 col-md-6">
                <div class="bg-light rounded text-justify p-5">
                    <img src="{{ asset('booty2.webp')  }}" class="img-fluid">
                    <h3 class="text-uppercase my-4 fs-1 text-center">Group Energy</h3>
                    <p class="text-center text-uppercase"><strong>Sweat together, stay motivated, and have fun</strong><br><br></p>
                    <span class="text-justify">
This is not just a workout. It is a vibe.  
We build community through movement and laughter.  
Everyone is welcome. Everyone leaves stronger.  
Let your weekend start with sweat and smiles.
                    </span>
                    <a href="{{ route('general-checkout',['product' => 'saturday-booty-camp']) }}" class="btn btn-warning d-block text-center mx-auto mt-4">Join the Camp</a>
                </div>
            </div>

            <div class="col-lg-4 col-md-6">
                <div class="bg-light rounded text-justify p-5">
                    <img src="{{ asset('booty3.webp')  }}" class="img-fluid" alt="">
                    <h3 class="text-uppercase my-4 fs-1 text-center">Body Confidence</h3>
                    <p class="text-center text-uppercase"><strong>Move with strength, celebrate your shape, and feel amazing</strong><br><br></p>
                    <span class="text-justify">
Booty Camp is about feeling powerful in your own skin.  
We train with purpose and intention, not pressure.  
Every squat, lunge, and crunch is a step toward strength.  
You bring the attitude, we bring the plan.
                    </span>
                    <a href="{{ route('general-checkout',['product' => 'saturday-booty-camp']) }}" class="btn btn-warning d-block text-center mx-auto mt-4">Make the Shift</a>
                </div>
            </div>
        </div>
    </div>

    <div class="text-center" style="background-color: #FDD709; padding: 4rem 2rem; border-radius: 2rem; box-shadow: 0 0 30px rgba(0,0,0,0.2); margin-top: 4rem;">
      <h2 class="fw-bold mb-4 text-black display-5">Join Saturday Booty Camp</h2>
      <p class="fs-4 mb-5 text-dark">
        Legs, glutes, and abs in a fun, sweaty group setting<br>
        <span class="fw-semibold">$29 per class. Dates will be confirmed based on demand.</span>
      </p>
      <a href="{{ route('general-checkout',['product' => 'saturday-booty-camp']) }}" class="btn fw-bold" style="background-color: #28a745; color: white; font-size: 1.5rem; padding: 1.4rem 4rem; border-radius: 2rem;">
        Sign Up
      </a>
    </div>

@endsection
