@extends('layouts.admin')

@section('content')
<div class="card">
    <div class="card-header">{{ isset($event) ? 'Edit Event' : 'Create Event' }}</div>
    <div class="card-body">
        <form action="{{ isset($event) ? route('admin.events.update', $event->id) : route('admin.events.store') }}" method="POST" enctype="multipart/form-data">
            @csrf
            @if(isset($event))
                @method('PUT')
            @endif
            <div class="mb-3">
                <label for="title" class="form-label">Title</label>
                <input type="text" name="title" class="form-control" id="title" value="{{ $event->title ?? old('title') }}" required>
            </div>
            <div class="mb-3">
                <label for="date" class="form-label">Date</label>
                <input type="date" name="date" class="form-control" id="date" value="{{ $event->date ?? old('date') }}" required>
            </div>
            <div class="mb-3">
                <label for="description" class="form-label">Description</label>
                <textarea name="description" id="description" rows="5" class="form-control" required>{{ $event->description ?? old('description') }}</textarea>
            </div>
            <div class="mb-3">
                <label for="image" class="form-label">Image (optional)</label>
                <input type="file" name="image" class="form-control" id="image">
                @if(isset($event) && $event->image)
                    <div class="mt-2">
                        <img src="{{ asset('storage/' . $event->image) }}" alt="Event image" width="150">
                    </div>
                @endif
            </div>
            <button type="submit" class="btn btn-primary">{{ isset($event) ? 'Update' : 'Create' }}</button>
            <a href="{{ route('admin.events.index') }}" class="btn btn-secondary">Cancel</a>
        </form>
    </div>
</div>
@endsection
