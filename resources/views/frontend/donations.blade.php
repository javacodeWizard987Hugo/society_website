@extends('layouts.master')
@section('title', 'Donations - Summerfield Development Society')

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
}

/* ══════════════════════════
   BREADCRUMB
══════════════════════════ */
.sds-bc {
    position: relative; min-height: 420px;
    display: flex; align-items: center; justify-content: center;
    overflow: hidden; background: var(--sds-navy);
}
.sds-bc__bg {
    position: absolute; inset: 0; background-size: cover; background-position: center;
    opacity: .3; transform: scale(1.04); transition: transform 6s ease-out;
}
.sds-bc__bg.loaded { transform: scale(1); }
.sds-bc__overlay {
    position: absolute; inset: 0;
    background: linear-gradient(130deg, rgba(1, 3, 7, 0.62) 40%, rgba(200,146,42,.18) 100%);
}
.sds-bc__grid { position:absolute; inset:0; opacity:.04; pointer-events:none; }
.sds-bc__bar {
    position:absolute; left:0; top:0; bottom:0; width:5px;
    background: linear-gradient(180deg, var(--sds-gold-light), var(--sds-gold));
}
.sds-bc__circle {
    position:absolute; border-radius:50%;
    border:.5px solid rgba(200,146,42,.15); pointer-events:none;
}
.sds-bc__inner { position:relative; z-index:3; text-align:center; padding:40px 20px; }
.sds-bc__eyebrow {
    font-family:'DM Sans',sans-serif; font-size:11px; font-weight:600;
    letter-spacing:3px; text-transform:uppercase; color:var(--sds-gold-light);
    display:flex; align-items:center; justify-content:center; gap:12px; margin-bottom:18px;
}
.sds-bc__eyebrow::before,.sds-bc__eyebrow::after {
    content:''; display:block; width:36px; height:1px; background:var(--sds-gold);
}
.sds-bc__title {
    font-family:'Playfair Display',serif; font-size:clamp(36px,5vw,58px); font-weight:900;
    color:#fff; line-height:1.1; margin-bottom:20px;
}
.sds-bc__title em { font-style:italic; color:var(--sds-gold-light); }
.sds-bc__crumbs {
    display:flex; align-items:center; justify-content:center; gap:8px;
    font-family:'DM Sans',sans-serif; font-size:13px; color:rgba(255,255,255,.5);
}
.sds-bc__crumbs a { color:rgba(255,255,255,.7); text-decoration:none; transition:color .2s; }
.sds-bc__crumbs a:hover { color:var(--sds-gold-light); }
.sds-bc__crumbs span { color:var(--sds-gold-light); }

/* ══════════════════════════
   GRATITUDE BANNER
══════════════════════════ */
.sds-gratitude {
    background: var(--sds-gold);
    padding: 28px 0;
    position: relative; overflow: hidden;
}
.sds-gratitude__inner {
    display: flex; align-items: center; gap: 20px;
    justify-content: center; flex-wrap: wrap; text-align: center;
}
.sds-gratitude__icon {
    font-size: 36px; color: var(--sds-navy); opacity: .85;
}
.sds-gratitude__text {
    font-family: 'Playfair Display',serif;
    font-size: clamp(18px,2.2vw,26px); font-weight: 700;
    color: var(--sds-navy); line-height: 1.3;
}
.sds-gratitude__text em { font-style:italic; }

/* ══════════════════════════
   SECTION LABELS
══════════════════════════ */
.sds-label {
    font-family:'DM Sans',sans-serif; font-size:11px; font-weight:600;
    letter-spacing:2.5px; text-transform:uppercase; color:var(--sds-gold);
    display:flex; align-items:center; gap:10px; margin-bottom:14px;
}
.sds-label::before {
    content:''; display:block; width:28px; height:2px;
    background:var(--sds-gold); border-radius:2px;
}
.sds-label--center { justify-content:center; }
.sds-label--center::before { display:none; }
.sds-label--center::after {
    content:''; display:block; width:28px; height:2px;
    background:var(--sds-gold); border-radius:2px;
}
.sds-h2 {
    font-family:'Playfair Display',serif;
    font-size:clamp(28px,3.5vw,42px); font-weight:700;
    color:var(--sds-navy); line-height:1.18; margin-bottom:14px;
}
.sds-h2 em { font-style:italic; color:var(--sds-gold); }
.sds-divider-gold {
    width:48px; height:3px; background:var(--sds-gold);
    border-radius:3px; margin:16px auto 0;
}

