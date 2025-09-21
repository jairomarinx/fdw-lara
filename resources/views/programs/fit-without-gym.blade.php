<!DOCTYPE html>
<html>

<head>
  <!-- Basic -->
  <meta charset="utf-8" />
  <meta http-equiv="X-UA-Compatible" content="IE=edge" />
  <!-- Mobile Metas -->
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
  <!-- Site Metas -->
  <meta name="keywords" content="" />
  <meta name="description" content="" />
  <meta name="author" content="" />

  <title>Fit.done.well.</title>

  <!-- slider stylesheet -->
  <link rel="stylesheet" type="text/css"
    href="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.1.3/assets/owl.carousel.min.css" />

  <!-- bootstrap core css -->
  <link rel="stylesheet" type="text/css" href="{{ asset('fitwithoutgym/css/bootstrap.css')  }}" />

  <!-- fonts style -->
  <link href="https://fonts.googleapis.com/css?family=Baloo+Chettan|Dosis:400,600,700|Poppins:400,600,700&display=swap"
    rel="stylesheet" />
  <!-- Custom styles for this template -->
  <link href="{{ asset('fitwithoutgym/css/style.css')  }}" rel="stylesheet" />
  <!-- responsive style -->
  <link href="{{ asset('fitwithoutgym/css/responsive.css') }}" rel="stylesheet" />
</head>

