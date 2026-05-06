@extends('layouts.master')

@section('title', 'Contact Us - Community Organization')

@section('content')
<!--<< Breadcrumb Section Start >>-->
<div class="breadcrumb-wrapper bg-cover" style="background-image: url('{{ asset('img/breadcrumb.jpg') }}');">
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
<section class="contact-info-section section-padding">
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
</section>

<!-- Contact Form & Map Section Start -->
<section class="contact-section section-padding pt-0">
    <div class="container">
        <div class="row g-5">
            <div class="col-lg-6 wow fadeInLeft" data-wow-delay=".3s">
                <div class="contact-content">
                    <div class="section-title">
                        <span>GET IN TOUCH</span>
                        <h2>Ready to Get Started? <br> Send Us a Message</h2>
                    </div>
                    <form action="#" id="contact-form" class="contact-form-items" style="margin-top: 30px;">
                        <div class="row g-4">
                            <div class="col-lg-6">
                                <div class="form-clt">
                                    <input type="text" name="name" id="name" placeholder="Your Name" style="width: 100%; padding: 15px; border: 1px solid #ddd;">
                                </div>
                            </div>
                            <div class="col-lg-6">
                                <div class="form-clt">
                                    <input type="email" name="email" id="email" placeholder="Your Email" style="width: 100%; padding: 15px; border: 1px solid #ddd;">
                                </div>
                            </div>
                            <div class="col-lg-12">
                                <div class="form-clt">
                                    <textarea name="message" id="message" rows="5" placeholder="Your Message" style="width: 100%; padding: 15px; border: 1px solid #ddd;"></textarea>
                                </div>
                            </div>
                            <div class="col-lg-12">
                                <button type="submit" class="theme-btn">
                                    <span>Send Message <i class="fas fa-arrow-right"></i></span>
                                </button>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
            <div class="col-lg-6 wow fadeInRight" data-wow-delay=".5s">
                <div class="map-items">
                    <div class="googpemap">
                        <iframe
                            src="{{ $settings['contact_map_link'] ?? 'https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3151.835434509374!2d144.9537353153167!3d-37.81720997975171!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x6ad65d4c2b349649%3A0xb6899234e561db11!2sEnvato!5e0!3m2!1sen!2sau!4v1614136932598!5m2!1sen!2sau' }}"
                            style="border:0; width: 100%; height: 450px;"
                            allowfullscreen=""
                            loading="lazy">
                        </iframe>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
@endsection
