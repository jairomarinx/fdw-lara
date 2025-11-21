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
          <h6>Wellness and Strength Together</h6>
          <h2>Love <em>For</em> Life</h2>
          <div class="main-button scroll-to-section">
              <a href="#features">See what's coming</a>
          </div>
      </div>
    </div>
</div>

<!-- About Love For Life -->
<div class="container-fluid p-5" id="id_about">
    <div class="row gx-5">
        <div class="col-lg-5 mb-5 mb-lg-0" style="min-height: 500px;">
            <div class="position-relative h-100">
                <img class="position-absolute w-100 h-100 rounded img-fluid" id="img_laly_fuerte" src="{{ asset('wfr1.jpg') }}" style="object-fit: cover; object-position: top;">
                <img class="position-absolute w-100 h-100 rounded img-fluid d-none" id="img_brad_fuerte" src="{{ asset('wfr1.jpg') }}" style="object-fit: cover; object-position: top;">
            </div>
        </div>

        <div class="col-lg-7">
            <div class="mb-4">
                <h1 class="display-3 text-uppercase mb-0">Love <span class="yellow">For</span> Life</h1>
                <h5 class="text-body text-uppercase fs-3">Your strongest and most balanced self</h5>
            </div>

            <h4 class="text-body mb-4">
                Love For Life is a complete transformation journey that strengthens your body, balances your emotions, and elevates your mind. It combines powerful training with real wellness practices to help you live healthier, clearer, calmer, and stronger.
            </h4>

            <p class="mb-4 text-justify">
                This program brings together the strength and physical transformation of Fit Forever with the emotional clarity and mindful wellness of Well For Real. Love For Life offers structure, intention, weekly guidance, and daily practices that help you upgrade your habits, your mindset, and your physical energy. No confusion. No overwhelm. Just a clear and supportive path to becoming the best version of yourself.
            </p>

            <div class="rounded bg-dark p-5">
                <ul class="nav nav-pills justify-content-between mb-3">
                    <li class="nav-item w-50">
                        <a class="nav-link text-uppercase text-center w-100 active" id="about_us" data-bs-toggle="pill" onclick="about_us()" href="#pills-1">Complete Wellness</a>
                    </li>
                    <li class="nav-item w-50">
                        <a class="nav-link text-uppercase text-center w-100" id="why_choose_us" data-bs-toggle="pill" href="#pills-2" onclick="why_choose_us()">Full Experience</a>
                    </li>
                </ul>

                <div class="tab-content">
                    <div class="tab-pane fade show active" id="pills-1">
                        <p class="text-secondary mb-0 text-justify">
                            Love For Life helps you transform inside and out. You gain emotional balance, physical strength, and mental clarity through weekly guidance that adapts to your lifestyle. You do not need perfection or experience. You only need the willingness to begin and stay consistent.
                        </p>
                    </div>

                    <div class="tab-pane fade" id="pills-2">
                        <p class="text-secondary mb-0 text-justify">
                            You receive a complete system that elevates your life: mindful weekly sessions, strength and mobility practices, simple nutrition guidelines, habit building tools, emotional clarity work, and structured support designed to help you become stronger, calmer, and more connected with yourself.
                        </p>
                    </div>
                </div>
            </div>

        </div>
    </div>
</div>
<!-- About End -->

<div class="row" id="features">
    <div class="col-12 text-center">
        <a href="{{ url('general-checkout/fit-without-gym') }}" style="display:inline-block;background-color:#FCD804;color:#000;padding:1rem 4.5rem;border-radius:6px;text-decoration:none;font-weight:800; font-size: 25px; letter-spacing:1px;">
            Join Now 899 USD
        </a>
    </div>
</div>

<!-- Section Header -->
<div class="container">
    <div class="mb-5 mt-5 text-center">
        <h5 class="text-primary text-uppercase fs-3"><strong>Your Transformation</strong></h5>
        <h1 class="display-3 text-uppercase mb-0">What You Get</h1>
        <h5 class="text-gray fs-2">Strength. Wellness. Balance.</h5>
        <p class="text-body mb-4">A complete system to strengthen your body, calm your mind, and reset your life.</p>
    </div>
</div>

