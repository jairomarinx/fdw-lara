@extends('index1.app')

@section('title', 'Fit.Done.Well.')

@section('index1.content')

    @include('index1.services.hero-services',
      [
                'hero_image'=>'t1/img/services/hero-intentional.webp',
                'h1_title' => 'Intentional Home Makeover',
                'h2_subtitle' => 'Transform Any Room into a Space that Reflects You',
            ]
    )

    <div class="mb-5 text-center mt-5">
        <h5 class="text-primary text-uppercase fs-3"><strong></strong></h5>
        <h1 class="display-3 text-uppercase mb-0">Intentional Home Makeover</h1>
        <h4 class="text-body mb-4">         </h4>

        <h5 class="text-gray fs-1"><span class="text-primary"> WHAT YOU GET</span> </h5>
        <h6 class="text-gray fs-3">(Scottsdale )</h6>

    </div>


    <!-- Programe Start -->
    <div class="container-fluid programe position-relative px-5 mt-5" style="margin-bottom: 135px;">
        <div class="row g-5 gb-5">
            <div class="col-lg-4 col-md-6">
                <div class="bg-light rounded text-justify p-5">
                    <img src="{{ asset('cocina.webp') }}" alt="body" class="img-fluid">
                    <h3 class="text-uppercase my-4 fs-1 text-center">Intentional Kitchen Makeover</h3>
                    <p class="text-center text-uppercase"><strong> Reimagine Your Kitchen as the Heart of Wellbeing</strong><br><br></p>

                    <span class="text-justify">Turn your kitchen into a space that inspires connection and nourishment. From smart layouts to mindful aesthetics, we design with purpose so cooking and gathering feel effortless and joyful.</span>

                    <a href="{{ url('/general-checkout/intentional-make-over') }}"
                        class="btn btn-warning d-block text-center mx-auto mt-4">Start Now!</a>
                </div>
            </div>
            <div class="col-lg-4 col-md-6">
                <div class="bg-light rounded text-justify p-5">
                    <img src="{{ asset('media.webp') }}" class="img-fluid">
                    <h3 class="text-uppercase my-4 fs-1 text-center">Intentional Media Makeover</h3>
                    <p class="text-center text-uppercase"><strong> Elevate Your Online Presence with Purpose and Authenticity</strong><br><br></p>

                    <span class="text-justify">Refine your Instagram or business profile into a clear, aligned reflection of your vision. We optimize visuals, tone, and storytelling — turning your digital space into a cohesive, inspiring brand experience.</span><br><br></p>

                    <a href="{{ url('/general-checkout/intentional-make-over') }}"
                        class="btn btn-warning d-block text-center mx-auto mt-4">Choose This Plan!</a>

                </div>
            </div>
            <div class="col-lg-4 col-md-6">
                <div class="bg-light rounded text-justify p-5">
                    <img src="{{ asset('room.webp') }}" class="img-fluid" alt="">
                    <h3 class="text-uppercase my-4 fs-1 text-center">Intentional Room Makeover</h3>
                    <p class="text-center text-uppercase"><strong>Transform Any Room into a Space that Reflects You</strong> <br><br></p>

                    <span class="text-justify">
                        Redesign your room or office with purpose and harmony. Every color, object, and layout decision is made intentionally, creating a balanced environment that supports focus, peace, and authentic self expression.


                    </span><br><br> 

                    <a href="{{ url('/general-checkout/intentional-make-over') }}"
                        class="btn btn-warning d-block text-center mx-auto mt-4">Start Now!</a>
                </div>
            </div>

        </div>
    </div>
    <!-- Programe Start -->





















<div class="text-center" style="background-color: #FDD709; padding: 4rem 2rem; border-radius: 2rem; box-shadow: 0 0 30px rgba(0,0,0,0.2); margin-top: 4rem;">
  <h2 class="fw-bold mb-4 text-black display-5">Intentional Home Makeover</h2>
  <p class="fs-4 mb-5 text-dark">
    our home is more than a place, it is an extension of your energy. When every corner reflects clarity and intention, daily life feels lighter, more inspired, and deeply aligned with who you are.
  </p>
  <p class="fs-4 mb-5 text-dark">
    Ready to reimagine your space with purpose?
  </p>
  

  <a href="{{ url('/general-checkout/intentional-make-over') }}"
     class="btn fw-bold"
     style="background-color: #28a745; color: white; font-size: 1.5rem; padding: 1.4rem 4rem; border-radius: 2rem;">
    Evaluation 129 USD
  </a>
</div>



@endsection