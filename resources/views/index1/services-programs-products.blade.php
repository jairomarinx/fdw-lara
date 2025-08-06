<!-- Nuestros tres pilares de venta   -->
    <div class="container-fluid p-5" id="id_schedule">
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
                        <a href="{{ url('/services') }}" class="btn  p-4" style="font-size: 18px; font-weight:800; background: #39FF14; color: #fff; border: none; width: 250px;">Services</a>
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