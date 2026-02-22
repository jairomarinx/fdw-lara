@extends('index1.app')

@section('title', 'Official Store | Fit.Done.Well.')

@section('index1.content')

@php
    $products = [
        'wrist-straps' => [
            'slug' => '/products/wrist-wraps',
            'name' => 'WRIST STRAPS',
            'price' => 10,
            'old_price' => 25,
            'desc' => 'Lift with intention. Support your grip. Train without fear of losing the bar.',
            'image' => asset('rwrist1.jpg'),
            'badge' => 'STRENGTH'
        ],
        'sliders' => [
            'slug' => '/products/sliders',
            'name' => 'CORE SLIDERS',
            'price' => 8,
            'old_price' => 20,
            'desc' => 'Controlled instability that builds real core strength without punishing your joints.',
            'image' => asset('slider1.jpg'),
            'badge' => 'CONTROL'
        ],
        'booty-bands' => [
            'slug' => '/products/booty',
            'name' => 'BOOTY BANDS',
            'price' => 15,
            'old_price' => 30,
            'desc' => 'Activate glutes properly. Feel every rep. No slipping. No distractions.',
            'image' => asset('booty2.webp'),
            'badge' => 'ACTIVATE'
        ],
        'ankle-straps' => [
            'slug' => '/products/ankle',
            'name' => 'ANKLE STRAPS',
            'price' => 19,
            'old_price' => 35,
            'desc' => 'Cable precision for glute and lower body work. Comfort meets performance.',
            'image' => asset('ankle1.jpg'),
            'badge' => 'PRECISION'
        ],
    ];
@endphp

<style>
    .fdw-hero-shop {
        text-align:center;
        padding: 60px 0 30px 0;
    }

    .fdw-hero-shop h1 {
        font-weight: 900;
        text-transform: uppercase;
        letter-spacing: 1px;
        margin-bottom: 10px;
    }

    .fdw-hero-shop p {
        max-width: 620px;
        margin: 0 auto;
        color: #6c757d;
        font-size: 16px;
    }

    .fdw-grid {
        display: grid;
        grid-template-columns: repeat(auto-fit, minmax(280px, 1fr));
        gap: 30px;
        padding: 40px 0 80px 0;
    }

    .fdw-item-card {
        border: 1px solid rgba(34,36,41,.08);
        border-radius: 18px;
        overflow: hidden;
        transition: .3s;
        background: #fff;
    }

    .fdw-item-card:hover {
        transform: translateY(-6px);
        border-color: #FCD804;
        box-shadow: 0 18px 40px rgba(0,0,0,.08);
    }

    .fdw-img-wrap {
        height: 320px;
        background: #f5f5f5;
        overflow: hidden;
        position: relative;
    }

    .fdw-img-wrap img {
        width: 100%;
        height: 100%;
        object-fit: cover;
        object-position: top center; /* prioriza cabezas */
        transition: .4s;
    }

    .fdw-item-card:hover img {
        transform: scale(1.05);
    }

    .fdw-badge-top {
        position: absolute;
        top: 16px;
        right: 16px;
        background: #222429;
        color: #fff;
        font-size: 12px;
        font-weight: 800;
        padding: 8px 12px;
        border-radius: 999px;
        letter-spacing: .5px;
    }

    .fdw-price-now {
        font-size: 26px;
        font-weight: 900;
        color: #222429;
    }

    .fdw-price-old {
        text-decoration: line-through;
        color: #6c757d;
        font-size: 14px;
        margin-right: 8px;
    }

    .fdw-btn-view {
        display: block;
        width: 100%;
        text-align: center;
        background: #FCD804;
        color: #000;
        font-weight: 900;
        padding: 14px;
        border-radius: 10px;
        text-decoration: none;
        text-transform: uppercase;
        font-size: 14px;
        letter-spacing: .8px;
        transition: .2s;
    }

    .fdw-btn-view:hover {
        transform: translateY(-2px);
        filter: brightness(.95);
    }

    .fdw-philosophy {
        background: #222429;
        color: #fff;
        padding: 80px 20px;
        text-align: center;
    }

    .fdw-philosophy h2 {
        font-weight: 900;
        margin-bottom: 20px;
    }

    .fdw-philosophy p {
        max-width: 700px;
        margin: 0 auto;
        opacity: .85;
    }
</style>

<div class="container">

    <div class="fdw-hero-shop fdw-fadein" data-fade>
        <span class="fdw-pill mb-3">OFFICIAL STORE</span>
        <h1>Train With Intention</h1>
        <p>
            We do not sell equipment.  
            We offer tools that help you build strong bodies, open minds, and kind hearts.  
            Every product here exists for one reason: to support disciplined, intelligent training.
        </p>
    </div>

    <div class="fdw-grid">
        @foreach($products as $key => $item)
        <div class="fdw-item-card fdw-fadein" data-fade>

            <div class="fdw-img-wrap">
                <img src="{{ $item['image'] }}" alt="{{ $item['name'] }}">
                <span class="fdw-badge-top">{{ $item['badge'] }}</span>
            </div>

            <div class="p-4">
                <h3 style="font-weight: 900; font-size: 18px; margin-bottom: 10px;">
                    {{ $item['name'] }}
                </h3>

                <p class="fdw-micro mb-3" style="min-height: 48px;">
                    {{ $item['desc'] }}
                </p>

                <div class="mb-4">
                    <span class="fdw-price-old">${{ $item['old_price'] }}</span>
                    <span class="fdw-price-now">${{ $item['price'] }}</span>
                </div>

                <a href="{{ url($item['slug']) }}" class="fdw-btn-view">
                    Explore Product
                </a>
            </div>

        </div>
        @endforeach
    </div>

</div>

<div class="fdw-philosophy">
    <h2>Strong Bodies. Open Minds. Kind Hearts.</h2>
    <p>
        Discipline builds character.  
        Movement builds clarity.  
        Strength builds responsibility.  
        Train not to impress. Train to become.
    </p>
</div>

<script>
    const fades = document.querySelectorAll('[data-fade]');
    const io = new IntersectionObserver((entries) => {
        entries.forEach(en => {
            if (en.isIntersecting) en.target.classList.add('show');
        });
    }, { threshold: 0.1 });
    fades.forEach(el => io.observe(el));
</script>

@endsection