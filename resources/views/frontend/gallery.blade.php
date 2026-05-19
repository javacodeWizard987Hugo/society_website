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

        @foreach($events as $event)
        <div class="gallery-event-group mb-5">
            <div class="event-header mb-4 border-bottom pb-2 d-flex justify-content-between align-items-end">
                <h3 class="mb-0 text-primary">{{ $event->name }}</h3>
                @if($event->event_date)
                    <span class="text-muted"><i class="fa-regular fa-calendar-days me-2"></i>{{ \Carbon\Carbon::parse($event->event_date)->format('F d, Y') }}</span>
                @endif
            </div>
            <div class="row">
                @foreach($event->items as $item)
                <div class="col-lg-4 col-md-6 mb-4 wow fadeInUp" data-wow-delay=".2s">
                    <div class="gallery-item overflow-hidden shadow-sm border-0 position-relative rounded">
                        <a href="{{ asset('storage/' . $item->image) }}" class="gallery-popup">
                            <img src="{{ asset('storage/' . $item->image) }}" class="img-fluid" alt="{{ $event->name }}" style="height: 300px; width: 100%; object-fit: cover;">
                            <div class="gallery-overlay">
                                <i class="fa-solid fa-plus"></i>
                            </div>
                        </a>
                    </div>
                </div>
                @endforeach
            </div>
        </div>
        @endforeach

        <div class="mt-4">{{ $events->links() }}</div>
    </div>
</section>

<style>
.gallery-item {
    transition: all 0.3s ease-in-out;
}
.gallery-item img {
    transition: all 0.5s ease-in-out;
}
.gallery-item:hover img {
    transform: scale(1.1);
}
.gallery-overlay {
    position: absolute;
    top: 0;
    left: 0;
    width: 100%;
    height: 100%;
    background: rgba(0, 0, 0, 0.5);
    display: flex;
    align-items: center;
    justify-content: center;
    opacity: 0;
    transition: all 0.3s ease-in-out;
}
.gallery-overlay i {
    color: #fff;
    font-size: 30px;
    transform: scale(0);
    transition: all 0.3s ease-in-out;
}
.gallery-item:hover .gallery-overlay {
    opacity: 1;
}
.gallery-item:hover .gallery-overlay i {
    transform: scale(1);
}
.event-header h3 {
    font-weight: 700;
    position: relative;
}
.event-header h3::after {
    content: '';
    position: absolute;
    bottom: -10px;
    left: 0;
    width: 50px;
    height: 3px;
    background-color: var(--theme-color, #007bff);
}
</style>
@endsection

@push('scripts')
<script>
    $(document).ready(function() {
        $('.gallery-popup').magnificPopup({
            type: 'image',
            gallery: {
                enabled: true
            }
        });
    });
</script>
@endpush
