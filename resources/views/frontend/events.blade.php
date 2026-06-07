@extends('layouts.master')
@section('title', 'Events & Programs - Summerfield Development Society')

@push('styles')
<link href="https://fonts.googleapis.com/css2?family=Playfair+Display:ital,wght@0,700;0,900;1,700&family=DM+Sans:wght@400;500;600&display=swap" rel="stylesheet">
<style>
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
    --sds-green:      #1A6B3C;
    --sds-green-lt:   #E8F5EE;
}

/* ══════════════════════════
   BREADCRUMB HERO
══════════════════════════ */
.sds-bc {
    position: relative;
    min-height: 420px;
    display: flex;
    align-items: center;
    justify-content: center;
    overflow: hidden;
    background: var(--sds-navy);
}
.sds-bc__bg {
    position: absolute; inset: 0;
    background-size: cover;
    background-position: center;
    opacity: .42;
    transform: scale(1.04);
    transition: transform 6s ease-out;
}
.sds-bc__bg.loaded { transform: scale(1); }
.sds-bc__overlay {
    position: absolute; inset: 0;
    background: linear-gradient(130deg, rgba(243, 243, 243, 0.02) 40%, rgba(32, 0, 0, 0) 100%);
}
.sds-bc__grid {
    position: absolute; inset: 0;
    opacity: .04; pointer-events: none;
}
.sds-bc__bar {
    position: absolute; left: 0; top: 0; bottom: 0;
    width: 5px;
    background: linear-gradient(180deg, var(--sds-gold-light), var(--sds-gold));
}
.sds-bc__circle {
    position: absolute;
    border-radius: 50%;
    border: .5px solid rgba(200,146,42,.15);
    pointer-events: none;
}
.sds-bc__inner {
    position: relative; z-index: 3;
    text-align: center; padding: 40px 20px;
}
.sds-bc__eyebrow {
    font-family: 'DM Sans', sans-serif;
    font-size: 11px; font-weight: 600;
    letter-spacing: 3px; text-transform: uppercase;
    color: var(--sds-gold-light);
    display: flex; align-items: center; justify-content: center; gap: 12px;
    margin-bottom: 18px;
}
.sds-bc__eyebrow::before,.sds-bc__eyebrow::after {
    content:''; display:block; width:36px; height:1px; background:var(--sds-gold);
}
.sds-bc__title {
    font-family: 'Playfair Display', serif;
    font-size: clamp(36px,5vw,58px); font-weight: 900;
    color: #fff; line-height: 1.1; margin-bottom: 20px;
}
.sds-bc__title em { font-style: italic; color: var(--sds-gold-light); }
.sds-bc__crumbs {
    display: flex; align-items: center; justify-content: center;
    gap: 8px; font-family: 'DM Sans',sans-serif; font-size: 13px;
    color: rgba(255,255,255,.5);
}
.sds-bc__crumbs a { color: rgba(255,255,255,.7); text-decoration: none; transition: color .2s; }
.sds-bc__crumbs a:hover { color: var(--sds-gold-light); }
.sds-bc__crumbs span { color: var(--sds-gold-light); }

