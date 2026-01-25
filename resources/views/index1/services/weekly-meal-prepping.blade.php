@extends('index1.app') 

@section('title', 'Fit.Done.Well.')

@section('index1.content')

    @include('index1.services.hero-services', [
        'hero_image'=>'t1/img/services/brad-recipe3.webp',
        'h1_title' => 'Weekly.Meal.Prepping',
        'h2_subtitle' => 'Plan Smart. Eat Better. Live Easier'
    ])

    <div class="container">
        <div class="row" style="margin-top: 80px;">
            <div class="col-12 text-center">
                <a href="{{ route('meal', 'weekly-meal-prepping5') }}" class="btn-yellow" style="padding: 30px 100px; font-size:30px;  ">Buy Now!</a>
            </div>
        </div>
    </div>

    <div class="mb-5 text-center mt-5">
        <h1 class="display-3 text-uppercase mb-0">Weekly Meal Prepping</h1>
        <h4 class="text-body mb-4">Fresh, ready-to-eat meals designed to support your goals</h4>

        <h5 class="text-gray fs-1"><span class="text-primary"> New MENU WEDNESDAYS</span></h5>
        <h6 class="text-gray fs-3"> Visit: IG <a href="https://www.instagram.com/targetdfitness/>" style="color:black; text-decoration: underline;"> @targetfitness</a>  </h6>
    </div>

    <div class="container-fluid programe position-relative px-5 mt-5" style="margin-bottom: 135px;">
        <div class="row g-5 gb-5">
            <div class="col-lg-4 col-md-6">
                <div class="bg-light rounded text-justify p-5">
                    <img src="{{ asset('t1/img/services/w1.webp') }}" alt="plan" class="img-fluid">
                    <h3 class="text-uppercase my-4 fs-1 text-center">Tailored Meals</h3>
                    <p class="text-center text-uppercase"><strong>Flexible options that fit your week and your body</strong><br><br></p>
                    <span class="text-justify">
Pick 5, 10, or 15 meals per week.  
Each one crafted with your goals and food preferences in mind.  
No decisions, no hassle—just meals that move you forward.  
Let your food match your rhythm.
                    </span>
                </div>
            </div>

            <div class="col-lg-4 col-md-6">
                <div class="bg-light rounded text-justify p-5">
                    <img src="{{ asset('t1/img/services/w2.webp')  }}" class="img-fluid">
                    <h3 class="text-uppercase my-4 fs-1 text-center">Effortless Routine</h3>
                    <p class="text-center text-uppercase"><strong>Set your plan once and enjoy it all week long</strong><br><br></p>
                    <span class="text-justify">
We prep. You enjoy. Simple as that.  
Your meals are fresh, portioned, and ready when you are.  
Eat with confidence and consistency without lifting a pan.  
Support your health with ease, not effort.
                    </span>                    

                </div>
            </div>

            <div class="col-lg-4 col-md-6">
                <div class="bg-light rounded text-justify p-5">
                    <img src="{{ asset('t1/img/services/w3.webp')  }}" class="img-fluid" alt="">
                    <h3 class="text-uppercase my-4 fs-1 text-center">Food Freedom</h3>
                    <p class="text-center text-uppercase"><strong>Stay consistent without sacrificing flavor or time</strong><br><br></p>
                    <span class="text-justify">
No more skipping meals or eating whatever is available.  
This is structure with freedom. Nourishment with joy.  
Spend less time planning and more time thriving.  
This is how smart eating becomes second nature.
                    </span>
                </div>
            </div>
        </div>
    </div>

    <div class="container">
        <div class="row" style="margin-top: 80px;">
            <div class="col-12 text-center">
                <a href="{{ route('meal','weekly-meal-prepping5') }}" class="btn-yellow" style="padding: 30px 100px; font-size:30px;  ">Buy Now!</a>
            </div>
        </div>
    </div>

    <div class="text-center" style="background-color: #FDD709; padding: 4rem 2rem; border-radius: 2rem; box-shadow: 0 0 30px rgba(0,0,0,0.2); margin-top: 4rem;">
      <h2 class="fw-bold mb-4 text-black display-5">Choose Your Weekly Meal Plan</h2>
      <p class="fs-4 mb-5 text-dark">        
        <span class="fw-semibold">Prepped fresh. Packed with purpose. Ready when you are.</span>
      </p>
      <a href="{{ route('meal','weekly-meal-prepping5') }}" class="btn fw-bold " style="background-color: #28a745; color: white; font-size: 1.5rem; padding: 1.4rem 4rem; border-radius: 2rem;">
        5 Meals 70 Usd
      </a>
      <a href="{{ route('meal','weekly-meal-prepping10') }}" class="btn fw-bold " style="background-color: #28a745; color: white; font-size: 1.5rem; padding: 1.4rem 4rem; border-radius: 2rem;">
        10 Meals 120 Usd
      </a>

    </div>




@endsection
