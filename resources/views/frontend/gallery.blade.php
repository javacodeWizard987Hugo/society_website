@extends('layouts.master')

@section('title', 'Gallery - Community Organization')

@section('content')
<section class="breadcrumb-section fix bg-cover" style="background-image: url('{{ asset('img/breadcrumb.jpg') }}'); padding: 100px 0;">
    <div class="container text-center text-white">
        <h2>Gallery</h2>
    </div>
</section>

<section class="gallery-section section-padding fix">
    <div class="container">
        <div class="section-title text-center mb-5">
            <span class="wow fadeInUp">MOMENTS IN FOCUS</span>
            <h2 class="wow fadeInUp" data-wow-delay=".3s">Glimpses of Our Work</h2>
        </div>
        <div class="row mt-4">
            @foreach($items as $item)
            <div class="col-lg-4 col-md-6 mb-4 wow fadeInUp" data-wow-delay=".3s">
                <div class="gallery-item overflow-hidden shadow-sm border-0 position-relative">
                    <a href="{{ asset('storage/' . $item->image) }}" class="gallery-popup">
                        <img src="{{ asset('storage/' . $item->image) }}" class="img-fluid rounded" alt="{{ $item->title }}" style="height: 300px; width: 100%; object-fit: cover;">
                        <div class="gallery-overlay position-absolute bottom-0 start-0 w-100 p-3 bg-dark bg-opacity-50 text-white opacity-0 transition">
                            <h6 class="mb-0">{{ $item->title }}</h6>
                        </div>
                    </a>
                </div>
            </div>
            @endforeach
        </div>
        <div class="mt-4">{{ $items->links() }}</div>
    </div>
</section>

<style>
.gallery-item:hover .gallery-overlay { opacity: 1 !important; transition: 0.3s; }
.transition { transition: 0.3s; }
</style>
@endsection
