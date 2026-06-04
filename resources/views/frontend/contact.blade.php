@extends('layouts.master')
@section('title', 'Contact Us - Summerfield Development Society')

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
.sds-h2{font-family:'Playfair Display',serif;font-size:clamp(28px,3.5vw,40px);font-weight:700;color:var(--sds-navy);line-height:1.18;margin-bottom:14px;}
.sds-h2 em{font-style:italic;color:var(--sds-gold);}

/* ── Contact section ── */
.sds-contact-sec{background:var(--sds-warm);}

/* Info cards */
.sds-info-card{
    background:#fff; border-radius:6px; padding:28px 24px;
    display:flex; align-items:flex-start; gap:16px;
    box-shadow:0 2px 16px rgba(15,29,58,.05);
    border-left:3px solid var(--sds-gold);
    transition:transform .25s,box-shadow .25s;
    margin-bottom:20px;
}
.sds-info-card:hover{transform:translateX(4px);box-shadow:0 4px 24px rgba(15,29,58,.09);}
.sds-info-card__icon{
    width:46px;height:46px;border-radius:50%;background:var(--sds-cream);
    display:flex;align-items:center;justify-content:center;
    font-size:18px;color:var(--sds-gold);flex-shrink:0;
    transition:background .25s,color .25s;
}
.sds-info-card:hover .sds-info-card__icon{background:var(--sds-gold);color:#fff;}
.sds-info-card__label{font-family:'DM Sans',sans-serif;font-size:11px;font-weight:600;letter-spacing:1px;text-transform:uppercase;color:var(--sds-muted);margin-bottom:4px;}
.sds-info-card__value{font-family:'DM Sans',sans-serif;font-size:15px;font-weight:600;color:var(--sds-navy);margin:0;line-height:1.4;}
.sds-info-card__value a{color:var(--sds-navy);text-decoration:none;transition:color .2s;}
.sds-info-card__value a:hover{color:var(--sds-gold);}

/* Form */
.sds-form-wrap{
    background:#fff; border-radius:8px;
    padding:44px 40px;
    box-shadow:0 4px 32px rgba(15,29,58,.07);
}
.sds-form-group{margin-bottom:22px;}
.sds-form-label{
    font-family:'DM Sans',sans-serif;font-size:12px;font-weight:600;
    letter-spacing:.8px;text-transform:uppercase;color:var(--sds-navy);
    display:block;margin-bottom:8px;
}
.sds-form-control{
    font-family:'DM Sans',sans-serif;font-size:14px;
    width:100%;padding:13px 16px;
    border:1px solid var(--sds-border);border-radius:4px;
    background:#fff;color:var(--sds-navy);outline:none;
    transition:border-color .2s,box-shadow .2s;
}
.sds-form-control:focus{
    border-color:var(--sds-gold);
    box-shadow:0 0 0 3px rgba(200,146,42,.1);
}
.sds-form-control::placeholder{color:var(--sds-muted);}
textarea.sds-form-control{resize:vertical;min-height:140px;}
.sds-submit{
    font-family:'DM Sans',sans-serif;font-size:14px;font-weight:600;
    background:var(--sds-gold);color:var(--sds-navy);
    padding:15px 36px;border:none;border-radius:4px;
    cursor:pointer;width:100%;transition:background .2s,transform .15s;
    letter-spacing:.3px;
}
.sds-submit:hover{background:var(--sds-gold-light);transform:translateY(-1px);}

/* Alert */
.sds-alert{
    font-family:'DM Sans',sans-serif;font-size:14px;font-weight:500;
    padding:14px 18px;border-radius:4px;margin-bottom:20px;
    display:flex;align-items:center;gap:10px;
}
.sds-alert--success{background:#E8F5EE;border-left:3px solid #1A6B3C;color:#1A6B3C;}
.sds-alert--error{background:#FEF2F2;border-left:3px solid #DC2626;color:#DC2626;}

/* Social */
.sds-social-link{
    width:42px;height:42px;border-radius:50%;
    border:1px solid var(--sds-border);background:#fff;
    display:inline-flex;align-items:center;justify-content:center;
    color:var(--sds-muted);font-size:15px;text-decoration:none;
    transition:background .2s,border-color .2s,color .2s;
}
.sds-social-link:hover{background:var(--sds-gold);border-color:var(--sds-gold);color:var(--sds-navy);}

@media(max-width:767px){.sds-form-wrap{padding:28px 20px;}}
</style>
@endpush

@section('content')

<section class="sds-bc">
    <div class="sds-bc__bar"></div>
    <div class="sds-bc__bg" id="bcBg" style="background-image:url('{{ asset('img/events.png') }}');"></div>
    <div class="sds-bc__overlay"></div>
    <div class="sds-bc__grid" aria-hidden="true">
        <svg width="100%" height="100%" xmlns="http://www.w3.org/2000/svg"><defs><pattern id="bcg" width="48" height="48" patternUnits="userSpaceOnUse"><path d="M48 0L0 0 0 48" fill="none" stroke="white" stroke-width=".5"/></pattern></defs><rect width="100%" height="100%" fill="url(#bcg)"/></svg>
    </div>
    <div class="sds-bc__circle" style="width:420px;height:420px;right:-110px;top:-120px;" aria-hidden="true"></div>
    <div class="sds-bc__circle" style="width:220px;height:220px;left:50px;bottom:-70px;" aria-hidden="true"></div>
    <div class="sds-bc__inner">
        <div class="sds-bc__eyebrow">Get In Touch</div>
        <h1 class="sds-bc__title">Contact <em>Us</em></h1>
        <nav class="sds-bc__crumbs" aria-label="Breadcrumb">
            <a href="{{ url('/') }}">Home</a>
            <i class="fal fa-chevron-right" style="font-size:10px;"></i>
            <span>Contact Us</span>
        </nav>
    </div>
</section>
<!--

<section class="sds-contact-sec section-padding fix">
    <div class="container">
        <div class="row g-5 align-items-start">

            {{-- Left: info + social --}}
            <div class="col-lg-5 wow fadeInLeft" data-wow-delay=".1s">
                <div class="sds-label">Reach Us</div>
                <h2 class="sds-h2">We'd Love to <em>Hear From You</em></h2>
                <p style="font-family:'DM Sans',sans-serif;font-size:15px;color:var(--sds-muted);line-height:1.75;margin-bottom:32px;">
                    Whether you have a question, a suggestion, or want to get involved — our doors are always open.
                </p>

                @if(!empty($settings['address']))
                <div class="sds-info-card">
                    <div class="sds-info-card__icon"><i class="fal fa-map-marker-alt"></i></div>
                    <div>
                        <div class="sds-info-card__label">Address</div>
                        <p class="sds-info-card__value">{{ $settings['address'] }}</p>
                    </div>
                </div>
                @endif

                @if(!empty($settings['phone']))
                <div class="sds-info-card">
                    <div class="sds-info-card__icon"><i class="fal fa-phone"></i></div>
                    <div>
                        <div class="sds-info-card__label">Phone</div>
                        <p class="sds-info-card__value">
                            <a href="tel:{{ $settings['phone'] }}">{{ $settings['phone'] }}</a>
                        </p>
                    </div>
                </div>
                @endif

                @if(!empty($settings['email']))
                <div class="sds-info-card">
                    <div class="sds-info-card__icon"><i class="fal fa-envelope"></i></div>
                    <div>
                        <div class="sds-info-card__label">Email</div>
                        <p class="sds-info-card__value">
                            <a href="mailto:{{ $settings['email'] }}">{{ $settings['email'] }}</a>
                        </p>
                    </div>
                </div>
                @endif

                {{-- Social --}}
                <div style="margin-top:32px;">
                    <p style="font-family:'DM Sans',sans-serif;font-size:12px;font-weight:600;letter-spacing:1.5px;text-transform:uppercase;color:var(--sds-muted);margin-bottom:14px;">Follow Us</p>
                    <div style="display:flex;gap:10px;flex-wrap:wrap;">
                        @if(!empty($settings['facebook']))<a href="{{ $settings['facebook'] }}" class="sds-social-link" target="_blank" aria-label="Facebook"><i class="fab fa-facebook-f"></i></a>@endif
                        @if(!empty($settings['twitter']))<a href="{{ $settings['twitter'] }}" class="sds-social-link" target="_blank" aria-label="Twitter"><i class="fab fa-twitter"></i></a>@endif
                        @if(!empty($settings['instagram']))<a href="{{ $settings['instagram'] }}" class="sds-social-link" target="_blank" aria-label="Instagram"><i class="fab fa-instagram"></i></a>@endif
                        @if(!empty($settings['whatsapp']))<a href="https://wa.me/{{ preg_replace('/\D/','',$settings['whatsapp']) }}" class="sds-social-link" target="_blank" aria-label="WhatsApp"><i class="fab fa-whatsapp"></i></a>@endif
                    </div>
                </div>
            </div>

            {{-- Right: form --}}
            <div class="col-lg-7 wow fadeInRight" data-wow-delay=".2s">
                <div class="sds-form-wrap">
                    <h3 style="font-family:'Playfair Display',serif;font-size:24px;font-weight:700;color:var(--sds-navy);margin-bottom:24px;">Send a Message</h3>

                    @if(session('success'))
                    <div class="sds-alert sds-alert--success">
                        <i class="fal fa-check-circle"></i> {{ session('success') }}
                    </div>
                    @endif
                    @if($errors->any())
                    <div class="sds-alert sds-alert--error">
                        <i class="fal fa-exclamation-circle"></i> Please fix the errors below.
                    </div>
                    @endif

                    <form action="{{ route('frontend.contact.submit') }}" method="POST" id="contactForm">
                        @csrf
                        <div class="row g-3">
                            <div class="col-md-6">
                                <div class="sds-form-group">
                                    <label class="sds-form-label" for="name">Full Name <span style="color:var(--sds-gold);">*</span></label>
                                    <input type="text" id="name" name="name" class="sds-form-control @error('name') is-invalid @enderror"
                                           placeholder="Your full name" value="{{ old('name') }}" required>
                                    @error('name')<div style="font-family:'DM Sans',sans-serif;font-size:12px;color:#DC2626;margin-top:4px;">{{ $message }}</div>@enderror
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="sds-form-group">
                                    <label class="sds-form-label" for="email">Email Address <span style="color:var(--sds-gold);">*</span></label>
                                    <input type="email" id="email" name="email" class="sds-form-control @error('email') is-invalid @enderror"
                                           placeholder="your@email.com" value="{{ old('email') }}" required>
                                    @error('email')<div style="font-family:'DM Sans',sans-serif;font-size:12px;color:#DC2626;margin-top:4px;">{{ $message }}</div>@enderror
                                </div>
                            </div>
                            <div class="col-12">
                                <div class="sds-form-group">
                                    <label class="sds-form-label" for="phone">Phone Number</label>
                                    <input type="text" id="phone" name="phone" class="sds-form-control"
                                           placeholder="+94 77 000 0000" value="{{ old('phone') }}">
                                </div>
                            </div>
                            <div class="col-12">
                                <div class="sds-form-group">
                                    <label class="sds-form-label" for="subject">Subject <span style="color:var(--sds-gold);">*</span></label>
                                    <input type="text" id="subject" name="subject" class="sds-form-control @error('subject') is-invalid @enderror"
                                           placeholder="How can we help?" value="{{ old('subject') }}" required>
                                    @error('subject')<div style="font-family:'DM Sans',sans-serif;font-size:12px;color:#DC2626;margin-top:4px;">{{ $message }}</div>@enderror
                                </div>
                            </div>
                            <div class="col-12">
                                <div class="sds-form-group" style="margin-bottom:28px;">
                                    <label class="sds-form-label" for="message">Message <span style="color:var(--sds-gold);">*</span></label>
                                    <textarea id="message" name="message" class="sds-form-control @error('message') is-invalid @enderror"
                                              placeholder="Write your message here…" required>{{ old('message') }}</textarea>
                                    @error('message')<div style="font-family:'DM Sans',sans-serif;font-size:12px;color:#DC2626;margin-top:4px;">{{ $message }}</div>@enderror
                                </div>
                            </div>
                            <div class="col-12">
                                <button type="submit" class="sds-submit" id="submitBtn">
                                    <span id="submitText">Send Message &rarr;</span>
                                    <span id="submitLoading" style="display:none;">
                                        <i class="fal fa-spinner fa-spin"></i> Sending…
                                    </span>
                                </button>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</section>
                        -->
<!-- Contact Form & Map Section Start -->
<section class="contact-section py-5">
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-lg-10">
                <div class="contact-wrapper-2 bg-white shadow-lg rounded p-4 p-md-5">
                    <div class="row">
                        <div class="col-md-6 mb-4 mb-md-0">
                            <div class="contact-info">
                                <h3 class="mb-4">Get in Touch</h3>
                                <p class="mb-4">We'd love to hear from you. Whether you have a question about our programs, events, or anything else, our team is ready to answer all your questions.</p>
                                
                                <div class="d-flex align-items-start mb-3">
                                    <div class="icon-box me-3">
                                        <i class="fas fa-map-marker-alt text-primary"></i>
                                    </div>
                                    <div>
                                        <h5 class="mb-1">Our Location</h5>
                                        <p class="mb-0 text-muted">{{ $settings['address'] ?? 'Community Center,
57, Summerfield Mawatha, 
Summerfield Garden,
Balagolla
Kandy.' }}</p>
                                    </div>
                                </div>
                                
                                <div class="d-flex align-items-start mb-3">
                                    <div class="icon-box me-3">
                                        <i class="fas fa-phone-alt text-primary"></i>
                                    </div>
                                    <div>
                                        <h5 class="mb-1">Phone Number</h5>
                                        <p class="mb-0 text-muted">{{ $settings['phone'] ?? '718009995' }}</p>
                                    </div>
                                </div>
                                
                                <div class="d-flex align-items-start">
                                    <div class="icon-box me-3">
                                        <i class="fas fa-envelope text-primary"></i>
                                    </div>
                                    <div>
                                        <h5 class="mb-1">Email Address</h5>
                                        <p class="mb-0 text-muted">{{ $settings['email'] ?? 'sdskandy@gmail.com' }}</p>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="contact-content">
                                <h3 class="mb-4">Send a Message</h3>
                                
                                @if(session('success'))
                                    <div class="alert alert-success">
                                        {{ session('success') }}
                                    </div>
                                @endif

                                <form action="{{ route('frontend.contact.submit') }}" method="POST">
                                    @csrf
                                    <style>
                                        /* Override global main.css white-text issues */
                                        .contact-content label { color: #333 !important; }
                                        .contact-content .form-control { color: #333 !important; border: 1px solid #ced4da !important; }
                                        .contact-content .form-control::placeholder { color: #999 !important; }
                                    </style>
                                    <div class="row">
                                        <div class="col-12 mb-3">
                                            <label for="name" class="form-label text-dark fw-bold">Full Name*</label>
                                            <input type="text" name="name" id="name" class="form-control" placeholder="John Doe" value="{{ old('name') }}" required>
                                            @error('name')
                                                <small class="text-danger">{{ $message }}</small>
                                            @enderror
                                        </div>
                                        <div class="col-12 mb-3">
                                            <label for="email" class="form-label text-dark fw-bold">Email Address*</label>
                                            <input type="email" name="email" id="email" class="form-control" placeholder="name@example.com" value="{{ old('email') }}" required>
                                            @error('email')
                                                <small class="text-danger">{{ $message }}</small>
                                            @enderror
                                        </div>
                                        <div class="col-12 mb-3">
                                            <label for="phone" class="form-label text-dark fw-bold">Phone Number</label>
                                            <input type="text" name="phone" id="phone" class="form-control" placeholder="Phone Number" value="{{ old('phone') }}">
                                            @error('phone')
                                                <small class="text-danger">{{ $message }}</small>
                                            @enderror
                                        </div>
                                        <div class="col-12 mb-3">
                                            <label for="description" class="form-label text-dark fw-bold">Message*</label>
                                            <textarea name="description" id="description" class="form-control" rows="5" placeholder="Write Message" required>{{ old('description') }}</textarea>
                                            @error('description')
                                                <small class="text-danger">{{ $message }}</small>
                                            @enderror
                                        </div>
                                        <div class="col-12 mt-2">
                                            <button type="submit" class="btn btn-primary btn-lg w-100">Send Message <i class="fas fa-arrow-right ms-2"></i></button>
                                        </div>
                                    </div>
                                </form>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

<div class="map-items">
    <div class="googpemap">
        <iframe 
            src="https://www.google.com/maps?q=Community+Center,+57+Summerfield+Mawatha,+Summerfield+Garden,+Balagolla,+Kandy,+Sri+Lanka&z=17&output=embed"
            style="border:0; width: 100%; height: 450px;" 
            allowfullscreen="" 
            loading="lazy">
        </iframe>
    </div>
</div>
@endsection

@push('scripts')
<script>
document.addEventListener('DOMContentLoaded',function(){
    var bg=document.getElementById('bcBg');
    if(bg) setTimeout(function(){bg.classList.add('loaded');},80);

    var form=document.getElementById('contactForm');
    if(form){
        form.addEventListener('submit',function(){
            document.getElementById('submitText').style.display='none';
            document.getElementById('submitLoading').style.display='inline';
            document.getElementById('submitBtn').disabled=true;
        });
    }
});
</script>
@endpush




