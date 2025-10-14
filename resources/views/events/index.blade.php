<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <meta name="description" content="Discover Fit Done Well live events to energize your body, open your mind, and connect with your spirit.">
  <meta name="author" content="Fit Done Well">
  <title>Live.Events - Fit Done Well</title>

  <link rel="stylesheet" type="text/css" href="{{ asset('programs/assets/css/bootstrap.min.css') }}">
  <link rel="stylesheet" type="text/css" href="{{ asset('programs/assets/css/font-awesome.css') }}">
  <link rel="stylesheet" href="{{ asset('programs/assets/css/templatemo-training-studio.css') }}">
</head>

<body>

  <div id="js-preloader" class="js-preloader">
    <div class="preloader-inner">
      <span class="dot"></span>
      <div class="dots"><span></span><span></span><span></span></div>
    </div>
  </div>

  <header class="header-area header-sticky">
    <div class="container">
      <div class="row">
        <div class="col-12">
          <nav class="main-nav">
            <a href="{{ route('root') }}" class="logo">Fit.<em>Done.Well</em></a>
            <ul class="nav">
              <li><a href="{{ route('root') }}">Home</a></li>
              <li><a href="{{ route('root') . '/services' }}">Services</a></li>
              <li><a href="{{ route('root') . '/our-programs' }}">Programs</a></li>
              
              <li><a href="{{ route('contact-us') }}">Contact Us</a></li>
              <li class="main-button d-none"><a href="#">Join Now</a></li>
            </ul>
            <a class="menu-trigger"><span>Menu</span></a>
          </nav>
        </div>
      </div>
    </div>
  </header>

  <div class="main-banner" id="top">
    <video autoplay muted loop id="bg-video">
      <source src="{{ asset('events.mp4') }}" type="video/mp4" />
    </video>
    <div class="video-overlay header-text">
      <div class="caption">
        <h6>experience energy, healing & community</h6>
        <h2>join our <em>live events</em></h2>
        <div class="main-button scroll-to-section">
          <a href="#features">See what's coming</a>
        </div>
      </div>
    </div>
  </div>

  <section class="section" id="features">
    <div class="container-fluid">
      <div class="row">
        <div class="col-lg-6 offset-lg-3">
          <div class="section-heading">
            <h2 style="font-size: 50px;">Next <em>Events</em></h2>
            <img src="{{ asset('programs/assets/images/line-dec.png') }}" alt="divider">
            <p>Every Fit Done Well event blends movement, music, mindfulness, and joy. These are real-life gatherings for real transformation.</p>

            @if (now()->lt(\Carbon\Carbon::create(2025, 10, 18)))                 
                <div style="text-align:center;font-size:20px;font-weight:bold;padding:1rem;color:#0a1d3a; background-color: white; padding: 20px;">
                  Kayak with Us on the Salt River<Br>                    
                      Saturday, October 18<br>
                    <span style="font-size: 14px;">
                      6:00 am to 11:00 am<br>
                      Location: Saguaro Lake Guest Ranch<br>
                      13020 N. Bush Hwy Mesa, AZ 85215
                    </span>
                </div>
            @endif
            <div>
            <div style="text-align:center;font-size:20px;font-weight:bold;padding:1rem;color:#0a1d3a; background-color: white; padding: 20px;">

🔥Life.Reset.Retreat.
Phoenix.  
Coming up Feb 2026<br>
<br>
Sedona Coming up Apr 2026<br>

Colombia br
Coming up Jul 202<>
                </div>
            </div>

          </div>
        </div>
      </div>
