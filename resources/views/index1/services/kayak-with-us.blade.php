@extends('index1.app')  

@section('title', 'Fit.Done.Well.')

@section('index1.content')

    @include('index1.services.hero-services', [
        'hero_image'=>'t1/img/services/kayakhoriz.webp',
        'h1_title' => 'Kayak.with.Us.',
        'h2_subtitle' => 'Kind Hearts. River Flow. Nature Energy.'
    ])

    <div class="mb-5 text-center mt-5">
        <h1 class="display-3 text-uppercase mb-0">Kayak.with.Us.</h1>
        <h4 class="text-body mb-4">Scenic kayak adventure through Arizona’s Salt River</h4>

        <h5 class="text-gray fs-1"><span class="text-primary"> WHAT YOU GET</span></h5>
        <h6 class="text-gray fs-3">(Salt River, Arizona)</h6>
    </div>

    <div class="container-fluid programe position-relative px-5 mt-5" style="margin-bottom: 135px;">
        <div class="row g-5 gb-5">
            <div class="col-lg-4 col-md-6">
                <div class="bg-light rounded text-justify p-5">
                    <img src="{{ asset('river1.webp') }}" alt="plan" class="img-fluid">
                    <h3 class="text-uppercase my-4 fs-1 text-center">River Adventure</h3>
                    <p class="text-center text-uppercase"><strong>Paddle, float, and reconnect with nature</strong><br><br></p>
                    <span class="text-justify">
This is not just kayaking. It is connection.  
Cruise through slow and swift waters.  
Surround yourself with desert cliffs and wildlife.  
Let nature reset your energy.
                    </span>
                    <a href="{{ route('general-checkout', ['product' => 'kayak-with-us']) }}" class="btn btn-warning d-block text-center mx-auto mt-4">Book Your Spot</a>
                </div>
            </div>

            <div class="col-lg-4 col-md-6">
                <div class="bg-light rounded text-justify p-5">
                    <img src="{{ asset('river3.webp')  }}" class="img-fluid">
                    <h3 class="text-uppercase my-4 fs-1 text-center">Scenic Beauty</h3>
                    <p class="text-center text-uppercase"><strong>Wildlife, landscapes, and peaceful movement</strong><br><br></p>
                    <span class="text-justify">
Expect Arizona magic in every direction.  
Watch wild horses and birds in their natural home.  
This trip is both peaceful and energizing.  
You will not forget this view or this feeling.
                    </span>
                    <a href="{{ route('general-checkout', ['product' => 'kayak-with-us']) }}" class="btn btn-warning d-block text-center mx-auto mt-4">Reserve Your Kayak</a>
                </div>
            </div>

            <div class="col-lg-4 col-md-6">
                <div class="bg-light rounded text-justify p-5">
                    <img src="{{ asset('river-breakfast.webp')  }}" class="img-fluid" alt="">
                    <h3 class="text-uppercase my-4 fs-1 text-center">Breakfast Picnic</h3>
                    <p class="text-center text-uppercase"><strong>Fuel up with good food and great company</strong><br><br></p>
                    <span class="text-justify">
We start with a riverside breakfast picnic.  
Nourish your body before you hit the water.  
Simple food, mindful pace, and relaxed connection.  
This is movement with meaning.
                    </span>
                    <a href="{{ route('general-checkout', ['product' => 'kayak-with-us']) }}" class="btn btn-warning d-block text-center mx-auto mt-4">Join the Trip</a>
                </div>
            </div>
        </div>
    </div>

    <div class="text-center" style="background-color: #FDD709; padding: 4rem 2rem; border-radius: 2rem; box-shadow: 0 0 30px rgba(0,0,0,0.2); margin-top: 4rem;">
      <h2 class="fw-bold mb-4 text-black display-5">Kayak with Us on the Salt River</h2>
      <p class="fs-4 mb-5 text-dark">
        Scenic paddle through desert cliffs and wild beauty<br>
        <span class="fw-semibold"> <span style="background-color: rgb(0,230,0); color: white; weight: 600; padding: 10px; "> Only $129.</span> Includes breakfast. </span>
        <h2 style="color: #28A745; weight: 800; ">Next event: Saturday, October 18 6:00 am to 11:00 am</h2>
        <h3 class="text-black">Location: Saguaro Lake Guest Ranch 13020 N. Bush Hwy Mesa, AZ 85215</h3>
      </p>
      <a href="{{ route('general-checkout', ['product' => 'kayak-with-us']) }}" class="btn fw-bold" style="background-color: #28a745; color: white; font-size: 1.5rem; padding: 1.4rem 4rem; border-radius: 2rem;">
        Book Now
      </a>
    </div>

@endsection
