<!DOCTYPE html>
<html lang="en">
    <!--<< Header Area >>-->
    <head>
        <!-- ========== Meta Tags ========== -->
        <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <meta name="author" content="gramentheme">
        <meta name="description" content="Infotek - IT Solution & Technology HTML Template">
        <!-- ======== Page title ============ -->
        <title>@yield('title', 'Infotek - IT Solution & Technology HTML Template')</title>
        <!--<< Favcion >>-->
        <link rel="shortcut icon" href="{{ asset('img/favicon.svg') }}">
        <!--<< Bootstrap min.css >>-->
        <link rel="stylesheet" href="{{ asset('css/bootstrap.min.css') }}">
        <!--<< All Min Css >>-->
        <link rel="stylesheet" href="{{ asset('css/all.min.css') }}">
        <!--<< Animate.css >>-->
        <link rel="stylesheet" href="{{ asset('css/animate.css') }}">
        <!--<< Magnific Popup.css >>-->
        <link rel="stylesheet" href="{{ asset('css/magnific-popup.css') }}">
        <!--<< MeanMenu.css >>-->
        <link rel="stylesheet" href="{{ asset('css/meanmenu.css') }}">
        <!--<< Swiper Bundle.css >>-->
        <link rel="stylesheet" href="{{ asset('css/swiper-bundle.min.css') }}">
        <!--<< Nice Select.css >>-->
        <link rel="stylesheet" href="{{ asset('css/nice-select.css') }}">
        <!--<< Main.css >>-->
        <link rel="stylesheet" href="{{ asset('css/main.css') }}">
        @stack('styles')
    </head>
    <body>

        <!-- Preloader Start -->
       <!-- <div id="preloader" class="preloader">
            <div class="animation-preloader">
                <div class="spinner">                
                </div>
                <div class="txt-loading">
                    <span data-text-preloader="I" class="letters-loading">
                        I
                    </span>
                    <span data-text-preloader="N" class="letters-loading">
                        N
                    </span>
                    <span data-text-preloader="F" class="letters-loading">
                        F
                    </span>
                    <span data-text-preloader="O" class="letters-loading">
                        O
                    </span>
                    <span data-text-preloader="T" class="letters-loading">
                        T
                    </span>
                    <span data-text-preloader="E" class="letters-loading">
                        E
                    </span>
                    <span data-text-preloader="K" class="letters-loading">
                        K
                    </span>
                </div>
                <p class="text-center">Loading</p>
            </div>
            <div class="loader">
                <div class="row">
                    <div class="col-3 loader-section section-left">
                        <div class="bg"></div>
                    </div>
                    <div class="col-3 loader-section section-left">
                        <div class="bg"></div>
                    </div>
                    <div class="col-3 loader-section section-right">
                        <div class="bg"></div>
                    </div>
                    <div class="col-3 loader-section section-right">
                        <div class="bg"></div>
                    </div>
                </div>
            </div>
        </div>
