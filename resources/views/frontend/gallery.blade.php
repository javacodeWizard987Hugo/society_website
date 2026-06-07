@extends('layouts.master')
@section('title', 'Gallery - Summerfield Development Society')
 
@push('styles')
<link href="https://fonts.googleapis.com/css2?family=Playfair+Display:ital,wght@0,700;0,900;1,700&family=DM+Sans:wght@400;500;600&display=swap" rel="stylesheet">
<style>
:root{--sds-navy:#0F1D3A;--sds-navy-mid:#1B2F57;--sds-gold:#C8922A;--sds-gold-light:#F0C96B;--sds-cream:#FAF5ED;--sds-warm:#FFF9F0;--sds-muted:#6B6356;--sds-border:#E8E0D4;}
 
/* ── Breadcrumb ── */
.sds-bc{position:relative;min-height:420px;display:flex;align-items:center;justify-content:center;overflow:hidden;background:var(--sds-navy);}
.sds-bc__bg{position:absolute;inset:0;background-size:cover;background-position:center;opacity:.32;transform:scale(1.04);transition:transform 6s ease-out;}
.sds-bc__bg.loaded{transform:scale(1);}
.sds-bc__overlay{position:absolute;inset:0;background:linear-gradient(130deg,rgba(0, 0, 0, 0.33) 40%,rgba(36, 1, 1, 0.04) 40%);}
.sds-bc__grid{position:absolute;inset:0;opacity:.04;pointer-events:none;}
.sds-bc__bar{position:absolute;left:0;top:0;bottom:0;width:5px;background:linear-gradient(180deg,var(--sds-gold-light),var(--sds-gold));}
.sds-bc__circle{position:absolute;border-radius:50%;border:.5px solid rgba(200,146,42,.15);pointer-events:none;}
.sds-bc__inner{position:relative;z-index:3;text-align:center;padding:40px 20px;}
.sds-bc__eyebrow{font-family:'DM Sans',sans-serif;font-size:11px;font-weight:600;letter-spacing:3px;text-transform:uppercase;color:var(--sds-gold-light);display:flex;align-items:center;justify-content:center;gap:12px;margin-bottom:18px;}
.sds-bc__eyebrow::before,.sds-bc__eyebrow::after{content:'';display:block;width:36px;height:1px;background:var(--sds-gold);}
.sds-bc__title{font-family:'Playfair Display',serif;font-size:clamp(36px,5vw,58px);font-weight:900;color:#fff;line-height:1.1;margin-bottom:20px;}
.sds-bc__title em{font-style:italic;color:var(--sds-gold-light);}
.sds-bc__crumbs{display:flex;align-items:center;justify-content:center;gap:8px;font-family:'DM Sans',sans-serif;font-size:13px;color:rgba(255,255,255,.5);}
.sds-bc__crumbs a{color:rgba(255,255,255,.7);text-decoration:none;transition:color .2s;}
.sds-bc__crumbs a:hover{color:var(--sds-gold-light);}
.sds-bc__crumbs span{color:var(--sds-gold-light);}
 
/* ── Section labels ── */
.sds-label{font-family:'DM Sans',sans-serif;font-size:11px;font-weight:600;letter-spacing:2.5px;text-transform:uppercase;color:var(--sds-gold);display:flex;align-items:center;gap:10px;margin-bottom:14px;}
.sds-label::before{content:'';display:block;width:28px;height:2px;background:var(--sds-gold);border-radius:2px;}
.sds-label--center{justify-content:center;}
.sds-label--center::before{display:none;}
.sds-label--center::after{content:'';display:block;width:28px;height:2px;background:var(--sds-gold);border-radius:2px;}
.sds-h2{font-family:'Playfair Display',serif;font-size:clamp(28px,3.5vw,42px);font-weight:700;color:var(--sds-navy);line-height:1.18;margin-bottom:14px;}
.sds-h2 em{font-style:italic;color:var(--sds-gold);}
.sds-divider-gold{width:48px;height:3px;background:var(--sds-gold);border-radius:3px;margin:16px auto 0;}
 
/* ── Gallery section ── */
.sds-gallery-sec{background:var(--sds-warm);}
 
/* Event group */
.sds-ev-group{margin-bottom:64px;}
.sds-ev-group__header{display:flex;align-items:flex-end;justify-content:space-between;flex-wrap:wrap;gap:12px;padding-bottom:16px;border-bottom:1px solid var(--sds-border);margin-bottom:24px;}
.sds-ev-group__title{font-family:'Playfair Display',serif;font-size:22px;font-weight:700;color:var(--sds-navy);position:relative;padding-left:16px;margin:0;}
.sds-ev-group__title::before{content:'';position:absolute;left:0;top:4px;bottom:4px;width:4px;background:var(--sds-gold);border-radius:2px;}
.sds-ev-group__date{font-family:'DM Sans',sans-serif;font-size:13px;font-weight:500;color:var(--sds-muted);display:flex;align-items:center;gap:6px;}
.sds-ev-group__count{font-family:'DM Sans',sans-serif;font-size:11px;font-weight:600;letter-spacing:.5px;background:var(--sds-cream);border:1px solid var(--sds-border);color:var(--sds-muted);padding:3px 10px;border-radius:20px;}
 
/* Gallery card */
.sds-gal-item{border-radius:6px;overflow:hidden;position:relative;cursor:pointer;display:block;box-shadow:0 2px 12px rgba(15,29,58,.06);transition:transform .3s,box-shadow .3s;}
.sds-gal-item:hover{transform:translateY(-5px);box-shadow:0 16px 40px rgba(0, 7, 22, 0.14);}
.sds-gal-item img{width:100%;height:240px;object-fit:cover;transition:transform .45s ease;display:block;}
.sds-gal-item:hover img{transform:scale(1.07);}
.sds-gal-item__overlay{position:absolute;inset:0;background:linear-gradient(0deg,rgba(209, 225, 255, 0.7) 0%,rgba(15,29,58,.2) 50%,transparent 100%);opacity:0;transition:opacity .3s;}
.sds-gal-item:hover .sds-gal-item__overlay{opacity:1;}
.sds-gal-item__icon{position:absolute;top:50%;left:50%;transform:translate(-50%,-50%) scale(.5);opacity:0;width:50px;height:50px;border-radius:50%;background:var(--sds-gold);display:flex;align-items:center;justify-content:center;color:var(--sds-navy);font-size:18px;transition:opacity .3s,transform .3s;}
.sds-gal-item:hover .sds-gal-item__icon{opacity:1;transform:translate(-50%,-50%) scale(1);}
 
/* Masonry-ish variation — every 7th item is wider */
.sds-gal-wide{grid-column:span 2;}
@media(max-width:767px){.sds-gal-wide{grid-column:span 1;}}
 
/* Pagination */
.sds-pagination{display:flex;justify-content:center;margin-top:48px;}
.sds-pagination .pagination{gap:6px;display:flex;flex-wrap:wrap;justify-content:center;}
.sds-pagination .page-item .page-link{font-family:'DM Sans',sans-serif;font-size:13px;font-weight:600;width:42px;height:42px;border-radius:3px!important;display:flex;align-items:center;justify-content:center;border:1px solid var(--sds-border);color:var(--sds-navy);background:#fff;transition:all .2s;line-height:1;}
.sds-pagination .page-item.active .page-link{background:var(--sds-gold);border-color:var(--sds-gold);color:var(--sds-navy);}
.sds-pagination .page-item .page-link:hover{background:var(--sds-navy);border-color:var(--sds-navy);color:#fff;}
 
/* Lightbox override */
.mfp-bg{background:rgba(10,16,34,.96);}
.mfp-arrow-left:before,.mfp-arrow-right:before{border-right-color:var(--sds-gold);border-left-color:var(--sds-gold);}
</style>
@endpush
 
@section('content')
 
<section class="sds-bc">
    <div class="sds-bc__bar"></div>
    <div class="sds-bc__bg" id="bcBg" style="background-image:url('{{ asset('img/header/gallery.png') }}');"></div>
    <div class="sds-bc__overlay"></div>
    <div class="sds-bc__grid" aria-hidden="true">
        <svg width="100%" height="100%" xmlns="http://www.w3.org/2000/svg"><defs><pattern id="bcg" width="48" height="48" patternUnits="userSpaceOnUse"><path d="M48 0L0 0 0 48" fill="none" stroke="white" stroke-width=".5"/></pattern></defs><rect width="100%" height="100%" fill="url(#bcg)"/></svg>
    </div>
    <div class="sds-bc__circle" style="width:420px;height:420px;right:-110px;top:-120px;" aria-hidden="true"></div>
    <div class="sds-bc__circle" style="width:220px;height:220px;left:50px;bottom:-70px;" aria-hidden="true"></div>
    <div class="sds-bc__inner">
        <div class="sds-bc__eyebrow">Summerfield Development Society</div>
        <h1 class="sds-bc__title">Moments in <em>Focus</em></h1>
        <nav class="sds-bc__crumbs" aria-label="Breadcrumb">
            <a href="{{ url('/') }}">Home</a>
            <i class="fal fa-chevron-right" style="font-size:10px;"></i>
            <span>Gallery</span>
        </nav>
    </div>
</section>
 
<section class="sds-gallery-sec section-padding fix">
    <div class="container">
 
        <div class="text-center mb-5 wow fadeInUp">
            <div class="sds-label sds-label--center">Photo Gallery</div>
            <h2 class="sds-h2" style="margin-bottom:8px;">Glimpses of <em>Our Work</em></h2>
            <div class="sds-divider-gold"></div>
            <p style="font-family:'DM Sans',sans-serif;font-size:15px;color:var(--sds-muted);margin-top:16px;max-width:480px;margin-left:auto;margin-right:auto;line-height:1.7;">
                A visual journey through the events, programmes, and community moments that define who we are.
            </p>
        </div>
 
        @forelse($events as $event)
        <div class="sds-ev-group wow fadeInUp" data-wow-delay=".1s">
            <div class="sds-ev-group__header">
                <h3 class="sds-ev-group__title">{{ $event->name }}</h3>
                <div style="display:flex;align-items:center;gap:14px;flex-wrap:wrap;">
                    @if($event->event_date)
                    <span class="sds-ev-group__date">
                        <i class="fal fa-calendar"></i>
                        {{ \Carbon\Carbon::parse($event->event_date)->format('F d, Y') }}
                    </span>
                    @endif
                    <span class="sds-ev-group__count">{{ $event->items->count() }} photos</span>
                </div>
            </div>
 
            <div class="row g-3">
                @foreach($event->items as $item)
                @php $delay = ($loop->index % 6) * 0.08; @endphp
                <div class="col-lg-4 col-md-6 wow fadeInUp" data-wow-delay="{{ $delay }}s">
                    <a href="{{ asset('storage/' . $item->image) }}"
                       class="sds-gal-item gallery-popup-{{ $event->id }}"
                       data-group="{{ $event->id }}">
                        <img src="{{ asset('storage/' . $item->image) }}"
                             alt="{{ $event->name }}" loading="lazy">
                        <div class="sds-gal-item__overlay"></div>
                        <div class="sds-gal-item__icon"><i class="fal fa-expand-alt"></i></div>
                    </a>
                </div>
                @endforeach
            </div>
        </div>
        @empty
        <div class="text-center py-5">
            <i class="fal fa-images" style="font-size:56px;color:var(--sds-border);display:block;margin-bottom:16px;"></i>
            <p style="font-family:'DM Sans',sans-serif;color:var(--sds-muted);">No gallery items yet. Check back soon.</p>
        </div>
        @endforelse
 
        @if($events->hasPages())
        <div class="sds-pagination">{{ $events->links() }}</div>
        @endif
    </div>
</section>
 
@endsection
 
@push('scripts')
<script>
document.addEventListener('DOMContentLoaded', function(){
    var bg = document.getElementById('bcBg');
    if(bg) setTimeout(function(){ bg.classList.add('loaded'); }, 80);
 
    /* Init Magnific Popup per event group */
    @foreach($events as $event)
    if(typeof $.fn.magnificPopup !== 'undefined'){
        $('.gallery-popup-{{ $event->id }}').magnificPopup({
            type:'image',
            gallery:{ enabled:true },
            image:{ titleSrc: function(item){ return '{{ addslashes($event->name) }}'; } },
            removalDelay:300,
            mainClass:'mfp-fade'
        });
    }
    @endforeach
});
</script>
@endpush
