    <style>
        .marquee {
            display: flex;
            white-space: nowrap;
        }

        .marquee img {
            height: 250px;
            width: 400px;
            object-fit: cover;
            border-radius: 10px;
            box-shadow: 0 4px 6px rgba(0, 0, 0, 0.3);
            margin-right: 10px;
            user-select: none;
            pointer-events: none;
        }
    </style>

    <script>
        document.addEventListener('DOMContentLoaded', () => {
            const marquee = document.getElementById('marquee');

            const marqueeContent = marquee.innerHTML;
            marquee.innerHTML += marqueeContent;

            let scrollAmount = 0;
            const speed = 1.5;

            function animate() {
                scrollAmount += speed;
                if (scrollAmount >= marquee.scrollWidth / 2) {
                    scrollAmount = 0;
                }
                marquee.style.transform = `translateX(${-scrollAmount}px)`;
                requestAnimationFrame(animate);
            }

            animate();
        });
    </script>


        <div class="container text-center mt-4 mb-4">
            <div class="row">
                <div class="col-lg-12 col-md-12 text-center">
                </div>
            </div>
        </div>


        <div class="marquee-wrapper" style="overflow:hidden; width: 100%; background:black; padding:10px;">
            <div class="marquee" id="marquee">
                <img src="{{ asset('t1/img/kshop1.webp') }}" alt="Shop Image">
                <img src="{{ asset('t1/img/kshop2.webp') }}" alt="Shop Image">
                <img src="{{ asset('t1/img/kshop3.webp') }}" alt="Shop Image">
                <img src="{{ asset('t1/img/kshop4.webp') }}" alt="Shop Image">
                <img src="{{ asset('t1/img/kshop5.webp') }}" alt="Shop Image">
                <img src="{{ asset('t1/img/kshop6.webp') }}" alt="Shop Image">


                <img src="{{ asset('t1/img/marquee/c1.webp') }}" alt="Shop Image">
                <img src="{{ asset('t1/img/marquee/c2.webp') }}" alt="Shop Image">
                <img src="{{ asset('t1/img/marquee/c3.webp') }}" alt="Shop Image">
                <img src="{{ asset('t1/img/marquee/c4.webp') }}" alt="Shop Image">
                <img src="{{ asset('t1/img/marquee/c5.webp') }}" alt="Shop Image">
                <img src="{{ asset('t1/img/marquee/c7.webp') }}" alt="Shop Image">
            </div>
        </div>

<style>
    .cta-overlay-wrapper {
        position: relative;
        width: 100%;
        height: 100px; /* Ajusta esta altura según el alto real del marquee */
    }

    .cta-overlay-button {
        position: absolute;
        top: 35%; /* ahora sí sube */
        left: 50%;
        transform: translate(-50%, -50%);
        z-index: 10;
        background-color: #ffc107;
        color: black;
        padding: 1rem 2rem;
        font-weight: bold;
        text-transform: uppercase;
        border-radius: 5px;
        text-decoration: none;
        box-shadow: 0 4px 12px rgba(0,0,0,0.3);
    }
</style>


<div class="cta-overlay-wrapper">
    
</div>

    <div class="container-fluid px-0 mt-3 mb-3 amazon-shop">
        <div class="mb-5 text-center">
            <h5 class="text-primary text-uppercase fs-2 "><strong>Our Shop in Amazon</strong> </h5>
            <div class="row">
                <div class="col-6 col-md-6">
                    <a href="https://www.amazon.com/s?me=A3ICCKPR3TSRVY&ref=sf_seller_app_share_new">
                        <img src="{{ asset('t1/img/amazon1.png') }}" alt="" class="img-fluid">
                    </a>
                </div>
                <div class="col-6  col-md-6">
                    <a href="https://www.amazon.com/s?me=A3ICCKPR3TSRVY&ref=sf_seller_app_share_new">
                        <img src="{{ asset('t1/img/amazon2.png') }}" alt="" class="img-fluid">
                    </a>
                </div>
                <div class="col-6  col-md-6">
                    <a href="https://www.amazon.com/s?me=A3ICCKPR3TSRVY&ref=sf_seller_app_share_new">
                        <img src="{{ asset('t1/img/amazon3.png') }}" alt="" class="img-fluid">
                    </a>
                </div>

                <div class="col-6  col-md-6">
                    <a href="https://a.co/d/2suGmx9">
                        <img src="{{ asset('t1/img/amazon8.png?v=2') }}" alt="" class="img-fluid">
                    </a>
                </div>


            </div>
        </div>
    </div>