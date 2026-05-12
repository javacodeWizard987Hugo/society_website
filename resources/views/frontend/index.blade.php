@extends('layouts.master')

@section('title', 'Home - Community Organization')

@section('content')
@if(count($slides) > 0)
<!-- Custom Styling -->
<style>
    .work-summary-text {
        font-size: 22px;   /* increase text size */
        line-height: 1.7;  /* better readability */
    }
</style>
<section class="hero-section fix hero-1">
    <div class="swiper hero-slider">
        <div class="swiper-wrapper">
            @foreach($slides as $slide)
            <div class="swiper-slide bg-cover" style="background-image: linear-gradient(rgba(0, 0, 0, 0.4), rgba(0, 0, 0, 0.4)), url('{{ asset('storage/' . $slide->image) }}');">
                <div class="container">
                    <div class="row g-4 align-items-center">
                        <div class="col-lg-12">
                            <div class="hero-content text-center">
                                @if($slide->subtitle)
                                <h6 class="wow fadeInUp" data-wow-delay=".2s">{{ $slide->subtitle }}</h6>
                                @endif
                                @if($slide->title)
                                <h1 class="wow fadeInUp" data-wow-delay=".4s">{{ $slide->title }}</h1>
                                @endif
                                @if($slide->description)
                                <p class="wow fadeInUp" data-wow-delay=".6s">
                                    {{ $slide->description }}
                                </p>
                                @endif
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            @endforeach
        </div>
        <div class="array-button">
            <button class="array-prev"><i class="fal fa-arrow-left"></i></button>
            <button class="array-next"><i class="fal fa-arrow-right"></i></button>
        </div>
    </div>
</section>
@else
<section class="hero-section fix hero-1 bg-cover" style="background-image: url('{{ asset('img/hero/myhero.png') }}');">
    <div class="container">
        <div class="row g-4 align-items-center">
            <div class="col-lg-12">
                <div class="hero-content text-center">
                    <h6 data-animation="fadeInUp" data-delay=".2s">WELCOME TO OUR SUMMERFIELD COMMUNITY</h6>
                                    <h1 data-animation="fadeInUp" data-delay=".4s">Fostering Unity and Support</h1>
                                    <p data-animation="fadeInUp" data-delay=".6s">
                </div>
            </div>
        </div>
    </div>
</section>
@endif

<section class="about-section section-padding fix">
    <div class="container">
        <div class="row">
           <div class="col-lg-6">
            <div class="about-image-items">

                <div class="about-image-1 bg-cover wow fadeInLeft"
                    data-wow-delay=".3s"
                    style="background-image: url('{{ asset('img/about/01.jpg') }}'); height: 100%;">

                 <div class="about-image-2 wow fadeInUp" data-wow-delay=".5s"
     style="height: 500px; overflow: hidden;">

    <img src="{{ asset('img/hero/team.png') }}"
         alt="about-img"
         style="width:150%; height: 100%; object-fit: cover;">
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
                          <div class="icon" style="background-image: url('{{ asset('img/hero/team.png') }}');"></div>

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

<section class="service-section fix section-padding bg-cover" 
         style="background-image: url('{{ asset('img/service/service-bg.jpg') }}');">
    
    <div class="container">
        
        <div class="section-title text-center">
            <span class="wow fadeInUp">OUR WORK</span>
            <h2 class="wow fadeInUp" data-wow-delay=".3s">
                Summary of Our Activities
            </h2>
        </div>

        <div class="row mt-5 justify-content-center">
            <div class="col-lg-8 text-center">
                
                <p class="text-dark fw-normal work-summary-text wow fadeInUp" data-wow-delay=".4s">
                    {{ $settings['our_work_summary'] ?? 'Summary of our work...' }}
                </p>

            </div>
        </div>

    </div>
</section>

<!-- Custom Styling -->
<style>
    .work-summary-text {
        font-size: 18px;   /* increase text size */
        line-height: 1.7;  /* better readability */
    }
</style>


    </div>
</section>

<section class="news-section section-padding fix">
    <div class="container">
        <div class="section-title text-center">
            <span class="wow fadeInUp">RECENT EVENTS</span>
            <h2 class="wow fadeInUp" data-wow-delay=".3s">Latest From SDS</h2>
        </div>
        <div class="row mt-1">
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
