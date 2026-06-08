@extends('layouts.admin')

@section('content')
<style>
    .profile-header {
        background: linear-gradient(135deg, #4e73df 0%, #224abe 100%);
        height: 180px;
        border-radius: 15px 15px 0 0;
        position: relative;
        margin-bottom: 70px;
    }
    .profile-img-container {
        position: absolute;
        bottom: -60px;
        left: 40px;
    }
    .profile-img-container img {
        width: 150px;
        height: 150px;
        border-radius: 50%;
        border: 5px solid #fff;
        box-shadow: 0 5px 15px rgba(0,0,0,0.1);
        object-fit: cover;
        background: #fff;
    }
    .profile-info {
        padding-top: 15px;
        margin-left: 210px;
    }
    .profile-info h2 {
        margin-bottom: 5px;
        font-weight: 700;
        color: #fff;
    }
    .profile-info p {
        color: rgba(255,255,255,0.8);
    }
    .card-profile {
        border-radius: 15px;
        border: none;
        box-shadow: 0 5px 20px rgba(0,0,0,0.05);
    }
    .card-profile .card-header {
        background-color: transparent;
        border-bottom: 1px solid #f0f0f0;
        padding: 20px 25px;
    }
    .card-profile .card-header h5 {
        margin: 0;
        font-weight: 600;
        color: #333;
    }
    .form-label {
        font-weight: 500;
        color: #555;
    }
    .btn-save {
        padding: 10px 30px;
        border-radius: 8px;
        font-weight: 600;
        background: #4e73df;
        border: none;
        transition: 0.3s;
    }
    .btn-save:hover {
        background: #224abe;
        transform: translateY(-2px);
    }
</style>

<div class="container-fluid">
    <div class="profile-header">
        <div class="profile-img-container">
            @if($user->image)
                <img src="{{ asset('storage/' . $user->image) }}" alt="{{ $user->name }}">
            @else
                <img src="https://ui-avatars.com/api/?name={{ urlencode($user->name) }}&size=150&background=random" alt="{{ $user->name }}">
            @endif
        </div>
        <div class="profile-info">
            <h2>{{ $user->name }}</h2>
            <p><i class="fas fa-envelope me-2"></i>{{ $user->email }}</p>
        </div>
    </div>

    <div class="row">
        <div class="col-lg-8">
            <div class="card card-profile mb-4">
                <div class="card-header">
                    <h5>Account Details</h5>
                </div>
                <div class="card-body p-4">
                    <form action="{{ route('admin.profile.update') }}" method="POST" enctype="multipart/form-data">
                        @csrf
                        <div class="row">
                            <div class="col-md-6 mb-3">
                                <label for="name" class="form-label">Full Name</label>
                                <input type="text" class="form-control @error('name') is-invalid @enderror" id="name" name="name" value="{{ old('name', $user->name) }}" required>
                                @error('name')
                                    <div class="invalid-feedback">{{ $message }}</div>
                                @enderror
                            </div>
                            <div class="col-md-6 mb-3">
                                <label for="email" class="form-label">Email Address</label>
                                <input type="email" class="form-control @error('email') is-invalid @enderror" id="email" name="email" value="{{ old('email', $user->email) }}" required>
                                @error('email')
                                    <div class="invalid-feedback">{{ $message }}</div>
                                @enderror
                            </div>
                        </div>

                        <div class="mb-3">
                            <label for="image" class="form-label">Profile Picture</label>
                            <input type="file" class="form-control @error('image') is-invalid @enderror" id="image" name="image">
                            <small class="text-muted">Accepted formats: jpeg, png, jpg, gif. Max size: 2MB.</small>
                            @error('image')
                                <div class="invalid-feedback">{{ $message }}</div>
                            @enderror
                        </div>

                        <hr class="my-4">
                        <h5 class="mb-3">Change Password</h5>
                        <p class="text-muted small">Leave blank if you don't want to change the password.</p>

                        <div class="row">
                            <div class="col-md-6 mb-3">
                                <label for="password" class="form-label">New Password</label>
                                <input type="password" class="form-control @error('password') is-invalid @enderror" id="password" name="password">
                                @error('password')
                                    <div class="invalid-feedback">{{ $message }}</div>
                                @enderror
                            </div>
                            <div class="col-md-6 mb-3">
                                <label for="password_confirmation" class="form-label">Confirm New Password</label>
                                <input type="password" class="form-control" id="password_confirmation" name="password_confirmation">
                            </div>
                        </div>

                        <div class="text-end mt-3">
                            <button type="submit" class="btn btn-primary btn-save text-white">Save Changes</button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
        <div class="col-lg-4">
            <div class="card card-profile mb-4">
                <div class="card-header">
                    <h5>Management Links</h5>
                </div>
                <div class="card-body">
                    <p class="text-muted small">Access other administrative tools.</p>
                    <div class="d-grid gap-2">
                        <a href="{{ route('admin.team.index') }}" class="btn btn-outline-primary text-start">
                            <i class="fas fa-users me-2"></i> Manage Team Members
                        </a>
                        <a href="{{ route('admin.contacts.index') }}" class="btn btn-outline-primary text-start">
                            <i class="fas fa-envelope me-2"></i> Contact Messages
                        </a>
                        <a href="{{ route('admin.settings.index') }}" class="btn btn-outline-primary text-start">
                            <i class="fas fa-cog me-2"></i> Site Settings
                        </a>
                    </div>
                </div>
            </div>
            
            <div class="card card-profile">
                <div class="card-header">
                    <h5>Account Info</h5>
                </div>
                <div class="card-body">
                    <div class="d-flex justify-content-between mb-2">
                        <span class="text-muted">Member Since:</span>
                        <span>{{ $user->created_at->format('M Y') }}</span>
                    </div>
                    <div class="d-flex justify-content-between">
                        <span class="text-muted">Role:</span>
                        <span class="badge bg-success">Administrator</span>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