<div class="row" style="background-color:#222429;padding-top:40px;display:flex;flex-wrap:wrap;align-items:stretch;">
  @php
    $events = [
      ['route'=>'saturday-booty-camp','img'=>'booty.webp','title'=>'Fit Reset Camp','desc'=>'A fun and dynamic class focused on legs, glutes, and abs. Come sweat, laugh, and shape your body with us. Dates TBD based on demand.(Scottsdale)','product'=>'saturday-booty-camp'],

    ['route'=>'kayak-with-us','img'=>'t1/img/services/ev3.webp','title'=>'Adventure with Us','desc'=>'Kayaking trip through the scenic Salt River! Paddle among wildlife and desert cliffs. Scenic float with sections of swift water. Breakfast picnic included. Dates TBD. (Salt River, Arizona)','product'=>'kayak-with-us'],            
      ['route'=>'life-reset-retreats','img'=>'a4.webp','title'=>'Life Reset Retreats','desc'=>'Transform your body, mind, and energy in immersive wellness retreats designed to help you reset, reconnect, and realign with your best self.','product'=>'life-reset-retreat5'],            
    ];
  @endphp

  @foreach ($events as $e)
  <div class="col-lg-4 col-md-6 col-sm-12 mb-4" style="display:flex;flex:1;">
    <div class="feature-item" style="display:flex;flex-direction:column;align-items:center;background-color:white;padding:20px;width:100%;">
      <a href="{{ route($e['route']) }}">
        <img src="{{ asset($e['img']) }}" alt="icon" class="img-fluid mb-3" style="max-width:100%;height:auto;">
      </a>

      <div class="right-content p-2" style="text-align:justify;max-width:90%;">
        <a href="{{ route($e['route']) }}">
          <h4 style="font-weight:bold;text-align:center;margin-bottom:0.5rem;">{{ $e['title'] }}</h4>
        </a>
        <p style="margin:0 0 1rem 0;">{{ $e['desc'] }}</p>

        <div style="text-align:center;margin-top:1rem;">
          <a href="{{ route($e['route']) }}"
             style="display:inline-block;background-color:transparent;color:#000;border:1px solid #000;padding:0.3rem 1.5rem;border-radius:6px;text-decoration:none;font-weight:600;letter-spacing:1px;">
            LEARN MORE
          </a>
        </div>

        <div style="text-align:center;margin-top:1.5rem;">
          <a href="{{ url("general-checkout/".$e['product']) }}"
             style="display:inline-block;background-color:#FEF600;color:#000;padding:0.6rem 4.5rem;border-radius:6px;text-decoration:none;font-weight:600;letter-spacing:1px;">
            Sign Up
          </a>
        </div>
      </div>
    </div>
  </div>
  @endforeach
</div>

    </div>
  </section>

  <section class="section" id="call-to-action">
    <div class="container">
      <div class="row">
        <div class="col-lg-10 offset-lg-1">
          <div class="cta-content">
            <h2>Live with <em>intention</em>, grow with <em>us</em></h2>
            <p class="d-none">Check out upcoming events and save your spot. These gatherings will reset your rhythm and expand your heart.</p>
            <div class="main-button scroll-to-section d-none">
              <a href="http://blog.fitdonewell.com/events-schedule/">See Full Schedule</a>
            </div>
          </div>
        </div>
      </div>
    </div>
  </section>

  <footer>
    <div class="container">
      <div class="row">
        <div class="col-lg-12">
          <p>&copy; 2025 Fit Done Well Events — All rights reserved</p>
        </div>
      </div>
    </div>
  </footer>

  <script src="{{ asset('programs/assets/js/jquery-2.1.0.min.js') }}"></script>
  <script src="{{ asset('programs/assets/js/popper.js') }}"></script>
  <script src="{{ asset('programs/assets/js/bootstrap.min.js') }}"></script>
  <script src="{{ asset('programs/assets/js/scrollreveal.min.js') }}"></script>
  <script src="{{ asset('programs/assets/js/waypoints.min.js') }}"></script>
  <script src="{{ asset('programs/assets/js/jquery.counterup.min.js') }}"></script>
  <script src="{{ asset('programs/assets/js/imgfix.min.js') }}"></script>
  <script src="{{ asset('programs/assets/js/mixitup.js') }}"></script>
  <script src="{{ asset('programs/assets/js/accordions.js') }}"></script>
  <script src="{{ asset('programs/assets/js/custom.js') }}"></script>

</body>
</html>
