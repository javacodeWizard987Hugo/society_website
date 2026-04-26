@extends('layouts.admin')

@section('content')
<div class="card">
    <div class="card-header">{{ isset($team) ? 'Edit Member' : 'Add Member' }}</div>
    <div class="card-body">
        <form action="{{ isset($team) ? route('admin.team.update', $team->id) : route('admin.team.store') }}" method="POST" enctype="multipart/form-data">
            @csrf
            @if(isset($team))
                @method('PUT')
            @endif
            <div class="mb-3">
                <label for="name" class="form-label">Name</label>
                <input type="text" name="name" class="form-control" id="name" value="{{ $team->name ?? old('name') }}" required>
            </div>
            <div class="mb-3">
                <label for="position" class="form-label">Position</label>
                <input type="text" name="position" class="form-control" id="position" value="{{ $team->position ?? old('position') }}" required>
            </div>
            <div class="mb-3">
                <label for="facebook" class="form-label">Facebook URL</label>
                <input type="url" name="facebook" class="form-control" id="facebook" value="{{ $team->facebook ?? old('facebook') }}">
            </div>
            <div class="mb-3">
                <label for="twitter" class="form-label">Twitter URL</label>
                <input type="url" name="twitter" class="form-control" id="twitter" value="{{ $team->twitter ?? old('twitter') }}">
            </div>
            <div class="mb-3">
                <label for="linkedin" class="form-label">LinkedIn URL</label>
                <input type="url" name="linkedin" class="form-control" id="linkedin" value="{{ $team->linkedin ?? old('linkedin') }}">
            </div>
            <div class="mb-3">
                <label for="order" class="form-label">Order</label>
                <input type="number" name="order" class="form-control" id="order" value="{{ $team->order ?? old('order', 0) }}" required>
            </div>
            <div class="mb-3">
                <label for="image" class="form-label">Image</label>
                <input type="file" name="image" class="form-control" id="image">
                @if(isset($team) && $team->image)
                    <div class="mt-2">
                        <img src="{{ asset('storage/' . $team->image) }}" alt="Member image" width="100">
                    </div>
                @endif
            </div>
            <button type="submit" class="btn btn-primary">{{ isset($team) ? 'Update' : 'Add' }}</button>
            <a href="{{ route('admin.team.index') }}" class="btn btn-secondary">Cancel</a>
        </form>
    </div>
</div>
@endsection
