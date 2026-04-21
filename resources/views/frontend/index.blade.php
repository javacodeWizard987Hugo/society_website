@extends('layouts.master')

@section('content')
        <!-- Hero Section Start -->
        <section class="hero-section fix hero-1 bg-cover" style="background-image: url('{{ asset('img/hero/hero-bg.jpg') }}');">
            <div class="text-transparent">
                <h2>Technology</h2>
            </div>
            <div class="line-shape">
                <img src="{{ asset('img/hero/line-shape.png') }}" alt="shape-img">
            </div>
            <div class="dot-shape">
                <img src="{{ asset('img/hero/dot-shape.png') }}" alt="shape-img">
            </div>
            <div class="frame-shape">
                <img src="{{ asset('img/hero/frame.png') }}" alt="shape-img">
            </div>
            <div class="mask-shape wow fadeInRight" data-wow-delay=".7s">
                <img src="{{ asset('img/hero/mask-shape.png') }}" alt="shape-img">
            </div>
            <div class="container">
                <div class="row g-4 align-items-center">
                    <div class="col-lg-8">
                        <div class="hero-content">
                            <h6 class="wow fadeInUp" data-wow-delay=".2s">Best it SOULTION Provider</h6>
                            <h1 class="wow fadeInUp" data-wow-delay=".4s">
                                Excellent It Services
                                for Your Success
                            </h1>
                            <p class="wow fadeInUp" data-wow-delay=".6s">
                                Consectetur adipiscing elit aenean scelerisque at augue vitae consequat <br> quisque eget congue velit in cursus leo sed sodales est eget turpis.
                            </p>
                            <div class="hero-button">
                                <a href="{{ url('/about') }}" class="theme-btn wow fadeInUp" data-wow-delay=".8s">
                                    Explore More
                                    <i class="fa-solid fa-arrow-right-long"></i>
                                </a>
                                <span class="button-text wow fadeInUp" data-wow-delay=".9s">
                                    <a href="https://www.youtube.com/watch?v=Cn4G2lZ_g2I" class="video-btn ripple video-popup">
                                        <i class="fa-solid fa-play"></i>
                                    </a>
                                    <span class="ms-4 d-line">Watch IT Video</span>
                                </span>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-4">
                        <div class="hero-image wow fadeInUp" data-wow-delay=".4s">
                            <img src="{{ asset('img/hero/hero.png') }}" alt="hero-img">
                        </div>
                    </div>
                </div>
            </div>
        </section>

        <div class="marque-section">
            <div class="marquee-wrapper text-slider">
                <div class="marquee-inner to-left">
                    <ul class="marqee-list d-flex">
                        <li class="marquee-item">
                            <span class="text-slider">Business</span><span class="text-slider"><img src="{{ asset('img/star.svg') }}" alt="img"></span>
                            <span class="text-slider">IT Solution</span><span class="text-slider"><img src="{{ asset('img/star.svg') }}" alt="img"></span>
                            <span class="text-slider">Work Process</span><span class="text-slider"><img src="{{ asset('img/star.svg') }}" alt="img"></span>
                            <span class="text-slider">Technology</span><span class="text-slider"><img src="{{ asset('img/star.svg') }}" alt="img"></span>
                            <span class="text-slider">IT Solution</span><span class="text-slider"><img src="{{ asset('img/star.svg') }}" alt="img"></span>

                            <span class="text-slider">Business</span><span class="text-slider"><img src="{{ asset('img/star.svg') }}" alt="img"></span>
                            <span class="text-slider">IT Solution</span><span class="text-slider"><img src="{{ asset('img/star.svg') }}" alt="img"></span>
                            <span class="text-slider">Work Process</span><span class="text-slider"><img src="{{ asset('img/star.svg') }}" alt="img"></span>
                            <span class="text-slider">Technology</span><span class="text-slider"><img src="{{ asset('img/star.svg') }}" alt="img"></span>
                            <span class="text-slider">IT Solution</span><span class="text-slider"><img src="{{ asset('img/star.svg') }}" alt="img"></span>
                            <span class="text-slider">Business</span><span class="text-slider"><img src="{{ asset('img/star.svg') }}" alt="img"></span>
                            <span class="text-slider">IT Solution</span><span class="text-slider"><img src="{{ asset('img/star.svg') }}" alt="img"></span>
                            <span class="text-slider">Work Process</span><span class="text-slider"><img src="{{ asset('img/star.svg') }}" alt="img"></span>
                            <span class="text-slider">Technology</span><span class="text-slider"><img src="{{ asset('img/star.svg') }}" alt="img"></span>
                            <span class="text-slider">IT Solution</span><span class="text-slider"><img src="{{ asset('img/star.svg') }}" alt="img"></span>
                        </li>
                    </ul>
                </div>
            </div>
        </div>

        <!-- About Section Start -->
        <section class="about-section section-padding fix">
            <div class="container">
                <div class="about-wrapper">
                    <div class="row">
                        <div class="col-lg-6">
                            <div class="about-image-items">
                                <div class="counter-shape float-bob-y">
                                    <div class="icon">
                                        <img src="{{ asset('img/about/icon-1.svg') }}" alt="icon-img">
                                    </div>
                                    <div class="content">
                                        <h3><span class="count">6,561</span>+</h3>
                                    </div>
                                </div>
                                <div class="video-box">
                                    <a href="https://www.youtube.com/watch?v=Cn4G2lZ_g2I" class="video-buttton video-popup">
                                        <i class="fa-solid fa-play"></i>
                                        <img src="{{ asset('img/about/circle-text.png') }}" alt="text-img" class="text-circle">
                                    </a>
                                </div>
                                <div class="about-image-1 bg-cover wow fadeInLeft" data-wow-delay=".3s" style="background-image: url('{{ asset('img/about/01.jpg') }}');">
                                    <div class="about-image-2 wow fadeInUp" data-wow-delay=".5s">
                                        <img src="{{ asset('img/about/02.jpg') }}" alt="about-img">
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-6 mt-4 mt-lg-0">
                            <div class="about-content">
                                <div class="section-title">
                                    <span class="wow fadeInUp">ABOUT INFOTECK</span>
                                    <h2 class="wow fadeInUp" data-wow-delay=".3s">
                                        We Are Increasing Business Success With <span>Technology</span>
                                    </h2>
                                </div>
                                <p class="mt-3 mt-md-0 wow fadeInUp" data-wow-delay=".5s">
                                    It is a long established fact that a reader will be distracted the readable <br> content of a page when looking at layout the point.
                                </p>
                                <div class="about-icon-items">
                                    <div class="icon-items wow fadeInUp" data-wow-delay=".7s">
                                        <div class="icon">
                                            <img src="{{ asset('img/about/icon-2.svg') }}" alt="icon-img">
                                        </div>
                                        <div class="content">
                                            <h4>Problem Solving</h4>
                                            <p>
                                                Aliquam erat volutpat Nullam imperdiet
                                            </p>
                                        </div>
                                    </div>
                                    <div class="icon-items wow fadeInUp" data-wow-delay=".9s">
                                        <div class="icon">
                                            <img src="{{ asset('img/about/icon-3.svg') }}" alt="icon-img">
                                        </div>
                                        <div class="content">
                                            <h4>Mission & Vision</h4>
                                            <p>
                                                Aliquam erat volutpat Nullam imperdiet
                                            </p>
                                        </div>
                                    </div>
                                </div>
                                <div class="about-author">
                                    <div class="about-button wow fadeInUp" data-wow-delay=".5s">
                                        <a href="{{ url('/about') }}" class="theme-btn">
                                            Explore More
                                            <i class="fa-solid fa-arrow-right-long"></i>
                                        </a>
                                    </div>
                                    <div class="author-image wow fadeInUp" data-wow-delay=".7s">
                                        <img src="{{ asset('img/about/author.png') }}" alt="author-img">
                                        <div class="content">
                                            <h6>Ronald Richards</h6>
                                            <p>Co, Founder</p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
@endsection
