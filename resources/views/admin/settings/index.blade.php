@extends('layouts.admin')

@section('content')
<div class="card">
    <div class="card-header">Vision & Mission Settings</div>
    <div class="card-body">
        <form action="{{ route('admin.settings.update') }}" method="POST">
            @csrf
            <div class="mb-3">
                <label for="vision" class="form-label">Vision</label>
                <textarea name="vision" id="vision" rows="3" class="form-control">{{ $settings['vision'] ?? '' }}</textarea>
            </div>
            <div class="mb-3">
                <label for="mission" class="form-label">Mission</label>
                <textarea name="mission" id="mission" rows="3" class="form-control">{{ $settings['mission'] ?? '' }}</textarea>
            </div>
            <div class="mb-3">
                <label for="our_work_summary" class="form-label">Our Work Summary</label>
                <textarea name="our_work_summary" id="our_work_summary" rows="4" class="form-control">{{ $settings['our_work_summary'] ?? '' }}</textarea>
            </div>
            <button type="submit" class="btn btn-primary">Update Settings</button>
        </form>
    </div>
</div>
@endsection
