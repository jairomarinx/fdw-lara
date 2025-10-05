    <!-- Carousel Start -->
    <div class="container-fluid p-0 mb-0">
        <div id="header-carousel" class="carousel slide" data-bs-ride="carousel">
            <div class="carousel-inner">
                <div class="carousel-item active">
                    <img class="w-100" src="{{ asset('t1/img/foto-laly1.jpeg')  }}" alt="Image">
                    <div class="carousel-caption d-flex flex-column align-items-center justify-content-center">
                        <div class="p-3" style="max-width: 900px;">
                            <div class="cuadro-laly">
                                <h5 class="text-white text-uppercase">Fit.Done.Well.</h5>
                                <h1 class="display-2 text-white mb-md-4 fs-1 text-uppercase">Fitness - MindFulNess - Wholeness</h1>
                                <a href="{{ route('contact-us') }}" class="btn btn-primary bg-white py-md-3 px-md-5 me-3">Join Us</a>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="carousel-item">
                    <img class="w-100" src="{{ asset('t1/img/foto-laly2.jpeg') }}" alt="Image">
                    <div class="carousel-caption d-flex flex-column align-items-center justify-content-center">
                        <div class="p-3" style="max-width: 900px;">
                            <div class="cuadro-laly">
                                <h5 class="text-white text-uppercase">Fitness</h5>
                                <h1 class="display-2 text-white text-uppercase mb-md-4 fs-1 d-none">Fit.Reset.Program.</h1>
                                <a href="https://shop.fitdonewell.com/" class="btn btn-primary py-md-3 px-md-5 me-3">Fit.Reset.Program.</a>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="carousel-item">
                    <img class="w-100" src="{{ asset('t1/img/laly3r.jpg') }}" alt="Image">
                    <div class="carousel-caption d-flex flex-column align-items-center justify-content-center">
                        <div class="p-3" style="max-width: 900px;">
                            <div class="cuadro-laly">
                                <h5 class="text-white text-uppercase">MindFulness</h5>
                                <h1 class="display-2 text-white text-uppercase mb-md-4 fs-1 d-none">Mind.Reset.Program.</h1>
                                <a href="https://shop.fitdonewell.com/contact" class="btn btn-primary py-md-3 px-md-5 me-3">Mind.Reset.Program.</a>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="carousel-item">
                    <img class="w-100" src="{{ asset('t1/img/laly-real.jpg') }}" alt="Image">
                    <div class="carousel-caption d-flex flex-column align-items-center justify-content-center">
                        <div class="p-3" style="max-width: 900px;">
                            <div class="cuadro-laly">
                                <h5 class="text-white text-uppercase">Wholeness</h5>
                                <h1 class="display-2 text-white text-uppercase mb-md-4 fs-1 d-none">Life.Reset.Program.</h1>
                                <a href="https://shop.fitdonewell.com/contact" class="btn btn-primary py-md-3 px-md-5 me-3">Life.Reset.Program.</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <button class="carousel-control-prev" type="button" data-bs-target="#header-carousel"
                data-bs-slide="prev">
                <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                <span class="visually-hidden">Previous</span>
            </button>
            <button class="carousel-control-next" type="button" data-bs-target="#header-carousel"
                data-bs-slide="next">
                <span class="carousel-control-next-icon" aria-hidden="true"></span>
                <span class="visually-hidden">Next</span>
            </button>
        </div>
    </div>
    <!-- Carousel End -->
    <div class="row gx-0 bg-secondary d-none d-lg-flex">
        <div class="col-lg-7 px-5 text-start">
            <div class="h-100 d-inline-flex align-items-center py-2 me-4">
                <i class="fa fa-envelope text-primary me-2"></i>
                <h6 class="mb-0">fitdonewell@gmail.com</h6>
            </div>
            <div class="h-100 px-5 d-inline-flex align-items-center py-2">
                <i class="fa fa-phone-alt text-primary me-2"></i>
                <h6 class="mb-0">+1 (954) 226-4294 </h6>
            </div>
            <div class="h-100 d-inline-flex align-items-center py-2">
                <i class="fa fa-phone-alt text-primary me-2"></i>
                <h6 class="mb-0">+1 (602)-527-1055 </h6>
            </div>
        </div>
        <div class="col-lg-5 px-5 text-end">
            <div class="d-inline-flex align-items-center py-2">
                <a class="btn btn-light btn-square rounded-circle me-2" href="https://web.facebook.com/laly.pena.54">
                    <i class="fab fa-facebook-f"></i>
                </a>
                <a class="btn btn-light btn-square rounded-circle me-2" href="https://www.tiktok.com/@fit.done.well">
                    <i class="fab fa-tiktok"></i>
                </a>

                <a class="btn btn-light btn-square rounded-circle me-2" href="https://www.instagram.com/fit.done.well/?locale=pt_BR&hl=am-et">
                    <i class="fab fa-instagram"></i>
                </a>
                <a class="btn btn-light btn-square rounded-circle me-2" href="https://www.youtube.com/lalytawellness">
                    <i class="fab fa-youtube"></i>
                </a>
                <a class="btn btn-light btn-square rounded-circle me-2" href="https://br.pinterest.com/lalytawellness/">
                    <i class="fab fa-pinterest"></i>
                </a>
            </div>
        </div>
    </div>

    <!-- About Start -->
    <div class="container-fluid p-5" id="id_about">
        <div class="row gx-5">
            <div class="col-lg-5 mb-5 mb-lg-0" style="min-height: 500px;">
                <div class="position-relative h-100">
                    <img class="position-absolute w-100 h-100 rounded img-fluid" id="img_laly_fuerte" src="{{ asset('t1/img/laly-fuerte2.jpg') }}" style="object-fit: cover; object-position: top;">
                    <img class="position-absolute w-100 h-100 rounded img-fluid  d-none" id="img_brad_fuerte" src="{{ asset('t1/img/brad-fuerte-about.png') }}" style="object-fit: cover; object-position: top;">
                </div>
            </div>
            <div class="col-lg-7">
                <div class="mb-4">
                    <h5 class="text-primary text-uppercase fs-3"><strong>About</strong> </h5>
                    <h1 class="display-3 text-uppercase mb-0">Fit.Done.Well.</h1>
                </div>
                <h4 class="text-body mb-4">Empowering <strong class="text-primary">Body.Mind.Spirit.</strong> as connected treasures, with the mission to Coach those who are ready for a <strong class="text-primary">Life.Reset.Program.</strong></h4>
                <p class="mb-4 text-justify">At <strong>Fit.Done.Well.</strong>, we believe in the power of working on all aspects of your well being: <strong> Body.Mind.Spirit.</strong> Our mission is to create a world where strength, kindness, and open minds lead the way. We offer personalized programs, interactive experiences, and a community that supports you every step of the way. Whether it's through physical workouts, nutritional plans, or mindful practices, we are here to help you achieve a healthier, stronger, and more fulfilling life. Join us in our journey to better priorities and a brighter future!</p>
                <div class="rounded bg-dark p-5">
                    <ul class="nav nav-pills justify-content-between mb-3">
                        <li class="nav-item w-50">
                            <a class="nav-link text-uppercase text-center w-100  active " id="about_us" data-bs-toggle="pill" onclick="about_us()" href="#pills-1">About Us</a>
                        </li>
                        <li class="nav-item w-50">
                            <a class="nav-link text-uppercase text-center w-100 " id="why_choose_us" data-bs-toggle="pill" href="#pills-2" onclick="why_choose_us()">Why Choose Us</a>
                        </li>
                    </ul>
                    <div class="tab-content">
                        <div class="tab-pane fade show active" id="pills-1">
                            <p class="text-secondary mb-0 text-justify">As a company, we focus on the three fundamental pillars of being: Body.Mind.Spirit, We understand that true wellness comes when these elements are in balance. Our fitness programs not only challenge your body but also nurture your heart with kindness and compassion. We help you cultivate a strong mind by fostering mental clarity and resilience. Together, these pillars create a harmonious life where strength, well-being, and peace thrive.</p>
                        </div>
                        <div class="tab-pane fade" id="pills-2">
                            <p class="text-secondary mb-0 text-justify">At Fit.Done.Well., we offer more than just fitness, we provide a holistic approach to wellness. Our unique programs are designed to nurture your Body.Mind.Spirit., creating a balance that supports long-term health and happiness. With personalized coaching, interactive experiences, and a supportive community, we guide you every step of the way. Whether you're looking to improve your physical fitness, boost your mental clarity, or find a deeper connection to yourself, we're here to help you unlock your full potential and live a life of strength, kindness, and open-mindedness. Choose us because your well-being deserves to be treated as a whole.</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- About End -->

    <div class="mb-5 text-center">
        <h5 class="text-primary text-uppercase fs-3"><strong>Our</strong></h5>
        <h1 class="display-3 text-uppercase mb-0">THREE PILLARS</h1>
        <h5 class="text-gray fs-2"><span class="text-primary"> Strong Bodies • Open Minds • Kind Hearts • </span> </h5>
        <h4 class="text-body mb-4">With the aim to unlock your best life</h4>

    </div>

    <!-- Programe Start -->
    <div class="container-fluid programe position-relative px-5 mt-5" style="margin-bottom: 135px;">
        <div class="row g-5 gb-5">
            <div class="col-lg-4 col-md-6">
                <div class="bg-light rounded text-justify p-5">
                    <img src="{{ asset('t1/img/laly-body.jpg') }}" alt="body" class="img-fluid">
                    <h3 class="text-uppercase my-4 fs-1 text-center">Strong Bodies</h3>
                    <p class="text-center text-uppercase"><strong> Celebrate Your Body with Strength and Vitality</strong><br><br></p>

                    <span class="text-justify">At Fit.Done.Well., we believe your body is a powerful tool that deserves celebration. Our body-focused programs are designed to help you build strength, increase endurance, and achieve your fitness goals in a way that honors your unique capabilities. <span class="d-none" id="id_c1">Whether you're engaging in full-body workouts, leg sessions, or core-focused exercises, every movement is a step toward a healthier, stronger you. With personalized routines, live sessions, and expert guidance, we empower you to embrace your body's potential and unlock its true power. Celebrate your health with every workout and transform your body into a source of confidence and vitality.</span></span></p>
                    <a class="text-uppercase" href="javascript:void(0);" OnClick="read_more(1)" id="id_read1">Read More <i class="bi bi-arrow-right"></i></a>
                    <a href="http://shop.fitdonewell.com" class="btn btn-warning d-block text-center mx-auto mt-4">FIT.RESET.PROGRAMS.</a>
                </div>
            </div>
            <div class="col-lg-4 col-md-6">
                <div class="bg-light rounded text-justify p-5">
                    <img src="{{ asset('t1/img/brad-mind.jpg') }}" class="img-fluid">
                    <h3 class="text-uppercase my-4 fs-1 text-center">Open Minds</h3>
                    <p class="text-center text-uppercase"><strong> Nurture Your Mind for Clarity and Growth</strong><br><br></p>

                    <span class="text-justify">At Fit.Done.Well., we understand that a strong mind is the foundation of true wellness. Our programs focus on mental clarity, resilience, and mindfulness to help you navigate life's challenges with confidence. <span class="d-none" id="id_c2">By integrating mental exercises, journaling, and mindful habits into your routine, we empower you to stay focused, positive, and centered. Embrace the power of your mind to unlock endless possibilities for personal growth, and discover how mental strength can elevate your overall well-being. With us, your mind becomes a source of strength, peace, and limitless potential.</span></span><br><br></p>
                    <a class="text-uppercase" href="javascript:void(0);" OnClick="read_more(2)" id="id_read2">Read More <i class="bi bi-arrow-right"></i></a>
                    <a href="http://shop.fitdonewell.com" class="btn btn-warning d-block text-center mx-auto mt-4">MIND.RESET.PROGRAMS.</a>

                </div>
            </div>
            <div class="col-lg-4 col-md-6">
                <div class="bg-light rounded text-justify p-5">
                    <img src="{{ asset('t1/img/spirit.jpg') }}" class="img-fluid" alt="">
                    <h3 class="text-uppercase my-4 fs-1 text-center">Kind Hearts</h3>
                    <p class="text-center text-uppercase"><strong>Elevate Your Spirit with Peace and Purpose</strong> <br><br></p>

                    <span class="text-justify">At Fit.Done.Well., we believe that nurturing your spirit is key to a fulfilling life. Our programs focus on fostering inner peace, mindfulness, and a deeper connection to yourself.<br> <span class="d-none" id="id_c3"> Through mindful activities, meditation, and holistic practices, we guide you on a journey to rediscover balance and purpose. By embracing your spirit, you open the door to greater emotional resilience, compassion, and a sense of fulfillment. Let your spirit soar, and experience the transformative power of a connected and grounded self<br><br></span></span><br> </p>
                    <a class="text-uppercase" href="javascript:void(0);" OnClick="read_more(3)" id="id_read3">Read More <i class="bi bi-arrow-right"></i></a>
                    <a href="http://shop.fitdonewell.com" class="btn btn-warning d-block text-center mx-auto mt-4">LIFE.RESET.PROGRAMS.</a>

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
    <!-- Programe Start -->


    <style>
        .marquee {
            display: flex;
            white-space: nowrap;
        }

        .marquee img {
            height: 250px;
            width: 400px;
            object-fit: cover;
            border-radius: 10px;
            box-shadow: 0 4px 6px rgba(0, 0, 0, 0.3);
            margin-right: 10px;
            user-select: none;
            pointer-events: none;
        }
    </style>

    <script>
        document.addEventListener('DOMContentLoaded', () => {
            const marquee = document.getElementById('marquee');

            const marqueeContent = marquee.innerHTML;
            marquee.innerHTML += marqueeContent;

            let scrollAmount = 0;
            const speed = 1.5;

            function animate() {
                scrollAmount += speed;
                if (scrollAmount >= marquee.scrollWidth / 2) {
                    scrollAmount = 0;
                }
                marquee.style.transform = `translateX(${-scrollAmount}px)`;
                requestAnimationFrame(animate);
            }

            animate();
        });
    </script>


    <a href="http://shop.fitdonewell.com" class="text-decoration-none">
        <div class="container text-center mt-4 mb-4">
            <div class="row">
                <div class="col-lg-12 col-md-12 text-center">
                    <h1 class="display-3 text-uppercase mb-2">Visit Our Shop.</h1>
                </div>
            </div>
        </div>


        <div class="marquee-wrapper" style="overflow:hidden; width: 100%; background:black; padding:10px;">
            <div class="marquee" id="marquee">
                <img src="{{ asset('t1/img/kshop1.webp') }}" alt="Shop Image">
                <img src="{{ asset('t1/img/kshop2.webp') }}" alt="Shop Image">
                <img src="{{ asset('t1/img/kshop3.webp') }}" alt="Shop Image">
                <img src="{{ asset('t1/img/kshop4.webp') }}" alt="Shop Image">
                <img src="{{ asset('t1/img/kshop5.webp') }}" alt="Shop Image">
                <img src="{{ asset('t1/img/kshop6.webp') }}" alt="Shop Image">


                <img src="{{ asset('t1/img/marquee/c1.webp') }}" alt="Shop Image">
                <img src="{{ asset('t1/img/marquee/c2.webp') }}" alt="Shop Image">
                <img src="{{ asset('t1/img/marquee/c3.webp') }}" alt="Shop Image">
                <img src="{{ asset('t1/img/marquee/c4.webp') }}" alt="Shop Image">
                <img src="{{ asset('t1/img/marquee/c5.webp') }}" alt="Shop Image">
                <img src="{{ asset('t1/img/marquee/c7.webp') }}" alt="Shop Image">
            </div>
        </div>
    </a>

