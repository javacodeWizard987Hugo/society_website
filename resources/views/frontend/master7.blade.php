<!doctype html>
<html class="no-js" lang="zxx">

<head>
   <meta charset="utf-8">
   <meta http-equiv="x-ua-compatible" content="ie=edge">
   <title>ABOUT</title>

   <meta name="description" content="">
   <meta name="viewport" content="width=device-width, initial-scale=1">

        <!-- CSS here -->  <!-- in here u add - your all css file lik this -->
        
        <link rel="stylesheet" href="{{ asset('css/bootstrap.min.css') }}">
        <link rel="stylesheet" href="{{ asset('css/meanmenu.css') }}">
        <link rel="stylesheet" href="{{ asset('css/animate.css') }}">
        <link rel="stylesheet" href="{{ asset('css/swiper-bundle.min.css') }}">
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.2/css/all.min.css"> <!-- Keep this one -->
        <link rel="stylesheet" href="{{ asset('css/slick.css') }}">
        <link rel="stylesheet" href="{{ asset('css/magnific-popup.css') }}">
        <link rel="stylesheet" href="{{ asset('css/elegantFont.css') }}">
        <link rel="stylesheet" href="{{ asset('css/nice-select.css') }}">
        <link rel="stylesheet" href="{{ asset('css/responsive.css') }}">
        <link rel="stylesheet" href="{{ asset('css/style.css') }}">
        <link rel="stylesheet" href="{{ asset('css/swiper.min.css') }}">
        <link rel="stylesheet" href="{{ asset('css/main.css') }}">
        <link rel="stylesheet" href="{{ asset('css/about.css') }}">
</head>


