@php
    $services = [
        'OUR.FITNESS.SERVICES.' => [
            [
                'title' => 'Fit Reset Consultation.',
                'tag' => 'strong bodies',
                'subtitle' => 'Face Time or Scottsdale Facility',
                'description' => 'Celebrate your body… This personalized consultation is designed for those ready to take control of their health with a clear and sustainable approach. One of our coaches will connect with you within 24 hours to define the best schedule.',
                'prices' => [['label' => 'Pay $129.00', 'route' => 'general-checkout', 'product'=>'fit-reset-consultation']],
                'image' => 't1/img/services/brad-corey.webp',
                'link'  => 'fitness-reset-consultation'
            ],
            [
                'title' => 'Personal Fitness Training.',
                'tag' => 'strong bodies',
                'subtitle' => 'Face Time or Scottsdale Facility',
                'description' => 'Nurture your mind… Fully personalized one-hour session either from the comfort of your home (FaceTime) or at our Scottsdale gym. One of our coaches will contact you within 24 hours to set the best schedule.',
                'prices' => [
                    ['label' => '1 Session $129.00', 'route' => 'general-checkout', 'product' => 'personal-fitness-training1' ],
                    ['label' => '4 Sessions $396.00', 'route' => 'general-checkout', 'product' => 'personal-fitness-training4'],
                    ['label' => '8 Sessions $792.00', 'route' => 'general-checkout', 'product' => 'personal-fitness-training8']
                ],
                'image' => 't1/img/services/service-pillar2.webp',
                'link'  => 'personal-fitness-training'
            ],
            [
                'title' => 'Group Fitness Training.',
                'tag' => 'strong bodies',
                'subtitle' => 'Scottsdale Facility (Mon/Wed/Fri at 9:00 am)',
                'description' => 'Build strength, confidence, and consistency with expert-led group sessions.
Enjoy personalized attention without the pressure of going solo.
Each class blends challenge, support, and real community energy.
Train hard, feel good, and grow stronger together.',
                'prices' => [['label' => '1 Month $507.00', 'route' => 'general-checkout', 'product' => 'group-fitness-training']],
                'image' => 't1/img/services/corey-laly.webp',
                'link'  => 'group-fitness-training'

            ]
        ],
        'OUR.NUTRITIONAL.SERVICES.' => [
            [
                'title' => 'Nutrition Reset Consultation.',
                'tag' => 'strong bodies',
                'subtitle' => 'Face Time or Scottsdale Facility',
                'description' => 'Celebrate your body… Designed for those ready to reset their nutrition. One of our coaches will connect within 24 hours to define the best schedule.',
                'prices' => [['label' => 'Pay $129.00', 'route' => 'general-checkout', 'product' => 'nutrition-reset-consultation' ]],
                'image' => 't1/img/services/brad-recipe2.webp',
                'link'  => 'nutrition-reset-consultation'

            ],
            [
                'title' => 'Grocery Reset Tour.',
                'tag' => 'strong bodies',
                'subtitle' => 'Scottsdale & Phoenix',
                'description' => 'Nurture your mind… A guided supermarket tour to reset your eating habits and learn to eat with purpose. One of our coaches will contact you within 24 hours.',
                'prices' => [['label' => 'Pay $199.00', 'route' => 'general-checkout', 'product' => 'grocery-reset-tour']],
                'image' => 't1/img/services/grocery1.webp',
                'link'  => 'grocery-reset-tour'

            ],
            [
                'title' => 'Weekly Meal Prepping.',
                'tag' => 'strong bodies',
                'subtitle' => 'Scottsdale & Phoenix',
                'description' => 'Elevate your… Our meal preps indulge your palate while helping you get in shape.',
                'prices' => [
                    ['label' => '5 Meals $70.00', 'route' => 'general-checkout', 'product' => 'weekly-meal-prepping5' ],
                    ['label' => '10 Meals $120.00', 'route' => 'general-checkout', 'product'=> 'weekly-meal-prepping10'],                    
                ],
                'image' => 't1/img/services/n3.webp',
                'link'  => 'weekly-meal-prepping'

            ]
        ],
        'OUR.MINDFUL.SERVICES.' => [
            [
                'title' => 'Life Reset Consultation.',
                'tag' => 'Open Minds',
                'subtitle' => 'Face Time or Scottsdale Facility',
                'description' => 'Celebrate your body… A consultation for life clarity and focus. One of our coaches will contact you within 24 hours.',
                'prices' => [['label' => 'Pay $129.00', 'route' => 'general-checkout', 'product' => 'life-reset-consultation']],
                'image' => 't1/img/services/m2.webp',
                'link'  => 'life-reset-consultation'

            ],
            [
                'title' => 'Sunrise Life Reset.',
                'tag' => 'open minds',
                'subtitle' => 'Scottsdale Facility',
                'description' => 'Nurture your mind… Sacred space to heal, design your manifestation map, build habits, and rebirth your best self. Coach will contact you in 24h.',
                'prices' => [['label' => 'Pay $199.00', 'route' => 'general-checkout', 'product'=> 'sunrise-life-reset-service']],
                'image' => 't1/img/services/sunrise1.webp',
                'link'  => 'sunrise-life-reset'

            ],
            [
                'title' => 'Life Reset Retreats.',
                'tag' => 'kind hearts',
                'subtitle' => 'Sedona & Colombia',
                'description' => 'Elevate your spirit… Multi-day retreats with full-body reset experiences. Coach will confirm dates after payment. Plain tickets not included.',
                'prices' => [
                    ['label' => '2 days Sedona $1,200.00', 'route' => 'general-checkout', 'product' => 'life-reset-retreat2'],
                    ['label' => '5 days Medellin $2,900.00', 'route' => 'general-checkout', 'product'=> 'life-reset-retreat5']
                ],
                'image' => 't1/img/services/sedona.webp',
                'link'  => 'life-reset-retreats'

            ]
        ]
    ];
