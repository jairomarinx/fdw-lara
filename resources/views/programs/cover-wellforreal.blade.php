<div style="background-color: #fff ;" class="p-4">
    <div class="container mb-5 text-center" id="id_schedule">
        <h5 class="text-primary text-uppercase fs-3"><strong>Program</strong></h5>
        <h1 class="display-3 text-uppercase mb-0">WELL <span class="yellow">4</span> REAL</h1>
        <h5 class="text-gray fs-2"> Real Wellness <span class="text-primary">• Mind Balance </span>• Body Health </h5>
    </div>

    <div class="container p-1">
        <div class="row g-5">
            <div class="col-lg-10 col-md-10 col-sm-12 col-xm-12 mx-auto">
                <a href="{{ route('well-forreal') }}">
                    <div class="blog-item">
                        <div class="position-relative overflow-hidden rounded-top">
                            <img class="img-fluid" src="{{ asset('cover-wellforreal.jpeg') }}" alt="">
                        </div>

                        <div class="bg-dark rounded-bottom p-4 d-flex align-items-center" style="position: relative;">

                            <div style="flex:0;">
                                <img src="{{ asset('logo-fdw.png') }}" alt="logo" class="img-fluid"
                                     style="max-width: clamp(40px, 10vw, 100px);">
                            </div>

                            <div style="position:absolute; left:50%; transform:translateX(-50%);">
                                <a href="{{ url('general-checkout/fit-without-gym') }}"
                                   style="background-color:#FCD804;color:#000;padding:1rem 4.5rem;border-radius:6px;text-decoration:none;font-weight:800;font-size:25px;letter-spacing:1px; display:inline-block;">
                                    Sign Up 499 USD
                                </a>
                            </div>

                        </div>

                    </div>
                </a>
            </div>
        </div>

        <div class="row mt-3">
            <div class="col-10 mx-auto">

                <div class="container-fluid programe position-relative px-5 mt-5" style="margin-bottom: 30px;">
                    <div class="row g-5 ">
                        <div class="col-lg-4 col-md-6">
                            <div class="bg-light rounded text-justify p-5 shadow">
                                <img src="{{ asset('t1/img/services/corey-laly.webp') }}" alt="body" class="img-fluid">
                                <h3 class="text-uppercase my-4 fs-5 text-center">Wellness Foundation</h3>

                                <a href="{{ route('well-forreal') }}"
                                   class="btn btn-warning d-block text-center mx-auto mt-4 text-uppercase">Learn
                                    More<br> <strong>Well 4 Real</strong></a>
                            </div>
                        </div>
                        <div class="col-lg-4 col-md-6">
                            <div class="bg-light rounded text-justify p-5 shadow">
                                <img src="{{ asset('strong-bodies.webp') }}" class="img-fluid">
                                <h3 class="text-uppercase my-4 fs-5 text-center">Balanced Living</h3>

                                <a href="{{ route('well-forreal') }}"
                                   class="btn btn-warning d-block text-center mx-auto mt-4">Learn More<br> <strong>Well
                                        4 Real</strong></a>

                            </div>
                        </div>
                        <div class="col-lg-4 col-md-6">
                            <div class="bg-light rounded text-justify p-5 shadow">
                                <img src="{{ asset('gr2.webp') }}" class="img-fluid" alt="">
                                <h3 class="text-uppercase my-4 fs-5 text-center">Mind Body Reset</h3>

                                <a href="{{ route('well-forreal') }}"
                                   class="btn btn-warning d-block text-center mx-auto mt-4">Learn More<br> <strong>Well
                                        4 Real</strong></a>

                            </div>
                        </div>
                    </div>

                    <p style="color:black; margin-top: 30px;">
                        Well 4 Real is a complete wellness experience designed to strengthen your mind, elevate your energy, improve your emotional balance, and build real long term habits. It is made for people who want clarity, health, and a lifestyle that feels natural and sustainable.
                    </p>

                </div>

                <div class="row ">
                    <div class="col-12 text-center">
                        <a href="{{ url('general-checkout/fit-without-gym') }}"
                           style="display:inline-block;background-color:#FCD804;color:#000;padding:1rem 4.5rem;border-radius:6px;text-decoration:none;font-weight:800; font-size: 25px; letter-spacing:1px;">
                            Sign Up 499 USD
                        </a>
                    </div>
                </div>

            </div>
        </div>
    </div>
</div>