<style>
    .cta-overlay-wrapper {
        position: relative;
        width: 100%;
        height: 100px; /* Ajusta esta altura según el alto real del marquee */
    }

    .cta-overlay-button {
        position: absolute;
        top: 35%; /* ahora sí sube */
        left: 50%;
        transform: translate(-50%, -50%);
        z-index: 10;
        background-color: #ffc107;
        color: black;
        padding: 1rem 2rem;
        font-weight: bold;
        text-transform: uppercase;
        border-radius: 5px;
        text-decoration: none;
        box-shadow: 0 4px 12px rgba(0,0,0,0.3);
    }
</style>


<div class="cta-overlay-wrapper">
    <a href="http://shop.fitdonewell.com" class="cta-overlay-button">
        👆 Click Here
    </a>
</div>

    

<style>
    .amazon-shop img {
        width: 100%;
        height: auto;
        max-width: 100%;
        display: block;
    }

    .amazon-shop .row {
        margin-right: 0;
        margin-left: 0;
    }

    .amazon-shop .col-md-3 {
        padding-left: 0;
        padding-right: 0;
    }
</style>



    <div class="container-fluid px-0 mt-3 mb-3 amazon-shop">
        <div class="mb-5 text-center">
            <h5 class="text-primary text-uppercase fs-2 "><strong>Our Shop in Amazon</strong> </h5>
            <div class="row">
                <div class="col-md-3">
                    <a href="https://www.amazon.com/dp/B0DWD4HJHW?ref=cm_sw_r_cso_cp_apin_dp_9QEGMNZJJGAYAZ2GXD2H_1&ref_=cm_sw_r_cso_cp_apin_dp_9QEGMNZJJGAYAZ2GXD2H_1&social_share=cm_sw_r_cso_cp_apin_dp_9QEGMNZJJGAYAZ2GXD2H_1&starsLeft=1&th=1">
                        <img src="{{ asset('t1/img/amazon1.png') }}" alt="" class="img-fluid">
                    </a>
                </div>
                <div class="col-md-3">
                    <a href="https://www.amazon.com/dp/B0DYQHZ5XF?ref=cm_sw_r_cso_cp_apin_dp_XMXPSFNATSTK190DG725&ref_=cm_sw_r_cso_cp_apin_dp_XMXPSFNATSTK190DG725&social_share=cm_sw_r_cso_cp_apin_dp_XMXPSFNATSTK190DG725&starsLeft=1">
                        <img src="{{ asset('t1/img/amazon2.png') }}" alt="" class="img-fluid">
                    </a>
                </div>
                <div class="col-md-3">
                    <a href="https://www.amazon.com/dp/B0DYQRDRYK?ref=cm_sw_r_cso_cp_apin_dp_D2XP34KXT15212N5K7QC&ref_=cm_sw_r_cso_cp_apin_dp_D2XP34KXT15212N5K7QC&social_share=cm_sw_r_cso_cp_apin_dp_D2XP34KXT15212N5K7QC&starsLeft=1">
                        <img src="{{ asset('t1/img/amazon3.png') }}" alt="" class="img-fluid">
                    </a>
                </div>

                <div class="col-md-3">
                    <a href="https://a.co/d/2suGmx9">
                        <img src="{{ asset('t1/img/amazon8.png?v=2') }}" alt="" class="img-fluid">
                    </a>
                </div>


            </div>
        </div>
    </div>

