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
@php
    $products = collect(config('products'))
        ->filter(fn($p) => $p['fit'] === 1);
    
    if (!isset($fitProduct)) $fitProduct = null;  
@endphp


<div class="container py-5">

    <div class="row mb-4">
        <div class="col">
            <h1 class="fw-bold yellow" style="color: red; ">CUSTOMIZED PERSONAL FITNESS</h1>
        </div>
    </div>

    <div class="row mb-4">
        <div class="col-md-8">
            <p><strong>STEP 1:</strong> Select your consultation Type and/or Training Program</p>
            <p><strong>STEP 2:</strong> Comment: Preferred Location/FaceTime</p>
            <p><strong>STEP 3:</strong> Continue to Checkout</p>
            <p><strong>STEP 4:</strong> One of our coaches will contact you in 24h to schedule your appointment </p>            
        </div>
    </div>

    <form action="{{ route('fit-checkout') }}" method="POST">
        @csrf

        <div class="card shadow-sm border-0">
            <div class="card-body">

                <div class="row fw-semibold text-muted border-bottom pb-2 mb-2">
                    <div class="col-md-5">Item</div>
                    <div class="col-md-3 text-center">Quantity</div>
                    <div class="col-md-2 text-end">Price</div>
                    <div class="col-md-2 text-end">Subtotal</div>
                </div>

                @foreach($products as $key => $product)
                    <div class="row align-items-center border-bottom py-3">
                        <div class="col-md-5">
                            @if(isset($product['route']))
                                <a href="{{ route($product['route']) }}"
                                   class="fw-semibold text-decoration-none text-dark">
                                    {{ $product['name'] }}
                                </a>
                            @else
                                <div class="fw-semibold">
                                    {{ $product['name'] }}
                                </div>
                            @endif
                        </div>

                        <div class="col-md-3 text-center">
                            <div class="d-inline-flex align-items-center gap-2">
                                <button type="button"
                                        class="btn btn-outline-secondary btn-sm"
                                        onclick="changeQty('{{ $key }}', -1)">−</button>

                                <input type="number"
                                       name="items[{{ $key }}]"
                                       id="qty-{{ $key }}"
                                       data-price="{{ $product['price'] }}"
                                       value="{{ ($fitProduct ?? null) === $key ? 1 : 0 }}"
                                       min="0"
                                       class="form-control text-center"
                                       style="width:70px">

                                <button type="button"
                                        class="btn btn-outline-secondary btn-sm"
                                        onclick="changeQty('{{ $key }}', 1)">+</button>
                            </div>
                        </div>

                        <div class="col-md-2 text-end text-muted">
                            ${{ number_format($product['price'], 2) }}
                        </div>

                        <div class="col-md-2 text-end fw-semibold text-success"
                             id="subtotal-{{ $key }}">
                            $0.00
                        </div>
                    </div>
                @endforeach

                <div class="mt-4">
                    <label class="form-label fw-semibold">Location preferences or notes, Days/times, Past Pertinent History, Questions</label>
                    <textarea name="comments"
                              class="form-control"
                              rows="3"
                              placeholder="Location Choice, notes)"></textarea>
                </div>

                <div class="d-flex justify-content-between align-items-center mt-4 pt-3 border-top">
                    <span class="fs-4 fw-bold">Total</span>
                    <span class="fs-3 fw-bold text-success" id="totalDisplay">$0.00 USD</span>
                </div>

                <input type="hidden" name="total" id="totalInput">

                <button type="submit"
                        class="btn btn-warning btn-lg w-100 mt-4 fw-bold">
                    Continue to Checkout
                </button>

            </div>
        </div>
    </form>

</div>


{{-- 
    MOCK DATA (REMOVE WHEN INTEGRATING WITH CONTROLLER) 
--}}
@php


$plans = collect(config('products'))
    ->filter(fn($p) => isset($p['fit-subscription']) && $p['fit-subscription'] === 1)
    ->map(function ($p, $key) {
        return (object)[
            'id' => $key,
            'name' => $p['name'],
            'price' => $p['price'],
            'period' => 'mo',
            'features' => $p['desc'] ?? '',
        ];
    })
    ->values();
@endphp



