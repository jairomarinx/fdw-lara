@extends('index1.app')

@section('title', 'Wholesale | Fit.Done.Well.')

@section('index1.content')

@php
    // Kits de Inicio (Prioridad Alta)
    $kits = [
        'retail-starter' => [
            'name' => 'RETAIL STARTER KIT',
            'units' => '40 Units (10 each)',
            'price' => 375.00,
            'retail_value' => '540.00',
            'cop' => '1.350.000',
            'desc' => 'Complete inventory to start selling. Includes Bands, Sliders, Ankle & Wrist Straps.',
            'image' => asset('main_booty.jpg'), // Cambiar por imagen de grupo si existe
            'badge' => 'BEST VALUE'
        ],
        'gym-starter' => [
            'name' => 'GYM STARTER KIT',
            'units' => '20 Units (5 each)',
            'price' => 187.50,
            'retail_value' => '270.00',
            'cop' => '675.000',
            'desc' => 'Perfect for small studios or gym boutiques looking to equip their community.',
            'image' => asset('pw1.jpg'), 
            'badge' => 'POPULAR'
        ],
    ];

    // Reordenes Individuales
    $reorders = [
        'bands-and-bag' => [
            'name' => 'BANDS + BAG',
            'price' => 9.99,
            'cop' => '40.000',
            'image' => asset('main_booty.jpg'),
            'badge' => 'REORDER'
        ],
        'wholesale-sliders' => [
            'name' => 'CORE SLIDERS',
            'price' => 3.99,
            'cop' => '15.000',
            'image' => asset('pslider1.jpg'),
            'badge' => 'REORDER'
        ],
        'wholesale-ankle-straps' => [
            'name' => 'ANKLE STRAPS',
            'price' => 7.99,
            'cop' => '30.000',
            'image' => asset('pa1.jpg'),
            'badge' => 'REORDER'
        ],
        'wholesale-wrist-straps' => [
            'name' => 'WRIST STRAPS',
            'price' => 4.99,
            'cop' => '20.000',
            'image' => asset('pw1.jpg'),
            'badge' => 'REORDER'
        ],
    ];
@endphp

<style>
    .fdw-hero-shop { text-align:center; padding: 60px 0; }
    .fdw-hero-shop h1 { font-weight: 900; text-transform: uppercase; }
    
    .section-title { 
        font-weight: 900; 
        text-align: center; 
        margin-top: 50px; 
        text-transform: uppercase;
        border-bottom: 2px solid #FCD804;
        display: inline-block;
        margin-bottom: 30px;
    }

    .fdw-grid { 
        display: grid; 
        grid-template-columns: repeat(auto-fit, minmax(300px, 1fr)); 
        gap: 25px; 
        padding-bottom: 60px;
    }

    .fdw-item-card { 
        border: 1px solid rgba(0,0,0,.05); 
        border-radius: 15px; 
        background: #fff; 
        transition: .3s; 
    }
    
    .fdw-item-card:hover { transform: translateY(-5px); box-shadow: 0 15px 30px rgba(0,0,0,.1); }

    .fdw-img-wrap { height: 250px; position: relative; background: #f9f9f9; border-radius: 15px 15px 0 0; overflow: hidden; }
    .fdw-img-wrap img { width: 100%; height: 100%; object-fit: cover; }

    .price-box { background: #f8f9fa; border-radius: 10px; padding: 15px; margin: 15px 0; }
    .fdw-price-now { font-size: 22px; font-weight: 900; display: block; }
    .fdw-price-cop { font-size: 16px; color: #28a745; font-weight: 700; }
    .retail-value { font-size: 12px; color: #6c757d; text-decoration: line-through; }

    .btn-buy { 
        display: block; 
        background: #000; 
        color: #fff; 
        text-align: center; 
        padding: 12px; 
        border-radius: 8px; 
        text-decoration: none; 
        font-weight: 800; 
        text-transform: uppercase;
        transition: .3s;
    }
    .btn-buy:hover { background: #FCD804; color: #000; }

    .fdw-badge-top { 
        position: absolute; top: 10px; right: 10px; 
        background: #FCD804; color: #000; font-size: 10px; font-weight: 900; 
        padding: 5px 12px; border-radius: 20px; 
    }
</style>

<div class="container">
    <div class="fdw-hero-shop">
        <h1>Wholesale Program</h1>
        <p>Professional tools for gyms, studios, and retailers. Elevate your training community with Fit.Done.Well.</p>
    </div>

    <div class="text-center">
        <h2 class="section-title">Starter Kits</h2>
    </div>
    <div class="fdw-grid">
        @foreach($kits as $key => $kit)
        <div class="fdw-item-card">
            <div class="fdw-img-wrap">
                <img src="{{ $kit['image'] }}" alt="{{ $kit['name'] }}">
                <span class="fdw-badge-top">{{ $kit['badge'] }}</span>
            </div>
            <div class="p-4">
                <h3 class="mb-1" style="font-weight: 900;">{{ $kit['name'] }}</h3>
                <small class="text-muted d-block mb-3">{{ $kit['units'] }}</small>
                <p style="font-size: 14px; color: #555;">{{ $kit['desc'] }}</p>
                
                <div class="price-box">
                    <span class="retail-value">Retail Value: ${{ $kit['retail_value'] }} USD</span>
                    <span class="fdw-price-now">${{ number_format($kit['price'], 2) }} USD</span>
                    <span class="fdw-price-cop">{{ $kit['cop'] }} COP</span>
                </div>
                
                <a href="{{ url('general-checkout/'.$key) }}" class="btn-buy">Purchase Kit</a>
            </div>
        </div>
        @endforeach
    </div>

    <div class="text-center">
        <h2 class="section-title">Individual Reorders</h2>
        <p class="mb-4">Exclusive wholesale prices for restocking your inventory.</p>
    </div>
    <div class="fdw-grid" style="grid-template-columns: repeat(auto-fit, minmax(240px, 1fr));">
        @foreach($reorders as $key => $item)
        <div class="fdw-item-card">
            <div class="fdw-img-wrap" style="height: 180px;">
                <img src="{{ $item['image'] }}" alt="{{ $item['name'] }}">
            </div>
            <div class="p-3 text-center">
                <h4 style="font-weight: 900; font-size: 16px;">{{ $item['name'] }}</h4>
                <div class="my-2">
                    <span class="d-block font-weight-bold" style="font-size: 18px;">${{ $item['price'] }} USD</span>
                    <span class="text-success small font-weight-bold">{{ $item['cop'] }} COP</span>
                </div>
                <a href="{{ url('general-checkout/'.$key) }}" class="btn-buy" style="font-size: 12px; padding: 8px;">Order</a>
            </div>
        </div>
        @endforeach
    </div>
</div>

<div class="fdw-philosophy text-center">
    <h2>Strong Bodies. Open Minds. Kind Hearts.</h2>
    <p>We equip the spaces where transformation happens.</p>
</div>

@endsection