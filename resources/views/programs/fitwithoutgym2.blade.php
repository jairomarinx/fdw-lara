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


    <!-- About fIT dONE well -->
    <div class="container-fluid p-5" id="id_about">
        <div class="row gx-5">
            <div class="col-lg-5 mb-5 mb-lg-0" style="min-height: 500px;">
                <div class="position-relative h-100">
                    <img class="position-absolute w-100 h-100 rounded img-fluid" id="img_laly_fuerte" src="{{ asset('g1.jpg') }}" style="object-fit: cover; object-position: top;">
                    <img class="position-absolute w-100 h-100 rounded img-fluid  d-none" id="img_brad_fuerte" src="{{ asset('g1.jpg') }}" style="object-fit: cover; object-position: top;">
                </div>
            </div>
            <div class="col-lg-7">
                <div class="mb-4">
                    <h1 class="display-3 text-uppercase mb-0">Fit <span class="yellow">Without</span> Gym</h1>
                    <h5 class="text-body text-uppercase fs-3">Stronger, <span class="yellow">leaner</span>, fitter </h5>

                </div>
                <h4 class="text-body mb-4">A simple and powerful home workout program designed for real people with real lives. No equipment. <span class="yellow"> No gym.</span> No confusion. Just results.</h4>
                <p class="mb-4 text-justify">Experience a simple and powerful way to transform your body <span class="fw-bold yellow ">without stepping inside a gym.</span><span class="fw-bold">Fit Without Gym</span>  was created for real people with real schedules, offering easy to follow routines, guided workouts, and intentional habits that help you build strength, stay consistent, and feel amazing in your own space.

Forget crowded gyms, expensive machines, and complicated fitness plans. This program gives you clarity, structure, and support, helping you move with confidence no matter your starting point. Whether you want to begin your fitness journey or restart after a long pause, <span class="fw-bold"> Fit Without Gym</span>  adapts to your pace and your lifestyle, making transformation truly possible.</p>
                <div class="rounded bg-dark p-5">
                    <ul class="nav nav-pills justify-content-between mb-3">
                        <li class="nav-item w-50">
                            <a class="nav-link text-uppercase text-center w-100  active " id="about_us" data-bs-toggle="pill" onclick="about_us()" href="#pills-1">Stronger From Home</a>
                        </li>
                        <li class="nav-item w-50">
                            <a class="nav-link text-uppercase text-center w-100 " id="why_choose_us" data-bs-toggle="pill" href="#pills-2" onclick="why_choose_us()">The Complete Experience</a>
                        </li>
                    </ul>
                    <div class="tab-content">
                        <div class="tab-pane fade show active" id="pills-1">
                            <p class="text-secondary mb-0 text-justify">At Fit Done Well, we believe that strength, growth, and well being come from aligning Body, Mind, and Spirit. This program helps you move better, feel better, and live better, using simple home practices that fit your time and your needs. No gym pressure. No judgment. Just guided support to help you progress every week.

You do not need equipment. You do not need experience. You only need the desire to improve your life one workout at a time.</p>
                        </div>
                        <div class="tab-pane fade" id="pills-2">
                            <p class="text-secondary mb-0 text-justify">Fit Without Gym gives you a complete home training system designed to help you get stronger, leaner, and more energized without equipment or complicated routines. You receive guided workout videos for every day of the week, healthy clean recipes for your weekdays, and our Life Reset Journal to help you stay motivated and consistent. Everything is designed to fit your time, your space, and your pace, making transformation easier and more achievable than ever.</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- About End -->

  <div class="row ">
      <div class="col-12 text-center">
          <a href="{{ url('general-checkout/fit-without-gym') }}" style="display:inline-block;background-color:#FFCB2A;color:#000;padding:1rem 4.5rem;border-radius:6px;text-decoration:none;font-weight:800; font-size: 25px; letter-spacing:1px;">
              Subscribe 199 USD
          </a>
      </div>
  </div>

<!-- Seccion de Fotos Inicio   -->
<div class="container">
    <div class="mb-5 mt-5 text-center">
        <h5 class="text-primary text-uppercase fs-3"><strong>What your</strong></h5>
        <h1 class="display-3 text-uppercase mb-0">Body Deserves</h1>
        <h5 class="text-gray fs-2"> What you Get</h5>
        <p class="text-body mb-4">Discover Fit.Without.Gym:
Your New Way to Transform
Your Body from Home</p>

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
                <h5 class="text-uppercase text-primary">Guided Workouts</h5>
                <p class="text-secondary mb-0">
                    7 weekly guided workout videos that keep you energized, motivated, and consistent.
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
                <h5 class="text-uppercase text-primary">Clean Recipes</h5>
                <p class="text-secondary mb-0">
                    5 easy and delicious weekday recipes to boost nutrition and support your progress.
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
                    Access to our Life Reset Journal to track habits, stay motivated, and build consistency.
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
                <h5 class="text-uppercase text-primary">Home Friendly</h5>
                <p class="text-secondary mb-0">
                    Routines designed for any space. No machines, no equipment. Just your willpower.
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
                    Train on your schedule with short, effective sessions that fit your daily life.
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
                <h5 class="text-uppercase text-primary">Strength & Balance</h5>
                <p class="text-secondary mb-0">
                    Improve strength, stamina, and balance with safe and effective guided training.
                </p>
            </div>
        </div>

    </div>
