@extends('index1.app')

@section('title', 'Elite Core Sliders Pro Pair | Fit.Done.Well.')

@section('index1.content')

@php
    $p = [
        'key' => 'core-sliders-pro',
        'brand' => 'Fit.Done.Well.',
        'name' => 'Elite Core Sliders',
        'tagline' => 'Engage your core, protect your joints, and transform your floor into a total body gym.',
        'currency' => 'USD',
        'rating' => 4.9,
        'reviews_count' => 428,
        'stock_left' => 24,
        'sku' => 'FDW-SLIDE-01',
        'free_shipping_from' => 50.00,
        'delivery_days_min' => 3,
        'delivery_days_max' => 5,
        'images' => [
            asset('slider1.jpg'), // Asegúrate de tener estas imágenes
            asset('slider2.jpg'),
            asset('slider3.jpg'),
            asset('slider4.jpg'),
            asset('slider5.jpg'),

        ],
        'variant_label' => 'Color',
        'variants' => [
            [
                'id' => 'black-onyx',
                'name' => 'Onyx Black',
                'note' => 'Pair (2 Discs), Dual-sided',
                'price_sale' => 8.00,
                'price_regular' => 29.00,
                'badge' => 'Best Seller',
            ],
            [
                'id' => 'pink-neon',
                'name' => 'Neon Pink',
                'note' => 'Pair (2 Discs), Dual-sided',
                'price_sale' => 8.00,
                'price_regular' => 29.00,
                'badge' => 'Limited Edition',
            ],
        ],
        'highlights' => [
            ['icon' => 'bi-layers', 'title' => 'Dual-Sided Tech', 'text' => 'Smooth side for carpets, fabric foam side for hard floors. Works everywhere.'],
            ['icon' => 'bi-activity', 'title' => 'Zero Impact', 'text' => 'Gliding movements protect your joints while keeping muscles under constant tension.'],
            ['icon' => 'bi-bullseye', 'title' => 'Deep Core Burn', 'text' => 'Instability forces your entire core to engage to maintain balance during every rep.'],
            ['icon' => 'bi-briefcase', 'title' => 'Travel Ready', 'text' => 'Lightweight and compact. Your gym fits in your carry-on bag.'],
        ],
        'specs' => [
            ['label' => 'Included', 'value' => 'Pair of 2 Sliders'],
            ['label' => 'Diameter', 'value' => '7 inches (17.8 cm)'],
            ['label' => 'Material', 'value' => 'ABS Polymer (Side A) / High Density EVA Foam (Side B)'],
            ['label' => 'Surface Use', 'value' => 'Hardwood, Tile, Laminate, Carpet, Rugs'],
            ['label' => 'Weight', 'value' => 'Ultra-light (0.4 lbs per pair)'],
            ['label' => 'Warranty', 'value' => 'Lifetime durability guarantee'],
        ],
        'comparison' => [
            ['feature' => 'Dual-Sided Surface', 'fdw' => 'Yes (2-in-1)', 'generic' => 'Often single side'],
            ['feature' => 'Floor Protection', 'fdw' => 'High Density Foam', 'generic' => 'Thin foam scratches'],
            ['feature' => 'Glide Smoothness', 'fdw' => 'Polished ABS', 'generic' => 'Sticks / Jerky'],
            ['feature' => 'Durability', 'fdw' => 'Shatter-proof', 'generic' => 'Cracks under weight'],
            ['feature' => 'Core Guide', 'fdw' => 'Included', 'generic' => 'Not included'],
        ],
        'faq' => [
            ['q' => 'Do these work on carpet?', 'a' => 'Yes! Use the smooth plastic side for carpets and rugs. It glides effortlessly.'],
            ['q' => 'Will they scratch my hardwood floors?', 'a' => 'No. Use the soft fabric/foam side on hard surfaces (wood, tile, laminate). It polishes as you slide.'],
            ['q' => 'Are they good for beginners?', 'a' => 'Yes. You control the range of motion. Start with small movements and extend as your core gets stronger.'],
            ['q' => 'What exercises can I do?', 'a' => 'Mountain climbers, knee tucks, lunges, pikes, lateral slides, and arm circles. Endless variety.'],
            ['q' => 'Can I return them?', 'a' => 'Yes, we offer a 30-day money-back guarantee if you are not satisfied.'],
        ],
    ];

    $defaultVariant = collect($p['variants'])->firstWhere('id', 'black-onyx') ?? $p['variants'][0];