<body>
         
        <!-- loader-->
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
           <!-- Offcanvas Area Start -->
        <div class="fix-area">
            <div class="offcanvas__info">
                <div class="offcanvas__wrapper">
                    <div class="offcanvas__content">
                        <div class="offcanvas__top mb-5 d-flex justify-content-between align-items-center">
                            <div class="offcanvas__logo">
                                <a href="index.html">
                                    <li><a href="{{ route('home') }}"></a></li>
                                     <img src="{{ asset('build/assets/img/aryalab2.svg')}}" alt="logo-img" style="height: 150px; width: 250px;">
                                </a>
                            </div>
                            <div class="offcanvas__close">
                                <button>
                                <i class="fas fa-times"></i>
                                </button>
                            </div>
                        </div>
                        <p class="text d-none d-lg-block">
                            AryaLabs is a technological innovation company that specialises in creating complex
                                desktop and mobile applications. 
                        </p>
                        <div class="mobile-menu fix mb-3"></div>
                        <div class="offcanvas__contact">
                            <h4>Contact Info</h4>
                            <ul>
                                <li class="d-flex align-items-center">
                                  <!--  <div class="offcanvas__contact-icon">
                                        <i class="fas fa-map-marker-alt"></i>
                                    </div>
                                    <div class="offcanvas__contact-text">
                                        <a target="_blank" href="#">Base location-Polonnaruwa</a>
                                    </div>-->
                                </li>
                                <li class="d-flex align-items-center">
                                    <div class="offcanvas__contact-icon mr-15">
                                        <i class="fas fa-envelope"></i>
                                    </div>
                                    <div class="offcanvas__contact-text">
                                        <a href="mailto:hello@arya-labs.com"><span class="mailto:hello@arya-labs.com">hello@arya-labs.com</span></a>
                                    </div>
                                </li>
                                <li class="d-flex align-items-center">
                                    <div class="offcanvas__contact-icon mr-15">
                                        <i class="fas fa-clock"></i>
                                    </div>
                                    <div class="offcanvas__contact-text">
                                        <a target="_blank" href="#">Mod-friday, 08.30am -05.30pm</a>
                                    </div>
                                </li>
                                <li class="d-flex align-items-center">
                                    <div class="offcanvas__contact-icon mr-15">
                                        <i class="fas fa-phone"></i>
                                    </div>
                                    <div class="offcanvas__contact-text">
                                        <a href="tel:+774880013">+94774880013</a>
                                    </div>
                                </li>
                            </ul>
                            <div class="header-button mt-4">
                                <a href="{{ route('contact') }}" class="theme-btn text-center">
                                    <span>get A Quote<i class="fa-solid fa-arrow-right-long"></i></span>
                                </a>
                            </div>
                            <div class="social-icon d-flex align-items-center">
                                <a href="https://www.facebook.com/share/1DyEHiAhjx/"><i class="fab fa-facebook-f"></i></a>
                                <a href="#"><i class="fab fa-twitter"></i></a>
                                <a href="#"><i class="fab fa-youtube"></i></a>
                                <a href="https://www.linkedin.com/company/aryalabs-pvt-ltd/""><i class="fab fa-linkedin-in"></i></a>
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
                                <a href="mailto:hello@arya-labs.com" class="link">hello@arya-labs.com</a>
                            </li>
                            <li>
                                <i class="fa-solid fa-phone-volume"></i>
                                 <a href="tel:0774880013">+94774880013</a>
                            </li>
                        </ul>
                        <div class="top-right">
                            <div class="social-icon d-flex align-items-center">
                                <span>Follow Us:</span>
                                <a href="https://www.facebook.com/share/1DyEHiAhjx/"><i class="fab fa-facebook-f"></i></a>
                                <a href="#"><i class="fab fa-twitter"></i></a>
                                <a href="https://www.linkedin.com/company/aryalabs-pvt-ltd/"><i class="fa-brands fa-linkedin-in"></i></a>
                                <a href="#"><i class="fa-brands fa-youtube"></i></a>
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
                                    <a href="index.html" class="header-logo">
                                        <img src="{{ asset('build/assets/img/aryalab2.svg')}}" alt="logo-img"   style="height: 100px; width: 150px;">                                
                                    </a>
                                </div>
                            </div>
                            <div class="header-right d-flex justify-content-end align-items-center">
                                <div class="mean__menu-wrapper">
                                    <div class="main-menu">
                                        <nav id="mobile-menu">
                                            <ul>
                                                            <li>
                                                            <a href="{{ route('home') }}">
                                                            Home                                                            
                                                            </a>
                                                            </li>                       
                                                            <li>
                                                                <a href="{{ route('about') }}">About</a>
                                                            </li>
                                                            <li>
                                                               <a href="{{ route('service') }}">
                                                                    Services                                                               
                                                                </a>
                                                                
                                                            </li>
                                                                <li>
                                                                <a href="{{ route('team') }}">
                                                                    Team                                                                 
                                                                </a>
                                                               </li>
                                                                  <li>
                                                                        <a href="{{ route('contact') }}">
                                                                            Contact                                                                
                                                                        </a>
                                                                        
                                                                    </li>
                                                                <li>
                                                                        <a href="{{ route('career') }}">
                                                                        Career
                                                                        </a>     
                                                                 </li>                                              
                                                            <li>
                                                                <a href="{{ route('Feedbacks') }}">                                                                  
                                                                Feedbacks
                                                            </a>                                                 
                                                            </li>                                                          
                                            </ul>
                                        </nav>
                                    </div>
                                </div>
                                <a href="#0" class="search-trigger search-icon"><i class="fas fa-search"></i></a>
                                <div class="header-button">
                                    <a href="{{ route('contact') }}" class="theme-btn">
                                        <span>
                                            get A Quote
                                            <i class="fa-solid fa-arrow-right-long"></i>
                                        </span>
                                     </a>
                                </div>
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
     
    
        <!--<< Mouse Cursor Start >>-->  
        <div class="mouse-cursor cursor-outer"></div>
        <div class="mouse-cursor cursor-inner"></div>
      

        <!--<< Breadcrumb Section Start >>-->
        <div class="breadcrumb-wrapper bg-cover" style="background-image: url('assets/img/breadcrumb.jpg');">
            <div class="border-shape">        
                <img src="{{ asset('build/assets/img/element.png ')}}" alt="">
            </div>
            <div class="line-shape">
                  <img src="{{ asset('build/assets/img/line-element.png')}}" alt="">
            </div>
            <div class="container">
                <div class="page-heading">
                    <h1 class="wow fadeInUp" data-wow-delay=".3s">About Us</h1>
                    <ul class="breadcrumb-items wow fadeInUp" data-wow-delay=".5s">
                        <li>
                            <a href="{{ route('home') }}">
                                Home
                            </a>
                        </li>
                        <li>
                            <i class="fas fa-chevron-right"></i>
                        </li>
                        <li>
                            About Us
                        </li>
                    </ul>
                </div>
            </div>
        </div>

       <!-- About Section Start -->
        <section class="about-section section-padding fix bg-cover" style="background-image: url('assets/img/service/service-bg-2.jpg');">
            <div class="container">
                <div class="about-wrapper style-2">
                    <div class="row">
                        <div class="col-lg-6">
                            <div class="about-image-items">
                                <div class="circle-shape">
                                    <img src="{{ asset('build/assets/img/about/circle.png')}}" alt="">
                                </div>                                
                                <div class="counter-shape float-bob-y text-center text-lg-start">
                                    <div class="icon mb-2">
                                        <img src="{{ asset('build/assets/img/about/icon-1.svg')}}" alt="" class="img-fluid" style="max-width: 60px;">
                                    </div>
                                    <div class="content">
                                        <h3><span class="count">8</span> Years</h3>
                                        <p>Of Experience</p>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <div class="col-lg-6 mt-5 mt-lg-0">
                            <div class="about-content">
                                <div class="section-title">           
                                    <h3 class="wow fadeInUp" data-wow-delay=".3s">
                                        We Are Increasing Business Success With <span>Technology</span>
                                    </h3>
                                </div>

                                <div class="about-icon-items">
                                    <div class="icon-items wow fadeInUp" data-wow-delay=".9s" style="text-align: center;">
                                        <div class="icon" style="margin-bottom: 20px;">
                                            <img src="{{ asset('build/assets/img/about/icon-5.svg')}}" alt="">
                                        </div>

                                        <!-- Corrected Mission and Vision side by side -->
                                        <div class="mission-vision-wrapper">
                                            <div class="mission">
                                                <h4>Mission</h4>
                                                <p>To deliver innovative, reliable, and user-friendly software solutions that empower individuals and businesses to thrive in the digital world.</p>
                                            </div>
                                            <div class="vision">
                                                <h4>Vision</h4>
                                                <p>To be a globally recognized software company that transforms ideas into impactful digital experiences through continuous innovation and cutting-edge technology.</p>
                                            </div>
                                        </div>
                                        <!-- End Mission Vision -->
                                    </div>
                                </div>

                            </div>
                        </div>

                    </div> <!-- end row -->
                </div> <!-- end about-wrapper -->
            </div> <!-- end container -->
        </section>
      <!-- About Section End -->

        <!-- Offer Section Start -->
        <section class="offer-section fix section-bg-2 section-padding">
            <div class="line-shape">
                <img src="{{ asset('build/assets/img/team/line-shape.png')}}" alt="">
            </div>
            <div class="mask-shape">     
           <img src="{{ asset('build/assets/img/team/mask-shape.png')}}" alt="">
            </div>
            <div class="container">
                <div class="section-title text-center">
                    <span class="wow fadeInUp">Our offering</span>
                    <h3 class="text-white wow fadeInUp" data-wow-delay=".3s">
                        Enhance and Pioneer Using <br> Technology Trends
                    </h3>
                </div>
                <div class="row">
                    <div class="col-xl-2 col-lg-4 col-md-4 col-sm-6 wow fadeInUp " data-wow-delay=".2s">
                        <div class="offer-items">
                            <div class="shape-top">
                            <img src="{{ asset('build/assets/img/shape/offer-top.png ') }}" alt="">
                            </div>
                            <div class="shape-bottom">
                            <img src="{{ asset('build/assets/img/shape/offer-bottom.png') }}" alt="">
                            </div>
                            <div class="icon">
                                <svg width="36" height="36" viewBox="0 0 36 36" fill="none" xmlns="http://www.w3.org/2000/svg">
                                    <g clip-path="url(#clip0_2517_1804)">
                                    <path d="M18 0C10.3961 0 0 5.74724 0 18C0 29.9409 9.99921 36 18 36C31.7268 36 36 23.974 36 18C36 9.18425 29.2535 0 18 0ZM13.826 1.6937C11.948 3.29528 10.389 5.94567 9.38268 9.23386C8.07874 8.46142 6.8811 7.50472 5.81811 6.39213C8.01496 4.08898 10.7929 2.47323 13.826 1.6937ZM5.04567 7.25669C6.23622 8.49685 7.58976 9.55276 9.06378 10.389C8.51102 12.5362 8.18504 14.9173 8.14252 17.4189H1.17638C1.30394 13.6843 2.66457 10.1197 5.04567 7.25669ZM5.04567 28.7433C2.65748 25.8803 1.30394 22.3158 1.17638 18.5811H8.14252C8.18504 21.0898 8.51102 23.4638 9.06378 25.611C7.59685 26.4543 6.24331 27.5032 5.04567 28.7433ZM5.81811 29.615C6.8811 28.5024 8.07874 27.5457 9.38268 26.7732C10.389 30.0543 11.948 32.7118 13.826 34.3134C10.7929 33.5268 8.01496 31.911 5.81811 29.615ZM17.4189 34.7953C14.4 34.4126 11.7992 31.0394 10.3961 26.2063C12.5646 25.1079 14.9598 24.4913 17.4189 24.3992V34.7953ZM17.4189 23.2441C14.8535 23.3291 12.3591 23.9598 10.0984 25.0654C9.62362 23.0811 9.34016 20.8913 9.29764 18.5811H17.4189V23.2441ZM17.4189 17.4189H9.29764C9.34016 15.1087 9.62362 12.9189 10.0984 10.9346C12.3661 12.0402 14.8606 12.6709 17.4189 12.7559V17.4189ZM17.4189 11.6008C14.9528 11.5157 12.5646 10.8921 10.3961 9.7937C11.7992 4.95354 14.4 1.5874 17.4189 1.20472V11.6008ZM30.9543 7.25669C33.3354 10.1197 34.6961 13.6843 34.8236 17.4189H27.8646C27.8221 14.9102 27.4961 12.5362 26.9433 10.389C28.4102 9.54567 29.7638 8.49685 30.9543 7.25669ZM30.1819 6.38504C29.1189 7.49764 27.9213 8.45433 26.6173 9.22677C25.611 5.94567 24.052 3.29528 22.174 1.68661C25.2071 2.47323 27.985 4.08898 30.1819 6.38504ZM18.5811 1.20472C21.6 1.5874 24.2008 4.96063 25.6039 9.7937C23.4354 10.8921 21.0472 11.5087 18.5811 11.6008V1.20472ZM18.5811 12.7559C21.1465 12.6709 23.6409 12.0402 25.9016 10.9346C26.3764 12.9189 26.6598 15.1087 26.7024 17.4189H18.5811V12.7559ZM18.5811 18.5811H26.7024C26.6598 20.8913 26.3764 23.0811 25.9016 25.0654C23.6195 23.9424 21.1233 23.3213 18.5811 23.2441V18.5811ZM18.5811 34.7953V24.3992C21.0472 24.4843 23.4354 25.1079 25.6039 26.2063C24.2008 31.0465 21.6 34.4126 18.5811 34.7953ZM22.174 34.3063C24.052 32.7047 25.611 30.0543 26.6173 26.7661C27.9213 27.5386 29.1189 28.4953 30.1819 29.6079C27.985 31.911 25.2071 33.5268 22.174 34.3063ZM30.9543 28.7433C29.7638 27.5032 28.4102 26.4543 26.9433 25.611C27.4961 23.4638 27.8221 21.0827 27.8646 18.5811H34.8236C34.6961 22.3158 33.3354 25.8803 30.9543 28.7433Z" fill="#384BFF"/>
                                    </g>
                                    <defs>
                                    <clipPath id="clip0_2517_1804">
                                    <rect width="36" height="36" fill="white"/>
                                    </clipPath>
                                  </defs>
                                </svg>
                            </div>
                            <div class="content">
                                <h5>Website</h5>
                            </div>
                        </div>
                    </div>
                    <div class="col-xl-2 col-lg-4 col-md-4 col-sm-6 wow fadeInUp" data-wow-delay=".4s">
                        <div class="offer-items">
                            <div class="shape-top">
                            <img src="{{ asset('build/assets/img/shape/offer-top.png ')}}" alt="">
                            </div>
                            <div class="shape-bottom">
                            <img src="{{ asset('build/assets/img/shape/offer-bottom.png') }}" alt="">
                            </div>
                            <div class="icon">
                                <svg width="36" height="36" viewBox="0 0 36 36" fill="none" xmlns="http://www.w3.org/2000/svg">
                                    <path d="M22.3329 3.58547L23.91 0.956883C23.9526 0.885763 23.9809 0.806935 23.9931 0.724898C24.0053 0.642862 24.0012 0.559225 23.9811 0.478762C23.961 0.398299 23.9252 0.322586 23.8758 0.255946C23.8265 0.189306 23.7644 0.133044 23.6933 0.0903717C23.6222 0.0476998 23.5434 0.0194538 23.4613 0.00724644C23.3793 -0.00496089 23.2957 -0.000890475 23.2152 0.0192253C23.1347 0.039341 23.059 0.0751082 22.9924 0.124485C22.9257 0.173861 22.8695 0.23588 22.8268 0.307L21.1626 3.08085C20.1717 2.72843 19.1107 2.52633 18.0004 2.52633C16.8901 2.52633 15.829 2.72843 14.8381 3.08085L13.1739 0.307C13.0878 0.163366 12.948 0.0598509 12.7855 0.0192253C12.623 -0.0214003 12.4511 0.00419186 12.3074 0.0903718C12.1638 0.176552 12.0603 0.31626 12.0196 0.478762C11.979 0.641265 12.0046 0.81325 12.0908 0.956883L13.6678 3.58547C10.6192 5.16123 8.52686 8.33802 8.52686 12.0005C8.52686 12.168 8.59339 12.3286 8.71184 12.4471C8.83028 12.5655 8.99092 12.632 9.15842 12.632H26.8423C27.0098 12.632 27.1705 12.5655 27.2889 12.4471C27.4074 12.3286 27.4739 12.168 27.4739 12.0005C27.4733 8.33865 25.3815 5.16186 22.3329 3.58547ZM9.81399 11.3689C10.1374 7.13551 13.6855 3.7901 18.0004 3.7901C22.3152 3.7901 25.8634 7.13551 26.1868 11.3689H9.81399Z" fill="#384BFF"/>
                                    <path d="M22.4068 7.17725H21.5744C21.464 7.17725 21.3581 7.2211 21.2801 7.29915C21.202 7.3772 21.1582 7.48306 21.1582 7.59345V8.42586C21.1582 8.65575 21.3445 8.84206 21.5744 8.84206H22.4074C22.5178 8.84206 22.6237 8.79821 22.7017 8.72016C22.7798 8.6421 22.8236 8.53624 22.8236 8.42586V7.59345C22.8234 7.48301 22.7795 7.37715 22.7013 7.29911C22.6231 7.22108 22.5172 7.17725 22.4068 7.17725ZM14.4257 7.17725H13.5926C13.4822 7.17725 13.3764 7.2211 13.2983 7.29915C13.2203 7.3772 13.1764 7.48306 13.1764 7.59345V8.42586C13.1764 8.65575 13.3627 8.84206 13.5926 8.84206H14.4257C14.536 8.84206 14.6419 8.79821 14.72 8.72016C14.798 8.6421 14.8419 8.53624 14.8419 8.42586V7.59345C14.8419 7.48306 14.798 7.3772 14.72 7.29915C14.6419 7.2211 14.536 7.17725 14.4257 7.17725ZM26.8416 13.2637H9.15774C8.99024 13.2637 8.8296 13.3302 8.71116 13.4486C8.59272 13.5671 8.52618 13.7277 8.52618 13.8952V26.6346C8.52751 27.4436 8.8497 28.219 9.42205 28.7908C9.9944 29.3625 10.7702 29.6839 11.5792 29.6844H12.3156V33.4776C12.3156 34.8683 13.4486 36.0001 14.8419 36.0001C16.2351 36.0001 17.3681 34.8683 17.3681 33.4776V29.6844H18.6313V33.4776C18.6313 34.8683 19.7643 36.0001 21.1575 36.0001C22.5508 36.0001 23.6838 34.8683 23.6838 33.4776V29.6844H24.4202C25.2293 29.6841 26.0051 29.3628 26.5775 28.791C27.1499 28.2192 27.472 27.4436 27.4732 26.6346V13.8952C27.4732 13.7277 27.4067 13.5671 27.2882 13.4486C27.1698 13.3302 27.0091 13.2637 26.8416 13.2637ZM26.2101 26.6346C26.2092 27.1087 26.0203 27.5632 25.6847 27.8982C25.3491 28.2332 24.8944 28.4213 24.4202 28.4213H23.0522C22.8847 28.4213 22.7241 28.4878 22.6057 28.6063C22.4872 28.7247 22.4207 28.8854 22.4207 29.0529V33.4776C22.4207 33.8126 22.2876 34.1339 22.0507 34.3708C21.8138 34.6077 21.4925 34.7408 21.1575 34.7408C20.8225 34.7408 20.5012 34.6077 20.2644 34.3708C20.0275 34.1339 19.8944 33.8126 19.8944 33.4776V29.0529C19.8944 28.8854 19.8279 28.7247 19.7094 28.6063C19.591 28.4878 19.4303 28.4213 19.2628 28.4213H16.7366C16.5691 28.4213 16.4084 28.4878 16.29 28.6063C16.1715 28.7247 16.105 28.8854 16.105 29.0529V33.4776C16.105 33.8126 15.9719 34.1339 15.735 34.3708C15.4981 34.6077 15.1769 34.7408 14.8419 34.7408C14.5069 34.7408 14.1856 34.6077 13.9487 34.3708C13.7118 34.1339 13.5787 33.8126 13.5787 33.4776V29.0529C13.5787 28.8854 13.5122 28.7247 13.3937 28.6063C13.2753 28.4878 13.1147 28.4213 12.9472 28.4213H11.5798C11.1056 28.4211 10.6509 28.233 10.3153 27.898C9.97962 27.5631 9.79048 27.1087 9.78931 26.6346V14.5268H26.2101V26.6346ZM30.3153 13.2637C29.0963 13.2637 28.1048 14.2565 28.1048 15.4767V24.3136C28.1048 25.5338 29.0963 26.5266 30.3153 26.5266C31.5342 26.5266 32.5258 25.5338 32.5258 24.3136V15.4767C32.5254 14.8903 32.2925 14.328 31.8781 13.9131C31.4637 13.4982 30.9017 13.2647 30.3153 13.2637ZM31.2626 24.3136C31.2626 24.8371 30.8376 25.2635 30.3153 25.2635C29.793 25.2635 29.3679 24.8371 29.3679 24.3136V15.4767C29.3679 14.9531 29.793 14.5268 30.3153 14.5268C30.8376 14.5268 31.2626 14.9531 31.2626 15.4767V24.3136ZM5.68412 13.2637C4.46519 13.2637 3.47363 14.2565 3.47363 15.4767V24.3136C3.47363 25.5338 4.46519 26.5266 5.68412 26.5266C6.90305 26.5266 7.89461 25.5338 7.89461 24.3136V15.4767C7.89427 14.8903 7.66136 14.328 7.24696 13.9131C6.83255 13.4982 6.27051 13.2647 5.68412 13.2637ZM6.63147 24.3136C6.63147 24.8371 6.20643 25.2635 5.68412 25.2635C5.16181 25.2635 4.73677 24.8371 4.73677 24.3136V15.4767C4.73677 14.9531 5.16181 14.5268 5.68412 14.5268C6.20643 14.5268 6.63147 14.9531 6.63147 15.4767V24.3136Z" fill="#384BFF"/>
                                </svg>                                    
                            </div>
                            <div class="content">
                                <h5>Android</h5>
                            </div>
                        </div>
                    </div>
                    <div class="col-xl-2 col-lg-4 col-md-4 col-sm-6 wow fadeInUp" data-wow-delay=".6s">
                        <div class="offer-items active">
                            <div class="shape-top">
                            <img src="{{ asset('build/assets/img/shape/offer-top.png') }}" alt="">
                            </div>
                            <div class="shape-bottom">
                            <img src="{{ asset('build/assets/img/shape/offer-bottom.png') }}" alt="">
                            </div>
                            <div class="icon">
                                <svg width="36" height="36" viewBox="0 0 36 36" fill="none" xmlns="http://www.w3.org/2000/svg">
                                    <g clip-path="url(#clip0_2517_1783)">
                                    <path d="M25.3682 0.727224L25.3303 0L24.6066 0.0778922C24.5356 0.0854747 17.5397 0.928503 17.06 8.75012L17.0117 9.53318L17.7948 9.48011C17.8747 9.47459 25.7984 8.84249 25.3682 0.727224ZM24.0027 1.60058C23.8711 6.3141 20.2039 7.62517 18.5206 7.97878C19.1617 3.39831 22.4835 2.00245 24.0027 1.60058Z" fill="white"/>
                                    <path d="M32.1109 25.8609L31.6704 25.7182C29.0048 24.8566 27.2147 22.415 27.2147 19.6426C27.2147 17.1763 28.6092 14.9705 30.8549 13.8855L31.525 13.5622L31.1514 12.9191C30.9914 12.6434 29.4963 10.2011 26.3379 9.39256C23.8329 8.7515 21.0164 9.31881 17.9634 11.0793C16.671 10.2949 12.3779 8.03393 8.9624 10.3004C8.29377 10.6699 1.20696 14.9153 4.89546 26.3703C5.00369 26.6267 7.57551 32.652 10.6188 34.9088C11.4398 35.6933 13.5394 36.6735 15.9389 35.0377C16.3546 34.8661 19.136 33.7956 20.9006 35.0494C21.552 35.4954 22.6894 36.0007 23.8908 36.0007C24.8021 36.0007 25.7499 35.7105 26.5509 34.8833C26.9245 34.56 30.3373 31.514 32.1109 26.6888L32.1626 26.5482L32.1109 25.8609ZM25.63 33.8556L25.5769 33.9059C24.0652 35.4934 21.7733 33.9748 21.6885 33.9183C20.7869 33.2772 19.7426 33.0684 18.763 33.0684C16.9853 33.0684 15.4219 33.757 15.322 33.8018L15.2096 33.8652C13.1286 35.3176 11.7038 34.0396 11.5528 33.8942L11.4715 33.8245C8.71908 31.8173 6.1893 25.8926 6.18586 25.8906C2.73378 15.1593 9.34704 11.6494 9.62828 11.5067L9.7041 11.4619C12.9073 9.31122 17.5119 12.4242 17.5574 12.4552L17.9248 12.7075L18.3053 12.4779C21.1729 10.7443 23.7605 10.1549 25.996 10.7278C27.8172 11.1937 28.9779 12.3318 29.5459 13.0314C27.2388 14.4452 25.8368 16.9123 25.8368 19.6426C25.8368 22.7831 27.722 25.5735 30.5944 26.7873C28.8263 31.1031 25.6637 33.8273 25.63 33.8556Z" fill="white"/>
                                    </g>
                                    <defs>
                                    <clipPath id="clip0_2517_1783">
                                    <rect width="36" height="36" fill="white"/>
                                    </clipPath>
                                    </defs>
                                    </svg>
                                    
                            </div>
                            <div class="content">
                                <h5>IOS</h5>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>

   
        <!-- Project Section Start -->
       <section class="project-section-2 section-padding fix">
            <div class="left-shape">
                <img src="{{ asset('build/assets/img/project/left-shape.png') }}" alt="shape-img">
            </div>
            <div class="right-shape">
                <img src="{{ asset('build/assets/img/project/right-shape.png') }}" alt="shape-img">
            </div>
            <div class="container">
                <div class="section-title-area">
                    <div class="section-title">
                        <span class="wow fadeInUp">Technologies & Solutions of PROJECTS</span>
                        <h2 class="wow fadeInUp" data-wow-delay=".3s">
                            Our Latest Incredible <br> Client's Projects Technologies , Solutions
                        </h2>
                    </div>
                    <div class="array-button wow fadeInUp" data-wow-delay=".5s">
                        <button class="array-prev"><i class="fas fa-arrow-right"></i></button>
                        <button class="array-next"><i class="fas fa-arrow-left"></i></button>
                    </div>
                </div>
                <div class="project-wrapper">
                    <div class="swiper project-slider-2">
                        <div class="swiper-wrapper">
                            <div class="swiper-slide">
                                <div class="project-items style-2">
                                    <div class="project-image">
                                        <img src="{{ asset('build/assets/img/softwaredevelopment.jpg') }}" alt="project-img">
                                        <div class="project-content">
                                            <p>Technology</p>
                                            <h4>
                                                <a href="project-details.html">Software Development</a>
                                            </h4>
                                            <a href="project-details.html" class="arrow-icon">
                                                <i class="fa-solid fa-arrow-right"></i>
                                            </a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="swiper-slide">
                                <div class="project-items style-2">
                                    <div class="project-image">
                                        <img src="{{ asset('build/assets/img/project/analytic solution.jpg') }}" alt="project-img">
                                        <div class="project-content">
                                            <p>Technology</p>
                                            <h4>
                                                <a href="project-details.html">Analytic Solutions</a>
                                            </h4>
                                            <a href="project-details.html" class="arrow-icon">
                                                <i class="fa-solid fa-arrow-right"></i>
                                            </a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="swiper-slide">
                                <div class="project-items style-2">
                                    <div class="project-image">
                                        <img src="{{ asset('build/assets/img/project/designsolutions.jpg') }}" alt="project-img">
                                        <div class="project-content">
                                            <p>Solutions</p>
                                            <h4>
                                                <a href="project-details.html">Design Solutions</a>
                                            </h4>
                                            <a href="project-details.html" class="arrow-icon">
                                                <i class="fa-solid fa-arrow-right"></i>
                                            </a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
       </section>
        <!-- Project Section End -->
 

        <!--<< Footer Section Start >>-->
        <footer class="footer-section footer-bg">
                    <div class="container">
                        <div class="contact-info-area">
                            <div class="contact-info-items wow fadeInUp" data-wow-delay=".3s">
                                <div class="icon">
                                    <svg width="30" height="30" viewBox="0 0 30 30" fill="none" xmlns="http://www.w3.org/2000/svg">
                                        <path d="M23.7891 1.81641H16.7578C13.3658 1.81641 10.6055 4.5767 10.6055 7.96875C10.6055 11.063 12.9015 13.631 15.8789 14.0585V16.7578C15.8788 16.9317 15.9303 17.1016 16.0268 17.2462C16.1234 17.3907 16.2607 17.5033 16.4214 17.5697C16.7456 17.705 17.1258 17.6325 17.3793 17.3792L20.6374 14.1211H23.7891C27.1811 14.1211 30 11.3608 30 7.96875C30 4.5767 27.1811 1.81641 23.7891 1.81641ZM16.7578 8.84754C16.2723 8.84754 15.8789 8.45402 15.8789 7.96863C15.8789 7.48324 16.2723 7.08973 16.7578 7.08973C17.2432 7.08973 17.6367 7.48324 17.6367 7.96863C17.6367 8.45402 17.2432 8.84754 16.7578 8.84754ZM20.2734 8.84754C19.7879 8.84754 19.3945 8.45402 19.3945 7.96863C19.3945 7.48324 19.7879 7.08973 20.2734 7.08973C20.7588 7.08973 21.1523 7.48324 21.1523 7.96863C21.1523 8.45402 20.7588 8.84754 20.2734 8.84754ZM23.7891 8.84754C23.3036 8.84754 22.9102 8.45402 22.9102 7.96863C22.9102 7.48324 23.3036 7.08973 23.7891 7.08973C24.2745 7.08973 24.668 7.48324 24.668 7.96863C24.668 8.45402 24.2745 8.84754 23.7891 8.84754Z" fill="#3C72FC"/>
                                        <path d="M19.7461 28.1836C21.2 28.1836 22.3828 27.0008 22.3828 25.5469V22.0312C22.3828 21.6527 22.1408 21.3171 21.782 21.1978L16.5209 19.44C16.2634 19.3533 15.9819 19.3928 15.7553 19.5421L13.5186 21.033C11.1496 19.9035 8.33871 17.0925 7.20914 14.7236L8.7 12.4868C8.77415 12.3754 8.82189 12.2485 8.83958 12.1158C8.85728 11.9831 8.84447 11.8482 8.80213 11.7212L7.04432 6.46014C6.98611 6.28516 6.87428 6.13295 6.72469 6.02512C6.5751 5.91728 6.39534 5.85929 6.21094 5.85938H2.63672C1.18277 5.85938 0 7.02979 0 8.48373C0 18.61 9.6198 28.1836 19.7461 28.1836Z" fill="#3C72FC"/>
                                    </svg>                                
                                </div>
                                <div class="content">
                                    <p>Call Us 7/24</p>
                                    <h3>
                                        <a href="tel:+774880013">+774880013</a>
                                    </h3>
                                </div>
                            </div>
                            <div class="contact-info-items wow fadeInUp" data-wow-delay=".5s">
                                <div class="icon">
                                    <svg width="30" height="30" viewBox="0 0 30 30" fill="none" xmlns="http://www.w3.org/2000/svg">
                                        <path d="M12.6498 10.8272C12.8023 10.914 12.976 10.9569 13.1514 10.9509C13.3312 10.9344 13.5053 10.8798 13.6623 10.7906L24.9217 4.22062C24.677 3.79416 24.3245 3.43955 23.8994 3.19239C23.4744 2.94523 22.9918 2.81422 22.5001 2.8125H3.75014C3.2583 2.81406 2.77554 2.94499 2.35032 3.19216C1.9251 3.43932 1.5724 3.79402 1.32764 4.22062L12.6498 10.8272Z" fill="#3C72FC"/>
                                        <path d="M25.3125 6.15918V12.6748C24.4104 12.3501 23.4587 12.1852 22.5 12.1873C20.2633 12.1908 18.1192 13.0808 16.5376 14.6624C14.956 16.244 14.066 18.3881 14.0625 20.6248C14.0623 20.9382 14.0811 21.2512 14.1188 21.5623H3.75C3.00476 21.5601 2.29069 21.263 1.76372 20.7361C1.23676 20.2091 0.939726 19.495 0.9375 18.7498V6.15918L11.7094 12.4498C12.1434 12.6872 12.6303 12.8116 13.125 12.8116C13.6197 12.8116 14.1066 12.6872 14.5406 12.4498L25.3125 6.15918Z" fill="#3C72FC"/>
                                        <path d="M22.5 14.0625C20.7595 14.0625 19.0903 14.7539 17.8596 15.9846C16.6289 17.2153 15.9375 18.8845 15.9375 20.625C15.9375 22.3655 16.6289 24.0347 17.8596 25.2654C19.0903 26.4961 20.7595 27.1875 22.5 27.1875C22.7486 27.1875 22.9871 27.0887 23.1629 26.9129C23.3387 26.7371 23.4375 26.4986 23.4375 26.25C23.4375 26.0014 23.3387 25.7629 23.1629 25.5871C22.9871 25.4113 22.7486 25.3125 22.5 25.3125C21.5729 25.3125 20.6666 25.0376 19.8958 24.5225C19.1249 24.0074 18.5241 23.2754 18.1693 22.4188C17.8145 21.5623 17.7217 20.6198 17.9026 19.7105C18.0834 18.8012 18.5299 17.966 19.1854 17.3104C19.841 16.6549 20.6762 16.2084 21.5855 16.0276C22.4948 15.8467 23.4373 15.9395 24.2938 16.2943C25.1504 16.6491 25.8824 17.2499 26.3975 18.0208C26.9126 18.7916 27.1875 19.6979 27.1875 20.625V21.5625C27.1875 21.8111 27.0887 22.0496 26.9129 22.2254C26.7371 22.4012 26.4986 22.5 26.25 22.5C26.0014 22.5 25.7629 22.4012 25.5871 22.2254C25.4113 22.0496 25.3125 21.8111 25.3125 21.5625V20.625C25.3125 20.0687 25.1476 19.525 24.8385 19.0625C24.5295 18.5999 24.0902 18.2395 23.5763 18.0266C23.0624 17.8137 22.4969 17.758 21.9513 17.8665C21.4057 17.9751 20.9046 18.2429 20.5113 18.6363C20.1179 19.0296 19.8501 19.5307 19.7415 20.0763C19.633 20.6219 19.6887 21.1874 19.9016 21.7013C20.1145 22.2152 20.4749 22.6545 20.9375 22.9635C21.4 23.2726 21.9437 23.4375 22.5 23.4375C22.9843 23.4344 23.4594 23.3048 23.8781 23.0616C24.2022 23.578 24.6856 23.9748 25.2552 24.1921C25.8248 24.4094 26.4496 24.4353 27.0353 24.266C27.621 24.0967 28.1356 23.7412 28.5013 23.2535C28.867 22.7657 29.064 22.1721 29.0625 21.5625V20.625C29.0605 18.8851 28.3685 17.2171 27.1382 15.9868C25.9079 14.7565 24.2399 14.0645 22.5 14.0625ZM22.5 21.5625C22.3146 21.5625 22.1333 21.5075 21.9792 21.4045C21.825 21.3015 21.7048 21.1551 21.6339 20.9838C21.5629 20.8125 21.5443 20.624 21.5805 20.4421C21.6167 20.2602 21.706 20.0932 21.8371 19.9621C21.9682 19.831 22.1352 19.7417 22.3171 19.7055C22.499 19.6693 22.6875 19.6879 22.8588 19.7589C23.0301 19.8298 23.1765 19.95 23.2795 20.1042C23.3825 20.2583 23.4375 20.4396 23.4375 20.625C23.4375 20.8736 23.3387 21.1121 23.1629 21.2879C22.9871 21.4637 22.7486 21.5625 22.5 21.5625Z" fill="#3C72FC"/>
                                    </svg>                                            
                                </div>
                                <div class="content">
                                    <p>Make a Quote</p>
                                    <h3>
                                        <a href="hello@arya-labs.com">hello@arya-labs.com</a>
                                    </h3>
                                </div>
                            </div>
                            <div class="contact-info-items wow fadeInUp" data-wow-delay=".7s">
                                <div class="icon">
                                   <!-- <svg width="32" height="32" viewBox="0 0 32 32" fill="none" xmlns="http://www.w3.org/2000/svg">
                                        <path fill-rule="evenodd" clip-rule="evenodd" d="M16 1.6665C11.036 1.6665 7 5.7385 7 10.7612C7 12.4625 7.74933 14.5732 8.84 16.6785C11.2413 21.3145 15.2413 25.9838 15.2413 25.9838C15.3352 26.0932 15.4516 26.1809 15.5826 26.2411C15.7135 26.3012 15.8559 26.3324 16 26.3324C16.1441 26.3324 16.2865 26.3012 16.4174 26.2411C16.5484 26.1809 16.6648 26.0932 16.7587 25.9838C16.7587 25.9838 20.7587 21.3145 23.16 16.6785C24.2507 14.5732 25 12.4625 25 10.7612C25 5.7385 20.964 1.6665 16 1.6665ZM16 6.99984C15.0447 7.0256 14.1371 7.42322 13.4705 8.10804C12.8039 8.79286 12.4309 9.71081 12.4309 10.6665C12.4309 11.6222 12.8039 12.5401 13.4705 13.225C14.1371 13.9098 15.0447 14.3074 16 14.3332C16.9553 14.3074 17.8629 13.9098 18.5295 13.225C19.1961 12.5401 19.5691 11.6222 19.5691 10.6665C19.5691 9.71081 19.1961 8.79286 18.5295 8.10804C17.8629 7.42322 16.9553 7.0256 16 6.99984Z" fill="#3C72FC"/>
                                        <path fill-rule="evenodd" clip-rule="evenodd" d="M22.3788 23.1693C23.4628 23.4946 24.3562 23.8973 24.9735 24.3693C25.3735 24.6733 25.6668 24.9706 25.6668 25.3333C25.6668 25.5466 25.5455 25.74 25.3748 25.9333C25.0922 26.252 24.6722 26.5386 24.1522 26.8053C22.3148 27.7453 19.3442 28.3333 16.0002 28.3333C12.6562 28.3333 9.6855 27.7453 7.84816 26.8053C7.32816 26.5386 6.90816 26.252 6.6255 25.9333C6.45483 25.74 6.3335 25.5466 6.3335 25.3333C6.3335 24.9706 6.62683 24.6733 7.02683 24.3693C7.64416 23.8973 8.5375 23.4946 9.6215 23.1693C9.87557 23.0929 10.0889 22.9187 10.2146 22.6851C10.3402 22.4514 10.3679 22.1774 10.2915 21.9233C10.2151 21.6692 10.0409 21.4559 9.80726 21.3302C9.57359 21.2046 9.29957 21.1769 9.0455 21.2533C7.39483 21.7506 6.11216 22.432 5.3415 23.1853C4.66416 23.8453 4.3335 24.584 4.3335 25.3333C4.3335 26.2693 4.86283 27.2026 5.93883 27.9813C7.82683 29.3466 11.6188 30.3333 16.0002 30.3333C20.3815 30.3333 24.1735 29.3466 26.0615 27.9813C27.1375 27.2026 27.6668 26.2693 27.6668 25.3333C27.6668 24.584 27.3362 23.8453 26.6588 23.1853C25.8882 22.432 24.6055 21.7506 22.9548 21.2533C22.829 21.2155 22.697 21.2028 22.5663 21.216C22.4356 21.2292 22.3088 21.268 22.1931 21.3302C22.0774 21.3925 21.9751 21.4769 21.892 21.5786C21.8089 21.6804 21.7467 21.7975 21.7088 21.9233C21.671 22.0491 21.6583 22.1811 21.6715 22.3118C21.6847 22.4425 21.7236 22.5694 21.7858 22.6851C21.848 22.8008 21.9324 22.9031 22.0341 22.9862C22.1359 23.0692 22.253 23.1315 22.3788 23.1693Z" fill="#3C72FC"/>
                                    </svg>-->
                                                                    
                                </div>
                                <div class="content">
                                  <!--  <p>Base Location</p>
                                    <h3>
                                    Polonnaruwa.
                                    </h3>-->
                                </div>
                            </div>
                        </div>    
                    </div>
                    <div class="footer-widgets-wrapper">
            <div class="shape-1">
                <img src="{{ asset('build/assets/img/footer-shape-1.png')}}" alt="">
            </div>
            <div class="container">
                <div class="row">
                    <div class="col-xl-3 col-lg-4 col-md-6 wow fadeInUp" data-wow-delay=".3s">
                        <div class="single-footer-widget">
                            <div class="widget-head">
                                   
                            </div>
                            <div class="footer-content">
                                <p>
                                AryaLabs is a technological innovation company that specialises in creating complex
                                desktop and mobile applications. It functions as the main system of Aryan's Kingdom 
                                Group of Companies (Pvt) Ltd, which is committed to using cutting-edge technological 
                                solutions to address modern problems.
                                </p>
                                <div class="social-icon d-flex align-items-center">
                                    <a href="https://www.facebook.com/share/1DyEHiAhjx/"><i class="fab fa-facebook-f"></i></a>
                                    <a href="#"><i class="fab fa-twitter"></i></a>
                                    <a href="https://www.linkedin.com/company/aryalabs-pvt-ltd/"><i class="fa-brands fa-linkedin-in"></i></a>
                                    <a href="#"><i class="fa-brands fa-youtube"></i></a>
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
                                    <a href="{{ route('about') }}">
                                    <i class="fa-solid fa-chevron-right"></i>
                                    AryaLabs About
                                    </a>
                                </li>
                                <li>
                                    <a href="{{ route('service') }}">
                                            <i class="fa-solid fa-chevron-right"></i>
                                            Our Services
                                    </a>
                                </li>
                                <li>
                                    <a href="{{ route('servicedetails') }}">
                                        <i class="fa-solid fa-chevron-right"></i>
                                            FAQ’S
                                    </a>
                                </li>
                                <li>
                                    <a href="{{ route('contact') }}">
                                        <i class="fa-solid fa-chevron-right"></i>
                                        Contact Us
                                    </a>
                                </li>
                            </ul>
                        </div>
                    </div>
                    <div class="col-xl-3 col-lg-4 col-md-6 ps-lg-5 wow fadeInUp" data-wow-delay=".5s">
                        <div class="single-footer-widget style-margin">
                            <div class="widget-head">
                                <h3>IT Solution</h3>
                            </div>
                            <ul class="list-area">
                                <li>
                                <a href="{{ route('servicedetails') }}">
                            <i class="fa-solid fa-chevron-right"></i>
                                IT Management
                                </a> 
                                </li>
                                <li>
                                <a href="{{ route('servicedetails') }}">
                                        <i class="fa-solid fa-chevron-right"></i>
                                        Web Development
                                    </a>
                                </li>
                                <li>
                                <a href="{{ route('servicedetails') }}">
                                        <i class="fa-solid fa-chevron-right"></i>
                                        Cyber Security
                                    </a>
                                </li>
                                <li>
                                <a href="{{ route('servicedetails') }}">
                                        <i class="fa-solid fa-chevron-right"></i>
                                        SEO Optimization
                                    </a>
                                </li>
                                <li>
                                <a href="{{ route('servicedetails') }}">
                                        <i class="fa-solid fa-chevron-right"></i>
                                        App Development
                                    </a>
                                </li>
                                 <li>
                                <a href="{{ route('servicedetails') }}">
                                        <i class="fa-solid fa-chevron-right"></i>
                                        R & D
                                    </a>
                                </li>
                                 <li>
                                <a href="{{ route('servicedetails') }}">
                                        <i class="fa-solid fa-chevron-right"></i>
                                       AI Development
                                    </a>
                                </li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
            </div>
            <div class="footer-bottom style-2">
                <div class="container">
                    <div class="footer-wrapper d-flex align-items-center justify-content-between">
                        <p class="wow fadeInLeft color-2" data-wow-delay=".3s">
                            © All Copyright 2025 by <a href="{{route('home') }}">AryaLabs</a>
                        </p>
                        <ul class="footer-menu wow fadeInRight" data-wow-delay=".5s">
                            <li>
                            <a href="{{route('contact') }}">
                                    Terms & Condition
                                </a>
                            </li>
                            <li>
                            <a href="{{route('contact') }}">
                                    Privacy Policy
                                </a>
                            </li>
                        </ul>
                    </div>
                </div>
                <a href="#" id="scrollUp" class="scroll-icon">
                <i class="fas fa-arrow-up"></i>  <!-- Change 'far' to 'fas' -->
                </a>
            </div>
        </footer>
        <!--<< Footer Section End >>-->
</body>

<!-- JavaScript Files -->
<script src="{{ asset('js/jquery-3.7.1.min.js') }}"></script>
    <script src="{{ asset('js/jquery.waypoints.js') }}"></script>
    <script src="{{ asset('js/bootstrap.bundle.min.js') }}"></script>
    <script src="{{ asset('js/jquery.meanmenu.min.js') }}"></script>
    <script src="{{ asset('js/swiper-bundle.min.js') }}"></script>
    <script src="{{ asset('js/jquery.magnific-popup.min.js') }}"></script>
    <script src="{{ asset('js/jquery.counterup.min.js') }}"></script>
    <script src="{{ asset('js/wow.min.js') }}"></script>
    <script src="{{ asset('js/ajax-mail.js') }}"></script>
    <script src="{{ asset('js/jquery.nice-select.min.js') }}"></script>
    <script src="{{ asset('js/main.js') }}"></script>