</div>
<!-- What You Get -->



  <div class="row ">
      <div class="col-12 text-center">
          <a href="{{ url('general-checkout/fit-without-gym') }}" style="display:inline-block;background-color:#FFCB2A;color:#000;padding:1rem 4.5rem;border-radius:6px;text-decoration:none;font-weight:800; font-size: 25px; letter-spacing:1px;">
              Subscribe 199 USD
          </a>
      </div>
  </div>

<!-- Final Section – Why Fit Without Gym -->
<div class="mb-5 mt-5 text-center d-flex flex-column justify-content-center"
    style="
        padding: 120px 0;
        background-image: url({{ url('bg-dark.png') }});
        background-position: center center;
        background-repeat: no-repeat;
        background-size: cover;
    "
>




    <!-- Title -->
    <h5 class="text-primary text-uppercase fs-3 mb-2"><strong>Why Choose</strong></h5>
    <h1 class="display-3 text-white text-uppercase mb-4">Fit <span class="yellow">Without</span> Gym  </h1>

    <!-- Subtitle -->
    <h4 class="text-white-50 mb-4 px-3 px-lg-5" style="max-width: 900px; margin: 0 auto;">
        Fit Without Gym is not just a workout plan. It is your opportunity to take control of your health, your energy, 
        and your happiness with no limits. 
    </h4>

    <!-- Main Text -->
    <p class="text-white fs-5 fw-light px-3 px-lg-5 mb-4" style="max-width: 900px; margin: 0 auto;">
        Every video, every session, and every intentional step is designed to guide you toward a stronger body, a sharper mind, 
        and a lighter, more confident life.
    </p>

    <!-- Divider Line -->
    <div class="d-flex justify-content-center mb-4">
        <div class="bg-primary" style="height: 3px; width: 120px;"></div>
    </div>

    <!-- Bullet Style Text -->
    <div class="text-white fs-5 fw-light px-3 px-lg-5" style="max-width: 900px; margin: 0 auto;">
        <p class="mb-2"><i class="fa fa-check text-primary me-2"></i>You do not need to be fit to start.</p>
        <p class="mb-2"><i class="fa fa-check text-primary me-2"></i>You do not need equipment or machines.</p>
        <p class="mb-2"><i class="fa fa-check text-primary me-2"></i>You do not need hours of free time.</p>
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

    <!-- Title -->
    <h5 class="text-primary text-uppercase fs-3 mb-2" 
        style="letter-spacing: 2px; font-weight: 700;">
        Program Recommendations
    </h5>

    <!-- Subtitle -->
    <h1 class="text-white text-uppercase mb-4"
        style="font-size: 45px; font-weight: 900; line-height: 1.2;">
        Your Path to Safe, Effective Progress
    </h1>

    <!-- Description -->
    <p class="text-white-50 fs-5 fw-light mb-4"
       style="
            max-width: 900px;
            margin: 0 auto;
            letter-spacing: 0.5px;
            line-height: 1.7;
       ">
        These simple guidelines are designed to help you stay consistent, avoid injury,  
        and experience real results during your Fit Without Gym journey.
    </p>

    <!-- Divider -->
    <div class="d-flex justify-content-center mb-5">
        <div style="height: 3px; width: 120px; background-color: #0d6efd;"></div>
    </div>

    <!-- Bullet List -->
    <div class="text-white fs-5 fw-light"
         style="
            max-width: 900px;
            margin: 0 auto;
            text-align: left;
            line-height: 1.8;
         ">

        <p class="mb-3">
            <i class="fa fa-check text-primary me-2"></i>
            Practice the program consistently for at least three months to achieve meaningful transformation.
        </p>

        <p class="mb-3">
            <i class="fa fa-check text-primary me-2"></i>
            Follow the order of each day for balanced muscle distribution and safer progression.
        </p>

        <p class="mb-3">
            <i class="fa fa-check text-primary me-2"></i>
            Perform each routine using the pattern of 3 sets of 12 reps per exercise, resting less than one minute between sets.
        </p>

        <p class="mb-3">
            <i class="fa fa-check text-primary me-2"></i>
            Skip exercises that feel too difficult until you gain enough confidence and strength to complete them safely.
        </p>

        <p class="mb-3">
            <i class="fa fa-check text-primary me-2"></i>
            Maintain correct form at all times: back straight, chest up, pressure on your heels,  
            and full joint extension without locking them.
        </p>

        <p class="mb-0">
            <i class="fa fa-check text-primary me-2"></i>
            Follow the clean recipes for weekday lunches and dinners, and enjoy balanced nutrition on weekends and breakfast.
        </p>

    </div>

