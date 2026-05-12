@extends('layouts.master')

@section('title', 'Future Projects - Community Organization')

@section('content')


<!--<< Breadcrumb Section Start >>-->
<div class="breadcrumb-wrapper bg-cover" style="background-image: url('{{ asset('img/hero/project1.jpg') }}');">
    <div class="container">
        <div class="page-heading">
            <h1 class="wow fadeInUp" data-wow-delay=".3s">Future Projects</h1>
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


<section class="future-projects-section section-padding fix">
    <div class="container">
        <div class="section-title text-center mb-5">
            <span class="wow fadeInUp">ON THE CARDS</span>
            <h2 class="wow fadeInUp" data-wow-delay=".3s">Looking Forward Together</h2>
        </div>
        <div class="row mt-4">
            @foreach($projects as $project)
            <div class="col-lg-6 mb-4 wow fadeInUp" data-wow-delay=".3s">
                <div class="card h-100 shadow-sm border-0 bg-light">
                    <div class="card-body p-4">
                        <div class="d-flex align-items-center mb-3">
                            <div class="project-number bg-primary text-white rounded-circle d-flex align-items-center justify-content-center me-3" style="width: 40px; height: 40px;">{{ $loop->iteration }}</div>
                            <h4 class="mb-0">{{ $project->title }}</h4>
                        </div>
                        <p class="fs-5">{{ $project->description }}</p>
                    </div>
                </div>
            </div>
            @endforeach
        </div>
        <div class="mt-4">{{ $projects->links() }}</div>
    </div>
</section>
@endsection