<body>
  <div class="hero_area">
    <!-- header section strats -->
    <header class="header_section">
      <div class="container">
        <nav class="navbar navbar-expand-lg custom_nav-container">
          <a class="navbar-brand" href="{{ route('root') }}">
            <img src="{{ asset('fitwithoutgym/images/logo-fitdonewell.png') }}" alt="" style="height: 40px; width: auto;" />
            <span>
              Fit.done.well.
            </span>
          </a>
          <div class="contact_nav" id="">
            <ul class="navbar-nav ">
              <li class="nav-item">
                <a class="nav-link" href="{{ route('root') }}">
                  <img src="{{ asset('fitwithoutgym/images/location.png') }}" alt="" />
                  <span>United States</span>
                </a>
              </li>
              <li class="nav-item">
                <a class="nav-link" href="tel:+01 954-226-4294">
                  <img src="{{ asset('fitwithoutgym/images/call.png') }}" alt="" />
                  <span>Call : + 01 954-226-4294</span>
                </a>
              </li>
              <li class="nav-item">
                <a class="nav-link" href="mailto://>fitdonewell@gmail.com">
                  <img src="{{ asset('fitwithoutgym/images/envelope.png') }}" alt="" />
                  <span>fitdonewell@gmail.com</span>
                </a>
              </li>
            </ul>
          </div>
        </nav>
      </div>

    </header>
    <!-- end header section -->
    <!-- slider section -->

    <style>
      .slider_section .carousel-item img {
        width: 100%;
        height: 100vh;
        /* que ocupe toda la altura visible */
        object-fit: cover;
        /* que la imagen se escale y recorte bien */
        position: absolute;
        top: 0;
        left: 0;
        z-index: -1;
        /* que quede detrás del contenido */
      }
    </style>


    <section class=" slider_section position-relative">
      <div class="container">
        <div class="custom_nav2">
          <nav class="navbar navbar-expand-lg custom_nav-container ">
            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent"
              aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
              <span class="navbar-toggler-icon"></span>
            </button>

            <div class="collapse navbar-collapse" id="navbarSupportedContent">
              <div class="d-flex  flex-column flex-lg-row align-items-center">
                <ul class="navbar-nav  ">
                  <li class="nav-item active">
                    <a class="nav-link" href="http://fitdonewell.com">Home <span class="sr-only">(current)</span></a>
                  </li>
                  <li class="nav-item">
                    <a class="nav-link" href="http://blog.fitdonewell.com/contact">Contact Us</a>
                  </li>

                </ul>

              </div>
            </div>
          </nav>
        </div>
      </div>
      <div class="slider_container">
        <div id="carouselExampleIndicators" class="carousel slide" data-ride="carousel">
          <ol class="carousel-indicators">
            <li data-target="#carouselExampleIndicators" data-slide-to="0" class="active"></li>
            <li data-target="#carouselExampleIndicators" data-slide-to="1"></li>
            <li data-target="#carouselExampleIndicators" data-slide-to="2"></li>
          </ol>
          <div class="carousel-inner">
            <div class="carousel-item active">
              <div class="container">
                <div class="row">
                  <div class="col-lg-6 col-md-7 offset-md-6 offset-md-5">
                    <div class="detail-box jcaption">
                      <h2 style="white-space:nowrap;">
                        Fit.Without.gym.
                      </h2>
                      <h1 style="white-space:nowrap;">
                        Fit.without.gym.
                      </h1>
                      <p>
                        Stronger, leaner, fitter.<br> All from the comfort of your home.
                      </p>
                      <a href="http://shop.fitdonewell.com" class="btn btn-warning px-4 py-2 text-white">Shop Now</a>
                    </div>
                  </div>
                </div>
              </div>
            </div>
            <div class="carousel-item ">
              <div class="container">
                <div class="row">
                  <div class="col-lg-6 col-md-7 offset-md-6 offset-md-5">
                    <div class="detail-box">
                      <h2>
                        Strong at Home
                      </h2>
                      <h1 style="white-space:nowrap;">
                        Fit.Without.Gym
                      </h1>
                      <p>
                        Fit without stepping outside.<br>
                        Train smart, move better, feel amazing.


                      </p>
                      <a href="http://shop.fitdonewell.com" class="btn btn-warning px-4 py-2 text-white">Shop Now</a>

                    </div>
                  </div>
                </div>
              </div>
            </div>
            <div class="carousel-item ">
              <div class="container">
                <div class="row">
                  <div class="col-lg-6 col-md-7 offset-md-6 offset-md-5">
                    <div class="detail-box">
                      <h2>
                        No Gym Needed
                      </h2>
                      <h1 style="white-space:nowrap;">
                        Fit.Without.Gym
                      </h1>
                      <p>
                        Stronger at home.<br>
                        No gym memberships, no stress, just pure progress.
                      </p>
                      <a href="shop.fitdonewell.com" class="btn btn-warning px-4 py-2 text-white">Shop Now</a>

                    </div>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </section>
    <!-- end slider section -->
  </div>


  <!-- about section -->

  <section class="about_section layout_padding">
    <div class="container">
      <div class="heading_container">
        <h2>
          About Fit.Without.Gym.
        </h2>
      </div>
      <div class="box">
        <div class="img-box">
          <img src="images/fwg.png" alt="">
        </div>
        <div class="detail-box">
          <h2 class="text-center text-bold">Discover Fit.Without.Gym:<br>Your New Way to Transform<br>Your Body from
            Home</h2>
          <p></p>
          <p class="text-justify">
            Imagine getting in shape, feeling energized, and looking amazing, <strong> all without ever stepping into a
              gym!<br><br></strong>
            It is not just possible, it is simple, fun, and completely within your reach.<br><br>
            <span class="text-warning">Fit.Without.Gym</span> is the breakthrough program designed for real people with
            real lives. No expensive machines, no crowded gyms, no confusing routines.
            With over <span class="font-weight-bold"> 12 full guided workout videos</span>, expert motivation, and
            easy-to-follow plans, you will have <span class="font-weight-bold"> everything you need </span> to start
            your transformation today, right from the comfort of your home.<br><br>

            Whether you are just starting your fitness journey or looking to reignite your passion for movement,
            Fit.Without.Gym adapts to your needs, your pace, and your space.
          </p>

          <p class="text-left font-weight-bold">✨ Here is what you will get inside Fit.Without.Gym:</p>
          <ul class="text-left list-unstyled pl-5">
            <li>🎥 7 Guided Workout Videos for each day of the week, that are clear, energetic, and designed to keep you
              moving at your best.</li>
            <li>😋5 Easy, Healthy and Delicious recipes for lunch & dinner of week days, to enjoy while learning about
              Clean and Nutritional Habits.</li>
            <li>🔥 Free access to our Life.Reset.Journal. to keep you informed, motivated and consistent, building
              unstoppable wellness habits.</li>
            <li>🤑20% off on all our.amazing.products. that will help you add resistance to your Home Workouts.</li>
            <li>🏡 Home-Friendly Routines that require no special equipment, just your willpower.🕒 Flexible Scheduling
              so you can train on your time and around your life with short yet effective sessions.</li>
            <li>💪 Strength, Stamina, and Balance Focus to deliver a complete and sustainable body transformation.</li>
            <li>😃 Real Happiness and Confidence as you feel better inside and out while achieving each new goal</li>
          </ul>
          <p></p>
          <p class="text-left font-weight-bold">✨ Why Fit.Without.Gym?</p><br>
          <p class="text-justify">
            Fit.Without.Gym is not just a workout program, it is your chance to take control of your health, your
            energy, and your happiness with no limits. Every video, every session, and every small step are designed to
            move you closer to a stronger body, a sharper mind, and a lighter, happier life.
          </p>
          <p class="text-left">
          <ul class="text-left">
            <li>You do not need to be "fit enough" to start.</li>
            <li>You do not need fancy equipment.</li>
            <li>You do not even need hours of free time.</li>
          </ul>
          </p>
          <h5 class="text-left"> <strong> Program Recommendations:</strong></h5>
          <p class="text-left">
          <ul class="text-left">
            <li>Practice our program consistently for three months to achieve Transformation. </li>
            <li>Keep the order of each day for better muscle distribution.</li>
            <li>Exercises Routines should be done with the same pattern of 3 Sets of 12 Repetitions per Exercise,
              resting less than one minute in between.</li>
            <li>Exercises that are challenging can be skipped until they are doable with confidence.
            </li>
            <li>Always be aware of the correct form, keeping the basics in mind: back straight, chest up, pressure on
              the heels never on the balls of the feet, and extension of the joints without locking them.
            </li>
            <li>The recipes are designed for weekday lunches and dinners. Moderate freedom with balanced nutrition on
              the weekends and breakfast. </li>
          </ul>
          </p>

          </ul>
          </p>

        </div>
      </div>
    </div>
  </section>
  <!-- end about section -->

  <!-- service section -->

  <section class="service_section layout_padding">
    <div class="container">
      <div class="heading_container">
        <h2>
          Our Content
        </h2>
      </div>
      <div class="d-none">
        <h5><strong>Monday </strong> </h5>
      </div>
      <div class="service_container">
        <div class="box">
          <img src="{{ asset('fitwithoutgym/images/j1.webp') }}" alt="">
          <h6 class="visible_heading">
            CROSSFIT TRAINING
          </h6>

        </div>
        <div class="box">
          <img src="{{ asset('fitwithoutgym/images/j2.webp') }}" alt="">
          <h6 class="visible_heading">
            FITNESS
          </h6>
          <div class="link_box">
            <a href="">
              <img src="{{ asset('fitwithoutgym/images/link.png') }}" alt="">
            </a>
            <h6>
              FITNESS
            </h6>
          </div>
        </div>
        <div class="box d-none">
          <img src="{{ asset('fitwithoutgym/images/j3.webp') }}}" alt="">
          <h6 class="visible_heading">
            DYNAMIC STRENGTH TRAINING
          </h6>
          <div class="link_box">
            <a href="">
              <img src="{{ asset('fitwithoutgym/images/link.png') }}" alt="">
            </a>
            <h6>
              DYNAMIC STRENGTH TRAINING
            </h6>
          </div>
        </div>

        <div class="box">
          <img src="{{ asset('fitwithoutgym/images/j4.webp') }}" alt="">
          <h6 class="visible_heading">
            HEALTH
          </h6>
          <div class="link_box">
            <a href="">
              <img src="{{ asset('fitwithoutgym/images/link.png') }}" alt="">
            </a>
            <h6>
              HEALTH
            </h6>
          </div>
        </div>
        <div class="box">
          <img src="{{ asset('fitwithoutgym/images/j5.webp') }}" alt="">
          <h6 class="visible_heading">
            WORKOUT
          </h6>
          <div class="link_box">
            <a href="">
              <img src="{{ asset('fitwithoutgym/images/link.png') }}" alt="">
            </a>
            <h6>
              WORKOUT
            </h6>
          </div>
        </div>
        <div class="box">
          <img src="{{ asset('fitwithoutgym/images/j6.webp') }}" alt="">
          <h6 class="visible_heading">
            STRATEGIES
          </h6>
          <div class="link_box">
            <a href="">
              <img src="{{ asset('fitwithoutgym/images/link.png') }}" alt="">
            </a>
            <h6>
              STRATEGIES
            </h6>
          </div>
        </div>
        <div class="box">
          <img src="{{ asset('fitwithoutgym/images/j7.webp') }}" alt="">
          <h6 class="visible_heading">
            WORKOUT
          </h6>
          <div class="link_box">
            <a href="">
              <img src="{{ asset('fitwithoutgym/images/link.png') }}" alt="">
            </a>
            <h6>
              WORKOUT
            </h6>
          </div>
        </div>
        <div class="box">
          <img src="{{ asset('fitwithoutgym/images/j8.webp') }}" alt="">
          <h6 class="visible_heading">
            STRATEGIES
          </h6>
          <div class="link_box">
            <a href="">
              <img src="{{ asset('fitwithoutgym/images/link.png') }}" alt="">
            </a>
            <h6>
              STRATEGIES
            </h6>
          </div>
        </div>
        <div class="box">
          <img src="{{ asset('fitwithoutgym/images/j9.webp') }}" alt="">
          <h6 class="visible_heading">
            WORKOUT
          </h6>
          <div class="link_box">
            <a href="">
              <img src="{{ asset('fitwithoutgym/images/link.png') }}" alt="">
            </a>
            <h6>
              WORKOUT
            </h6>
          </div>
        </div>
        <div class="box">
          <img src="{{ asset('fitwithoutgym/images/j10.webp') }}" alt="">
          <h6 class="visible_heading">
            STRATEGIES
          </h6>
          <div class="link_box">
            <a href="">
              <img src="{{ asset('fitwithoutgym/images/link.png') }}" alt="">
            </a>
            <h6>
              STRATEGIES
            </h6>
          </div>
        </div>
      </div>
          <div>
      <p> <strong> Monday:</strong> (Lunch/Dinner Recipe & Leg Workout with a chair)</p>
      <p> <strong> Tuesday:</strong> (Lunch/Dinner Recipe & Upper Body Workout with a chair)</p>
      <p> <strong> Wednesday:</strong> (Lunch/Dinner Recipe & Full Body Workout with a bottle of water)</p>
      <p> <strong> Thursday:</strong> (Lunch/Dinner Recipe &  Full Body Mat workout)</p>
      <p> <strong> Friday:</strong>  (Lunch/Dinner Recipe & Leg workout with band)</p>
      <p></p>
            <p></p>
      <p class="text-center">*Exercises can be performed without the band or you can get an additional 20% off all our products if you choose to add resistance 
        <a href="https://www.amazon.com/dp/B0DWD4HJHW?ref=cm_sw_r_cso_cp_apin_dp_9QEGMNZJJGAYAZ2GXD2H_1&ref_=cm_sw_r_cso_cp_apin_dp_9QEGMNZJJGAYAZ2GXD2H_1&social_share=cm_sw_r_cso_cp_apin_dp_9QEGMNZJJGAYAZ2GXD2H_1&starsLeft=1&th=1" class="btn btn-warning px-4 py-2 text-white">Buy.our.bands.</a>
