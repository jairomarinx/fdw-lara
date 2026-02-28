@extends('index1.app')

@section('title', 'Elite Booty Bands Pro Set | Fit.Done.Well.')

@section('index1.content')

@php
    // Conservamos tu estructura de datos intacta
    $p = [
        'key' => 'booty-bands-pro-set',
        'brand' => 'Fit.Done.Well.',
        'name' => 'Booty Bands Pro Set',
        'tagline' => 'Build a stronger booty with better form, better tension, and zero excuses.',
        'currency' => 'USD',
        'rating' => 4.9,
        'reviews_count' => 312,
        'stock_left' => 18,
        'sku' => 'FDW-BBP-SET',
        'price_regular' => 79.00,
        'price_sale' => 15.00,
        'free_shipping_from' => 75.00,
        'delivery_days_min' => 3,
        'delivery_days_max' => 6,
        'images' => [
            'https://fitdonewell.com/main_booty.jpg',
            'https://fitdonewell.com/shop-b1.jpg',
            'https://fitdonewell.com/shop-b2.jpg',

            'https://fitdonewell.com/booty.webp', // placeholders para demo, usa asset() en prod
            'https://fitdonewell.com/booty3.webp',
            'https://fitdonewell.com/booty2.webp',
            'https://fitdonewell.com/booty1.webp',
        ],
        'variant_label' => 'Intensity Set',
        'variants' => [
            ['id' => 'pro', 'name' => 'Pro Set', 'note' => '3 bands, progressive tension', 'price_sale' => 15.00, 'price_regular' => 79.00, 'badge' => 'Most popular'],
        ],
        'highlights' => [
            ['icon' => 'bi-lightning-charge', 'title' => 'Better glute activation', 'text' => 'Target glutes and hips with stable tension that keeps your knees tracking clean.'],
            ['icon' => 'bi-shield-check', 'title' => 'No roll, no pinch', 'text' => 'Wide fabric blend grips gently, stays flat, and feels premium on skin.'],
            ['icon' => 'bi-award', 'title' => 'Gym grade durability', 'text' => 'Reinforced seams built for heavy sessions, week after week.'],
            ['icon' => 'bi-phone', 'title' => 'Guided workouts included', 'text' => 'Scan the card for quick routines that fit any schedule.'],
        ],
        'specs' => [
            ['label' => 'Band count', 'value' => '3 bands in Pro Set'],
            ['label' => 'Tension levels', 'value' => 'Light, Medium, Heavy'],
            ['label' => 'Material', 'value' => 'Premium fabric blend with latex inner grip'],
            ['label' => 'Warranty', 'value' => '30 day money back guarantee'],
        ],
        'comparison' => [
            ['feature' => 'No roll design', 'fdw' => 'Yes', 'generic' => 'Often rolls'],
            ['feature' => 'Stable knee tracking', 'fdw' => 'Yes', 'generic' => 'Inconsistent'],
            ['feature' => 'Comfort on skin', 'fdw' => 'Soft fabric', 'generic' => 'Can pinch'],
        ],
        'faq' => [
            ['q' => 'Are these good for beginners?', 'a' => 'Yes. Start with light tension, focus on control, and progress week by week.'],
            ['q' => 'How do I wash them?', 'a' => 'Hand wash with mild soap, air dry flat.'],
        ],
    ];
    $defaultVariant = collect($p['variants'])->firstWhere('id', 'pro') ?? $p['variants'][0];
@endphp