/* ══════════════════════════
   DONATION SECTION
══════════════════════════ */
.sds-donation-sec { background: var(--sds-warm); }

/* Search + filter bar */
.sds-topbar {
    display:flex; align-items:center; justify-content:space-between;
    flex-wrap:wrap; gap:16px; margin-bottom:36px;
}
.sds-search-wrap { position:relative; max-width:280px; flex:1; }
.sds-search-wrap i {
    position:absolute; left:14px; top:50%; transform:translateY(-50%);
    color:var(--sds-muted); font-size:14px; pointer-events:none;
}
.sds-search {
    font-family:'DM Sans',sans-serif; font-size:13px; width:100%;
    padding:10px 16px 10px 38px;
    border:1px solid var(--sds-border); border-radius:30px;
    background:#fff; color:var(--sds-text); outline:none;
    transition:border-color .2s, box-shadow .2s;
}
.sds-search:focus {
    border-color:var(--sds-gold);
    box-shadow:0 0 0 3px rgba(200,146,42,.1);
}
.sds-sort {
    font-family:'DM Sans',sans-serif; font-size:13px; font-weight:500;
    padding:9px 18px; border-radius:30px;
    border:1px solid var(--sds-border); background:#fff; color:var(--sds-muted);
    cursor:pointer; outline:none; appearance:none; -webkit-appearance:none;
    background-image:url("data:image/svg+xml,%3Csvg xmlns='http://www.w3.org/2000/svg' width='10' height='6' viewBox='0 0 10 6'%3E%3Cpath d='M1 1l4 4 4-4' stroke='%236B6356' stroke-width='1.5' fill='none' stroke-linecap='round'/%3E%3C/svg%3E");
    background-repeat:no-repeat; background-position:right 14px center;
    padding-right:36px;
    transition:border-color .2s;
}
.sds-sort:focus { border-color:var(--sds-gold); }

/* Donation card */
.sds-don-card {
    background: #fff;
    border-radius: 8px;
    padding: 32px 26px 28px;
    height: 100%;
    position: relative;
    overflow: hidden;
    box-shadow: 0 2px 16px rgba(15,29,58,.05);
    transition: transform .3s, box-shadow .3s;
    display: flex; flex-direction: column;
    text-align: center;
}
.sds-don-card::before {
    content:''; position:absolute; top:0; left:0; right:0; height:3px;
    background:var(--sds-gold); transform:scaleX(0); transform-origin:left;
    transition:transform .35s ease;
}
.sds-don-card:hover::before { transform:scaleX(1); }
.sds-don-card:hover {
    transform:translateY(-7px);
    box-shadow:0 20px 50px rgba(15,29,58,.11);
}

/* Ribbon for featured donors */
.sds-don-card__ribbon {
    position:absolute; top:16px; right:-8px;
    background:var(--sds-gold); color:var(--sds-navy);
    font-family:'DM Sans',sans-serif; font-size:10px; font-weight:700;
    letter-spacing:.8px; text-transform:uppercase;
    padding:4px 14px 4px 10px;
    clip-path:polygon(0 0,100% 0,100% 100%,0 100%,6px 50%);
}

/* Avatar circle */
.sds-don-card__avatar {
    width: 80px; height: 80px; border-radius: 50%;
    background: linear-gradient(135deg, var(--sds-navy) 0%, var(--sds-navy-mid) 100%);
    display: flex; align-items: center; justify-content: center;
    margin: 0 auto 18px;
    font-family: 'Playfair Display',serif; font-size: 28px; font-weight: 700;
    color: var(--sds-gold-light);
    border: 3px solid var(--sds-cream);
    box-shadow: 0 4px 16px rgba(15,29,58,.12);
    transition: border-color .25s;
}
.sds-don-card:hover .sds-don-card__avatar {
    border-color: var(--sds-gold);
}

/* Heart icon over avatar on hover */
.sds-don-card__avatar-wrap { position:relative; display:inline-block; margin:0 auto 18px; }
.sds-don-card__heart {
    position:absolute; bottom:-4px; right:-4px;
    width:26px; height:26px; border-radius:50%;
    background:var(--sds-gold); border:2px solid #fff;
    display:flex; align-items:center; justify-content:center;
    font-size:11px; color:var(--sds-navy);
    opacity:0; transform:scale(.5);
    transition:opacity .25s, transform .25s;
}
.sds-don-card:hover .sds-don-card__heart {
    opacity:1; transform:scale(1);
}

