<?php

?>


@extends('index1.app')

@section('title', 'Programs Fit.Done.Well.')

@section('index1.content')

<style>
/* ====== Fit Done Well - Banner Styles ====== */

.main-banner {
  position: relative;
  height: 100vh;
  overflow: hidden;
}

#bg-video {
  min-width: 100%;
  min-height: 100vh;
  max-width: 100%;
  max-height: 100vh;
  object-fit: cover;
  z-index: -1;
}

#bg-video::-webkit-media-controls {
  display: none !important;
}

.video-overlay {
  position: absolute;
  background-color: rgba(35, 45, 57, 0.8);
  top: 0;
  left: 0;
  bottom: 7px;
  width: 100%;
}

.main-banner .caption {
  text-align: center;
  position: absolute;
  width: 80%;
  left: 50%;
  top: 50%;
  transform: translate(-50%, -50%);
}

.main-banner .caption h6 {
  margin-top: 0px;
  font-size: 18px;
  text-transform: uppercase;
  font-weight: 800;
  color: #fff;
  letter-spacing: 0.5px;
}

.main-banner .caption h2 {
  margin-top: 30px;
  margin-bottom: 25px;
  font-size: 84px;
  text-transform: uppercase;
  font-weight: 800;
  color: #fff;
  letter-spacing: 1px;
}

.main-banner .caption h2 em {
  font-style: normal;
  color: #FCD804;
  font-weight: 900;
}

.main-button a {
  display: inline-block;
  font-size: 15px;
  padding: 12px 20px;
  background-color: #FCD804;
  color: #fff;
  text-align: center;
  font-weight: 400;
  text-transform: uppercase;
  transition: all 0.3s;
}

.main-button a:hover {
  background-color: #FCD804;
}

/* ====== Responsive ====== */
@media (max-width: 992px) {
  .main-banner .caption h2 {
    font-size: 64px;
  }
}
</style>

  <div class="main-banner" id="top">
    <video autoplay muted loop id="bg-video">
      <source src="{{ asset('events.mp4') }}" type="video/mp4" />
    </video>
    <div class="video-overlay header-text">
      <div class="caption">
        <h6>experience energy, healing & community</h6>
        <h2>join our <em class="yellow">live events</em></h2>
        <div class="main-button scroll-to-section">
          <a href="#features">See what's coming</a>
        </div>
      </div>
    </div>
  </div>



<!-- Inicio de Next Events  -->
  <section class="section mt-4" id="features">
    <div class="container-fluid">
      <div class="row">
        <div class="col-lg-6 offset-lg-3 text-center">
          <div class="section-heading">
            <h2 style="font-size: 50px;">Next <span class="yellow">Events</span></h2>
            <p>Every Fit Done Well event blends movement, music, mindfulness, and joy. These are real-life gatherings for real transformation.</p>

            @if (now()->lt(\Carbon\Carbon::create(2025, 10, 18)))                 
                <div style="text-align:center;font-size:40px;font-weight:bold;padding:1rem;color:#0a1d3a; background-color: white; padding: 20px;">
                  Kayak with Us on the Salt River<br>                    
                      Saturday, October 18<br>
                    <span style="font-size: 14px;">
                      6:00 am to 11:00 am<br>
                      Location: Saguaro Lake Guest Ranch<br>
                      13020 N. Bush Hwy Mesa, AZ 85215
                    </span>
                </div>
            @endif

 <style>
        .schedule-card {
            box-shadow: 0 4px 8px rgba(0,0,0,0.1);
            border-radius: 0.75rem;
            overflow: hidden;
            background-color: #fff;
        }
        .table-header {
            background-color: #222429;
            color: white;
            border-top-left-radius: 0.75rem;
            border-top-right-radius: 0.75rem;
            padding: 1.5rem;
            text-align: center;
        }
        .table-striped > tbody > tr:nth-of-type(odd) > * {
            background-color: #f8f9fa;
        }
        .table-hover > tbody > tr:hover > * {
            background-color: #e2e6ea;
        }
    </style>

