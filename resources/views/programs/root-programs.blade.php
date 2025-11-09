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
        <h1 class="display-3 text-uppercase mb-0">Heart Deserves</h1>
        <h5 class="text-gray fs-2"><span class="text-primary"> Strong Bodies • Open Minds • Kind Hearts • </span> </h5>
        <p class="text-body mb-4">At Fit.Done.Well., our programs are designed to support your full transformation—physically, mentally, and emotionally. Whether you seek to reset your habits, strengthen your body, or deepen your mindfulness, we offer guided paths that meet you where you are and take you where you want to go.</p>

    </div>
</div>

    
    <!-- Programe Start -->
    <div class="container-fluid programe position-relative px-5 mt-5" style="margin-bottom: 135px;">
        <div class="row g-5 gb-5">
            <div class="col-lg-4 col-md-6">
                <div class="bg-light rounded text-justify p-5">
                    <img src="{{ asset('strong-bodies.webp') }}" alt="body" class="img-fluid">
                    <h3 class="text-uppercase my-4 fs-1 text-center">Fit reset programs</h3>

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
                    <h3 class="text-uppercase my-4 fs-1 text-center">Mind reset programs</h3>

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
                    <h3 class="text-uppercase my-4 fs-1 text-center">Life reset programs</h3>

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
      <div class="row" id="fwg1">
        <div class="col-12 text-center">
          <h1 style="font-weight: 800;">Fit <span style="color: #FCD804;">Without </span> Gym</h1>
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
            <a href="{{ route('fit-without-gym') }}" class="">
            <div class="feature-item">
              <div class="left-icon">
                <img src="{{ asset('fwg.jpg') }}" alt="icon" class="img-fluid">
              </div>
              <div class="right-content p-2">
                <h2 style="color:black;">Fit.Without.Gym.</h2>
                <br>
                <p style="color:black;">Discover Fit.Without.Gym:
Your New Way to Transform
Your Body from Home
Imagine getting in shape, feeling energized, and looking amazing, all without ever stepping into a gym!

It is not just possible, it is simple, fun, and completely within your reach.</p>
              </div>
                      <div style="text-align:center;margin-top:1.5rem;">
          <a href="{{ url('general-checkout/fit-without-gym') }}"
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


<section class="section py-5" id="features" style="background-color:#f2f2f2;">
  <div class="container">
    <div class="row">
      <div class="col-12 text-center">
        <div class="section-heading">
          <h2 class="fs-1 fw-bold text-dark" style="font-size: 50px;">Fit <span style="color: #FFCB2A;">4</span> Ever.</h2>
          <p class="text-muted bold">A complete fitness experience that helps you build lasting strength, balance, and endurance.</p>
        </div>
      </div>
    </div>

    <div class="row mt-4 justify-content-center">
      <div class="col-12 text-center">
        <a href="{{ route('fit-forever') }}">
        <img src="{{ asset('laly-brad-escalera.jpg') }}" alt="Fit Forever Program"
             class="img-fluid rounded shadow mb-4"
             style="max-width:70%;border-radius:15px;"></a>

        <div class="text-dark" style="text-align:justify;">
          <p><strong>Build strength you can feel in daily life:</strong> Train with purpose and improve <span class="text-primary">functional strength</span> that enhances your everyday performance.</p>

          <p><strong>Improve conditioning without burning out:</strong> Smart, <span class="text-primary">balanced training</span> keeps you energized and progressing, not exhausted.</p>

          <p><strong>Move better with real mobility work:</strong> Focus on <span class="text-primary">control, balance,</span> and flexibility to stay agile and prevent injuries.</p>

          <p><strong>Stay consistent with a simple rhythm:</strong> A clear weekly structure keeps <span class="text-primary">fitness</span> steady, sustainable, and part of your life.</p>
        </div>

        <div class="text-center mt-4">
          <a href="{{ url('general-checkout/fit-forever') }}"
             style="display:inline-block;background-color:#FFCB2A;color:#000;padding:0.8rem 3rem;border-radius:8px;text-decoration:none;font-weight:600;letter-spacing:0.5px;box-shadow:0 4px 10px rgba(0,0,0,0.1);">
            Subscribe 499 USD/Month
          </a>
        </div>
      </div>
    </div>
  </div>
</section>    




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