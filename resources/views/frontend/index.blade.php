@extends('layouts.master')

@section('title', 'Home - Community Organization')

@section('content')
<!-- Hero Section Start -->
<section class="hero-section fix hero-1">
    <div class="swiper hero-slider">
        <div class="swiper-wrapper">
            @forelse($slides as $slide)
            <div class="swiper-slide">
                <div class="hero-image bg-cover" style="background-image: url('{{ asset('storage/' . $slide->image) }}');">
                    <div class="container-fluid px-5">
                        <div class="row g-4 align-items-center justify-content-center">
                            <div class="col-lg-11">
                                <div class="hero-content text-center">
                                    <h6 data-animation="fadeInUp" data-delay=".2s">{{ $slide->subtitle }}</h6>
                                    <h1 data-animation="fadeInUp" data-delay=".4s">{{ $slide->title }}</h1>
                                    <p data-animation="fadeInUp" data-delay=".6s">
                                        {{ $slide->description }}
                                    </p>
                                    @if($settings['hero_button_text'] ?? false)
                                    <div class="hero-button" data-animation="fadeInUp" data-delay=".8s">
                                        <a href="{{ $settings['hero_button_url'] ?? '#' }}" class="theme-btn">
                                            {{ $settings['hero_button_text'] }}
                                            <i class="fa-solid fa-arrow-right-long"></i>
                                        </a>
                                    </div>
                                    @endif
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            @empty
            <div class="swiper-slide">
                <div class="hero-image bg-cover" style="background-image: url('{{ asset('img/hero/hero-bg.jpg') }}');">
                    <div class="container-fluid px-5">
                        <div class="row g-4 align-items-center justify-content-center">
                            <div class="col-lg-11">
                                <div class="hero-content text-center">
                                    <h6 data-animation="fadeInUp" data-delay=".2s">WELCOME TO OUR SUMMERFIELD COMMUNITY</h6>
                                    <h1 data-animation="fadeInUp" data-delay=".4s">Fostering Unity and Support</h1>
                                    <p data-animation="fadeInUp" data-delay=".6s">
                                        Improving quality of life through compassion and collaboration.
                                    </p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            @endforelse
        </div>
        <div class="array-button">
            <button class="array-prev"><i class="fal fa-arrow-left"></i></button>
            <button class="array-next"><i class="fal fa-arrow-right"></i></button>
        </div>
    </div>
</section>

<section class="about-section section-padding fix">
    <div class="container">
        <div class="row">
            <div class="col-lg-6">
                <div class="about-image-items">
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
                        <span class="wow fadeInUp">OUR VISION & MISSION</span>
                        <h2 class="wow fadeInUp" data-wow-delay=".3s">Building a Stronger <span>Community</span> Together</h2>
                    </div>
                    <div class="about-icon-items">
                        <div class="icon-items wow fadeInUp" data-wow-delay=".7s">
                            <div class="icon"><img src="{{ asset('img/about/icon-2.svg') }}" alt="icon-img"></div>
                            <div class="content">
                                <h4>Vision</h4>
                                <p>{{ $settings['vision'] ?? 'To foster a harmonious community.' }}</p>
                            </div>
                        </div>
                        <div class="icon-items wow fadeInUp" data-wow-delay=".9s">
                            <div class="icon"><img src="{{ asset('img/about/icon-3.svg') }}" alt="icon-img"></div>
                            <div class="content">
                                <h4>Mission</h4>
                                <p>{{ $settings['mission'] ?? 'To enhance the wellbeing of residents.' }}</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

<section class="news-section section-padding fix">
    <div class="container">
        <div class="section-title text-center">
            <span class="wow fadeInUp">RECENT EVENTS</span>
            <h2 class="wow fadeInUp" data-wow-delay=".3s">Latest From SDS</h2>
        </div>
        <div class="row mt-4">
            @foreach($recent_events as $event)
            <div class="col-xl-4 col-lg-6 col-md-6 wow fadeInUp" data-wow-delay=".3s">
                <div class="single-news-items">
                    <div class="news-image bg-cover" style="background-image: url('{{ $event->image ? asset('storage/' . $event->image) : asset('img/news/01.jpg') }}');">
                        <div class="post-date"><span>{{ \Carbon\Carbon::parse($event->date)->format('M, Y') }}</span></div>
                    </div>
                    <div class="news-content">
                        <h3><a href="#">{{ $event->title }}</a></h3>
                        <p>{{ Str::limit($event->description, 100) }}</p>
                    </div>
                </div>
            </div>
            @endforeach
        </div>
    </div>
</section>
@endsection

@push('styles')
<style>
    .hero-section.hero-1 {
        position: relative;
        overflow: hidden;
    }
    .hero-image {
        padding: 220px 0 180px;
        min-height: 850px;
        display: flex;
        align-items: center;
        position: relative;
    }
    .hero-image::before {
        content: "";
        position: absolute;
        top: 0;
        left: 0;
        width: 100%;
        height: 100%;
        background: rgba(0, 0, 0, 0.4);
        z-index: 1;
    }
    .hero-content {
        position: relative;
        z-index: 2;
    }
    .hero-content h1 {
        font-size: 80px !important;
        color: #fff;
        margin-bottom: 20px;
        text-transform: capitalize;
    }
    .hero-content p {
        color: #fff;
        font-size: 18px;
        margin-bottom: 30px;
    }
    .hero-content h6 {
        color: #fff;
        font-weight: 600;
        margin-bottom: 15px;
        letter-spacing: 3px;
    }
    .array-button {
        position: absolute;
        top: 50%;
        width: 100%;
        display: flex;
        justify-content: space-between;
        padding: 0 50px;
        z-index: 9;
        transform: translateY(-50%);
    }
    .array-prev, .array-next {
        width: 60px;
        height: 60px;
        line-height: 60px;
        text-align: center;
        background: rgba(255,255,255,0.2);
        color: #fff;
        border: none;
        border-radius: 50%;
        transition: all .4s;
    }
    .array-prev:hover, .array-next:hover {
        background: var(--theme-color, #007bff);
    }
    @media (max-width: 991px) {
        .hero-content h1 {
            font-size: 50px;
        }
        .hero-image {
            padding: 150px 0 100px;
            min-height: 600px;
        }
    }
    @media (max-width: 767px) {
        .hero-content h1 {
            font-size: 40px;
        }
        .array-button {
            display: none;
        }
    }
</style>
@endpush
