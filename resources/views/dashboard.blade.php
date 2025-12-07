<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Fit Done Well | Client Dashboard</title>
    
        <!-- Favicon -->
    <link href="{{ asset('t1/img/favicon.ico') }}" rel="icon">

    <!-- Google Web Fonts -->
    <link rel="preconnect" href="https://fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css2?family=Oswald:wght@400;500;600;700&family=Rubik&display=swap" rel="stylesheet">

    <!-- Icon Font Stylesheet -->
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.0/css/all.min.css" rel="stylesheet">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.4.1/font/bootstrap-icons.css" rel="stylesheet">
    <link href="{{ asset('t1/lib/flaticon/font/flaticon.css') }}" rel="stylesheet">

    <!-- Libraries Stylesheet -->
    <link href="{{ asset('t1/lib/owlcarousel/assets/owl.carousel.min.css') }}" rel="stylesheet">

    <!-- Customized Bootstrap Stylesheet -->
    <link href="{{ asset('t1/css/bootstrap.min.css') }}" rel="stylesheet">

    <!-- Template Stylesheet -->
     <link href="{{ asset('t1/css/style.css') }}?ver={{ rand(1,10000) }}" rel="stylesheet">

    <style>
        :root {
            --fdw-yellow: #FCD804; /* Amarillo Solicitado */
            --sidebar-bg: #1a1c20;
            --header-bg: #222429;
            --content-bg: #ffffff; /* Fondo Blanco */
            --text-color: #b0b0b0; 
            --sidebar-width: 260px;
        }

        body {
            background-color: var(--content-bg);
            font-family: 'Segoe UI', Tahoma, Geneva, Verdana, sans-serif;
            overflow-x: hidden;
        }

        /* --- Sidebar --- */
        #sidebar {
            min-width: var(--sidebar-width);
            max-width: var(--sidebar-width);
            background: var(--sidebar-bg);
            color: #fff;
            transition: all 0.3s;
            position: fixed;
            height: 100vh;
            z-index: 1000;
            overflow-y: auto;
        }

        #sidebar::-webkit-scrollbar { width: 6px; }
        #sidebar::-webkit-scrollbar-thumb { background: #333; border-radius: 3px; }

        #sidebar .sidebar-header {
            padding: 20px;
            background: rgba(0,0,0,0.1);
            border-bottom: 1px solid rgba(255,255,255,0.05);
        }

        #sidebar .brand-text {
            color: var(--fdw-yellow);
            font-weight: 700;
            font-size: 1.5rem;
            letter-spacing: 1px;
            text-decoration: none;
        }

        .sidebar-label {
            padding: 15px 25px 5px 25px;
            font-size: 0.75rem;
            text-transform: uppercase;
            letter-spacing: 1.5px;
            color: #6c757d;
            font-weight: 600;
        }

        #sidebar ul.components { padding: 0; margin-bottom: 20px; }

        #sidebar ul li a {
            padding: 12px 25px;
            font-size: 0.95rem;
            display: block;
            color: var(--text-color);
            text-decoration: none;
            transition: 0.2s;
            border-left: 3px solid transparent;
        }

        #sidebar ul li a:hover, #sidebar ul li a.active {
            color: #fff;
            background: rgba(255,255,255,0.05);
            border-left: 3px solid var(--fdw-yellow);
        }

        #sidebar ul li a i {
            margin-right: 12px;
            width: 20px;
            text-align: center;
            color: #888;
        }
        
        #sidebar ul li a:hover i { color: var(--fdw-yellow); }

        .show-more-btn {
            font-size: 0.85rem;
            color: var(--fdw-yellow) !important;
            font-style: italic;
            cursor: pointer;
        }
        .show-more-btn i { font-size: 0.7rem; }

        /* --- Content & Layout --- */
        #content {
            width: 100%;
            margin-left: var(--sidebar-width);
            transition: all 0.3s;
            min-height: 100vh;
            display: flex;
            flex-direction: column;
            background-color: var(--content-bg); /* APLICADO: Fondo Blanco */
        }

        .navbar-custom {
            background-color: var(--header-bg);
            padding: 15px 30px;
            color: #fff;
            box-shadow: 0 2px 10px rgba(0,0,0,0.05);
        }

        .btn-toggle-sidebar {
            background: transparent;
            border: none;
            color: var(--fdw-yellow);
            font-size: 1.5rem;
            cursor: pointer;
        }

        /* --- Mobile --- */
        @media (max-width: 992px) {
            #sidebar { margin-left: calc(var(--sidebar-width) * -1); }
            #sidebar.active { margin-left: 0; box-shadow: 5px 0 15px rgba(0,0,0,0.3); }
            #content { margin-left: 0; }
            .overlay {
                display: none;
                position: fixed;
                width: 100vw;
                height: 100vh;
                background: rgba(0,0,0,0.7);
                z-index: 998;
                opacity: 0;
                transition: all 0.3s;
            }
            .overlay.active { display: block; opacity: 1; }
        }
    </style>
