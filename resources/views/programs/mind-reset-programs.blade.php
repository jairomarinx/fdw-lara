<!DOCTYPE html>
<html lang="en">

  <head>

    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="Empower your mind with Fit Done Well's Mind Reset Programs—designed to boost clarity, inner strength, and emotional balance through guided mental fitness and mindfulness practices.">
    <meta name="author" content="Fit Done Well">
    <link href="https://fonts.googleapis.com/css?family=Poppins:100,100i,200,200i,300,300i,400,400i,500,500i,600,600i,700,700i,800,800i,900,900i&display=swap" rel="stylesheet">

    <title>Mind.Reset.Programs - Fit Done Well</title>
    <!--

    TemplateMo 548 Training Studio

    https://templatemo.com/tm-548-training-studio

    -->
    <!-- Additional CSS Files -->
    <link rel="stylesheet" type="text/css" href="assets/css/bootstrap.min.css">

    <link rel="stylesheet" type="text/css" href="assets/css/font-awesome.css">

    <link rel="stylesheet" href="assets/css/templatemo-training-studio.css">

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
                        <!-- ***** Logo Start ***** -->
                        <a href="{{ route('root') }}" class="logo">Fit.<em>Done.Well.</em></a>
                        <!-- ***** Logo End ***** -->
                        <!-- ***** Menu Start ***** -->
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
                        <!-- ***** Menu End ***** -->
                    </nav>#
                </div>
            </div>
        </div>
    </header>
    <!-- ***** Header Area End ***** -->



    

    <!-- ***** Main Banner Area Start ***** -->
    <div class="main-banner" id="top">
        <video autoplay muted loop id="bg-video">
            <source src="assets/images/mind.mp4" type="video/mp4" />
        </video>

        <div class="video-overlay header-text">
            <div class="caption">
                <h6>reset your habits, renew your life</h6>
                <h2>grow stronger with <em>mind reset programs</em></h2>
                <div class="main-button scroll-to-section">
                    <a href="#mrp">Explore Programs</a>
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
              <h2 style="font-size: 40px;">What Your<em> Mind Deserves </em></h2>
              <br>
              <p>At Fit.Done.Well., our programs are designed to support your full transformation physically, mentally, and emotionally. Whether you seek to reset your habits, strengthen your body, or deepen your mindfulness, we offer guided paths that meet you where you are and take you where you want to go.</p>

            </div>
          </div>
        </div>
        <br><br><br>

<div class="row" style="background-color:#222429;padding-top:40px;display:flex;flex-wrap:wrap;align-items:stretch;">

  <!-- Life Reset Retreats -->
  <div class="col-lg-4 col-md-6 col-sm-12 mb-4" style="display:flex;flex:1;">
    <div class="feature-item" style="display:flex;flex-direction:column;align-items:center;background-color:#F4F5F8;padding:40px 15px;width:100%;">
      <a href="{{ route('fit-reset-programs') }}">
        <img src="{{ asset('programs/assets/images/mind1.webp') }}" alt="icon" class="img-fluid mb-3" style="max-width:100%;height:auto;">
      </a>
      <div class="right-content p-2" style="text-align:justify;max-width:90%;">
        <a href="{{ route('fit-reset-programs') }}">
          <h4 style="font-weight:bold;text-align:center;margin-bottom:0.5rem; font-size: 35px;" >Mental Fitness Coaching</h4>
        </a>
        <p style="margin:0 0 1rem 0;">
          One-on-one sessions with mindset mentors to build resilience, focus, and emotional intelligence.
        </p>

                <br>
                            <div class="main-button scroll-to-section text-center">
                              <a href="{{ route('general-checkout', ['product' => 'mind-reset-program']) }}" style="color: black; font-size: larger; font-weight: 600;" >Sign Up $199 USD</a>
                            </div>
      </div>
    </div>
  </div>

    <!-- Saturday Booty Camp -->
  <div class="col-lg-4 col-md-6 col-sm-12 mb-4" style="display:flex;flex:1;">
    <div class="feature-item" style="display:flex;flex-direction:column;align-items:center;background-color:#F4F5F8;padding:40px 15px;width:100%;">
      <a href="{{ route('mind-reset-programs') }}">
        <img src="{{ asset('programs/assets/images/mind2.webp') }}" alt="icon" class="img-fluid mb-3" style="max-width:100%;height:auto;">
      </a>
      <div class="right-content p-2" style="text-align:justify;max-width:90%;">
        <a href="{{ route('mind-reset-programs') }}">
          <h4 style="font-weight:bold;text-align:center;margin-bottom:0.5rem;font-size: 35px;">Cognitive Clarity Practices</h4>
        </a>
        <p style="margin:0 0 1rem 0;">
