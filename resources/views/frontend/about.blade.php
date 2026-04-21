@extends('layouts.app')

@section('title', 'About - Community Organization')

@section('content')
<section class="breadcrumb-section fix bg-cover" style="background-image: url('{{ asset('img/breadcrumb.jpg') }}'); padding: 100px 0;">
    <div class="container text-center">
        <h2 class="text-white">Our Work in a Nutshell</h2>
    </div>
</section>

<section class="about-section section-padding fix">
    <div class="container">
        <div class="row">
            <div class="col-lg-12">
                <div class="about-content">
                    <div class="section-title">
                        <h2 class="wow fadeInUp" data-wow-delay=".3s">Who We Are & <span>What We Do</span></h2>
                    </div>
                    <p class="mt-4 wow fadeInUp" data-wow-delay=".5s">
                        {{ $settings['our_work_summary'] ?? 'We are a community-driven society dedicated to mutual care and support across diverse, multi-ethnic communities.' }}
                    </p>
                    <div class="about-icon-items mt-5">
                        <div class="row">
                            <div class="col-md-6 mb-4 wow fadeInUp" data-wow-delay=".7s">
                                <div class="icon-items">
                                    <div class="icon"><img src="{{ asset('img/about/icon-2.svg') }}" alt="icon-img"></div>
                                    <div class="content">
                                        <h4>Healthcare Support</h4>
                                        <p>Donating essential medicines and medical equipment to local hospitals.</p>
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-6 mb-4 wow fadeInUp" data-wow-delay=".9s">
                                <div class="icon-items">
                                    <div class="icon"><img src="{{ asset('img/about/icon-3.svg') }}" alt="icon-img"></div>
                                    <div class="content">
                                        <h4>Educational Empowerment</h4>
                                        <p>Providing books and stationery to children, particularly in disaster-affected areas.</p>
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-6 mb-4 wow fadeInUp" data-wow-delay="1.1s">
                                <div class="icon-items">
                                    <div class="icon"><img src="{{ asset('img/about/icon-2.svg') }}" alt="icon-img"></div>
                                    <div class="content">
                                        <h4>Culture and Harmony</h4>
                                        <p>Promoting unity by celebrating diverse religious and traditional festivals.</p>
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-6 mb-4 wow fadeInUp" data-wow-delay="1.3s">
                                <div class="icon-items">
                                    <div class="icon"><img src="{{ asset('img/about/icon-3.svg') }}" alt="icon-img"></div>
                                    <div class="content">
                                        <h4>Helping Hands</h4>
                                        <p>Supporting low-income individuals through house construction and renovations.</p>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
@endsection