<style>
    :root {
        --brand-dark: #222429;
        --brand-yellow: #FCD804;
    }

    .subscription-section {
        background-color: var(--brand-dark);
        color: white;
        padding: 80px 0;
        border-top: 4px solid var(--brand-yellow);
    }

    .highlight-text {
        color: var(--brand-yellow);
        font-weight: 800;
        text-transform: uppercase;
        letter-spacing: 1px;
    }

    .benefit-item i {
        color: var(--brand-yellow);
        font-size: 1.6rem;
        margin-bottom: 10px;
    }

    .plan-selector-input {
        display: none;
    }

    .plan-card {
        border: 2px solid #444;
        background: rgba(255,255,255,0.05);
        border-radius: 12px;
        padding: 24px;
        cursor: pointer;
        transition: all 0.3s ease;
        position: relative;
        height: 100%;
    }

    .plan-card:hover {
        border-color: rgba(252,216,4,0.6);
        background: rgba(255,255,255,0.08);
    }

    .plan-selector-input:checked + .plan-card {
        border-color: var(--brand-yellow);
        background: rgba(252,216,4,0.12);
        box-shadow: 0 0 18px rgba(252,216,4,0.25);
    }

    .plan-selector-input:checked + .plan-card::after {
        content: '✓';
        position: absolute;
        top: 12px;
        right: 16px;
        color: var(--brand-yellow);
        font-weight: 900;
        font-size: 1.3rem;
    }

    .badge-best-value {
        position: absolute;
        top: -12px;
        left: 50%;
        transform: translateX(-50%);
        background-color: var(--brand-yellow);
        color: var(--brand-dark);
        font-size: 0.75rem;
        font-weight: 800;
        padding: 4px 14px;
        border-radius: 20px;
        text-transform: uppercase;
    }

    .btn-subscribe {
        background-color: var(--brand-yellow);
        color: var(--brand-dark);
        font-weight: 900;
        font-size: 1.25rem;
        padding: 16px 44px;
        border-radius: 50px;
        border: none;
        box-shadow: 0 4px 16px rgba(252,216,4,0.45);
    }

    .btn-subscribe:hover {
        background-color: #e3c204;
        color: var(--brand-dark);
        transform: scale(1.04);
    }

    .trust-text {
        font-size: 0.85rem;
        color: #aaa;
        margin-top: 15px;
    }
</style>

<section class="subscription-section">
    <div class="container">

        {{-- Header --}}
        <div class="row justify-content-center text-center mb-5">
            <div class="col-lg-9">
                <h2 class="display-5 fw-bold mb-3 yellow highlight-text">
                    Are you really committed to your health?
                    <br>
                    <span class="highlight-text">This is where commitment begins</span>
                </h2>

                <p class="lead text-white-50 mb-4">
                    One time sessions help.  
                    Monthly commitment changes everything.
                </p>

                <p class="text-white-50">
                    Subscriptions remove friction, build habits, and keep you accountable.
                </p>

                {{-- Benefits --}}
                <div class="row mt-5 g-4">
                    <div class="col-md-4 benefit-item">
                        <i class="bi bi-arrow-repeat"></i>
                        <h6 class="fw-bold text-white">Less friction</h6>
                        <p class="small text-white-50">
                            No repeated decisions. No restarting every week.
                        </p>
                    </div>
                    <div class="col-md-4 benefit-item">
                        <i class="bi bi-person-check"></i>
                        <h6 class="fw-bold text-white">More accountability</h6>
                        <p class="small text-white-50">
                            Someone tracks your progress, not just your sessions.
                        </p>
                    </div>
                    <div class="col-md-4 benefit-item">
                        <i class="bi bi-graph-up-arrow"></i>
                        <h6 class="fw-bold text-white">Better results</h6>
                        <p class="small text-white-50">
                            Progress happens when training becomes a habit.
                        </p>
                    </div>
                </div>
            </div>
        </div>

        {{-- Plans --}}
        <div class="row justify-content-center">
            <div class="col-lg-10">
                <form action="" method="POST">
                    @csrf

                    <div class="row g-4 mb-5 justify-content-center">
                        @foreach($plans as $plan)
                        <div class="col-md-4">
                            <label class="w-100 h-100 position-relative">
                                <input
                                    type="radio"
                                    name="subscription_plan"
                                    value="{{ $plan->id }}"
                                    class="plan-selector-input"
                                    {{ isset($plan->best_value) ? 'checked' : '' }}
                                >

                                <div class="plan-card text-center">
                                    @if(isset($plan->best_value))
                                        <span class="badge-best-value">Best Value</span>
                                    @endif

                                    <h4 class="fw-bold text-white mb-2">
                                        {{ $plan->name }}
                                    </h4>

                                    <h2 class="highlight-text mb-0">
                                        ${{ $plan->price }}
                                        <small class="fs-6 text-white">/{{ $plan->period }}</small>
                                    </h2>

                                    <hr class="border-secondary my-3">

                                    <p class="small text-white-50 mb-0">
                                        {{ $plan->features }}
                                    </p>
                                </div>
                            </label>
                        </div>
                        @endforeach
                    </div>

                    {{-- CTA --}}
                    <div class="text-center">
                        <h5 class="fw-bold text-white mb-3">
                            This is not a payment. It is a decision.
                        </h5>

                        <p class="text-white-50 mb-4">
                            Your coach will contact you within 24 hours to personalize your plan.
                        </p>

                        <button type="submit" class="btn btn-subscribe">
                            Yes, I am ready to commit <i class="bi bi-arrow-right-short"></i>
                        </button>

                        <div class="trust-text d-flex justify-content-center align-items-center gap-3 mt-3">
                            <span><i class="bi bi-lock-fill"></i> Secure Payment</span>
                            <span>|</span>
                            <span><i class="bi bi-calendar-check"></i> Cancel Anytime</span>
                        </div>
                    </div>

                </form>
            </div>
        </div>
    </div>
