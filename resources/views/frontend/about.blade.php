@extends('layouts.master')
@section('title', 'About - Summerfield Development Society')

@section('content')

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

/* ══════════════════════════════════
   HERO BREADCRUMB
══════════════════════════════════ */
.sds-breadcrumb {
    position: relative;
    min-height: 420px;
    display: flex;
    align-items: center;
    justify-content: center;
    overflow: hidden;
    background: var(--sds-navy);
}
.sds-breadcrumb__bg {
    position: absolute;
    inset: 0;
    background-size: cover;
    background-position: center;
    opacity: 0.35;
    transform: scale(1.04);
    transition: transform 6s ease-out;
}
.sds-breadcrumb__bg.loaded { transform: scale(1); }
.sds-breadcrumb__overlay {
    position: absolute;
    inset: 0;
    background: linear-gradient(135deg, rgba(2, 7, 17, 0.05) 40%, rgba(200,146,42,.18) 100%);
}
.sds-breadcrumb__grid {
    position: absolute;
    inset: 0;
    opacity: 0.04;
    pointer-events: none;
}
.sds-breadcrumb__gold-bar {
    position: absolute;
    left: 0; top: 0; bottom: 0;
    width: 5px;
    background: linear-gradient(180deg, var(--sds-gold-light), var(--sds-gold));
}
.sds-breadcrumb__inner {
    position: relative;
    z-index: 3;
    text-align: center;
    padding: 40px 20px;
}
.sds-breadcrumb__eyebrow {
    font-family: 'DM Sans', sans-serif;
    font-size: 11px;
    font-weight: 600;
    letter-spacing: 3px;
    text-transform: uppercase;
    color: var(--sds-gold-light);
    display: flex;
    align-items: center;
    justify-content: center;
    gap: 12px;
    margin-bottom: 20px;
}
.sds-breadcrumb__eyebrow::before,
.sds-breadcrumb__eyebrow::after {
    content: '';
    display: block;
    width: 36px; height: 1px;
    background: var(--sds-gold);
}
.sds-breadcrumb__title {
    font-family: 'Playfair Display', serif;
    font-size: clamp(36px, 5vw, 60px);
    font-weight: 900;
    color: #fff;
    line-height: 1.1;
    margin-bottom: 20px;
}
.sds-breadcrumb__title em { font-style: italic; color: var(--sds-gold-light); }
.sds-breadcrumb__crumbs {
    display: flex;
    align-items: center;
    justify-content: center;
    gap: 8px;
    font-family: 'DM Sans', sans-serif;
    font-size: 13px;
    color: rgba(255,255,255,.55);
}
.sds-breadcrumb__crumbs a {
    color: rgba(255,255,255,.7);
    text-decoration: none;
    transition: color .2s;
}
.sds-breadcrumb__crumbs a:hover { color: var(--sds-gold-light); }
.sds-breadcrumb__crumbs span { color: var(--sds-gold-light); }
/* Decorative circles */
.sds-bc-circle {
    position: absolute;
    border-radius: 50%;
    border: 0.5px solid rgba(200,146,42,.15);
    pointer-events: none;
}

/* ══════════════════════════════════
   SECTION LABELS & TITLES
══════════════════════════════════ */
.sds-label {
    font-family: 'DM Sans', sans-serif;
    font-size: 11px;
    font-weight: 600;
    letter-spacing: 2.5px;
    text-transform: uppercase;
    color: var(--sds-gold);
    display: flex;
    align-items: center;
    gap: 10px;
    margin-bottom: 14px;
}
.sds-label::before {
    content: '';
    display: block;
    width: 28px; height: 2px;
    background: var(--sds-gold);
    border-radius: 2px;
}
.sds-h2 {
    font-family: 'Playfair Display', serif;
    font-size: clamp(28px, 3.5vw, 42px);
    font-weight: 700;
    color: var(--sds-navy);
    line-height: 1.18;
    margin-bottom: 18px;
}
.sds-h2 em { font-style: italic; color: var(--sds-gold); }
.sds-body {
    font-family: 'DM Sans', sans-serif;
    font-size: 16px;
    line-height: 1.78;
    color: var(--sds-muted);
}