@endphp

@foreach ($services as $sectionTitle => $items)
    <div class="container-fluid px-5 py-5" style="background-color: #F4F5F8;">
        <div class="text-center mb-4">
            <h1 class="display-4 text-uppercase" style="font-size: clamp(16px, 30px, 30px);">{{ $sectionTitle }}</h1>
        </div>
        <div class="row g-5">
            @foreach ($items as $item)
                <div class="col-lg-4 col-md-6">
                    <div class="bg-white rounded p-4 h-100 d-flex flex-column justify-content-between">
                        <img src="{{ asset($item['image']) }}" class="img-fluid mb-3" alt="">
                        <h3 class="text-uppercase text-center fs-3">{{ $item['title'] }}</h3>
                        
                        <p class="text-center fw-bold">{{ $item['subtitle'] }}</p>
                        <p class="text-justify flex-grow-1">{{ $item['description'] }}</p>
                        <div class="text-center mt-3">
                            <a href="{{ route($item['link']) }}" class="btn btn-outline-dark mb-2">Learn More</a>
                            @foreach ($item['prices'] as $price)
                                <a href="{{ route($price['route'], ['product' => $price['product'] ]) }}" class="btn btn-warning d-block mt-2">{{ $price['label'] }}</a>
                            @endforeach
                        </div>
                    </div>
                </div>
            @endforeach
        </div>
    </div>
    <div style="height: 50px; background-color: #222429;"></div>
@endforeach

<!-- LIFE.RESET.EVENTS -->
<div class="container-fluid px-5 py-5 d-none" style="background-color: #F4F5F8;">
    <div class="text-center mb-5">
        <h1 class="display-4 text-uppercase">LIFE.RESET.EVENTS.</h1>
        <p class="fs-5 text-muted">Unique experiences to reset your Body.Mind.Spirit.</p>
    </div>
    <div class="row g-4">
        <div class="col-lg-4 col-md-6">
            <div class="bg-white rounded h-100 p-4 d-flex flex-column">
                <img src="{{ asset('t1/img/services/ev1.webp') }}" class="img-fluid mb-3" alt="">
                <h4 class="text-uppercase">Saturday.Booty.Camp.</h4>
                <p class="text-muted">Scottsdale</p>
                <p class="text-justify flex-grow-1">A fun and dynamic class focused on legs, glutes, and abs. Come sweat, laugh, and shape your body with us. Dates TBD based on demand.</p>
                <a href="{{ route('saturday-booty-camp') }}" class="btn btn-outline-dark mb-2">Learn More</a>
                <a href="{{ route('checkout-fit-reset-consultation') }}" class="btn btn-warning">Pay $29.00</a>
            </div>
        </div>

        <div class="col-lg-4 col-md-6">
            <div class="bg-white rounded h-100 p-4 d-flex flex-column">
                <img src="{{ asset('t1/img/services/ev2.webp') }}" class="img-fluid mb-3" alt="">
                <h4 class="text-uppercase">Sunrise.Life.Reset.</h4>
                <p class="text-muted">Scottsdale</p>
                <p class="text-justify flex-grow-1">Sacred sunrise experience: heal what no longer serves you, design your manifestation map, create habits and discover your balance. Dates TBD.</p>
                <a href="{{ route('sunrise-life-reset') }}" class="btn btn-outline-dark mb-2">Learn More</a>
                <a href="{{ route('checkout-fit-reset-consultation') }}" class="btn btn-warning">Pay $129.00</a>
            </div>
        </div>

        <div class="col-lg-4 col-md-6">
            <div class="bg-white rounded h-100 p-4 d-flex flex-column">
                <img src="{{ asset('t1/img/services/ev3.webp') }}" class="img-fluid mb-3" alt="">
                <h4 class="text-uppercase">Kayak.with.Us.</h4>
                <p class="text-muted">Salt River, Arizona</p>
                <p class="text-justify flex-grow-1">Kayaking trip through the scenic Salt River! Paddle among wildlife and desert cliffs. Scenic float with sections of swift water. Breakfast picnic included. Dates TBD.</p>
                <a href="{{ route('kayak-with-us') }}" class="btn btn-outline-dark mb-2">Learn More</a>
                <a href="{{ route('checkout-fit-reset-consultation') }}" class="btn btn-warning">Pay $129.00</a>
            </div>
        </div>
    </div>
</div>
<div style="height: 50px; background-color: #222429;"></div>

<style>
    .text-justify {
        text-align: justify;
    }
    .btn-warning {
        background-color: #FCD804;
        color: black;
        border: none;
    }
    .btn-outline-dark {
        border-color: #222429;
        color: #222429;
    }
    .btn-outline-dark:hover {
        background-color: #222429;
        color: white;
    }
</style>

