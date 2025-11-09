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
      <source src="{{ asset('programs/assets/images/mind.mp4') }}" type="video/mp4" />
    </video>
    <div class="video-overlay header-text">
      <div class="caption">
                <h6>reset your habits, renew your life</h6>
                <h2>grow stronger with <em>mind reset programs</em></h2>
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
        <h1 class="display-3 text-uppercase mb-0">Mind Deserves</h1>
        <h5 class="text-gray fs-2"><span class="text-primary"> Strong Bodies • Open Minds • Kind Hearts • </span> </h5>
        <p class="text-body mb-4">At Fit.Done.Well., our programs are designed to support your full transformation physically, mentally, and emotionally. Whether you seek to reset your habits, strengthen your body, or deepen your mindfulness, we offer guided paths that meet you where you are and take you where you want to go.</p>

    </div>
</div>

    
    <!-- Programe Start -->
    <div class="container-fluid programe position-relative px-5 mt-5" style="margin-bottom: 135px;">
        <div class="row g-5 gb-5">
            <div class="col-lg-4 col-md-6">
                <div class="bg-light rounded text-justify p-5">
                    <img src="{{ asset('programs/assets/images/mind1.webp') }}" alt="body" class="img-fluid">
                    <h3 class="text-uppercase my-4 fs-1 text-center">Mental Fitness Coaching</h3>

                    <span class="text-justify">One-on-one support from certified trainers who design every session around your goals, ensuring you stay motivated and on track.</span></span></p>
               
                    
                    <div class="text-center mt-3 mb-1">
                      <a href="{{ url('/general-checkout/mind-reset-program') }}" class="" style="display:inline-block;background-color:#FCD804;color:#000;padding:0.6rem 4.5rem;border-radius:6px;text-decoration:none;font-weight:600;letter-spacing:1px;">Sign Up $199 USD</a>
                    </div>
                </div>
            </div>
            <div class="col-lg-4 col-md-6">
                <div class="bg-light rounded text-justify p-5">
                    <img src="{{ asset('programs/assets/images/mind2.webp') }}" class="img-fluid">
                    <h3 class="text-uppercase my-4 fs-1 text-center">Cognitive Clarity Practices</h3>

                    <span class="text-justify">Progressive monthly training programs—full body, upper, lower, and core workouts—designed to build strength, endurance, and flexibility.</span></span><br></p>


                    
                    <div class="text-center mt-3 mb-1">
                      <a href="{{ url('/general-checkout/mind-reset-program') }}" class="" style="display:inline-block;background-color:#FCD804;color:#000;padding:0.6rem 4.5rem;border-radius:6px;text-decoration:none;font-weight:600;letter-spacing:1px;">Sign Up $199 USD</a>
                    </div>

                </div>
            </div>
            <div class="col-lg-4 col-md-6">
                <div class="bg-light rounded text-justify p-5">
                    <img src="{{ asset('programs/assets/images/mind3.webp') }}" class="img-fluid" alt="">
                    <h3 class="text-uppercase my-4 fs-1 text-center">Mindful Movement & Breathwork</h3>

                    <span class="text-justify">Access to our private Facebook group and weekly live check-ins so you stay accountable and celebrate wins with like-minded members. <br></span></span> </p>
                    


                    <div class="text-center mt-3 mb-1">
                      <a href="{{ url('/general-checkout/mind-reset-program') }}" class="" style="display:inline-block;background-color:#FCD804;color:#000;padding:0.6rem 4.5rem;border-radius:6px;text-decoration:none;font-weight:600;letter-spacing:1px;">Sign Up $199 USD</a>
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
      <div class="row" id="fwg1">
        <div class="col-12 text-center">
          <h1 style="font-weight: 800;">Mind <span style="color: #FCD804;">Reset </span> Program</h1>
        </div>
      </div>
    </div>

    <section class="section mb-5" id="features">
      <div class="container">
        <div class="row">
          <div class="col-12 ">
            <div class="section-heading">
              <h2></h2>
              <h2 class="fs-1"></h2>
            </div>
          </div>
        </div>
        <div class="row mt-4">
          <div class="col-lg-12">
            <a href="{{ url('/general-checkout/mind-reset-program') }}" class="">
            <div class="feature-item">
              <div class="text-center">
                <img src="{{ asset('programs/assets/images/mindh.webp') }}" alt="icon" class="img-fluid">
              </div>
              <div class="right-content p-2 text-center">
                <h2 style="color:black;">Mind <span class="yellow">Reset</span> Program.</h2>
                <br>
                <p style="color:black;">Experience mental clarity and emotional stability with self-paced sessions, guided breathwork, and mindset rituals—all from home.</p>
              </div>
                      <div style="text-align:center;margin-top:1.5rem;">
          <a href="{{ url('general-checkout/mind-reset-program') }}"
             style="display:inline-block;background-color:#FFCB2A;color:#000;padding:0.6rem 4.5rem;border-radius:6px;text-decoration:none;font-weight:600;letter-spacing:1px;">
            Sign Up 199 USD
          </a>
        </div>
            </div>
            </a>
          </div>
        </div>
      </div>
    </section>


    <!-- Seccion de Fotos Final   -->
    <div class="mb-5 mt-5 text-center" style="padding: 120px 0px;
    background-image: url({{ url('bg-dark.png') }});
    background-position: center center;
    background-repeat: no-repeat;
    background-size: cover;
    text-align: center;
  ">
        <h5 class="text-primary text-uppercase fs-3"><strong>Your mind matters</strong></h5>
        <h1 class="display-3 text-white text-uppercase mb-0">reset it with</h1>
        <h1 class="text-gray "><span class="text-primary text-uppercase"> Purpose </span> </h1>
        <h4 class="text-white mb-4">Start your journey toward clarity, calm, and conscious living with our Mind Reset Programs.</h4>

    </div>

  



@endsection