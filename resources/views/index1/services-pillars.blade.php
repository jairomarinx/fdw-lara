    <!-- Programe Start -->
    <div class="container-fluid programe position-relative px-5 mt-5" style="margin-bottom: 135px;">
        <div class="row g-5 gb-5">
            <div class="col-lg-4 col-md-6">
                <div class="bg-light rounded text-justify p-5" style="min-height: 1300px;">
                    <img src="{{ asset('t1/img/services/service-pillar1.webp') }}" alt="body" class="img-fluid">
                    <h3 class="text-uppercase my-4 fs-1 text-center">Fit.Reset.Consultation</h3>
                    <p class="text-center text-uppercase"><strong> Face Time or Scottsdale Facility</strong><br><br></p>

                    <span class="text-justify">This personalized consultation is designed for those ready to take control of their health with a clear and sustainable approach. Whether you prefer to meet in person at our Scottsdale facility or connect over FaceTime, we’ll explore your lifestyle, energy levels, and goals to build a plan that works for you. We focus on realistic changes that make a real difference over time, helping you feel stronger, healthier, and more balanced. One of our coaches will get in touch within 24 hours to schedule the best time for your consultation</span></span></p>
                    <a class="text-uppercase" href="javascript:void(0);" OnClick="read_more(1)" id="id_read1">Read More <i class="bi bi-arrow-right"></i></a>
                    <a href="{{ route('checkout-fit-reset-consultation')  }}" class="btn btn-warning d-block text-center mx-auto mt-4">Buy $129.00</a>
                </div>
            </div>
            <div class="col-lg-4 col-md-6">
                <div class="bg-light rounded text-justify p-5" style="min-height: 1300px;">
                    <img src="{{ asset('t1/img/services/service-pillar2.webp') }}" class="img-fluid">
                    <h3 class="text-uppercase my-4 fs-1 text-center">Personal.Fitness.Training</h3>
                    <p class="text-center text-uppercase"><strong> Face Time or Scottsdale Facility</strong><br><br></p>

                    <span class="text-justify">This is your personalized one-on-one training experience, designed to fit your current level and future goals. Whether we meet over FaceTime or in person at our Scottsdale facility, you’ll receive a custom plan that respects your pace and challenges your limits. We focus on strength, mobility, endurance, and long-term sustainability. Every session is crafted to meet both your physical and mental needs. One of our coaches will reach out within 24 hours to schedule your ideal training time.</span></span><br><br></p>
                    <a class="text-uppercase" href="javascript:void(0);" OnClick="read_more(2)" id="id_read2">Read More <i class="bi bi-arrow-right"></i></a>
                       <a href="{{ route('checkout-fit-reset-consultation')  }}" class="btn btn-warning d-block text-center mx-auto mt-4">Buy 1 Session $129.00</a>
                       <a href="{{ route('checkout-fit-reset-consultation')  }}" class="btn btn-warning d-block text-center mx-auto mt-4">Buy 4 Session $396.00</a>


                </div>
            </div>
            <div class="col-lg-4 col-md-6">
                <div class="bg-light rounded text-justify p-5" style="min-height: 1300px;">
                    <img src="{{ asset('t1/img/services/services-pillar3.webp') }}" class="img-fluid" alt="">
                    <h3 class="text-uppercase my-4 fs-1 text-center">Group.Fitness.Training.</h3>
                    <p class="text-center text-uppercase"><strong>Scottsdale Facility Mon/Wed/Fri at 9:00 am</strong> <br><br></p>

                    <span class="text-justify">Our small group classes are designed to give you focused coaching in a motivating environment
We combine strength, mobility, and functional training with real attention to form
Classes are held at our Scottsdale facility every Monday, Wednesday, and Friday at 9:00 am
Group sizes stay small so you get personal guidance without the pressure
All fitness levels are welcome and adjustments are always available
A coach will contact you within 24 hours to schedule your first session</span></span><br> </p>
                    <a class="text-uppercase" href="javascript:void(0);" OnClick="read_more(3)" id="id_read3">Read More <i class="bi bi-arrow-right"></i></a>
                                   <a href="{{ route('checkout-fit-reset-consultation')  }}" class="btn btn-warning d-block text-center mx-auto mt-4">1 month $507.00</a>


                </div>
            </div>

            <style>
                .marquee-container {
                    overflow: hidden;
                    white-space: nowrap;
                    width: 100%;
                    background: black;
                    padding: 10px;
                    display: flex;
                    align-items: center;
                }

                .marquee-content {
                    display: flex;
                    gap: 10px;
                    animation: marquee 50s linear infinite;
                }

                .marquee-content img {
                    height: 250px;
                    width: 400px;
                    object-fit: cover;
                    border-radius: 10px;
                    box-shadow: 0 4px 6px rgba(0, 0, 0, 0.3);
                }

                @keyframes marquee {
                    from {
                        transform: translateX(100%);
                    }

                    to {
                        transform: translateX(-100%);
                    }
                }
            </style>



        </div>
    </div>
    <!-- Programe Start -->