Guided techniques and journaling prompts to help declutter thoughts and strengthen decision-making.
        </p>
                <br>
                            <div class="main-button scroll-to-section text-center">
                              <a href="{{ route('general-checkout', ['product' => 'mind-reset-program']) }}" style="color: black; font-size: larger; font-weight: 600;" >Sign Up $199 USD</a>
                            </div>
      </div>
    </div>
  </div>

    <!-- Kayak with Us -->
  <div class="col-lg-4 col-md-6 col-sm-12 mb-4 " style="display:flex;flex:1;">
    <div class="feature-item" style="display:flex;flex-direction:column;align-items:center;background-color:#F4F5F8;padding:40px 15px;width:100%;">
      <a href="{{ route('life-reset-programs') }}">
        <img src="{{ asset('programs/assets/images/mind3.webp') }}" alt="icon" class="img-fluid mb-3" style="max-width:100%;height:auto;">
      </a>
      <div class="right-content p-2" style="text-align:justify;max-width:90%;">
        <a href="{{ route('life-reset-programs') }}">
          <h4 style="font-weight:bold;text-align:center;margin-bottom:0.5rem;font-size: 35px;">Mindful Movement & Breathwork</h4>
        </a>
        <p style="margin:0 0 1rem 0;">
Simple, effective routines to relieve stress, boost energy, and regulate your nervous system.
        </p>


      </div>
                <br>
                            <div class="main-button scroll-to-section text-center">
                              <a href="{{ route('general-checkout', ['product' => 'mind-reset-program']) }}" style="color: black; font-size: larger; font-weight: 600;" >Sign Up $199 USD</a>
                            </div>

    </div>
  </div>