.sds-don-card__name {
    font-family:'Playfair Display',serif; font-size:18px; font-weight:700;
    color:var(--sds-navy); margin-bottom:4px; line-height:1.2;
}
.sds-don-card__date {
    font-family:'DM Sans',sans-serif; font-size:12px; font-weight:600;
    letter-spacing:.5px; color:var(--sds-gold); margin-bottom:14px;
    display:flex; align-items:center; justify-content:center; gap:6px;
}
.sds-don-card__divider {
    width:28px; height:2px; background:var(--sds-border); border-radius:2px;
    margin:0 auto 14px;
    transition:width .3s, background .3s;
}
.sds-don-card:hover .sds-don-card__divider {
    width:48px; background:var(--sds-gold);
}
.sds-don-card__text {
    font-family:'DM Sans',sans-serif; font-size:14px; line-height:1.68;
    color:var(--sds-muted); flex:1; margin:0;
}

/* Empty state */
.sds-empty {
    text-align:center; padding:60px 20px; grid-column:1/-1;
}
.sds-empty__icon { font-size:48px; color:var(--sds-border); margin-bottom:16px; }
.sds-empty p { font-family:'DM Sans',sans-serif; font-size:15px; color:var(--sds-muted); }

/* Pagination */
.sds-pagination {
    display:flex; justify-content:center; margin-top:48px;
}
.sds-pagination .pagination { gap:6px; display:flex; flex-wrap:wrap; justify-content:center; }
.sds-pagination .page-item .page-link {
    font-family:'DM Sans',sans-serif; font-size:13px; font-weight:600;
    width:42px; height:42px; border-radius:3px !important;
    display:flex; align-items:center; justify-content:center;
    border:1px solid var(--sds-border); color:var(--sds-navy); background:#fff;
    transition:all .2s; line-height:1;
}
.sds-pagination .page-item.active .page-link {
    background:var(--sds-gold); border-color:var(--sds-gold); color:var(--sds-navy);
}
.sds-pagination .page-item .page-link:hover {
    background:var(--sds-navy); border-color:var(--sds-navy); color:#fff;
}

