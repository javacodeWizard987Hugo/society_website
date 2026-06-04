@extends('layouts.master')

@section('title', 'Home - Summerfield Development Society')

@section('content')

{{-- ═══════════════════════════════════════════════
     PAGE-LEVEL STYLES
═══════════════════════════════════════════════ --}}
@push('styles')
<link href="https://fonts.googleapis.com/css2?family=Playfair+Display:ital,wght@0,700;0,900;1,700&family=DM+Sans:wght@400;500;600&display=swap" rel="stylesheet">
<style>
/* ── Root tokens ── */
:root {
    --sds-navy:       #0F1D3A;
    --sds-navy-mid:   #1B2F57;
    --sds-gold:       #C8922A;
    --sds-gold-light: #F0C96B;
    --sds-cream:      #FAF5ED;
    --sds-warm:       #FFF9F0;
    --sds-text:       #2C2C2A;
    --sds-muted:      #6B6356;
    --sds-border:     #E8E0D4;
}

/* ── Hero ── */
.sds-hero {
    position: relative;
    background: var(--sds-navy);
    overflow: hidden;
    min-height: 88vh;
    display: flex;
    align-items: center;
}
.sds-hero__gold-bar {
    position: absolute;
    left: 0; top: 0; bottom: 0;
    width: 6px;
    background: linear-gradient(180deg, var(--sds-gold-light), var(--sds-gold));
    z-index: 3;
}
.sds-hero__grid {
    position: absolute;
    inset: 0;
    opacity: 0.05;
    pointer-events: none;
    z-index: 1;
}
.sds-hero__circle {
    position: absolute;
    border-radius: 50%;
    border: 0.5px solid rgba(200,146,42,0.15);
    pointer-events: none;
    z-index: 1;
}
.sds-hero__circle--lg  { width: 520px; height: 520px; right: -140px; top: -140px; }
.sds-hero__circle--md  { width: 320px; height: 320px; right: 50px;   bottom: -80px; }
.sds-hero__circle--sm  { width: 180px; height: 180px; right: 200px;  top: 40px; border-color: rgba(200,146,42,0.08); }
.sds-hero__emblem {
    position: absolute;
    right: 60px;
    top: 50%;
    transform: translateY(-50%);
    opacity: 0.06;
    z-index: 1;
    pointer-events: none;
}
.sds-hero__inner {
    position: relative;
    z-index: 4;
    padding: 100px 0 80px 0;
    width: 100%;
}
.sds-hero__badge {
    display: inline-flex;
    align-items: center;
    gap: 8px;
    background: rgba(200,146,42,0.15);
    border: 0.5px solid rgba(200,146,42,0.45);
    color: var(--sds-gold-light);
    font-family: 'DM Sans', sans-serif;
    font-size: 11px;
    font-weight: 600;
    letter-spacing: 1.8px;
    text-transform: uppercase;
    padding: 7px 16px;
    border-radius: 30px;
    margin-bottom: 28px;
}
.sds-hero__badge-dot {
    width: 6px; height: 6px;
    border-radius: 50%;
    background: var(--sds-gold-light);
    animation: sdsPulse 2.2s ease-in-out infinite;
}
@keyframes sdsPulse {
    0%,100% { opacity:1; transform:scale(1); }
    50%      { opacity:.4; transform:scale(.75); }
}
.sds-hero__title {
    font-family: 'Playfair Display', serif;
    font-size: clamp(40px, 5.5vw, 64px);
    font-weight: 900;
    color: #fff;
    line-height: 1.08;
    letter-spacing: -0.5px;
    margin-bottom: 26px;
}
.sds-hero__title em {
    font-style: italic;
    color: var(--sds-gold-light);
}
.sds-hero__desc {
    font-family: 'DM Sans', sans-serif;
    font-size: 17px;
    line-height: 1.72;
    color: rgba(255,255,255,.62);
    max-width: 500px;
    margin-bottom: 40px;
}
.sds-hero__actions { display: flex; align-items: center; gap: 16px; flex-wrap: wrap; }
.sds-btn-gold {
    font-family: 'DM Sans', sans-serif;
    font-size: 14px;
    font-weight: 600;
    background: var(--sds-gold);
    color: var(--sds-navy);
    padding: 14px 32px;
    border: none;
    border-radius: 3px;
    cursor: pointer;
    text-decoration: none;
    letter-spacing: 0.2px;
    transition: background .2s, transform .15s;
    display: inline-block;
    line-height: 1;
}
.sds-btn-gold:hover { background: var(--sds-gold-light); color: var(--sds-navy); transform: translateY(-1px); }
.sds-btn-ghost {
    font-family: 'DM Sans', sans-serif;
    font-size: 14px;
    font-weight: 500;
    background: transparent;
    color: rgba(255,255,255,.8);
    padding: 13px 28px;
    border: 0.5px solid rgba(255,255,255,.3);
    border-radius: 3px;
    cursor: pointer;
    text-decoration: none;
    transition: background .2s, border-color .2s;
    display: inline-block;
    line-height: 1;
}
.sds-btn-ghost:hover { background: rgba(255,255,255,.07); border-color: rgba(255,255,255,.6); color: #fff; }
.sds-hero__stats {
    display: flex;
    gap: 0;
    border-top: 0.5px solid rgba(255,255,255,.1);
    margin-top: 56px;
    padding-top: 32px;
}
.sds-stat { flex: 1; padding-right: 28px; }
.sds-stat + .sds-stat { padding-left: 28px; border-left: 0.5px solid rgba(255,255,255,.1); }
.sds-stat__num {
    font-family: 'Playfair Display', serif;
    font-size: 30px;
    font-weight: 700;
    color: var(--sds-gold-light);
    line-height: 1;
}
.sds-stat__label {
    font-family: 'DM Sans', sans-serif;
    font-size: 11px;
    letter-spacing: .5px;
    color: rgba(255,255,255,.45);
    margin-top: 6px;
    text-transform: uppercase;
}
/* slider overlay */
.sds-hero__slide-overlay {
    position: absolute;
    inset: 0;
    background: linear-gradient(100deg, rgba(15,29,58,.92) 45%, rgba(15,29,58,.55) 100%);
    z-index: 2;
}
.sds-hero__slide-bg {
    position: absolute;
    inset: 0;
    background-size: cover;
    background-position: center;
    z-index: 1;
    transform: scale(1);
    transition: transform 8s ease-out;
}
.swiper-slide-active .sds-hero__slide-bg { transform: scale(1.06); }

/* ── Swiper nav override ── */
.sds-hero .array-button {
    position: absolute;
    bottom: 40px;
    right: 60px;
    z-index: 10;
    display: flex;
    gap: 10px;
}
.sds-hero .array-button button {
    width: 48px; height: 48px;
    border-radius: 50%;
    border: 0.5px solid rgba(255,255,255,.3);
    background: transparent;
    color: #fff;
    font-size: 16px;
    cursor: pointer;
    transition: background .2s, border-color .2s;
    display: flex; align-items: center; justify-content: center;
}
.sds-hero .array-button button:hover { background: var(--sds-gold); border-color: var(--sds-gold); }

/* ── About section ── */
.sds-about { background: var(--sds-warm); }
.sds-about__img-wrap {
    position: relative;
    padding-bottom: 60px;
}
.sds-about__img-main {
    border-radius: 4px;
    overflow: hidden;
    height: 440px;
}
.sds-about__img-main img { width: 100%; height: 100%; object-fit: cover; }
.sds-about__img-float {
    position: absolute;
    bottom: 0;
    right: -32px;
    width: 200px;
    height: 220px;
    border-radius: 4px;
    overflow: hidden;
    border: 6px solid var(--sds-warm);
    box-shadow: 0 12px 40px rgba(15,29,58,.18);
}
.sds-about__img-float img { width: 100%; height: 100%; object-fit: cover; }
.sds-about__accent-line {
    position: absolute;
    top: 24px;
    right: -16px;
    width: 3px;
    height: 60%;
    background: linear-gradient(180deg, var(--sds-gold), transparent);
}
.sds-section-label {
    font-family: 'DM Sans', sans-serif;
    font-size: 11px;
    font-weight: 600;
    letter-spacing: 2.5px;
    text-transform: uppercase;
    color: var(--sds-gold);
    display: flex;
    align-items: center;
    gap: 10px;
    margin-bottom: 16px;
}
.sds-section-label::before {
    content: '';
    display: block;
    width: 28px; height: 2px;
    background: var(--sds-gold);
    border-radius: 2px;
}
.sds-section-title {
    font-family: 'Playfair Display', serif;
    font-size: clamp(28px, 3.5vw, 40px);
    font-weight: 700;
    color: var(--sds-navy);
    line-height: 1.2;
    margin-bottom: 20px;
}
.sds-section-title em { font-style: italic; color: var(--sds-gold); }
.sds-about__pillars { display: flex; flex-direction: column; gap: 20px; margin-top: 32px; }
.sds-pillar {
    display: flex;
    align-items: flex-start;
    gap: 16px;
    padding: 22px 24px;
    background: #fff;
    border-radius: 4px;
    border-left: 3px solid var(--sds-gold);
    box-shadow: 0 2px 16px rgba(15,29,58,.05);
    transition: transform .2s, box-shadow .2s;
}
.sds-pillar:hover { transform: translateX(4px); box-shadow: 0 4px 24px rgba(15,29,58,.08); }
.sds-pillar__icon {
    width: 44px; height: 44px;
    border-radius: 50%;
    background: var(--sds-cream);
    display: flex; align-items: center; justify-content: center;
    font-size: 20px;
    color: var(--sds-gold);
    flex-shrink: 0;
}
.sds-pillar__title {
    font-family: 'DM Sans', sans-serif;
    font-size: 15px;
    font-weight: 600;
    color: var(--sds-navy);
    margin-bottom: 4px;
}
.sds-pillar__text {
    font-family: 'DM Sans', sans-serif;
    font-size: 14px;
    line-height: 1.6;
    color: var(--sds-muted);
    margin: 0;
}

/* ── Our Work / Summary ── */
.sds-work {
    background: var(--sds-navy);
    position: relative;
    overflow: hidden;
}
.sds-work__bg-lines {
    position: absolute;
    inset: 0;
    opacity: 0.04;
    pointer-events: none;
}
.sds-work__inner { position: relative; z-index: 2; }
.sds-work__text {
    font-family: 'DM Sans', sans-serif;
    font-size: 18px;
    line-height: 1.85;
    color: rgba(255,255,255,.72);
    max-width: 760px;
    margin: 0 auto;
    text-align: center;
}
.sds-work__quote-mark {
    font-family: 'Playfair Display', serif;
    font-size: 120px;
    line-height: .7;
    color: var(--sds-gold);
    opacity: 0.2;
    display: block;
    text-align: center;
    margin-bottom: -20px;
    user-select: none;
}
.sds-work .sds-section-label { justify-content: center; }
.sds-work .sds-section-label::before { display: none; }
.sds-work .sds-section-label::after {
    content: '';
    display: block;
    width: 28px; height: 2px;
    background: var(--sds-gold);
    border-radius: 2px;
}
.sds-work .sds-section-title { color: #fff; text-align: center; }
.sds-divider-gold {
    width: 48px; height: 3px;
    background: var(--sds-gold);
    border-radius: 3px;
    margin: 24px auto 0;
}

/* ── Events / News ── */
.sds-events { background: var(--sds-cream); }
.sds-event-card {
    background: #fff;
    border-radius: 4px;
    overflow: hidden;
    box-shadow: 0 2px 20px rgba(15,29,58,.06);
    transition: transform .25s, box-shadow .25s;
    height: 100%;
    display: flex;
    flex-direction: column;
}
.sds-event-card:hover { transform: translateY(-6px); box-shadow: 0 12px 40px rgba(15,29,58,.13); }
.sds-event-card__img {
    height: 220px;
    overflow: hidden;
    position: relative;
}
.sds-event-card__img img {
    width: 100%; height: 100%;
    object-fit: cover;
    transition: transform .4s ease;
}
.sds-event-card:hover .sds-event-card__img img { transform: scale(1.04); }
.sds-event-card__date {
    position: absolute;
    top: 16px; left: 16px;
    background: var(--sds-navy);
    color: var(--sds-gold-light);
    font-family: 'DM Sans', sans-serif;
    font-size: 12px;
    font-weight: 600;
    letter-spacing: .5px;
    padding: 6px 12px;
    border-radius: 3px;
}
.sds-event-card__body {
    padding: 24px;
    flex: 1;
    display: flex;
    flex-direction: column;
}
.sds-event-card__title {
    font-family: 'Playfair Display', serif;
    font-size: 19px;
    font-weight: 700;
    color: var(--sds-navy);
    line-height: 1.3;
    margin-bottom: 10px;
    text-decoration: none;
    transition: color .2s;
}
.sds-event-card__title:hover { color: var(--sds-gold); }
.sds-event-card__excerpt {
    font-family: 'DM Sans', sans-serif;
    font-size: 14px;
    line-height: 1.65;
    color: var(--sds-muted);
    flex: 1;
    margin-bottom: 20px;
}
.sds-event-card__link {
    font-family: 'DM Sans', sans-serif;
    font-size: 13px;
    font-weight: 600;
    color: var(--sds-gold);
    text-decoration: none;
    letter-spacing: .3px;
    display: inline-flex;
    align-items: center;
    gap: 6px;
    transition: gap .2s;
}
.sds-event-card__link:hover { gap: 10px; color: var(--sds-gold); }

/* ── Fallback hero (no slides) ── */
.sds-hero--fallback .sds-hero__inner { min-height: 88vh; }

/* ── Responsive ── */
@media (max-width: 991px) {
    .sds-hero__emblem { display: none; }
    .sds-hero__stats { flex-wrap: wrap; gap: 24px; }
    .sds-stat + .sds-stat { border-left: none; padding-left: 0; }
    .sds-about__img-float { right: 0; }
    .sds-hero .array-button { right: 20px; bottom: 20px; }
}
@media (max-width: 767px) {
    .sds-hero__title { font-size: 36px; }
    .sds-about__img-float { display: none; }
    .sds-hero__stats { display: grid; grid-template-columns: 1fr 1fr; }
}
@media (max-width: 575px) {
    .sds-hero__inner { padding: 70px 0 60px 0; }
    .sds-hero__actions { flex-direction: column; align-items: flex-start; }
    .sds-btn-gold, .sds-btn-ghost { width: 100%; text-align: center; padding: 14px 20px; }
}
</style>
@endpush

{{-- ═══════════════════════════════════════════════
     HERO — WITH SLIDES
═══════════════════════════════════════════════ --}}
@if(count($slides) > 0)
<section class="sds-hero">
    <div class="sds-hero__gold-bar"></div>

    {{-- Background grid pattern --}}
    <div class="sds-hero__grid" aria-hidden="true">
        <svg width="100%" height="100%" xmlns="http://www.w3.org/2000/svg">
            <defs>
                <pattern id="sdsgrid" width="48" height="48" patternUnits="userSpaceOnUse">
                    <path d="M48 0L0 0 0 48" fill="none" stroke="white" stroke-width="0.5"/>
                </pattern>
            </defs>
            <rect width="100%" height="100%" fill="url(#sdsgrid)"/>
        </svg>
    </div>

    {{-- Decorative circles --}}
    <div class="sds-hero__circle sds-hero__circle--lg" aria-hidden="true"></div>
    <div class="sds-hero__circle sds-hero__circle--md" aria-hidden="true"></div>
    <div class="sds-hero__circle sds-hero__circle--sm" aria-hidden="true"></div>

    {{-- Watermark emblem --}}
    <div class="sds-hero__emblem" aria-hidden="true">
        <svg width="280" height="280" viewBox="0 0 200 200" fill="none" xmlns="http://www.w3.org/2000/svg">
            <circle cx="100" cy="100" r="92" stroke="white" stroke-width="1.5"/>
            <circle cx="100" cy="100" r="74" stroke="white" stroke-width="1"/>
            <circle cx="100" cy="100" r="56" stroke="white" stroke-width="0.75"/>
            <path d="M100 28L116 72H162L127 96L140 140L100 116L60 140L73 96L38 72H84Z" stroke="white" stroke-width="1.5" fill="none"/>
        </svg>
    </div>

    {{-- Swiper --}}
    <div class="swiper hero-slider" style="position:absolute;inset:0;z-index:1;">
        <div class="swiper-wrapper">
            @foreach($slides as $slide)
            <div class="swiper-slide">
                <div class="sds-hero__slide-bg"
                     style="background-image: url('{{ asset('storage/' . $slide->image) }}');">
                </div>
                <div class="sds-hero__slide-overlay"></div>
            </div>
            @endforeach
        </div>
    </div>

    {{-- Content --}}
    <div class="sds-hero__inner" style="position:relative;z-index:4;">
        <div class="container">
            <div class="row">
                <div class="col-lg-8 col-xl-7">
                    <div class="sds-hero__badge">
                        <span class="sds-hero__badge-dot"></span>
                        Serving Our Community
                    </div>

                    @php $firstSlide = $slides->first(); @endphp

                    @if($firstSlide->title)
                    <h1 class="sds-hero__title wow fadeInUp" data-wow-delay=".1s">
                        {{ $firstSlide->title }}
                    </h1>
                    @else
                    <h1 class="sds-hero__title wow fadeInUp" data-wow-delay=".1s">
                        Building a Stronger<br><em>Summerfield</em> Together
                    </h1>
                    @endif

                    @if($firstSlide->description)
                    <p class="sds-hero__desc wow fadeInUp" data-wow-delay=".25s">
                        {{ $firstSlide->description }}
                    </p>
                    @endif

                    <div class="sds-hero__actions wow fadeInUp" data-wow-delay=".4s">
                        <a href="#about" class="sds-btn-gold">Get Involved</a>
                        <a href="#events" class="sds-btn-ghost">Recent Events &rarr;</a>
                    </div>

                    <div class="sds-hero__stats wow fadeInUp" data-wow-delay=".55s">
                        <div class="sds-stat">
                            <div class="sds-stat__num">{{ $settings['stat_residents'] ?? '1,200+' }}</div>
                            <div class="sds-stat__label">Residents Served</div>
                        </div>
                        <div class="sds-stat">
                            <div class="sds-stat__num">{{ $settings['stat_events'] ?? '48' }}</div>
                            <div class="sds-stat__label">Community Events</div>
                        </div>
                        <div class="sds-stat">
                            <div class="sds-stat__num">{{ $settings['stat_years'] ?? '15 yrs' }}</div>
                            <div class="sds-stat__label">Of Dedicated Service</div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    {{-- Slider nav --}}
    <div class="array-button" style="position:absolute;bottom:40px;right:60px;z-index:10;display:flex;gap:10px;">
        <button class="array-prev" aria-label="Previous slide"><i class="fal fa-arrow-left"></i></button>
        <button class="array-next" aria-label="Next slide"><i class="fal fa-arrow-right"></i></button>
    </div>
</section>

{{-- ═══════════════════════════════════════════════
     HERO — FALLBACK (no slides)
═══════════════════════════════════════════════ --}}
@else
<section class="sds-hero sds-hero--fallback">
    <div class="sds-hero__gold-bar"></div>

    {{-- Background image --}}
    <div class="sds-hero__slide-bg"
         style="background-image: url('{{ asset('img/header/donation.png') }}');">
    </div>
    <div class="sds-hero__slide-overlay"></div>

    {{-- Grid --}}
    <div class="sds-hero__grid" aria-hidden="true">
        <svg width="100%" height="100%" xmlns="http://www.w3.org/2000/svg">
            <defs>
                <pattern id="sdsgrid2" width="48" height="48" patternUnits="userSpaceOnUse">
                    <path d="M48 0L0 0 0 48" fill="none" stroke="white" stroke-width="0.5"/>
                </pattern>
            </defs>
            <rect width="100%" height="100%" fill="url(#sdsgrid2)"/>
        </svg>
    </div>

    <div class="sds-hero__circle sds-hero__circle--lg" aria-hidden="true"></div>
    <div class="sds-hero__circle sds-hero__circle--md" aria-hidden="true"></div>

    <div class="sds-hero__emblem" aria-hidden="true">
        <svg width="300" height="300" viewBox="0 0 200 200" fill="none" xmlns="http://www.w3.org/2000/svg">
            <circle cx="100" cy="100" r="92" stroke="white" stroke-width="1.5"/>
            <circle cx="100" cy="100" r="74" stroke="white" stroke-width="1"/>
            <circle cx="100" cy="100" r="56" stroke="white" stroke-width="0.75"/>
            <path d="M100 28L116 72H162L127 96L140 140L100 116L60 140L73 96L38 72H84Z" stroke="white" stroke-width="1.5" fill="none"/>
        </svg>
    </div>

    <div class="sds-hero__inner" style="position:relative;z-index:4;">
        <div class="container">
            <div class="row">
                <div class="col-lg-8 col-xl-7">
                    <div class="sds-hero__badge">
                        <span class="sds-hero__badge-dot"></span>
                        Serving Our Community Since {{ $settings['founded_year'] ?? '2009' }}
                    </div>

                    <h1 class="sds-hero__title wow fadeInUp" data-wow-delay=".1s">
                        Welcome to<br><em>Summerfield</em><br>Development Society
                    </h1>

                    <p class="sds-hero__desc wow fadeInUp" data-wow-delay=".25s">
                        {{ $settings['hero_description'] ?? 'Fostering harmony, wellbeing, and sustainable progress for every resident in our community.' }}
                    </p>

                    <div class="sds-hero__actions wow fadeInUp" data-wow-delay=".4s">
                        <a href="#about" class="sds-btn-gold">Discover Our Work</a>
                        <a href="#events" class="sds-btn-ghost">Recent Events &rarr;</a>
                    </div>

                    <div class="sds-hero__stats wow fadeInUp" data-wow-delay=".55s">
                        <div class="sds-stat">
                            <div class="sds-stat__num">{{ $settings['stat_residents'] ?? '1,200+' }}</div>
                            <div class="sds-stat__label">Residents Served</div>
                        </div>
                        <div class="sds-stat">
                            <div class="sds-stat__num">{{ $settings['stat_events'] ?? '48' }}</div>
                            <div class="sds-stat__label">Community Events</div>
                        </div>
                        <div class="sds-stat">
                            <div class="sds-stat__num">{{ $settings['stat_years'] ?? '15 yrs' }}</div>
                            <div class="sds-stat__label">Of Dedicated Service</div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
@endif

{{-- ═══════════════════════════════════════════════
     ABOUT — VISION & MISSION
═══════════════════════════════════════════════ --}}
<section class="sds-about section-padding fix" id="about">
    <div class="container">
        <div class="row g-5 align-items-center">

            {{-- Image column --}}
            <div class="col-lg-5">
                <div class="sds-about__img-wrap wow fadeInLeft" data-wow-delay=".2s">
                    <div class="sds-about__img-main">
                        <img src="{{ asset('img/about/01.jpg') }}" alt="Our community">
                    </div>
                    <div class="sds-about__img-float">
                        <img src="{{ asset('img/hero/team.png') }}" alt="Our team">
                    </div>
                    <div class="sds-about__accent-line"></div>
                </div>
            </div>

            {{-- Content column --}}
            <div class="col-lg-7">
                <div class="wow fadeInRight" data-wow-delay=".3s">
                    <div class="sds-section-label">Who We Are</div>
                    <h2 class="sds-section-title">
                        Building a Stronger<br><em>Community</em> Together
                    </h2>
                    <p style="font-family:'DM Sans',sans-serif;font-size:16px;line-height:1.75;color:var(--sds-muted);margin-bottom:8px;">
                        The Summerfield Development Society is dedicated to the holistic growth of our neighbourhood — from infrastructure and environment to education and social wellbeing.
                    </p>

                    <div class="sds-about__pillars">
                        {{-- Vision --}}
                        <div class="sds-pillar">
                            <div class="sds-pillar__icon">
                                <i class="fal fa-eye"></i>
                            </div>
                            <div>
                                <div class="sds-pillar__title">Our Vision</div>
                                <p class="sds-pillar__text">{{ $settings['vision'] ?? 'To foster a harmonious, inclusive, and self-sufficient community where every resident thrives.' }}</p>
                            </div>
                        </div>
                        {{-- Mission --}}
                        <div class="sds-pillar">
                            <div class="sds-pillar__icon">
                                <i class="fal fa-bullseye-arrow"></i>
                            </div>
                            <div>
                                <div class="sds-pillar__title">Our Mission</div>
                                <p class="sds-pillar__text">{{ $settings['mission'] ?? 'To enhance the wellbeing of residents through community-driven initiatives, advocacy, and sustainable development.' }}</p>
                            </div>
                        </div>
                        {{-- Values --}}
                        @if(!empty($settings['values']))
                        <div class="sds-pillar">
                            <div class="sds-pillar__icon">
                                <i class="fal fa-hands-heart"></i>
                            </div>
                            <div>
                                <div class="sds-pillar__title">Our Values</div>
                                <p class="sds-pillar__text">{{ $settings['values'] }}</p>
                            </div>
                        </div>
                        @endif
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

{{-- ═══════════════════════════════════════════════
     OUR WORK SUMMARY
═══════════════════════════════════════════════ --}}
<section class="sds-work section-padding fix" id="work">
    {{-- Diagonal lines bg --}}
    <div class="sds-work__bg-lines" aria-hidden="true">
        <svg width="100%" height="100%" xmlns="http://www.w3.org/2000/svg">
            <defs>
                <pattern id="diag" width="32" height="32" patternUnits="userSpaceOnUse" patternTransform="rotate(45)">
                    <line x1="0" y1="0" x2="0" y2="32" stroke="white" stroke-width="0.8"/>
                </pattern>
            </defs>
            <rect width="100%" height="100%" fill="url(#diag)"/>
        </svg>
    </div>

    {{-- Decorative circles --}}
    <div class="sds-hero__circle" style="width:400px;height:400px;left:-120px;top:-100px;z-index:1;" aria-hidden="true"></div>
    <div class="sds-hero__circle" style="width:240px;height:240px;right:40px;bottom:-60px;z-index:1;" aria-hidden="true"></div>

    <div class="container">
        <div class="sds-work__inner text-center">
            <div class="sds-section-label wow fadeInUp">Our Work</div>
            <h2 class="sds-section-title wow fadeInUp" data-wow-delay=".15s">
                Summary of Our Activities
            </h2>
            <div class="sds-divider-gold wow fadeInUp" data-wow-delay=".2s"></div>

            <div class="row justify-content-center mt-5">
                <div class="col-lg-9">
                    <span class="sds-work__quote-mark" aria-hidden="true">&ldquo;</span>
                    <p class="sds-work__text wow fadeInUp" data-wow-delay=".3s">
                        {{ $settings['our_work_summary'] ?? 'The Summerfield Development Society has worked tirelessly to improve the quality of life for all residents through a wide range of programmes, events, and infrastructure initiatives.' }}
                    </p>
                </div>
            </div>
        </div>
    </div>
</section>

{{-- ═══════════════════════════════════════════════
     RECENT EVENTS
═══════════════════════════════════════════════ --}}
<section class="sds-events section-padding fix" id="events">
    <div class="container">
        <div class="row align-items-end mb-5">
            <div class="col-lg-7">
                <div class="sds-section-label wow fadeInUp">Latest Updates</div>
                <h2 class="sds-section-title wow fadeInUp" data-wow-delay=".15s">
                    Recent Events &amp; <em>News</em>
                </h2>
            </div>
            <div class="col-lg-5 text-lg-end wow fadeInUp" data-wow-delay=".2s">
                <a href="{{ route('events') }}" class="sds-btn-gold" style="background:var(--sds-navy);color:#fff;">
                    View All Events &rarr;
                </a>
            </div>
        </div>

        <div class="row g-4">
            @forelse($recent_events as $event)
            <div class="col-xl-4 col-lg-6 col-md-6 wow fadeInUp" data-wow-delay="{{ $loop->index * 0.12 }}s">
                <div class="sds-event-card">
                    <div class="sds-event-card__img">
                        <img src="{{ $event->image ? asset('storage/' . $event->image) : asset('img/news/01.jpg') }}"
                             alt="{{ $event->title }}">
                        <span class="sds-event-card__date">
                            {{ \Carbon\Carbon::parse($event->date)->format('M Y') }}
                        </span>
                    </div>
                    <div class="sds-event-card__body">
                        <a href="#" class="sds-event-card__title">{{ $event->title }}</a>
                        <p class="sds-event-card__excerpt">{{ Str::limit($event->description, 110) }}</p>
                        <a href="#" class="sds-event-card__link">
                            Read More <i class="fal fa-arrow-right" style="font-size:12px;"></i>
                        </a>
                    </div>
                </div>
            </div>
            @empty
            <div class="col-12 text-center py-5">
                <p style="font-family:'DM Sans',sans-serif;color:var(--sds-muted);">No recent events at the moment. Check back soon.</p>
            </div>
            @endforelse
        </div>
    </div>
</section>

@endsection
