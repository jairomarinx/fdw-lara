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






