@extends('index1.app')

@section('title', 'Fit.Done.Well.')

@section('index1.content')

    @include('index1.services.hero-services',
      [
                'hero_image'=>'t1/img/services/group.webp',
                'h1_title' => 'Group.Fitness.Training',
                'h2_subtitle' => 'Train Together. Grow Stronger.',
            ]
    )

    <div class="mb-5 text-center mt-5">
        <h5 class="text-primary text-uppercase fs-3"><strong></strong></h5>
        <h1 class="display-3 text-uppercase mb-0">Group Fitness Training</h1>
        <h4 class="text-body mb-4">Small Groups. Big Results.
        </h4>

        <h5 class="text-gray fs-1"><span class="text-primary"> WHAT YOU GET</span> </h5>
        <h6 class="text-gray fs-3">(Scottsdale Facility)</h6>

    </div>


    <!-- Programe Start -->
    <div class="container-fluid programe position-relative px-5 mt-5" style="margin-bottom: 135px;">
        <div class="row g-5 gb-5">
            <div class="col-lg-4 col-md-6">
                <div class="bg-light rounded text-justify p-5">
                    <img src="{{ asset('gr1c.webp') }}" alt="body" class="img-fluid">
                    <h3 class="text-uppercase my-4 fs-1 text-center">Group Energy</h3>
                    <p class="text-center text-uppercase"><strong> Feel the power of training with others</strong><br><br></p>

                    <span class="text-justify">Move with motivation and momentum in every session.
The energy of the group keeps you going, even on slow days.
You’ll push further and have more fun doing it.
This is fitness that feels alive, not like a chore.</span>

                    <a href="{{ url('/general-checkout/group-fitness-training') }}"
                        class="btn btn-warning d-block text-center mx-auto mt-4">Start Training Now!</a>
                </div>
            </div>
            <div class="col-lg-4 col-md-6">
                <div class="bg-light rounded text-justify p-5">
                    <img src="{{ asset('gr2.webp') }}" class="img-fluid">
                    <h3 class="text-uppercase my-4 fs-1 text-center">Expert Coaching</h3>
                    <p class="text-center text-uppercase"><strong> Real trainers who actually pay attention</strong><br><br></p>

                    <span class="text-justify">Even in a group, you’re never lost in the crowd.
Our coaches correct your form, guide your pace, and cheer you on.
Every move is intentional and supported.
You get the benefit of personal coaching, with community all around.</span><br><br></p>

                    <a href="{{ url('/general-checkout/group-fitness-training') }}"
                        class="btn btn-warning d-block text-center mx-auto mt-4">Choose This Plan!</a>

                </div>
            </div>
            <div class="col-lg-4 col-md-6">
                <div class="bg-light rounded text-justify p-5">
                    <img src="{{ asset('gr3.webp') }}" class="img-fluid" alt="">
                    <h3 class="text-uppercase my-4 fs-1 text-center">Supportive Vibes</h3>
                    <p class="text-center text-uppercase"><strong>Everyone’s here to get better, not to judge</strong> <br><br></p>

                    <span class="text-justify">
                        This isn’t a gym full of mirrors and pressure.
It’s a space to show up, sweat, and support each other.
Our members lift more than weights, they lift each other.
Come as you are and grow from there.<br>


                    </span><br><br> 

                    <a href="{{ url('/general-checkout/group-fitness-training') }}"
                        class="btn btn-warning d-block text-center mx-auto mt-4">Get One-on-One Coaching!</a>

                </div>
            </div>

        </div>
    </div>
    <!-- Programe Start -->



















@include('index1.testimonials')


<div class="text-center" style="background-color: #FDD709; padding: 4rem 2rem; border-radius: 2rem; box-shadow: 0 0 30px rgba(0,0,0,0.2); margin-top: 4rem;">
  <h2 class="fw-bold mb-4 text-black display-5">Join Our Group Fitness Training</h2>
  <p class="fs-4 mb-5 text-dark">
    Monthly membership for small group coaching sessions<br>
    <span class="fw-semibold">Limited spots to keep the experience personal</span><br>
    <strong> Scottsdale Facility. Mon/Wed/Fri 6:00 AM & 9:00 AM</strong>
  </p>
  

  <a href="{{ url('/general-checkout/group-fitness-training') }}"
     class="btn fw-bold"
     style="background-color: #28a745; color: white; font-size: 1.5rem; padding: 1.4rem 4rem; border-radius: 2rem;">
    Join Now for $507 per Month
  </a>
</div>



@endsection