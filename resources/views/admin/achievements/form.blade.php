@extends('layouts.admin')

@section('content')
<div class="card">
    <div class="card-header">{{ isset($achievement) ? 'Edit Achievement' : 'Create Achievement' }}</div>
    <div class="card-body">
        <form action="{{ isset($achievement) ? route('admin.achievements.update', $achievement->id) : route('admin.achievements.store') }}" method="POST">
            @csrf
            @if(isset($achievement))
                @method('PUT')
            @endif
            <div class="mb-3">
                <label for="title" class="form-label">Title</label>
                <input type="text" name="title" class="form-control" id="title" value="{{ $achievement->title ?? old('title') }}" required>
            </div>
            <div class="mb-3">
                <label for="date" class="form-label">Date (optional)</label>
                <input type="date" name="date" class="form-control" id="date" value="{{ $achievement->date ?? old('date') }}">
            </div>
            <div class="mb-3">
                <label for="description" class="form-label">Description</label>
                <textarea name="description" id="description" rows="5" class="form-control" required>{{ $achievement->description ?? old('description') }}</textarea>
            </div>
            <button type="submit" class="btn btn-primary">{{ isset($achievement) ? 'Update' : 'Create' }}</button>
            <a href="{{ route('admin.achievements.index') }}" class="btn btn-secondary">Cancel</a>
        </form>
    </div>
</div>
@endsection