</head>
<body>

    <div class="overlay" id="overlay"></div>

    <div class="d-flex">
        <nav id="sidebar">
            <div class="sidebar-header text-center">
                <a href="#" class="brand-text fit-font">Fit <span class="yellow">Done</span> Well</a>
            </div>

            <div class="sidebar-label">Main Menu</div>
            <ul class="list-unstyled components">
                <li><a href="{{ url('/profile') }}" class="active"><i class="fas fa-user"></i> My profile</a></li>
            </ul>

            <div class="sidebar-label">My Life Transformation</div>
            <ul class="list-unstyled components">
                <li><a href="#"><i class="fas fa-dumbbell"></i> Hypertrophy 101</a></li>
                <li><a href="#"><i class="fas fa-carrot"></i> Keto Plan</a></li>
                <li><a href="#"><i class="fas fa-running"></i> Marathon Prep</a></li>
                
                <div class="collapse" id="libraryCollapse">
                    <li><a href="#"><i class="fas fa-spa"></i> Yoga Basics</a></li>
                    <li><a href="#"><i class="fas fa-heartbeat"></i> Cardio Blast</a></li>
                </div>

                <li>
                    <a href="#libraryCollapse" data-bs-toggle="collapse" class="show-more-btn" role="button" onclick="toggleText(this)">
                        <i class="fas fa-chevron-down"></i> <span class="btn-text">Show more...</span>
                    </a>
                </li>
            </ul>

            <div class="sidebar-label">Marketplace</div>
            <ul class="list-unstyled components">
                <li><a href="#"><i class="fas fa-medal"></i> Elite Coaching</a></li>
                <li><a href="#"><i class="fas fa-box-open"></i> Supplement Box</a></li>
                <li><a href="#"><i class="fas fa-tshirt"></i> FDW Gear</a></li>
                
                <div class="collapse" id="marketCollapse">
                    <li><a href="#"><i class="fas fa-video"></i> Video Analysis</a></li>
                    <li><a href="#"><i class="fas fa-book"></i> E-Books</a></li>
                </div>

                <li>
                    <a href="#marketCollapse" data-bs-toggle="collapse" class="show-more-btn" role="button" onclick="toggleText(this)">
                        <i class="fas fa-chevron-down"></i> <span class="btn-text">Show more...</span>
                    </a>
                </li>
            </ul>

            <div class="sidebar-label">System</div>
            <ul class="list-unstyled components">
                <li><a href="#"><i class="fas fa-cog"></i> Settings</a></li>
                <li><a href="#"><i class="fas fa-sign-out-alt"></i> Logout</a></li>
            </ul>
        </nav>

        <div id="content">
            <nav class="navbar navbar-custom d-flex justify-content-between align-items-center">
                <div class="d-flex align-items-center">
                    <button type="button" id="sidebarCollapse" class="btn-toggle-sidebar d-lg-none me-3">
                        <i class="fas fa-bars"></i>
                    </button>
                    <h5 class="m-0 d-none d-sm-block text-white">Client Dashboard</h5>
                </div>

                <div class="d-flex align-items-center">
                    <a href="#" class="nav-icon-btn position-relative text-white me-4">
                        <i class="fas fa-bell"></i>
                        <span class="position-absolute top-0 start-100 translate-middle badge rounded-pill bg-danger" style="font-size: 0.5rem;">3</span>
                    </a>
                    
                    <div class="dropdown">
                        <a href="#" class="d-flex align-items-center text-white text-decoration-none dropdown-toggle" data-bs-toggle="dropdown">
                            <img src="https://ui-avatars.com/api/?name=Admin+User&background=FCD804&color=000" class="rounded-circle me-2" width="32">
                            <span class="d-none d-sm-inline">Admin</span>
                        </a>
                        <ul class="dropdown-menu dropdown-menu-end dropdown-menu-dark shadow">
                            <li><a class="dropdown-item" href="{{ url('/profile') }}">Profile</a></li>
                            <li><hr class="dropdown-divider"></li>
                            <form method="POST" action="{{ route('logout') }}">
                                @csrf
                                <button type="submit" class="dropdown-item">
                                    Logout
                                </button>
                            </form>
                        </ul>
                    </div>
                </div>
            </nav>

            <div class="container-fluid p-4">
                @yield('content')
            </div>
        </div>
    </div>

    
    <script>
        // Sidebar Toggle
        const sidebar = document.getElementById('sidebar');
        const overlay = document.getElementById('overlay');
        const btn = document.getElementById('sidebarCollapse');
        
        function toggleSidebar() {
            sidebar.classList.toggle('active');
            overlay.classList.toggle('active');
        }
        btn.addEventListener('click', toggleSidebar);
        overlay.addEventListener('click', toggleSidebar);

        // Toggle Text
        function toggleText(element) {
            const span = element.querySelector('.btn-text');
            const icon = element.querySelector('i');
            setTimeout(() => {
                if (element.classList.contains('collapsed')) {
                    span.textContent = "Show more...";
                    icon.classList.replace('fa-chevron-up', 'fa-chevron-down');
                } else {
                    span.textContent = "Show less";
                    icon.classList.replace('fa-chevron-down', 'fa-chevron-up');
                }
            }, 50);
        }
    </script>
        <!-- JavaScript Libraries -->
    <script src="https://code.jquery.com/jquery-3.4.1.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0/dist/js/bootstrap.bundle.min.js"></script>
    <script src="{{ asset('t1/lib/easing/easing.min.js') }}"></script>
    <script src="{{ asset('t1/lib/waypoints/waypoints.min.js') }}"></script>
    <script src="{{ asset('t1/lib/counterup/counterup.min.js') }}"></script>
    <script src="{{ asset('t1/lib/owlcarousel/owl.carousel.min.js') }}"></script>

    <!-- Template Javascript -->
    <script src="{{ asset('t1/js/main.js') }}?ver=<?php echo rand(1, 10000); ?>"></script>
</body>
</html>