</div>
<!-- End Program Recommendations Section -->


  <div class="row mt-4">
      <div class="col-12 text-center">
          <a href="{{ url('general-checkout/fit-without-gym') }}" style="display:inline-block;background-color:#FFCB2A;color:#000;padding:1rem 4.5rem;border-radius:6px;text-decoration:none;font-weight:800; font-size: 25px; letter-spacing:1px;">
              Subscribe 199 USD
          </a>
      </div>
  </div>


<!-- Our Content Begin  -->

<!-- Seccion de Fotos Inicio   -->
<div class="container">
    <div class="mb-5 mt-5 text-center">
        <h5 class="text-primary text-uppercase fs-3"><strong>Fit Without Gym </strong></h5>
        <h1 class="display-3 text-uppercase mb-0">Our Content</h1>
    </div>
</div>

  <div class="container-fluid p-5">
      <!-- Lunes Inicio   -->
      <div class="row">
        <div class="col-12 text-center">
          <h2>Monday</h2>
          <h3 class="fs-6">Lunch/Dinner Recipe & Leg Workout with a chair</h3>
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
                      <a class="h3 text-uppercase text-light" href="{{ url('/services') }}">TODAY'S WORKOUT <br><span class="text-primary h5"> Stronger Legs Today</span></h4></a>
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
                      <a class="h3 text-uppercase text-light" href="{{ url('/our-programs') }}">TODAY'S RECIPE <br><span class="text-primary h5">Eat Clean. Feel Amazing</span></h4></a>
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
          <h3 class="fs-6">Lunch/Dinner Recipe & Upper Body Workout with a chair</h3>
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
                      <a class="h3 text-uppercase text-light" href="{{ url('/services') }}">TODAY'S WORKOUT <br><span class="text-primary h5"> Upper Body Strength With a Chair</span></h4></a>
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
                      <a class="h3 text-uppercase text-light" href="{{ url('/our-programs') }}">TODAY'S RECIPE <br><span class="text-primary h5">Eat Clean. Build Strength.</span></h4></a>
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
          <h3 class="fs-6">Lunch/Dinner Recipe & Full Body Workout with a bottle of water</h3>
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
                      <a class="h3 text-uppercase text-light" href="{{ url('/services') }}">TODAY'S WORKOUT <br><span class="text-primary h5"> Full Body With a Water Bottle</span></h4></a>
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
                      <a class="h3 text-uppercase text-light" href="{{ url('/our-programs') }}">TODAY'S RECIPE <br><span class="text-primary h5">Fuel Your Body. Stay Lean.</span></h4></a>
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
          <h3 class="fs-6">Lunch/Dinner Recipe &  Full Body Mat workout<br>*Push-ups and planks can be performed with support on the knees instead of the toes for those who need an easier modification.
</h3>
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
                      <a class="h3 text-uppercase text-light" href="{{ url('/services') }}">TODAY'S WORKOUT <br><span class="text-primary h5"> Modified push-ups and planks available</span></h4></a>
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
                      <a class="h3 text-uppercase text-light" href="{{ url('/our-programs') }}">TODAY'S RECIPE <br><span class="text-primary h5">Clean Eating for All-Day Energy</span></h4></a>
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
          <h3 class="fs-6">*Exercises can be performed without the band or get yours to add resistance <a href="https://www.amazon.com/s?me=A3ICCKPR3TSRVY&ref=sf_seller_app_share_new">here</a> .</h3>
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
                      <a class="h3 text-uppercase text-light" href="{{ url('/services') }}">TODAY'S WORKOUT <br><span class="text-primary h5"> Leg Day With Bands (or No Bands)</span></h4></a>
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
                      <a class="h3 text-uppercase text-light" href="{{ url('/our-programs') }}">TODAY'S RECIPE <br><span class="text-primary h5">Lean Eating to End the Week Strong</span></h4></a>
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
          <h3 class="fs-6">Moderate freedom with balanced nutrition on the weekends and two optional extra routines to perform one day of the weekend.<Br>*Exercises can be performed with or without resistance.</h3>
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
                      <a class="h3 text-uppercase text-light" href="{{ url('/services') }}">OPTIONAL WEEKEND ROUTINE <br><span class="text-primary h5"> Move Light. Feel Better.</span></h4></a>
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
                      <a class="h3 text-uppercase text-light" href="{{ url('/our-programs') }}">Fat Burning Exercises <br><span class="text-primary h5"></span></h4></a>
                  </div>
              </div>
              </a>
          </div>
      </div>
      <!-- Sabado Final   -->      


  </div>
  

  <div class="row ">
      <div class="col-12 text-center">
          <a href="{{ url('general-checkout/fit-without-gym') }}" style="display:inline-block;background-color:#FFCB2A;color:#000;padding:1rem 4.5rem;border-radius:6px;text-decoration:none;font-weight:800; font-size: 25px; letter-spacing:1px;">
              Subscribe 199 USD
          </a>
      </div>
  </div>



@endsection