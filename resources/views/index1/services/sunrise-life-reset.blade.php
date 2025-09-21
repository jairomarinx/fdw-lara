@extends('index1.app')  

@section('title', 'Fit.Done.Well.')

@section('index1.content')

    @include('index1.services.hero-services', [
        'hero_image'=>'t1/img/services/396b86d0-08d8-4d0b-afd7-40a95b4dc9dc.png',
        'h1_title' => 'Sunrise.Life.Reset',
        'h2_subtitle' => 'Open Minds. Sacred Space. Personal Rebirth.'
    ])

    <div class="mb-5 text-center mt-5">
        <h1 class="display-3 text-uppercase mb-0">Sunrise.Life.Reset</h1>
        <h4 class="text-body mb-4">A guided experience to realign, heal, and reconnect with your higher self</h4>

        <h5 class="text-gray fs-1"><span class="text-primary"> WHAT YOU GET</span></h5>
        <h6 class="text-gray fs-3">(Scottsdale Facility)</h6>
    </div>

    <div class="container-fluid programe position-relative px-5 mt-5" style="margin-bottom: 135px;">
        <div class="row g-5 gb-5">
            <div class="col-lg-4 col-md-6">
                <div class="bg-light rounded text-justify p-5">
                    <img src="{{ asset('t1/img/services/brad-sunrise3.webp') }}" alt="plan" class="img-fluid">
                    <h3 class="text-uppercase my-4 fs-1 text-center">Healing Space</h3>
                    <p class="text-center text-uppercase"><strong>Slow down, breathe, and allow space for transformation</strong><br><br></p>
                    <span class="text-justify">
This sacred session creates stillness so your mind and heart can reconnect.  
We hold space for emotions, dreams, and clarity to emerge.  
The energy of sunrise supports intention and renewal.  
This is a calm and powerful container to begin again.
                    </span>
                    <a href="{{ route('general-checkout',['product' => 'sunrise-life-reset']) }}" class="btn btn-warning d-block text-center mx-auto mt-4">Book Your Session</a>
                </div>
            </div>

            <div class="col-lg-4 col-md-6">
                <div class="bg-light rounded text-justify p-5">
                    <img src="{{ asset('t1/img/services/sunrise4.webp')  }}" class="img-fluid">
                    <h3 class="text-uppercase my-4 fs-1 text-center">Manifestation Map</h3>
                    <p class="text-center text-uppercase"><strong>Design your vision with grounded steps and spiritual flow</strong><br><br></p>
                    <span class="text-justify">
We help you map the life you want from a place of clarity and confidence.  
Define what you truly value and how to move toward it.  
This is your moment to shift from dreaming to creating.  
Your new chapter begins with your next step.
                    </span>
                    <a href="{{ route('general-checkout',['product' => 'sunrise-life-reset']) }}" class="btn btn-warning d-block text-center mx-auto mt-4">Start Your Reset</a>
                </div>
            </div>

            <div class="col-lg-4 col-md-6">
                <div class="bg-light rounded text-justify p-5">
                    <img src="{{ asset('t1/img/services/brad-sunrise.webp')  }}" class="img-fluid" alt="">
                    <h3 class="text-uppercase my-4 fs-1 text-center">Rebirth Energy</h3>
                    <p class="text-center text-uppercase"><strong>Reconnect with your power and rise with purpose</strong><br><br></p>
                    <span class="text-justify">
This session is a reset for your mind, spirit, and intentions.  
We help you create a clear energetic shift supported by practice.  
You leave feeling lighter, grounded, and realigned.  
This is a sunrise for your soul.
                    </span>
                    <a href="{{ route('general-checkout',['product' => 'sunrise-life-reset']) }}" class="btn btn-warning d-block text-center mx-auto mt-4">Make the Shift</a>
                </div>
            </div>
        </div>
    </div>

    <div class="text-center" style="background-color: #FDD709; padding: 4rem 2rem; border-radius: 2rem; box-shadow: 0 0 30px rgba(0,0,0,0.2); margin-top: 4rem;">
      <h2 class="fw-bold mb-4 text-black display-5">Book Your Sunrise Reset</h2>
      <p class="fs-4 mb-5 text-dark">
        Sacred 1:1 session to heal, align, and manifest your best self<br>
        <span class="fw-semibold">Only $129. A coach will contact you within 24 hours.</span>
      </p>
      <a href="{{ route('general-checkout',['product' => 'sunrise-life-reset']) }}" class="btn fw-bold" style="background-color: #28a745; color: white; font-size: 1.5rem; padding: 1.4rem 4rem; border-radius: 2rem;">
        Book Now
      </a>
    </div>

@endsection