/* ══════════════════════════
   CTA STRIP
══════════════════════════ */
.sds-cta {
    background:var(--sds-navy); position:relative; overflow:hidden; padding:70px 0;
}
.sds-cta__bg { position:absolute; inset:0; opacity:.04; pointer-events:none; }
.sds-cta__title {
    font-family:'Playfair Display',serif; font-size:clamp(26px,3vw,38px);
    font-weight:700; color:#fff; line-height:1.25;
}
.sds-cta__title em { color:var(--sds-gold-light); font-style:italic; }
.sds-cta__sub {
    font-family:'DM Sans',sans-serif; font-size:15px;
    color:rgba(255,255,255,.6); margin-top:10px; line-height:1.65;
}
.sds-btn-gold {
    font-family:'DM Sans',sans-serif; font-size:14px; font-weight:600;
    background:var(--sds-gold); color:var(--sds-navy); padding:14px 32px;
    border:none; border-radius:3px; cursor:pointer; text-decoration:none;
    letter-spacing:.2px; transition:background .2s, transform .15s;
    display:inline-block; line-height:1;
}
.sds-btn-gold:hover { background:var(--sds-gold-light); color:var(--sds-navy); transform:translateY(-1px); }
.sds-btn-ghost {
    font-family:'DM Sans',sans-serif; font-size:14px; font-weight:500;
    background:transparent; color:rgba(255,255,255,.8); padding:13px 28px;
    border:.5px solid rgba(255,255,255,.3); border-radius:3px; cursor:pointer;
    text-decoration:none; transition:background .2s, border-color .2s;
    display:inline-block; line-height:1;
}
.sds-btn-ghost:hover { background:rgba(255,255,255,.07); border-color:rgba(255,255,255,.6); color:#fff; }

@media (max-width:767px) {
    .sds-topbar { flex-direction:column; align-items:stretch; }
    .sds-search-wrap { max-width:100%; }
}
</style>
@endpush

@section('content')

{{-- BREADCRUMB --}}
<section class="sds-bc">
    <div class="sds-bc__bar"></div>
    <div class="sds-bc__bg" id="bcBg"
         style="background-image:url('{{ asset('img/header/donation1.png') }}');"></div>
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
        <h1 class="sds-bc__title">Our Generous <em>Donors</em></h1>
        <nav class="sds-bc__crumbs" aria-label="Breadcrumb">
            <a href="{{ url('/') }}">Home</a>
            <i class="fal fa-chevron-right" style="font-size:10px;"></i>
            <span>Donations</span>
        </nav>
    </div>
</section>

{{-- GRATITUDE BANNER --}}
<div class="sds-gratitude">
    <div class="container">
        <div class="sds-gratitude__inner">
            <div class="sds-gratitude__icon"><i class="fal fa-hand-holding-heart"></i></div>
            <div class="sds-gratitude__text">
                <em>Every act of giving</em> strengthens the heart of our community. Thank you.
            </div>
        </div>
    </div>
</div>

{{-- DONATIONS GRID --}}
<section class="sds-donation-sec section-padding fix">
    <div class="container">

        {{-- Header --}}
        <div class="text-center mb-5 wow fadeInUp">
            <div class="sds-label sds-label--center">Gratitude &amp; Support</div>
            <h2 class="sds-h2" style="margin-bottom:8px;">
                Heartfelt Thanks to Our <em>Donors</em>
            </h2>
            <div class="sds-divider-gold"></div>
            <p style="font-family:'DM Sans',sans-serif;font-size:15px;color:var(--sds-muted);margin-top:16px;max-width:520px;margin-left:auto;margin-right:auto;line-height:1.7;">
                These kind individuals and organisations have made our community programmes possible through their generous contributions.
            </p>
        </div>

        {{-- Search + Sort bar --}}
        <div class="sds-topbar wow fadeInUp" data-wow-delay=".1s">
            <div class="sds-search-wrap">
                <i class="fal fa-search"></i>
                <input type="text" id="donSearch" class="sds-search"
                       placeholder="Search donors…" aria-label="Search donors">
            </div>
            <div style="display:flex;align-items:center;gap:10px;flex-wrap:wrap;">
                <span style="font-family:'DM Sans',sans-serif;font-size:13px;color:var(--sds-muted);">
                    Showing <strong id="donCount" style="color:var(--sds-navy);">{{ $donations->total() }}</strong> donors
                </span>
                <select class="sds-sort" id="donSort" aria-label="Sort donations">
                    <option value="default">Sort: Default</option>
                    <option value="az">Name A–Z</option>
                    <option value="za">Name Z–A</option>
                    <option value="newest">Newest First</option>
                    <option value="oldest">Oldest First</option>
                </select>
            </div>
        </div>

        {{-- Grid --}}
        <div class="row g-4" id="donGrid">
            @forelse($donations as $i => $donation)
            @php
                $initials = collect(explode(' ', $donation->donor_name))
                              ->map(fn($w)=>strtoupper(substr($w,0,1)))
                              ->take(2)->implode('');
                $dateTs = $donation->date ? strtotime($donation->date) : 0;
            @endphp
            <div class="col-xl-4 col-lg-4 col-md-6 sds-don-item wow fadeInUp"
                 data-wow-delay="{{ ($loop->index % 3) * 0.1 }}s"
                 data-name="{{ strtolower($donation->donor_name) }}"
                 data-date="{{ $dateTs }}">
                <div class="sds-don-card">
                    @if($loop->first)
                    <div class="sds-don-card__ribbon">Featured</div>
                    @endif

                    <div class="sds-don-card__avatar-wrap">
                        <div class="sds-don-card__avatar">{{ $initials }}</div>
                        <div class="sds-don-card__heart"><i class="fas fa-heart"></i></div>
                    </div>

                    <div class="sds-don-card__name">{{ $donation->donor_name }}</div>

                    @if($donation->date)
                    <div class="sds-don-card__date">
                        <i class="fal fa-calendar"></i>
                        {{ \Carbon\Carbon::parse($donation->date)->format('d M Y') }}
                    </div>
                    @endif

                    <div class="sds-don-card__divider"></div>

                    @if($donation->description)
                    <p class="sds-don-card__text">{{ $donation->description }}</p>
                    @else
                    <p class="sds-don-card__text" style="font-style:italic;opacity:.6;">
                        A kind contribution to our community.
                    </p>
                    @endif
                </div>
            </div>
            @empty
            <div class="sds-empty col-12">
                <div class="sds-empty__icon"><i class="fal fa-hand-holding-heart"></i></div>
                <p>No donations recorded yet.</p>
            </div>
            @endforelse

            {{-- No-results state --}}
            <div class="sds-empty col-12" id="donNoResults" style="display:none;">
                <div class="sds-empty__icon"><i class="fal fa-search"></i></div>
                <p>No donors match your search.</p>
            </div>
        </div>

        @if($donations->hasPages())
        <div class="sds-pagination">{{ $donations->links() }}</div>
        @endif
    </div>
</section>

{{-- CTA STRIP --}}
<section class="sds-cta fix">
    <div class="sds-cta__bg" aria-hidden="true">
        <svg width="100%" height="100%" xmlns="http://www.w3.org/2000/svg">
            <defs><pattern id="ctad" width="32" height="32" patternUnits="userSpaceOnUse" patternTransform="rotate(45)">
                <line x1="0" y1="0" x2="0" y2="32" stroke="white" stroke-width=".8"/>
            </pattern></defs>
            <rect width="100%" height="100%" fill="url(#ctad)"/>
        </svg>
    </div>
    <div class="sds-bc__circle" style="width:360px;height:360px;right:-80px;top:-100px;border-color:rgba(200,146,42,.1);" aria-hidden="true"></div>
    <div class="sds-bc__circle" style="width:200px;height:200px;left:40px;bottom:-60px;border-color:rgba(200,146,42,.08);" aria-hidden="true"></div>
    <div class="container" style="position:relative;z-index:2;">
        <div class="row align-items-center g-4">
            <div class="col-lg-8 wow fadeInLeft" data-wow-delay=".1s">
                <h2 class="sds-cta__title">
                    Want to <em>Support Our Work</em>?
                </h2>
                <p class="sds-cta__sub">
                    Your contribution — however big or small — helps us reach more families in need across Summerfield.
                </p>
            </div>
            <div class="col-lg-4 text-lg-end wow fadeInRight" data-wow-delay=".2s">
                <div style="display:flex;flex-direction:column;gap:12px;align-items:flex-end;">
                    <a href="{{ route('frontend.contact') }}" class="sds-btn-gold"
                       style="min-width:190px;text-align:center;">
                        Get In Touch &rarr;
                    </a>
                    <a href="{{ route('about') }}" class="sds-btn-ghost"
                       style="min-width:190px;text-align:center;">
                        Learn About Us
                    </a>
                </div>
            </div>
        </div>
    </div>
</section>

@endsection

@push('scripts')
<script>
document.addEventListener('DOMContentLoaded', function () {

    /* bg parallax */
    var bg = document.getElementById('bcBg');
    if (bg) setTimeout(function(){ bg.classList.add('loaded'); }, 80);

    /* Donor search */
    var items      = Array.from(document.querySelectorAll('.sds-don-item'));
    var searchInp  = document.getElementById('donSearch');
    var sortSel    = document.getElementById('donSort');
    var noRes      = document.getElementById('donNoResults');
    var countBadge = document.getElementById('donCount');
    var grid       = document.getElementById('donGrid');

    function applyAll() {
        var query = searchInp ? searchInp.value.trim().toLowerCase() : '';
        var sortVal = sortSel ? sortSel.value : 'default';

        /* Filter */
        var visible = items.filter(function(item) {
            var match = !query || item.dataset.name.indexOf(query) !== -1;
            item.style.display = match ? '' : 'none';
            return match;
        });

        if (noRes) noRes.style.display = visible.length === 0 ? 'block' : 'none';
        if (countBadge) countBadge.textContent = visible.length;

        /* Sort */
        var sorted = visible.slice();
        if (sortVal === 'az')     sorted.sort(function(a,b){ return a.dataset.name.localeCompare(b.dataset.name); });
        if (sortVal === 'za')     sorted.sort(function(a,b){ return b.dataset.name.localeCompare(a.dataset.name); });
        if (sortVal === 'newest') sorted.sort(function(a,b){ return parseInt(b.dataset.date) - parseInt(a.dataset.date); });
        if (sortVal === 'oldest') sorted.sort(function(a,b){ return parseInt(a.dataset.date) - parseInt(b.dataset.date); });

        sorted.forEach(function(item) { grid.appendChild(item); });
    }

    if (searchInp) searchInp.addEventListener('input', applyAll);
    if (sortSel)   sortSel.addEventListener('change', applyAll);

    /* Stagger entrance */
    items.forEach(function(item, i) {
        item.style.opacity = '0';
        item.style.transform = 'translateY(20px)';
        item.style.transition = 'opacity .4s ease, transform .4s ease';
        setTimeout(function(){
            item.style.opacity = '1';
            item.style.transform = 'translateY(0)';
        }, 60 + i * 65);
    });
});
</script>
@endpush
