@extends('layouts.admin')

@section('content')
<div class="card">
    <div class="card-header">{{ isset($project) ? 'Edit Future Project' : 'Create Future Project' }}</div>
    <div class="card-body">
        <form action="{{ isset($project) ? route('admin.future-projects.update', $project->id) : route('admin.future-projects.store') }}" method="POST">
            @csrf
            @if(isset($project))
                @method('PUT')
            @endif
            <div class="mb-3">
                <label for="title" class="form-label">Title</label>
                <input type="text" name="title" class="form-control" id="title" value="{{ $project->title ?? old('title') }}" required>
            </div>
            <div class="mb-3">
                <label for="description" class="form-label">Description</label>
                <textarea name="description" id="description" rows="5" class="form-control" required>{{ $project->description ?? old('description') }}</textarea>
            </div>
            <button type="submit" class="btn btn-primary">{{ isset($project) ? 'Update' : 'Create' }}</button>
            <a href="{{ route('admin.future-projects.index') }}" class="btn btn-secondary">Cancel</a>
        </form>
    </div>
</div>
@endsection