<style>
    /* === PREMIUM CORE STYLES === */
    :root {
        --fdw-yellow: #FCD804;
        --fdw-dark: #222429;
        --fdw-soft-gray: #F8F9FA;
        --fdw-border: rgba(34, 36, 41, 0.08);
    }

    .fdw-product-page { background: #fff; color: var(--fdw-dark); overflow-x: hidden; }

    /* Typography Elevated */
    .fdw-title { font-family: 'Oswald', sans-serif; font-weight: 800; font-size: 3rem; line-height: 1; letter-spacing: -1px; }
    .fdw-price-main { font-family: 'Oswald', sans-serif; font-size: 3.5rem; font-weight: 700; color: #000; line-height: 1; }
    .fdw-strike { text-decoration: line-through; color: #999; font-size: 1.4rem; margin-right: 12px; }

    /* Gallery System - World Class */
    .gallery-container { position: sticky; top: 100px; }
    .fdw-main-frame { 
        background: var(--fdw-soft-gray); 
        border-radius: 4px; 
        overflow: hidden; 
        position: relative;
        cursor: crosshair;
    }
    .fdw-main-frame img { width: 100%; height: auto; transition: transform 0.4s cubic-bezier(0,0,0,1); }
    .thumb-strip { display: flex; gap: 10px; margin-top: 15px; overflow-x: auto; padding-bottom: 5px; }
    .fdw-thumb { 
        width: 85px; height: 85px; flex-shrink: 0; border: 2px solid transparent; 
        border-radius: 4px; overflow: hidden; opacity: 0.6; transition: 0.3s;
    }
    .fdw-thumb.active { border-color: var(--fdw-yellow); opacity: 1; transform: translateY(-2px); }

    /* Buttons & Conversion */
    .btn-buy-now { 
        background: var(--fdw-yellow); color: #000; font-family: 'Oswald', sans-serif;
        font-weight: 700; font-size: 1.4rem; border: none; padding: 22px; border-radius: 0;
        transition: 0.3s; box-shadow: 0 10px 30px rgba(252, 216, 4, 0.3);
    }
    .btn-buy-now:hover { background: #000; color: #fff; transform: translateY(-3px); }
    .btn-cart { border: 2px solid #000; background: transparent; font-family: 'Oswald', sans-serif; font-weight: 700; padding: 22px; border-radius: 0; }

    /* Variant Selector */
    .fdw-variant-pill {
        border: 1px solid var(--fdw-border);
        padding: 15px; cursor: pointer; transition: 0.2s; position: relative;
    }
    .fdw-variant-pill.active { border: 2px solid #000; background: #fafafa; }
    .fdw-variant-pill .badge { background: #000; font-size: 10px; padding: 4px 8px; border-radius: 0; position: absolute; top: -10px; right: 10px; }

    /* Table & Accordion */
    .fdw-comp-table { width: 100%; border-collapse: collapse; margin: 40px 0; border: 1px solid var(--fdw-border); }
    .fdw-comp-table th { background: #000; color: #fff; padding: 20px; text-transform: uppercase; font-family: 'Oswald'; }
    .fdw-comp-table td { padding: 18px; border-bottom: 1px solid var(--fdw-border); }
    .check-fdw { color: #000; font-weight: 900; }

    /* Animations */
    [data-fade] { opacity: 0; transform: translateY(20px); transition: 0.6s ease-out; }
    [data-fade].show { opacity: 1; transform: translateY(0); }

    @media (max-width: 768px) {
        .fdw-title { font-size: 2.2rem; }
        .fdw-price-main { font-size: 2.5rem; }
        .sticky-mobile-cta { position: fixed; bottom: 0; left: 0; width: 100%; background: #fff; padding: 15px; z-index: 1000; border-top: 1px solid var(--fdw-border); }
    }
</style>

<div class="fdw-product-page">
    <div class="container py-5">
        
        <div class="d-flex justify-content-between align-items-center mb-4 fdw-fadein" data-fade>
            <nav class="small text-muted text-uppercase fw-bold">Shop / {{ $p['brand'] }} / {{ $p['name'] }}</nav>
            <div class="small fw-bold"><i class="bi bi-shield-check me-1"></i> VERIFIED PREMIUM QUALITY</div>
        </div>

        <div class="row g-5">
            <div class="col-lg-7">
                <div class="gallery-container">
                    <div class="fdw-main-frame" id="zoomFrame">
                        <img id="mainView" src="{{ $p['images'][0] }}" alt="{{ $p['name'] }}">
                    </div>
                    <div class="thumb-strip">
                        @foreach($p['images'] as $i => $img)
                        <div class="fdw-thumb {{ $i == 0 ? 'active' : '' }}" onclick="changeView(this, '{{ $img }}')">
                            <img src="{{ $img }}" class="img-fluid" alt="Detail {{ $i }}">
                        </div>
                        @endforeach
                    </div>

                    <div class="row g-3 mt-5">
                        @foreach($p['highlights'] as $h)
                        <div class="col-md-6" data-fade>
                            <div class="p-4 border h-100 bg-light">
                                <i class="bi {{ $h['icon'] }} fs-3 text-warning"></i>
                                <h6 class="fw-bold mt-3 text-uppercase">{{ $h['title'] }}</h6>
                                <p class="small text-muted mb-0">{{ $h['text'] }}</p>
                            </div>
                        </div>
                        @endforeach
                    </div>
                </div>
            </div>

            <div class="col-lg-5">
                <div class="ps-lg-4">
                    <div class="d-flex align-items-center gap-2 mb-3">
                        <span class="text-warning">★★★★★</span>
                        <span class="fw-bold small">{{ $p['rating'] }}</span>
                        <span class="text-muted small">({{ $p['reviews_count'] }} Verified Reviews)</span>
                    </div>

                    <h1 class="fdw-title mb-2">{{ $p['name'] }}</h1>
                    <p class="lead text-muted">{{ $p['tagline'] }}</p>

                    <div class="d-flex align-items-baseline my-4">
                        <span class="fdw-strike">${{ number_format($defaultVariant['price_regular'], 2) }}</span>
                        <span class="fdw-price-main" id="dynamicPrice">${{ number_format($defaultVariant['price_sale'], 2) }}</span>
                    </div>

                    <div class="mb-4">
                        <p class="small text-danger fw-bold"><i class="bi bi-lightning-fill"></i> LOW STOCK: Only {{ $p['stock_left'] }} sets available</p>
                    </div>

                    <div class="mb-4">
                        <p class="fw-bold text-uppercase small mb-3">Select Your {{ $p['variant_label'] }}</p>
                        <div class="d-flex flex-column gap-2">
                            @foreach($p['variants'] as $v)
                            <div class="fdw-variant-pill {{ $v['id'] == 'pro' ? 'active' : '' }}" 
                                 onclick="updateVariant(this, '{{ $v['price_sale'] }}', '{{ $v['price_regular'] }}')"
                                 data-id="{{ $v['id'] }}">
                                @if(isset($v['badge'])) <span class="badge">{{ $v['badge'] }}</span> @endif
                                <div class="d-flex justify-content-between align-items-center">
                                    <div>
                                        <div class="fw-bold">{{ $v['name'] }}</div>
                                        <div class="small text-muted">{{ $v['note'] }}</div>
                                    </div>
                                    <div class="fw-bold">${{ number_format($v['price_sale'], 0) }}</div>
                                </div>
                            </div>
                            @endforeach
                        </div>
                    </div>

                    <div class="d-grid gap-2 mb-4">
                        <a class="btn btn-buy-now text-uppercase" href="{{ url('/general-checkout/booty-bands') }}">Buy Now! <i class="bi bi-arrow-right ms-2"></i></a>
                        <button class="btn btn-cart text-uppercase d-none">Add to Cart</button>
                    </div>

                    <div class="border-top pt-4">
                        <div class="row g-3 text-center">
                            <div class="col-4">
                                <i class="bi bi-box-seam d-block mb-1"></i>
                                <span class="d-block small fw-bold">Fast Shipping</span>
                            </div>
                            <div class="col-4">
                                <i class="bi bi-arrow-counterclockwise d-block mb-1"></i>
                                <span class="d-block small fw-bold">30 Day Return</span>
                            </div>
                            <div class="col-4">
                                <i class="bi bi-shield-lock d-block mb-1"></i>
                                <span class="d-block small fw-bold">Secure Pay</span>
                            </div>
                        </div>
                        <div class="mt-4 d-flex justify-content-center gap-3 opacity-50 grayscale">
                            <i class="fab fa-cc-visa fs-3"></i>
                            <i class="fab fa-cc-mastercard fs-3"></i>
                            <i class="fab fa-cc-stripe fs-3"></i>
                            <i class="fab fa-apple-pay fs-3"></i>
                        </div>
                    </div>

                    <div class="accordion accordion-flush mt-5" id="productInfo">
                        <div class="accordion-item">
                            <h2 class="accordion-header">
                                <button class="accordion-button fw-bold text-uppercase px-0" type="button" data-bs-toggle="collapse" data-bs-target="#collapse1">
                                    Product Deep Dive
                                </button>
                            </h2>
                            <div id="collapse1" class="accordion-collapse collapse show">
                                <div class="accordion-body px-0 text-muted">
                                    Most bands fail because they move. This set stays locked so your glutes stay activated. Perfect for home or travel.
                                </div>
                            </div>
                        </div>
                        <div class="accordion-item">
                            <h2 class="accordion-header">
                                <button class="accordion-button collapsed fw-bold text-uppercase px-0" type="button" data-bs-toggle="collapse" data-bs-target="#collapse2">
                                    Technical Specs
                                </button>
                            </h2>
                            <div id="collapse2" class="accordion-collapse collapse">
                                <div class="accordion-body px-0">
                                    <ul class="list-unstyled small">
                                        @foreach($p['specs'] as $s)
                                        <li class="mb-2"><strong>{{ $s['label'] }}:</strong> {{ $s['value'] }}</li>
                                        @endforeach
                                    </ul>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <div class="mt-5 pt-5 text-center" data-fade>
            <h2 class="fdw-title fs-1">HOW WE STACK UP</h2>
            <div class="row justify-content-center">
                <div class="col-lg-10">
                    <table class="fdw-comp-table">
                        <thead>
                            <tr>
                                <th>Feature</th>
                                <th>Fit.Done.Well.</th>
                                <th>Generic Brands</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach($p['comparison'] as $c)
                            <tr>
                                <td class="fw-bold">{{ $c['feature'] }}</td>
                                <td class="check-fdw"><i class="bi bi-check-circle-fill me-2"></i>{{ $c['fdw'] }}</td>
                                <td class="text-muted">{{ $c['generic'] }}</td>
                            </tr>
                            @endforeach
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>
</div>




@php
    $p = [
        'key' => 'booty-bands-pro-set',
        'brand' => 'Fit.Done.Well.',
        'name' => 'Booty Bands Pro Set',
        'tagline' => 'Build a stronger booty with better form, better tension, and zero excuses.',
        'currency' => 'USD',
        'rating' => 4.9,
        'reviews_count' => 312,
        'stock_left' => 18,
        'sku' => 'FDW-BBP-SET',
        'price_regular' => 79.00,
        'price_sale' => 15.00,
        'free_shipping_from' => 75.00,
        'delivery_days_min' => 3,
        'delivery_days_max' => 6,
        'images' => [
            asset('t1/img/shop/booty-bands/booty-bands-01.jpg'),
            asset('t1/img/shop/booty-bands/booty-bands-02.jpg'),
            asset('t1/img/shop/booty-bands/booty-bands-03.jpg'),
            asset('t1/img/shop/booty-bands/booty-bands-04.jpg'),
        ],
        'variant_label' => 'Set',
        'variants' => [

            [
                'id' => 'pro',
                'name' => 'Pro Set',
                'note' => '3 bands, progressive tension, best value',
                'price_sale' => 15.00,
                'price_regular' => 79.00,
                'badge' => 'Most popular',
            ],

        ],
        'highlights' => [
            ['icon' => 'bi-lightning-charge', 'title' => 'Better glute activation', 'text' => 'Target glutes and hips with stable tension that keeps your knees tracking clean.'],
            ['icon' => 'bi-shield-check', 'title' => 'No roll, no pinch', 'text' => 'Wide fabric blend grips gently, stays flat, and feels premium on skin.'],
            ['icon' => 'bi-award', 'title' => 'Gym grade durability', 'text' => 'Reinforced seams built for heavy sessions, week after week.'],
            ['icon' => 'bi-phone', 'title' => 'Guided workouts included', 'text' => 'Scan the card for quick routines that fit any schedule.'],
        ],
        'specs' => [
            ['label' => 'Band count', 'value' => '3 bands in Pro Set'],
            ['label' => 'Tension levels', 'value' => 'Light, Medium, Heavy'],
            ['label' => 'Width', 'value' => '3.2 inches'],
            ['label' => 'Circumference', 'value' => '35 inches'],
            ['label' => 'Material', 'value' => 'Premium fabric blend with latex inner grip'],
            ['label' => 'Use', 'value' => 'Glutes, hips, legs, warmups, activation, finishers'],
            ['label' => 'Warranty', 'value' => '30 day money back guarantee'],
        ],
        'comparison' => [
            ['feature' => 'No roll design', 'fdw' => 'Yes', 'generic' => 'Often rolls'],
            ['feature' => 'Stable knee tracking', 'fdw' => 'Yes', 'generic' => 'Inconsistent'],
            ['feature' => 'Comfort on skin', 'fdw' => 'Soft fabric', 'generic' => 'Can pinch'],
            ['feature' => 'Durability', 'fdw' => 'Reinforced seams', 'generic' => 'Frays faster'],
            ['feature' => 'Guided routines', 'fdw' => 'Included', 'generic' => 'Not included'],
        ],
        'faq' => [
            ['q' => 'Are these good for beginners?', 'a' => 'Yes. Start with light tension, focus on control, and progress week by week. The sets are built for a clean learning curve.'],
            ['q' => 'Do they work for home workouts?', 'a' => 'Absolutely. These are perfect for at home glute sessions, warmups, and quick finishers with minimal space.'],
            ['q' => 'Will they fit me?', 'a' => 'They fit most body types. If you are between sizes, we recommend Pro Set for the widest range of progress.'],
            ['q' => 'How do I wash them?', 'a' => 'Hand wash with mild soap, air dry flat. Avoid machine heat to preserve elasticity.'],
            ['q' => 'What if I do not like them?', 'a' => 'You are covered by our 30 day money back guarantee. Simple and no drama.'],
        ],
    ];

    $defaultVariant = collect($p['variants'])->firstWhere('id', 'pro') ?? $p['variants'][0];
@endphp

<style>
    .fdw-product-wrap { background: #fff; }
    .fdw-breadcrumb { font-size: 14px; }
    .fdw-pill { display:inline-flex; align-items:center; gap:8px; padding:8px 12px; border-radius:999px; background:#F4F5F8; color:#222429; font-weight:600; }
    .fdw-price { font-size: 34px; font-weight: 800; letter-spacing: .2px; color:#222429; line-height:1.1; }
    .fdw-price small { font-size: 14px; font-weight:700; color:#6c757d; }
    .fdw-strike { text-decoration: line-through; opacity:.6; font-weight:700; margin-right:10px; }
    .fdw-tagline { font-size: 16px; color:#6c757d; }
    .fdw-rating { display:flex; align-items:center; gap:10px; }
    .fdw-stars { color: #FCD804; }
    .fdw-gallery { border:1px solid rgba(34,36,41,.12); border-radius:16px; overflow:hidden; background:#fff; }
    .fdw-main-img { position:relative; background:#fff; }
    .fdw-main-img img { width:100%; height:auto; display:block; }
    .fdw-zoom-hint { position:absolute; right:12px; bottom:12px; background: rgba(34,36,41,.86); color:#fff; padding:8px 10px; border-radius:12px; font-size:12px; display:flex; gap:8px; align-items:center; }
    .fdw-thumbs { display:flex; gap:10px; padding:12px; overflow:auto; border-top:1px solid rgba(34,36,41,.08); }
    .fdw-thumb { width:72px; height:72px; border-radius:12px; border:2px solid transparent; overflow:hidden; flex:0 0 auto; cursor:pointer; background:#F4F5F8; }
    .fdw-thumb img { width:100%; height:100%; object-fit:cover; display:block; }
    .fdw-thumb.active { border-color:#FCD804; }
    .fdw-card { border:1px solid rgba(34,36,41,.10); border-radius:16px; padding:18px; background:#fff; }
    .fdw-cta { display:flex; gap:12px; }
    .fdw-btn-primary { background:#FCD804; border:0; color:#000; font-weight:900; letter-spacing: .8px; text-transform: uppercase; }
    .fdw-btn-primary:hover { filter: brightness(.95); transform: translateY(-1px); }
    .fdw-btn-secondary { background:#222429; border:0; color:#fff; font-weight:900; letter-spacing: .8px; text-transform: uppercase; }
    .fdw-btn-secondary:hover { filter: brightness(1.08); transform: translateY(-1px); }
    .fdw-micro { font-size: 13px; color:#6c757d; }
    .fdw-trust { display:flex; flex-wrap:wrap; gap:10px; margin-top:12px; }
    .fdw-payments { display:flex; gap:10px; flex-wrap:wrap; align-items:center; opacity:.85; }
    .fdw-payments i { font-size: 22px; }
    .fdw-badges { display:grid; grid-template-columns: repeat(2, minmax(0,1fr)); gap:10px; }
    .fdw-badges .fdw-pill { justify-content:center; }
    .fdw-variant { border:1px solid rgba(34,36,41,.12); border-radius:14px; padding:12px; cursor:pointer; transition: .2s; }
    .fdw-variant:hover { border-color: rgba(252,216,4,.8); box-shadow: 0 10px 24px rgba(34,36,41,.10); }
    .fdw-variant.active { border-color:#FCD804; box-shadow: 0 10px 24px rgba(34,36,41,.12); }
    .fdw-variant .badge { background:#222429; }
    .fdw-accordion .accordion-item { border:0; border-bottom:1px solid rgba(34,36,41,.10); border-radius:0; }
    .fdw-accordion .accordion-button { padding:16px 0; font-weight:800; }
    .fdw-accordion .accordion-button:not(.collapsed) { background: transparent; color:#222429; box-shadow:none; }
    .fdw-accordion .accordion-body { padding: 0 0 16px 0; color:#6c757d; }
    .fdw-section-title { font-weight:900; letter-spacing:.6px; text-transform:uppercase; }
    .fdw-compare td, .fdw-compare th { padding:14px; vertical-align: middle; }
    .fdw-compare thead th { background:#F4F5F8; }
    .fdw-compare .fdw-yes { font-weight:900; color:#222429; }
    .fdw-compare .fdw-no { color:#6c757d; }
    .fdw-review-card { border:1px solid rgba(34,36,41,.10); border-radius:16px; padding:16px; height:100%; }
    .fdw-verified { font-size:12px; font-weight:800; color:#222429; background:#F4F5F8; border-radius:999px; padding:6px 10px; display:inline-flex; align-items:center; gap:8px; }
    .fdw-ugc { display:grid; grid-template-columns: repeat(4, minmax(0,1fr)); gap:10px; }
    .fdw-ugc img { width:100%; height:140px; object-fit:cover; border-radius:14px; border:1px solid rgba(34,36,41,.10); }
    .fdw-sticky { position: sticky; top: 16px; }
    .fdw-stickybar { position: fixed; left:0; right:0; bottom:0; z-index: 1050; background:#fff; border-top:1px solid rgba(34,36,41,.12); padding:10px 12px; display:none; }
    .fdw-stickybar .fdw-sticky-inner { display:flex; gap:12px; align-items:center; justify-content:space-between; }
    .fdw-stickybar .fdw-mini-title { font-weight:900; font-size:14px; margin:0; }
    .fdw-stickybar .fdw-mini-price { font-weight:900; font-size:16px; margin:0; }
    .fdw-stickybar .btn { padding:12px 14px; font-weight:900; }
    .fdw-chat { position: fixed; right: 16px; bottom: 90px; z-index: 1050; }
    .fdw-chat .btn { border-radius: 999px; box-shadow: 0 12px 28px rgba(34,36,41,.20); }
    .fdw-fadein { opacity:0; transform: translateY(8px); transition: .5s; }
    .fdw-fadein.show { opacity:1; transform: translateY(0); }

    @media (max-width: 991px) {
        .fdw-sticky { position: static; top:auto; }
        .fdw-ugc { grid-template-columns: repeat(2, minmax(0,1fr)); }
        .fdw-stickybar { display:block; }
    }
</style>

<div class="fdw-product-wrap">
    <div class="container py-4 py-lg-5">



        <div class="row g-4 g-lg-5">

            <div class="col-lg-7">
                <div class="fdw-gallery fdw-fadein d-none" data-fade>
                    <div class="fdw-main-img">
                        <img id="fdwMainImg"
                             src="{{ $p['images'][0] }}"
                             alt="Fit.Done.Well. {{ $p['name'] }} main image"
                             loading="eager"
                             decoding="async">
                        <div class="fdw-zoom-hint" aria-hidden="true">
                            <i class="bi bi-zoom-in"></i>
                            <span>Hover to zoom</span>
                        </div>
                    </div>
                    <div class="fdw-thumbs" role="list" aria-label="Product image gallery thumbnails">
                        @foreach($p['images'] as $i => $img)
                            <button type="button"
                                    class="fdw-thumb {{ $i === 0 ? 'active' : '' }}"
                                    data-img="{{ $img }}"
                                    aria-label="View image {{ $i + 1 }}">
                                <img src="{{ $img }}"
                                     alt="Fit.Done.Well. {{ $p['name'] }} thumbnail {{ $i + 1 }}"
                                     loading="lazy"
                                     decoding="async">
                            </button>
                        @endforeach
                    </div>
                </div>

                <div class="row g-3 mt-4">
                    @foreach($p['highlights'] as $h)
                        <div class="col-md-6">
                            <div class="fdw-card h-100 fdw-fadein" data-fade>
                                <div class="d-flex gap-3">
                                    <div class="fdw-pill" style="background:#222429; color:#fff;">
                                        <i class="bi {{ $h['icon'] }}"></i>
                                    </div>
                                    <div>
                                        <div class="fw-bold" style="font-size:16px;">{{ $h['title'] }}</div>
                                        <div class="fdw-micro">{{ $h['text'] }}</div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    @endforeach
                </div>

                <div class="mt-5 fdw-fadein" data-fade>
                    <div class="d-flex align-items-end justify-content-between flex-wrap gap-2 mb-3">
                        <h2 class="fdw-section-title mb-0">What makes it premium</h2>
                        <span class="fdw-pill"><i class="bi bi-lock"></i> Secure checkout</span>
                    </div>

                    <div class="fdw-card">
                        <p class="mb-3" style="color:#6c757d;">
                            Most bands fail for one reason: they move when you need them most. This set was designed to stay put, keep tension consistent, and make your reps feel cleaner. That means better glute activation, stronger hips, and better results with less guesswork.
                        </p>
                        <ul class="mb-0" style="color:#6c757d;">
                            <li>Wide fabric design helps stop rolling and pinching</li>
                            <li>Progressive tension makes it easy to scale workouts</li>
                            <li>Perfect for warmups, glute finishers, and travel sessions</li>
                            <li>Includes quick routines you can follow in minutes</li>
                        </ul>
                    </div>
                </div>

            </div>

            <div class="col-lg-5">
                <div class="fdw-sticky">
                    <div class="fdw-card fdw-fadein" data-fade>

                        <div class="d-flex align-items-center justify-content-between mb-2">
                            <span class="fdw-pill">
                                <i class="bi bi-check2-circle"></i>
                                In stock
                            </span>

                            <span class="fdw-pill" style="background: rgba(252,216,4,.22);">
                                <i class="bi bi-exclamation-triangle"></i>
                                Only <span id="fdwStockLeft">{{ $p['stock_left'] }}</span> left
                            </span>
                        </div>

                        <h1 class="text-uppercase mb-2" style="font-weight:900; letter-spacing:.6px;">
                            {{ $p['name'] }}
                        </h1>

                        <div class="fdw-tagline mb-3">{{ $p['tagline'] }}</div>

                        <div class="fdw-rating mb-3" aria-label="Product rating">
                            <div class="fdw-stars" aria-hidden="true">
                                @for($s = 1; $s <= 5; $s++)
                                    <i class="bi bi-star-fill"></i>
                                @endfor
                            </div>
                            <div class="fw-bold">{{ number_format($p['rating'], 1) }}</div>
                            <div class="text-muted">({{ number_format($p['reviews_count']) }} reviews)</div>
                        </div>

                        <div class="mb-3">
                            <div class="fdw-price">
                                <span class="fdw-strike" id="fdwPriceRegular">${{ number_format($defaultVariant['price_regular'], 2) }}</span>
                                <span id="fdwPriceSale">${{ number_format($defaultVariant['price_sale'], 2) }}</span>
                                <small class="d-block mt-1">
                                    Free shipping from ${{ number_format($p['free_shipping_from'], 2) }}
                                    <span class="mx-2">|</span>
                                    Delivery estimate <span id="fdwDelivery">{{ $p['delivery_days_min'] }} to {{ $p['delivery_days_max'] }} business days</span>
                                </small>
                            </div>
                        </div>

                        <div class="mb-3">
                            <div class="fw-bold mb-2">{{ $p['variant_label'] }}</div>
                            <div class="row g-2" id="fdwVariants" role="radiogroup" aria-label="Choose {{ $p['variant_label'] }}">
                                @foreach($p['variants'] as $v)
                                    @php $active = $v['id'] === $defaultVariant['id']; @endphp
                                    <div class="col-12">
                                        <button type="button"
                                                class="w-100 text-start fdw-variant {{ $active ? 'active' : '' }}"
                                                data-variant="{{ $v['id'] }}"
                                                data-price-sale="{{ $v['price_sale'] }}"
                                                data-price-regular="{{ $v['price_regular'] }}"
                                                aria-pressed="{{ $active ? 'true' : 'false' }}">
                                            <div class="d-flex align-items-center justify-content-between">
                                                <div>
                                                    <div class="fw-bold d-flex align-items-center gap-2">
                                                        <span>{{ $v['name'] }}</span>
                                                        <span class="badge">{{ $v['badge'] }}</span>
                                                    </div>
                                                    <div class="fdw-micro">{{ $v['note'] }}</div>
                                                </div>
                                                <div class="fw-bold">${{ number_format($v['price_sale'], 2) }}</div>
                                            </div>
                                        </button>
                                    </div>
                                @endforeach
                            </div>
                        </div>

                        <form method="POST" action="{{ url('/checkout/pay') }}" id="fdwBuyForm" class="mt-3">
                            @csrf

                            <input type="hidden" name="product" value="{{ $p['key'] }}">
                            <input type="hidden" name="variant" id="fdwVariantInput" value="{{ $defaultVariant['id'] }}">
                            <input type="hidden" name="amount" id="fdwAmountInput" value="{{ number_format($defaultVariant['price_sale'], 2, '.', '') }}">
                            <input type="hidden" name="currency" value="{{ $p['currency'] }}">

                            <div class="row g-2 align-items-end mb-3">
                                <div class="col-4">
                                    <label class="form-label fw-bold" for="fdwQty">Qty</label>
                                    <input type="number"
                                           min="1"
                                           value="1"
                                           class="form-control"
                                           id="fdwQty"
                                           name="quantity"
                                           aria-label="Quantity">
                                </div>
                                <div class="col-8">
                                    <label class="form-label fw-bold" for="fdwEmail">Email</label>
                                    <input type="email"
                                           class="form-control"
                                           id="fdwEmail"
                                           name="email"
                                           placeholder="you@example.com"
                                           aria-label="Email for receipt">
                                </div>
                            </div>

                            <div class="fdw-cta">
                                <button type="submit" name="intent" value="add_to_cart" class="btn btn-lg w-50 fdw-btn-secondary d-none">
                                    Add to Cart
                                </button>
                                <a type="submit" name="intent" value="buy_now" class="btn btn-lg w-50 fdw-btn-primary" href="{{ url('/general-checkout/booty-bands') }}">
                                    Buy Now
                                </a>
                            </div>

                            <div class="fdw-trust">
                                <span class="fdw-pill"><i class="bi bi-shield-lock"></i> Secure payments</span>
                                <span class="fdw-pill"><i class="bi bi-arrow-repeat"></i> 30 day money back</span>
                                <span class="fdw-pill"><i class="bi bi-truck"></i> Fast shipping</span>
                                <span class="fdw-pill"><i class="bi bi-patch-check"></i> Premium quality</span>
                            </div>

                            <div class="mt-3">
                                <div class="fw-bold mb-2">Payment methods</div>
                                <div class="fdw-payments" aria-label="Supported payment methods">
                                    <i class="fab fa-cc-visa" aria-hidden="true"></i>
                                    <i class="fab fa-cc-mastercard" aria-hidden="true"></i>
                                    <i class="fab fa-cc-amex" aria-hidden="true"></i>
                                    <i class="fab fa-cc-paypal" aria-hidden="true"></i>
                                    <i class="fab fa-apple-pay" aria-hidden="true"></i>
                                    <i class="fab fa-google-pay" aria-hidden="true"></i>
                                    <span class="fdw-micro">More at checkout</span>
                                </div>
                            </div>

                            <div class="mt-3 fdw-badges">
                                <div class="fdw-pill"><i class="bi bi-calendar-check"></i> Ships in 24 to 48 hours</div>
                                <div class="fdw-pill"><i class="bi bi-box2-heart"></i> Giftable premium packaging</div>
                            </div>

                            <div class="mt-3 fdw-micro">
                                By purchasing, you agree to our store policies. We never store your card details.
                            </div>
                        </form>

                    </div>

                    <div class="fdw-card mt-3 fdw-fadein" data-fade>
                        <div class="d-flex align-items-start justify-content-between flex-wrap gap-2">
                            <div>
                                <div class="fw-bold mb-1">Bundle and save</div>
                                <div class="fdw-micro">Frequently bought together for faster results.</div>
                            </div>
                            <span class="fdw-pill"><i class="bi bi-piggy-bank"></i> Smart add ons</span>
                        </div>

                        <div class="mt-3">
                            <div class="d-flex align-items-center justify-content-between">
                                <div class="fw-bold">Glute Activation Mini Guide</div>
                                <div class="fw-bold">$9.00</div>
                            </div>
                            <div class="fdw-micro mb-2">Short routines, zero fluff, perfect warmups.</div>

                            <div class="d-flex align-items-center justify-content-between">
                                <div class="fw-bold">Core Burner Circuit</div>
                                <div class="fw-bold">$12.00</div>
                            </div>
                            <div class="fdw-micro mb-3">Add a stronger core to support stronger hips.</div>

                            <button type="button" class="btn w-100 fdw-btn-secondary" id="fdwBundleBtn">
                                Add bundle
                            </button>
                            <div class="fdw-micro mt-2">
                                Bundle will be added as separate items at checkout if available.
                            </div>
                        </div>
                    </div>

                </div>
            </div>

        </div>

        <div class="row g-4 g-lg-5 mt-4">

            <div class="col-lg-7">
                <div class="fdw-fadein" data-fade>
                    <h2 class="fdw-section-title mb-3">Product details</h2>

                    <div class="accordion fdw-accordion" id="fdwAcc">
                        <div class="accordion-item">
                            <h3 class="accordion-header" id="fdwAcc1H">
                                <button class="accordion-button" type="button" data-bs-toggle="collapse" data-bs-target="#fdwAcc1" aria-expanded="true" aria-controls="fdwAcc1">
                                    Description
                                </button>
                            </h3>
                            <div id="fdwAcc1" class="accordion-collapse collapse show" aria-labelledby="fdwAcc1H" data-bs-parent="#fdwAcc">
                                <div class="accordion-body">
                                    <p class="mb-2">
                                        Booty Bands Pro Set is built for one job: make lower body training feel locked in. No rolling, no distracting pinches, no inconsistent tension. Just clean resistance that helps you focus on the muscle, the movement, and the result.
                                    </p>
                                    <p class="mb-0">
                                        Whether you are training at home, in the gym, or on the road, this set adds instant intensity to squats, hip thrusts, kickbacks, lateral walks, and glute bridges.
                                    </p>
                                </div>
                            </div>
                        </div>

                        <div class="accordion-item">
                            <h3 class="accordion-header" id="fdwAcc2H">
                                <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#fdwAcc2" aria-expanded="false" aria-controls="fdwAcc2">
                                    Specifications
                                </button>
                            </h3>
                            <div id="fdwAcc2" class="accordion-collapse collapse" aria-labelledby="fdwAcc2H" data-bs-parent="#fdwAcc">
                                <div class="accordion-body">
                                    <div class="table-responsive">
                                        <table class="table mb-0">
                                            <tbody>
                                            @foreach($p['specs'] as $sp)
                                                <tr>
                                                    <td class="fw-bold" style="width:40%;">{{ $sp['label'] }}</td>
                                                    <td style="color:#6c757d;">{{ $sp['value'] }}</td>
                                                </tr>
                                            @endforeach
                                            </tbody>
                                        </table>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <div class="accordion-item">
                            <h3 class="accordion-header" id="fdwAcc3H">
                                <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#fdwAcc3" aria-expanded="false" aria-controls="fdwAcc3">
                                    Materials
                                </button>
                            </h3>
                            <div id="fdwAcc3" class="accordion-collapse collapse" aria-labelledby="fdwAcc3H" data-bs-parent="#fdwAcc">
                                <div class="accordion-body">
                                    Premium fabric blend designed for comfort, with an inner grip layer to keep tension stable. Reinforced seams for long term durability.
                                </div>
                            </div>
                        </div>

                        <div class="accordion-item">
                            <h3 class="accordion-header" id="fdwAcc4H">
                                <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#fdwAcc4" aria-expanded="false" aria-controls="fdwAcc4">
                                    Size guide
                                </button>
                            </h3>
                            <div id="fdwAcc4" class="accordion-collapse collapse" aria-labelledby="fdwAcc4H" data-bs-parent="#fdwAcc">
                                <div class="accordion-body">
                                    One size fits most. If you are new to bands, start with light tension and prioritize control. If you want maximum challenge, choose Elite Set.
                                </div>
                            </div>
                        </div>

                        <div class="accordion-item">
                            <h3 class="accordion-header" id="fdwAcc5H">
                                <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#fdwAcc5" aria-expanded="false" aria-controls="fdwAcc5">
                                    Care instructions
                                </button>
                            </h3>
                            <div id="fdwAcc5" class="accordion-collapse collapse" aria-labelledby="fdwAcc5H" data-bs-parent="#fdwAcc">
                                <div class="accordion-body">
                                    Hand wash with mild soap. Air dry flat. Avoid machine heat and harsh chemicals to preserve elasticity.
                                </div>
                            </div>
                        </div>
                    </div>

                </div>

                <div class="mt-5 fdw-fadein" data-fade>
                    <h2 class="fdw-section-title mb-3">Comparison</h2>
                    <div class="table-responsive">
                        <table class="table fdw-compare">
                            <thead>
                                <tr>
                                    <th>Feature</th>
                                    <th>{{ $p['brand'] }}</th>
                                    <th>Generic bands</th>
                                </tr>
                            </thead>
                            <tbody>
                            @foreach($p['comparison'] as $c)
                                <tr>
                                    <td class="fw-bold">{{ $c['feature'] }}</td>
                                    <td class="fdw-yes">{{ $c['fdw'] }}</td>
                                    <td class="fdw-no">{{ $c['generic'] }}</td>
                                </tr>
                            @endforeach
                            </tbody>
                        </table>
                    </div>
                </div>

            </div>

            <div class="col-lg-5">
                <div class="fdw-card fdw-fadein" data-fade>
                    <h2 class="fdw-section-title mb-3">Reviews</h2>

                    <div class="d-flex align-items-center justify-content-between flex-wrap gap-2 mb-3">
                        <div class="d-flex align-items-center gap-2">
                            <div class="fdw-stars" aria-hidden="true">
                                <i class="bi bi-star-fill"></i><i class="bi bi-star-fill"></i><i class="bi bi-star-fill"></i><i class="bi bi-star-fill"></i><i class="bi bi-star-fill"></i>
                            </div>
                            <div class="fw-bold">{{ number_format($p['rating'], 1) }}</div>
                            <div class="text-muted">({{ number_format($p['reviews_count']) }} reviews)</div>
                        </div>
                        <span class="fdw-verified"><i class="bi bi-patch-check"></i> Verified purchases</span>
                    </div>

                    @php
                        $breakdown = [
                            ['stars' => 5, 'pct' => 86],
                            ['stars' => 4, 'pct' => 11],
                            ['stars' => 3, 'pct' => 2],
                            ['stars' => 2, 'pct' => 1],
                            ['stars' => 1, 'pct' => 0],
                        ];
                    @endphp

                    @foreach($breakdown as $b)
                        <div class="d-flex align-items-center gap-2 mb-2">
                            <div style="width:44px;" class="fw-bold">{{ $b['stars'] }}★</div>
                            <div class="progress flex-grow-1" style="height:10px; background:#F4F5F8;">
                                <div class="progress-bar" role="progressbar" style="width: {{ $b['pct'] }}%; background:#222429;" aria-valuenow="{{ $b['pct'] }}" aria-valuemin="0" aria-valuemax="100"></div>
                            </div>
                            <div style="width:44px;" class="text-muted text-end">{{ $b['pct'] }}%</div>
                        </div>
                    @endforeach

                    <div class="row g-3 mt-3">
                        <div class="col-md-6">
                            <div class="fdw-review-card">
                                <div class="d-flex align-items-center justify-content-between mb-2">
                                    <div class="fdw-stars" aria-hidden="true">
                                        <i class="bi bi-star-fill"></i><i class="bi bi-star-fill"></i><i class="bi bi-star-fill"></i><i class="bi bi-star-fill"></i><i class="bi bi-star-fill"></i>
                                    </div>
                                    <span class="fdw-verified"><i class="bi bi-check2"></i> Verified</span>
                                </div>
                                <div class="fw-bold mb-1">Finally bands that stay put</div>
                                <div class="fdw-micro mb-2">Bought Pro Set. Zero rolling. My warmups feel sharper and my hip thrusts feel cleaner.</div>
                                <div class="text-muted" style="font-size:12px;">Maya, Phoenix</div>
                            </div>
                        </div>

                        <div class="col-md-6">
                            <div class="fdw-review-card">
                                <div class="d-flex align-items-center justify-content-between mb-2">
                                    <div class="fdw-stars" aria-hidden="true">
                                        <i class="bi bi-star-fill"></i><i class="bi bi-star-fill"></i><i class="bi bi-star-fill"></i><i class="bi bi-star-fill"></i><i class="bi bi-star-fill"></i>
                                    </div>
                                    <span class="fdw-verified"><i class="bi bi-check2"></i> Verified</span>
                                </div>
                                <div class="fw-bold mb-1">Perfect for travel workouts</div>
                                <div class="fdw-micro mb-2">I throw them in my bag and never skip glutes anymore. Elite is spicy.</div>
                                <div class="text-muted" style="font-size:12px;">Jordan, Medellin</div>
                            </div>
                        </div>
                    </div>

                    <div class="mt-4">
                        <button type="button" class="btn w-100 fdw-btn-secondary" data-bs-toggle="modal" data-bs-target="#fdwReviewModal">
                            Write a review
                        </button>
                        <div class="fdw-micro mt-2">We show verified purchase badges when available.</div>
                    </div>
                </div>

                <div class="fdw-card mt-3 fdw-fadein" data-fade>
                    <h2 class="fdw-section-title mb-3">Customer photos</h2>
                    <div class="fdw-ugc">
                        <img src="{{ asset('booty.webp') }}" alt="Customer photo 1" loading="lazy" decoding="async">
                        <img src="{{ asset('booty3.webp') }}" alt="Customer photo 2" loading="lazy" decoding="async">
                        <img src="{{ asset('booty2.webp') }}" alt="Customer photo 3" loading="lazy" decoding="async">
                        <img src="{{ asset('booty1.webp') }}" alt="Customer photo 4" loading="lazy" decoding="async">
                    </div>
                    <div class="fdw-micro mt-2">Tag us to get featured.</div>
                </div>

                <div class="fdw-card mt-3 fdw-fadein" data-fade>
                    <h2 class="fdw-section-title mb-3">FAQ</h2>
                    <div class="accordion fdw-accordion" id="fdwFaq">
                        @foreach($p['faq'] as $i => $f)
                            <div class="accordion-item">
                                <h3 class="accordion-header" id="fdwFaqH{{ $i }}">
                                    <button class="accordion-button {{ $i === 0 ? '' : 'collapsed' }}" type="button"
                                            data-bs-toggle="collapse"
                                            data-bs-target="#fdwFaqC{{ $i }}"
                                            aria-expanded="{{ $i === 0 ? 'true' : 'false' }}"
                                            aria-controls="fdwFaqC{{ $i }}">
                                        {{ $f['q'] }}
                                    </button>
                                </h3>
                                <div id="fdwFaqC{{ $i }}" class="accordion-collapse collapse {{ $i === 0 ? 'show' : '' }}"
                                     aria-labelledby="fdwFaqH{{ $i }}" data-bs-parent="#fdwFaq">
                                    <div class="accordion-body">{{ $f['a'] }}</div>
                                </div>
                            </div>
                        @endforeach
                    </div>
                </div>

            </div>

        </div>

    </div>
</div>

<div class="fdw-stickybar" id="fdwStickyBar" aria-label="Sticky purchase bar">
    <div class="fdw-sticky-inner">
        <div>
            <p class="fdw-mini-title">{{ $p['name'] }}</p>
            <p class="fdw-mini-price" id="fdwStickyPrice">${{ number_format($defaultVariant['price_sale'], 2) }}</p>
        </div>
        <button class="btn fdw-btn-primary" type="button" id="fdwStickyBuy">Buy Now</button>
    </div>
</div>

<div class="fdw-chat" aria-label="Live chat">
    <button type="button" class="btn fdw-btn-secondary" id="fdwChatBtn">
        <i class="bi bi-chat-dots"></i> Chat
    </button>
</div>

<div class="modal fade" id="fdwReviewModal" tabindex="-1" aria-labelledby="fdwReviewModalLabel" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered">
        <div class="modal-content" style="border-radius:16px;">
            <div class="modal-header">
                <h5 class="modal-title fw-bold" id="fdwReviewModalLabel">Write a review</h5>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body">
                <div class="fdw-micro mb-3">
                    If you purchased, include the email used at checkout. We verify when possible.
                </div>
                <div class="mb-2">
                    <label class="form-label fw-bold">Rating</label>
                    <select class="form-select" aria-label="Rating select">
                        <option>5 stars</option>
                        <option>4 stars</option>
                        <option>3 stars</option>
                        <option>2 stars</option>
                        <option>1 star</option>
                    </select>
                </div>
                <div class="mb-2">
                    <label class="form-label fw-bold">Title</label>
                    <input class="form-control" placeholder="Short and honest" aria-label="Review title">
                </div>
                <div class="mb-2">
                    <label class="form-label fw-bold">Review</label>
                    <textarea class="form-control" rows="4" placeholder="What changed for you?" aria-label="Review text"></textarea>
                </div>
                <div class="mb-2">
                    <label class="form-label fw-bold">Email</label>
                    <input class="form-control" placeholder="you@example.com" aria-label="Email">
                </div>
                <button type="button" class="btn w-100 fdw-btn-primary" data-bs-dismiss="modal">
                    Submit
                </button>
                <div class="fdw-micro mt-2">
                    Demo UI only. Wire it to your reviews table when ready.
                </div>
            </div>
        </div>
    </div>
</div>

<script type="application/ld+json">
{!! json_encode([
    '@context' => 'https://schema.org',
    '@type' => 'Product',
    'name' => $p['name'],
    'brand' => ['@type' => 'Brand', 'name' => $p['brand']],
    'sku' => $p['sku'],
    'image' => $p['images'],
    'description' => 'Premium no roll fabric resistance bands set designed for glute activation, hip stability, and lower body training.',
    'offers' => [
        '@type' => 'Offer',
        'priceCurrency' => $p['currency'],
        'price' => number_format($defaultVariant['price_sale'], 2, '.', ''),
        'availability' => 'https://schema.org/InStock',
        'url' => url()->current(),
    ],
    'aggregateRating' => [
        '@type' => 'AggregateRating',
        'ratingValue' => number_format($p['rating'], 1, '.', ''),
        'reviewCount' => (int) $p['reviews_count'],
    ],
], JSON_UNESCAPED_SLASHES | JSON_UNESCAPED_UNICODE) !!}
</script>

<script>
(function () {
    const mainImg = document.getElementById('fdwMainImg');
    const thumbs = document.querySelectorAll('.fdw-thumb');
    const variantsWrap = document.getElementById('fdwVariants');
    const variantInput = document.getElementById('fdwVariantInput');
    const amountInput = document.getElementById('fdwAmountInput');

    const priceRegularEl = document.getElementById('fdwPriceRegular');
    const priceSaleEl = document.getElementById('fdwPriceSale');
    const stickyPriceEl = document.getElementById('fdwStickyPrice');

    const buyForm = document.getElementById('fdwBuyForm');
    const stickyBuy = document.getElementById('fdwStickyBuy');
    const stickyBar = document.getElementById('fdwStickyBar');

    const chatBtn = document.getElementById('fdwChatBtn');
    const bundleBtn = document.getElementById('fdwBundleBtn');

    thumbs.forEach(btn => {
        btn.addEventListener('click', () => {
            thumbs.forEach(b => b.classList.remove('active'));
            btn.classList.add('active');
            const img = btn.getAttribute('data-img');
            if (img) mainImg.src = img;
        });
    });

    const formatMoney = (n) => {
        const num = Number(n || 0);
        return '$' + num.toFixed(2);
    };

    const setVariant = (btn) => {
        const id = btn.getAttribute('data-variant');
        const ps = btn.getAttribute('data-price-sale');
        const pr = btn.getAttribute('data-price-regular');

        document.querySelectorAll('.fdw-variant').forEach(v => {
            v.classList.remove('active');
            v.setAttribute('aria-pressed', 'false');
        });

        btn.classList.add('active');
        btn.setAttribute('aria-pressed', 'true');

        variantInput.value = id || '';
        amountInput.value = (Number(ps || 0)).toFixed(2);

        priceRegularEl.textContent = formatMoney(pr);
        priceSaleEl.textContent = formatMoney(ps);
        stickyPriceEl.textContent = formatMoney(ps);
    };

    document.querySelectorAll('.fdw-variant').forEach(btn => {
        btn.addEventListener('click', () => setVariant(btn));
    });

    const applyZoom = () => {
        const wrap = mainImg.parentElement;
        if (!wrap) return;

        wrap.addEventListener('mousemove', (e) => {
            const rect = wrap.getBoundingClientRect();
            const x = ((e.clientX - rect.left) / rect.width) * 100;
            const y = ((e.clientY - rect.top) / rect.height) * 100;
            mainImg.style.transformOrigin = x + '% ' + y + '%';
            mainImg.style.transform = 'scale(1.6)';
        });

        wrap.addEventListener('mouseleave', () => {
            mainImg.style.transformOrigin = 'center center';
            mainImg.style.transform = 'scale(1)';
        });
    };

    applyZoom();

    const showStickyBar = () => {
        const w = window.innerWidth || 1200;
        if (w > 991) {
            stickyBar.style.display = 'none';
            return;
        }
        stickyBar.style.display = 'block';
    };

    window.addEventListener('resize', showStickyBar);
    showStickyBar();

    stickyBuy.addEventListener('click', () => {
        const buyNow = buyForm.querySelector('button[name="intent"][value="buy_now"]');
        if (buyNow) buyNow.click();
        else buyForm.submit();
    });

    chatBtn.addEventListener('click', () => {
        alert('Chat is coming soon. For now, email us and we will reply fast.');
    });

    bundleBtn.addEventListener('click', () => {
        alert('Bundle added. Wire this to your cart logic or to Stripe line items when ready.');
    });

    const fades = document.querySelectorAll('[data-fade]');
    const io = new IntersectionObserver((entries) => {
        entries.forEach(en => {
            if (en.isIntersecting) en.target.classList.add('show');
        });
    }, { threshold: 0.12 });

    fades.forEach(el => io.observe(el));
})();
</script>





<script>
    // Gallery Zoom Logic
    const frame = document.getElementById('zoomFrame');
    const img = document.getElementById('mainView');

    frame.addEventListener('mousemove', (e) => {
        const { left, top, width, height } = frame.getBoundingClientRect();
        const x = ((e.clientX - left) / width) * 100;
        const y = ((e.clientY - top) / height) * 100;
        img.style.transformOrigin = `${x}% ${y}%`;
        img.style.transform = 'scale(1.8)';
    });

    frame.addEventListener('mouseleave', () => {
        img.style.transform = 'scale(1)';
    });

    // Interaction Functions
    function changeView(el, src) {
        document.querySelectorAll('.fdw-thumb').forEach(t => t.classList.remove('active'));
        el.classList.add('active');
        img.src = src;
    }

    function updateVariant(el, sale, regular) {
        document.querySelectorAll('.fdw-variant-pill').forEach(v => v.classList.remove('active'));
        el.classList.add('active');
        document.getElementById('dynamicPrice').innerText = `$${parseFloat(sale).toFixed(2)}`;
    }

    // Scroll Animations (Intersection Observer)
    const observer = new IntersectionObserver((entries) => {
        entries.forEach(entry => {
            if (entry.isIntersecting) entry.target.classList.add('show');
        });
    }, { threshold: 0.1 });

    document.querySelectorAll('[data-fade]').forEach(el => observer.observe(el));
</script>

@endsection