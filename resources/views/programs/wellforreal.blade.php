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
                <h6>Wellness that feels real</h6>
                <h2>Well <em>4</em> Real</h2>
        <div class="main-button scroll-to-section">
          <a href="#features">See what's coming</a>
        </div>
      </div>
    </div>
  </div>


    <!-- About Well 4 Real -->
    <div class="container-fluid p-5" id="id_about">
        <div class="row gx-5">
            <div class="col-lg-5 mb-5 mb-lg-0" style="min-height: 500px;">
                <div class="position-relative h-100">
                    <img class="position-absolute w-100 h-100 rounded img-fluid" id="img_laly_fuerte" src="{{ asset('wfr1.jpg') }}" style="object-fit: cover; object-position: top;">
                    <img class="position-absolute w-100 h-100 rounded img-fluid  d-none" id="img_brad_fuerte" src="{{ asset('wfr1.jpg') }}" style="object-fit: cover; object-position: top;">
                </div>
            </div>
            <div class="col-lg-7">
                <div class="mb-4">
                    <h1 class="display-3 text-uppercase mb-0">Well <span class="yellow">4</span> Real</h1>
                    <h5 class="text-body text-uppercase fs-3">Your most <span class="yellow">balanced</span> self</h5>

                </div>
                <h4 class="text-body mb-4">A life changing wellness program designed to elevate your mind, energize your body, and strengthen your emotional world. No noise. No overwhelm. Just clarity, intention, and real transformation.</h4>

                <p class="mb-4 text-justify">
                    Well 4 Real gives you a complete lifestyle reset grounded in real practices that improve how you think, feel, move, and live. It offers structure, support, and guidance to help you create sustainable emotional balance, physical vitality, spiritual clarity, and daily habits that feel natural and empowering.
                    This is not a quick fix. It is a guided path to becoming the healthiest, strongest, and most centered version of yourself.
                </p>

                <div class="rounded bg-dark p-5">
                    <ul class="nav nav-pills justify-content-between mb-3">
                        <li class="nav-item w-50">
                            <a class="nav-link text-uppercase text-center w-100 active" id="about_us" data-bs-toggle="pill" onclick="about_us()" href="#pills-1">Real Wellness</a>
                        </li>
                        <li class="nav-item w-50">
                            <a class="nav-link text-uppercase text-center w-100" id="why_choose_us" data-bs-toggle="pill" href="#pills-2" onclick="why_choose_us()">The Full Experience</a>
                        </li>
                    </ul>
                    <div class="tab-content">
                        <div class="tab-pane fade show active" id="pills-1">
                            <p class="text-secondary mb-0 text-justify">
                                At Fit Done Well, we believe transformation starts from the inside. Well 4 Real helps you reconnect with your energy, reduce emotional noise, and build real mental and physical resilience. You get daily guidance that fits your life, empowering you to take clear steps toward balance and better living every week.
                                You do not need perfection. You only need the willingness to begin.
                            </p>
                        </div>
                        <div class="tab-pane fade" id="pills-2">
                            <p class="text-secondary mb-0 text-justify">
                                Well 4 Real includes everything you need for true wellness: emotional reset practices, guided weekly sessions, intentional habit building, simple nutrition guidelines, lifestyle tools, and a structured plan that supports your mind, body, and spirit together. This experience helps you reduce stress, gain clarity, build healthier routines, and reconnect with your personal power.
                            </p>
                        </div>
                    </div>
                </div>

            </div>
        </div>
    </div>
    <!-- About End -->

  <div class="row " id="features">
      <div class="col-12 text-center">
          <a href="{{ url('general-checkout/fit-without-gym') }}" style="display:inline-block;background-color:#FCD804;color:#000;padding:1rem 4.5rem;border-radius:6px;text-decoration:none;font-weight:800; font-size: 25px; letter-spacing:1px;">
              Join Now 499 USD
          </a>
      </div>
  </div>

<!-- Seccion de Fotos Inicio   -->
<div class="container">
    <div class="mb-5 mt-5 text-center">
        <h5 class="text-primary text-uppercase fs-3"><strong>Your Path</strong></h5>
        <h1 class="display-3 text-uppercase mb-0">To Real Wellness</h1>
        <h5 class="text-gray fs-2">What you Get</h5>
        <p class="text-body mb-4">The complete structure to reboot your emotional, physical, and mental wellbeing.</p>

    </div>
</div>




