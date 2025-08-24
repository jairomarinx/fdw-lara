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

        <form method="POST" action="{{ route('checkout.pay') }}">
            @csrf
            <div class="mb-3">
                <label for="amount" class="form-label">Donation Amount (USD)</label>
                <input type="number" name="amount" id="amount" min="1" step="0.01" required class="form-control">
            </div>
            <button type="submit" class="btn btn-primary py-2">Donate via Stripe</button>
        </form>

        <div class="mt-4">
            <p class="text-center fw-bold">Fit.Done.Well. is more than fitness—it's a philosophy.</p>
            <p class="text-center">When you donate, you’re giving someone the chance to build a stronger body, open their mind, and heal their heart. Together, we’re creating a world where health is celebrated, not sold.</p>
        </div>
    </div>
</div>

@include('index1.footer')
</body>
</html>
