<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <title>Donate - Fit.Done.Well.</title>
    <meta content="width=device-width, initial-scale=1.0" name="viewport">
    <link href="{{ asset('t1/img/favicon.ico') }}" rel="icon">
    <link href="https://fonts.googleapis.com/css2?family=Oswald:wght@400;500;600;700&family=Rubik&display=swap" rel="stylesheet">
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.0/css/all.min.css" rel="stylesheet">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.4.1/font/bootstrap-icons.css" rel="stylesheet">
    <link href="{{ asset('t1/lib/flaticon/font/flaticon.css') }}" rel="stylesheet">
    <link href="{{ asset('t1/lib/owlcarousel/assets/owl.carousel.min.css') }}" rel="stylesheet">
    <link href="{{ asset('t1/css/bootstrap.min.css') }}" rel="stylesheet">
    <link href="{{ asset('t1/css/style.css') }}?ver={{ rand(1,10000) }}" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.2/css/all.min.css">

    <style>
        .hero-donation {
            position: relative;
            background: url("{{ asset('t1/img/laly-band.webp') }}") no-repeat top center;
            background-size: cover;
            height: 80vh;
            display: flex;
            align-items: center;
            justify-content: center;
            text-align: center;
            color: white;
        }
        .hero-donation .overlay {
            position: absolute;
            top: 0; left: 0; width: 100%; height: 100%;
            background: rgba(0, 0, 0, 0.6);
        }
        .hero-donation .content {
            position: relative;
            z-index: 1;
            max-width: 800px;
            padding: 20px;
        }
        .hero-donation h1,
        .hero-donation h2 {
            color: #fff;
        }
        .hero-donation h1 {
            font-size: 3rem;
            font-weight: bold;
        }
        .donation-form {
            background: #f8f9fa;
            padding: 40px;
            max-width: 600px;
            margin: 50px auto;
            border-radius: 10px;
            box-shadow: 0 10px 30px rgba(0, 0, 0, 0.1);
        }
        .donation-form button {
            width: 100%;
        }
    </style>
</head>
<body>
@include('index1.header')

<div class="hero-donation">
    <div class="overlay"></div>
    <div class="content">
        <h1>Strong Bodies. Open Minds. Kind Hearts.</h1>
        <h2>Your donation helps build a world with better priorities—where wellness, clarity, and compassion thrive.</h2>
    </div>
</div>

