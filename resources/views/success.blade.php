<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <title>Thank You - Fit.Done.Well.</title>
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
        .hero-thankyou {
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
        .hero-thankyou .overlay {
            position: absolute;
            top: 0; left: 0; width: 100%; height: 100%;
            background: rgba(0, 0, 0, 0.6);
        }
        .hero-thankyou .content {
            position: relative;
            z-index: 1;
            max-width: 800px;
            padding: 20px;
        }
        .hero-thankyou h1,
        .hero-thankyou h2 {
            color: #fff;
        }
        .hero-thankyou h1 {
            font-size: 3rem;
            font-weight: bold;
        }
        .thankyou-msg {
            background: #f8f9fa;
            padding: 50px 20px;
            margin: 60px auto;
            max-width: 700px;
            border-radius: 10px;
            box-shadow: 0 10px 30px rgba(0, 0, 0, 0.1);
            text-align: center;
        }
        .thankyou-msg h2 {
            color: #28a745;
            font-size: 28px;
            margin-bottom: 20px;
        }
    </style>
</head>
<body>
@include('index1.header')

<div class="hero-thankyou">
    <div class="overlay"></div>
    <div class="content">
        <h1>Thank You for Your Support</h1>
        <h2>Your generosity brings health, clarity, and compassion to more lives.</h2>
    </div>
</div>

<div class="container">
    <div class="thankyou-msg">
        <h2>✅ Payment Successful!</h2>
        <p>We're deeply grateful for your payment. Your support helps us continue building stronger bodies, open minds, and kind hearts across communities.</p>
        <p>Welcome to the Fit.Done.Well. movement!</p>
        <a href="{{ url('/') }}" class="btn btn-success mt-4 px-4 py-2">Back to Home</a>
    </div>
</div>

@include('index1.footer')
</body>
</html>