<!-- What You Get -->
<div class="container-fluid p-5">
    <div class="row g-5 mb-5">

        <!-- Guided Videos -->
        <div class="col-lg-4">
            <div class="d-flex flex-column align-items-center bg-dark rounded text-center py-5 px-3">
                <div class="bg-primary rounded-circle d-flex align-items-center justify-content-center mb-3"
                    style="width: 60px; height: 60px;">
                    <i class="fa fa-play fs-4 text-white"></i>
                </div>
                <h5 class="text-uppercase text-primary">Weekly Wellness Sessions</h5>
                <p class="text-secondary mb-0">
                    Guided video sessions that help you reset your mind, find calm, and build real inner strength.
                </p>
            </div>
        </div>

        <!-- Recipes -->
        <div class="col-lg-4">
            <div class="d-flex flex-column align-items-center bg-dark rounded text-center py-5 px-3">
                <div class="bg-primary rounded-circle d-flex align-items-center justify-content-center mb-3"
                    style="width: 60px; height: 60px;">
                    <i class="fa fa-utensils fs-4 text-white"></i>
                </div>
                <h5 class="text-uppercase text-primary">Simple Nutrition Guidelines</h5>
                <p class="text-secondary mb-0">
                    Easy principles to support your wellness with clarity, nourishment, and mindful eating.
                </p>
            </div>
        </div>

        <!-- Life Reset Journal -->
        <div class="col-lg-4">
            <div class="d-flex flex-column align-items-center bg-dark rounded text-center py-5 px-3">
                <div class="bg-primary rounded-circle d-flex align-items-center justify-content-center mb-3"
                    style="width: 60px; height: 60px;">
                    <i class="fa fa-book fs-4 text-white"></i>
                </div>
                <h5 class="text-uppercase text-primary">Life Reset Journal</h5>
                <p class="text-secondary mb-0">
                    Track your habits, reconnect with your intentions, and follow your personal growth journey.
                </p>
            </div>
        </div>

    </div>

    <div class="row g-5 mb-5">

        <!-- Home Friendly -->
        <div class="col-lg-4">
            <div class="d-flex flex-column align-items-center bg-dark rounded text-center py-5 px-3">
                <div class="bg-primary rounded-circle d-flex align-items-center justify-content-center mb-3"
                    style="width: 60px; height: 60px;">
                    <i class="fa fa-home fs-4 text-white"></i>
                </div>
                <h5 class="text-uppercase text-primary">From Your Space</h5>
                <p class="text-secondary mb-0">
                    A full reset journey that you can follow from home, at your own time, with complete comfort.
                </p>
            </div>
        </div>

        <!-- Flexible Time -->
        <div class="col-lg-4">
            <div class="d-flex flex-column align-items-center bg-dark rounded text-center py-5 px-3">
                <div class="bg-primary rounded-circle d-flex align-items-center justify-content-center mb-3"
                    style="width: 60px; height: 60px;">
                    <i class="fa fa-clock fs-4 text-white"></i>
                </div>
                <h5 class="text-uppercase text-primary">Flexible Timing</h5>
                <p class="text-secondary mb-0">
                    Follow the program on your own rhythm with structured and intentional weekly guidance.
                </p>
            </div>
        </div>

        <!-- Strength & Balance -->
        <div class="col-lg-4">
            <div class="d-flex flex-column align-items-center bg-dark rounded text-center py-5 px-3">
                <div class="bg-primary rounded-circle d-flex align-items-center justify-content-center mb-3"
                    style="width: 60px; height: 60px;">
                    <i class="fa fa-dumbbell fs-4 text-white"></i>
                </div>
                <h5 class="text-uppercase text-primary">Mind Body Balance</h5>
                <p class="text-secondary mb-0">
                    Build emotional resilience, mental clarity, inner calm, and a stronger sense of self.
                </p>
            </div>
        </div>

    </div>
</div>
<!-- What You Get -->

  <div class="row ">
      <div class="col-12 text-center">
          <a href="{{ url('general-checkout/fit-without-gym') }}" style="display:inline-block;background-color:#FCD804;color:#000;padding:1rem 4.5rem;border-radius:6px;text-decoration:none;font-weight:800; font-size: 25px; letter-spacing:1px;">
              Join Now 499 USD
          </a>
      </div>
  </div>

<!-- Final Section – Why Well 4 Real -->
<div class="mb-5 mt-5 text-center d-flex flex-column justify-content-center"
    style="
        padding: 120px 0;
        background-image: url({{ url('bg-dark.png') }});
        background-position: center center;
        background-repeat: no-repeat;
        background-size: cover;
    "
