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
      <source src="{{ asset('programs/assets/images/v1.mp4') }}" type="video/mp4" />
    </video>
    <div class="video-overlay header-text">
      <div class="caption">
                <h6>total wellness, inside and out</h6>
                <h2>programs that align your <br><em>whole life</em></h2>
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
        <h1 class="display-3 text-uppercase mb-0">Life Deserves</h1>
        <h5 class="text-gray fs-2"> Strong Bodies • <span class="text-primary"> Open Minds •</span> Kind Hearts •  </h5>
        <p class="text-body mb-4">At Fit.Done.Well., our programs are designed to support your full transformation—physically, mentally, and emotionally. Whether you seek to reset your habits, strengthen your body, or deepen your mindfulness, we offer guided paths that meet you where you are and take you where you want to go.</p>

    </div>
</div>

    
    <!-- Programe Start -->
    <div class="container-fluid programe position-relative px-5 mt-5" style="margin-bottom: 135px;">
        <div class="row g-5 gb-5">
            <div class="col-lg-4 col-md-6">
                <div class="bg-light rounded text-justify p-5">
                    <img src="{{ asset('strong-bodies.webp') }}" alt="body" class="img-fluid">
                    <h3 class="text-uppercase my-4 fs-3 text-center">Fit reset programs</h3>

                    <span class="text-justify">Fit.Reset.Programs. are a complete transformation plan designed to help you rebuild your energy, strength, and balance from the inside out. Through a progressive structure of workouts, mindful practices, and sustainable nutrition, it guides you step by step toward lasting results. This program is not a quick fix but a full reset for your body and mind, helping you create real, long term change and a healthier lifestyle that lasts.</span></span></p>

                    <div class="text-center">
                      <a href="{{ url('/programs/fit-reset-programs') }}"
                        style="display:inline-block;background-color:transparent;color:#000;border:1px solid #000;padding:0.3rem 1.5rem;border-radius:6px;text-decoration:none;font-weight:600;letter-spacing:1px;">
                        LEARN MORE
                      </a> 
                    </div>                   
                    
                    <div class="text-center mt-3 mb-1">
                      <a href="{{ url('/general-checkout/fit-forever') }}" class="" style="display:inline-block;background-color:#FCD804;color:#000;padding:0.6rem 4.5rem;border-radius:6px;text-decoration:none;font-weight:600;letter-spacing:1px;">Sign Up</a>
                    </div>
                </div>
            </div>
            <div class="col-lg-4 col-md-6">
                <div class="bg-light rounded text-justify p-5">
                    <img src="{{ asset('programs/assets/images/mi3.webp') }}" class="img-fluid">
                    <h3 class="text-uppercase my-4 fs-3 text-center">Mind reset programs</h3>

                    <span class="text-justify">Mind.Reset.Programs. are a complete mental wellness journey designed to clear stress, renew focus, and restore inner peace. It combines mindfulness training, guided reflection, and emotional awareness to help you realign your thoughts and habits. This program is a full reset for your mind, guiding you toward clarity, calm, and lasting mental strength.</span></span><br></p>

                    <div class="text-center">
                      <a href="{{ url('/programs/mind-reset-programs') }}"
                        style="display:inline-block;background-color:transparent;color:#000;border:1px solid #000;padding:0.3rem 1.5rem;border-radius:6px;text-decoration:none;font-weight:600;letter-spacing:1px;">
                        LEARN MORE
                      </a>
                    </div>
                    
                    <div class="text-center mt-3 mb-1">
                      <a href="{{ url('/general-checkout/well-for-real') }}" class="" style="display:inline-block;background-color:#FCD804;color:#000;padding:0.6rem 4.5rem;border-radius:6px;text-decoration:none;font-weight:600;letter-spacing:1px;">Sign Up</a>
                    </div>

                </div>
            </div>
            <div class="col-lg-4 col-md-6">
                <div class="bg-light rounded text-justify p-5">
                    <img src="{{ asset('kind-hearts.webp') }}" class="img-fluid" alt="">
                    <h3 class="text-uppercase my-4 fs-3 text-center">Life reset programs</h3>

                    <span class="text-justify">Life Reset Programs are a complete transformation experience that unites physical fitness and mental wellness into one powerful journey. It combines the strength building and energy of Fit.Reset.Program. with the mindfulness and inner clarity of Mind.Reset.Program. Together, they create a path to total renewal, restoring your body, refreshing your mind, and realigning your life with purpose, balance, and vitality.<br></span></span> </p>
                    
                    <div class="text-center">
                      <a href="{{ url('/programs/life-reset-programs') }}"
                        style="display:inline-block;background-color:transparent;color:#000;border:1px solid #000;padding:0.3rem 1.5rem;border-radius:6px;text-decoration:none;font-weight:600;letter-spacing:1px;">
                        LEARN MORE
                      </a>                    
                    </div>

                    <div class="text-center mt-3 mb-1">
                      <a href="{{ url('/general-checkout/love-for-life') }}" class="" style="display:inline-block;background-color:#FCD804;color:#000;padding:0.6rem 4.5rem;border-radius:6px;text-decoration:none;font-weight:600;letter-spacing:1px;">Sign Up</a>
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

    <div>
      <div class="row p-3">
        <div class="col-12 text-center ">
          <h1 class="text-uppercase fs-1">Our <span class="yellow">best</span> programs:</h1><br>
        </div>
      </div>
    </div>

    @include('programs.cover-fit4ever')

    @include('programs.cover-fitwithoutgym')




 




    <!-- Seccion de Fotos Final   -->
    <div class="mb-5 mt-5 text-center" style="padding: 120px 0px;
    background-image: url(bg-dark.png);
    background-position: center center;
    background-repeat: no-repeat;
    background-size: cover;
    text-align: center;
  ">
        <h5 class="text-primary text-uppercase fs-3"><strong>Meet Your</strong></h5>
        <h1 class="display-3 text-white text-uppercase mb-0">Life Guides</h1>
        <h5 class="text-gray fs-2"><span class="text-primary text-uppercase"> Grow With Us </span> </h5>
        <h4 class="text-white mb-4">Discover the path that fits you best,whether it’s daily habits, spiritual reset, or personalized training. Let us walk with you.</h4>

    </div>






    
    
 



@endsection