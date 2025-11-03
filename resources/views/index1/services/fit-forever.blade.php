<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <title>@yield('title', 'Services Fit.Done.Well.')</title>
    <meta content="width=device-width, initial-scale=1.0" name="viewport">

    <!-- Favicon -->
    <link href="{{ asset('t1/img/favicon.ico') }}" rel="icon">

    <!-- Google Web Fonts -->
    <link rel="preconnect" href="https://fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css2?family=Oswald:wght@400;500;600;700&family=Rubik&display=swap" rel="stylesheet">

    <!-- Icon Font Stylesheet -->
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.0/css/all.min.css" rel="stylesheet">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.4.1/font/bootstrap-icons.css" rel="stylesheet">
    <link href="{{ asset('t1/lib/flaticon/font/flaticon.css') }}" rel="stylesheet">

    <!-- Libraries Stylesheet -->
    <link href="{{ asset('t1/lib/owlcarousel/assets/owl.carousel.min.css') }}" rel="stylesheet">

    <!-- Customized Bootstrap Stylesheet -->
    <link href="{{ asset('t1/css/bootstrap.min.css') }}" rel="stylesheet">

    <!-- Template Stylesheet -->
     <link href="{{ asset('t1/css/style.css') }}?ver={{ rand(1,10000) }}" rel="stylesheet">
</head>

<body>
@include('index1.header')

<div class="hero-fitforever" style="background-color: #222429; position: relative;">
    <div class="container">
        <div class="row">
            <div class="col-12 position-relative">
                <video 
                    id="fitForeverVideo" 
                    muted 
                    playsinline 
                    loop 
                    preload="none" 
                    poster="{{ asset('strong-bodies.webp') }}" 
                    style="width: 100%; height: auto; border-radius: 10px; background: #000;">
                    <source src="assets/images/gym-video.mp4" type="video/mp4" />
                    Your browser does not support the video tag.
                </video>

                <!-- Texto centrado horizontal, desplazado vertical -->
                <div class="video-text-overlay" style="
                    position: absolute;
                    top: 60%;
                    left: 50%;
                    transform: translate(-50%, -50%);
                    z-index: 5;
                    text-align: center;
                ">
                    <div style="
                        background: rgba(0, 0, 0, 0.5);
                        padding: 10px 25px;
                        border-radius: 8px;
                        display: inline-block;
                    ">
                        <h1 class="text-primary m-0" style="
                            font-weight: 700;
                            font-size: clamp(1.8rem, 4vw, 3rem);
                            letter-spacing: 1px;
                        ">
                            Program Fit 4 Ever
                        </h1>
                        <br>
                        <h4 class="text-white" style="font-weight: 100;">Full body fitness program for lasting strength, endurance, and mobility.
Simple structure, real coaching, and a plan that fits your life.</h4>
                        <div style="text-align:center;margin-top:1.5rem;">
                        <a href="{{ url('general-checkout/fit-forever') }}"
                            style="display:inline-block;background-color:#FFCB2A;color:#000;padding:0.6rem 4.5rem;border-radius:6px;text-decoration:none;font-weight:600;letter-spacing:1px;">
                            Subscribe 499 USD/Month
                        </a>
                        </div> 
                    </div>
                </div>

                <script>
                    document.addEventListener('DOMContentLoaded', () => {
                        const video = document.getElementById('fitForeverVideo');

                        const observer = new IntersectionObserver(entries => {
                            entries.forEach(entry => {
                                if (entry.isIntersecting) {
                                    const playPromise = video.play();
                                    if (playPromise !== undefined) {
                                        playPromise.catch(() => {
                                            const tapToPlay = document.createElement('div');
                                            tapToPlay.innerText = 'Tap to play video';
                                            tapToPlay.style = `
                                                position: absolute;
                                                top: 50%;
                                                left: 50%;
                                                transform: translate(-50%, -50%);
                                                color: white;
                                                background: rgba(0, 0, 0, 0.6);
                                                padding: 14px 28px;
                                                border-radius: 8px;
                                                cursor: pointer;
                                                font-family: Arial, sans-serif;
                                                font-size: 1rem;
                                                z-index: 10;
                                            `;
                                            video.parentElement.style.position = 'relative';
                                            video.parentElement.appendChild(tapToPlay);
                                            tapToPlay.addEventListener('click', () => {
                                                video.play();
                                                tapToPlay.remove();
                                            });
                                        });
                                    }
                                    observer.disconnect();
                                }
                            });
                        }, { threshold: 0.25 });

                        observer.observe(video);
                    });
                </script>
            </div>
        </div>
        <div class="row">
            <div class="col-12 text-center">
                <p></p>
                <h2 class="text-primary">Live weekly workouts.<br>  Personalized monthly plan<br>  Real time feedback<br>   Money back window 7 days</h2>
                <p></p>
            </div>
        </div>
    </div>
