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
            <a href="{{ route('root') }}" class="logo">Fit.Done.<em>Well</em></a>
            <ul class="nav">
              <li><a href="{{ route('root') }}">Home</a></li>
              <li><a href="{{ route('root') . '/services' }}">Services</a></li>
              <li><a href="http://blog.fitdonewell.com/contact">Contact Us</a></li>
              <li class="main-button d-none"><a href="#">Join Now</a></li>
            </ul>
            <a class="menu-trigger"><span>Menu</span></a>
          </nav>
        </div>
      </div>
    </div>
  </header>

  <div class="main-banner" id="top">
    <video autoplay muted loop id="bg-video" playsinline>
      <source src="{{ asset('video-party-2.mp4') }}" type="video/mp4" />
    </video>
    <div class="video-overlay-website header-text">
      <div class="caption">
        <h6></h6>
        <h2></h2>
        <div class="main-button scroll-to-section">          
        </div>
      </div>
    </div>
  </div>

  <section class="section" id="features">
    <div class="container">
      <div class="row">
        <div class="col-lg-6 offset-lg-3">
          <div class="section-heading">
            @if(request()->has('thankyou'))
              <h2 style="font-size: clamp(30px, 85px, 200px);"  >Thanks for signing up, we look forward  <em>to seeing you</em></h2>
            @else
              <h2 style="font-size: clamp(30px, 85px, 200px);"  >Website Launch <em>Party</em></h2>
            @endif
            
            <img src="{{ asset('programs/assets/images/line-dec.png') }}" alt="divider">            
          </div>
        </div>
      </div>
      <div class="row">
        <div class="col-12 text-center">
            <img src="{{ asset('launch.png') }}" alt="" class="img-fluid">            
        </div>
      </div>

    <div class="row">
        <div class="col-lg-6 offset-lg-3">
          <div class="section-heading">
            <h2 style="font-size: clamp(30px, 12vw, 100px);"  >Strong Bodies <em> Open Minds </em> Kind Hearts</h2>
            <img src="{{ asset('programs/assets/images/line-dec.png') }}" alt="divider">            
          </div>
        </div>
    </div>


    <div class="row">
        <div class="col-lg-6 offset-lg-3">
          <div class="section-heading">
            <h2 style="font-size: clamp(30px, 12vw, 100px);"  >Honor your body <em> Manifest </em> Evolve </h2>            
          </div>
        </div>
    </div>

    </div>
  </section>

<div class="container-fluid">
    <div class="row">
        <div class="col-12">

<section class="section py-5 <?php if (request()->has('thankyou')) echo 'd-none' ?>" style="background: #111;">
  <div class="container">
    <div class="row justify-content-center">
      <div class="col-lg-7 col-md-9">
        <div class="card shadow-sm border-0 rounded-4 p-4">
          <h2 class="text-center mb-4" style="font-weight: 800; color: #232d39;">
            Party RSVP <em style="color: #FCD804;">Form</em>
          </h2>
          <form method="POST" action="{{ route('save-contact') }}">
            @csrf
            <div class="mb-3">
              <label for="name" class="form-label fw-semibold">Full Name</label>
              <input type="text" class="form-control rounded-3" id="name" name="name" placeholder="Your full name" required>
            </div>
            <div class="mb-3">
              <label for="email" class="form-label fw-semibold">Email Address</label>
              <input type="email" class="form-control rounded-3" id="email" name="email" placeholder="you@example.com" required>
            </div>
            <div class="mb-3">
              <label for="phone" class="form-label fw-semibold">Phone Number</label>
              <input type="tel" class="form-control rounded-3" id="phone" name="phone" placeholder="+1 234 567 8901" required>
            </div>
            <div class="mb-3">
              <label class="form-label fw-semibold d-block mb-2">Choose your interest</label>
              <div class="form-check form-check-inline">
                <input class="form-check-input" type="checkbox" id="strongBodies" name="strong_bodies" value="Strong Bodies">
                <label class="form-check-label" for="strongBodies" style="color:#232d39;">Strong Bodies</label>
              </div>
              <div class="form-check form-check-inline">
                <input class="form-check-input" type="checkbox" id="openMind" name="open_minds" value="Open Mind">
                <label class="form-check-label" for="openMind" style="color:#232d39;">Open Mind</label>
              </div>
              <div class="form-check form-check-inline">
                <input class="form-check-input" type="checkbox" id="kindHearts" name="kind_hearts" value="Kind Hearts">
                <label class="form-check-label" for="kindHearts" style="color:#232d39;">Kind Hearts</label>
              </div>
            </div>
            <div class="row g-3 mb-3">
              <div class="col-md-4">
                <label for="city" class="form-label fw-semibold">City</label>
                <input type="text" class="form-control rounded-3" id="city" name="city" placeholder="City" required>
              </div>
              <div class="col-md-4">
                <label for="state" class="form-label fw-semibold">State</label>
                <input type="text" class="form-control rounded-3" id="state" name="state" placeholder="State" required>
              </div>
              <div class="col-md-4">
                <label for="country" class="form-label fw-semibold">Country</label>
                <input type="text" class="form-control rounded-3" id="country" name="country" placeholder="Country" required>
              </div>
            </div>
            <div class="d-grid">
              <button type="submit" class="btn btn-warning fw-bold rounded-3 py-2" style="font-size: 18px;">
                Submit RSVP
              </button>
            </div>
          </form>
        </div>
      </div>
    </div>
  </div>
</section>

<div class="container">
  <div class="row text-center">
    <div class="col-12">
      <img src="{{ asset('qrlaunch.png')  }}" alt="" class="img-fluid">
    </div>
  </div>
</div>


        

        </div>
    </div>
</div>

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
