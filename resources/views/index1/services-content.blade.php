<div class="container-fluid px-5 py-5" style="background-color: #F4F5F8;">
    <div class="text-center mb-4">
        <h1 class="display-4 text-uppercase" style="font-size: clamp(16px, 30px, 30px);">OUR FITNESS SERVICES</h1>
    </div>

    <div class="row g-5">

        <!-- Fit Reset Consultation -->
        <div class="col-lg-4 col-md-6">
            <div class="bg-white rounded p-4 h-100 d-flex flex-column justify-content-between">
                <img src="{{ asset('t1/img/services/brad-corey.webp') }}" class="img-fluid mb-3" alt="">
                <h3 class="text-uppercase text-center fs-3">Fit Reset Consultation</h3>
                <p class="text-center fw-bold">Face Time or Scottsdale Facility</p>
                <p class="text-justify flex-grow-1">
                    This personalized consultation is designed for those ready to take control of their health with a clear and sustainable approach. One of our coaches will connect with you within 24 hours to define the best schedule.
                </p>
                <div class="text-center mt-3">
                    <a href="{{ route('fitness-reset-consultation') }}" class="btn btn-outline-dark mb-2">Learn More</a>
                    <a href="{{ route('fit',  'fit-reset-consultation') }}" class="btn btn-warning d-block mt-2">Pay $129.00</a>
                </div>
            </div>
        </div>

        <!-- Personal Fitness Training -->
        <div class="col-lg-4 col-md-6">
            <div class="bg-white rounded p-4 h-100 d-flex flex-column justify-content-between">
                <img src="{{ asset('t1/img/services/service-pillar2.webp') }}" class="img-fluid mb-3" alt="">
                <h3 class="text-uppercase text-center fs-3">Personal Fitness Training</h3>
                <p class="text-center fw-bold">Face Time or Scottsdale Facility</p>
                <p class="text-justify flex-grow-1">
                    Fully personalized one-hour session either from the comfort of your home (FaceTime) or at our Scottsdale gym. One of our coaches will contact you within 24 hours to set the best schedule.
                </p>
                <div class="text-center mt-3">
                    <a href="{{ route('personal-fitness-training') }}" class="btn btn-outline-dark mb-2">Learn More</a>

                    <a href="{{ route('fit' ) }}" class="btn btn-warning d-block mt-2 ">Buy Now!</a>

                    <a href="{{ route('general-checkout', ['product' => 'personal-fitness-training1']) }}" class="btn btn-warning d-block mt-2 d-none">1 Session $129.00</a>
                    <a href="{{ route('general-checkout', ['product' => 'personal-fitness-training4']) }}" class="btn btn-warning d-block mt-2 d-none">4 Sessions $516.00</a>
                    <a href="{{ route('general-checkout', ['product' => 'personal-fitness-training8']) }}" class="btn btn-warning d-block mt-2 d-none">8 Sessions $792.00</a>
                    <a href="{{ route('general-checkout', ['product' => 'personal-fitness-training12']) }}" class="btn btn-warning d-block mt-2 d-none">12 Sessions $900.00</a>
                    <a href="{{ route('general-checkout', ['product' => 'personal-fitness-training1230']) }}" class="btn btn-warning d-block mt-2 d-none">12 Sessions 30mins $792.00</a>


                </div>
            </div>
        </div>

        <!-- Group Fitness Training -->
        <div class="col-lg-4 col-md-6">
            <div class="bg-white rounded p-4 h-100 d-flex flex-column justify-content-between">
                <img src="{{ asset('t1/img/services/corey-laly.webp') }}" class="img-fluid mb-3" alt="">
                <h3 class="text-uppercase text-center fs-3">Group Fitness Training</h3>
                <p class="text-center fw-bold">Scottsdale Facility (Mon/Wed/Fri at 9:00 am)</p>
                <p class="text-justify flex-grow-1">
                    Build strength, confidence, and consistency with expert-led group sessions.
                    Enjoy personalized attention without the pressure of going solo.
                    Each class blends challenge, support, and real community energy.
                    Train hard, feel good, and grow stronger together.
                </p>
                <div class="text-center mt-3">
                    <a href="{{ route('group-fitness-training') }}" class="btn btn-outline-dark mb-2">Learn More</a>
                    <a href="{{ route('fit', 'group-fitness-training') }}" class="btn btn-warning d-block mt-2">1 Month $507.00</a>
                </div>
            </div>
        </div>

    </div>
</div>

<div style="height: 50px; background-color: #222429;"></div>