/* ══════════════════════════════════
   WHO WE ARE — intro
══════════════════════════════════ */
.sds-intro { background: var(--sds-warm); }
.sds-intro__quote {
    font-family: 'Playfair Display', serif;
    font-size: clamp(18px, 2.4vw, 24px);
    font-style: italic;
    line-height: 1.65;
    color: var(--sds-navy);
    border-left: 4px solid var(--sds-gold);
    padding: 20px 28px;
    background: #fff;
    border-radius: 0 4px 4px 0;
    box-shadow: 0 2px 20px rgba(15,29,58,.06);
    margin-top: 28px;
}
.sds-intro__quote cite {
    display: block;
    font-style: normal;
    font-family: 'DM Sans', sans-serif;
    font-size: 13px;
    font-weight: 600;
    color: var(--sds-gold);
    margin-top: 12px;
    letter-spacing: .5px;
}

/* Stats row */
.sds-intro-stats {
    display: grid;
    grid-template-columns: repeat(3, 1fr);
    gap: 1px;
    background: var(--sds-border);
    border: 1px solid var(--sds-border);
    border-radius: 6px;
    overflow: hidden;
    margin-top: 40px;
}
.sds-intro-stat {
    background: #fff;
    padding: 28px 20px;
    text-align: center;
    transition: background .2s;
}
.sds-intro-stat:hover { background: var(--sds-cream); }
.sds-intro-stat__num {
    font-family: 'Playfair Display', serif;
    font-size: 34px;
    font-weight: 700;
    color: var(--sds-navy);
    line-height: 1;
    counter-reset: none;
}
.sds-intro-stat__num span { color: var(--sds-gold); }
.sds-intro-stat__label {
    font-family: 'DM Sans', sans-serif;
    font-size: 12px;
    font-weight: 500;
    letter-spacing: .5px;
    text-transform: uppercase;
    color: var(--sds-muted);
    margin-top: 6px;
}

/* Image collage */
.sds-intro__collage {
    position: relative;
    height: 480px;
}
.sds-collage-img {
    position: absolute;
    border-radius: 4px;
    overflow: hidden;
    box-shadow: 0 8px 32px rgba(15,29,58,.14);
}
.sds-collage-img img { width: 100%; height: 100%; object-fit: cover; }
.sds-collage-img--a { top: 0; left: 0; width: 62%; height: 58%; }
.sds-collage-img--b { top: 20%; right: 0; width: 44%; height: 52%; border: 5px solid var(--sds-warm); }
.sds-collage-img--c { bottom: 0; left: 10%; width: 52%; height: 44%; }
.sds-collage-badge {
    position: absolute;
    bottom: 20px;
    right: 0;
    background: var(--sds-gold);
    color: var(--sds-navy);
    font-family: 'Playfair Display', serif;
    font-size: 13px;
    font-weight: 700;
    padding: 14px 20px;
    border-radius: 4px;
    text-align: center;
    line-height: 1.3;
    min-width: 110px;
    box-shadow: 0 4px 20px rgba(200,146,42,.35);
}
.sds-collage-badge strong {
    display: block;
    font-size: 30px;
    line-height: 1;
}

