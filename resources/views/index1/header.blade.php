    <!-- Header Start -->
    <div class="container-fluid bg-dark px-0">
        <div class="row gx-0">
            <div class="col-lg-3 bg-dark d-none d-lg-block">
                <a href="{{ route('root') }}" class="navbar-brand w-100 h-100 m-0 p-0 d-flex align-items-center justify-content-center">
                    <h1 class="m-0  fit-font">Fit.Done.Well.</h1>
                </a>
            </div>
            <div class="col-lg-9">

                <nav class="navbar navbar-expand-lg bg-dark navbar-dark p-3 p-lg-0 px-lg-5">
                    <a href="http://fitdonewell.com/" class="navbar-brand d-block d-lg-none">
                        <h1 class="m-0   fit-font">Fit.Done.Well.</h1>

                    </a>
                    <button type="button" class="navbar-toggler" data-bs-toggle="collapse" data-bs-target="#navbarCollapse">
                        <span class="navbar-toggler-icon"></span>
                    </button>
                    <div class="collapse navbar-collapse justify-content-between" id="navbarCollapse">
                        <div class="navbar-nav mr-auto py-0">
                            <a href="{{ url('/services') }}" class="nav-item nav-link">Services</a>
                            <a href="{{ url('/our-programs') }}" class="nav-item nav-link">Programs</a>
                            <a href="https://www.amazon.com/s?me=A3ICCKPR3TSRVY&ref=sf_seller_app_share_new" class="nav-item nav-link">Products</a>
                            <a href="{{ route('main-events') }}" class="nav-item nav-link">Events</a>
                            <a href="{{ url('/#real_schedule') }}" class="nav-item nav-link">Consultations</a>


                            <div class="nav-item dropdown">
                                <a href="http://blog.fitdonewell.com" class="nav-link dropdown-toggle" data-bs-toggle="dropdown">Blog</a>
                                <div class="dropdown-menu rounded-0 m-0">
                                    <a href="https://blog.fitdonewell.com/category/strong-bodies/" class="dropdown-item">Strong Bodies - Blog</a>
                                    <a href="https://blog.fitdonewell.com/category/open-minds/" class="dropdown-item">Open Minds - Blog</a>
                                    <a href="https://blog.fitdonewell.com/category/kind-hearts/" class="dropdown-item">Kind Hearts - Blog</a>

                                </div>

                            </div>
                            <div class="nav-item dropdown">
                                <a href="http://blog.fitdonewell.com" class="nav-link dropdown-toggle" data-bs-toggle="dropdown">Our Shop</a>
                                <div class="dropdown-menu rounded-0 m-0">
                                    <a href="{{ url('/products/booty') }}" class="dropdown-item">Booty Bands</a>
                                    <a href="{{ url('/products/sliders') }}" class="dropdown-item">Exercise Sliders</a>
                                    <a href="https://blog.fitdonewell.com/category/kind-hearts/" class="dropdown-item">Kind Hearts - Blog</a>
                                </div>
                            </div>

                            <a href="http://aplshop.com/j/824054" class="nav-item nav-link">Supplements</a>
                            <a href="{{ route('weekly-meal-prepping') }}" class="nav-item nav-link">Meals</a>


                            <a href="{{ route('contact-us') }}" class="nav-item nav-link active">Contact</a>

                            <div class="nav-item dropdown">
                                <a href="http://blog.fitdonewell.com" class="nav-link dropdown-toggle" data-bs-toggle="dropdown">Clients</a>
                                <div class="dropdown-menu rounded-0 m-0">
                                    @auth
                                        <a href="{{ url('/dashboard') }}" class="dropdown-item">Dashboard</a>
                                    @else
                                        <a href="{{ route('login') }}" class="dropdown-item"> Login</a>
                                        <a href="{{ route('register') }}" class="dropdown-item">Register</a>

                                    @endauth                                    
                                </div>
                            </div>
                        </div>
                    </div>
                </nav>
            </div>
        </div>
    </div>
    <!-- Header End -->