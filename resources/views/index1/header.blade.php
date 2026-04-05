    <!-- Header Start -->
    <div class="container-fluid bg-dark px-0">
        <div class="row gx-0">
            <div class="col-lg-3 bg-dark d-none d-lg-block">
                <a href="{{ route('root') }}" class="navbar-brand w-100 h-100 m-0 p-0 d-flex align-items-center justify-content-center">
                    <h1 class="m-0  fit-font">{{ t('Fit.Done.Well.') }}</h1>
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
                            <a href="{{ url('/services') }}" class="nav-item nav-link">{{ t('Services') }}</a>
                            <a href="{{ url('/our-programs') }}" class="nav-item nav-link">{{ t('programs') }}</a>
                            <a href="{{ route('main-events') }}" class="nav-item nav-link">{{ t('Events') }}</a>
                            <a href="{{ url('/#real_schedule') }}" class="nav-item nav-link">{{ t('Consultations') }}</a>


                            <div class="nav-item dropdown">
                                <a href="http://blog.fitdonewell.com" class="nav-link dropdown-toggle" data-bs-toggle="dropdown">Blog</a>
                                <div class="dropdown-menu rounded-0 m-0">
                                    <a href="https://blog.fitdonewell.com/category/strong-bodies/" class="dropdown-item">{{ t('Strong Bodies - Blog') }}</a>
                                    <a href="https://blog.fitdonewell.com/category/open-minds/" class="dropdown-item">{{ t('Open Minds - Blog') }}</a>
                                    <a href="https://blog.fitdonewell.com/category/kind-hearts/" class="dropdown-item">{{ t('Kind Hearts - Blog') }}</a>

                                </div>

                            </div>
                            <div class="nav-item dropdown">
                                <a href="http://blog.fitdonewell.com" class="nav-link dropdown-toggle" data-bs-toggle="dropdown">{{ t('Our Shop') }}</a>
                                <div class="dropdown-menu rounded-0 m-0">
                                    <a href="{{ url('/shop') }}" class="dropdown-item">{{ t('All Products') }}</a>

                                    <a href="{{ url('/products/booty') }}" class="dropdown-item">{{ t('Booty Bands') }}</a>
                                    <a href="{{ url('/products/sliders') }}" class="dropdown-item">{{ t('Exercise Sliders') }}</a>
                                    <a href="{{ url('/products/wrist-wraps') }}" class="dropdown-item">{{ t('Wrist Wraps') }}</a>
                                    <a href="{{ url('/products/ankle') }}" class="dropdown-item">{{ t('Ankle Straps') }}</a>
                                    <a href="{{ url('/wholesale') }}" class="dropdown-item">{{ t('wholesale') }}</a>


                                </div>
                            </div>

                            <a href="http://aplshop.com/j/824054" class="nav-item nav-link">{{ t('Supplements') }}</a>
                            <a href="{{ route('weekly-meal-prepping') }}" class="nav-item nav-link">{{ t('Meals') }}</a>


                            <a href="{{ route('contact-us') }}" class="nav-item nav-link active">{{ t('Contact') }}</a>

                            <div class="nav-item dropdown">
                                <a href="http://blog.fitdonewell.com" class="nav-link dropdown-toggle" data-bs-toggle="dropdown">{{ t('Clients') }}</a>
                                <div class="dropdown-menu rounded-0 m-0">
                                    @auth
                                        <a href="{{ url('/dashboard') }}" class="dropdown-item">{{ t('Dashboard') }}</a>
                                    @else
                                        <a href="{{ route('login') }}" class="dropdown-item"> {{ t('Login') }}</a>
                                        <a href="{{ route('register') }}" class="dropdown-item">{{ t('Register') }}</a>

                                    @endauth                                    
                                    <hr class="dropdown-divider"></a>
                                    @php $currentLang = request()->cookie('lang', 'en'); @endphp

                                    @if($currentLang === 'en')
                                        <a href="{{ route('set.lang', 'es') }}" class="dropdown-item">
                                            🌐 Español
                                        </a>
                                    @else
                                        <a href="{{ route('set.lang', 'en') }}" class="dropdown-item">
                                            🌐 English
                                        </a>
                                    @endif                                   

                                </div>
                            </div>
                        </div>
                    </div>
                </nav>
            </div>
        </div>
    </div>
    <!-- Header End -->