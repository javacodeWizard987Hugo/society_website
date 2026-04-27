@extends('layouts.master')

@section('title', 'Our Team - Community Organization')

@section('content')
<section class="breadcrumb-section fix bg-cover" style="background-image: url('{{ asset('img/breadcrumb.jpg') }}'); padding: 100px 0;">
    <div class="container text-center">
        <h2 class="text-white">Our Dedicated Team</h2>
    </div>
</section>

<section class="team-section section-padding fix">
    <div class="container">
        <div class="section-title text-center">
            <span class="wow fadeInUp">OUR TEAM</span>
            <h2 class="wow fadeInUp" data-wow-delay=".3s">Meet the People Behind <span>Our Success</span></h2>
        </div>
        <div class="row mt-5">
            @foreach($team_members as $member)
            <div class="col-xl-4 col-lg-4 col-md-6 wow fadeInUp" data-wow-delay=".3s">
                <div class="single-team-items text-center mb-4">
                    <div class="team-image">
                        <img src="{{ $member->image ? asset($member->image) : asset('img/team/01.jpg') }}" alt="{{ $member->name }}" class="img-fluid rounded">
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
@endsection
