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
            <hr>
            <h4>Contact Settings</h4>
            <div class="mb-3">
                <label for="contact_address" class="form-label">Address</label>
                <input type="text" name="contact_address" id="contact_address" class="form-control" value="{{ $settings['contact_address'] ?? '' }}">
            </div>
            <div class="mb-3">
                <label for="contact_phone" class="form-label">Phone</label>
                <input type="text" name="contact_phone" id="contact_phone" class="form-control" value="{{ $settings['contact_phone'] ?? '' }}">
            </div>
            <div class="mb-3">
                <label for="contact_email" class="form-label">Email</label>
                <input type="email" name="contact_email" id="contact_email" class="form-control" value="{{ $settings['contact_email'] ?? '' }}">
            </div>
            <div class="mb-3">
                <label for="contact_map_link" class="form-label">Google Maps Iframe URL</label>
                <input type="text" name="contact_map_link" id="contact_map_link" class="form-control" value="{{ $settings['contact_map_link'] ?? '' }}">
                <small class="text-muted">Paste only the URL from the <code>src</code> attribute of the Google Maps embed code.</small>
            </div>

            <button type="submit" class="btn btn-primary">Update Settings</button>
        </form>
    </div>
</div>
@endsection
