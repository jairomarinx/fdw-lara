@extends('index1.app')

@section('title', 'Fit Reset Consultation | Fit.Done.Well.')

@section('index1.content')
<style>
    .hero-section {
        min-height: 200vh;
        background-image: url('{{ asset("t1/img/services/laly-brad.webp") }}');
        background-size: cover;
        background-position: top center;
    }
</style>

<section class="hero-section position-relative text-center d-flex align-items-center justify-content-center bg-dark text-white">
    <div class="overlay position-absolute top-0 start-0 w-100 h-100" style="background: rgba(0,0,0,0.2);"></div>
    <div class="content position-relative p-4 animate__animated animate__fadeInUp" style="background: rgba(0,0,0,0.5);">
        <h1 class="display-3 fw-bold text-uppercase mb-3 text-white">Fitness.Reset.Consultation</h1>
        <p class="fs-4">A personalized consultation to restart your fitness journey with purpose and clarity.</p>
        <a href="#form" class="btn btn-warning btn-lg mt-4">Start Your Reset Today</a>
    </div>
</section>


<!-- DESEO -->
<section class="py-5">
    <div class="container">
        <h2 class="text-center text-uppercase mb-4">What You Get</h2>
        <div class="row g-4 text-center">
            <div class="col-md-4">
                <i class="fas fa-user-clock fa-3x text-primary mb-3"></i>
                <h5>1-hour private consultation</h5>
            </div>
            <div class="col-md-4">
                <i class="fas fa-dumbbell fa-3x text-primary mb-3"></i>
                <h5>Custom workout + nutrition plan</h5>
            </div>
            <div class="col-md-4">
                <i class="fas fa-leaf fa-3x text-primary mb-3"></i>
                <h5>Natural supplement guidance</h5>
            </div>
            <div class="col-md-4">
                <i class="fas fa-heartbeat fa-3x text-primary mb-3"></i>
                <h5>Mind-body balance check</h5>
            </div>
            <div class="col-md-4">
                <i class="fas fa-calendar-check fa-3x text-primary mb-3"></i>
                <h5>Weekly follow-up</h5>
            </div>
            <div class="col-md-4">
                <i class="fas fa-users fa-3x text-primary mb-3"></i>
                <h5>Access to private wellness community</h5>
            </div>
        </div>
        <div class="text-center mt-5">
            <a href="#form" class="btn btn-primary btn-lg">I Want This Transformation</a>
        </div>
    </div>
</section>

<!-- TESTIMONIALS CAROUSEL -->
<section class="bg-dark text-white py-5">
    <div class="container">
        <h2 class="text-center text-uppercase text-primary mb-5">Real People. Real Results.</h2>
        <div class="owl-carousel testimonial-carousel">
            <div class="testimonial-item text-center">
                <p class="fs-5">"After 2 years of inactivity, this session gave me the push and clarity I needed. Highly recommended!"</p>
                <h5 class="text-primary">— Laura G.</h5>
            </div>
            <div class="testimonial-item text-center">
                <p class="fs-5">"I was overwhelmed with diet options and gym routines. Now I have a clear, simple path to follow."</p>
                <h5 class="text-primary">— Mike D.</h5>
            </div>
            <div class="testimonial-item text-center">
                <p class="fs-5">"This was the reset I didn't know I needed. My energy and motivation are back."</p>
                <h5 class="text-primary">— Alicia R.</h5>
            </div>
        </div>
    </div>
</section>

<!-- ACCIÓN FINAL -->
<section class="py-5 bg-warning text-dark text-center">
    <div class="container">
        <h2 class="mb-3">Limited Availability</h2>
        <p class="lead">We offer only <strong>10 FREE consultations per week</strong>. Book yours before they’re gone.</p>
        <a href="#form" class="btn btn-dark btn-lg mt-3">Book Your Free Consultation Now</a>
    </div>
</section>

<!-- FORMULARIO DE CONTACTO -->
<section class="py-5 bg-light" id="form">
    <div class="container">
        <h2 class="text-center text-uppercase mb-4">Start Now</h2>
        <form class="row g-3 justify-content-center">
            <div class="col-md-5">
                <input type="text" class="form-control" placeholder="Full Name">
            </div>
            <div class="col-md-5">
                <input type="email" class="form-control" placeholder="Email Address">
            </div>
            <div class="col-md-10">
                <textarea class="form-control" rows="4" placeholder="Tell us briefly about your goals"></textarea>
            </div>
            <div class="col-md-10 text-center">
                <button type="submit" class="btn btn-primary btn-lg">Reserve My Spot</button>
            </div>
        </form>
    </div>
</section>

<!-- CONFIANZA -->
<section class="py-5 text-center text-white bg-dark">
    <div class="container">
        <h2 class="mb-3 text-uppercase text-primary">Trusted. Certified. Experienced.</h2>
        <p>Over 15 years of helping people reach sustainable health through proven methods. Satisfaction guaranteed.</p>
        <img src="{{ asset('t1/img/certified-seal.png') }}" alt="Certified Seal" style="max-height: 80px;">
        <p class="mt-3">First consultation is <strong>no-commitment</strong>. Your journey starts without pressure.</p>
    </div>
</section>

<!-- ESTILOS ADICIONALES -->
<style>
    .testimonial-carousel .testimonial-item {
        background: rgba(255, 255, 255, 0.1);
        padding: 2rem;
        border-radius: 15px;
    }
    .testimonial-carousel .owl-nav { display: none; }
    .hero-section .content {
        z-index: 2;
        max-width: 800px;
    }
    .hero-section .overlay {
        z-index: 1;
    }
</style>
@endsection