<div class="container my-5">
    <div class="row justify-content-center">
        <div class="col-lg-10">
            <div class="schedule-card">
                <div class="table-header">
                    <h2 class="mb-0 fw-bold text-white">Upcoming Events & Retreats</h2>
                    <p class="lead">Plan your transformation and wellness journey</p>
                </div>

                <div class="p-4">
                    <table class="table table-striped table-hover align-middle">
                        <thead>
                            <tr>
                                <th scope="col">Event</th>
                                <th scope="col">Location</th>
                                <th scope="col">Date / Month</th>
                            </tr>
                        </thead>
                        <tbody>
                            <tr class="table-highlight">
                                <td>Saturday Booty Camp</td>
                                <td>Scottsdale</td>
                                <td>Saturday, Jan 10, 2026</td>
                            </tr>
                            
                            <tr>
                                <td>Life Reset Retreat</td>
                                <td>Scottsdale</td>
                                <td>Coming up Feb 2026</td>
                            </tr>
                            
                            <tr>
                                <td>Life Reset Retreat</td>
                                <td>Sedona</td>
                                <td>Coming up Apr 2026</td>
                            </tr>
                            
                            <tr>
                                <td>Life Reset Retreat</td>
                                <td>Colombia</td>
                                <td>Coming up Jul 2026</td>
                            </tr>
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>
</div>    

          </div>
        </div>
      </div>

      <br><br><br><br>



    </div>
  </section>