@endphp

<style>
    /* === CORE STYLES === */
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

        <nav aria-label="breadcrumb" class="fdw-breadcrumb mb-3">
            <ol class="breadcrumb mb-0">
                <li class="breadcrumb-item"><a href="{{ url('/') }}">Home</a></li>
                <li class="breadcrumb-item"><a href="{{ url('/services') }}">Shop</a></li>
                <li class="breadcrumb-item active" aria-current="page">{{ $p['name'] }}</li>
            </ol>
        </nav>

        <div class="row g-4 g-lg-5">

            <div class="col-lg-7">
                <div class="fdw-gallery fdw-fadein" data-fade>
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
                            Traditional workouts rely on impact. Elite Core Sliders rely on instability. By creating a frictionless surface, you are forced to engage your core, hips, and stabilizers throughout the entire range of motion. It’s smarter training that protects your joints while sculpting your body.
                        </p>
                        <ul class="mb-0" style="color:#6c757d;">
                            <li>Dual-sided design works on any surface (carpet or hardwood)</li>
                            <li>Low-impact movement is perfect for injury recovery or joint health</li>
                            <li>Instant intensity for pikes, mountain climbers, and lunges</li>
                            <li>Includes access to our digital "Slider Shred" routines</li>
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
                                <a type="submit" name="intent" value="buy_now" class="btn btn-lg w-50 fdw-btn-primary" href="{{ url('/general-checkout/sliders') }}">
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
                                <div class="fw-bold">Ab Shredder Digital Guide</div>
                                <div class="fw-bold">$9.00</div>
                            </div>
                            <div class="fdw-micro mb-2">10-minute core routines designed for sliders.</div>

                            <div class="d-flex align-items-center justify-content-between">
                                <div class="fw-bold">High Density Knee Pad</div>
                                <div class="fw-bold">$12.00</div>
                            </div>
                            <div class="fdw-micro mb-3">Protect your knees during sliding lunges.</div>

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
                                        The Elite Core Sliders are your secret weapon for a stronger, more defined core. By destabilizing your contact with the floor, these discs force your abdominal muscles to engage constantly to maintain balance.
                                    </p>
                                    <p class="mb-0">
                                        Use the smooth ABS side on carpets and rugs, or flip them over to the high-density foam side for hardwood, tile, and laminate floors. Perfect for mountain climbers, knee tucks, pikes, and smooth sliding lunges.
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
                                    Dual-mold construction: Impact-resistant ABS polymer for low-friction gliding on carpets, bonded to high-density EVA foam for scratch-free movement on hard surfaces.
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
                                    Standard 7-inch diameter fits hands and feet of all sizes comfortably. Compact and stackable for easy travel.
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
                                    Wipe clean with a damp cloth. Check the foam side regularly for debris to ensure floor protection. Do not submerge in water.
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
                                    <th>Generic Sliders</th>
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
                            ['stars' => 5, 'pct' => 88],
                            ['stars' => 4, 'pct' => 10],
                            ['stars' => 3, 'pct' => 1],
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
                                <div class="fw-bold mb-1">My core is on fire</div>
                                <div class="fdw-micro mb-2">I use these for pikes and mountain climbers. They glide perfectly on my living room rug.</div>
                                <div class="text-muted" style="font-size:12px;">Sarah, Austin</div>
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
                                <div class="fw-bold mb-1">Safe for my wood floors</div>
                                <div class="fdw-micro mb-2">Was worried about scratching, but the foam side is super soft. Great addition to home gym.</div>
                                <div class="text-muted" style="font-size:12px;">Mike, Seattle</div>
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
                        <img src="{{ asset('slider1.jpg') }}" alt="Customer photo 1" loading="lazy" decoding="async">
                        <img src="{{ asset('slider2.jpg') }}" alt="Customer photo 2" loading="lazy" decoding="async">
                        <img src="{{ asset('slider3.jpg') }}" alt="Customer photo 3" loading="lazy" decoding="async">
                        <img src="{{ asset('slider5.jpg') }}" alt="Customer photo 4" loading="lazy" decoding="async">
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
    'description' => $p['tagline'],
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

@endsection