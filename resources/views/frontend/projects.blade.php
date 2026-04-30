@extends('layouts.master')

@section('title', 'Future Projects - Community Organization')

@section('content')
<section class="breadcrumb-section fix"
    style="background-image: url('{{ asset('img/futureproject2.png') }}'); 
           background-size: cover; 
           background-position: center; 
           background-repeat: no-repeat;
           height: 650px !important;
           padding: 0;
           position: relative;">

    <!-- Dark overlay -->
    <div style="position:absolute; top:0; left:0; width:100%; height:100%; background: rgba(0,0,0,0.4);"></div>

    <div class="container text-center text-white d-flex align-items-center justify-content-center"
         style="height: 100%; position: relative; z-index: 2;">
        <h2 style="font-size: 48px;">Future Projects</h2>
    </div>

</section>

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