</div>

<div>
    <br><br><br>
</div>

    <!-- About Start -->
    <div class="container p-5" id="id_about">
        <div class="row gx-5">
            <div class="col-lg-5 mb-5 mb-lg-0" style="min-height: 500px;">
                <div class="position-relative h-100">
                    <img class="position-absolute w-100 h-100 rounded img-fluid" id="img_laly_fuerte" src="{{ asset('laly-brad-escalera.jpg') }}" style="object-fit: cover; object-position: top;">
                    <img class="position-absolute w-100 h-100 rounded img-fluid  d-none" id="img_brad_fuerte" src="{{ asset('laly-brad-escalera.jpg') }}" style="object-fit: cover; object-position: top;">
                </div>
            </div>
            <div class="col-lg-7">
                <div class="mb-4">
                    <h5 class="text-primary text-uppercase fs-3"><strong>Program</strong> </h5>
                    <h1 class="display-3 text-uppercase mb-0">Fit 4 Ever</h1>
                </div>
                <h4 class="text-body mb-4">Empowering <strong class="text-primary">Body.Mind.Spirit.</strong> as connected treasures, with the mission to Coach those who are ready for a <strong class="text-primary">Life.Reset.Program.</strong></h4>
                <p class="mb-4 text-justify">At <strong>Fit.Done.Well.</strong>, we believe in the power of working on all aspects of your well being: <strong> Body.Mind.Spirit.</strong> Our mission is to create a world where strength, kindness, and open minds lead the way. We offer personalized programs, interactive experiences, and a community that supports you every step of the way. Whether it's through physical workouts, nutritional plans, or mindful practices, we are here to help you achieve a healthier, stronger, and more fulfilling life. Join us in our journey to better priorities and a brighter future!</p>
                <div class="rounded bg-dark p-5">
                    <ul class="nav nav-pills justify-content-between mb-3">
                        <li class="nav-item w-50">
                            <a class="nav-link text-uppercase text-center w-100  active " id="about_us" data-bs-toggle="pill" onclick="about_us()" href="#pills-1">Build strength</a>
                        </li>
                        <li class="nav-item w-50">
                            <a class="nav-link text-uppercase text-center w-100 " id="why_choose_us" data-bs-toggle="pill" href="#pills-2" onclick="why_choose_us()">Improve conditioning</a>
                        </li>
                        <li class="nav-item w-50">
                            <a class="nav-link text-uppercase text-center w-100 " id="why_choose_us" data-bs-toggle="pill" href="#pills-2" onclick="why_choose_us()">Move better</a>
                        </li>
                        <li class="nav-item w-50">
                            <a class="nav-link text-uppercase text-center w-100 " id="why_choose_us" data-bs-toggle="pill" href="#pills-2" onclick="why_choose_us()">Stay consistent</a>
                        </li>



                    </ul>
                    <div class="tab-content">
                        <div class="tab-pane fade show active" id="pills-1">
                            <p class="text-secondary mb-0 text-justify">Train with purpose, not just for looks. Each session is designed to increase real functional strength, helping you move, lift, and perform better in everyday situations. From carrying groceries to climbing stairs, you will feel your progress where it truly matters.</p>
                        </div>
                        <div class="tab-pane fade" id="pills-2">
                            <p class="text-secondary mb-0 text-justify">Forget extreme programs that drain your energy. Fit.Forever. uses smart, progressive conditioning that challenges your heart and lungs while keeping your recovery balanced. You will build endurance that lasts all day, not exhaustion that lasts all week.</p>
                        </div>
                        <div class="tab-pane fade" id="pills-3">
                            <p class="text-secondary mb-0 text-justify">Mobility is more than stretching. It is about control, balance, and flexibility that supports your strength. Every week includes guided mobility sessions that help you reduce stiffness, prevent injury, and feel light and agile in every workout.</p>
                        </div>   
                        <div class="tab-pane fade" id="pills-3">
                            <p class="text-secondary mb-0 text-justify">Consistency beats intensity. The program gives you a clear, repeatable structure that fits your lifestyle. You will always know what to do, how to do it, and when to rest—making fitness a steady habit, not a temporary phase.</p>
                        </div>                                              
                    </div>
                </div>
            </div>
        </div>
                                <div style="text-align:center;margin-top:1.5rem;">
                        <a href="{{ url('general-checkout/fit-forever') }}"
                            style="display:inline-block;background-color:#FFCB2A;color:#000;padding:0.6rem 4.5rem;border-radius:6px;text-decoration:none;font-weight:600;letter-spacing:1px;padding: 35px 50px;">
                            Subscribe 499 USD/Month
                        </a>
                        </div> 
    </div>
    <!-- About End -->






@include('index1.footer')
</body>
</html>
