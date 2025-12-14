@php
    $products = collect(config('products'))
        ->filter(fn($p) => $p['meal'] === 1);
@endphp

<div class="container py-5">

    <div class="row mb-4">
        <div class="col">
            <h1 class="fw-bold">Customize Meal Prepping</h1>
            <p class="text-muted">
                Select your meal packages and extras. Combine multiple items in one order.
            </p>
        </div>
    </div>

    <form action="{{ route('meal-checkout') }}" method="POST">
        @csrf

        <div class="card shadow-sm border-0">
            <div class="card-body">

                <!-- Header -->
                <div class="row fw-semibold text-muted border-bottom pb-2 mb-2">
                    <div class="col-md-5">Item</div>
                    <div class="col-md-3 text-center">Quantity</div>
                    <div class="col-md-2 text-end">Price</div>
                    <div class="col-md-2 text-end">Subtotal</div>
                </div>

                @foreach($products as $key => $product)
                    <div class="row align-items-center border-bottom py-3">
                        <div class="col-md-5">
                            <div class="fw-semibold">{{ $product['name'] }}</div>
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
                                       value="0"
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

                <!-- Comments -->
                <div class="mt-4">
                    <label class="form-label fw-semibold">Meal preferences or notes</label>
                    <textarea name="comments"
                              class="form-control"
                              rows="3"
                              placeholder="Meal choices, waffle flavors, allergies, etc"></textarea>
                </div>

                <!-- Total -->
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
</script>
