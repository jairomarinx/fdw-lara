    <div class="container-fluid p-5">
        <div class="row g-5">
            <div class="col-lg-4">
                <a href="http://blog.fitdonewell.com">
                <div class="blog-item">
                    <div class="position-relative overflow-hidden rounded-top">
                        <img class="img-fluid" src="{{ asset('servicios.webp') }}" alt="">
                    </div>
                    <div class="bg-dark d-flex align-items-center rounded-bottom p-4">
                        <div class="flex-shrink-0 text-center text-secondary border-end border-secondary pe-3 me-3">
                           <img src="{{ asset('logo-fdw.png') }}" alt="" class="img-fluid" style="max-width: clamp(40px, 10vw, 100px);">
                        </div>
                        <a class="h5 text-uppercase text-light" href="{{ url('/services') }}">Our Services <br><span class="text-primary"> Start your journey</span></h4></a>
                    </div>
                </div>
                </a>
            </div>
            <div class="col-lg-4">
                <a href="http://blog.fitdonewell.com">
                <div class="blog-item">
                    <div class="position-relative overflow-hidden rounded-top">
                        <img class="img-fluid" src="{{ asset('programs.webp') }}" alt="">
                    </div>
                    <div class="bg-dark d-flex align-items-center rounded-bottom p-4">
                        <div class="flex-shrink-0 text-center text-secondary border-end border-secondary pe-3 me-3">
                            <img src="{{ asset('logo-fdw.png') }}" alt="" class="img-fluid" style="max-width: clamp(40px, 10vw, 100px);">                        </div>
                        <a class="h5 text-uppercase text-light" href="{{ url('/our-programs') }}">Our programs <br><span class="text-primary">Power Your Life</span></h4></a>
                    </div>
                </div>
                </a>
            </div>
            <div class="col-lg-4">
                <a href="http://blog.fitdonewell.com">
                <div class="blog-item">
                    <div class="position-relative overflow-hidden rounded-top">
                        <img class="img-fluid" src="{{ asset('products.webp') }}" alt="">
                    </div>
                    <div class="bg-dark d-flex align-items-center rounded-bottom p-4">
                        <div class="flex-shrink-0 text-center text-secondary border-end border-secondary pe-3 me-3">
                            <img src="{{ asset('logo-fdw.png') }}" alt="" class="img-fluid" style="max-width: clamp(40px, 10vw, 100px);">                        </div>
                        <a class="h5 text-uppercase text-light" href="https://www.amazon.com/s?me=A3ICCKPR3TSRVY&ref=sf_seller_app_share_new">Our Products <br><span class="text-primary">Stronger Every Day</span></h4></a>
                    </div>
                </div>
                </a>
            </div>
            </div>
        </div>
    </div>



<!-- Nuestros tres pilares de venta   -->
    <div class="container-fluid p-5 d-none" id="id_schedule">
        <div class="mb-5 text-center">
            <h5 class="text-primary text-uppercase"></h5>
            <h1 class="display-3 text-uppercase mb-0"></h1>
        </div>
        <div class="row g-5">
            <div class="col-lg-4 col-md-6">
                <div class="team-item position-relative">
                    <div class="position-relative overflow-hidden rounded">
                        <img class="img-fluid w-100" src="{{ asset('t1/img/brad-cook.webp') }}" alt="">
                        <div class="team-overlay">
                            <div class="d-flex align-items-center justify-content-start">
                                <a class="btn btn-light btn-square rounded-circle mx-1" href="{{ url('/services') }}"><i class="fas fa-link"></i> </a>
                            </div>
                        </div>
                    </div>
                    
                        
                    <div class="position-absolute start-0 bottom-0 w-100 rounded-bottom text-center p-4" style="background: rgba(34, 36, 41, .9);">
                        <span><h1 class="text-white">Services</h1>  </span>
                        <a href="{{ url('/services') }}" class="btn btn-primary  p-4" style="font-size: 18px; font-weight:800; color: #fff; border: none; ">Services</a>
                    </div>
                    
                </div>
            </div>

            <div class="col-lg-4 col-md-6">
                <div class="team-item position-relative">
                    <div class="position-relative overflow-hidden rounded">
                        <img class="img-fluid w-100" src="{{ asset('t1/img/brad-laly.webp') }}" alt="">
                        <div class="team-overlay">
                            <div class="d-flex align-items-center justify-content-start">
                                <a class="btn btn-light btn-square rounded-circle mx-1" href="{{ route('fit-reset-programs') }}"><i class="fas fa-link"></i> </a>

                            </div>
                        </div>
                    </div>
                    <div class="position-absolute start-0 bottom-0 w-100 rounded-bottom text-center p-4" style="background: rgba(34, 36, 41, .9);">
                        <a href="{{ route('fit-reset-programs') }}" class="btn btn-primary p-4" style="font-size: 18px; font-weight:800; background: #39FF14; color: #fff; border: none; width: 250px;">Programs</a>

                    </div>
                </div>
            </div>
            <div class="col-lg-4 col-md-6">
                <div class="team-item position-relative">
                    <div class="position-relative overflow-hidden rounded">
                        <img class="img-fluid w-100" src="{{ asset('t1/img/laly-band.webp') }}" alt="">
                        <div class="team-overlay">
                            <div class="d-flex align-items-center justify-content-start">
                                <a class="btn btn-light btn-square rounded-circle mx-1" href="https://www.amazon.com/s?me=A3ICCKPR3TSRVY&ref=sf_seller_app_share_new"><i class="fas fa-link"></i> </a>
                            </div>
                        </div>
                    </div>
                    <div class="position-absolute start-0 bottom-0 w-100 rounded-bottom text-center p-4" style="background: rgba(34, 36, 41, .9);">
                        <a href="https://www.amazon.com/s?me=A3ICCKPR3TSRVY&ref=sf_seller_app_share_new" class="btn btn-primary p-4" style="font-size: 18px; font-weight:800; background: #39FF14; color: #fff; border: none; width: 250px;"  >Products</a>

                    </div>
                </div>
            </div>



        </div>
    </div>