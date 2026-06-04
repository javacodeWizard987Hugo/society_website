@extends('layouts.master')
@section('title', 'Our Team - Summerfield Development Society')

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
    position: absolute;
    inset: 0;
    background-size: cover;
    background-position: center top;
    opacity: .32;
    transition: transform 6s ease-out;
    transform: scale(1.04);
}
.sds-bc__bg.loaded { transform: scale(1); }
.sds-bc__overlay {
    position: absolute;
    inset: 0;
    background: linear-gradient(130deg, rgba(15,29,58,.9) 40%, rgba(200,146,42,.15) 100%);
}
.sds-bc__grid {
    position: absolute;
    inset: 0;
    opacity: .04;
    pointer-events: none;
}
.sds-bc__bar {
    position: absolute;
    left: 0; top: 0; bottom: 0;
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
    position: relative;
    z-index: 3;
    text-align: center;
    padding: 40px 20px;
}
.sds-bc__eyebrow {
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
    margin-bottom: 18px;
}
.sds-bc__eyebrow::before,
.sds-bc__eyebrow::after {
    content: '';
    display: block;
    width: 36px; height: 1px;
    background: var(--sds-gold);
}
.sds-bc__title {
    font-family: 'Playfair Display', serif;
    font-size: clamp(36px, 5vw, 58px);
    font-weight: 900;
    color: #fff;
    line-height: 1.1;
    margin-bottom: 20px;
}
.sds-bc__title em { font-style: italic; color: var(--sds-gold-light); }
.sds-bc__crumbs {
    display: flex;
    align-items: center;
    justify-content: center;
    gap: 8px;
    font-family: 'DM Sans', sans-serif;
    font-size: 13px;
    color: rgba(255,255,255,.5);
}
.sds-bc__crumbs a { color: rgba(255,255,255,.7); text-decoration: none; transition: color .2s; }
.sds-bc__crumbs a:hover { color: var(--sds-gold-light); }
.sds-bc__crumbs span { color: var(--sds-gold-light); }

/* ══════════════════════════
   SECTION CHROME
══════════════════════════ */
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
    margin-bottom: 14px;
}
.sds-h2 em { font-style: italic; color: var(--sds-gold); }

/* ══════════════════════════
   FILTER TABS
══════════════════════════ */
.sds-filters {
    display: flex;
    align-items: center;
    gap: 8px;
    flex-wrap: wrap;
    margin-top: 28px;
}
.sds-filter-btn {
    font-family: 'DM Sans', sans-serif;
    font-size: 13px;
    font-weight: 500;
    padding: 9px 22px;
    border-radius: 30px;
    border: 1px solid var(--sds-border);
    background: #fff;
    color: var(--sds-muted);
    cursor: pointer;
    transition: all .2s;
    line-height: 1;
}
.sds-filter-btn:hover,
.sds-filter-btn.active {
    background: var(--sds-navy);
    border-color: var(--sds-navy);
    color: #fff;
}
.sds-filter-btn.active {
    background: var(--sds-gold);
    border-color: var(--sds-gold);
    color: var(--sds-navy);
    font-weight: 600;
}

/* ══════════════════════════
   TEAM SECTION BG
══════════════════════════ */
.sds-team-section {
    background: var(--sds-warm);
    position: relative;
    overflow: hidden;
}
.sds-team-section__deco {
    position: absolute;
    border-radius: 50%;
    border: .5px solid rgba(200,146,42,.1);
    pointer-events: none;
}

/* ══════════════════════════
   TEAM CARD
══════════════════════════ */
.sds-team-grid {
    display: grid;
    grid-template-columns: repeat(4, 1fr);
    gap: 24px;
    margin-top: 40px;
}
@media (max-width: 1199px) { .sds-team-grid { grid-template-columns: repeat(3, 1fr); } }
@media (max-width: 991px)  { .sds-team-grid { grid-template-columns: repeat(2, 1fr); } }
@media (max-width: 575px)  { .sds-team-grid { grid-template-columns: 1fr; } }