/* ══════════════════════════════════
   WHAT WE DO — pillars
══════════════════════════════════ */
.sds-pillars { background: #fff; }
.sds-pillar-card {
    background: var(--sds-warm);
    border-radius: 6px;
    padding: 36px 28px 32px;
    border-bottom: 3px solid transparent;
    transition: border-color .25s, transform .25s, box-shadow .25s, background .25s;
    height: 100%;
    cursor: default;
    position: relative;
    overflow: hidden;
}
.sds-pillar-card::before {
    content: '';
    position: absolute;
    top: 0; left: 0; right: 0;
    height: 3px;
    background: var(--sds-gold);
    transform: scaleX(0);
    transform-origin: left;
    transition: transform .35s ease;
}
.sds-pillar-card:hover::before { transform: scaleX(1); }
.sds-pillar-card:hover {
    background: #fff;
    transform: translateY(-6px);
    box-shadow: 0 16px 48px rgba(15,29,58,.1);
}
.sds-pillar-card__num {
    font-family: 'Playfair Display', serif;
    font-size: 56px;
    font-weight: 900;
    color: var(--sds-border);
    line-height: 1;
    margin-bottom: 8px;
    transition: color .25s;
    user-select: none;
}
.sds-pillar-card:hover .sds-pillar-card__num { color: rgba(200,146,42,.18); }
.sds-pillar-card__icon {
    width: 56px; height: 56px;
    border-radius: 50%;
    background: var(--sds-cream);
    display: flex; align-items: center; justify-content: center;
    font-size: 22px;
    color: var(--sds-gold);
    margin-bottom: 20px;
    transition: background .25s, color .25s;
}
.sds-pillar-card:hover .sds-pillar-card__icon {
    background: var(--sds-gold);
    color: #fff;
}
.sds-pillar-card__title {
    font-family: 'Playfair Display', serif;
    font-size: 20px;
    font-weight: 700;
    color: var(--sds-navy);
    margin-bottom: 12px;
    line-height: 1.25;
}
.sds-pillar-card__text {
    font-family: 'DM Sans', sans-serif;
    font-size: 14px;
    line-height: 1.72;
    color: var(--sds-muted);
    margin: 0;
}

/* ══════════════════════════════════
   VISION / MISSION SPLIT
══════════════════════════════════ */
.sds-vm { background: var(--sds-cream); }
.sds-vm-card {
    border-radius: 6px;
    padding: 44px 36px;
    height: 100%;
    position: relative;
    overflow: hidden;
}
.sds-vm-card--vision {
    background: var(--sds-navy);
}
.sds-vm-card--mission {
    background: var(--sds-gold);
}
.sds-vm-card__watermark {
    position: absolute;
    bottom: -20px;
    right: -20px;
    font-family: 'Playfair Display', serif;
    font-size: 120px;
    font-weight: 900;
    line-height: 1;
    opacity: 0.06;
    user-select: none;
    color: #fff;
}
.sds-vm-card__eyebrow {
    font-family: 'DM Sans', sans-serif;
    font-size: 11px;
    font-weight: 600;
    letter-spacing: 2.5px;
    text-transform: uppercase;
    margin-bottom: 16px;
    display: flex;
    align-items: center;
    gap: 8px;
}
.sds-vm-card--vision .sds-vm-card__eyebrow { color: var(--sds-gold-light); }
.sds-vm-card--mission .sds-vm-card__eyebrow { color: var(--sds-navy); }
.sds-vm-card__eyebrow i { font-size: 16px; }
.sds-vm-card__title {
    font-family: 'Playfair Display', serif;
    font-size: 28px;
    font-weight: 700;
    line-height: 1.2;
    margin-bottom: 16px;
}
.sds-vm-card--vision .sds-vm-card__title { color: #fff; }
.sds-vm-card--mission .sds-vm-card__title { color: var(--sds-navy); }
.sds-vm-card__text {
    font-family: 'DM Sans', sans-serif;
    font-size: 15px;
    line-height: 1.78;
    position: relative;
    z-index: 1;
}
.sds-vm-card--vision .sds-vm-card__text { color: rgba(255,255,255,.72); }
.sds-vm-card--mission .sds-vm-card__text { color: rgba(15,29,58,.75); }

/* ══════════════════════════════════
   CTA STRIP
══════════════════════════════════ */
.sds-cta {
    background: var(--sds-navy);
    position: relative;
    overflow: hidden;
    padding: 70px 0;
}
.sds-cta__bg {
    position: absolute;
    inset: 0;
    opacity: 0.04;
    pointer-events: none;
}
.sds-cta__title {
    font-family: 'Playfair Display', serif;
    font-size: clamp(26px, 3vw, 38px);
    font-weight: 700;
    color: #fff;
    line-height: 1.25;
}
.sds-cta__title em { color: var(--sds-gold-light); font-style: italic; }
.sds-cta__sub {
    font-family: 'DM Sans', sans-serif;
    font-size: 15px;
    color: rgba(255,255,255,.6);
    margin-top: 10px;
    line-height: 1.65;
}
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
    letter-spacing: .2px;
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

/* ── Counter animation ── */
.sds-counter { display: inline-block; }

/* ── Responsive ── */
@media (max-width: 991px) {
    .sds-intro__collage { height: 320px; margin-bottom: 40px; }
    .sds-collage-img--b { width: 50%; }
    .sds-intro-stats { grid-template-columns: repeat(3,1fr); }
}
@media (max-width: 767px) {
    .sds-intro-stats { grid-template-columns: 1fr; gap: 0; }
    .sds-intro__collage { height: 260px; }
    .sds-collage-img--c { display: none; }
    .sds-vm-card { padding: 32px 24px; }
}
@media (max-width: 575px) {
    .sds-breadcrumb { min-height: 300px; }
    .sds-pillar-card { padding: 28px 20px; }
}
</style>
@endpush

{{-- ═══════════════════════════════════
     HERO BREADCRUMB
═══════════════════════════════════ --}}
<section class="sds-breadcrumb">
    <div class="sds-breadcrumb__gold-bar"></div>
    <div class="sds-breadcrumb__bg" id="bcBg"
         style="background-image: url('{{ asset('img/aboutus.png') }}');">
    </div>
    <div class="sds-breadcrumb__overlay"></div>
    <div class="sds-breadcrumb__grid" aria-hidden="true">
        <svg width="100%" height="100%" xmlns="http://www.w3.org/2000/svg">
            <defs>
                <pattern id="bcgrid" width="48" height="48" patternUnits="userSpaceOnUse">
                    <path d="M48 0L0 0 0 48" fill="none" stroke="white" stroke-width=".5"/>
                </pattern>
            </defs>
            <rect width="100%" height="100%" fill="url(#bcgrid)"/>
        </svg>
    </div>
    {{-- Decorative circles --}}
    <div class="sds-bc-circle" style="width:400px;height:400px;right:-100px;top:-100px;" aria-hidden="true"></div>
    <div class="sds-bc-circle" style="width:220px;height:220px;left:60px;bottom:-60px;" aria-hidden="true"></div>

    <div class="sds-breadcrumb__inner">
        <div class="sds-breadcrumb__eyebrow">Summerfield Development Society</div>
        <h1 class="sds-breadcrumb__title">
            Our Work in a <em>Nutshell</em>
        </h1>
        <nav class="sds-breadcrumb__crumbs" aria-label="Breadcrumb">
            <a href="{{ route('home') }}">Home</a>
            <i class="fal fa-chevron-right" style="font-size:10px;"></i>
            <span>About Us</span>
        </nav>
    </div>
</section>

{{-- ═══════════════════════════════════
     WHO WE ARE — Intro + Collage
═══════════════════════════════════ --}}
<section class="sds-intro section-padding fix">
    <div class="container">
        <div class="row g-5 align-items-center">

            {{-- Image collage --}}
            <div class="col-lg-5 order-lg-1 order-2">
                <div class="sds-intro__collage wow fadeInLeft" data-wow-delay=".2s">
                    <div class="sds-collage-img sds-collage-img--a">
                        <img src="{{ asset('img/team2.jpeg') }}" alt="Community gathering">
                    </div>
                    <div class="sds-collage-img sds-collage-img--b">
                        <img src="{{ asset('img/hero/team.png') }}" alt="Our team">
                    </div>
                    <div class="sds-collage-img sds-collage-img--c">
                        <img src="{{ asset('img/team3.jpeg') }}" alt="Community event" style="object-position: bottom;">
                    </div>
                    <div class="sds-collage-badge">
                        <strong>{{ $settings['founded_year'] ?? '2009' }}</strong>
                        Est.
                    </div>
                </div>
            </div>

            {{-- Content --}}
            <div class="col-lg-7 order-lg-2 order-1">
                <div class="wow fadeInRight" data-wow-delay=".25s">
                    <div class="sds-label">Who We Are</div>
                    <h2 class="sds-h2">
                        A Community Built on<br><em>Care, Unity &amp; Action</em>
                    </h2>
                    <p class="sds-body">
                        {{ $settings['our_work_summary'] ?? 'We are a community-driven society dedicated to mutual care and support across diverse, multi-ethnic communities. From healthcare and education to culture and infrastructure, we work hand-in-hand with residents to build a better Summerfield.' }}
                    </p>

                    <blockquote class="sds-intro__quote">
                        "Strength lies in differences, not in similarities — together we build a community where every voice matters and every need is heard."
                        <cite>— Summerfield Development Society</cite>
                    </blockquote>

                    {{-- Stats row --}}
                    <div class="sds-intro-stats wow fadeInUp" data-wow-delay=".4s">
                        <div class="sds-intro-stat">
                            <div class="sds-intro-stat__num">
                                <span class="sds-counter" data-target="{{ $settings['stat_residents_num'] ?? 1200 }}">0</span><span style="color:var(--sds-gold);">+</span>
                            </div>
                            <div class="sds-intro-stat__label">Residents Served</div>
                        </div>
                        <div class="sds-intro-stat">
                            <div class="sds-intro-stat__num">
                                <span class="sds-counter" data-target="{{ $settings['stat_events_num'] ?? 48 }}">0</span>
                            </div>
                            <div class="sds-intro-stat__label">Events Held</div>
                        </div>
                        <div class="sds-intro-stat">
                            <div class="sds-intro-stat__num">
                                <span class="sds-counter" data-target="{{ (int)(date('Y') - ($settings['founded_year'] ?? 2009)) }}">0</span><span style="color:var(--sds-gold);">+</span>
                            </div>
                            <div class="sds-intro-stat__label">Years of Service</div>
                        </div>
                    </div>
                </div>
            </div>

        </div>
    </div>
</section>

{{-- ═══════════════════════════════════
     VISION & MISSION
═══════════════════════════════════ --}}
<section class="sds-vm section-padding fix">
    <div class="container">
        <div class="text-center mb-5 wow fadeInUp">
            <div class="sds-label" style="justify-content:center;">
                <span style="display:block;width:28px;height:2px;background:var(--sds-gold);border-radius:2px;"></span>
                Our Direction
                <span style="display:block;width:28px;height:2px;background:var(--sds-gold);border-radius:2px;"></span>
            </div>
            <h2 class="sds-h2" style="margin-bottom:0;">
                What Drives <em>Everything We Do</em>
            </h2>
        </div>

        <div class="row g-4">
            {{-- Vision --}}
            <div class="col-lg-6 wow fadeInLeft" data-wow-delay=".2s">
                <div class="sds-vm-card sds-vm-card--vision">
                    <div class="sds-vm-card__watermark" aria-hidden="true">V</div>
                    <div class="sds-vm-card__eyebrow">
                        <i class="fal fa-eye"></i> Our Vision
                    </div>
                    <h3 class="sds-vm-card__title">Where We're<br>Headed</h3>
                    <p class="sds-vm-card__text">
                        {{ $settings['vision'] ?? 'To foster a harmonious, inclusive, and self-sufficient community where every resident — regardless of background — has the opportunity to thrive and contribute to collective progress.' }}
                    </p>
                </div>
            </div>
            {{-- Mission --}}
            <div class="col-lg-6 wow fadeInRight" data-wow-delay=".3s">
                <div class="sds-vm-card sds-vm-card--mission">
                    <div class="sds-vm-card__watermark" aria-hidden="true">M</div>
                    <div class="sds-vm-card__eyebrow">
                        <i class="fal fa-bullseye-arrow"></i> Our Mission
                    </div>
                    <h3 class="sds-vm-card__title">How We<br>Get There</h3>
                    <p class="sds-vm-card__text">
                        {{ $settings['mission'] ?? 'To enhance the wellbeing of residents through community-driven initiatives, advocacy, and sustainable development — bridging gaps in healthcare, education, culture, and infrastructure.' }}
                    </p>
                </div>
            </div>
        </div>
    </div>
</section>

{{-- ═══════════════════════════════════
     WHAT WE DO — 4 Pillars
═══════════════════════════════════ --}}
<section class="sds-pillars section-padding fix">
    <div class="container">
        <div class="row align-items-end mb-5">
            <div class="col-lg-7 wow fadeInLeft" data-wow-delay=".1s">
                <div class="sds-label">What We Do</div>
                <h2 class="sds-h2" style="margin-bottom:0;">
                    Four Pillars of Our <em>Community Work</em>
                </h2>
            </div>
            <div class="col-lg-5 wow fadeInRight" data-wow-delay=".2s">
                <p class="sds-body" style="margin:0;">
                    Every initiative we run falls under one of these four core areas, each designed to address a real need in our community.
                </p>
            </div>
        </div>

        <div class="row g-4">
            {{-- Card 1 --}}
            <div class="col-xl-3 col-lg-6 col-md-6 wow fadeInUp" data-wow-delay=".1s">
                <div class="sds-pillar-card">
                    <div class="sds-pillar-card__num" aria-hidden="true">01</div>
                    <div class="sds-pillar-card__icon">
                        <i class="fal fa-heartbeat"></i>
                    </div>
                    <h3 class="sds-pillar-card__title">Healthcare Support</h3>
                    <p class="sds-pillar-card__text">
                        Donating essential medicines and medical equipment to local hospitals and clinics, ensuring care reaches those who need it most.
                    </p>
                </div>
            </div>

            {{-- Card 2 --}}
            <div class="col-xl-3 col-lg-6 col-md-6 wow fadeInUp" data-wow-delay=".2s">
                <div class="sds-pillar-card">
                    <div class="sds-pillar-card__num" aria-hidden="true">02</div>
                    <div class="sds-pillar-card__icon">
                        <i class="fal fa-book-open"></i>
                    </div>
                    <h3 class="sds-pillar-card__title">Educational Empowerment</h3>
                    <p class="sds-pillar-card__text">
                        Providing books, stationery, and learning resources to children — particularly in disaster-affected and underserved areas.
                    </p>
                </div>
            </div>

            {{-- Card 3 --}}
            <div class="col-xl-3 col-lg-6 col-md-6 wow fadeInUp" data-wow-delay=".3s">
                <div class="sds-pillar-card">
                    <div class="sds-pillar-card__num" aria-hidden="true">03</div>
                    <div class="sds-pillar-card__icon">
                        <i class="fal fa-hands-heart"></i>
                    </div>
                    <h3 class="sds-pillar-card__title">Culture &amp; Harmony</h3>
                    <p class="sds-pillar-card__text">
                        Promoting unity by celebrating diverse religious and traditional festivals, strengthening the bonds that hold our community together.
                    </p>
                </div>
            </div>

            {{-- Card 4 --}}
            <div class="col-xl-3 col-lg-6 col-md-6 wow fadeInUp" data-wow-delay=".4s">
                <div class="sds-pillar-card">
                    <div class="sds-pillar-card__num" aria-hidden="true">04</div>
                    <div class="sds-pillar-card__icon">
                        <i class="fal fa-home-heart"></i>
                    </div>
                    <h3 class="sds-pillar-card__title">Helping Hands</h3>
                    <p class="sds-pillar-card__text">
                        Supporting low-income individuals through house construction, renovations, and emergency relief — because no one should face hardship alone.
                    </p>
                </div>
            </div>
        </div>
    </div>
</section>

{{-- ═══════════════════════════════════
     CTA STRIP
═══════════════════════════════════ --}}
<section class="sds-cta fix">
    <div class="sds-cta__bg" aria-hidden="true">
        <svg width="100%" height="100%" xmlns="http://www.w3.org/2000/svg">
            <defs>
                <pattern id="ctadiag" width="32" height="32" patternUnits="userSpaceOnUse" patternTransform="rotate(45)">
                    <line x1="0" y1="0" x2="0" y2="32" stroke="white" stroke-width=".8"/>
                </pattern>
            </defs>
            <rect width="100%" height="100%" fill="url(#ctadiag)"/>
        </svg>
    </div>
    {{-- Decorative circles --}}
    <div class="sds-bc-circle" style="width:360px;height:360px;right:-80px;top:-100px;border-color:rgba(200,146,42,.12);" aria-hidden="true"></div>
    <div class="sds-bc-circle" style="width:200px;height:200px;left:40px;bottom:-60px;border-color:rgba(200,146,42,.08);" aria-hidden="true"></div>

    <div class="container" style="position:relative;z-index:2;">
        <div class="row align-items-center g-4">
            <div class="col-lg-8 wow fadeInLeft" data-wow-delay=".1s">
                <h2 class="sds-cta__title">
                    Ready to <em>Make a Difference</em><br>in Summerfield?
                </h2>
                <p class="sds-cta__sub">
                    Join hundreds of residents already contributing to our community's growth. Every act of care counts.
                </p>
            </div>
            <div class="col-lg-4 text-lg-end wow fadeInRight" data-wow-delay=".2s">
                <div style="display:flex;flex-direction:column;gap:12px;align-items:flex-end;">
                    <a href="{{ route('frontend.contact') }}" class="sds-btn-gold" style="min-width:190px;text-align:center;">
                        Get Involved &rarr;
                    </a>
                    <a href="{{ route('events') }}" class="sds-btn-ghost" style="min-width:190px;text-align:center;">
                        View Our Events
                    </a>
                </div>
            </div>
        </div>
    </div>
</section>

{{-- ═══════════════════════════════════
     SCRIPTS
═══════════════════════════════════ --}}
@push('scripts')
<script>
/* Breadcrumb bg parallax load */
document.addEventListener('DOMContentLoaded', function () {
    var bg = document.getElementById('bcBg');
    if (bg) setTimeout(function(){ bg.classList.add('loaded'); }, 100);
});

/* Animated counter */
function animateCounters() {
    document.querySelectorAll('.sds-counter').forEach(function(el) {
        var target = parseInt(el.getAttribute('data-target'), 10);
        var duration = 1800;
        var start = null;
        function step(timestamp) {
            if (!start) start = timestamp;
            var progress = Math.min((timestamp - start) / duration, 1);
            var eased = 1 - Math.pow(1 - progress, 3);
            el.textContent = Math.floor(eased * target).toLocaleString();
            if (progress < 1) requestAnimationFrame(step);
            else el.textContent = target.toLocaleString();
        }
        requestAnimationFrame(step);
    });
}

/* Trigger counters when stats row is visible */
var statsRow = document.querySelector('.sds-intro-stats');
if (statsRow) {
    var observer = new IntersectionObserver(function(entries) {
        entries.forEach(function(entry) {
            if (entry.isIntersecting) {
                animateCounters();
                observer.disconnect();
            }
        });
    }, { threshold: 0.4 });
    observer.observe(statsRow);
}
</script>
@endpush

@endsection