<< Mouse Cursor Start >>-->  
        <div class="mouse-cursor cursor-outer"></div>
        <div class="mouse-cursor cursor-inner"></div>

        <!-- Offcanvas Area Start -->
        <div class="fix-area">
            <div class="offcanvas__info">
                <div class="offcanvas__wrapper">
                    <div class="offcanvas__content">
                        <div class="offcanvas__top mb-5 d-flex justify-content-between align-items-center">
                            <div class="offcanvas__logo">
                                <a href="{{ url('/') }}">
                                    <img src="{{ asset('img/logo/logo-summerfield new
                                    .png') }}" alt="logo-img">
                                </a>
                            </div>
                            <div class="offcanvas__close">
                                <button>
                                <i class="fas fa-times"></i>
                                </button>
                            </div>
                        </div>
                        <p class="text d-none d-lg-block">
                            Nullam dignissim, ante scelerisque the  is euismod fermentum odio sem semper the is erat, a feugiat leo urna eget eros. Duis Aenean a imperdiet risus.
                        </p>
                        <div class="mobile-menu fix mb-3"></div>
                        <div class="offcanvas__contact">
                            <h4>Contact Info</h4>
                            <ul>
                                <li class="d-flex align-items-center">
                                    <div class="offcanvas__contact-icon">
                                        <i class="fal fa-map-marker-alt"></i>
                                    </div>
                                    <div class="offcanvas__contact-text">
                                        <a target="_blank" href="#">Main Street, Melbourne, Australia</a>
                                    </div>
                                </li>
                                <li class="d-flex align-items-center">
                                    <div class="offcanvas__contact-icon mr-15">
                                        <i class="fal fa-envelope"></i>
                                    </div>
                                    <div class="offcanvas__contact-text">
                                        <a href="mailto:info@azent.com"><span class="mailto:info@example.com">info@example.com</span></a>
                                    </div>
                                </li>
                                <li class="d-flex align-items-center">
                                    <div class="offcanvas__contact-icon mr-15">
                                        <i class="fal fa-clock"></i>
                                    </div>
                                    <div class="offcanvas__contact-text">
                                        <a target="_blank" href="#">Mod-friday, 09am -05pm</a>
                                    </div>
                                </li>
                                <li class="d-flex align-items-center">
                                    <div class="offcanvas__contact-icon mr-15">
                                        <i class="far fa-phone"></i>
                                    </div>
                                    <div class="offcanvas__contact-text">
                                        <a href="tel:+11002345909">+11002345909</a>
                                    </div>
                                </li>
                            </ul>
                            <div class="header-button mt-4">
                              <!--  <a href="{{ url('/contact') }}" class="theme-btn text-center">
                                    <span>get A Quote<i class="fa-solid fa-arrow-right-long"></i></span>
                                </a>-->
                            </div>
                            <div class="social-icon d-flex align-items-center">
                                <a href="#"><i class="fab fa-facebook-f"></i></a>
                                <a href="#"><i class="fab fa-twitter"></i></a>
                                <a href="#"><i class="fab fa-youtube"></i></a>
                                <a href="#"><i class="fab fa-linkedin-in"></i></a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="offcanvas__overlay"></div>

        <!-- Header Section Start -->
        <header>
            <div class="header-top-section fix">
                <div class="container-fluid">
                    <div class="header-top-wrapper">
                        <ul class="contact-list">
                            <li>
                                <i class="far fa-envelope"></i>
                                <a href="mailto:info@example.com" class="link">info@example.com</a>
                            </li>
                            <li>
                                <i class="fa-solid fa-phone-volume"></i>
                                <a href="tel:2086660112">+208-666-0112</a>
                            </li>
                        </ul>
                        <div class="top-right">
                            <div class="social-icon d-flex align-items-center">
                                <span>Follow Us:</span>
                                <a href="#"><i class="fab fa-facebook-f"></i></a>
                               <!-- <a href="#"><i class="fab fa-twitter"></i></a>
                                <a href="#"><i class="fa-brands fa-linkedin-in"></i></a>
                                <a href="#"><i class="fa-brands fa-youtube"></i></a>-->
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div id="header-sticky" class="header-1">
                <div class="container-fluid">
                    <div class="mega-menu-wrapper">
                        <div class="header-main style-2">
                            <div class="header-left">
                                <div class="logo">
                                    <a href="{{ url('/') }}" class="header-logo">
                                        <img src="{{ asset('img/logo/logo-summerfield-new.png') }}" alt="logo-img" 
                                      style="height:60x; width: 60px; display:block;">
                                    </a>
                                </div>
                            </div>
                            <div class="header-right d-flex justify-content-end align-items-center">
                                <div class="mean__menu-wrapper">
                                    <div class="main-menu">
                                        <nav id="mobile-menu">
                                            <ul>
                                                <li class="has-dropdown active menu-thumb">
                                                    <a href="{{ url('/') }}">
                                                    Home 
                                                   <!-- <i class="fas fa-angle-down"></i>-->
                                                    </a>
                                                  <!--  <ul class="submenu has-homemenu">
                                                        <li>
                                                            <div class="homemenu-items">
                                                                <div class="homemenu">
                                                                    <div class="homemenu-thumb">
                                                                        <img src="{{ asset('img/header/home-1.jpg') }}" alt="img">
                                                                        <div class="demo-button">
                                                                            <a href="{{ url('/') }}" class="theme-btn">
                                                                                <span>Multi Page</span>
                                                                            </a>
                                                                            <a href="#" class="theme-btn">
                                                                                <span>One Page</span>
                                                                            </a>
                                                                        </div>
                                                                    </div>
                                                                    <div class="homemenu-content text-center">
                                                                        <h4 class="homemenu-title">
                                                                            Home 01
                                                                        </h4>
                                                                    </div>
                                                                </div>
                                                                <div class="homemenu">
                                                                    <div class="homemenu-thumb mb-15">
                                                                        <img src="{{ asset('img/header/home-2.jpg') }}" alt="img">
                                                                        <div class="demo-button">
                                                                            <a href="#" class="theme-btn">
                                                                                <span>Multi Page</span>
                                                                            </a>
                                                                            <a href="#" class="theme-btn">
                                                                                <span>One Page</span>
                                                                            </a>
                                                                        </div>
                                                                    </div>
                                                                    <div class="homemenu-content text-center">
                                                                        <h4 class="homemenu-title">
                                                                            Home 02
                                                                        </h4>
                                                                    </div>
                                                                </div>
                                                                <div class="homemenu">
                                                                    <div class="homemenu-thumb mb-15">
                                                                        <img src="{{ asset('img/header/home-3.jpg') }}" alt="img">
                                                                        <div class="demo-button">
                                                                            <a href="#" class="theme-btn">
                                                                                <span>Multi Page</span>
                                                                            </a>
                                                                            <a href="#" class="theme-btn">
                                                                                <span>One Page</span>
                                                                            </a>
                                                                        </div>
                                                                    </div>
                                                                    <div class="homemenu-content text-center">
                                                                        <h4 class="homemenu-title">
                                                                            Home 03
                                                                        </h4>
                                                                    </div>
                                                                </div>
                                                                <div class="homemenu">
                                                                    <div class="homemenu-thumb mb-15">
                                                                        <img src="{{ asset('img/header/home-4.jpg') }}" alt="img">
                                                                        <div class="demo-button">
                                                                            <a href="#" class="theme-btn">
                                                                                <span>Multi Page</span>
                                                                            </a>
                                                                            <a href="#" class="theme-btn">
                                                                                <span>One Page</span>
                                                                            </a>
                                                                        </div>
                                                                    </div>
                                                                    <div class="homemenu-content text-center">
                                                                        <h4 class="homemenu-title">
                                                                            Home 04
                                                                        </h4>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </li>
                                                    </ul>-->
                                                </li>
                        
                                                <li>
                                                    <a href="{{ url('/about') }}">About</a>
                                                </li>
                                                <li>
                                                    <a href="#">
                                                        Pages
                                                        <i class="fas fa-angle-down"></i>
                                                    </a>
                                                    <ul class="submenu">
                                                        <li><a href="{{ route('events') }}">Events</a></li>
                                                        <li><a href="{{ route('donations') }}">Donations</a></li>
                                                        <li><a href="{{ route('projects') }}">Future Projects</a></li>
                                                        <li><a href="{{ route('gallery') }}">Gallery</a></li>
                                                    </ul>
                                                </li>
                                              <!--  <li class="has-dropdown">
                                                    <a href="#">
                                                        Pages
                                                        <i class="fas fa-angle-down"></i>
                                                    </a>
                                                    <ul class="submenu">
                                                        <li class="has-dropdown">
                                                            <a href="#">
                                                                Projects
                                                            <i class="fas fa-angle-down"></i>
                                                            </a>
                                                            <ul class="submenu">
                                                                 <li><a href="#">Project</a></li>
                                                                <li><a href="#">Project Carousel</a></li>
                                                                <li><a href="#">Project Details</a></li>
                                                            </ul>
                                                        </li>
                                                        <li class="has-dropdown">
                                                            <a href="#">
                                                            Team
                                                            <i class="fas fa-angle-down"></i>
                                                            </a>
                                                            <ul class="submenu">
                                                                <li><a href="#">Our Team</a></li>
                                                                <li><a href="#">Team Carousel</a></li>
                                                                <li><a href="#">Team Details</a></li>
                                                            </ul>
                                                        </li>
                                                        <li><a href="#">Pricing</a></li>
                                                        <li><a href="#">Faq's</a></li>
                                                        <li><a href="#">404 Page</a></li>
                                                    </ul>
                                                </li>-->
                                                <li>
                                                    <a href="{{ route('frontend.team') }}">Team</a>
                                                   
                                                </li>
                                                <li>
                                                    <a href="{{ route('frontend.contact') }}">Contact</a>
                                                </li>
                                                <li>
                                                    <a href="{{ route('admin.login') }}">Admin Login</a>
                                                </li>
                                            </ul>
                                        </nav>
                                    </div>
                                </div>
                                <a href="#0" class="search-trigger search-icon"><i class="fal fa-search"></i></a>
                                <div class="header-button">
                                  <!--  <a href="{{ url('/contact') }}" class="theme-btn">
                                        <span>
                                            get A Quote
                                            <i class="fa-solid fa-arrow-right-long"></i>
                                        </span>
                                     </a>
                                </div>-->
                                <div class="header__hamburger d-xl-block my-auto">
                                    <div class="sidebar__toggle">
                                        <i class="fas fa-bars"></i>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </header>

        <!-- Search Area Start -->
        <div class="search-wrap">
            <div class="search-inner">
                <i class="fas fa-times search-close" id="search-close"></i>
                <div class="search-cell">
                    <form method="get">
                        <div class="search-field-holder">
                            <input type="search" class="main-search-input" placeholder="Search...">
                        </div>
                    </form>
                </div>
            </div>
        </div>

        @yield('content')

        <!--<< Footer Section Start >>-->
        <footer class="footer-section">
            <div class="footer-widgets-wrapper footer-bg">
                <div class="shape-1">
                    <img src="{{ asset('img/footer-shape-1.png') }}" alt="shape-img">
                </div>
                <div class="shape-2">
                    <img src="{{ asset('img/footer-shape-2.png') }}" alt="shape-img">
                </div>
                <div class="container">
                    <div class="row">
                        <div class="col-xl-3 col-lg-4 col-md-6 wow fadeInUp" data-wow-delay=".3s">
                            <div class="single-footer-widget">
                                <div class="widget-head">
                                    <a href="{{ url('/') }}">
                                       <div class="header-left">
                                <div class="logo">
                                    <a href="{{ url('/') }}" class="header-logo">
                                        <img src="{{ asset('img/logo/logo-summerfield-new.png') }}" alt="logo-img" 
                                      style="height:60x; width: 60px; display:block;">
                                    </a>
                                </div>
                            </div>
                                    </a>
                                </div>
                                <div class="footer-content">
                                    <p>
                                        Phasellus ultricies aliquam volutpat 
                                        ullamcorper laoreet neque, a lacinia
                                        curabitur lacinia mollis
                                    </p>
                                    <div class="social-icon d-flex align-items-center">
                                        <a href="#"><i class="fab fa-facebook-f"></i></a>
                                      
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-xl-2 col-lg-4 col-md-6 ps-lg-5 wow fadeInUp" data-wow-delay=".5s">
                            <div class="single-footer-widget">
                                <div class="widget-head">
                                    <h3>Quick Links</h3>
                                </div>
                                <ul class="list-area">
                                    <li>
                                        <a href="{{ url('/about') }}">
                                            <i class="fa-solid fa-chevron-right"></i>
                                            Infotech About
                                        </a>
                                    </li>
                                    <li>
                                        <a href="{{ url('/service') }}">
                                            <i class="fa-solid fa-chevron-right"></i>
                                            Our Services
                                        </a>
                                    </li>
                                    <li>
                                        <a href="#">
                                            <i class="fa-solid fa-chevron-right"></i>
                                            Our Blogs
                                        </a>
                                    </li>
                                    <li>
                                        <a href="#">
                                            <i class="fa-solid fa-chevron-right"></i>
                                            FAQ’S
                                        </a>
                                    </li>
                                    <li>
                                        <a href="{{ url('/contact') }}">
                                            <i class="fa-solid fa-chevron-right"></i>
                                            Contact Us
                                        </a>
                                    </li>
                                </ul>
                            </div>
                        </div>
                        <!--<div class="col-xl-4 col-lg-4 col-md-6 wow fadeInUp" data-wow-delay=".7s">
                            <div class="single-footer-widget style-margin">
                                <div class="widget-head">
                                    <h3>Recent Posts</h3>
                                </div>
                                <div class="recent-post-area">
                                    <div class="recent-post-items">
                                        <div class="thumb">
                                            <img src="{{ asset('img/news/pp1.jpg') }}" alt="post-img">
                                        </div>
                                        <div class="content">
                                            <ul class="post-date">
                                                <li>
                                                    <i class="fa-solid fa-calendar-days me-2"></i>
                                                    20 Feb, 2024
                                                </li>
                                            </ul>
                                            <h6>
                                                <a href="#">
                                                    Top 5 Most Famous <br>
                                                    Technology Trend In 2024
                                                </a>
                                            </h6>
                                        </div>
                                    </div>
                                    <div class="recent-post-items mb-0">
                                        <div class="thumb">
                                            <img src="{{ asset('img/news/pp2.jpg') }}" alt="post-img">
                                        </div>
                                        <div class="content">
                                            <ul class="post-date">
                                                <li>
                                                    <i class="fa-solid fa-calendar-days me-2"></i>
                                                    15 Dec, 2024
                                                </li>
                                            </ul>
                                            <h6>
                                                <a href="#">
                                                    The Surfing Man Will Blow <br>
                                                    Your Mind
                                                </a>
                                            </h6>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>-->
                        <div class="col-xl-3 col-lg-4 col-md-6 ps-xl-5 wow fadeInUp" data-wow-delay=".9s">
                            <div class="single-footer-widget">
                                <div class="widget-head">
                                    <h3>Contact Us</h3>
                                </div>
                                <div class="footer-content">
                                    <ul class="contact-info">
                                        <li>
                                            <i class="fas fa-map-marker-alt"></i>
                                            6391 Elgin St. Celina, USA
                                        </li>
                                        <li>
                                            <i class="fa-solid fa-phone-volume"></i>
                                            <a href="tel:2086660112">+208-666-0112</a>
                                        </li>
                                        <li>
                                            <i class="fa-regular fa-envelope"></i>
                                            <a href="mailto:infotech@gmail.com">Infotech@gmail.com</a>
                                        </li>
                                    </ul>
                            
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="footer-bottom">
                <div class="container">
                    <div class="footer-wrapper d-flex align-items-center justify-content-between">
                        <p class="wow fadeInLeft color-2" data-wow-delay=".3s">
                            © All Copyright 2026 by <a href="{{ url('/') }}">WELFARE_SOCIETY</a>
                        </p>
                        <ul class="footer-menu wow fadeInRight" data-wow-delay=".5s">
                            <li>
                                <a href="{{ url('/contact') }}">
                                    Terms & Condition
                                </a>
                            </li>
                            <li>
                                <a href="{{ url('/contact') }}">
                                    Privacy Policy
                                </a>
                            </li>
                        </ul>
                    </div>
                </div>
                <a href="#" id="scrollUp" class="scroll-icon">
                    <i class="far fa-arrow-up"></i>
                </a>
            </div>
        </footer>

        <!--<< All JS Plugins >>-->
        <script src="{{ asset('js/jquery-3.7.1.min.js') }}"></script>
        <!--<< Viewport Js >>-->
        <script src="{{ asset('js/viewport.jquery.js') }}"></script>
        <!--<< Bootstrap Js >>-->
        <script src="{{ asset('js/bootstrap.bundle.min.js') }}"></script>
        <!--<< Nice Select Js >>-->
        <script src="{{ asset('js/jquery.nice-select.min.js') }}"></script>
        <!--<< Waypoints Js >>-->
        <script src="{{ asset('js/jquery.waypoints.js') }}"></script>
        <!--<< Counterup Js >>-->
        <script src="{{ asset('js/jquery.counterup.min.js') }}"></script>
        <!--<< Swiper Slider Js >>-->
        <script src="{{ asset('js/swiper-bundle.min.js') }}"></script>
        <!--<< MeanMenu Js >>-->
        <script src="{{ asset('js/jquery.meanmenu.min.js') }}"></script>
        <!--<< Magnific Popup Js >>-->
        <script src="{{ asset('js/jquery.magnific-popup.min.js') }}"></script>
        <!--<< Wow Animation Js >>-->
        <script src="{{ asset('js/wow.min.js') }}"></script>
        <!--<< Main.js >>-->
        <script src="{{ asset('js/main.js') }}"></script>
        @stack('scripts')
    </body>
</html>
