@extends('layouts.master')

@section('title', 'Our Team - Community Organization')

@section('content')
<section class="breadcrumb-section fix bg-cover" style="background-image: url('{{ asset('img/breadcrumb.jpg') }}'); padding: 100px 0;">
    <div class="container text-center text-white">
        <h2>Our Dedicated Team</h2>
    </div>
</section>

<section class="team-section section-padding fix">
    <div class="container">
        <div class="section-title text-center">
            <span class="wow fadeInUp">SOCIETY MEMBERS</span>
            <h2 class="wow fadeInUp" data-wow-delay=".3s">Meet Our Professional Team</h2>
        </div>
        <div class="row mt-4">
            @foreach($members as $member)
            <div class="col-xl-3 col-lg-4 col-md-6 wow fadeInUp" data-wow-delay=".{{ ($loop->index % 4) * 2 + 3 }}s">
                <div class="team-card mb-4 text-center">
                    <div class="team-image">
                        <img src="{{ $member->image ? asset('storage/' . $member->image) : asset('img/team/01.jpg') }}" alt="{{ $member->name }}" class="img-fluid rounded shadow-sm">
                        <div class="social-links">
                            @if($member->facebook)
                            <a href="{{ $member->facebook }}" target="_blank"><i class="fab fa-facebook-f"></i></a>
                            @endif
                            @if($member->twitter)
                            <a href="{{ $member->twitter }}" target="_blank"><i class="fab fa-twitter"></i></a>
                            @endif
                            @if($member->linkedin)
                            <a href="{{ $member->linkedin }}" target="_blank"><i class="fab fa-linkedin-in"></i></a>
                            @endif
                        </div>
                    </div>
                    <div class="team-content mt-3">
                        <h4>{{ $member->name }}</h4>
                        <p>{{ $member->position }}</p>
                    </div>
                </div>
            </div>
            @endforeach
        </div>
    </div>
</section>

@push('styles')
<style>
    .team-card {
        padding: 20px;
        background: #fff;
        border-radius: 10px;
        transition: all 0.3s ease;
    }
    .team-card:hover {
        transform: translateY(-10px);
        box-shadow: 0 10px 30px rgba(0,0,0,0.1);
    }
    .team-image {
        position: relative;
        overflow: hidden;
        border-radius: 10px;
    }
    .team-image img {
        width: 100%;
        height: 300px;
        object-fit: cover;
    }
    .social-links {
        position: absolute;
        bottom: -50px;
        left: 0;
        right: 0;
        background: rgba(0, 86, 179, 0.8);
        padding: 10px 0;
        transition: all 0.3s ease;
    }
    .team-image:hover .social-links {
        bottom: 0;
    }
    .social-links a {
        color: #fff;
        margin: 0 10px;
        font-size: 16px;
    }
    .team-content h4 {
        font-size: 20px;
        font-weight: 700;
        margin-bottom: 5px;
    }
    .team-content p {
        color: #0056b3;
        font-weight: 500;
    }
</style>
@endpush
@endsection
