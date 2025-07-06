    <div class="mb-5 text-center">
        <h5 class="text-primary text-uppercase fs-3"><strong>Our</strong></h5>
        <h1 class="display-3 text-uppercase mb-0">THREE PILLARS</h1>
        <h5 class="text-gray fs-2"><span class="text-primary"> Strong Bodies • Open Minds • Kind Hearts • </span> </h5>
        <h4 class="text-body mb-4">With the aim to unlock your best life</h4>

    </div>

    
    <!-- Programe Start -->
    <div class="container-fluid programe position-relative px-5 mt-5" style="margin-bottom: 135px;">
        <div class="row g-5 gb-5">
            <div class="col-lg-4 col-md-6">
                <div class="bg-light rounded text-justify p-5">
                    <img src="{{ asset('t1/img/laly-body.jpg') }}" alt="body" class="img-fluid">
                    <h3 class="text-uppercase my-4 fs-1 text-center">Strong Bodies</h3>
                    <p class="text-center text-uppercase"><strong> Celebrate Your Body with Strength and Vitality</strong><br><br></p>

                    <span class="text-justify">At Fit.Done.Well., we believe your body is a powerful tool that deserves celebration. Our body-focused programs are designed to help you build strength, increase endurance, and achieve your fitness goals in a way that honors your unique capabilities. <span class="d-none" id="id_c1">Whether you're engaging in full-body workouts, leg sessions, or core-focused exercises, every movement is a step toward a healthier, stronger you. With personalized routines, live sessions, and expert guidance, we empower you to embrace your body's potential and unlock its true power. Celebrate your health with every workout and transform your body into a source of confidence and vitality.</span></span></p>
                    <a class="text-uppercase" href="javascript:void(0);" OnClick="read_more(1)" id="id_read1">Read More <i class="bi bi-arrow-right"></i></a>
                    <a href="http://shop.fitdonewell.com" class="btn btn-warning d-block text-center mx-auto mt-4">FIT.RESET.PROGRAMS.</a>
                </div>
            </div>
            <div class="col-lg-4 col-md-6">
                <div class="bg-light rounded text-justify p-5">
                    <img src="{{ asset('t1/img/brad-mind.jpg') }}" class="img-fluid">
                    <h3 class="text-uppercase my-4 fs-1 text-center">Open Minds</h3>
                    <p class="text-center text-uppercase"><strong> Nurture Your Mind for Clarity and Growth</strong><br><br></p>

                    <span class="text-justify">At Fit.Done.Well., we understand that a strong mind is the foundation of true wellness. Our programs focus on mental clarity, resilience, and mindfulness to help you navigate life's challenges with confidence. <span class="d-none" id="id_c2">By integrating mental exercises, journaling, and mindful habits into your routine, we empower you to stay focused, positive, and centered. Embrace the power of your mind to unlock endless possibilities for personal growth, and discover how mental strength can elevate your overall well-being. With us, your mind becomes a source of strength, peace, and limitless potential.</span></span><br><br></p>
                    <a class="text-uppercase" href="javascript:void(0);" OnClick="read_more(2)" id="id_read2">Read More <i class="bi bi-arrow-right"></i></a>
                    <a href="http://shop.fitdonewell.com" class="btn btn-warning d-block text-center mx-auto mt-4">MIND.RESET.PROGRAMS.</a>

                </div>
            </div>
            <div class="col-lg-4 col-md-6">
                <div class="bg-light rounded text-justify p-5">
                    <img src="{{ asset('t1/img/spirit.jpg') }}" class="img-fluid" alt="">
                    <h3 class="text-uppercase my-4 fs-1 text-center">Kind Hearts</h3>
                    <p class="text-center text-uppercase"><strong>Elevate Your Spirit with Peace and Purpose</strong> <br><br></p>

                    <span class="text-justify">At Fit.Done.Well., we believe that nurturing your spirit is key to a fulfilling life. Our programs focus on fostering inner peace, mindfulness, and a deeper connection to yourself.<br> <span class="d-none" id="id_c3"> Through mindful activities, meditation, and holistic practices, we guide you on a journey to rediscover balance and purpose. By embracing your spirit, you open the door to greater emotional resilience, compassion, and a sense of fulfillment. Let your spirit soar, and experience the transformative power of a connected and grounded self<br><br></span></span><br> </p>
                    <a class="text-uppercase" href="javascript:void(0);" OnClick="read_more(3)" id="id_read3">Read More <i class="bi bi-arrow-right"></i></a>
                    <a href="http://shop.fitdonewell.com" class="btn btn-warning d-block text-center mx-auto mt-4">LIFE.RESET.PROGRAMS.</a>

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