@extends('layouts.master')

@section('title', 'Home - Community Organization')

@section('content')
<section class="hero-section fix hero-1 bg-cover" style="background-image: url('{{ asset('img/hero/hero-bg.jpg') }}');">
    <div class="container">
        <div class="row g-4 align-items-center">
            <div class="col-lg-12">
                <div class="hero-content text-center">
                    <h6 class="wow fadeInUp" data-wow-delay=".2s">WELCOME TO OUR COMMUNITY</h6>
                    <h1 class="wow fadeInUp" data-wow-delay=".4s">Fostering Unity and Support</h1>
                    <p class="wow fadeInUp" data-wow-delay=".6s">
                        Improving quality of life through compassion and collaboration.
                    </p>
                </div>
            </div>
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

<section class="service-section fix section-padding bg-cover" style="background-image: url('{{ asset('img/service/service-bg.jpg') }}');">
    <div class="container">
        <div class="section-title text-center">
            <span class="wow fadeInUp">OUR WORK</span>
            <h2 class="wow fadeInUp" data-wow-delay=".3s">Summary of Our Activities</h2>
        </div>
        <div class="row mt-5 justify-content-center">
            <div class="col-lg-8 text-center text-white">
                <p class="fs-5">{{ $settings['our_work_summary'] ?? 'Summary of our work...' }}</p>
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
