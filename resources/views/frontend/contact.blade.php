@extends('layouts.master')

@section('content')
<!-- Page Header -->
<div class="page-header d-flex align-items-center" style="background-image: url('{{ asset('img/bg/page-header.jpg') }}'); height: 450px;">
    <div class="container-fluid px-5">
        <div class="row">
            <div class="col-12 text-center">
                <h1 class="display-3 text-white fw-bold">Contact Us</h1>
                <nav aria-label="breadcrumb">
                    <ol class="breadcrumb justify-content-center">
                        <li class="breadcrumb-item"><a href="{{ route('home') }}" class="text-white">Home</a></li>
                        <li class="breadcrumb-item active text-white" aria-current="page">Contact Us</li>
                    </ol>
                </nav>
            </div>
        </div>
    </div>
</div>

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
                                        <p class="mb-0 text-muted">{{ $settings['address'] ?? '123 Society St, Community City' }}</p>
                                    </div>
                                </div>

                                <div class="d-flex align-items-start mb-3">
                                    <div class="icon-box me-3">
                                        <i class="fas fa-phone-alt text-primary"></i>
                                    </div>
                                    <div>
                                        <h5 class="mb-1">Phone Number</h5>
                                        <p class="mb-0 text-muted">{{ $settings['phone'] ?? '+1 (234) 567-890' }}</p>
                                    </div>
                                </div>

                                <div class="d-flex align-items-start">
                                    <div class="icon-box me-3">
                                        <i class="fas fa-envelope text-primary"></i>
                                    </div>
                                    <div>
                                        <h5 class="mb-1">Email Address</h5>
                                        <p class="mb-0 text-muted">{{ $settings['email'] ?? 'info@example.com' }}</p>
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
@endsection