<div class="container-fluid px-5 py-5" style="background-color: #F4F5F8;">
    <div class="text-center mb-4">
        <h1 class="display-4 text-uppercase" style="font-size: clamp(16px, 30px, 30px);">OUR NUTRITIONAL SERVICES</h1>
    </div>

    <div class="row g-5">

        <!-- Nutrition Reset Consultation -->
        <div class="col-lg-4 col-md-6">
            <div class="bg-white rounded p-4 h-100 d-flex flex-column justify-content-between">
                <img src="{{ asset('gro2.webp') }}" class="img-fluid mb-3" alt="">
                <h3 class="text-uppercase text-center fs-3">Nutrition Reset Consultation</h3>
                <p class="text-center fw-bold">Face Time or Scottsdale Facility</p>
                <p class="text-justify flex-grow-1">
                    Designed for those ready to reset their nutrition. One of our coaches will connect within 24 hours to define the best schedule.
                </p>
                <div class="text-center mt-3">
                    <a href="{{ route('nutrition-reset-consultation') }}" class="btn btn-outline-dark mb-2">Learn More</a>
                    <a href="{{ route('meal',  'nutrition-reset-consultation') }}" class="btn btn-warning d-block mt-2">Pay $129.00</a>
                </div>
            </div>
        </div>

        <!-- Grocery Reset Tour -->
        <div class="col-lg-4 col-md-6">
            <div class="bg-white rounded p-4 h-100 d-flex flex-column justify-content-between">
                <img src="{{ asset('gro.webp') }}" class="img-fluid mb-3" alt="">
                <h3 class="text-uppercase text-center fs-3">Grocery Reset Tour</h3>
                <p class="text-center fw-bold">Scottsdale</p>
                <p class="text-justify flex-grow-1">
                    A guided supermarket tour to reset your eating habits and learn to eat with purpose. One of our coaches will contact you within 24 hours.
                </p>
                <div class="text-center mt-3">
                    <a href="{{ route('grocery-reset-tour') }}" class="btn btn-outline-dark mb-2">Learn More</a>
                    <a href="{{ route('meal',  'grocery-reset-tour') }}" class="btn btn-warning d-block mt-2">Pay $199.00</a>
                </div>
            </div>
        </div>

        <!-- Weekly Meal Prepping -->
        <div class="col-lg-4 col-md-6">
            <div class="bg-white rounded p-4 h-100 d-flex flex-column justify-content-between">
                <img src="{{ asset('t1/img/services/n3.webp') }}" class="img-fluid mb-3" alt="">
                <h3 class="text-uppercase text-center fs-3">Weekly Meal Prepping</h3>
                <p class="text-center fw-bold">Scottsdale</p>
                <p class="text-justify flex-grow-1">
                    Our meal preps indulge your palate while helping you get in shape.
                </p>
                <div class="text-center mt-3">
                    <a href="{{ route('weekly-meal-prepping') }}" class="btn btn-outline-dark mb-2">Learn More</a>
                    <a href="{{ route('meal','weekly-meal-prepping5') }}" class="btn btn-warning d-block mt-2">5 Meals $70.00</a>
                    <a href="{{ route('meal','weekly-meal-prepping10') }}" class="btn btn-warning d-block mt-2">10 Meals $120.00</a>
                </div>
            </div>
        </div>

    </div>
</div>
<div class="container">
</div>

<div style="height: 50px; background-color: #222429;"></div>


<div class="container-fluid px-5 py-5" style="background-color: #F4F5F8;">
    <div class="text-center mb-4">
        <h1 class="display-4 text-uppercase" style="font-size: clamp(16px, 30px, 30px);">OUR MINDFUL SERVICES</h1>
    </div>

    <div class="row g-5">

        <!-- Life Reset Consultation -->
        <div class="col-lg-4 col-md-6">
            <div class="bg-white rounded p-4 h-100 d-flex flex-column justify-content-between">
                <img src="{{ asset('a1.webp') }}" class="img-fluid mb-3" alt="">
                <h3 class="text-uppercase text-center fs-3">Life Reset Consultation</h3>
                <p class="text-center fw-bold">Face Time or Scottsdale Facility</p>
                <p class="text-justify flex-grow-1">
                    A consultation for life clarity and focus. One of our coaches will contact you within 24 hours.
                </p>
                <div class="text-center mt-3">
                    <a href="{{ route('life-reset-consultation') }}" class="btn btn-outline-dark mb-2">Learn More</a>
                    <a href="{{ route('general-checkout', ['product' => 'life-reset-consultation']) }}" class="btn btn-warning d-block mt-2">Pay $129.00</a>
                </div>
            </div>
        </div>

        <!-- Life Reset Coaching -->
        <div class="col-lg-4 col-md-6">
            <div class="bg-white rounded p-4 h-100 d-flex flex-column justify-content-between">
                <img src="{{ asset('a2.webp') }}" class="img-fluid mb-3" alt="">
                <h3 class="text-uppercase text-center fs-3">Life Reset Coaching</h3>
                <p class="text-center fw-bold">Scottsdale Facility</p>
                <p class="text-justify flex-grow-1">
                    Sacred space to heal, design your manifestation map, build habits, and rebirth your best self. Coach will contact you in 24h.
                </p>
                <div class="text-center mt-3">
                    <a href="{{ route('sunrise-life-reset') }}" class="btn btn-outline-dark mb-2">Learn More</a>
                    <a href="{{ route('general-checkout', ['product' => 'sunrise-life-reset-service']) }}" class="btn btn-warning d-block mt-2">Pay $199.00</a>
                </div>
            </div>
        </div>

        <!-- Intentional Home Makeover -->
        <div class="col-lg-4 col-md-6">
            <div class="bg-white rounded p-4 h-100 d-flex flex-column justify-content-between">
                <img src="{{ asset('intentional1.webp') }}" class="img-fluid mb-3" alt="">
                <h3 class="text-uppercase text-center fs-3">Intentional Home Makeover</h3>
                <p class="text-center fw-bold">Scottsdale</p>
                <p class="text-justify flex-grow-1">
                    Redesign your home, office, or online presence with purpose. Our Intentional Makeover service helps you refresh rooms, kitchens, or even your Instagram, aligning beauty, function, and energy to reflect your best self.
                </p>
                <div class="text-center mt-3">
                    <a href="{{ route('intentional-make-over') }}" class="btn btn-outline-dark mb-2">Learn More</a>
                    <a href="{{ route('general-checkout', ['product' => 'intentional-make-over']) }}" class="btn btn-warning d-block mt-2">Evaluation $129</a>
                </div>
            </div>
        </div>

    </div>
</div>

<div style="height: 50px; background-color: #222429;"></div>