</section>





<div style="background:#1f2328; padding:30px 20px; border-bottom:2px solid #f5c400;">
    <div class="container">

        <h3 style="color:#ffffff; font-weight:800; margin-bottom:15px;">
            GET IN TOUCH
        </h3>

        <p style="color:#cfd3d7; margin:0 0 8px 0;">
            Scottsdale Location: Maximum Fitness Gym, 8551 E. Anderson Dr. Suite 101, Scottsdale, AZ 85255 <a href="mailto:brad@fitdonewell.com"
               style="color:#FCD804; text-decoration:none;">
                brad@fitdonewell.com
            </a>
            <a href="mailto:laly@fitdonewell.com"
               style="color:#FCD804; text-decoration:none; display:block;">
                laly@fitdonewell.com
            </a>
        </p>

        <h3 style="color:#ffffff; font-weight:800; margin-bottom:15px;">
            POLICY
        </h3>
        <p style="color:#cfd3d7; margin:0 0 8px 0;">
            Payments will be EFT on the date of Subscription purchase<br>
24 hour Cancellation Notice for all scheduled session(s), to avoid<br>
Any missed session(s), can be made-up, will expire at end of each month, to ensure accountability<br>
30 day Cancellation Policy for Subscriptions via email request <a href="mailto:brad@fitdonewell.com"
               style="color:#FCD804; text-decoration:none;">
                brad@fitdonewell.com
            </a>
        </p>
 


    </div>
</div>

<script>
function recalcTotals() {
    let total = 0;

    document.querySelectorAll('input[data-price]').forEach(input => {
        const key = input.id.replace('qty-', '');
        const qty = parseInt(input.value) || 0;
        const price = parseFloat(input.dataset.price);
        const subtotal = qty * price;

        document.getElementById(`subtotal-${key}`).innerText =
            `$${subtotal.toFixed(2)}`;

        total += subtotal;
    });

    document.getElementById('totalDisplay').innerText =
        `$${total.toFixed(2)} USD`;
    document.getElementById('totalInput').value =
        total.toFixed(2);
}

function changeQty(key, delta) {
    const input = document.getElementById(`qty-${key}`);
    let value = parseInt(input.value) || 0;
    value = Math.max(0, value + delta);
    input.value = value;
    recalcTotals();
}

document.querySelectorAll('input[data-price]').forEach(input => {
    input.addEventListener('input', recalcTotals);
});

document.addEventListener('DOMContentLoaded', recalcTotals);//recalcula al iniciar
</script>

@include('index1.footer')
</body>
</html>