>

    <h5 class="text-primary text-uppercase fs-3 mb-2"><strong>Why Choose</strong></h5>
    <h1 class="display-3 text-white text-uppercase mb-4">Well <span class="yellow">4</span> Real</h1>

    <h4 class="text-white-50 mb-4 px-3 px-lg-5" style="max-width: 900px; margin: 0 auto;">
        Because real wellness is not a trend. It is a lifestyle you build step by step, with clear guidance and intentional habits.
    </h4>

    <p class="text-white fs-5 fw-light px-3 px-lg-5 mb-4" style="max-width: 900px; margin: 0 auto;">
        This program helps you reconnect with yourself, reduce emotional stress, recover your focus, and rediscover what balance truly feels like. No pressure. No complications. Just a guided path to your best self.
    </p>

    <div class="d-flex justify-content-center mb-4">
        <div class="bg-primary" style="height: 3px; width: 120px;"></div>
    </div>

    <div class="text-white fs-5 fw-light px-3 px-lg-5" style="max-width: 900px; margin: 0 auto;">

        <p class="mb-2"><i class="fa fa-check text-primary me-2"></i>You do not need to have experience.</p>
        <p class="mb-2"><i class="fa fa-check text-primary me-2"></i>You do not need a perfect routine.</p>
        <p class="mb-2"><i class="fa fa-check text-primary me-2"></i>You do not need more stress or pressure.</p>
        <p class="mb-2"><i class="fa fa-check text-primary me-2"></i>You only need the desire to feel better, live lighter, and reconnect with yourself.</p>

    </div>

</div>
<!-- End Final Section -->


<!-- Program Recommendations Section -->
<div class="text-center"
     style="
        padding: 120px 0;
        background-image: url('{{ url('bg-dark.png') }}');
        background-size: cover;
        background-position: center;
        background-repeat: no-repeat;
     ">

    <h5 class="text-primary text-uppercase fs-3 mb-2" 
        style="letter-spacing: 2px; font-weight: 700;">
        Program Recommendations
    </h5>

    <h1 class="text-white text-uppercase mb-4"
        style="font-size: 45px; font-weight: 900; line-height: 1.2;">
        Your Path to Real Progress
    </h1>

    <p class="text-white-50 fs-5 fw-light mb-4"
       style="
            max-width: 900px;
            margin: 0 auto;
            letter-spacing: 0.5px;
            line-height: 1.7;
       ">
       These recommendations help you stay consistent, reduce stress, build inner strength, and experience deep transformation during Well 4 Real.
    </p>

    <div class="d-flex justify-content-center mb-5">
        <div style="height: 3px; width: 120px; background-color: #0d6efd;"></div>
    </div>

    <div class="text-white fs-5 fw-light"
         style="
            max-width: 900px;
            margin: 0 auto;
            text-align: left;
            line-height: 1.8;
         ">

        <p class="mb-3">
            <i class="fa fa-check text-primary me-2"></i>
            Commit to the program for at least three months to achieve meaningful emotional and physical transformation.
        </p>

        <p class="mb-3">
            <i class="fa fa-check text-primary me-2"></i>
            Follow the weekly guidance to maintain balance and progress with intention.
        </p>

        <p class="mb-3">
            <i class="fa fa-check text-primary me-2"></i>
            Practice every session with presence, breathing deeply and staying mindful of your body and emotions.
        </p>

        <p class="mb-3">
            <i class="fa fa-check text-primary me-2"></i>
            Skip or modify practices if you feel overwhelmed. Wellness grows with patience, not pressure.
        </p>

        <p class="mb-3">
            <i class="fa fa-check text-primary me-2"></i>
            Maintain simple, clean nutrition to support your clarity, focus, and emotional balance.
        </p>

        <p class="mb-0">
            <i class="fa fa-check text-primary me-2"></i>
            Take time each week to journal your thoughts, progress, and emotional changes.
        </p>

    </div>

</div>
<!-- End Program Recommendations Section -->

  <div class="row mt-4">
      <div class="col-12 text-center">
          <a href="{{ url('general-checkout/fit-without-gym') }}" style="display:inline-block;background-color:#FCD804;color:#000;padding:1rem 4.5rem;border-radius:6px;text-decoration:none;font-weight:800; font-size: 25px; letter-spacing:1px;">
              Join Now 499 USD
          </a>
      </div>
  </div>


<!-- Our Content Begin  -->

