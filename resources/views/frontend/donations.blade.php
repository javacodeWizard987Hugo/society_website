@extends('layouts.master')

@section('title', 'Donations - Community Organization')

@section('content')
<section class="breadcrumb-section fix bg-cover" style="background-image: url('{{ asset('img/breadcrumb.jpg') }}'); padding: 100px 0;">
    <div class="container text-center text-white">
        <h2>Donations Received</h2>
    </div>
</section>

<section class="donation-section section-padding fix">
    <div class="container">
        <div class="section-title text-center mb-5">
            <span class="wow fadeInUp">GRATITUDE & SUPPORT</span>
            <h2 class="wow fadeInUp" data-wow-delay=".3s">Heartfelt Thanks to Our Donors</h2>
        </div>
        <div class="row mt-4">
            @foreach($donations as $donation)
            <div class="col-lg-4 mb-4 wow fadeInUp" data-wow-delay=".3s">
                <div class="card h-100 shadow-sm border-0">
                    <div class="card-body p-4 text-center">
                        <div class="icon mb-3"><i class="fa fa-hand-holding-heart fa-3x text-primary"></i></div>
                        <h4 class="mb-2">{{ $donation->donor_name }}</h4>
                        @if($donation->date)
                        <small class="text-muted d-block mb-3">{{ \Carbon\Carbon::parse($donation->date)->format('d/m/Y') }}</small>
                        @endif
                        <p>{{ $donation->description }}</p>
                    </div>
                </div>
            </div>
            @endforeach
        </div>
        <div class="mt-4">{{ $donations->links() }}</div>
    </div>
</section>
@endsection