<div class="container">
  <div class="donation-form">
    <h2 class="text-center mb-4">Make a Donation</h2>

    @if ($errors->any())
      <div class="alert alert-danger">
        <ul class="mb-0">
          @foreach ($errors->all() as $error)
            <li>{{ $error }}</li>
          @endforeach
        </ul>
      </div>
    @endif

    <!-- Botones de pasarela -->
    <div class="d-grid gap-3 mb-4">
      <button type="button" class="btn btn-stripe py-3 fw-bold pay-btn" data-target="stripeForm" aria-controls="stripeForm">
        <i class="fa-brands fa-cc-stripe me-2"></i> Pay with Credit Card
      </button>

      <button type="button" class="btn btn-zelle py-3 fw-bold text-white pay-btn" data-target="zelleForm" aria-controls="zelleForm">
        <i class="fa-solid fa-bolt me-2"></i> Pay with Zelle
      </button>

      <button type="button" class="btn btn-venmo py-3 fw-bold text-white pay-btn" data-target="venmoForm" aria-controls="venmoForm">
        <i class="fa-brands fa-venmo me-2"></i> Pay with Venmo
      </button>

      <button type="button" class="btn btn-paypal py-3 fw-bold text-white pay-btn" data-target="paypalForm" aria-controls="paypalForm">
        <i class="fa-brands fa-paypal me-2"></i> Pay with PayPal
      </button>
    </div>

    <!-- Formularios ocultos -->
    <!-- Stripe -->
    <form id="stripeForm" method="POST" action="{{ route('checkout.pay') }}" class="d-none border rounded p-3">
      @csrf
      <h5 class="mb-3">Stripe</h5>
      <div class="mb-3">
        <label for="amount_stripe" class="form-label">Donation Amount (USD)</label>
        <input type="number" name="amount" id="amount_stripe" min="1" step="0.01" required class="form-control">
      </div>
      <button type="submit" class="btn btn-stripe fw-bold">
        <i class="fa-brands fa-cc-stripe me-2"></i> Donate via Stripe
      </button>
    </form>

    <!-- Zelle -->
    <form id="zelleForm" method="POST" action="#" class="d-none border rounded p-3">
      @csrf
      <h5 class="mb-3">Zelle</h5>
      <div class="mb-3">
        <label for="amount_zelle" class="form-label">Donation Amount (USD)</label>
        <input type="number" name="amount" id="amount_zelle" min="1" step="0.01" required class="form-control">
      </div>
      <div class="mb-3">
        <label for="zelle_email" class="form-label">Your email</label>
        <input type="email" name="zelle_email" id="zelle_email" class="form-control" placeholder="you@example.com">
      </div>
      <!-- TODO: define action y manejo real de Zelle -->
      <button type="submit" class="btn btn-zelle text-white fw-bold">
        <i class="fa-solid fa-bolt me-2"></i> Confirm Zelle Instructions
      </button>
      <p class="small text-muted mt-2 mb-0">After submitting, you will receive Zelle details to complete your donation.</p>
    </form>

    <!-- Venmo -->
    <form id="venmoForm" method="POST" action="#" class="d-none border rounded p-3">
      @csrf
      <h5 class="mb-3">Venmo</h5>
      <div class="mb-3">
        <label for="amount_venmo" class="form-label">Donation Amount (USD)</label>
        <input type="number" name="amount" id="amount_venmo" min="1" step="0.01" required class="form-control">
      </div>
      <div class="mb-3">
        <label for="venmo_username" class="form-label">Venmo username</label>
        <input type="text" name="venmo_username" id="venmo_username" class="form-control" placeholder="@youruser">
      </div>
      <!-- TODO: define action real de Venmo -->
      <button type="submit" class="btn btn-venmo text-white fw-bold">
        <i class="fa-brands fa-venmo me-2"></i> Continue with Venmo
      </button>
    </form>

    <!-- PayPal -->
    <form id="paypalForm" method="POST" action="#" class="d-none border rounded p-3">
      @csrf
      <h5 class="mb-3">PayPal</h5>
      <div class="mb-3">
        <label for="amount_paypal" class="form-label">Donation Amount (USD)</label>
        <input type="number" name="amount" id="amount_paypal" min="1" step="0.01" required class="form-control">
      </div>
      <div class="mb-3">
        <label for="paypal_email" class="form-label">Your PayPal email</label>
        <input type="email" name="paypal_email" id="paypal_email" class="form-control" placeholder="you@paypal.com">
      </div>
      <!-- TODO: define action real de PayPal -->
      <button type="submit" class="btn btn-paypal text-white fw-bold">
        <i class="fa-brands fa-paypal me-2"></i> Continue with PayPal
      </button>
    </form>

    <div class="mt-4">
      <p class="text-center fw-bold">Fit.Done.Well. is more than fitness, it is a philosophy.</p>
      <p class="text-center">When you donate, you are giving someone the chance to build a stronger body, open their mind, and heal their heart. Together, we are creating a world where health is celebrated, not sold.</p>
    </div>
  </div>
</div>

<style>
  .btn-stripe { background-color: #635BFF; color: #fff; border: none; }
  .btn-stripe:hover { filter: brightness(0.95); color: #fff; }

  .btn-zelle { background-color: #6D1ED4; border: none; }
  .btn-zelle:hover { filter: brightness(0.95); color: #fff; }

  .btn-venmo { background-color: #3D95CE; border: none; }
  .btn-venmo:hover { filter: brightness(0.95); color: #fff; }

  .btn-paypal { background-color: #003087; border: none; }
  .btn-paypal:hover { filter: brightness(0.95); color: #fff; }
</style>

<script>
  (function () {
    const buttons = document.querySelectorAll('.pay-btn');
    const forms = ['stripeForm','zelleForm','venmoForm','paypalForm'].map(id => document.getElementById(id));

    function showForm(targetId) {
      forms.forEach(f => {
        if (!f) return;
        if (f.id === targetId) {
          f.classList.remove('d-none');
          f.scrollIntoView({ behavior: 'smooth', block: 'start' });
        } else {
          f.classList.add('d-none');
        }
      });
    }

    buttons.forEach(btn => {
      btn.addEventListener('click', () => showForm(btn.dataset.target));
    });
  })();
</script>


@include('index1.footer')
</body>
</html>