<!-- Nuestros tres pilares de venta   -->
    <div class="container-fluid p-5" id="id_schedule">
        <div class="mb-5 text-center">
            <h5 class="text-primary text-uppercase"></h5>
            <h1 class="display-3 text-uppercase mb-0">Services.Programs.Products.</h1>
        </div>
        <div class="row g-5">
            <div class="col-lg-4 col-md-6">
                <div class="team-item position-relative">
                    <div class="position-relative overflow-hidden rounded">
                        <img class="img-fluid w-100" src="{{ asset('t1/img/brad-cook.webp') }}" alt="">
                        <div class="team-overlay">
                            <div class="d-flex align-items-center justify-content-start">
                                <a class="btn btn-light btn-square rounded-circle mx-1" href="http://shop.fitdonewell.com"><i class="fas fa-link"></i> </a>
                            </div>
                        </div>
                    </div>
                    <div class="position-absolute start-0 bottom-0 w-100 rounded-bottom text-center p-4" style="background: rgba(34, 36, 41, .9);">
                        <a href="http://shop.fitdonewell.com" class="btn btn-primary p-4">Our.Great.Services.</a>
                    </div>
                </div>
            </div>

            <div class="col-lg-4 col-md-6">
                <div class="team-item position-relative">
                    <div class="position-relative overflow-hidden rounded">
                        <img class="img-fluid w-100" src="{{ asset('t1/img/brad-laly.webp') }}" alt="">
                        <div class="team-overlay">
                            <div class="d-flex align-items-center justify-content-start">
                                <a class="btn btn-light btn-square rounded-circle mx-1" href="http://shop.fitdonewell.com"><i class="fas fa-link"></i> </a>

                            </div>
                        </div>
                    </div>
                    <div class="position-absolute start-0 bottom-0 w-100 rounded-bottom text-center p-4" style="background: rgba(34, 36, 41, .9);">
                        <a href="http://shop.fitdonewell.com" class="btn btn-primary p-4">Our.Awesome.Programs.</a>

                    </div>
                </div>
            </div>
            <div class="col-lg-4 col-md-6">
                <div class="team-item position-relative">
                    <div class="position-relative overflow-hidden rounded">
                        <img class="img-fluid w-100" src="{{ asset('t1/img/laly-band.webp') }}" alt="">
                        <div class="team-overlay">
                            <div class="d-flex align-items-center justify-content-start">
                                <a class="btn btn-light btn-square rounded-circle mx-1" href="http://shop.fitdonewell.com"><i class="fas fa-link"></i> </a>
                            </div>
                        </div>
                    </div>
                    <div class="position-absolute start-0 bottom-0 w-100 rounded-bottom text-center p-4" style="background: rgba(34, 36, 41, .9);">
                        <a href="http://shop.fitdonewell.com" class="btn btn-primary p-4">Our.Amazing.Products.</a>

                    </div>
                </div>
            </div>



        </div>
    </div>





    <!-- Facts Start -->
    <div class="container-fluid bg-dark facts p-5 my-5">
        <div class="row gx-5 gy-4 py-5">
            <div class="col-lg-3 col-md-6">
                <div class="d-flex">
                    <div class="bg-primary rounded-circle d-flex align-items-center justify-content-center mb-3" style="width: 60px; height: 60px;">
                        <i class="fa fa-star fs-4 text-white"></i>
                    </div>
                    <div class="ps-4">
                        <h5 class="text-secondary text-uppercase">Experience</h5>
                        <h1 class="display-5 text-white mb-0" data-toggle="counter-up">25</h1>
                        <h3 class="text-primary">Years</h3>
                    </div>
                </div>
            </div>
            <div class="col-lg-3 col-md-6">
                <div class="d-flex">
                    <div class="bg-primary rounded-circle d-flex align-items-center justify-content-center mb-3" style="width: 60px; height: 60px;">
                        <i class="fa fa-users fs-4 text-white"></i>
                    </div>
                    <div class="ps-4">
                        <h5 class="text-secondary text-uppercase">Our Coaches</h5>
                        <h1 class="display-5 text-white mb-0" data-toggle="counter-up">3</h1>
                    </div>
                </div>
            </div>
            <div class="col-lg-3 col-md-6">
                <div class="d-flex">
                    <div class="bg-primary rounded-circle d-flex align-items-center justify-content-center mb-3" style="width: 60px; height: 60px;">
                        <i class="fa fa-check fs-4 text-white"></i>
                    </div>
                    <div class="ps-4">
                        <h5 class="text-secondary text-uppercase">Complete Project</h5>
                        <h1 class="display-5 text-white mb-0" data-toggle="counter-up">453</h1>
                    </div>
                </div>
            </div>
            <div class="col-lg-3 col-md-6">
                <div class="d-flex">
                    <div class="bg-primary rounded-circle d-flex align-items-center justify-content-center mb-3" style="width: 60px; height: 60px;">
                        <i class="fa fa-mug-hot fs-4 text-white"></i>
                    </div>
                    <div class="ps-4">
                        <h5 class="text-secondary text-uppercase">Happy Clients</h5>
                        <h1 class="display-5 text-white mb-0" data-toggle="counter-up">757</h1>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Facts End -->




    <!-- Testimonial Start -->
    <div class="container-fluid p-0 my-5" id="id_testimonials">
        <div class="row g-0">
            <div class="col-md-12 col-lg-6" style="min-height: 500px;">
                <div class="position-relative h-100">
                    <img class="img-fluid w-100 h-100  object-fit-cover" src="{{ asset('t1/img/korey-laly.jpg') }}" style="object-position: top;">
                </div>
            </div>
            <div class="col-md-12 col-lg-6 bg-dark p-5">
                <div class="mb-1">
                    <h1 class="display-3 text-uppercase text-primary mb-0">Testimonials</h1>
                </div>
                <div class="owl-carousel testimonial-carousel">
                    <div class="testimonial-item">
                        <p class="fs-4 fw-normal text-light mb-4"><i class="fa fa-quote-left text-primary me-3"></i>I am 48 years old, mother of three and I am in the best shape of my life thanks to <span class="text-primary">Fit.Done.Well.</span> Now I want to be a Trainer and help other women like me to achieve their best.</p>
                        <div class="d-flex align-items-center">
                            <img class="img-fluid rounded-1" src="{{ asset('t1/img/testimonio1-korey.jpg') }}" alt="">
                            <div class="ps-4">
                                <h5 class="text-uppercase text-light">Corey Deluca</h5>
                                <span class="text-uppercase text-secondary">Trainer</span>
                            </div>
                        </div>
                    </div>
                    <div class="testimonial-item">
                        <p class="fs-4 fw-normal text-light mb-4"><i class="fa fa-quote-left text-primary me-3"></i>I have always dreamed of having a flat stomach and only by putting in real work guided by <span class="text-primary">Fit.Done.Well.</span> have I achieved it.</p>
                        <div class="d-flex align-items-center">
                            <img class="img-fluid rounded-1" src="{{ asset('t1/img/testimonio2.jpeg') }}" alt="">
                            <div class="ps-4">
                                <h5 class="text-uppercase text-light">Rebecca Mulan</h5>
                                <span class="text-uppercase text-secondary"></span>
                            </div>
                        </div>
                    </div>

                    <div class="testimonial-item">
                        <p class="fs-4 fw-normal text-light mb-4"><i class="fa fa-quote-left text-primary me-3"></i> Being a mother of 4 and over 40 years old can be scary and demotivating when trying to keep a fit body, but thanks to <span class="text-primary"> Fit.Done.Well</span> I have understood that age and motherhood are not excuses if we put in the proper work.</p>
                        <div class="d-flex align-items-center">
                            <img class="img-fluid rounded-1" src="{{ asset('t1/img/testimonio3.jpg') }}" alt="">
                            <div class="ps-4">
                                <h5 class="text-uppercase text-light">Anna York</h5>
                                <span class="text-uppercase text-secondary"></span>
                            </div>
                        </div>
                    </div>

                    <div class="testimonial-item">
                        <p class="fs-4 fw-normal text-light mb-4"><i class="fa fa-quote-left text-primary me-3"></i> Being an athlete after 50 has been definitely challenging but not impossible and <strong class="text-primary"> Fit.Done.Well.</strong> has offered me the best guide in order to keep my physique strong and free of injuries. </p>
                        <div class="d-flex align-items-center">
                            <img class="img-fluid rounded-1" src="{{ asset('t1/img/testimonio4.jpeg') }}" alt="">
                            <div class="ps-4">
                                <h5 class="text-uppercase text-light">Kim Landen</h5>
                                <span class="text-uppercase text-secondary"></span>
                            </div>
                        </div>
                    </div>

                    <div class="testimonial-item">
                        <p class="fs-4 fw-normal text-light mb-4"><i class="fa fa-quote-left text-primary me-3"></i> After having two babies and losing all motivation to be fit, I recovered myself by participating in my first Fitness Show. I won first place and recovered my confidence thanks to Fit.Done.Well. </p>
                        <div class="d-flex align-items-center">
                            <img class="img-fluid rounded-1" src="{{ asset('t1/img/testimonio-michelle.jpg') }}" alt="">
                            <div class="ps-4">
                                <h5 class="text-uppercase text-light">Michelle Gibson</h5>
                                <span class="text-uppercase text-secondary"></span>
                            </div>
                        </div>
                    </div>


                    <div class="testimonial-item">
                        <p class="fs-4 fw-normal text-light mb-4"><i class="fa fa-quote-left text-primary me-3"></i> It’s easy to say that a trainer pushes you to your limits but Fit.Done.Well pushed boundaries and set new limits. Molded a 200 pound kid into a self disciplined, and self-made individual.
                        </p>
                        <div class="d-flex align-items-center">
                            <img class="img-fluid rounded-1" src="{{ asset('t1/img/testimonio-john.jpg') }}" alt="">
                            <div class="ps-4">
                                <h5 class="text-uppercase text-light">John Schindler</h5>
                                <span class="text-uppercase text-secondary"></span>
                            </div>
                        </div>
                    </div>


                    <div class="testimonial-item">
                        <p class="fs-4 fw-normal text-light mb-4"><i class="fa fa-quote-left text-primary me-3"></i> Thanks to <strong class="text-primary"> Fit.Done.Well.</strong> now I understand the difference between having a skinny fat body and a fit body. One takes restrictions and the other fun dedication.

                        </p>
                        <div class="d-flex align-items-center">
                            <img class="img-fluid rounded-1" src="{{ asset('t1/img/test-ora.jpg') }}" alt="">
                            <div class="ps-4">
                                <h5 class="text-uppercase text-light">Maibritt Phalen</h5>
                                <span class="text-uppercase text-secondary"></span>
                            </div>
                        </div>
                    </div>


                    <div class="testimonial-item">
                        <p class="fs-4 fw-normal text-light mb-4"><i class="fa fa-quote-left text-primary me-3"></i> Ty trains with <strong class="text-primary"> Fit.Done.Well.</strong> three times a week for 10 years now and has made amazing strides in strength, flexibility, balance, and overall function. He has also developed quite an amazingly strong friendship and bond that has helped immensely to his healing and confidence.Dianne Roberson, Ty’s mother.


                        </p>
                        <div class="d-flex align-items-center">
                            <img class="img-fluid rounded-1" src="{{ asset('t1/img/test-nin.jpg') }}" alt="">
                            <div class="ps-4">
                                <h5 class="text-uppercase text-light">Ty Roberson</h5>
                                <span class="text-uppercase text-secondary"></span>
                            </div>
                        </div>
                    </div>



                    <div class="testimonial-item">
                        <p class="fs-4 fw-normal text-light mb-4"><i class="fa fa-quote-left text-primary me-3"></i> Idan is thirsty for knowledge and loves training with <strong class="text-primary"> Fit.Done.Well.</strong> They are experts at Sport Performance and demand everything to be precise, always with a fun and positive spirit. Nahum Hollingsworth, Idan’s father
                        </p>
                        <div class="d-flex align-items-center">
                            <img class="img-fluid rounded-1" src="{{ asset('t1/img/test-nin2.jpg') }}" alt="">
                            <div class="ps-4">
                                <h5 class="text-uppercase text-light">Idan Hollingsworth </h5>
                                <span class="text-uppercase text-secondary"></span>
                            </div>
                        </div>
                    </div>


                    <div class="testimonial-item">
                        <p class="fs-4 fw-normal text-light mb-4"><i class="fa fa-quote-left text-primary me-3"></i> <strong class="text-primary"> Fit.Done.Well </strong> changed my focus and made me think more positively about myself instead of constantly criticizing myself. I didn’t know I could build muscle at my age.
                        </p>
                        <div class="d-flex align-items-center">
                            <img class="img-fluid rounded-1" src="{{ asset('t1/img/test-purp.jpg') }}" alt="">
                            <div class="ps-4">
                                <h5 class="text-uppercase text-light">Christina Baggers </h5>
                                <span class="text-uppercase text-secondary"></span>
                            </div>
                        </div>
                    </div>


                    <div class="testimonial-item">
                        <p class="fs-4 fw-normal text-light mb-4"><i class="fa fa-quote-left text-primary me-3"></i> Building my abs was a dream that turned into a goal and then an achievement after following the <strong class="text-primary"> Fit.Done.Well</strong> Program.
                        </p>
                        <div class="d-flex align-items-center">
                            <img class="img-fluid rounded-1" src="{{ asset('t1/img/test-mic.jpg') }}" alt="">
                            <div class="ps-4">
                                <h5 class="text-uppercase text-light">Michael Stuart</h5>
                                <span class="text-uppercase text-secondary"></span>
                            </div>
                        </div>
                    </div>


                </div>
            </div>
        </div>
    </div>



    <div class="container-fluid p-5" id="id_schedule">
        <div class="mb-5 text-center">
            <h5 class="text-primary text-uppercase"></h5>
            <h1 class="display-3 text-uppercase mb-0">Schedule a Consultation</h1>
        </div>
        <div class="row g-5">
            <div class="col-lg-4 col-md-6">
                <div class="team-item position-relative">
                    <div class="position-relative overflow-hidden rounded">
                        <img class="img-fluid w-100" src="{{ asset('t1/img/laly-montana.webp') }}" alt="">
                        <div class="team-overlay">
                            <div class="d-flex align-items-center justify-content-start">
                                <a class="btn btn-light btn-square rounded-circle mx-1" href="http://shop.fitdonewell.com"><i class="fas fa-link"></i> </a>
                            </div>
                        </div>
                    </div>
                    <div class="position-absolute start-0 bottom-0 w-100 rounded-bottom text-center p-4" style="background: rgba(34, 36, 41, .9);">
                        <a href="http://shop.fitdonewell.com" class="btn btn-primary p-4">Life.Reset.Consultation</a>
                    </div>
                </div>
            </div>

            <div class="col-lg-4 col-md-6">
                <div class="team-item position-relative">
                    <div class="position-relative overflow-hidden rounded">
                        <img class="img-fluid w-100" src="{{ asset('t1/img/fitness-consultation.webp') }}" alt="">
                        <div class="team-overlay">
                            <div class="d-flex align-items-center justify-content-start">
                                <a class="btn btn-light btn-square rounded-circle mx-1" href="http://shop.fitdonewell.com"><i class="fas fa-link"></i> </a>

                            </div>
                        </div>
                    </div>
                    <div class="position-absolute start-0 bottom-0 w-100 rounded-bottom text-center p-4" style="background: rgba(34, 36, 41, .9);">
                        <a href="http://shop.fitdonewell.com" class="btn btn-primary p-4">Fitness.Reset.Consultation.</a>
                    </div>
                </div>
            </div>
            <div class="col-lg-4 col-md-6">
                <div class="team-item position-relative">
                    <div class="position-relative overflow-hidden rounded">
                        <img class="img-fluid w-100" src="{{ asset('t1/img/brad-cook2.webp') }}" alt="">
                        <div class="team-overlay">
                            <div class="d-flex align-items-center justify-content-start">
                                <a class="btn btn-light btn-square rounded-circle mx-1" href="http://shop.fitdonewell.com"><i class="fas fa-link"></i> </a>
                            </div>
                        </div>
                    </div>
                    <div class="position-absolute start-0 bottom-0 w-100 rounded-bottom text-center p-4" style="background: rgba(34, 36, 41, .9);">
                        <a href="http://shop.fitdonewell.com" class="btn btn-primary p-4">NUTRITION.RESET.CONSULTATION.</a>
                    </div>
                </div>
            </div>



        </div>
    </div>
    <!-- Team End -->




    <!-- Testimonial End -->


    <!-- Class Timetable Start -->
    <div class="container-fluid p-5" id="id_events">
        <div class="mb-5 text-center">
            <h5 class="text-primary text-uppercase fs-3"><strong>Change your life</strong> </h5>
            <h1 class="display-3 text-uppercase mb-0"> RESET YOUR LIFE EVENTS</h1>
        </div>
        <div class="tab-class text-center">
            <ul class="nav nav-pills d-inline-flex justify-content-center bg-dark text-uppercase rounded-pill mb-5">
                <li class="nav-item">
                    <a class="nav-link rounded-pill text-white active" data-bs-toggle="pill" href="#tab-1">Fitness Events</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link rounded-pill text-white" data-bs-toggle="pill" href="#tab-2">Mindfulness Events</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link rounded-pill text-white" data-bs-toggle="pill" href="#tab-3">Wholeness Events</a>
                </li>
            </ul>
            <div class="tab-content">
                <div id="tab-1" class="tab-pane fade show p-0 active">
                    <div class="row g-5">
                        <div class="col-lg-6 col-md-6 col-sm-12 mx-auto">
                            <div class="bg-dark rounded text-center py-3 px-3">
                                <img src="{{ asset('t1/img/fitness-event.jpg') }}" alt="" class="img-fluid">
                                <h3 class="text-uppercase text-light mb-3 text-center">
                                    
                                    <a href="{{ route('contact-us') }}" class="btn btn-primary">Sign Up</a>
                                </h3>
                                <p class="text-uppercase text-secondary mb-0"></p>
                            </div>
                        </div>
                    </div>
                </div>
                <div id="tab-2" class="tab-pane fade p-0">
                    <div class="row g-5">
                        <div class="col-lg-6 col-md-6 col-sm-12 mx-auto">
                            <div class="bg-dark rounded text-center py-3 px-3">
                                <img src="{{ asset('t1/img/mindfulness-event.jpg') }}" class="img-fluid" alt="">
                                <h3 class="text-uppercase text-light mb-3">
                                    <h3 class="text-uppercase text-light"></h3>
                                    <h3> <a href="{{ route('contact-us') }}" class="btn btn-primary">Sign Up</a> </h3>
                            </div>
                        </div>
                    </div>
                </div>
                <div id="tab-3" class="tab-pane fade p-0">
                    <div class="row g-5">
                        <div class="col-lg-6 col-md-6 col-sm-12 mx-auto">
                            <div class="bg-dark rounded text-center py-3 px-3">
                                <img src="{{ asset('t1/img/wholeness-event.jpg') }}" class="img-fluid" alt="">
                                <h3 class="text-uppercase text-light mb-3"></h3>
                                <h3> <a href="{{ route('contact-us') }}" class="btn btn-primary">Sign Up</a> </h3>


                                <p class="text-uppercase text-secondary mb-0"></p>
                            </div>
                        </div>
                    </div>
                </div>
                <div id="tab-4" class="tab-pane fade p-0">
                    <div class="row g-5">
                        <div class="col-lg-3 col-md-4 col-sm-6">
                            <div class="bg-dark rounded text-center py-5 px-3">
                                <h6 class="text-uppercase text-light mb-3">6.00am - 8.00am</h6>
                                <h5 class="text-uppercase text-primary">Power Lifting</h5>
                                <p class="text-uppercase text-secondary mb-0">John Deo</p>
                            </div>
                        </div>
                        <div class="col-lg-3 col-md-4 col-sm-6">
                            <div class="bg-dark rounded text-center py-5 px-3">
                                <h6 class="text-uppercase text-light mb-3">8.00am - 10.00am</h6>
                                <h5 class="text-uppercase text-primary">Body Building</h5>
                                <p class="text-uppercase text-secondary mb-0">James Taylor</p>
                            </div>
                        </div>
                        <div class="col-lg-3 col-md-4 col-sm-6">
                            <div class="bg-dark rounded text-center py-5 px-3">
                                <h6 class="text-uppercase text-light mb-3">10.00am - 12.00pm</h6>
                                <h5 class="text-uppercase text-primary">Cardio Program</h5>
                                <p class="text-uppercase text-secondary mb-0">Jack Sparrow</p>
                            </div>
                        </div>
                        <div class="col-lg-3 col-md-4 col-sm-6">
                            <div class="bg-dark rounded text-center py-5 px-3">
                                <h6 class="text-uppercase text-light mb-3">12.00pm - 2.00pm</h6>
                                <h5 class="text-uppercase text-primary">Weight Loose</h5>
                                <p class="text-uppercase text-secondary mb-0">Robert Smith</p>
                            </div>
                        </div>
                        <div class="col-lg-3 col-md-4 col-sm-6">
                            <div class="bg-dark rounded text-center py-5 px-3">
                                <h6 class="text-uppercase text-light mb-3">2.00pm - 4.00pm</h6>
                                <h5 class="text-uppercase text-primary">Fitness Program</h5>
                                <p class="text-uppercase text-secondary mb-0">Adam Phillips</p>
                            </div>
                        </div>
                        <div class="col-lg-3 col-md-4 col-sm-6">
                            <div class="bg-dark rounded text-center py-5 px-3">
                                <h6 class="text-uppercase text-light mb-3">4.00pm - 6.00pm</h6>
                                <h5 class="text-uppercase text-primary">Crossfit Class</h5>
                                <p class="text-uppercase text-secondary mb-0">James Alien</p>
                            </div>
                        </div>
                        <div class="col-lg-3 col-md-4 col-sm-6">
                            <div class="bg-dark rounded text-center py-5 px-3">
                                <h6 class="text-uppercase text-light mb-3">6.00pm - 8.00pm</h6>
                                <h5 class="text-uppercase text-primary">Muscle Building</h5>
                                <p class="text-uppercase text-secondary mb-0">Petter John</p>
                            </div>
                        </div>
                        <div class="col-lg-3 col-md-4 col-sm-6">
                            <div class="bg-dark rounded text-center py-5 px-3">
                                <h6 class="text-uppercase text-light mb-3">8.00pm - 10.00pm</h6>
                                <h5 class="text-uppercase text-primary">Yoga Class</h5>
                                <p class="text-uppercase text-secondary mb-0">Jessy Reo</p>
                            </div>
                        </div>
                    </div>
                </div>
                <div id="tab-5" class="tab-pane fade p-0">
                    <div class="row g-5">
                        <div class="col-lg-3 col-md-4 col-sm-6">
                            <div class="bg-dark rounded text-center py-5 px-3">
                                <h6 class="text-uppercase text-light mb-3">6.00am - 8.00am</h6>
                                <h5 class="text-uppercase text-primary">Power Lifting</h5>
                                <p class="text-uppercase text-secondary mb-0">John Deo</p>
                            </div>
                        </div>
                        <div class="col-lg-3 col-md-4 col-sm-6">
                            <div class="bg-dark rounded text-center py-5 px-3">
                                <h6 class="text-uppercase text-light mb-3">8.00am - 10.00am</h6>
                                <h5 class="text-uppercase text-primary">Body Building</h5>
                                <p class="text-uppercase text-secondary mb-0">James Taylor</p>
                            </div>
                        </div>
                        <div class="col-lg-3 col-md-4 col-sm-6">
                            <div class="bg-dark rounded text-center py-5 px-3">
                                <h6 class="text-uppercase text-light mb-3">10.00am - 12.00pm</h6>
                                <h5 class="text-uppercase text-primary">Cardio Program</h5>
                                <p class="text-uppercase text-secondary mb-0">Jack Sparrow</p>
                            </div>
                        </div>
                        <div class="col-lg-3 col-md-4 col-sm-6">
                            <div class="bg-dark rounded text-center py-5 px-3">
                                <h6 class="text-uppercase text-light mb-3">12.00pm - 2.00pm</h6>
                                <h5 class="text-uppercase text-primary">Weight Loose</h5>
                                <p class="text-uppercase text-secondary mb-0">Robert Smith</p>
                            </div>
                        </div>
                        <div class="col-lg-3 col-md-4 col-sm-6">
                            <div class="bg-dark rounded text-center py-5 px-3">
                                <h6 class="text-uppercase text-light mb-3">2.00pm - 4.00pm</h6>
                                <h5 class="text-uppercase text-primary">Fitness Program</h5>
                                <p class="text-uppercase text-secondary mb-0">Adam Phillips</p>
                            </div>
                        </div>
                        <div class="col-lg-3 col-md-4 col-sm-6">
                            <div class="bg-dark rounded text-center py-5 px-3">
                                <h6 class="text-uppercase text-light mb-3">4.00pm - 6.00pm</h6>
                                <h5 class="text-uppercase text-primary">Crossfit Class</h5>
                                <p class="text-uppercase text-secondary mb-0">James Alien</p>
                            </div>
                        </div>
                        <div class="col-lg-3 col-md-4 col-sm-6">
                            <div class="bg-dark rounded text-center py-5 px-3">
                                <h6 class="text-uppercase text-light mb-3">6.00pm - 8.00pm</h6>
                                <h5 class="text-uppercase text-primary">Muscle Building</h5>
                                <p class="text-uppercase text-secondary mb-0">Petter John</p>
                            </div>
                        </div>
                        <div class="col-lg-3 col-md-4 col-sm-6">
                            <div class="bg-dark rounded text-center py-5 px-3">
                                <h6 class="text-uppercase text-light mb-3">8.00pm - 10.00pm</h6>
                                <h5 class="text-uppercase text-primary">Yoga Class</h5>
                                <p class="text-uppercase text-secondary mb-0">Jessy Reo</p>
                            </div>
                        </div>
                    </div>
                </div>
                <div id="tab-6" class="tab-pane fade p-0">
                    <div class="row g-5">
                        <div class="col-lg-3 col-md-4 col-sm-6">
                            <div class="bg-dark rounded text-center py-5 px-3">
                                <h6 class="text-uppercase text-light mb-3">6.00am - 8.00am</h6>
                                <h5 class="text-uppercase text-primary">Power Lifting</h5>
                                <p class="text-uppercase text-secondary mb-0">John Deo</p>
                            </div>
                        </div>
                        <div class="col-lg-3 col-md-4 col-sm-6">
                            <div class="bg-dark rounded text-center py-5 px-3">
                                <h6 class="text-uppercase text-light mb-3">8.00am - 10.00am</h6>
                                <h5 class="text-uppercase text-primary">Body Building</h5>
                                <p class="text-uppercase text-secondary mb-0">James Taylor</p>
                            </div>
                        </div>
                        <div class="col-lg-3 col-md-4 col-sm-6">
                            <div class="bg-dark rounded text-center py-5 px-3">
                                <h6 class="text-uppercase text-light mb-3">10.00am - 12.00pm</h6>
                                <h5 class="text-uppercase text-primary">Cardio Program</h5>
                                <p class="text-uppercase text-secondary mb-0">Jack Sparrow</p>
                            </div>
                        </div>
                        <div class="col-lg-3 col-md-4 col-sm-6">
                            <div class="bg-dark rounded text-center py-5 px-3">
                                <h6 class="text-uppercase text-light mb-3">12.00pm - 2.00pm</h6>
                                <h5 class="text-uppercase text-primary">Weight Loose</h5>
                                <p class="text-uppercase text-secondary mb-0">Robert Smith</p>
                            </div>
                        </div>
                        <div class="col-lg-3 col-md-4 col-sm-6">
                            <div class="bg-dark rounded text-center py-5 px-3">
                                <h6 class="text-uppercase text-light mb-3">2.00pm - 4.00pm</h6>
                                <h5 class="text-uppercase text-primary">Fitness Program</h5>
                                <p class="text-uppercase text-secondary mb-0">Adam Phillips</p>
                            </div>
                        </div>
                        <div class="col-lg-3 col-md-4 col-sm-6">
                            <div class="bg-dark rounded text-center py-5 px-3">
                                <h6 class="text-uppercase text-light mb-3">4.00pm - 6.00pm</h6>
                                <h5 class="text-uppercase text-primary">Crossfit Class</h5>
                                <p class="text-uppercase text-secondary mb-0">James Alien</p>
                            </div>
                        </div>
                        <div class="col-lg-3 col-md-4 col-sm-6">
                            <div class="bg-dark rounded text-center py-5 px-3">
                                <h6 class="text-uppercase text-light mb-3">6.00pm - 8.00pm</h6>
                                <h5 class="text-uppercase text-primary">Muscle Building</h5>
                                <p class="text-uppercase text-secondary mb-0">Petter John</p>
                            </div>
                        </div>
                        <div class="col-lg-3 col-md-4 col-sm-6">
                            <div class="bg-dark rounded text-center py-5 px-3">
                                <h6 class="text-uppercase text-light mb-3">8.00pm - 10.00pm</h6>
                                <h5 class="text-uppercase text-primary">Yoga Class</h5>
                                <p class="text-uppercase text-secondary mb-0">Jessy Reo</p>
                            </div>
                        </div>
                    </div>
                </div>
                <div id="tab-7" class="tab-pane fade p-0">
                    <div class="row g-5">
                        <div class="col-lg-3 col-md-4 col-sm-6">
                            <div class="bg-dark rounded text-center py-5 px-3">
                                <h6 class="text-uppercase text-light mb-3">6.00am - 8.00am</h6>
                                <h5 class="text-uppercase text-primary">Power Lifting</h5>
                                <p class="text-uppercase text-secondary mb-0">John Deo</p>
                            </div>
                        </div>
                        <div class="col-lg-3 col-md-4 col-sm-6">
                            <div class="bg-dark rounded text-center py-5 px-3">
                                <h6 class="text-uppercase text-light mb-3">8.00am - 10.00am</h6>
                                <h5 class="text-uppercase text-primary">Body Building</h5>
                                <p class="text-uppercase text-secondary mb-0">James Taylor</p>
                            </div>
                        </div>
                        <div class="col-lg-3 col-md-4 col-sm-6">
                            <div class="bg-dark rounded text-center py-5 px-3">
                                <h6 class="text-uppercase text-light mb-3">10.00am - 12.00pm</h6>
                                <h5 class="text-uppercase text-primary">Cardio Program</h5>
                                <p class="text-uppercase text-secondary mb-0">Jack Sparrow</p>
                            </div>
                        </div>
                        <div class="col-lg-3 col-md-4 col-sm-6">
                            <div class="bg-dark rounded text-center py-5 px-3">
                                <h6 class="text-uppercase text-light mb-3">12.00pm - 2.00pm</h6>
                                <h5 class="text-uppercase text-primary">Weight Loose</h5>
                                <p class="text-uppercase text-secondary mb-0">Robert Smith</p>
                            </div>
                        </div>
                        <div class="col-lg-3 col-md-4 col-sm-6">
                            <div class="bg-dark rounded text-center py-5 px-3">
                                <h6 class="text-uppercase text-light mb-3">2.00pm - 4.00pm</h6>
                                <h5 class="text-uppercase text-primary">Fitness Program</h5>
                                <p class="text-uppercase text-secondary mb-0">Adam Phillips</p>
                            </div>
                        </div>
                        <div class="col-lg-3 col-md-4 col-sm-6">
                            <div class="bg-dark rounded text-center py-5 px-3">
                                <h6 class="text-uppercase text-light mb-3">4.00pm - 6.00pm</h6>
                                <h5 class="text-uppercase text-primary">Crossfit Class</h5>
                                <p class="text-uppercase text-secondary mb-0">James Alien</p>
                            </div>
                        </div>
                        <div class="col-lg-3 col-md-4 col-sm-6">
                            <div class="bg-dark rounded text-center py-5 px-3">
                                <h6 class="text-uppercase text-light mb-3">6.00pm - 8.00pm</h6>
                                <h5 class="text-uppercase text-primary">Muscle Building</h5>
                                <p class="text-uppercase text-secondary mb-0">Petter John</p>
                            </div>
                        </div>
                        <div class="col-lg-3 col-md-4 col-sm-6">
                            <div class="bg-dark rounded text-center py-5 px-3">
                                <h6 class="text-uppercase text-light mb-3">8.00pm - 10.00pm</h6>
                                <h5 class="text-uppercase text-primary">Yoga Class</h5>
                                <p class="text-uppercase text-secondary mb-0">Jessy Reo</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Class Timetable Start -->


    <!-- Blog Start -->
    <div class="container-fluid p-5">
        <div class="mb-5 text-center">
            <h5 class="text-primary text-uppercase">Our Blog</h5>
            <h1 class="display-3 text-uppercase mb-0">Latest Blog Post</h1>
        </div>
        <div class="row g-5">
            <div class="col-lg-4">
                <a href="http://blog.fitdonewell.com">
                <div class="blog-item">
                    <div class="position-relative overflow-hidden rounded-top">
                        <img class="img-fluid" src="{{ asset('t1/img/blog1.webp') }}" alt="">
                    </div>
                    <div class="bg-dark d-flex align-items-center rounded-bottom p-4">
                        <div class="flex-shrink-0 text-center text-secondary border-end border-secondary pe-3 me-3">
                            <span><?php echo date('d'); ?></span>
                            <h6 class="text-light text-uppercase mb-0"><?php echo date('F'); ?></h6>
                            <span><?php echo date('Y'); ?></span>
                        </div>
                        <a class="h5 text-uppercase text-light" href="http://blog.fitdonewell.com">Ready for our <span class="text-primary"> Fit.Reset.Secrets.</span>?</h4></a>
                    </div>
                </div>
                </a>
            </div>
            <div class="col-lg-4">
                <a href="http://blog.fitdonewell.com">
                <div class="blog-item">
                    <div class="position-relative overflow-hidden rounded-top">
                        <img class="img-fluid" src="{{ asset('t1/img/blog2.webp') }}" alt="">
                    </div>
                    <div class="bg-dark d-flex align-items-center rounded-bottom p-4">
                        <div class="flex-shrink-0 text-center text-secondary border-end border-secondary pe-3 me-3">
                            <span><?php echo date('d'); ?></span>
                            <h6 class="text-light text-uppercase mb-0"><?php echo date('F'); ?></h6>
                            <span><?php echo date('Y'); ?></span>
                        </div>
                        <a class="h5 text-uppercase text-light" href="http://blog.fitdonewell.com">Ready for a our <span class="text-primary">Mind.Reset.Secrets.</span>?</h4></a>
                    </div>
                </div>
                </a>
            </div>
            <div class="col-lg-4">
                <a href="http://blog.fitdonewell.com">
                <div class="blog-item">
                    <div class="position-relative overflow-hidden rounded-top">
                        <img class="img-fluid" src="{{ asset('t1/img/blog3.webp') }}" alt="">
                    </div>
                    <div class="bg-dark d-flex align-items-center rounded-bottom p-4">
                        <div class="flex-shrink-0 text-center text-secondary border-end border-secondary pe-3 me-3">
                            <span><?php echo date('d'); ?></span>
                            <h6 class="text-light text-uppercase mb-0"><?php echo date('F'); ?></h6>
                            <span><?php echo date('Y'); ?></span>
                        </div>
                        <a class="h5 text-uppercase text-light" href="http://blog.fitdonewell.com">Ready for a our <span class="text-primary">Life.Reset.Secrets.?</span></h4></a>
                    </div>
                </div>
                </a>
            </div>
        </div>
    </div>
    <!-- Blog End -->


    <!-- Team Start -->
    <div class="container-fluid p-5" id="id_coaches">
        <div class="mb-5 text-center">
            <h5 class="text-primary text-uppercase"></h5>
            <h1 class="display-3 text-uppercase mb-0">The Team</h1>
        </div>
        <div class="row g-5">
            <div class="col-lg-4 col-md-6">
                <div class="team-item position-relative">
                    <div class="position-relative overflow-hidden rounded">
                        <img class="img-fluid w-100" src="{{ asset('t1/img/team-laly-brad.jpg') }}" alt="">
                        <div class="team-overlay">
                            <div class="d-flex align-items-center justify-content-start">
                                <a class="btn btn-light btn-square rounded-circle mx-1" href="https://web.facebook.com/laly.pena.54"><i class="fab fa-facebook-f"></i></a>
                                <a class="btn btn-light btn-square rounded-circle mx-1" href="https://www.tiktok.com/@fit.done.well"><i class="fab fa-tiktok"></i></a>
                                <a class="btn btn-light btn-square rounded-circle mx-1" href="https://www.instagram.com/fit.done.well/?locale=pt_BR&hl=am-et"><i class="fab fa-instagram"></i></a>
                                <a class="btn btn-light btn-square rounded-circle mx-1" href="https://www.youtube.com/lalytawellness"><i class="fab fa-youtube"></i></a>
                                <a class="btn btn-light btn-square rounded-circle mx-1" href="https://br.pinterest.com/lalytawellness/"><i class="fab fa-pinterest"></i></a>
                            </div>
                        </div>
                    </div>
                    <div class="position-absolute start-0 bottom-0 w-100 rounded-bottom text-center p-4" style="background: rgba(34, 36, 41, .9);">
                        <h5 class="text-uppercase text-primary">Laly Pena & Brad Peterson</h5>
                        <p class="text-uppercase text-secondary m-0">Founders</p>
                    </div>
                </div>
            </div>

            <div class="col-lg-4 col-md-6">
                <div class="team-item position-relative">
                    <div class="position-relative overflow-hidden rounded">
                        <a href="http://blog.fitdonewell.com/brad-peterson/"><img class="img-fluid w-100" src="{{ asset('t1/img/brad-team1.jpg') }}" alt=""></a>
                        <div class="team-overlay">
                            <div class="d-flex align-items-center justify-content-start">
                                <a class="btn btn-light btn-square rounded-circle mx-1" href="http://blog.fitdonewell.com/brad-peterson/">Bio</a>
                                <a class="btn btn-light btn-square rounded-circle mx-1" href="http://blog.fitdonewell.com/brad-peterson/">Certs</a>
                            </div>
                        </div>
                    </div>
                    <div class="position-absolute start-0 bottom-0 w-100 rounded-bottom text-center p-4" style="background: rgba(34, 36, 41, .9);">
                        <h5 class="text-uppercase text-primary"><a href="http://blog.fitdonewell.com/brad-peterson/"> Brad Peterson</a></h5>
                        <p class="text-uppercase text-secondary m-0">Coach</p>
                    </div>
                </div>
            </div>
            <div class="col-lg-4 col-md-6">
                <div class="team-item position-relative">
                    <div class="position-relative overflow-hidden rounded">
                        <img class="img-fluid w-100" src="{{ asset('t1/img/laly-team1.jpg') }}" alt="">
                        <div class="team-overlay">
                            <div class="d-flex align-items-center justify-content-start">
                                <a class="btn btn-light btn-square rounded-circle mx-1" href="http://blog.fitdonewell.com/laly-pena/">Bio</a>
                                <a class="btn btn-light btn-square rounded-circle mx-1" href="http://blog.fitdonewell.com/laly-pena/">Certs</a>
                            </div>
                        </div>
                    </div>
                    <div class="position-absolute start-0 bottom-0 w-100 rounded-bottom text-center p-4" style="background: rgba(34, 36, 41, .9);">
                        <h5 class="text-uppercase text-primary"> <a href="http://blog.fitdonewell.com/laly-pena/"> Laly Peña</a></h5>
                        <p class="text-uppercase text-secondary m-0">Coach</p>
                    </div>
                </div>
            </div>



        </div>
    </div>
    <!-- Team End -->


    <!-- Blog Start -->
    <div class="container-fluid p-5 d-none">
        <div class="mb-5 text-center">
            <h5 class="text-primary text-uppercase">Our Blog</h5>
            <h1 class="display-3 text-uppercase mb-0">Latest Blog Post</h1>
        </div>
        <div class="row g-5">
            <div class="col-lg-4">
                <div class="blog-item">
                    <div class="position-relative overflow-hidden rounded-top">
                        <img class="img-fluid" src="{{ asset('t1/img/blog-1.jpg') }}" alt="">
                    </div>
                    <div class="bg-dark d-flex align-items-center rounded-bottom p-4">
                        <div class="flex-shrink-0 text-center text-secondary border-end border-secondary pe-3 me-3">
                            <span>01</span>
                            <h6 class="text-light text-uppercase mb-0">January</h6>
                            <span>2045</span>
                        </div>
                        <a class="h5 text-uppercase text-light" href="">Sed amet tempor amet sit kasd sea lorem</h4></a>
                    </div>
                </div>
            </div>
            <div class="col-lg-4">
                <div class="blog-item">
                    <div class="position-relative overflow-hidden rounded-top">
                        <img class="img-fluid" src="{{ asset('t1/img/blog-2.jpg') }}" alt="">
                    </div>
                    <div class="bg-dark d-flex align-items-center rounded-bottom p-4">
                        <div class="flex-shrink-0 text-center text-secondary border-end border-secondary pe-3 me-3">
                            <span>01</span>
                            <h6 class="text-light text-uppercase mb-0">January</h6>
                            <span>2045</span>
                        </div>
                        <a class="h5 text-uppercase text-light" href="">Sed amet tempor amet sit kasd sea lorem</h4></a>
                    </div>
                </div>
            </div>
            <div class="col-lg-4">
                <div class="blog-item">
                    <div class="position-relative overflow-hidden rounded-top">
                        <img class="img-fluid" src="{{ asset('t1/img/blog-3.jpg')  }}" alt="">
                    </div>
                    <div class="bg-dark d-flex align-items-center rounded-bottom p-4">
                        <div class="flex-shrink-0 text-center text-secondary border-end border-secondary pe-3 me-3">
                            <span>01</span>
                            <h6 class="text-light text-uppercase mb-0">January</h6>
                            <span>2045</span>
                        </div>
                        <a class="h5 text-uppercase text-light" href="">Sed amet tempor amet sit kasd sea lorem</h4></a>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Blog End -->
