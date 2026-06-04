@extends('layouts.master')
@section('title', 'Future Projects - Summerfield Development Society')
 
@push('styles')
<link href="https://fonts.googleapis.com/css2?family=Playfair+Display:ital,wght@0,700;0,900;1,700&family=DM+Sans:wght@400;500;600&display=swap" rel="stylesheet">
<style>
:root{--sds-navy:#0F1D3A;--sds-navy-mid:#1B2F57;--sds-gold:#C8922A;--sds-gold-light:#F0C96B;--sds-cream:#FAF5ED;--sds-warm:#FFF9F0;--sds-muted:#6B6356;--sds-border:#E8E0D4;}
.sds-bc{position:relative;min-height:420px;display:flex;align-items:center;justify-content:center;overflow:hidden;background:var(--sds-navy);}
.sds-bc__bg{position:absolute;inset:0;background-size:cover;background-position:center;opacity:.32;transform:scale(1.04);transition:transform 6s ease-out;}
.sds-bc__bg.loaded{transform:scale(1);}
.sds-bc__overlay{position:absolute;inset:0;background:linear-gradient(130deg,rgba(15,29,58,.9) 40%,rgba(200,146,42,.15) 100%);}
.sds-bc__grid{position:absolute;inset:0;opacity:.04;pointer-events:none;}
.sds-bc__bar{position:absolute;left:0;top:0;bottom:0;width:5px;background:linear-gradient(180deg,var(--sds-gold-light),var(--sds-gold));}
.sds-bc__circle{position:absolute;border-radius:50%;border:.5px solid rgba(200,146,42,.15);pointer-events:none;}
.sds-bc__inner{position:relative;z-index:3;text-align:center;padding:40px 20px;}
.sds-bc__eyebrow{font-family:'DM Sans',sans-serif;font-size:11px;font-weight:600;letter-spacing:3px;text-transform:uppercase;color:var(--sds-gold-light);display:flex;align-items:center;justify-content:center;gap:12px;margin-bottom:18px;}
.sds-bc__eyebrow::before,.sds-bc__eyebrow::after{content:'';display:block;width:36px;height:1px;background:var(--sds-gold);}
.sds-bc__title{font-family:'Playfair Display',serif;font-size:clamp(36px,5vw,58px);font-weight:900;color:#fff;line-height:1.1;margin-bottom:20px;}
.sds-bc__title em{font-style:italic;color:var(--sds-gold-light);}
.sds-bc__crumbs{display:flex;align-items:center;justify-content:center;gap:8px;font-family:'DM Sans',sans-serif;font-size:13px;color:rgba(255,255,255,.5);}
.sds-bc__crumbs a{color:rgba(255,255,255,.7);text-decoration:none;}
.sds-bc__crumbs a:hover{color:var(--sds-gold-light);}
.sds-bc__crumbs span{color:var(--sds-gold-light);}
 
.sds-label{font-family:'DM Sans',sans-serif;font-size:11px;font-weight:600;letter-spacing:2.5px;text-transform:uppercase;color:var(--sds-gold);display:flex;align-items:center;gap:10px;margin-bottom:14px;}
.sds-label::before{content:'';display:block;width:28px;height:2px;background:var(--sds-gold);border-radius:2px;}
.sds-label--center{justify-content:center;}
.sds-label--center::before{display:none;}
.sds-label--center::after{content:'';display:block;width:28px;height:2px;background:var(--sds-gold);border-radius:2px;}
.sds-h2{font-family:'Playfair Display',serif;font-size:clamp(28px,3.5vw,42px);font-weight:700;color:var(--sds-navy);line-height:1.18;margin-bottom:14px;}
.sds-h2 em{font-style:italic;color:var(--sds-gold);}
.sds-divider-gold{width:48px;height:3px;background:var(--sds-gold);border-radius:3px;margin:16px auto 0;}
 
/* ── Projects section ── */
.sds-proj-sec{background:var(--sds-warm);}
 
.sds-proj-card{
    background:#fff; border-radius:8px; padding:36px 32px;
    height:100%; position:relative; overflow:hidden;
    box-shadow:0 2px 16px rgba(15,29,58,.05);
    transition:transform .3s,box-shadow .3s;
    display:flex; flex-direction:column;
}
.sds-proj-card::before{
    content:''; position:absolute; top:0; left:0; right:0; height:3px;
    background:var(--sds-gold); transform:scaleX(0); transform-origin:left;
    transition:transform .35s ease;
}
.sds-proj-card:hover::before{transform:scaleX(1);}
.sds-proj-card:hover{transform:translateY(-6px);box-shadow:0 20px 50px rgba(15,29,58,.11);}
 
.sds-proj-card__num{
    font-family:'Playfair Display',serif;
    font-size:64px; font-weight:900; line-height:1;
    color:rgba(200,146,42,.1); position:absolute;
    top:16px; right:20px; user-select:none;
    transition:color .3s;
}
.sds-proj-card:hover .sds-proj-card__num{color:rgba(200,146,42,.2);}
 
.sds-proj-card__icon{
    width:52px; height:52px; border-radius:50%;
    background:var(--sds-cream);
    display:flex; align-items:center; justify-content:center;
    font-size:20px; color:var(--sds-gold); margin-bottom:20px;
    transition:background .25s,color .25s;
}
.sds-proj-card:hover .sds-proj-card__icon{background:var(--sds-gold);color:#fff;}
 
.sds-proj-card__title{
    font-family:'Playfair Display',serif; font-size:20px; font-weight:700;
    color:var(--sds-navy); line-height:1.3; margin-bottom:8px;
}
.sds-proj-card__divider{
    width:28px; height:2px; background:var(--sds-border); border-radius:2px;
    margin-bottom:14px; transition:width .3s,background .3s;
}
.sds-proj-card:hover .sds-proj-card__divider{width:48px;background:var(--sds-gold);}
.sds-proj-card__text{
    font-family:'DM Sans',sans-serif; font-size:15px; line-height:1.75;
    color:var(--sds-muted); flex:1; margin:0;
}
 
/* Status badge */
.sds-proj-badge{
    display:inline-flex; align-items:center; gap:6px;
    font-family:'DM Sans',sans-serif; font-size:11px; font-weight:600;
    letter-spacing:.8px; text-transform:uppercase;
    padding:5px 12px; border-radius:20px;
    background:rgba(200,146,42,.12); color:var(--sds-gold);
    border:1px solid rgba(200,146,42,.3);
    margin-top:20px; align-self:flex-start;
}
.sds-proj-badge i{font-size:9px;}
 
/* Vision strip */
.sds-vision{
    background:var(--sds-navy); padding:56px 0; position:relative; overflow:hidden;
}
.sds-vision__bg{position:absolute;inset:0;opacity:.04;pointer-events:none;}
.sds-vision__title{
    font-family:'Playfair Display',serif; font-size:clamp(22px,2.5vw,34px);
    font-weight:700; color:#fff; line-height:1.3; margin-bottom:10px;
}
.sds-vision__title em{color:var(--sds-gold-light);font-style:italic;}
.sds-vision__text{font-family:'DM Sans',sans-serif;font-size:15px;line-height:1.75;color:rgba(255,255,255,.6);}
.sds-btn-gold{font-family:'DM Sans',sans-serif;font-size:14px;font-weight:600;background:var(--sds-gold);color:var(--sds-navy);padding:14px 32px;border:none;border-radius:3px;cursor:pointer;text-decoration:none;letter-spacing:.2px;transition:background .2s,transform .15s;display:inline-block;line-height:1;}
.sds-btn-gold:hover{background:var(--sds-gold-light);color:var(--sds-navy);transform:translateY(-1px);}
 
/* Pagination */
.sds-pagination{display:flex;justify-content:center;margin-top:48px;}
.sds-pagination .pagination{gap:6px;display:flex;flex-wrap:wrap;justify-content:center;}
.sds-pagination .page-item .page-link{font-family:'DM Sans',sans-serif;font-size:13px;font-weight:600;width:42px;height:42px;border-radius:3px!important;display:flex;align-items:center;justify-content:center;border:1px solid var(--sds-border);color:var(--sds-navy);background:#fff;transition:all .2s;line-height:1;}
.sds-pagination .page-item.active .page-link{background:var(--sds-gold);border-color:var(--sds-gold);color:var(--sds-navy);}
.sds-pagination .page-item .page-link:hover{background:var(--sds-navy);border-color:var(--sds-navy);color:#fff;}
</style>
@endpush
 
@section('content')
 
<section class="sds-bc">
    <div class="sds-bc__bar"></div>
    <div class="sds-bc__bg" id="bcBg" style="background-image:url('{{ asset('img/header/project.png') }}');"></div>
    <div class="sds-bc__overlay"></div>
    <div class="sds-bc__grid" aria-hidden="true">
        <svg width="100%" height="100%" xmlns="http://www.w3.org/2000/svg"><defs><pattern id="bcg" width="48" height="48" patternUnits="userSpaceOnUse"><path d="M48 0L0 0 0 48" fill="none" stroke="white" stroke-width=".5"/></pattern></defs><rect width="100%" height="100%" fill="url(#bcg)"/></svg>
    </div>
    <div class="sds-bc__circle" style="width:420px;height:420px;right:-110px;top:-120px;" aria-hidden="true"></div>
    <div class="sds-bc__circle" style="width:220px;height:220px;left:50px;bottom:-70px;" aria-hidden="true"></div>
    <div class="sds-bc__inner">
        <div class="sds-bc__eyebrow">Summerfield Development Society</div>
        <h1 class="sds-bc__title">Looking <em>Forward</em> Together</h1>
        <nav class="sds-bc__crumbs" aria-label="Breadcrumb">
            <a href="{{ url('/') }}">Home</a>
            <i class="fal fa-chevron-right" style="font-size:10px;"></i>
            <span>Future Projects</span>
        </nav>
    </div>
</section>
 
<section class="sds-proj-sec section-padding fix">
    <div class="container">
        <div class="text-center mb-5 wow fadeInUp">
            <div class="sds-label sds-label--center">On the Cards</div>
            <h2 class="sds-h2" style="margin-bottom:8px;">Our Upcoming <em>Initiatives</em></h2>
            <div class="sds-divider-gold"></div>
            <p style="font-family:'DM Sans',sans-serif;font-size:15px;color:var(--sds-muted);margin-top:16px;max-width:520px;margin-left:auto;margin-right:auto;line-height:1.7;">
                These are the projects we are actively planning and working towards — your support helps make them a reality.
            </p>
        </div>
 
        <div class="row g-4">
            @forelse($projects as $project)
            @php $delay = ($loop->index % 2) * 0.12; @endphp
            <div class="col-lg-6 wow fadeInUp" data-wow-delay="{{ $delay }}s">
                <div class="sds-proj-card">
                    <div class="sds-proj-card__num" aria-hidden="true">{{ str_pad($loop->iteration, 2, '0', STR_PAD_LEFT) }}</div>
                    <div class="sds-proj-card__icon"><i class="fal fa-rocket"></i></div>
                    <h3 class="sds-proj-card__title">{{ $project->title }}</h3>
                    <div class="sds-proj-card__divider"></div>
                    <p class="sds-proj-card__text">{{ $project->description }}</p>
                    <span class="sds-proj-badge">
                        <i class="fal fa-clock"></i> Upcoming
                    </span>
                </div>
            </div>
            @empty
            <div class="col-12 text-center py-5">
                <i class="fal fa-rocket" style="font-size:52px;color:var(--sds-border);display:block;margin-bottom:16px;"></i>
                <p style="font-family:'DM Sans',sans-serif;color:var(--sds-muted);">No upcoming projects listed yet.</p>
            </div>
            @endforelse
        </div>
 
        @if($projects->hasPages())
        <div class="sds-pagination">{{ $projects->links() }}</div>
        @endif
    </div>
</section>
 
{{-- Vision strip --}}
<section class="sds-vision fix">
    <div class="sds-vision__bg" aria-hidden="true">
        <svg width="100%" height="100%" xmlns="http://www.w3.org/2000/svg"><defs><pattern id="vd" width="32" height="32" patternUnits="userSpaceOnUse" patternTransform="rotate(45)"><line x1="0" y1="0" x2="0" y2="32" stroke="white" stroke-width=".8"/></pattern></defs><rect width="100%" height="100%" fill="url(#vd)"/></svg>
    </div>
    <div class="sds-bc__circle" style="width:360px;height:360px;right:-80px;top:-100px;border-color:rgba(200,146,42,.1);" aria-hidden="true"></div>
    <div class="container" style="position:relative;z-index:2;">
        <div class="row align-items-center g-4">
            <div class="col-lg-8 wow fadeInLeft" data-wow-delay=".1s">
                <h2 class="sds-vision__title">Have an idea for a <em>community project</em>?</h2>
                <p class="sds-vision__text">We welcome suggestions from residents. Your ideas could shape the future of Summerfield.</p>
            </div>
            <div class="col-lg-4 text-lg-end wow fadeInRight" data-wow-delay=".2s">
                <a href="{{ route('frontend.contact') }}" class="sds-btn-gold">Share Your Idea &rarr;</a>
            </div>
        </div>
    </div>
</section>
 
@endsection
 
@push('scripts')
<script>
document.addEventListener('DOMContentLoaded',function(){
    var bg=document.getElementById('bcBg');
    if(bg) setTimeout(function(){bg.classList.add('loaded');},80);
});
</script>
@endpush
 
