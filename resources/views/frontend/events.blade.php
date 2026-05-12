@extends('layouts.master')

@section('title', 'Events & Programs - Community Organization')

@section('content')
<section class="breadcrumb-section fix bg-cover" style="background-image: url('{{ asset('img/hero/white.jpg') }}'); padding: 100px 0;">
    <div class="container text-center text-white">
        <h2>Events & Programs</h2>
    </div>
</section>

<section class="news-section section-padding fix">
    <div class="container">
        <div class="section-title text-center">
            <span class="wow fadeInUp">RECENT EVENTS & PROGRAMS</span>
            <h2 class="wow fadeInUp" data-wow-delay=".3s">Our Latest Activities</h2>
        </div>
        <div class="row mt-4">
            @foreach($events as $event)
            <div class="col-xl-4 col-lg-6 col-md-6 wow fadeInUp" data-wow-delay=".3s">
                <div class="single-news-items mb-4">
                    <div class="news-image bg-cover" style="background-image: url('{{ $event->image ? asset('storage/' . $event->image) : asset('img/hero/white.jpg') }}');">
                        <div class="post-date"><span>{{ \Carbon\Carbon::parse($event->date)->format('d/m/Y') }}</span></div>
                    </div>
                    <div class="news-content">
                        <h3><a href="#">{{ $event->title }}</a></h3>
                        <p>{{ $event->description }}</p>
                    </div>
                </div>
            </div>
            @endforeach
        </div>
        <div class="mt-4">{{ $events->links() }}</div>

        <div class="section-title text-center mt-5">
            <span class="wow fadeInUp">OUR ACHIEVEMENTS</span>
            <h2 class="wow fadeInUp" data-wow-delay=".3s">Milestones of Progress</h2>
        </div>
        <div class="row mt-4">
            @foreach($achievements as $achievement)
            <div class="col-lg-6 mb-4 wow fadeInUp" data-wow-delay=".3s">
                <div class="card h-100 shadow-sm border-0">
                    <div class="card-body p-4">
                        <h4 class="mb-2">{{ $achievement->title }}</h4>
                        @if($achievement->date)
                        <small class="text-muted d-block mb-3"><i class="fa fa-calendar-alt"></i> {{ \Carbon\Carbon::parse($achievement->date)->format('Y') }}</small>
                        @endif
                        <p>{{ $achievement->description }}</p>
                    </div>
                </div>
            </div>
            @endforeach
        </div>
        <div class="mt-4">{{ $achievements->links() }}</div>
    </div>
</section>
@endsection