.sds-tc {
    background: #fff;
    border-radius: 8px;
    overflow: hidden;
    box-shadow: 0 2px 16px rgba(15,29,58,.05);
    transition: transform .3s ease, box-shadow .3s ease;
    position: relative;
    /* filter hidden initially for JS-driven filtering */
}
.sds-tc.hidden {
    display: none;
}
.sds-tc:hover {
    transform: translateY(-8px);
    box-shadow: 0 20px 50px rgba(15,29,58,.13);
}

/* image area */
.sds-tc__img-wrap {
    position: relative;
    height: 260px;
    overflow: hidden;
    background: var(--sds-cream);
}
.sds-tc__img-wrap img {
    width: 100%;
    height: 100%;
    object-fit: cover;
    object-position: top;
    transition: transform .45s ease;
}
.sds-tc:hover .sds-tc__img-wrap img { transform: scale(1.06); }

/* avatar placeholder when no image */
.sds-tc__avatar {
    width: 100%;
    height: 100%;
    display: flex;
    align-items: center;
    justify-content: center;
    background: linear-gradient(135deg, var(--sds-navy) 0%, var(--sds-navy-mid) 100%);
}
.sds-tc__avatar-initials {
    font-family: 'Playfair Display', serif;
    font-size: 52px;
    font-weight: 700;
    color: var(--sds-gold-light);
    line-height: 1;
    user-select: none;
}

/* gold accent strip top */
.sds-tc::before {
    content: '';
    position: absolute;
    top: 0; left: 0; right: 0;
    height: 3px;
    background: var(--sds-gold);
    transform: scaleX(0);
    transform-origin: left;
    transition: transform .35s ease;
    z-index: 2;
}
.sds-tc:hover::before { transform: scaleX(1); }

/* social overlay */
.sds-tc__social {
    position: absolute;
    bottom: 0; left: 0; right: 0;
    background: linear-gradient(0deg, rgba(15,29,58,.92) 0%, transparent 100%);
    padding: 32px 0 14px;
    display: flex;
    align-items: center;
    justify-content: center;
    gap: 10px;
    transform: translateY(100%);
    transition: transform .32s ease;
}
.sds-tc:hover .sds-tc__social { transform: translateY(0); }
.sds-tc__social a {
    width: 36px; height: 36px;
    border-radius: 50%;
    background: rgba(255,255,255,.12);
    border: 1px solid rgba(255,255,255,.25);
    display: flex; align-items: center; justify-content: center;
    color: #fff;
    font-size: 13px;
    text-decoration: none;
    transition: background .2s, border-color .2s;
}
.sds-tc__social a:hover {
    background: var(--sds-gold);
    border-color: var(--sds-gold);
    color: var(--sds-navy);
}

/* content */
.sds-tc__body {
    padding: 20px 20px 22px;
    border-top: 1px solid var(--sds-border);
}
.sds-tc__name {
    font-family: 'Playfair Display', serif;
    font-size: 18px;
    font-weight: 700;
    color: var(--sds-navy);
    margin-bottom: 4px;
    line-height: 1.2;
}
.sds-tc__role {
    font-family: 'DM Sans', sans-serif;
    font-size: 12px;
    font-weight: 600;
    letter-spacing: .8px;
    text-transform: uppercase;
    color: var(--sds-gold);
    margin-bottom: 0;
}
.sds-tc__divider {
    width: 28px; height: 2px;
    background: var(--sds-border);
    border-radius: 2px;
    margin: 10px 0;
    transition: width .3s, background .3s;
}
.sds-tc:hover .sds-tc__divider {
    width: 48px;
    background: var(--sds-gold);
}
.sds-tc__bio {
    font-family: 'DM Sans', sans-serif;
    font-size: 13px;
    line-height: 1.65;
    color: var(--sds-muted);
    margin: 0;
    display: -webkit-box;
    -webkit-line-clamp: 3;
    -webkit-box-orient: vertical;
    overflow: hidden;
}