<!-- Seccion de Fotos Inicio   -->
<div class="container">
    <div class="mb-5 mt-5 text-center">
        <h5 class="text-primary text-uppercase fs-3"><strong>Well 4 Real </strong></h5>
        <h1 class="display-3 text-uppercase mb-0">Our Content</h1>
    </div>
</div>

<!-- CONTENIDO SEMANAL NO SE MODIFICA (NO CAMBIASTE ASSETS NI ESTRUCTURA) -->
<!-- Mantengo toda la parte de días idéntica, solo cambio texto ligero para coherencia -->

  <div class="container-fluid p-5">
      <!-- Lunes Inicio   -->
      <div class="row">
        <div class="col-12 text-center">
          <h2>Monday</h2>
          <h3 class="fs-6">Wellness practice & Emotional clarity session</h3>
        </div>
      </div>
      <div class="row g-5 justify-content-center">

          <div class="col-lg-4">
              <a href="{{ url('/services') }}">
              <div class="blog-item">
                  <div class="position-relative overflow-hidden rounded-top">
                      <img class="img-fluid" src="{{ asset('fitwithoutgym/images/j2.webp') }}" alt="">
                  </div>
                  <div class="bg-dark d-flex align-items-center rounded-bottom p-4">
                      <div class="flex-shrink-0 text-center text-secondary border-end border-secondary pe-3 me-3">
                          <img src="{{ asset('logo-fdw.png') }}" alt="" class="img-fluid" style="max-width: clamp(40px, 10vw, 100px);">
                      </div>
                      <a class="h3 text-uppercase text-light" href="{{ url('/services') }}">WELLNESS SESSION <br><span class="text-primary h5">Emotional Reset</span></h4></a>
                  </div>
              </div>
              </a>
          </div>

          <div class="col-lg-4">
              <a href="{{ url('/our-programs') }}">
              <div class="blog-item">
                  <div class="position-relative overflow-hidden rounded-top">
                      <img class="img-fluid" src="{{ asset('fitwithoutgym/images/j1.webp') }}" alt="">
                  </div>
                  <div class="bg-dark d-flex align-items-center rounded-bottom p-4">
                      <div class="flex-shrink-0 text-center text-secondary border-end border-secondary pe-3 me-3">
                          <img src="{{ asset('logo-fdw.png') }}" alt="" class="img-fluid" style="max-width: clamp(40px, 10vw, 100px);">                        </div>
                      <a class="h3 text-uppercase text-light" href="{{ url('/our-programs') }}">MINDFUL NUTRITION <br><span class="text-primary h5">Start the Week Clean</span></h4></a>
                  </div>
              </div>
              </a>
          </div>
      </div>
      <!-- Lunes Final   -->

      <!-- Martes Inicio   -->
      <div class="row">
        <div class="col-12 text-center">
          <h2>Tuesday</h2>
          <h3 class="fs-6">Mental clarity practice & Lifestyle habit focus</h3>
        </div>
      </div>
      <div class="row g-5 justify-content-center">

          <div class="col-lg-4">
              <a href="{{ url('/services') }}">
              <div class="blog-item">
                  <div class="position-relative overflow-hidden rounded-top">
                      <img class="img-fluid" src="{{ asset('fitwithoutgym/images/j4.webp') }}" alt="">
                  </div>
                  <div class="bg-dark d-flex align-items-center rounded-bottom p-4">
                      <div class="flex-shrink-0 text-center text-secondary border-end border-secondary pe-3 me-3">
                          <img src="{{ asset('logo-fdw.png') }}" alt="" class="img-fluid" style="max-width: clamp(40px, 10vw, 100px);">
                      </div>
                      <a class="h3 text-uppercase text-light" href="{{ url('/services') }}">MENTAL RESET <br><span class="text-primary h5">Clear Mind Session</span></h4></a>
                  </div>
              </div>
              </a>
          </div>

          <div class="col-lg-4">
              <a href="{{ url('/our-programs') }}">
              <div class="blog-item">
                  <div class="position-relative overflow-hidden rounded-top">
                      <img class="img-fluid" src="{{ asset('cp1.webp') }}" alt="">
                  </div>
                  <div class="bg-dark d-flex align-items-center rounded-bottom p-4">
                      <div class="flex-shrink-0 text-center text-secondary border-end border-secondary pe-3 me-3">
                          <img src="{{ asset('logo-fdw.png') }}" alt="" class="img-fluid" style="max-width: clamp(40px, 10vw, 100px);">                        </div>
                      <a class="h3 text-uppercase text-light" href="{{ url('/our-programs') }}">MINDFUL MEAL <br><span class="text-primary h5">Nutrition Focus</span></h4></a>
                  </div>
              </div>
              </a>
          </div>
      </div>
      <!-- Martes Final   -->


      <!-- Miercoles Inicio   -->
      <div class="row">
        <div class="col-12 text-center">
          <h2>Wednesday</h2>
          <h3 class="fs-6">Emotional stability practice & Balanced eating</h3>
        </div>
      </div>
      <div class="row g-5 justify-content-center">

          <div class="col-lg-4">
              <a href="{{ url('/services') }}">
              <div class="blog-item">
                  <div class="position-relative overflow-hidden rounded-top">
                      <img class="img-fluid" src="{{ asset('fitwithoutgym/images/j6.webp') }}" alt="">
                  </div>
                  <div class="bg-dark d-flex align-items-center rounded-bottom p-4">
                      <div class="flex-shrink-0 text-center text-secondary border-end border-secondary pe-3 me-3">
                          <img src="{{ asset('logo-fdw.png') }}" alt="" class="img-fluid" style="max-width: clamp(40px, 10vw, 100px);">
                      </div>
                      <a class="h3 text-uppercase text-light" href="{{ url('/services') }}">EMOTIONAL BALANCE <br><span class="text-primary h5">Find Stability</span></h4></a>
                  </div>
              </div>
              </a>
          </div>

          <div class="col-lg-4">
              <a href="{{ url('/our-programs') }}">
              <div class="blog-item">
                  <div class="position-relative overflow-hidden rounded-top">
                      <img class="img-fluid" src="{{ asset('fitwithoutgym/images/j5.webp') }}" alt="">
                  </div>
                  <div class="bg-dark d-flex align-items-center rounded-bottom p-4">
                      <div class="flex-shrink-0 text-center text-secondary border-end border-secondary pe-3 me-3">
                          <img src="{{ asset('logo-fdw.png') }}" alt="" class="img-fluid" style="max-width: clamp(40px, 10vw, 100px);">                        </div>
                      <a class="h3 text-uppercase text-light" href="{{ url('/our-programs') }}">MINDFUL EATING <br><span class="text-primary h5">Stay Centered</span></h4></a>
                  </div>
              </div>
              </a>
          </div>
      </div>
      <!-- Miercoles Final   -->      


      <!-- Jueves Inicio   -->
      <div class="row">
        <div class="col-12 text-center">
          <h2>Thursday</h2>
          <h3 class="fs-6">Self reflection & Breathing practice for reset</h3>
        </div>
      </div>
      <div class="row g-5 justify-content-center">

          <div class="col-lg-4">
              <a href="{{ url('/services') }}">
              <div class="blog-item">
                  <div class="position-relative overflow-hidden rounded-top">
                      <img class="img-fluid" src="{{ asset('fitwithoutgym/images/j8.webp') }}" alt="">
                  </div>
                  <div class="bg-dark d-flex align-items-center rounded-bottom p-4">
                      <div class="flex-shrink-0 text-center text-secondary border-end border-secondary pe-3 me-3">
                          <img src="{{ asset('logo-fdw.png') }}" alt="" class="img-fluid" style="max-width: clamp(40px, 10vw, 100px);">
                      </div>
                      <a class="h3 text-uppercase text-light" href="{{ url('/services') }}">BREATHING RESET <br><span class="text-primary h5">Inner Clarity</span></h4></a>
                  </div>
              </div>
              </a>
          </div>

          <div class="col-lg-4">
              <a href="{{ url('/our-programs') }}">
              <div class="blog-item">
                  <div class="position-relative overflow-hidden rounded-top">
                      <img class="img-fluid" src="{{ asset('fitwithoutgym/images/j7.webp') }}" alt="">
                  </div>
                  <div class="bg-dark d-flex align-items-center rounded-bottom p-4">
                      <div class="flex-shrink-0 text-center text-secondary border-end border-secondary pe-3 me-3">
                          <img src="{{ asset('logo-fdw.png') }}" alt="" class="img-fluid" style="max-width: clamp(40px, 10vw, 100px);">                        </div>
                      <a class="h3 text-uppercase text-light" href="{{ url('/our-programs') }}">MINDFUL MEAL <br><span class="text-primary h5">Clean Nourishment</span></h4></a>
                  </div>
              </div>
              </a>
          </div>
      </div>
      <!-- Jueves Final   -->      


      <!-- Viernes Inicio   -->
      <div class="row">
        <div class="col-12 text-center">
          <h2>Friday</h2>
          <h3 class="fs-6">Emotional release & Inner calm session</h3>
        </div>
      </div>
      <div class="row g-5 justify-content-center">

          <div class="col-lg-4">
              <a href="{{ url('/services') }}">
              <div class="blog-item">
                  <div class="position-relative overflow-hidden rounded-top">
                      <img class="img-fluid" src="{{ asset('fitwithoutgym/images/j10.webp') }}" alt="">
                  </div>
                  <div class="bg-dark d-flex align-items-center rounded-bottom p-4">
                      <div class="flex-shrink-0 text-center text-secondary border-end border-secondary pe-3 me-3">
                          <img src="{{ asset('logo-fdw.png') }}" alt="" class="img-fluid" style="max-width: clamp(40px, 10vw, 100px);">
                      </div>
                      <a class="h3 text-uppercase text-light" href="{{ url('/services') }}">CALM SESSION <br><span class="text-primary h5">Release & Recover</span></h4></a>
                  </div>
              </div>
              </a>
          </div>

          <div class="col-lg-4">
              <a href="{{ url('/our-programs') }}">
              <div class="blog-item">
                  <div class="position-relative overflow-hidden rounded-top">
                      <img class="img-fluid" src="{{ asset('fitwithoutgym/images/j9.webp') }}" alt="">
                  </div>
                  <div class="bg-dark d-flex align-items-center rounded-bottom p-4">
                      <div class="flex-shrink-0 text-center text-secondary border-end border-secondary pe-3 me-3">
                          <img src="{{ asset('logo-fdw.png') }}" alt="" class="img-fluid" style="max-width: clamp(40px, 10vw, 100px);">                        </div>
                      <a class="h3 text-uppercase text-light" href="{{ url('/our-programs') }}">NOURISH YOUR BODY <br><span class="text-primary h5">End the Week Light</span></h4></a>
                  </div>
              </div>
              </a>
          </div>
      </div>
      <!-- Viernes Final   -->      


      <!-- Sabado Inicio   -->
      <div class="row">
        <div class="col-12 text-center">
          <h2>Saturday & Sunday</h2>
          <h3 class="fs-6">Personal reflection time & Optional movement routines</h3>
        </div>
      </div>
      <div class="row g-5 justify-content-center">

          <div class="col-lg-4">
              <a href="{{ url('/services') }}">
              <div class="blog-item">
                  <div class="position-relative overflow-hidden rounded-top">
                      <img class="img-fluid" src="{{ asset('g7.webp') }}" alt="">
                  </div>
                  <div class="bg-dark d-flex align-items-center rounded-bottom p-4">
                      <div class="flex-shrink-0 text-center text-secondary border-end border-secondary pe-3 me-3">
                          <img src="{{ asset('logo-fdw.png') }}" alt="" class="img-fluid" style="max-width: clamp(40px, 10vw, 100px);">
                      </div>
                      <a class="h3 text-uppercase text-light" href="{{ url('/services') }}">WEEKEND RESET <br><span class="text-primary h5">Move Light. Feel Centered.</span></h4></a>
                  </div>
              </div>
              </a>
          </div>

          <div class="col-lg-4">
              <a href="{{ url('/our-programs') }}">
              <div class="blog-item">
                  <div class="position-relative overflow-hidden rounded-top">
                      <img class="img-fluid" src="{{ asset('g8.webp') }}" alt="">
                  </div>
                  <div class="bg-dark d-flex align-items-center rounded-bottom p-4">
                      <div class="flex-shrink-0 text-center text-secondary border-end border-secondary pe-3 me-3">
                          <img src="{{ asset('logo-fdw.png') }}" alt="" class="img-fluid" style="max-width: clamp(40px, 10vw, 100px);">                        </div>
                      <a class="h3 text-uppercase text-light" href="{{ url('/our-programs') }}">LIGHT MOVEMENT <br><span class="text-primary h5">Optional Practice</span></h4></a>
                  </div>
              </div>
              </a>
          </div>
      </div>
      <!-- Sabado Final   -->


  </div>
  

  <div class="row ">
      <div class="col-12 text-center">
          <a href="{{ url('general-checkout/well-for-real') }}" style="display:inline-block;background-color:#FCD804;color:#000;padding:1rem 4.5rem;border-radius:6px;text-decoration:none;font-weight:800; font-size: 25px; letter-spacing:1px;">
              Join Now 499 USD
          </a>
      </div>
  </div>



@endsection
