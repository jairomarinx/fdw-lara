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
        <h6 class="text-gray fs-3">(Phoenix, Sedona & Colombia)</h6>
    </div>

    <div class="container-fluid programe position-relative px-5 mt-5" style="margin-bottom: 135px;">
        <div class="row g-5 gb-5">
            <div class="col-lg-4 col-md-6">
                <div class="bg-light rounded text-justify p-5">
                    <img src="{{ asset('phoenix.webp') }}" alt="plan" class="img-fluid">
                    <h3 class="text-uppercase my-4 fs-1 text-center">Phoenix</h3>
                    <p class="text-center text-uppercase"><strong>Step away from routine and into transformation</strong><br><br></p>
                    <span class="text-justify">
A one-day urban wellness immersion to recharge your body and reset your mindset.
Experience a full day of guided movement, mindful nutrition, and conscious connection designed to help you pause, breathe, and realign.
                    </span>
                    <a href="{{ url('general-checkout/life-reset-retreat1') }}" class="btn btn-warning d-block mt-2" style="">1 Day Phoenix $490 Usd</a>

                </div>
            </div>

            <div class="col-lg-4 col-md-6">
                <div class="bg-light rounded text-justify p-5">
                    <img src="{{ asset('t1/img/services/s1.webp')  }}" class="img-fluid">
                    <h3 class="text-uppercase my-4 fs-1 text-center">Sedona</h3>
                    <p class="text-center text-uppercase"><strong>Mindful tools and movement to awaken your energy</strong><br><br></p>
                    <span class="text-justify">
A two-day deep reconnection experience in the sacred red rocks of Sedona.
Reset your body, clear your mind, and open your heart through movement, meditation, and nature’s healing energy.
                    </span>
                    <br>
                    <a href="{{ url('general-checkout/life-reset-retreat2') }}" class="btn btn-warning d-block mt-2" style="">2 Days Sedona $1200 Usd</a>
                </div>
            </div>

            <div class="col-lg-4 col-md-6">
                <div class="bg-light rounded text-justify p-5">
                    <img src="{{ asset('medellin.webp')  }}" class="img-fluid" alt="">
                    <h3 class="text-uppercase my-4 fs-1 text-center">Medellin</h3>
                    <p class="text-center text-uppercase"><strong>Return home renewed, grounded, and connected</strong><br><br></p>
                    <span class="text-justify">
Reconnect with your essence in the vibrant mountains of Medellín.
A 5-day immersive experience designed to reset your body, mind, and heart through mindful movement, conscious nutrition, music medicine, and deep rest.
                    </span>
                    <br><br>
                    <a href="{{ url('general-checkout/life-reset-retreat5') }}" class="btn btn-warning d-block mt-2" style="">5 Days Medellin $2900 Usd</a>
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
      <a href="{{ url('general-checkout/life-reset-retreat1') }}" class="btn fw-bold" style="background-color: #28a745; color: white; font-size: 1.5rem; padding: 1.4rem 4rem; border-radius: 2rem;">
        1 Day Phoenix $490 Usd
      </a> <br><br>      
      <a href="{{ url('general-checkout/life-reset-retreat2') }}" class="btn fw-bold" style="background-color: #28a745; color: white; font-size: 1.5rem; padding: 1.4rem 4rem; border-radius: 2rem;">
        2 Days Sedona $1200 Usd
      </a> <br><br>
      <a href="{{ url('general-checkout/life-reset-retreat5') }}" class="btn fw-bold" style="background-color: #28a745; color: white; font-size: 1.5rem; padding: 1.4rem 4rem; border-radius: 2rem;">5 Days Medellin $2900 Usd</a>
    </div>

@endsection