</div>







        

      </div>
    </section>
    <!-- ***** What You Get End ***** -->    



    <!-- ***** Call to Action Start ***** -->
    <section class="section" id="call-to-action">
        <div class="container">
            <div class="row">
                <div class="col-lg-10 offset-lg-1">
                    <div class="cta-content">
                        <h2>Your mind matters—<em>reset</em> it with purpose</h2>
                        <p>Start your journey toward clarity, calm, and conscious living with our Mind Reset Programs.</p>
                        <div class="main-button scroll-to-section">
                            <a href="{{ route('root') }}/general-checkout/mind-reset-program">Start Your Mind Reset</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- ***** Call to Action End ***** -->

    <!-- ***** Our Programs Start ***** -->
    <section class="section d-none" id="our-classes">
        <div class="container">
            <div class="row">
                <div class="col-lg-6 offset-lg-3">
                    <div class="section-heading">
                        <h2>Our <em>Programs</em></h2>
                        <img src="assets/images/line-dec.png" alt="">
                        <p>Choose from targeted workouts designed for different goals and experience levels</p>
                    </div>
                </div>
            </div>
            <div class="row" id="tabs">
              <div class="col-lg-4">
                <ul>
                  <li><a href='#tabs-1'><img src="assets/images/tabs-first-icon.png" alt="">Full Body Workout</a></li>
                  <li><a href='#tabs-2'><img src="assets/images/tabs-first-icon.png" alt="">Upper Body Workout</a></li>
                  <li><a href='#tabs-3'><img src="assets/images/tabs-first-icon.png" alt="">Core Workout</a></li>
                  <li><a href='#tabs-4'><img src="assets/images/tabs-first-icon.png" alt="">Leg Workout</a></li>
                  <div class="main-rounded-button"><a href="#">View All Programs</a></div>
                </ul>
              </div>
              <div class="col-lg-8">
                <section class='tabs-content'>
                  <article id='tabs-1'>
                    <img src="assets/images/training-image-01.jpg" alt="Full Body Workout">
                    <h4>Full Body Workout</h4>
                    <p>Comprehensive routines targeting every muscle group to improve overall strength, endurance, and balance</p>
                    <div class="main-button">
                        <a href="#">Learn More</a>
                    </div>
                  </article>
                  <article id='tabs-2'>
                    <img src="assets/images/training-image-02.jpg" alt="Upper Body Workout">
                    <h4>Upper Body Workout</h4>
                    <p>Focused exercises for chest, back, shoulders, and arms to build definition and functional strength</p>
                    <div class="main-button">
                        <a href="#">Learn More</a>
                    </div>
                  </article>
                  <article id='tabs-3'>
                    <img src="assets/images/training-image-03.jpg" alt="Core Workout">
                    <h4>Core Workout</h4>
                    <p>Dynamic routines to strengthen your core, improve posture, and enhance stability throughout daily activities</p>
                    <div class="main-button">
                        <a href="#">Learn More</a>
                    </div>
                  </article>
                  <article id='tabs-4'>
                    <img src="assets/images/training-image-04.jpg" alt="Leg Workout">
                    <h4>Leg Workout</h4>
                    <p>Targeted training for quads, hamstrings, glutes, and calves to boost power and lower body performance</p>
                    <div class="main-button">
                        <a href="#">Learn More</a>
                    </div>
                  </article>
                </section>
              </div>
            </div>
        </div>
    </section>
    <!-- ***** Our Programs End ***** -->
    
    <section class="section d-none" id="schedule">
        <div class="container">
            <div class="row">
                <div class="col-lg-6 offset-lg-3">
                    <div class="section-heading dark-bg">
                        <h2>Program <em>Schedule</em></h2>
                        <img src="assets/images/line-dec.png" alt="">
                        <p>Find the days and times that work best for your selected programs</p>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-lg-12">
                    <div class="filters">
                        <ul class="schedule-filter">
                            <li class="active" data-tsfilter="monday">Monday</li>
                            <li data-tsfilter="tuesday">Tuesday</li>
                            <li data-tsfilter="wednesday">Wednesday</li>
                            <li data-tsfilter="thursday">Thursday</li>
                            <li data-tsfilter="friday">Friday</li>
                        </ul>
                    </div>
                </div>
                <div class="col-lg-10 offset-lg-1">
                    <div class="schedule-table filtering">
                        <table>
                            <tbody>
                                <tr>
                                    <td class="day-time">Full Body Workout</td>
                                    <td class="monday ts-item show" data-tsmeta="monday">10:00AM - 11:30AM</td>
                                    <td class="tuesday ts-item" data-tsmeta="tuesday">2:00PM - 3:30PM</td>
                                    <td>Ana Lopez</td>
                                </tr>
                                <tr>
                                    <td class="day-time">Upper Body Workout</td>
                                    <td class="friday ts-item" data-tsmeta="friday">10:00AM - 11:30AM</td>
                                    <td class="thursday friday ts-item" data-tsmeta="thursday" data-tsmeta="friday">2:00PM - 3:30PM</td>
                                    <td>Carlos Ruiz</td>
                                </tr>
                                <tr>
                                    <td class="day-time">Leg Workout</td>
                                    <td class="tuesday ts-item" data-tsmeta="tuesday">10:00AM - 11:30AM</td>
                                    <td class="monday ts-item show" data-tsmeta="monday">2:00PM - 3:30PM</td>
                                    <td>Luis G. Martinez</td>
                                </tr>
                                <tr>
                                    <td class="day-time">Core Workout</td>
                                    <td class="wednesday ts-item" data-tsmeta="wednesday">10:00AM - 11:30AM</td>
                                    <td class="friday ts-item" data-tsmeta="friday">2:00PM - 3:30PM</td>
                                    <td>Maria Gomez</td>
                                </tr>
                                <tr>
                                    <td class="day-time">Mindfulness.Morning.Habits</td>
                                    <td class="thursday ts-item" data-tsmeta="thursday">10:00AM - 11:30AM</td>
                                    <td class="wednesday ts-item" data-tsmeta="wednesday">2:00PM - 3:30PM</td>
                                    <td>Sofia Perez</td>
                                </tr>
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- ***** Trainers Starts ***** -->
    <section class="section" id="mrp">
        <div class="container">
            <div class="row">
                <div class="col-lg-6 offset-lg-3">
                    <div class="section-heading">
                        <h2>Our <em>Programs</em></h2>
                    </div>
                </div>
            </div>
            <div class="row ">
                <div class="col-lg-12 text-center">
                    <div class="trainer-item">
                        <div class="image-thumb">
                            <a href="{{ route('fit-without-gym') }}"><img src="{{ asset('programs/assets/images/mindh.webp') }}" alt="" class="img-fluid" ></a>
                        </div>
                        <div class="down-content">
                            <h2 style="font-weight: 600; margin-top: 20px;">Mind Reset Program.</h2>
                            <p class="p-2">Experience mental clarity and emotional stability with self-paced sessions, guided breathwork, and mindset rituals—all from home.</p>

                <br>
                            <div class="main-button scroll-to-section text-center">
                              <a href="{{ route('general-checkout', ['product' => 'mind-reset-program']) }}" style="color: black; font-size: larger; font-weight: 600;" >Sign Up $199 USD</a>
                            </div>

                            <ul class="social-icons d-none">
                                <li><a href="#"><i class="fa fa-facebook"></i></a></li>
                                <li><a href="#"><i class="fa fa-twitter"></i></a></li>
                                <li><a href="#"><i class="fa fa-linkedin"></i></a></li>
                                <li><a href="#"><i class="fa fa-behance"></i></a></li>
                            </ul>
                        </div>
                    </div>
                </div>


            </div>
        </div>
    </section>
    <!-- ***** Trainers Ends ***** -->
    
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
    <script src="assets/js/jquery-2.1.0.min.js"></script>

    <!-- Bootstrap -->
    <script src="assets/js/popper.js"></script>
    <script src="assets/js/bootstrap.min.js"></script>

    <!-- Plugins -->
    <script src="assets/js/scrollreveal.min.js"></script>
    <script src="assets/js/waypoints.min.js"></script>
    <script src="assets/js/jquery.counterup.min.js"></script>
    <script src="assets/js/imgfix.min.js"></script> 
    <script src="assets/js/mixitup.js"></script> 
    <script src="assets/js/accordions.js"></script>
    
    <!-- Global Init -->
    <script src="assets/js/custom.js"></script>

  </body>
</html>