<!-- What You Get -->
<div class="container-fluid p-5">
    <div class="row g-5 mb-5">

        <div class="col-lg-4">
            <div class="d-flex flex-column align-items-center bg-dark rounded text-center py-5 px-3">
                <div class="bg-primary rounded-circle d-flex align-items-center justify-content-center mb-3"
                    style="width: 60px; height: 60px;">
                    <i class="fa fa-play fs-4 text-white"></i>
                </div>
                <h5 class="text-uppercase text-primary">Weekly Video Sessions</h5>
                <p class="text-secondary mb-0">
                    Fitness and wellness sessions blended to guide your physical and emotional transformation.
                </p>
            </div>
        </div>

        <div class="col-lg-4">
            <div class="d-flex flex-column align-items-center bg-dark rounded text-center py-5 px-3">
                <div class="bg-primary rounded-circle d-flex align-items-center justify-content-center mb-3"
                    style="width: 60px; height: 60px;">
                    <i class="fa fa-utensils fs-4 text-white"></i>
                </div>
                <h5 class="text-uppercase text-primary">Simple Nutrition</h5>
                <p class="text-secondary mb-0">
                    Easy guidelines to support your strength, clarity, and energy with clean and balanced meals.
                </p>
            </div>
        </div>

        <div class="col-lg-4">
            <div class="d-flex flex-column align-items-center bg-dark rounded text-center py-5 px-3">
                <div class="bg-primary rounded-circle d-flex align-items-center justify-content-center mb-3"
                    style="width: 60px; height: 60px;">
                    <i class="fa fa-book fs-4 text-white"></i>
                </div>
                <h5 class="text-uppercase text-primary">Life Reset Journal</h5>
                <p class="text-secondary mb-0">
                    A guided journal to track progress, habits, clarity, and emotional evolution through the journey.
                </p>
            </div>
        </div>

    </div>

    <div class="row g-5 mb-5">

        <div class="col-lg-4">
            <div class="d-flex flex-column align-items-center bg-dark rounded text-center py-5 px-3">
                <div class="bg-primary rounded-circle d-flex align-items-center justify-content-center mb-3"
                    style="width: 60px; height: 60px;">
                    <i class="fa fa-home fs-4 text-white"></i>
                </div>
                <h5 class="text-uppercase text-primary">Home Friendly</h5>
                <p class="text-secondary mb-0">
                    Designed for any space, giving you full freedom to improve your life from home.
                </p>
            </div>
        </div>

        <div class="col-lg-4">
            <div class="d-flex flex-column align-items-center bg-dark rounded text-center py-5 px-3">
                <div class="bg-primary rounded-circle d-flex align-items-center justify-content-center mb-3"
                    style="width: 60px; height: 60px;">
                    <i class="fa fa-clock fs-4 text-white"></i>
                </div>
                <h5 class="text-uppercase text-primary">Flexible Timing</h5>
                <p class="text-secondary mb-0">
                    Follow your sessions at your own pace with clear structure and weekly rhythm.
                </p>
            </div>
        </div>

        <div class="col-lg-4">
            <div class="d-flex flex-column align-items-center bg-dark rounded text-center py-5 px-3">
                <div class="bg-primary rounded-circle d-flex align-items-center justify-content-center mb-3"
                    style="width: 60px; height: 60px;">
                    <i class="fa fa-dumbbell fs-4 text-white"></i>
                </div>
                <h5 class="text-uppercase text-primary">Body and Mind Strength</h5>
                <p class="text-secondary mb-0">
                    Build a stronger body, calmer emotions, and clearer thoughts with integrated practices.
                </p>
            </div>
        </div>

    </div>
</div>

<div class="row">
    <div class="col-12 text-center">
        <a href="{{ url('general-checkout/fit-without-gym') }}" style="display:inline-block;background-color:#FCD804;color:#000;padding:1rem 4.5rem;border-radius:6px;text-decoration:none;font-weight:800; font-size: 25px; letter-spacing:1px;">
            Join Now 899 USD
        </a>
    </div>
</div>

<!-- Final Section -->
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
    <h1 class="display-3 text-white text-uppercase mb-4">Love <span class="yellow">For</span> Life</h1>

    <h4 class="text-white-50 mb-4 px-3 px-lg-5" style="max-width: 900px; margin: 0 auto;">
        Because transformation should feel real, balanced, and sustainable. Love For Life strengthens your body, calms your emotions, and helps you live with intention.
    </h4>

    <p class="text-white fs-5 fw-light px-3 px-lg-5 mb-4" style="max-width: 900px; margin: 0 auto;">
        This journey supports every part of your life. You gain confidence, clarity, and strength through structured practices designed to elevate your daily experience.
    </p>

    <div class="d-flex justify-content-center mb-4">
        <div class="bg-primary" style="height: 3px; width: 120px;"></div>
    </div>

    <div class="text-white fs-5 fw-light px-3 px-lg-5" style="max-width: 900px; margin: 0 auto;">

        <p class="mb-2"><i class="fa fa-check text-primary me-2"></i>You do not need to be fit or experienced.</p>
        <p class="mb-2"><i class="fa fa-check text-primary me-2"></i>You do not need extreme routines.</p>
        <p class="mb-2"><i class="fa fa-check text-primary me-2"></i>You do not need more stress in your life.</p>
        <p class="mb-2"><i class="fa fa-check text-primary me-2"></i>You only need the desire to improve your body, your clarity, and your emotional world.</p>

    </div>

</div>

<!-- Program Recommendations -->
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
       These guidelines help you stay consistent, grow stronger, and experience deep transformation during Love For Life.
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
            Commit to the program for at least three months for meaningful transformation.
        </p>

        <p class="mb-3">
            <i class="fa fa-check text-primary me-2"></i>
            Follow the weekly structure to balance strength, clarity, and emotional wellbeing.
        </p>

        <p class="mb-3">
            <i class="fa fa-check text-primary me-2"></i>
            Practice each session with full presence and intention.
        </p>

        <p class="mb-3">
            <i class="fa fa-check text-primary me-2"></i>
            Modify practices if needed. Growth comes from patience and consistency.
        </p>

        <p class="mb-3">
            <i class="fa fa-check text-primary me-2"></i>
            Support your transformation with clean, simple nutrition.
        </p>

        <p class="mb-0">
            <i class="fa fa-check text-primary me-2"></i>
            Use the journal weekly to stay aware of your thoughts, progress, and emotional evolution.
        </p>

    </div>

</div>

<div class="row mt-4">
    <div class="col-12 text-center">
        <a href="{{ url('general-checkout/well-for-real') }}" style="display:inline-block;background-color:#FCD804;color:#000;padding:1rem 4.5rem;border-radius:6px;text-decoration:none;font-weight:800; font-size: 25px; letter-spacing:1px;">
            Join Now 899 USD
        </a>
    </div>
</div>

@endsection
