@extends('index1.app')

@section('title', 'Fit.Done.Well.')

@section('index1.content')

    @include('index1.services.hero-services',
      [
                'hero_image'=>'t1/img/services/pft.webp',
                'h1_title' => 'Personal.Fitness.Training',
                'h2_subtitle' => 'Transform Your Body with 1:1 Personal Training',
            ]
    )

    <div class="mb-5 text-center mt-5">
        <h5 class="text-primary text-uppercase fs-3"><strong></strong></h5>
        <h1 class="display-3 text-uppercase mb-0">Personal.Fitness.Training</h1>
        <h4 class="text-body mb-4">Train Smarter. Get Stronger. Stay Consistent.
        </h4>

        <h5 class="text-gray fs-1"><span class="text-primary"> WHAT YOU GET</span> </h5>
        <h6 class="text-gray fs-3">(Face Time or Scottsdale Facility)</h6>

    </div>


    <!-- Programe Start -->
    <div class="container-fluid programe position-relative px-5 mt-5" style="margin-bottom: 135px;">
        <div class="row g-5 gb-5">
            <div class="col-lg-4 col-md-6">
                <div class="bg-light rounded text-justify p-5">
                    <img src="{{ asset('t1/img/services/corey-focus.webp') }}" alt="body" class="img-fluid">
                    <h3 class="text-uppercase my-4 fs-1 text-center">Personal Focus</h3>
                    <p class="text-center text-uppercase"><strong> One-on-one sessions tailored 100% to your goals</strong><br><br></p>

                    <span class="text-justify">You’re not just a number in a class. Every session is built around you.
We adjust pace, intensity, and exercises to fit your real life.
This is personal training that actually feels personal.
No distractions. No comparison. Just progress.</span>

                </div>
            </div>
            <div class="col-lg-4 col-md-6">
                <div class="bg-light rounded text-justify p-5">
                    <img src="{{ asset('t1/img/services/laly-strong.webp') }}" class="img-fluid" alt="">
                    <h3 class="text-uppercase my-4 fs-1 text-center">Lasting Results</h3>
                    <p class="text-center text-uppercase"><strong>Training that sticks and keeps you moving forward</strong> <br><br></p>

                    <span class="text-justify">
                        This isn’t a quick fix. It’s a system built for sustainability.
We build strength, mobility, and consistency week after week.
Say goodbye to on-and-off training cycles.
We’re in this to help you stay fit for good.
                    </span><br><br> 


                </div>
            </div>            
            <div class="col-lg-4 col-md-6">
                <div class="bg-light rounded text-justify p-5">
                    <img src="{{ asset('t1/img/services/brad-corey.webp') }}" class="img-fluid">
                    <h3 class="text-uppercase my-4 fs-1 text-center">Expert Guidance</h3>
                    <p class="text-center text-uppercase"><strong> Real coaching that drives real transformation</strong><br><br></p>

                    <span class="text-justify">Your trainer brings years of experience — and full attention to you.
Expect smart corrections, clear explanations, and proven strategies.
You're not left to figure it out alone.
Every movement counts, and we make sure it's done right.</span><br><br></p>


                </div>
            </div>


        </div>
    </div>
    <!-- Programe Start -->


















@include('index1.testimonials')


<div class="text-center" style="background-color: #FDD709; padding: 4rem 2rem; border-radius: 2rem; box-shadow: 0 0 30px rgba(0,0,0,0.2); margin-top: 4rem;">
  <h2 class="fw-bold mb-4 text-black display-5">Start Your Personal Fitness Training</h2>
  <p class="fs-4 mb-5 text-dark">
    Choose the plan that fits your goals and commitment level<br>
    <span class="fw-semibold">Only 10 clients accepted per week</span>
  </p>

  <div class="d-flex flex-column flex-md-row justify-content-center gap-4">
    <a href="{{ url('/general-checkout/personal-fitness-training1') }}"
       class="btn fw-bold"
       style="background-color: #28a745; color: white; font-size: 1.3rem; padding: 1.2rem 3rem; border-radius: 2rem;">
      1 Session — $129
    </a>

    <a href="{{ url('/general-checkout/personal-fitness-training4') }}"
       class="btn fw-bold"
       style="background-color: #198754; color: white; font-size: 1.3rem; padding: 1.2rem 3rem; border-radius: 2rem;">
      4 Sessions — $396
    </a>

    <a href="{{ url('/general-checkout/personal-fitness-training8') }}"
       class="btn fw-bold"
       style="background-color: #157347; color: white; font-size: 1.3rem; padding: 1.2rem 3rem; border-radius: 2rem;">
      8 Sessions — $792
    </a>
  </div>
</div>


@endsection