<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <title>@yield('title', 'Community Organization')</title>
        <link rel="shortcut icon" href="{{ asset('img/favicon.svg') }}">
        <link rel="stylesheet" href="{{ asset('css/bootstrap.min.css') }}">
        <link rel="stylesheet" href="{{ asset('css/all.min.css') }}">
        <link rel="stylesheet" href="{{ asset('css/animate.css') }}">
        <link rel="stylesheet" href="{{ asset('css/magnific-popup.css') }}">
        <link rel="stylesheet" href="{{ asset('css/meanmenu.css') }}">
        <link rel="stylesheet" href="{{ asset('css/swiper-bundle.min.css') }}">
        <link rel="stylesheet" href="{{ asset('css/nice-select.css') }}">
        <link rel="stylesheet" href="{{ asset('css/main.css') }}">
    </head>
    <body>
        <div id="preloader" class="preloader">
            <div class="animation-preloader">
                <div class="spinner"></div>
                <div class="txt-loading">
                    <span data-text-preloader="L" class="letters-loading">L</span>
                    <span data-text-preloader="O" class="letters-loading">O</span>
                    <span data-text-preloader="A" class="letters-loading">A</span>
                    <span data-text-preloader="D" class="letters-loading">D</span>
                    <span data-text-preloader="I" class="letters-loading">I</span>
                    <span data-text-preloader="N" class="letters-loading">N</span>
                    <span data-text-preloader="G" class="letters-loading">G</span>
                </div>
            </div>
        </div>

        <header>
            <div id="header-sticky" class="header-1">
                <div class="container-fluid">
                    <div class="mega-menu-wrapper">
                        <div class="header-main style-2">
                            <div class="header-left">
                                <div class="logo">
                                    <a href="{{ route('home') }}" class="header-logo">
                                        <img src="{{ asset('img/logo/black-logo.svg') }}" alt="logo-img" width="150">
                                    </a>
                                </div>
                            </div>
                            <div class="header-right d-flex justify-content-end align-items-center">
                                <div class="mean__menu-wrapper">
                                    <div class="main-menu">
                                        <nav id="mobile-menu">
                                            <ul>
                                                <li><a href="{{ route('home') }}">Home</a></li>
                                                <li><a href="{{ route('about') }}">About</a></li>
                                                <li><a href="{{ route('events') }}">Events & Achievements</a></li>
                                                <li><a href="{{ route('donations') }}">Donations</a></li>
                                                <li><a href="{{ route('projects') }}">Future Projects</a></li>
                                                <li><a href="{{ route('gallery') }}">Gallery</a></li>
                                                <li><a href="{{ route('admin.login') }}">Login</a></li>
                                            </ul>
                                        </nav>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </header>

        @yield('content')

        <footer class="footer-section">
            <div class="footer-widgets-wrapper footer-bg">
                <div class="container">
                    <div class="row">
                        <div class="col-xl-4 col-lg-4 col-md-6">
                            <div class="single-footer-widget">
                                <div class="widget-head">
                                    <a href="{{ route('home') }}">
                                        <img src="{{ asset('img/logo/white-logo.svg') }}" alt="logo-img" width="150">
                                    </a>
                                </div>
                                <div class="footer-content">
                                    <p>SDS - Working for a better community through harmony and support.</p>
                                </div>
                            </div>
                        </div>
                        <div class="col-xl-4 col-lg-4 col-md-6 ps-lg-5">
                            <div class="single-footer-widget">
                                <div class="widget-head"><h3>Quick Links</h3></div>
                                <ul class="list-area">
                                    <li><a href="{{ route('home') }}"><i class="fa-solid fa-chevron-right"></i> Home</a></li>
                                    <li><a href="{{ route('about') }}"><i class="fa-solid fa-chevron-right"></i> About</a></li>
                                    <li><a href="{{ route('gallery') }}"><i class="fa-solid fa-chevron-right"></i> Gallery</a></li>
                                </ul>
                            </div>
                        </div>
                        <div class="col-xl-4 col-lg-4 col-md-6">
                            <div class="single-footer-widget">
                                <div class="widget-head"><h3>Contact Us</h3></div>
                                <div class="footer-content">
                                    <ul class="contact-info">
                                        <li><i class="fas fa-map-marker-alt"></i> Balagolla, Kundasale, Digana</li>
                                        <li><i class="fa-solid fa-phone-volume"></i> +94 XXX XXX XXX</li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="footer-bottom">
                <div class="container text-center">
                    <p>© {{ date('Y') }} All Rights Reserved</p>
                </div>
            </div>
        </footer>

        <script src="{{ asset('js/jquery-3.7.1.min.js') }}"></script>
        <script src="{{ asset('js/viewport.jquery.js') }}"></script>
        <script src="{{ asset('js/bootstrap.bundle.min.js') }}"></script>
        <script src="{{ asset('js/jquery.nice-select.min.js') }}"></script>
        <script src="{{ asset('js/jquery.waypoints.js') }}"></script>
        <script src="{{ asset('js/jquery.counterup.min.js') }}"></script>
        <script src="{{ asset('js/swiper-bundle.min.js') }}"></script>
        <script src="{{ asset('js/jquery.meanmenu.min.js') }}"></script>
        <script src="{{ asset('js/jquery.magnific-popup.min.js') }}"></script>
        <script src="{{ asset('js/wow.min.js') }}"></script>
        <script src="{{ asset('js/main.js') }}"></script>
    </body>
</html>
