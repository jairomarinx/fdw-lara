
@php
    $products = collect(config('products'))
        ->filter(fn($p) => $p['meal'] === 1);
    
    if (!isset($mealProduct)) $mealProduct = null; 
@endphp


<div class="container py-5">

    <div class="row mb-4">
        <div class="col">
            <h1 class="fw-bold">Customize Meal Prepping</h1>
        </div>
    </div>

    <div class="row mb-4">
        <div class="col-md-8">
            <p><strong>STEP 1:</strong> Select Weekly/Monthly Meal Options <span class="text-muted">(Deadline: Saturday 12:00pm)</span></p>
            <p><strong>STEP 2:</strong> Choose any Add-ons</p>
            <p><strong>STEP 3:</strong> Choose from Weekly Wednesday's Meal Menu selection (IG:
                <a href="https://instagram.com/targetdfitness" target="_blank">@targetdfitness</a>)
            </p>
            <p><strong>STEP 4:</strong> Comment: Quantity of each Meal Selection at Checkout</p>
            <p><strong>STEP 5:</strong> Continue to Checkout</p>
            <p><strong>STEP 6:</strong> Pick-up Monday after 10:00am (Scottsdale Location) / Delivery will be contacted</p>
        </div>
    </div>

    <form action="{{ route('meal-checkout') }}" method="POST">
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
                                       value="{{ ($mealProduct ?? null) === $key ? 1 : 0 }}"
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
                    <label class="form-label fw-semibold">Meal preferences or notes</label>
                    <textarea name="comments"
                              class="form-control"
                              rows="3"
                              placeholder="Meal Choice, Quantity, and/or Protein Plus Choices, Waffle Flavor (ie. Carrot Cake:CC/Original Honey-Nut:OHN)"></textarea>
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
            Pick-up: Maximum Fitness Gym, 8551 E. Anderson Dr. Suite 101, Scottsdale, AZ 85255
        </p>

        <p style="margin:0 0 8px 0;">
            <span style="color:#cfd3d7;">Menu:</span>
            <a href="https://instagram.com/targetdfitness"
               target="_blank"
               style="color:#00bfff; text-decoration:none; font-weight:600;">
                IG @targetdfitness
            </a>
        </p>

        <p style="margin:0;">
            <a href="mailto:brad@fitdonewell.com"
               style="color:#00bfff; text-decoration:none; display:block;">
                brad@fitdonewell.com
            </a>
            <a href="mailto:laly@fitdonewell.com"
               style="color:#00bfff; text-decoration:none; display:block;">
                laly@fitdonewell.com
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
