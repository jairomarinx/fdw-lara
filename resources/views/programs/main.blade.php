<!DOCTYPE html>
<html lang="en">

  <head>

    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="Transform your body, mind, and spirit with our holistic programs. Build strength, gain clarity, and reconnect with what matters most through intentional movement, mindful habits, and personalized coaching.">
    <meta name="author" content="Fit Done Well">
    <link href="https://fonts.googleapis.com/css?family=Poppins:100,100i,200,200i,300,300i,400,400i,500,500i,600,600i,700,700i,800,800i,900,900i&display=swap" rel="stylesheet">

    <title>Programs - Fit Done Well</title>

    <link rel="stylesheet" type="text/css" href="{{ asset('programs/assets/css/bootstrap.min.css') }}">
    <link rel="stylesheet" type="text/css" href="{{ asset('programs/assets/css/font-awesome.css') }}">
    <link rel="stylesheet" href="{{ asset('programs/assets/css/templatemo-training-studio.css') }}">

    </head>
    
    <body>
    
    <!-- ***** Preloader Start ***** -->
    <div id="js-preloader" class="js-preloader">
      <div class="preloader-inner">
        <span class="dot"></span>
        <div class="dots">
          <span></span>
          <span></span>
          <span></span>
        </div>
      </div>
    </div>
    <!-- ***** Preloader End ***** -->
    
    <!-- ***** Header Area Start ***** -->
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
                            <li><a href="{{ route('root') . '/events' }}">Events</a></li>
                            <li><a href="{{ route('contact-us') }}">Contact Us</a></li>
                        </ul>        
                        <a class='menu-trigger'>
                            <span>Menu</span>
                        </a>
                    </nav>
                </div>
            </div>
        </div>
    </header>
    <!-- ***** Header Area End ***** -->

    <!-- ***** Main Banner Area Start ***** -->
    <div class="main-banner" id="top">
        <video autoplay muted loop id="bg-video">
            <source src="{{ asset('programs/assets/images/v1.mp4') }}" type="video/mp4" />
        </video>

        <div class="video-overlay header-text">
            <div class="caption">
                <h6>total wellness, inside and out</h6>
                <h2>programs that align your <em>whole life</em></h2>
                <div class="main-button scroll-to-section">
                    <a href="#fwg1">Explore Programs</a>
                </div>
            </div>
        </div>
    </div>
    <!-- ***** Main Banner Area End ***** -->

    <!-- ***** What You Get Start ***** -->
    <section class="section" id="features">

      <div class="container-fluid ">
        <div class="row">
          <div class="col-lg-6 offset-lg-3">
            <div class="section-heading">
              <h2>What Your<em> Heart Deserves </em></h2>
              <br>
              <p>At Fit.Done.Well., our programs are designed to support your full transformation—physically, mentally, and emotionally. Whether you seek to reset your habits, strengthen your body, or deepen your mindfulness, we offer guided paths that meet you where you are and take you where you want to go.</p>

            </div>
          </div>
        </div>
        <br><br><br>