/* ══════════════════════════
   LABELS & TITLES
══════════════════════════ */
.sds-label {
    font-family: 'DM Sans',sans-serif;
    font-size: 11px; font-weight: 600; letter-spacing: 2.5px;
    text-transform: uppercase; color: var(--sds-gold);
    display: flex; align-items: center; gap: 10px; margin-bottom: 14px;
}
.sds-label::before {
    content:''; display:block; width:28px; height:2px;
    background:var(--sds-gold); border-radius:2px;
}
.sds-label--center { justify-content: center; }
.sds-label--center::before { display:none; }
.sds-label--center::after {
    content:''; display:block; width:28px; height:2px;
    background:var(--sds-gold); border-radius:2px;
}
.sds-h2 {
    font-family: 'Playfair Display',serif;
    font-size: clamp(28px,3.5vw,42px); font-weight: 700;
    color: var(--sds-navy); line-height: 1.18; margin-bottom: 14px;
}
.sds-h2 em { font-style:italic; color:var(--sds-gold); }
.sds-h2--white { color:#fff; }

/* ══════════════════════════
   EVENTS SECTION
══════════════════════════ */
.sds-events-sec { background: var(--sds-warm); }

/* Filter tabs */
.sds-filters {
    display: flex; align-items: center; gap: 8px; flex-wrap: wrap;
    margin-top: 20px; margin-bottom: 36px;
}
.sds-filter-btn {
    font-family: 'DM Sans',sans-serif; font-size: 13px; font-weight: 500;
    padding: 9px 22px; border-radius: 30px;
    border: 1px solid var(--sds-border); background: #fff; color: var(--sds-muted);
    cursor: pointer; transition: all .2s; line-height: 1;
}
.sds-filter-btn:hover,
.sds-filter-btn.active {
    background: var(--sds-gold); border-color: var(--sds-gold);
    color: var(--sds-navy); font-weight: 600;
}

/* Event card */
.sds-event-card {
    background: #fff;
    border-radius: 6px;
    overflow: hidden;
    box-shadow: 0 2px 16px rgba(15,29,58,.05);
    transition: transform .3s, box-shadow .3s;
    display: flex; flex-direction: column;
    height: 100%;
    position: relative;
}
.sds-event-card::before {
    content:''; position:absolute; top:0; left:0; right:0; height:3px;
    background:var(--sds-gold); transform:scaleX(0); transform-origin:left;
    transition: transform .35s ease; z-index:2;
}
.sds-event-card:hover::before { transform:scaleX(1); }
.sds-event-card:hover {
    transform: translateY(-7px);
    box-shadow: 0 20px 50px rgba(15,29,58,.12);
}
.sds-event-card__img {
    height: 220px; overflow: hidden; position: relative; background: var(--sds-cream);
}
.sds-event-card__img img {
    width: 100%; height: 100%; object-fit: cover;
    transition: transform .45s ease;
}
.sds-event-card:hover .sds-event-card__img img { transform: scale(1.06); }
.sds-event-card__img-placeholder {
    width: 100%; height: 100%;
    display: flex; align-items: center; justify-content: center;
    background: linear-gradient(135deg, var(--sds-navy) 0%, var(--sds-navy-mid) 100%);
    font-size: 48px; color: rgba(200,146,42,.3);
}
.sds-event-card__date {
    position: absolute; top: 16px; left: 16px;
    background: var(--sds-navy);
    color: var(--sds-gold-light);
    font-family: 'DM Sans',sans-serif;
    font-size: 11px; font-weight: 600; letter-spacing: .5px;
    padding: 6px 12px; border-radius: 3px;
    z-index: 1;
}
.sds-event-card__body {
    padding: 22px 22px 24px;
    flex: 1; display: flex; flex-direction: column;
}
.sds-event-card__title {
    font-family: 'Playfair Display',serif;
    font-size: 18px; font-weight: 700;
    color: var(--sds-navy); line-height: 1.3; margin-bottom: 10px;
    text-decoration: none; transition: color .2s;
    display: block;
}
.sds-event-card__title:hover { color: var(--sds-gold); }
.sds-event-card__divider {
    width: 28px; height: 2px;
    background: var(--sds-border); border-radius: 2px;
    margin-bottom: 12px;
    transition: width .3s, background .3s;
}
.sds-event-card:hover .sds-event-card__divider {
    width: 48px; background: var(--sds-gold);
}
.sds-event-card__text {
    font-family: 'DM Sans',sans-serif; font-size: 14px;
    line-height: 1.68; color: var(--sds-muted);
    flex: 1; margin-bottom: 18px;
}

/* ══════════════════════════
   PAGINATION
══════════════════════════ */
.sds-pagination {
    display: flex; justify-content: center; margin-top: 48px;
}
.sds-pagination .pagination {
    gap: 6px; display:flex; flex-wrap:wrap; justify-content:center;
}
.sds-pagination .page-item .page-link {
    font-family: 'DM Sans',sans-serif; font-size: 13px; font-weight: 600;
    width: 42px; height: 42px; border-radius: 3px !important;
    display: flex; align-items: center; justify-content: center;
    border: 1px solid var(--sds-border);
    color: var(--sds-navy); background: #fff;
    transition: all .2s; line-height: 1;
}
.sds-pagination .page-item.active .page-link {
    background: var(--sds-gold); border-color: var(--sds-gold); color: var(--sds-navy);
}
.sds-pagination .page-item .page-link:hover {
    background: var(--sds-navy); border-color: var(--sds-navy); color: #fff;
}

/* ══════════════════════════
   ACHIEVEMENTS
══════════════════════════ */
.sds-achieve-sec {
    background: var(--sds-navy);
    position: relative; overflow: hidden;
}
.sds-achieve-sec__bg {
    position: absolute; inset: 0; opacity: .04; pointer-events: none;
}
.sds-achieve-card {
    background: rgba(255,255,255,.05);
    border: .5px solid rgba(255,255,255,.1);
    border-radius: 6px;
    padding: 32px 28px;
    height: 100%;
    position: relative;
    overflow: hidden;
    transition: background .3s, transform .3s, box-shadow .3s;
}
.sds-achieve-card::before {
    content: ''; position: absolute;
    top: 0; left: 0; right: 0; height: 3px;
    background: var(--sds-gold);
    transform: scaleX(0); transform-origin: left;
    transition: transform .35s ease;
}
.sds-achieve-card:hover::before { transform: scaleX(1); }
.sds-achieve-card:hover {
    background: rgba(255,255,255,.09);
    transform: translateY(-5px);
    box-shadow: 0 16px 40px rgba(0,0,0,.25);
}
.sds-achieve-card__year {
    font-family: 'Playfair Display',serif;
    font-size: 48px; font-weight: 900;
    color: rgba(200,146,42,.15); line-height: 1;
    position: absolute; top: 16px; right: 20px;
    user-select: none;
    transition: color .3s;
}
.sds-achieve-card:hover .sds-achieve-card__year { color: rgba(200,146,42,.25); }
.sds-achieve-card__icon {
    width: 48px; height: 48px; border-radius: 50%;
    background: rgba(200,146,42,.15);
    display: flex; align-items: center; justify-content: center;
    font-size: 20px; color: var(--sds-gold-light);
    margin-bottom: 18px;
    transition: background .25s;
}
.sds-achieve-card:hover .sds-achieve-card__icon {
    background: var(--sds-gold); color: var(--sds-navy);
}
.sds-achieve-card__title {
    font-family: 'Playfair Display',serif;
    font-size: 19px; font-weight: 700;
    color: #fff; line-height: 1.3; margin-bottom: 6px;
}
.sds-achieve-card__date {
    font-family: 'DM Sans',sans-serif;
    font-size: 12px; font-weight: 600; letter-spacing: .5px;
    color: var(--sds-gold-light); margin-bottom: 14px;
    display: flex; align-items: center; gap: 6px;
}
.sds-achieve-card__text {
    font-family: 'DM Sans',sans-serif; font-size: 14px;
    line-height: 1.68; color: rgba(255,255,255,.6);
    margin: 0;
}
.sds-achieve-card__divider {
    width: 28px; height: 2px;
    background: rgba(200,146,42,.35); border-radius: 2px;
    margin: 12px 0;
    transition: width .3s, background .3s;
}
.sds-achieve-card:hover .sds-achieve-card__divider {
    width: 48px; background: var(--sds-gold);
}

/* ══════════════════════════
   SECTION DIVIDER
══════════════════════════ */
.sds-divider-gold {
    width: 48px; height: 3px;
    background: var(--sds-gold); border-radius: 3px;
    margin: 20px auto 0;
}

/* Responsive */
@media (max-width:767px) {
    .sds-filters { gap: 6px; }
    .sds-achieve-card__year { font-size: 36px; }
}
</style>
@endpush

@section('content')

{{-- BREADCRUMB --}}
<section class="sds-bc">
    <div class="sds-bc__bar"></div>
    <div class="sds-bc__bg" id="bcBg"
         style="background-image:url('{{ asset('img/events.png') }}');"></div>
    <div class="sds-bc__overlay"></div>
    <div class="sds-bc__grid" aria-hidden="true">
        <svg width="100%" height="100%" xmlns="http://www.w3.org/2000/svg">
            <defs><pattern id="bcg" width="48" height="48" patternUnits="userSpaceOnUse">
                <path d="M48 0L0 0 0 48" fill="none" stroke="white" stroke-width=".5"/>
            </pattern></defs>
            <rect width="100%" height="100%" fill="url(#bcg)"/>
        </svg>
    </div>
    <div class="sds-bc__circle" style="width:420px;height:420px;right:-110px;top:-120px;" aria-hidden="true"></div>
    <div class="sds-bc__circle" style="width:220px;height:220px;left:50px;bottom:-70px;" aria-hidden="true"></div>
    <div class="sds-bc__inner">
        <div class="sds-bc__eyebrow">Summerfield Development Society</div>
        <h1 class="sds-bc__title">Events &amp; <em>Programs</em></h1>
        <nav class="sds-bc__crumbs" aria-label="Breadcrumb">
            <a href="{{ url('/') }}">Home</a>
            <i class="fal fa-chevron-right" style="font-size:10px;"></i>
            <span>Events &amp; Programs</span>
        </nav>
    </div>
</section>

{{-- ════════════════════════════
     EVENTS GRID
════════════════════════════ --}}
<section class="sds-events-sec section-padding fix">
    <div class="container">

        {{-- Header --}}
        <div class="row align-items-end g-4 mb-2">
            <div class="col-lg-7 wow fadeInLeft" data-wow-delay=".1s">
                <div class="sds-label">Recent Events &amp; Programs</div>
                <h2 class="sds-h2" style="margin-bottom:6px;">
                    Our Latest <em>Activities</em>
                </h2>
                <p style="font-family:'DM Sans',sans-serif;font-size:15px;color:var(--sds-muted);margin:0;line-height:1.7;">
                    From community festivals to welfare drives — here's what we've been up to.
                </p>
            </div>
            <div class="col-lg-5 text-lg-end wow fadeInRight" data-wow-delay=".15s">
                <div style="font-family:'DM Sans',sans-serif;font-size:13px;color:var(--sds-muted);">
                    Showing <strong id="evCount" style="color:var(--sds-navy);">{{ $events->total() }}</strong> events
                </div>
            </div>
        </div>

        {{-- Year filter --}}
        @php
            $years = $events->getCollection()->map(fn($e) => \Carbon\Carbon::parse($e->date)->year)->unique()->sortDesc()->values();
        @endphp
        @if($years->count() > 1)
        <div class="sds-filters wow fadeInUp" data-wow-delay=".2s" id="yearFilters">
            <button class="sds-filter-btn active" data-year="all">All Years</button>
            @foreach($years as $year)
            <button class="sds-filter-btn" data-year="{{ $year }}">{{ $year }}</button>
            @endforeach
        </div>
        @endif

        {{-- Grid --}}
        <div class="row g-4" id="eventsGrid">
            @forelse($events as $event)
            @php $year = \Carbon\Carbon::parse($event->date)->year; @endphp
            <div class="col-xl-4 col-lg-6 col-md-6 sds-ev-item wow fadeInUp"
                 data-wow-delay="{{ ($loop->index % 3) * 0.1 }}s"
                 data-year="{{ $year }}">
                <div class="sds-event-card">
                    <div class="sds-event-card__img">
                        @if($event->image)
                            <img src="{{ asset('storage/' . $event->image) }}"
                                 alt="{{ $event->title }}" loading="lazy">
                        @else
                            <div class="sds-event-card__img-placeholder">
                                <i class="fal fa-calendar-star"></i>
                            </div>
                        @endif
                        <span class="sds-event-card__date">
                            <i class="fal fa-calendar" style="margin-right:5px;"></i>
                            {{ \Carbon\Carbon::parse($event->date)->format('d M Y') }}
                        </span>
                    </div>
                    <div class="sds-event-card__body">
                        <a href="#" class="sds-event-card__title">{{ $event->title }}</a>
                        <div class="sds-event-card__divider"></div>
                        <p class="sds-event-card__text">{{ $event->description }}</p>
                    </div>
                </div>
            </div>
            @empty
            <div class="col-12 text-center py-5">
                <i class="fal fa-calendar-times" style="font-size:48px;color:var(--sds-border);display:block;margin-bottom:16px;"></i>
                <p style="font-family:'DM Sans',sans-serif;color:var(--sds-muted);">No events found.</p>
            </div>
            @endforelse
        </div>

        {{-- Pagination --}}
        @if($events->hasPages())
        <div class="sds-pagination">
            {{ $events->links() }}
        </div>
        @endif
    </div>
</section>

{{-- ════════════════════════════
     ACHIEVEMENTS
════════════════════════════ --}}
<section class="sds-achieve-sec section-padding fix">
    {{-- bg diagonal lines --}}
    <div class="sds-achieve-sec__bg" aria-hidden="true">
        <svg width="100%" height="100%" xmlns="http://www.w3.org/2000/svg">
            <defs><pattern id="diag" width="32" height="32" patternUnits="userSpaceOnUse" patternTransform="rotate(45)">
                <line x1="0" y1="0" x2="0" y2="32" stroke="white" stroke-width=".8"/>
            </pattern></defs>
            <rect width="100%" height="100%" fill="url(#diag)"/>
        </svg>
    </div>
    <div class="sds-bc__circle" style="width:500px;height:500px;right:-140px;top:-140px;border-color:rgba(200,146,42,.1);" aria-hidden="true"></div>
    <div class="sds-bc__circle" style="width:260px;height:260px;left:-60px;bottom:-60px;border-color:rgba(200,146,42,.08);" aria-hidden="true"></div>

    <div class="container" style="position:relative;z-index:2;">

        <div class="text-center mb-5 wow fadeInUp">
            <div class="sds-label sds-label--center">Our Achievements</div>
            <h2 class="sds-h2 sds-h2--white" style="margin-bottom:8px;">
                Milestones of <em>Progress</em>
            </h2>
            <div class="sds-divider-gold" style="margin-top:16px;"></div>
            <p style="font-family:'DM Sans',sans-serif;font-size:15px;color:rgba(255,255,255,.55);margin-top:16px;max-width:520px;margin-left:auto;margin-right:auto;line-height:1.7;">
                Every milestone is a testament to what our community can achieve together.
            </p>
        </div>

        <div class="row g-4">
            @forelse($achievements as $achievement)
            @php $achYear = $achievement->date ? \Carbon\Carbon::parse($achievement->date)->year : null; @endphp
            <div class="col-lg-6 wow fadeInUp" data-wow-delay="{{ ($loop->index % 2) * 0.15 }}s">
                <div class="sds-achieve-card">
                    @if($achYear)
                    <div class="sds-achieve-card__year" aria-hidden="true">{{ $achYear }}</div>
                    @endif
                    <div class="sds-achieve-card__icon">
                        <i class="fal fa-trophy"></i>
                    </div>
                    <h3 class="sds-achieve-card__title">{{ $achievement->title }}</h3>
                    @if($achievement->date)
                    <div class="sds-achieve-card__date">
                        <i class="fal fa-calendar-check"></i>
                        {{ \Carbon\Carbon::parse($achievement->date)->format('F Y') }}
                    </div>
                    @endif
                    <div class="sds-achieve-card__divider"></div>
                    <p class="sds-achieve-card__text">{{ $achievement->description }}</p>
                </div>
            </div>
            @empty
            <div class="col-12 text-center py-5">
                <i class="fal fa-trophy" style="font-size:48px;color:rgba(200,146,42,.2);display:block;margin-bottom:16px;"></i>
                <p style="font-family:'DM Sans',sans-serif;color:rgba(255,255,255,.4);">No achievements listed yet.</p>
            </div>
            @endforelse
        </div>

        @if($achievements->hasPages())
        <div class="sds-pagination" style="margin-top:40px;">
            {{ $achievements->links() }}
        </div>
        @endif
    </div>
</section>

@endsection

@push('scripts')
<script>
document.addEventListener('DOMContentLoaded', function () {
    /* Breadcrumb bg fade-in */
    var bg = document.getElementById('bcBg');
    if (bg) setTimeout(function(){ bg.classList.add('loaded'); }, 80);

    /* Year filter */
    var filterBtns = document.querySelectorAll('#yearFilters .sds-filter-btn');
    var evItems    = document.querySelectorAll('.sds-ev-item');

    filterBtns.forEach(function(btn) {
        btn.addEventListener('click', function() {
            filterBtns.forEach(function(b){ b.classList.remove('active'); });
            btn.classList.add('active');
            var year = btn.dataset.year;
            var count = 0;
            evItems.forEach(function(item) {
                if (year === 'all' || item.dataset.year === year) {
                    item.style.display = '';
                    count++;
                } else {
                    item.style.display = 'none';
                }
            });
            var badge = document.getElementById('evCount');
            if (badge) badge.textContent = count;
        });
    });

    /* Stagger entrance */
    evItems.forEach(function(item, i) {
        item.style.opacity = '0';
        item.style.transform = 'translateY(20px)';
        item.style.transition = 'opacity .4s ease, transform .4s ease';
        setTimeout(function(){
            item.style.opacity = '1';
            item.style.transform = 'translateY(0)';
        }, 60 + i * 70);
    });
});
</script>
@endpush
