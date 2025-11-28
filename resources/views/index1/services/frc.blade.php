@extends('index1.app')

@section('title', 'Fit.Done.Well.')

@section('index1.content')

    @include('index1.services.hero-services')

    <div class="mb-5 text-center mt-5">
        <h5 class="text-primary text-uppercase fs-3"><strong></strong></h5>
        <h1 class="display-3 text-uppercase mb-0">Fit Reset Consultation</h1>
        <h4 class="text-body mb-4">Celebrate Your Body with a 1:1 Fitness Consultation FaceTime or In Person in Scottsdale
        </h4>

        <h5 class="text-gray fs-1"><span class="text-primary"> WHAT YOU GET</span> </h5>

    </div>

    @include('blackfriday')

    <!-- Programe Start -->
    <div class="container-fluid programe position-relative px-5 mt-5" style="margin-bottom: 135px;">
        <div class="row g-5 gb-5">
            <div class="col-lg-4 col-md-6">
                <div class="bg-light rounded text-justify p-5">
                    <img src="{{ asset('frc1.webp') }}" alt="body" class="img-fluid">
                    <h3 class="text-uppercase my-4 fs-1 text-center">Custom Plan</h3>
                    <p class="text-center text-uppercase"><strong> A full-body & lifestyle reset plan built just for
                            you</strong><br><br></p>

                    <span class="text-justify">Unlock a personalized roadmap that fits your unique goals, lifestyle, and schedule.
We evaluate your current habits, fitness level, and barriers, and craft a realistic, empowering plan.
No fluff. No one size fits all. Just a blueprint tailored to help you thrive.
Start strong with structure that supports your long-term success.</span>

                    <a href="{{ route('general-checkout',['product' => 'fit-reset-consultation' ]) }}"
                        class="btn btn-warning d-block text-center mx-auto mt-4">Book your consultation!</a>
                </div>
            </div>
            <div class="col-lg-4 col-md-6">
                <div class="bg-light rounded text-justify p-5">
                    <img src="{{ asset('frc2.webp') }}" class="img-fluid">
                    <h3 class="text-uppercase my-4 fs-1 text-center">Action Steps</h3>
                    <p class="text-center text-uppercase"><strong> Clear, motivating steps to restart your fitness
                            journey</strong><br><br></p>

                    <span class="text-justify">Get easy-to-follow, bite-sized steps you can start today with no guesswork.
We break down your reset into manageable actions that build momentum.
Every step is designed to spark motivation, discipline, and daily wins.
You’ll leave with a clear sense of direction and a plan you’ll actually follow.</span><br><br></p>

                    <a href="{{ route('general-checkout',['product' => 'fit-reset-consultation' ]) }}"
                        class="btn btn-warning d-block text-center mx-auto mt-4">Book your consultation!</a>

                </div>
            </div>
            <div class="col-lg-4 col-md-6">
                <div class="bg-light rounded text-justify p-5">
                    <img src="{{ asset('frc3.webp') }}" class="img-fluid" alt="">
                    <h3 class="text-uppercase my-4 fs-1 text-center">Mind Shift</h3>
                    <p class="text-center text-uppercase"><strong>A renewed mindset to finally prioritize your
                            health</strong> <br><br></p>

                    <span class="text-justify">This isn’t just about workouts. It’s about how you see your health.
We help you reframe old habits, release guilt, and embrace self-respect.
Expect honest conversation, mindset tools, and support to stay on track.<br>
You’ll walk away ready to put your wellness first, without apology.</span><br><br> 

                    <a href="{{ route('general-checkout',['product' => 'fit-reset-consultation' ]) }}"
                        class="btn btn-warning d-block text-center mx-auto mt-4">Book your consultation!</a>

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

@include('index1.testimonials')


<div class="text-center" style="background-color: #FDD709; padding: 4rem 2rem; border-radius: 2rem; box-shadow: 0 0 30px rgba(0,0,0,0.2); margin-top: 4rem;">
  <h2 class="fw-bold mb-3 text-black display-5">Ready for Your Fitness Reset?</h2>
  <p class="fs-4 mb-5 text-dark">
    Book your 1:1 Fitness Consultation for only <strong class="text-primary">$129</strong><br>
    <span class="fw-semibold">Only 10 spots available per week</span>
  </p>
  <a href="{{ route('general-checkout',['product' => 'fit-reset-consultation' ]) }}"
     class="btn fw-bold"
     style="background-color: #28a745; color: white; font-size: 1.5rem; padding: 1.2rem 3rem; border-radius: 2rem;">
    Book Now for <span class="text-decoration-line-through">$129</span> Black Friday $99 
  </a>
</div>
</div>

@endsection