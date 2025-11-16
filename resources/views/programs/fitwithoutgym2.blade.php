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
      <source src="{{ asset('fwg.mp4') }}" type="video/mp4" />
    </video>
    <div class="video-overlay header-text">
      <div class="caption">
                <h6>Strong at home</h6>
                <h2>Fit<em>Without</em>Gym</h2>
        <div class="main-button scroll-to-section">
          <a href="#features">See what's coming</a>
        </div>
      </div>
    </div>
  </div>









<!-- Seccion de Fotos Inicio   -->
<div class="container">
    <div class="mb-5 mt-5 text-center">
        <h5 class="text-primary text-uppercase fs-3"><strong>What your</strong></h5>
        <h1 class="display-3 text-uppercase mb-0">Body Deserves</h1>
        <h5 class="text-gray fs-2"><span class="text-primary"> Strong Bodies • Open Minds • Kind Hearts • </span> </h5>
        <p class="text-body mb-4">Discover Fit.Without.Gym:
Your New Way to Transform
Your Body from Home</p>

    </div>
</div>

    
    <!-- Programe Start -->
    <div class="container-fluid programe position-relative px-5 mt-5" style="margin-bottom: 135px;">
        <div class="row g-5 gb-5">
            <div class="col-lg-4 col-md-6">
                <div class="bg-light rounded text-justify p-5">
                    <img src="{{ asset('t1/img/services/corey-laly.webp') }}" alt="body" class="img-fluid">
                    <h3 class="text-uppercase my-4 fs-1 text-center">Stronger From Home</h3>

                    <span class="text-justify">Discover how easy it is to build real strength without stepping into a gym. Our guided home friendly routines help you train smarter, feel energized, and see visible progress from the comfort of your own space. No equipment, no pressure, just results you can trust.</span></span></p>
               
                    
                    <div class="text-center mt-3 mb-1">
                      <a href="{{ url('general-checkout/fit-without-gym') }}" class="" style="display:inline-block;background-color:#FCD804;color:#000;padding:0.6rem 4.5rem;border-radius:6px;text-decoration:none;font-weight:600;letter-spacing:1px;">Sign Up $199 USD</a>
                    </div>
                </div>
            </div>
            <div class="col-lg-4 col-md-6">
                <div class="bg-light rounded text-justify p-5">
                    <img src="{{ asset('frc3.webp') }}" class="img-fluid">
                    <h3 class="text-uppercase my-4 fs-1 text-center">Your Space Your Transformation</h3>

                    <span class="text-justify">Your home becomes your personal fitness studio with simple routines designed for real people and real schedules. Fit Without Gym adapts to your pace and your environment, giving you the freedom to transform your body and energy on your terms.</span></span><br></p>


                    
                    <div class="text-center mt-3 mb-1">
                      <a href="{{ url('general-checkout/fit-without-gym') }}" class="" style="display:inline-block;background-color:#FCD804;color:#000;padding:0.6rem 4.5rem;border-radius:6px;text-decoration:none;font-weight:600;letter-spacing:1px;">Sign Up $199 USD</a>
                    </div>

                </div>
            </div>
            <div class="col-lg-4 col-md-6">
                <div class="bg-light rounded text-justify p-5">
                    <img src="{{ asset('booty.webp') }}" class="img-fluid" alt="">
                    <h3 class="text-uppercase my-4 fs-1 text-center">Fitness Made Simple</h3>

                    <span class="text-justify">Forget complicated workouts and confusing plans. Fit Without Gym gives you clear guided videos, easy home routines, and the motivation you need to stay consistent. Everything is simplified so you can focus on getting stronger, healthier, and more confident every day. <br></span></span> </p>
                    


                    <div class="text-center mt-3 mb-1">
                      <a href="{{ url('general-checkout/fit-without-gym') }}" class="" style="display:inline-block;background-color:#FCD804;color:#000;padding:0.6rem 4.5rem;border-radius:6px;text-decoration:none;font-weight:600;letter-spacing:1px;">Sign Up $199 USD</a>
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
    background-image: url({{ url('bg-dark.png') }});
    background-position: center center;
    background-repeat: no-repeat;
    background-size: cover;
    text-align: center;
  ">
        <h5 class="text-primary text-uppercase fs-3"><strong>Meet Your</strong></h5>
        <h1 class="display-3 text-white text-uppercase mb-0">Life Guides</h1>
        <h1 class="text-gray "><span class="text-primary text-uppercase">  </span> </h1>
        <h4 class="text-white mb-4">Explore healing from within through accessible rituals and restorative practices—designed to bring your body and spirit into harmony, no matter where you are.</h4>

    </div>

  



@endsection