<!-- Seccion de Fotos Inicio   -->

    <div class="mb-5 text-center">
        <h5 class="text-primary text-uppercase fs-3"><strong>Our</strong></h5>
        <h1 class="display-3 text-uppercase mb-0">Reset Events</h1>
        <h5 class="text-gray fs-2"><span class="text-primary"> Strong Bodies • Open Minds • Kind Hearts • </span> </h5>
        <h4 class="text-body mb-4">With the aim to unlock your best life</h4>

    </div>

    
    <!-- Programe Start -->
    <div class="container-fluid programe position-relative px-5 mt-5" style="margin-bottom: 135px;">
        <div class="row g-5 gb-5">
            <div class="col-lg-4 col-md-6">
                <div class="bg-light rounded text-justify p-5">
                    <img src="{{ asset('a4.webp') }}" alt="body" class="img-fluid">
                    <h3 class="text-uppercase my-4 fs-1 text-center">Life Reset Retreats</h3>

                    <span class="text-justify">Transform your body, mind, and energy in immersive wellness retreats designed to help you reset, reconnect, and realign with your best self.</span></span></p>
                    
                    <div class="mb-4 border text-center" style="border-style: dashed; border-color:black; padding: 5px 10px; background-color: #222429; color: white;">
                      Feb, Apr, Jul 2026
                    </div>

                    <div class="text-center">
                      <a href="{{ route('life-reset-retreats') }}"
                        style="display:inline-block;background-color:transparent;color:#000;border:1px solid #000;padding:0.3rem 1.5rem;border-radius:6px;text-decoration:none;font-weight:600;letter-spacing:1px;">
                        LEARN MORE
                      </a> 
                    </div>                   
                    
                    <div class="text-center mt-3 mb-1">
                      <a href="{{ url('/general-checkout/life-reset-retreat5') }}" class="" style="display:inline-block;background-color:#FCD804;color:#000;padding:0.6rem 4.5rem;border-radius:6px;text-decoration:none;font-weight:600;letter-spacing:1px;">Sign Up</a>
                    </div>
                </div>
            </div>
            <div class="col-lg-4 col-md-6">
                <div class="bg-light rounded text-justify p-5">
                    <img src="{{ asset('booty.webp') }}" class="img-fluid">
                    <h3 class="text-uppercase my-4 fs-1 text-center">Saturday Booty Camp</h3>

                    <span class="text-justify">A fun and dynamic class focused on legs, glutes, and abs. Come sweat, laugh, and shape your body with us. Dates TBD based on demand. (Scottsdale)</span></span><br></p>

                    <div class="mb-4 border text-center" style="border-style: dashed; border-color:black; padding: 5px 10px; background-color: #222429; color: white;">
                      Jan 10, 2026
                    </div>  
                    
                    <div class="text-center">
                      <a href="{{ route('saturday-booty-camp') }}"
                        style="display:inline-block;background-color:transparent;color:#000;border:1px solid #000;padding:0.3rem 1.5rem;border-radius:6px;text-decoration:none;font-weight:600;letter-spacing:1px;">
                        LEARN MORE
                      </a>
                    </div>
                    
                    <div class="text-center mt-3 mb-1">
                      <a href="{{ url('/general-checkout/saturday-booty-camp') }}" class="" style="display:inline-block;background-color:#FCD804;color:#000;padding:0.6rem 4.5rem;border-radius:6px;text-decoration:none;font-weight:600;letter-spacing:1px;">Sign Up</a>
                    </div>

                </div>
            </div>
            <div class="col-lg-4 col-md-6">
                <div class="bg-light rounded text-justify p-5">
                    <img src="{{ asset('t1/img/services/ev3.webp') }}" class="img-fluid" alt="">
                    <h3 class="text-uppercase my-4 fs-1 text-center">Kayak with Us</h3>

                    <span class="text-justify">Kayaking trip through the scenic Salt River! Paddle among wildlife and desert cliffs. Scenic float with sections of swift water. Breakfast picnic included. Dates TBD. (Salt River, Arizona)<br></span></span> </p>
                    
                    <div class="mb-4 border text-center" style="border-style: dashed; border-color:black; padding: 5px 10px; background-color: #222429; color: white;">
                      Oct 18, 2025
                    </div>

                    <div class="text-center">
                      <a href="{{ route('kayak-with-us') }}"
                        style="display:inline-block;background-color:transparent;color:#000;border:1px solid #000;padding:0.3rem 1.5rem;border-radius:6px;text-decoration:none;font-weight:600;letter-spacing:1px;">
                        LEARN MORE
                      </a>                    
                    </div>

                    <div class="text-center mt-3 mb-1">
                      <a href="{{ url('/general-checkout/kayak-with-us') }}" class="" style="display:inline-block;background-color:#FCD804;color:#000;padding:0.6rem 4.5rem;border-radius:6px;text-decoration:none;font-weight:600;letter-spacing:1px;">Sign Up</a>
                    </div>

                </div>
            </div>

            <style>
                .marquee-container {
                    overflow: hidden;
                    white-space: nowrap;
                    width: 100%;
                    background: black;
                    padding: 10px;
                    display: flex;
                    align-items: center;
                }

                .marquee-content {
                    display: flex;
                    gap: 10px;
                    animation: marquee 50s linear infinite;
                }

                .marquee-content img {
                    height: 250px;
                    width: 400px;
                    object-fit: cover;
                    border-radius: 10px;
                    box-shadow: 0 4px 6px rgba(0, 0, 0, 0.3);
                }

                @keyframes marquee {
                    from {
                        transform: translateX(100%);
                    }

                    to {
                        transform: translateX(-100%);
                    }
                }
            </style>



        </div>
    </div>
    <!-- Seccion de Fotos Final   -->


    <!-- Seccion de Fotos Final   -->
    <div class="mb-5 mt-5 text-center" style="padding: 120px 0px;
    background-image: url(bg-dark.png);
    background-position: center center;
    background-repeat: no-repeat;
    background-size: cover;
    text-align: center;
  ">
        <h5 class="text-primary text-uppercase fs-3"><strong>Live</strong></h5>
        <h1 class="display-3 text-white text-uppercase mb-0">With Intention</h1>
        <h5 class="text-gray fs-2"><span class="text-primary text-uppercase"> Grow With Us </span> </h5>
        <h4 class="text-body mb-4"></h4>

    </div>

  



@endsection