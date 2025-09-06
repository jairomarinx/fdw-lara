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


<div class="container">
  <div class="donation-form">
    <div>
        <img src="https://upload.wikimedia.org/wikipedia/commons/4/4c/Zelle_logo.svg" alt="" class="img-fluid">
    </div>    
    <div class="container my-4">
  <div class="card shadow-sm border-0">
    <div class="card-body p-4 text-center">


      <h2 class="fw-bold mb-3" style="font-size: clamp(1.4rem, 2.5vw, 2rem);">
        1. Send your payment via the Zelle app to
      </h2>

      <div class="d-flex justify-content-center align-items-center gap-2 mb-3">
        <a href="mailto:fitdonewell@gmail.com" class="link-dark fw-bold"
           style="font-size: clamp(1.2rem, 2.2vw, 1.6rem);">
          fitdonewell@gmail.com
        </a>
        <button type="button" class="btn btn-outline-primary btn-sm" id="copyZelleEmail">
          Copy
        </button>
      </div>

      <p class="text-muted mb-0" style="font-size: clamp(0.95rem, 1.6vw, 1.05rem);">
        Add your order code in the memo. You will receive access after we confirm the transfer.
      </p>
    </div>
  </div>
</div>

<script>
  document.getElementById('copyZelleEmail').addEventListener('click', async function () {
    try {
      await navigator.clipboard.writeText('fitdonewell@gmail.com');
      this.textContent = 'Copied';
      setTimeout(() => this.textContent = 'Copy', 1500);
    } catch (e) {
      this.textContent = 'Copy failed';
      setTimeout(() => this.textContent = 'Copy', 1500);
    }
  });
</script>











  </div>
</div>






@include('index1.footer')
</body>
</html>
