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
    <div class="container">
      <div class="row">
        <div class="col-lg-6 offset-lg-3">
          <div class="section-heading">
            <h2>What <em>To Expect</em></h2>
            <img src="{{ asset('programs/assets/images/line-dec.png') }}" alt="divider">
            <p>Every Fit Done Well event blends movement, music, mindfulness, and joy. These are real-life gatherings for real transformation.</p>
          </div>
        </div>
      </div>
      <div class="row">
        @php
          $events = [
            ['route' =>'kayak-with-us','img' => 't1/img/services/ev3.webp', 'title' => 'Kayak.with.Us.', 'desc' => 'Kayaking trip through the scenic Salt River! Paddle among wildlife and desert cliffs. Scenic float with sections of swift water. Breakfast picnic included. Dates TBD. (Salt River, Arizona) '],            
            ['route' =>'life-reset-retreats','img' => 'a4.webp', 'title' => 'Life Reset Retreats', 'desc' => 'Transform your body, mind, and energy in immersive wellness retreats designed to help you reset, reconnect, and realign with your best self. '],            
            ['route' =>'sunrise-life-reset','img' => 't1/img/services/ev2.webp', 'title' => 'Sunrise.Life.Reset.', 'desc' => 'Sacred sunrise experience: heal what no longer serves you, design your manifestation map, create habits and discover your balance. Dates TBD. (Scottsdale) '],
            ['route' =>'saturday-booty-camp', 'img' => 'booty.webp', 'title' => 'Saturday.Booty.Camp.', 'desc' => 'A fun and dynamic class focused on legs, glutes, and abs. Come sweat, laugh, and shape your body with us. Dates TBD based on demand.(Scottsdale) '],

          ];
        @endphp
        @foreach ($events as $e)
        <div class="col-lg-4">
          <div class="feature-item">
            <div class="left-icon"><a href="{{ route($e['route']) }}">
              <img src="{{ asset( $e['img']) }}" alt="icon" class="img-fluid"></a>
            </div>
            <div class="right-content p-2">
              <a href="{{ route($e['route']) }}"><h4>{{ $e['title'] }}</h4></a>
              <p>{{ $e['desc'] }}</p>
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
            <p>Check out upcoming events and save your spot. These gatherings will reset your rhythm and expand your heart.</p>
            <div class="main-button scroll-to-section">
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
