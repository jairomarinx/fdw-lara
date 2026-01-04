<?php
$emailList = "";
$emailList = $contacts->pluck('email')->implode(',');
$emailList = $emailList. "," .$presales->pluck('email')->implode(',');

?>
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
  <h2 class="text-center mb-4">Contacts</h2>
  <div class="table-responsive">
    <table class="table table-striped table-bordered table-hover align-middle text-center">
      <thead class="table-dark">
        <tr>
          <th>Name</th>
          <th>Email</th>
          <th>Phone</th>
        </tr>
      </thead>
      <tbody>
            @foreach ($contacts as $contact)
                <tr>
                    <td>{{ $contact->name }}</td>
                    <td>{{ $contact->email }}</td>
                    <td>{{ $contact->phone }}</td>
                </tr>
            @endforeach

      </tbody>
    </table>
  </div>
</div>

<div class="container my-5">
  <h2 class="text-center mb-4">Pre Sales</h2>
  <div class="table-responsive">
    <table class="table table-striped table-bordered table-hover align-middle text-center">
      <thead class="table-dark">
        <tr>
          <th>Name</th>
          <th>Email</th>
          <th>Phone</th>
          <th>Product</th>
          <th>Product Name</th>
          <th>Amount</th>
          <th>Description</th>
          <th>Payment</th>
          <th>Date</th>
        </tr>
      </thead>
      <tbody>
            @foreach ($presales as $presale)
                <tr>
                    <td>{{ $presale->name }}</td>
                    <td>{{ $presale->email }}</td>
                    <td>{{ $presale->phone }}</td>
                    <td>{{ $presale->product }}</td>
                    <td>{{ $presale->product_name }}</td>
                    <td>{{ $presale->amount }}</td>
                    <td>{{ $presale->description }}</td>
                    <td>{{ $presale->payment_status }}</td>
                    <td>{{ $presale->created_at }}</td>
                </tr>
            @endforeach

      </tbody>
    </table>
  </div>
</div>


<div class="container my-5">
  <h2 class="text-center mb-4">Emails to Send</h2>
    <div>
      <div class="container mt-4">
          <label for="emailList" class="form-label">Email list</label>
          <textarea id="emailList" class="form-control" rows="5" >{{ $emailList }}</textarea>
      </div>      
    </div>
  </div>
</div>







@include('index1.footer')
</body>
</html>