<div class="row" style="background-color:#222429;padding-top:40px;display:flex;flex-wrap:wrap;align-items:stretch;">

  <!-- Life Reset Retreats -->
  <div class="col-lg-4 col-md-6 col-sm-12 mb-4" style="display:flex;flex:1;">
    <div class="feature-item" style="display:flex;flex-direction:column;align-items:center;background-color:#F4F5F8;padding:40px 15px;width:100%;">
      <a href="{{ route('fit-reset-programs') }}">
        <img src="{{ asset('t1/img/services/brad-corey.webp') }}" alt="icon" class="img-fluid mb-3" style="max-width:100%;height:auto;">
      </a>
      <div class="right-content p-2" style="text-align:justify;max-width:90%;">
        <a href="{{ route('fit-reset-programs') }}">
          <h4 style="font-weight:bold;text-align:center;margin-bottom:0.5rem; font-size: 35px;" >Fit reset programs</h4>
        </a>
        <p style="margin:0 0 1rem 0;">
          One-on-one support from certified trainers who design every session around your goals, ensuring you stay motivated and on track.
        </p>
        <div style="text-align:center;margin-top:1rem;">

          <a href="{{ route('fit-reset-programs') }}"
             style="display:inline-block;background-color:transparent;color:#000;border:1px solid #000;padding:0.3rem 1.5rem;border-radius:6px;text-decoration:none;font-weight:600;letter-spacing:1px;">
            LEARN MORE
          </a>
        </div>
        <div style="text-align:center;margin-top:1.5rem;">

        </div>
      </div>
    </div>
  </div>

    <!-- Saturday Booty Camp -->
  <div class="col-lg-4 col-md-6 col-sm-12 mb-4" style="display:flex;flex:1;">
    <div class="feature-item" style="display:flex;flex-direction:column;align-items:center;background-color:#F4F5F8;padding:40px 15px;width:100%;">
      <a href="{{ route('mind-reset-programs') }}">
        <img src="{{ asset('programs/assets/images/mind3.webp') }}" alt="icon" class="img-fluid mb-3" style="max-width:100%;height:auto;">
      </a>
      <div class="right-content p-2" style="text-align:justify;max-width:90%;">
        <a href="{{ route('mind-reset-programs') }}">
          <h4 style="font-weight:bold;text-align:center;margin-bottom:0.5rem;font-size: 35px;">Mind reset programs</h4>
        </a>
        <p style="margin:0 0 1rem 0;">
One-on-one sessions with mindset mentors to build resilience, focus, and emotional intelligence. Guided techniques and journaling prompts to help declutter thoughts and strengthen decision making.
        </p>
        <div style="text-align:center;margin-top:1rem;">



          <a href="{{ route('mind-reset-programs') }}"
             style="display:inline-block;background-color:transparent;color:#000;border:1px solid #000;padding:0.3rem 1.5rem;border-radius:6px;text-decoration:none;font-weight:600;letter-spacing:1px;">
            LEARN MORE
          </a>
        </div>



        <div style="text-align:center;margin-top:1.5rem;">








          
        </div>
      </div>
    </div>
  </div>

    <!-- Kayak with Us -->
  <div class="col-lg-4 col-md-6 col-sm-12 mb-4 " style="display:flex;flex:1;">
    <div class="feature-item" style="display:flex;flex-direction:column;align-items:center;background-color:#F4F5F8;padding:40px 15px;width:100%;">
      <a href="{{ route('life-reset-programs') }}">
        <img src="{{ asset('programs/assets/images/mi3.webp') }}" alt="icon" class="img-fluid mb-3" style="max-width:100%;height:auto;">
      </a>
      <div class="right-content p-2" style="text-align:justify;max-width:90%;">
        <a href="{{ route('life-reset-programs') }}">
          <h4 style="font-weight:bold;text-align:center;margin-bottom:0.5rem;font-size: 35px;">Life reset programs</h4>
        </a>
        <p style="margin:0 0 1rem 0;">
Gentle routines to reconnect with your body, express emotions, and boost your vitality from the inside out.
        </p>
        <div style="text-align:center;margin-top:1rem;">




          <a href="{{ route('life-reset-programs') }}"
             style="display:inline-block;background-color:transparent;color:#000;border:1px solid #000;padding:0.3rem 1.5rem;border-radius:6px;text-decoration:none;font-weight:600;letter-spacing:1px;">
            LEARN MORE
          </a>
        </div>

      </div>
    </div>
  </div>

</div>







        

      </div>
    </section>
    <!-- ***** What You Get End ***** -->
    
    <div>
      <div class="row" id="fwg1">
        <div class="col-12 text-center">
          <h1 style="font-weight: 800;">Fit <span style="color: #FCD804;">Without </span> Gym</h1>
        </div>
      </div>
    </div>

    <section class="section" id="features">
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
            <a href="{{ route('fit-without-gym') }}">
            <div class="feature-item">
              <div class="left-icon">
                <img src="{{ asset('fwg.jpg') }}" alt="icon" class="img-fluid">
              </div>
              <div class="right-content p-2">
                <h4>Fit.Without.Gym.</h4>
                <p>Discover Fit.Without.Gym:
Your New Way to Transform
Your Body from Home
Imagine getting in shape, feeling energized, and looking amazing, all without ever stepping into a gym!

It is not just possible, it is simple, fun, and completely within your reach.</p>
              </div>
            </div>
            </a>
          </div>
        </div>
      </div>
    </section>


    <!-- ***** Call to Action Start ***** -->
    <section class="section" id="call-to-action">
        <div class="container">
            <div class="row">
                <div class="col-lg-10 offset-lg-1">
                    <div class="cta-content">
                        <h2>Meet Your  <em>Life Guides</em>,  <em></em>!</h2>
                        <p>Discover the path that fits you best,whether it’s daily habits, spiritual reset, or personalized training. Let us walk with you.</p>
                        <div class="main-button scroll-to-section">
                            <a href="#our-classes">Reset Today</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- ***** Call to Action End ***** -->




    <!-- ***** Contact Us Area Starts ***** -->
    <section class="section d-none" id="contact-us">
        <div class="container-fluid">
            <div class="row">
                <div class="col-lg-6 col-md-6 col-xs-12">
                    <div id="map">
                      <iframe src="https://maps.google.com/maps?q=Av.+Lucio+Costa,+Rio+de+Janeiro+-+RJ,+Brazil&t=&z=13&ie=UTF8&iwloc=&output=embed" width="100%" height="600px" frameborder="0" style="border:0" allowfullscreen></iframe>
                    </div>
                </div>
                <div class="col-lg-6 col-md-6 col-xs-12">
                    <div class="contact-form">
                        <form id="contact" action="" method="post">
                          <div class="row">
                            <div class="col-md-6 col-sm-12">
                              <fieldset>
                                <input name="name" type="text" id="name" placeholder="Name*" required="">
                              </fieldset>
                            </div>
                            <div class="col-md-6 col-sm-12">
                              <fieldset>
                                <input name="email" type="text" id="email" pattern="[^ @]*@[^ @]*" placeholder="Email Address*" required="">
                              </fieldset>
                            </div>
                            <div class="col-md-12 col-sm-12">
                              <fieldset>
                                <input name="subject" type="text" id="subject" placeholder="Subject">
                              </fieldset>
                            </div>
                            <div class="col-lg-12">
                              <fieldset>
                                <textarea name="message" rows="6" id="message" placeholder="Your Message" required=""></textarea>
                              </fieldset>
                            </div>
                            <div class="col-lg-12">
                              <fieldset>
                                <button type="submit" id="form-submit" class="main-button">Send Message</button>
                              </fieldset>
                            </div>
                          </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- ***** Contact Us Area Ends ***** -->

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
    
    <!-- ***** Footer Start ***** -->
    <footer>
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <p>Copyright &copy; 2025 Fit Done Well Programs
                    - Designed by Fit Done Well</p>
                </div>
            </div>
        </div>
    </footer>

    <!-- jQuery -->
    <script src="{{ asset('programs/assets/js/jquery-2.1.0.min.js') }}"></script>
    <!-- Bootstrap -->
    <script src="{{ asset('programs/assets/js/popper.js') }}"></script>
    <script src="{{ asset('programs/assets/js/bootstrap.min.js') }}"></script>
    <!-- Plugins -->
    <script src="{{ asset('programs/assets/js/scrollreveal.min.js') }}"></script>
    <script src="{{ asset('programs/assets/js/waypoints.min.js') }}"></script>
    <script src="{{ asset('programs/assets/js/jquery.counterup.min.js') }}"></script>
    <script src="{{ asset('programs/assets/js/imgfix.min.js') }}"></script> 
    <script src="{{ asset('programs/assets/js/mixitup.js') }}"></script> 
    <script src="{{ asset('programs/assets/js/accordions.js') }}"></script>
    <!-- Global Init -->
    <script src="{{ asset('programs/assets/js/custom.js') }}"></script>

  </body>
</html>