👈🏼
      </p>
      
      
    </div>
    </div>

  </section>
  

  <!-- end service section -->


  <!-- Us section -->

  <section class="us_section layout_padding">
    <div class="container">
      <div class="heading_container">
        <h2>
          Get Started Now!
        </h2>
      </div>
      <div class="text-center">
        <h2>
          99 Usd
        </h2>
      </div>
      <div class="text-center">
        <a href="{{ route('general-checkout',['product' => 'fit-without-gym']) }}" class="btn btn-primary btn-lg" style="width: 400px; padding: 20px;"> Buy Now! </a>
      </div>
    </div>
  </section>

  <!-- end us section -->


  <!-- client section -->

  <section class="client_section layout_padding d-none">
    <div class="container">
      <div class="heading_container">
        <h2>
          What Says Our Customers
        </h2>
      </div>
      <div id="carouselExample2Indicators" class="carousel slide" data-ride="carousel">
        <ol class="carousel-indicators">
          <li data-target="#carouselExample2Indicators" data-slide-to="0" class="active"></li>
          <li data-target="#carouselExample2Indicators" data-slide-to="1"></li>
          <li data-target="#carouselExample2Indicators" data-slide-to="2"></li>
        </ol>
        <div class="carousel-inner">
          <div class="carousel-item active">
            <div class="box">
              <div class="img-box">
                <img src="images/client.png" alt="">
              </div>
              <div class="detail-box">
                <h5>
                  Consectetur
                </h5>
                <p>
                  Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et
                  dolore magna aliqua. Ut enim ad minim veniam, quis nostrud
                </p>
              </div>
            </div>
          </div>
          <div class="carousel-item">
            <div class="box">
              <div class="img-box">
                <img src="images/client.png" alt="">
              </div>
              <div class="detail-box">
                <h5>
                  Consectetur
                </h5>
                <p>
                  Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et
                  dolore magna aliqua. Ut enim ad minim veniam, quis nostrud
                </p>
              </div>
            </div>
          </div>
          <div class="carousel-item">
            <div class="box">
              <div class="img-box">
                <img src="images/client.png" alt="">
              </div>
              <div class="detail-box">
                <h5>
                  Consectetur
                </h5>
                <p>
                  Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et
                  dolore magna aliqua. Ut enim ad minim veniam, quis nostrud
                </p>
              </div>
            </div>
          </div>
        </div>
      </div>

    </div>
  </section>

  <!-- end client section -->

  <!-- result section -->

  <section class="result_section d-none">
    <div class="container-fluid">
      <div class="row">
        <div class="col-md-6 px-0">
          <div class="img-box">
            <img src="{{ asset('fitwithoutgym/images/result-img.jpg') }}" alt="">
          </div>
        </div>
        <div class="col-lg-4 col-md-5">
          <div class="detail-box">
            <h2>
              BUILT TO BRING <br>
              BEST RESULTS
            </h2>
            <p>
              Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et
              dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex
              ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit
            </p>
            <a href="">
              Get A Quote
            </a>
          </div>
        </div>
      </div>
    </div>
  </section>

  <!-- end result section -->


  <!-- contact section -->
  <section class="contact_section layout_padding d-none">
    <div class="container">
      <div class="heading_container">
        <h2>
          <span>
            Get In Touch
          </span>
        </h2>
      </div>
      <div class="layout_padding2-top">
        <div class="row">
          <div class="col-md-6 ">
            <form action="">
              <div class="contact_form-container">
                <div>
                  <div>
                    <input type="text" placeholder="Name" />
                  </div>
                  <div>
                    <input type="email" placeholder="Email" />
                  </div>
                  <div>
                    <input type="text" placeholder="Phone Number" />
                  </div>
                  <div class="mt-5">
                    <input type="text" placeholder="Message" />
                  </div>
                  <div class="mt-5">
                    <button type="submit">
                      Send
                    </button>
                  </div>
                </div>
              </div>
            </form>
          </div>
          <div class="col-md-6">
            <div class="map_container">
              <div class="map-responsive">
                <iframe
                  src="https://www.google.com/maps/embed/v1/place?key=AIzaSyA0s1a7phLN0iaD6-UE7m4qP-z21pH0eSc&q=Eiffel+Tower+Paris+France"
                  width="600" height="300" frameborder="0" style="border:0; width: 100%; height:100%"
                  allowfullscreen></iframe>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </section>
  <!-- end contact section -->


  <!-- info section -->

  <section class="info_section layout_padding2-top d-none">
    <div class="container">
      <div class="info_form">
        <h4>
          Our Newsletter
        </h4>
        <form action="">
          <input type="text" placeholder="Enter your email">
          <div class="d-flex justify-content-end">
            <button>
              subscribe
            </button>
          </div>
        </form>
      </div>
    </div>
    <div class="container">
      <div class="row">
        <div class="col-md-3">
          <h6>
            About Fit.done.well.
          </h6>
          <p>
            consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad
            minim veniam, quis nostrud exercitation u
          </p>
        </div>
        <div class="col-md-2 offset-md-1">
          <h6>
            Menus
          </h6>
          <ul>
            <li class=" active">
              <a class="" href="index.html">Home <span class="sr-only">(current)</span></a>
            </li>
            <li class="">
              <a class="" href="about.html">About </a>
            </li>
            <li class="">
              <a class="" href="service.html">Services </a>
            </li>
            <li class="">
              <a class="" href="#contactSection">Contact Us</a>
            </li>
            <li class="">
              <a class="" href="#">Login</a>
            </li>
          </ul>
        </div>
        <div class="col-md-3">
          <h6>
            Useful Links
          </h6>
          <ul>
            <li>
              <a href="">
                Adipiscing
              </a>
            </li>
            <li>
              <a href="">
                Elit, sed
              </a>
            </li>
            <li>
              <a href="">
                do Eiusmod
              </a>
            </li>
            <li>
              <a href="">
                Tempor
              </a>
            </li>
            <li>
              <a href="">
                incididunt
              </a>
            </li>
          </ul>
        </div>
        <div class="col-md-3">
          <h6>
            Contact Us
          </h6>
          <div class="info_link-box">
            <a href="">
              <img src="{{ asset('fitwithoutgym/images/location-white.png') }}" alt="">
              <span> No.123, loram ipusm</span>
            </a>
            <a href="">
              <img src="{{ asset('fitwithoutgym/images/call-white.png') }}" alt="">
              <span>+01 954-226-42941</span>
            </a>
            <a href="">
              <img src="{{ asset('fitwithoutgym/images/mail-white.png') }}" alt="">
              <span> demo123@gmail.com</span>
            </a>
          </div>
          <div class="info_social">
            <div>
              <a href="">
                <img src="{{ asset('fitwithoutgym/images/facebook-logo-button.png') }}" alt="">
              </a>
            </div>
            <div>
              <a href="">
                <img src="{{ asset('fitwithoutgym/images/twitter-logo-button.png') }}" alt="">
              </a>
            </div>
            <div>
              <a href="">
                <img src="{{ asset('fitwithoutgym/images/linkedin.png') }}" alt="">
              </a>
            </div>
            <div>
              <a href="">
                <img src="{{ asset('fitwithoutgym/images/instagram.png') }}" alt="">
              </a>
            </div>
          </div>
        </div>
      </div>
    </div>
  </section>

  <!-- end info section -->


  <!-- footer section -->
  <section class="container-fluid footer_section d-none ">
    <p>
    </p>
  </section>
  <!-- footer section -->




  <style>
    .slider_section {
      height: calc(100% - 80px);
      background-size: cover;
      background-position: center;
      background-repeat: no-repeat;
      transition: background-image 0.5s ease-in-out;
    }
  </style>


  <script>
    function openNav() {
      document.getElementById("myNav").classList.toggle("menu_width");
      document
        .querySelector(".custom_menu-btn")
        .classList.toggle("menu_btn-style");
    }
  </script>

  <script type="text/javascript" src="{{ asset('fitwithoutgym/js/jquery-3.4.1.min.js') }}"></script>
  <script type="text/javascript" src="{{ asset('fitwithoutgym/js/bootstrap.js') }}"></script>

  <script>
    $(document).ready(function () {
      // 1) Obtenemos el contenedor que tiene la clase .slider_section
      var $sliderSection = $('.slider_section');

      // 2) Definimos aquí los tres fondos que quieres para cada slide (ajusta rutas si es necesario)
      var backgrounds = [
        'url(http://fitdonewell.com/fitwithoutgym/images/m1.webp)',
        'url(http://fitdonewell.com/fitwithoutgym/images/m2.webp)',
        'url(http://fitdonewell.com/fitwithoutgym/images/m3.png)'
      ];

      // 3) Asignamos el fondo inicial (índice 0)
      $sliderSection.css('background-image', backgrounds[0]);

      // 4) Nos suscribimos al evento 'slid.bs.carousel' de Bootstrap (se dispara DESPUÉS de cada transición)
      $('#carouselExampleIndicators').on('slid.bs.carousel', function (e) {
        // e.target es el <div id="carouselExampleIndicators">. Buscamos qué slide está activo.
        var currentIndex = $(e.target).find('.carousel-item.active').index();
        // 5) Aplicamos inline style con el fondo correspondiente
        $sliderSection.css('background-image', backgrounds[currentIndex]);
      });
    });
  </script>

</body>

</html>