/* ══════════════════════════
   EMPTY STATE
══════════════════════════ */
.sds-empty {
    grid-column: 1 / -1;
    text-align: center;
    padding: 60px 20px;
}
.sds-empty__icon {
    font-size: 48px;
    color: var(--sds-border);
    margin-bottom: 16px;
}
.sds-empty p {
    font-family: 'DM Sans', sans-serif;
    font-size: 15px;
    color: var(--sds-muted);
}

/* ══════════════════════════
   COUNT BADGE
══════════════════════════ */
.sds-count-badge {
    font-family: 'DM Sans', sans-serif;
    font-size: 12px;
    font-weight: 600;
    background: var(--sds-cream);
    color: var(--sds-muted);
    padding: 4px 12px;
    border-radius: 20px;
    border: 1px solid var(--sds-border);
    margin-left: 10px;
    vertical-align: middle;
}

/* ══════════════════════════
   CTA STRIP
══════════════════════════ */
.sds-cta {
    background: var(--sds-navy);
    position: relative;
    overflow: hidden;
    padding: 70px 0;
}
.sds-cta__bg { position: absolute; inset: 0; opacity: .04; pointer-events: none; }
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
    border: .5px solid rgba(255,255,255,.3);
    border-radius: 3px;
    cursor: pointer;
    text-decoration: none;
    transition: background .2s, border-color .2s;
    display: inline-block;
    line-height: 1;
}
.sds-btn-ghost:hover { background: rgba(255,255,255,.07); border-color: rgba(255,255,255,.6); color: #fff; }

/* search bar */
.sds-search-wrap {
    position: relative;
    max-width: 300px;
}
.sds-search-wrap i {
    position: absolute;
    left: 14px;
    top: 50%;
    transform: translateY(-50%);
    color: var(--sds-muted);
    font-size: 14px;
    pointer-events: none;
}
.sds-search {
    font-family: 'DM Sans', sans-serif;
    font-size: 13px;
    width: 100%;
    padding: 10px 16px 10px 38px;
    border: 1px solid var(--sds-border);
    border-radius: 30px;
    background: #fff;
    color: var(--sds-text);
    outline: none;
    transition: border-color .2s, box-shadow .2s;
}
.sds-search:focus {
    border-color: var(--sds-gold);
    box-shadow: 0 0 0 3px rgba(200,146,42,.1);
}
</style>
@endpush

@section('content')

{{-- ═══════════════════════════════════
     BREADCRUMB HERO
═══════════════════════════════════ --}}
<section class="sds-bc">
    <div class="sds-bc__bar"></div>
    <div class="sds-bc__bg" id="bcBg"
         style="background-image: url('{{ asset('img/team/team.jpg') }}');"></div>
    <div class="sds-bc__overlay"></div>
    <div class="sds-bc__grid" aria-hidden="true">
        <svg width="100%" height="100%" xmlns="http://www.w3.org/2000/svg">
            <defs>
                <pattern id="bcg" width="48" height="48" patternUnits="userSpaceOnUse">
                    <path d="M48 0L0 0 0 48" fill="none" stroke="white" stroke-width=".5"/>
                </pattern>
            </defs>
            <rect width="100%" height="100%" fill="url(#bcg)"/>
        </svg>
    </div>
    <div class="sds-bc__circle" style="width:420px;height:420px;right:-110px;top:-120px;" aria-hidden="true"></div>
    <div class="sds-bc__circle" style="width:220px;height:220px;left:50px;bottom:-70px;" aria-hidden="true"></div>

    <div class="sds-bc__inner">
        <div class="sds-bc__eyebrow">Summerfield Development Society</div>
        <h1 class="sds-bc__title">
            Our <em>Dedicated</em> Team
        </h1>
        <nav class="sds-bc__crumbs" aria-label="Breadcrumb">
            <a href="{{ url('/') }}">Home</a>
            <i class="fal fa-chevron-right" style="font-size:10px;"></i>
            <span>Our Team</span>
        </nav>
    </div>
</section>

{{-- ═══════════════════════════════════
     TEAM GRID
═══════════════════════════════════ --}}
<section class="sds-team-section section-padding fix">
    {{-- Decorative bg shapes --}}
    <div class="sds-team-section__deco" style="width:500px;height:500px;right:-150px;top:-100px;" aria-hidden="true"></div>
    <div class="sds-team-section__deco" style="width:280px;height:280px;left:-80px;bottom:0;" aria-hidden="true"></div>

    <div class="container" style="position:relative;z-index:2;">

        {{-- Header row --}}
        <div class="row align-items-end g-4">
            <div class="col-lg-7 wow fadeInLeft" data-wow-delay=".1s">
                <div class="sds-label">Society Members</div>
                <h2 class="sds-h2" style="margin-bottom:6px;">
                    Meet the People Behind<br><em>Every Initiative</em>
                    <span class="sds-count-badge" id="memberCount">{{ $members->count() }}</span>
                </h2>
                <p style="font-family:'DM Sans',sans-serif;font-size:15px;color:var(--sds-muted);margin:0;line-height:1.7;">
                    Our team is made up of passionate community leaders, volunteers, and professionals all united by one goal — a better Summerfield.
                </p>
            </div>
            <div class="col-lg-5 wow fadeInRight" data-wow-delay=".2s">
                <div style="display:flex;flex-direction:column;align-items:flex-end;gap:12px;">
                    {{-- Search --}}
                    <div class="sds-search-wrap">
                        <i class="fal fa-search"></i>
                        <input type="text" id="teamSearch" class="sds-search"
                               placeholder="Search members…" aria-label="Search team members">
                    </div>
                    {{-- Filter tabs --}}
                    <div class="sds-filters" id="filterTabs">
                        <button class="sds-filter-btn active" data-filter="all">All Members</button>
                        @php
                            $roles = $members->pluck('position')->filter()->unique()->values();
                        @endphp
                        @foreach($roles->take(5) as $role)
                        <button class="sds-filter-btn" data-filter="{{ Str::slug($role) }}">{{ $role }}</button>
                        @endforeach
                    </div>
                </div>
            </div>
        </div>

        {{-- Cards grid --}}
        <div class="sds-team-grid" id="teamGrid">
            @forelse($members as $member)
            @php
                $delay   = ($loop->index % 4) * 0.1;
                $roleSlug = Str::slug($member->position ?? '');
                $initials = collect(explode(' ', $member->name))
                              ->map(fn($w) => strtoupper(substr($w,0,1)))
                              ->take(2)->implode('');
            @endphp
            <div class="sds-tc wow fadeInUp"
                 data-wow-delay="{{ $delay }}s"
                 data-role="{{ $roleSlug }}"
                 data-name="{{ strtolower($member->name) }}">

                {{-- Image / Avatar --}}
                <div class="sds-tc__img-wrap">
                    @if($member->image)
                        <img src="{{ asset('storage/' . $member->image) }}"
                             alt="{{ $member->name }}"
                             loading="lazy">
                    @else
                        <div class="sds-tc__avatar">
                            <span class="sds-tc__avatar-initials">{{ $initials }}</span>
                        </div>
                    @endif

                    {{-- Social overlay --}}
                    @if($member->facebook || $member->twitter || $member->linkedin)
                    <div class="sds-tc__social">
                        @if($member->facebook)
                        <a href="{{ $member->facebook }}" target="_blank" rel="noopener"
                           aria-label="{{ $member->name }} on Facebook">
                            <i class="fab fa-facebook-f"></i>
                        </a>
                        @endif
                        @if($member->twitter)
                        <a href="{{ $member->twitter }}" target="_blank" rel="noopener"
                           aria-label="{{ $member->name }} on Twitter">
                            <i class="fab fa-twitter"></i>
                        </a>
                        @endif
                        @if($member->linkedin)
                        <a href="{{ $member->linkedin }}" target="_blank" rel="noopener"
                           aria-label="{{ $member->name }} on LinkedIn">
                            <i class="fab fa-linkedin-in"></i>
                        </a>
                        @endif
                    </div>
                    @endif
                </div>

                {{-- Body --}}
                <div class="sds-tc__body">
                    <div class="sds-tc__role">{{ $member->position ?? 'Member' }}</div>
                    <div class="sds-tc__divider"></div>
                    <div class="sds-tc__name">{{ $member->name }}</div>
                    @if(!empty($member->bio))
                    <p class="sds-tc__bio">{{ $member->bio }}</p>
                    @endif
                </div>
            </div>
            @empty
            <div class="sds-empty">
                <div class="sds-empty__icon"><i class="fal fa-users"></i></div>
                <p>No team members found. Check back soon.</p>
            </div>
            @endforelse

            {{-- No-results message (hidden by default) --}}
            <div class="sds-empty" id="noResults" style="display:none;">
                <div class="sds-empty__icon"><i class="fal fa-search"></i></div>
                <p>No members match your search.</p>
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
                <pattern id="ctad" width="32" height="32" patternUnits="userSpaceOnUse" patternTransform="rotate(45)">
                    <line x1="0" y1="0" x2="0" y2="32" stroke="white" stroke-width=".8"/>
                </pattern>
            </defs>
            <rect width="100%" height="100%" fill="url(#ctad)"/>
        </svg>
    </div>
    <div class="sds-bc__circle" style="width:380px;height:380px;right:-80px;top:-100px;border-color:rgba(200,146,42,.1);" aria-hidden="true"></div>
    <div class="sds-bc__circle" style="width:200px;height:200px;left:40px;bottom:-60px;border-color:rgba(200,146,42,.08);" aria-hidden="true"></div>

    <div class="container" style="position:relative;z-index:2;">
        <div class="row align-items-center g-4">
            <div class="col-lg-8 wow fadeInLeft" data-wow-delay=".1s">
                <h2 class="sds-cta__title">
                    Want to Join Our <em>Volunteer Team</em>?
                </h2>
                <p class="sds-cta__sub">
                    We're always looking for passionate individuals who want to make a positive difference in the Summerfield community.
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

    /* ── Breadcrumb bg parallax ── */
    var bg = document.getElementById('bcBg');
    if (bg) setTimeout(function () { bg.classList.add('loaded'); }, 80);

    /* ── Filter + Search logic ── */
    var cards      = Array.from(document.querySelectorAll('.sds-tc'));
    var filterBtns = document.querySelectorAll('.sds-filter-btn');
    var searchInp  = document.getElementById('teamSearch');
    var noResults  = document.getElementById('noResults');
    var countBadge = document.getElementById('memberCount');
    var activeFilter = 'all';

    function applyFilters() {
        var query = searchInp ? searchInp.value.trim().toLowerCase() : '';
        var visible = 0;

        cards.forEach(function (card) {
            var roleMatch   = activeFilter === 'all' || card.dataset.role === activeFilter;
            var searchMatch = !query || card.dataset.name.indexOf(query) !== -1
                              || (card.dataset.role && card.dataset.role.indexOf(query) !== -1);

            if (roleMatch && searchMatch) {
                card.style.display = '';
                visible++;
            } else {
                card.style.display = 'none';
            }
        });

        if (noResults) noResults.style.display = visible === 0 ? 'block' : 'none';
        if (countBadge) countBadge.textContent = visible;
    }

    filterBtns.forEach(function (btn) {
        btn.addEventListener('click', function () {
            filterBtns.forEach(function (b) { b.classList.remove('active'); });
            btn.classList.add('active');
            activeFilter = btn.dataset.filter;
            applyFilters();
        });
    });

    if (searchInp) {
        searchInp.addEventListener('input', applyFilters);
    }

    /* ── Stagger card entrance ── */
    cards.forEach(function (card, i) {
        card.style.opacity = '0';
        card.style.transform = 'translateY(24px)';
        card.style.transition = 'opacity .4s ease, transform .4s ease';
        setTimeout(function () {
            card.style.opacity = '1';
            card.style.transform = 'translateY(0)';
        }, 80 + i * 60);
    });
});
</script>
@endpush