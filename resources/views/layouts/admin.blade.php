

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Admin Panel - Community Organization</title>
    <link rel="stylesheet" href="{{ asset('css/bootstrap.min.css') }}">
    <link rel="stylesheet" href="{{ asset('css/all.min.css') }}">
    <style>
        body { background: #f4f7f6; font-family: 'Inter', sans-serif; }
        .sidebar { height: 100vh; width: 260px; position: fixed; top: 0; left: 0; background: #2c3e50; color: white; transition: all 0.3s; box-shadow: 4px 0 10px rgba(0,0,0,0.1); z-index: 1000; }
        .sidebar-header { padding: 25px 20px; background: #1a252f; text-align: center; }
        .sidebar-header h4 { margin: 0; font-weight: 700; letter-spacing: 1px; color: #ecf0f1; }
        .sidebar-menu { padding: 20px 0; }
        .sidebar-menu a { padding: 12px 25px; display: flex; align-items: center; color: #bdc3c7; text-decoration: none; transition: all 0.3s; border-left: 4px solid transparent; }
        .sidebar-menu a i { width: 30px; font-size: 18px; }
        .sidebar-menu a:hover { background: #34495e; color: white; border-left: 4px solid #3498db; }
        .sidebar-menu a.active { background: #34495e; color: white; border-left: 4px solid #3498db; }
        .content { margin-left: 260px; padding: 30px; transition: all 0.3s; }
        .navbar { margin-left: 260px; background: white; box-shadow: 0 2px 15px rgba(0,0,0,0.05); padding: 15px 30px; }
        .logout-btn { padding: 12px 25px; display: flex; align-items: center; color: #e74c3c; text-decoration: none; border: none; background: none; width: 100%; transition: all 0.3s; }
        .logout-btn:hover { background: #34495e; color: #ff7675; }
        .logout-btn i { width: 30px; font-size: 18px; }
        .card { border: none; box-shadow: 0 5px 20px rgba(0,0,0,0.05); border-radius: 10px; }
        .card-header { background: white; border-bottom: 1px solid #f1f1f1; font-weight: 600; padding: 20px; }
    </style>
</head>
<body>
    <div class="sidebar">
        <div class="sidebar-header">
            <h4>SDS ADMIN</h4>
        </div>
        <div class="sidebar-menu">
            <a href="{{ route('admin.dashboard') }}" class="{{ request()->routeIs('admin.dashboard') ? 'active' : '' }}">
                <i class="fas fa-tachometer-alt"></i> Dashboard
            </a>
            <a href="{{ route('admin.settings.index') }}" class="{{ request()->routeIs('admin.settings.*') ? 'active' : '' }}">
                <i class="fas fa-cogs"></i> Page Settings
            </a>
            <a href="{{ route('admin.slides.index') }}" class="{{ request()->routeIs('admin.slides.*') ? 'active' : '' }}">
                <i class="fas fa-images"></i> Hero Slider
            </a>
            <a href="{{ route('admin.events.index') }}" class="{{ request()->routeIs('admin.events.*') ? 'active' : '' }}">
                <i class="fas fa-calendar-alt"></i> Events
            </a>
            <a href="{{ route('admin.achievements.index') }}" class="{{ request()->routeIs('admin.achievements.*') ? 'active' : '' }}">
                <i class="fas fa-trophy"></i> Achievements
            </a>
            <a href="{{ route('admin.donations.index') }}" class="{{ request()->routeIs('admin.donations.*') ? 'active' : '' }}">
                <i class="fas fa-hand-holding-heart"></i> Donations
            </a>
            <a href="{{ route('admin.future-projects.index') }}" class="{{ request()->routeIs('admin.future-projects.*') ? 'active' : '' }}">
                <i class="fas fa-project-diagram"></i> Future Projects
            </a>
            <a href="{{ route('admin.gallery.index') }}" class="{{ request()->routeIs('admin.gallery.*') ? 'active' : '' }}">
                <i class="fas fa-photo-video"></i> Gallery
            </a>
            <a href="{{ route('admin.team.index') }}" class="{{ request()->routeIs('admin.team.*') ? 'active' : '' }}">
                <i class="fas fa-users"></i> Team Members
            </a>
            <a href="{{ route('admin.contacts.index') }}" class="{{ request()->routeIs('admin.contacts.*') ? 'active' : '' }}">
                <i class="fas fa-envelope"></i> Messages
            </a>

            <hr style="margin: 20px 25px; border-top: 1px solid #455a64;">

            <form action="{{ route('admin.logout') }}" method="POST">
                @csrf
                <button type="submit" class="logout-btn">
                    <i class="fas fa-sign-out-alt"></i> Logout
                </button>
            </form>
        </div>
    </div>

    <nav class="navbar navbar-expand-lg">
        <div class="container-fluid">
            <span class="navbar-brand mb-0 h1">Dashboard</span>
            <div class="ms-auto">
                <span class="me-3">Welcome, {{ auth()->user()->name }}</span>
            </div>
        </div>
    </nav>

    <div class="content">
        @if(session('success'))
            <div class="alert alert-success alert-dismissible fade show" role="alert">
                {{ session('success') }}
                <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
            </div>
        @endif

        @yield('content')
    </div>

    <script src="{{ asset('js/bootstrap.bundle.min.js') }}"></script>
</body>
</html>
