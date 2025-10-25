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
            <a href="{{ route('root') }}" class="logo">Fit.<em>Done.Well.</em></a>
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

<div class="row" style="background-color:#222429;padding-top:40px;display:flex;flex-wrap:wrap;align-items:stretch;">





  <!-- Life Reset Retreats -->
  <div class="col-lg-4 col-md-6 col-sm-12 mb-4" style="display:flex;flex:1;">
    <div class="feature-item" style="display:flex;flex-direction:column;align-items:center;background-color:#F4F5F8;padding:40px 15px;width:100%;">
      <a href="{{ route('life-reset-retreats') }}">
        <img src="{{ asset('a4.webp') }}" alt="icon" class="img-fluid mb-3" style="max-width:100%;height:auto;">
      </a>
      <div class="right-content p-2" style="text-align:justify;max-width:90%;">
        <a href="{{ route('life-reset-retreats') }}">
          <h4 style="font-weight:bold;text-align:center;margin-bottom:0.5rem;">Life Reset Retreats</h4>
        </a>
        <p style="margin:0 0 1rem 0;">
          Transform your body, mind, and energy in immersive wellness retreats designed to help you reset, reconnect, and realign with your best self.
        </p>
        <div style="text-align:center;margin-top:1rem;">

          <div class="mb-4 border" style="border-style: dashed; border-color:black; padding: 5px 10px; background-color: #222429; color: white;">
            Feb, Apr, Jul 2026
          </div>


          <a href="{{ route('life-reset-retreats') }}"
             style="display:inline-block;background-color:transparent;color:#000;border:1px solid #000;padding:0.3rem 1.5rem;border-radius:6px;text-decoration:none;font-weight:600;letter-spacing:1px;">
            LEARN MORE
          </a>
        </div>
        <div style="text-align:center;margin-top:1.5rem;">
          <a href="{{ url('general-checkout/life-reset-retreat5') }}"
             style="display:inline-block;background-color:#FFCB2A;color:#000;padding:0.6rem 4.5rem;border-radius:6px;text-decoration:none;font-weight:600;letter-spacing:1px;">
            Sign Up
          </a>
        </div>
      </div>
    </div>
  </div>

    <!-- Saturday Booty Camp -->
  <div class="col-lg-4 col-md-6 col-sm-12 mb-4" style="display:flex;flex:1;">
    <div class="feature-item" style="display:flex;flex-direction:column;align-items:center;background-color:#F4F5F8;padding:40px 15px;width:100%;">
      <a href="{{ route('saturday-booty-camp') }}">
        <img src="{{ asset('booty.webp') }}" alt="icon" class="img-fluid mb-3" style="max-width:100%;height:auto;">
      </a>
      <div class="right-content p-2" style="text-align:justify;max-width:90%;">
        <a href="{{ route('saturday-booty-camp') }}">
          <h4 style="font-weight:bold;text-align:center;margin-bottom:0.5rem;">Saturday Booty Camp</h4>
        </a>
        <p style="margin:0 0 1rem 0;">
          A fun and dynamic class focused on legs, glutes, and abs. Come sweat, laugh, and shape your body with us.
          Dates TBD based on demand. (Scottsdale)
        </p>
        <div style="text-align:center;margin-top:1rem;">

          <div class="mb-4 border" style="border-style: dashed; border-color:black; padding: 5px 10px; background-color: #222429; color: white;">
            Jan 10, 2026
          </div>

          <a href="{{ route('saturday-booty-camp') }}"
             style="display:inline-block;background-color:transparent;color:#000;border:1px solid #000;padding:0.3rem 1.5rem;border-radius:6px;text-decoration:none;font-weight:600;letter-spacing:1px;">
            LEARN MORE
          </a>
        </div>



        <div style="text-align:center;margin-top:1.5rem;">




          <a href="{{ url('general-checkout/saturday-booty-camp') }}"
             style="display:inline-block;background-color:#FFCB2A;color:#000;padding:0.6rem 4.5rem;border-radius:6px;text-decoration:none;font-weight:600;letter-spacing:1px;">
            Sign Up
          </a>



          
        </div>
      </div>
    </div>
  </div>

    <!-- Kayak with Us -->
  <div class="col-lg-4 col-md-6 col-sm-12 mb-4 " style="display:flex;flex:1;">
    <div class="feature-item" style="display:flex;flex-direction:column;align-items:center;background-color:#F4F5F8;padding:40px 15px;width:100%;">
      <a href="{{ route('kayak-with-us') }}">
        <img src="{{ asset('t1/img/services/ev3.webp') }}" alt="icon" class="img-fluid mb-3" style="max-width:100%;height:auto;">
      </a>
      <div class="right-content p-2" style="text-align:justify;max-width:90%;">
        <a href="{{ route('kayak-with-us') }}">
          <h4 style="font-weight:bold;text-align:center;margin-bottom:0.5rem;">Kayak with Us</h4>
        </a>
        <p style="margin:0 0 1rem 0;">
          Kayaking trip through the scenic Salt River! Paddle among wildlife and desert cliffs.
          Scenic float with sections of swift water. Breakfast picnic included. Dates TBD. (Salt River, Arizona)
        </p>
        <div style="text-align:center;margin-top:1rem;">

          <div class="mb-4 border" style="border-style: dashed; border-color:black; padding: 5px 10px; background-color: #222429; color: white;">
             Oct 18, 2025
          </div>


          <a href="{{ route('kayak-with-us') }}"
             style="display:inline-block;background-color:transparent;color:#000;border:1px solid #000;padding:0.3rem 1.5rem;border-radius:6px;text-decoration:none;font-weight:600;letter-spacing:1px;">
            LEARN MORE
          </a>
        </div>
        <div style="text-align:center;margin-top:1.5rem;">
          <a href="{{ url('general-checkout/kayak-with-us') }}"
             style="display:inline-block;background-color:#FFCB2A;color:#000;padding:0.6rem 4.5rem;border-radius:6px;text-decoration:none;font-weight:600;letter-spacing:1px;">
            Sign Up
          </a>
        </div>
      </div>
    </div>
  </div>

</div>

    </div>
  </section>

  <style>
/* --- Corrige la superposición y hace que las cards sobresalgan --- */
#features .row {
  position: relative;
  z-index: 1;
}

/* Cada card sobresale hacia arriba del fondo oscuro */
.feature-item {
  position: relative;
  z-index: 2;
  margin-top: -120px; /* la eleva */
  transition: transform 0.3s ease;
}

/* Efecto sutil al pasar el mouse */
.feature-item:hover {
  transform: translateY(-10px);
}

/* Asegura que el fondo oscuro no tape las cards */
#features {
  overflow: visible;
}

/* En pantallas pequeñas, elimina la elevación */
@media (max-width: 768px) {
  .feature-item {
    margin-top: 0;
  }
}
</style>


  <section class="section" id="call-to-action">
    <div class="container">
      <div class="row">
        <div class="col-lg-10 offset-lg-1">
          <div class="cta-content">
            <h2>Live with <em>intention</em>, grow with <em>us</em></h2>
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
