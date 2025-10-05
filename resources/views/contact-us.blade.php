<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <title>@yield('title', 'Fit.Done.Well.')</title>
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

<div class="container my-5">
  <h2 class="text-center mb-4">Contact Us</h2>

      <div class="row justify-content-center">
      <div class="col-lg-7 col-md-9">
        <div class="card shadow-sm border-0 rounded-4 p-4">
          <h2 class="text-center mb-4" style="font-weight: 800; color: #232d39;">
             <em style="color: #FCD804;">Fit.Done.Well.</em>
          </h2>
          <form method="POST" action="{{ route('save-contact') }}">
            @csrf
            <div class="mb-3">
              <label for="name" class="form-label fw-semibold">Full Name</label>
              <input type="text" class="form-control rounded-3" id="name" name="name" placeholder="Your full name" required>
            </div>
            <div class="mb-3">
              <label for="email" class="form-label fw-semibold">Email Address</label>
              <input type="email" class="form-control rounded-3" id="email" name="email" placeholder="you@example.com" required>
            </div>
            <div class="mb-3">
              <label for="phone" class="form-label fw-semibold">Phone Number</label>
              <input type="tel" class="form-control rounded-3" id="phone" name="phone" placeholder="+1 234 567 8901" required>
            </div>
            <div class="mb-3">
              <label class="form-label fw-semibold d-block mb-2">Choose your interest</label>
              <div class="form-check form-check-inline">
                <input class="form-check-input" type="checkbox" id="strongBodies" name="strong_bodies" value="Strong Bodies">
                <label class="form-check-label" for="strongBodies" style="color:#232d39;">Strong Bodies</label>
              </div>
              <div class="form-check form-check-inline">
                <input class="form-check-input" type="checkbox" id="openMind" name="open_minds" value="Open Mind">
                <label class="form-check-label" for="openMind" style="color:#232d39;">Open Mind</label>
              </div>
              <div class="form-check form-check-inline">
                <input class="form-check-input" type="checkbox" id="kindHearts" name="kind_hearts" value="Kind Hearts">
                <label class="form-check-label" for="kindHearts" style="color:#232d39;">Kind Hearts</label>
              </div>
            </div>
            <div class="row g-3 mb-3">
              <div class="col-md-4">
                <label for="city" class="form-label fw-semibold">City</label>
                <input type="text" class="form-control rounded-3" id="city" name="city" placeholder="City" required>
              </div>
              <div class="col-md-4">
                <label for="state" class="form-label fw-semibold">State</label>
                <input type="text" class="form-control rounded-3" id="state" name="state" placeholder="State" required>
              </div>
              <div class="col-md-4">
                <label for="country" class="form-label fw-semibold">Country</label>
                <input type="text" class="form-control rounded-3" id="country" name="country" placeholder="Country" required>
              </div>
            </div>
            <div class="d-grid text-center">
              <button type="submit" class="btn btn-warning fw-bold rounded-3 py-2" style="font-size: 18px; padding: 30px;">
                Submit 
              </button>
            </div>
          </form>
        </div>
      </div>
      <div class="row">
        <div class="col-md-12 text-center">
            <br><br>
            <h3>📞+1 954-226-4294</h3><br>
            <h3>☎️ +1 602-527-1055</h3><br>
            <h3>📧fitdonewell@gmail.com</h3>
            <h3>

<span id="e1">contact</span>
<script>
  (function(){
    var user = "brad";
    var domain = "fitdonewell.com";
    var a = document.createElement("a");
    a.href = "mailto:" + user + "@" + domain;
    a.textContent = user + "@" + domain;
    var target = document.getElementById("e1");
    target.parentNode.replaceChild(a, target);
  })();
</script>

<span id="e2">contact</span>
<script>
  (function(){
    var user = "laly";
    var domain = "fitdonewell.com";
    var a = document.createElement("a");
    a.href = "mailto:" + user + "@" + domain;
    a.textContent = user + "@" + domain;
    var target = document.getElementById("e2");
    target.parentNode.replaceChild(a, target);
  })();
</script>                                


            </h3>
        </div>
      </div>
    </div>
    <div class="row">
        <div class="col-md-12 text-center">
            <br>
            <br>
            <img src="{{ asset('t1/img/team-laly-brad.jpg') }}" alt="" class="img-fluid">
        </div>
    </div>

</div>

@include('index1.footer')
</body>
</html>