

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Admin Panel - Community Organization</title>
    <link rel="stylesheet" href="{{ asset('css/bootstrap.min.css') }}">
    <link rel="stylesheet" href="{{ asset('css/all.min.css') }}">
    <style>
        body { background: #f8f9fa; }
        .sidebar { height: 100vh; width: 250px; position: fixed; top: 0; left: 0; background: #343a40; color: white; padding-top: 20px; }
        .sidebar a { padding: 10px 20px; display: block; color: rgba(255,255,255,0.8); text-decoration: none; }
        .sidebar a:hover, .sidebar a.active { background: #495057; color: white; }
        .content { margin-left: 250px; padding: 20px; }
        .navbar { margin-left: 250px; background: white; box-shadow: 0 2px 4px rgba(0,0,0,0.05); }
    </style>
</head>
<body>
    <div class="sidebar">
        <h4 class="text-center mb-4">Admin Panel</h4>
        <a href="{{ route('admin.dashboard') }}" class="{{ request()->routeIs('admin.dashboard') ? 'active' : '' }}">Dashboard</a>
        <a href="{{ route('admin.settings.index') }}" class="{{ request()->routeIs('admin.settings.*') ? 'active' : '' }}">Vision & Mission</a>
        <a href="{{ route('admin.events.index') }}" class="{{ request()->routeIs('admin.events.*') ? 'active' : '' }}">Events</a>
        <a href="{{ route('admin.achievements.index') }}" class="{{ request()->routeIs('admin.achievements.*') ? 'active' : '' }}">Achievements</a>
        <a href="{{ route('admin.donations.index') }}" class="{{ request()->routeIs('admin.donations.*') ? 'active' : '' }}">Donations</a>
        <a href="{{ route('admin.future-projects.index') }}" class="{{ request()->routeIs('admin.future-projects.*') ? 'active' : '' }}">Future Projects</a>
        <a href="{{ route('admin.gallery.index') }}" class="{{ request()->routeIs('admin.gallery.*') ? 'active' : '' }}">Gallery</a>
       <!-- <a href="{{ route('admin.slides.index') }}" class="{{ request()->routeIs('admin.slides.*') ? 'active' : '' }}">Slideshow</a>-->
        <a href="{{ route('admin.team.index') }}" class="{{ request()->routeIs('admin.team.*') ? 'active' : '' }}">Team Members</a>
        <a href="{{ route('admin.contacts.index') }}" class="{{ request()->routeIs('admin.contacts.*') ? 'active' : '' }}">Contact Messages</a>
        <hr>
        <form action="{{ route('admin.logout') }}" method="POST">
            @csrf
            <button type="submit" class="btn btn-link text-white text-decoration-none px-4">Logout</button>
        </form>
    </div>

    <nav class="navbar navbar-expand-lg px-4 py-3">
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
