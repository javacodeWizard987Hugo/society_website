@extends('layouts.admin')

@section('content')
<div class="container-fluid">
    <div class="row">
        <div class="col-md-12">
            <h2 class="mb-4">Admin Dashboard Overview</h2>
        </div>
        <div class="col-md-3">
            <div class="card text-white bg-primary mb-3">
                <div class="card-body">
                    <h5 class="card-title">Events</h5>
                    <p class="card-text fs-4">{{ \App\Models\Event::count() }}</p>
                </div>
            </div>
        </div>
        <div class="col-md-3">
            <div class="card text-white bg-success mb-3">
                <div class="card-body">
                    <h5 class="card-title">Achievements</h5>
                    <p class="card-text fs-4">{{ \App\Models\Achievement::count() }}</p>
                </div>
            </div>
        </div>
        <div class="col-md-3">
            <div class="card text-white bg-info mb-3">
                <div class="card-body">
                    <h5 class="card-title">Donations</h5>
                    <p class="card-text fs-4">{{ \App\Models\Donation::count() }}</p>
                </div>
            </div>
        </div>
        <div class="col-md-3">
            <div class="card text-white bg-warning mb-3">
                <div class="card-body">
                    <h5 class="card-title">Gallery Items</h5>
                    <p class="card-text fs-4">{{ \App\Models\GalleryItem::count() }}</p>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
