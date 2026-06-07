@extends('layouts.admin')

@section('content')
<style>
.dashboard-wrapper{
    padding:25px;
    background:#f4f6f9;
    min-height:100vh;
}

.dashboard-header{
    margin-bottom:25px;
}

.dashboard-header h2{
    font-weight:700;
    color:#2c3e50;
    margin-bottom:5px;
}

.dashboard-header p{
    color:#6c757d;
    margin:0;
}

.stat-card{
    border:none;
    border-radius:15px;
    overflow:hidden;
    transition:.3s;
    box-shadow:0 5px 15px rgba(0,0,0,.08);
    height:100%;
}

.stat-card:hover{
    transform:translateY(-5px);
    box-shadow:0 10px 25px rgba(0,0,0,.15);
}

.stat-card .card-body{
    display:flex;
    justify-content:space-between;
    align-items:center;
    padding:25px;
}

.stat-icon{
    font-size:45px;
    opacity:.2;
}

.stat-title{
    font-size:14px;
    text-transform:uppercase;
    letter-spacing:1px;
    margin-bottom:8px;
}

.stat-value{
    font-size:34px;
    font-weight:700;
    margin:0;
}

.bg-events{
    background:linear-gradient(135deg,#4e73df,#224abe);
    color:white;
}

.bg-achievements{
    background:linear-gradient(135deg,#1cc88a,#13855c);
    color:white;
}

.bg-donations{
    background:linear-gradient(135deg,#36b9cc,#258391);
    color:white;
}

.bg-gallery{
    background:linear-gradient(135deg,#f6c23e,#dda20a);
    color:white;
}

.bg-contacts{
    background:linear-gradient(135deg,#e74a3b,#be2617);
    color:white;
}

.quick-links{
    margin-top:30px;
}

.quick-card{
    background:white;
    border-radius:15px;
    padding:20px;
    box-shadow:0 5px 15px rgba(0,0,0,.08);
}

.quick-card h4{
    font-size:18px;
    margin-bottom:20px;
    color:#2c3e50;
    font-weight:600;
}

.quick-btn{
    display:block;
    text-decoration:none;
    padding:12px 15px;
    border-radius:10px;
    margin-bottom:10px;
    font-weight:500;
    transition:.3s;
}

.quick-btn:hover{
    transform:translateX(5px);
}

.quick-btn-primary{
    background:#e8f0ff;
    color:#224abe;
}

.quick-btn-success{
    background:#e7fff4;
    color:#13855c;
}

.quick-btn-info{
    background:#e8fbff;
    color:#258391;
}

.quick-btn-warning{
    background:#fff8e5;
    color:#dda20a;
}
</style>

<div class="dashboard-wrapper">

    <div class="dashboard-header">
        <h2>Admin Dashboard</h2>
        <p>Welcome to the Society Welfare Management System</p>
    </div>

    <div class="row g-4">

        <div class="col-lg-3 col-md-6">
            <div class="card stat-card bg-events">
                <div class="card-body">
                    <div>
                        <div class="stat-title">Events</div>
                        <p class="stat-value">
                            {{ \App\Models\Event::count() }}
                        </p>
                    </div>
                    <i class="fas fa-calendar-alt stat-icon"></i>
                </div>
            </div>
        </div>

        <div class="col-lg-3 col-md-6">
            <div class="card stat-card bg-achievements">
                <div class="card-body">
                    <div>
                        <div class="stat-title">Achievements</div>
                        <p class="stat-value">
                            {{ \App\Models\Achievement::count() }}
                        </p>
                    </div>
                    <i class="fas fa-trophy stat-icon"></i>
                </div>
            </div>
        </div>

        <div class="col-lg-3 col-md-6">
            <div class="card stat-card bg-donations">
                <div class="card-body">
                    <div>
                        <div class="stat-title">Donations</div>
                        <p class="stat-value">
                            {{ \App\Models\Donation::count() }}
                        </p>
                    </div>
                    <i class="fas fa-hand-holding-heart stat-icon"></i>
                </div>
            </div>
        </div>

        <div class="col-lg-3 col-md-6">
            <div class="card stat-card bg-gallery">
                <div class="card-body">
                    <div>
                        <div class="stat-title">Gallery Items</div>
                        <p class="stat-value">
                            {{ \App\Models\GalleryItem::count() }}
                        </p>
                    </div>
                    <i class="fas fa-images stat-icon"></i>
                </div>
            </div>
        </div>

        <div class="col-lg-3 col-md-6">
            <div class="card stat-card bg-contacts">
                <div class="card-body">
                    <div>
                        <div class="stat-title">Contact Messages</div>
                        <p class="stat-value">
                            {{ \App\Models\Contact::count() }}
                        </p>
                    </div>
                    <i class="fas fa-envelope stat-icon"></i>
                </div>
            </div>
        </div>

    </div>

    <div class="row quick-links">

        <div class="col-lg-12">
            <div class="quick-card">
                <h4>Quick Actions</h4>

                <div class="row">
                    <div class="col-md-3">
                        <a href="{{ route('admin.events.index') }}" class="quick-btn quick-btn-primary">
                            <i class="fas fa-calendar-alt me-2"></i>
                            Manage Events
                        </a>
                    </div>

                    <div class="col-md-3">
                        <a href="{{ route('admin.achievements.index') }}" class="quick-btn quick-btn-success">
                            <i class="fas fa-trophy me-2"></i>
                            Manage Achievements
                        </a>
                    </div>

                    <div class="col-md-3">
                        <a href="{{ route('admin.donations.index') }}" class="quick-btn quick-btn-info">
                            <i class="fas fa-hand-holding-heart me-2"></i>
                            Manage Donations
                        </a>
                    </div>

                    <div class="col-md-3">
                        <a href="{{ route('admin.gallery.index') }}" class="quick-btn quick-btn-warning">
                            <i class="fas fa-images me-2"></i>
                            Manage Gallery
                        </a>
                    </div>

                    <div class="col-md-3">
                        <a href="{{ route('admin.profile') }}" class="quick-btn" style="background:#fff0f0; color:#e74a3b;">
                            <i class="fas fa-user-shield me-2"></i>
                            Contact Management
                        </a>
                    </div>
                </div>

            </div>
        </div>

    </div>

</div>
@endsection