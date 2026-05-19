@extends('layouts.master')

@section('title', 'Contact Us - Community Organization')

@section('content')
<!--<< Breadcrumb Section Start >>-->
<div class="breadcrumb-wrapper bg-cover" style="background-image: url('{{ asset('img/hero/team.png') }}');">
    <div class="container">
        <div class="page-heading">
            <h1 class="wow fadeInUp" data-wow-delay=".3s">Contact Us</h1>
            <ul class="breadcrumb-items wow fadeInUp" data-wow-delay=".5s">
                <li>
                    <a href="{{ url('/') }}">
                        Home
                    </a>
                </li>
                <li>
                    <i class="fas fa-chevron-right"></i>
                </li>
                <li>
                    Contact Us
                </li>
            </ul>
        </div>
    </div>
</div>

<!-- Contact Information Section Start -->
<!--<section class="contact-info-section section-padding">
    <div class="container">
        <div class="row g-4">
            <div class="col-lg-4 col-md-6 wow fadeInUp" data-wow-delay=".3s">
                <div class="contact-info-items text-center" style="padding: 40px; background: #F3F7FB; border-radius: 10px;">
                    <div class="icon mb-3" style="font-size: 40px; color: var(--theme);">
                        <i class="fas fa-map-marker-alt"></i>
                    </div>
                    <div class="content">
                        <h3>Our Address</h3>
                        <p>{{ $settings['contact_address'] ?? 'Main Street, Melbourne, Australia' }}</p>
                    </div>
                </div>
            </div>
            <div class="col-lg-4 col-md-6 wow fadeInUp" data-wow-delay=".5s">
                <div class="contact-info-items text-center" style="padding: 40px; background: #F3F7FB; border-radius: 10px;">
                    <div class="icon mb-3" style="font-size: 40px; color: var(--theme);">
                        <i class="fas fa-phone-alt"></i>
                    </div>
                    <div class="content">
                        <h3>Phone Number</h3>
                        <p>
                            <a href="tel:{{ $settings['contact_phone'] ?? '+208-666-0112' }}">{{ $settings['contact_phone'] ?? '+208-666-0112' }}</a>
                        </p>
                    </div>
                </div>
            </div>
            <div class="col-lg-4 col-md-6 wow fadeInUp" data-wow-delay=".7s">
                <div class="contact-info-items text-center" style="padding: 40px; background: #F3F7FB; border-radius: 10px;">
                    <div class="icon mb-3" style="font-size: 40px; color: var(--theme);">
                        <i class="fas fa-envelope"></i>
                    </div>
                    <div class="content">
                        <h3>Email Address</h3>
                        <p>
                            <a href="mailto:{{ $settings['contact_email'] ?? 'info@example.com' }}">{{ $settings['contact_email'] ?? 'info@example.com' }}</a>
                        </p>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>-->

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
