@extends('layouts.admin')

@section('content')
<div class="card">
    <div class="card-header">{{ isset($slide) ? 'Edit Slide' : 'Create Slide' }}</div>
    <div class="card-body">
        <form action="{{ isset($slide) ? route('admin.slides.update', $slide->id) : route('admin.slides.store') }}" method="POST" enctype="multipart/form-data">
            @csrf
            @if(isset($slide))
                @method('PUT')
            @endif
            <div class="mb-3">
                <label for="title" class="form-label">Title</label>
                <input type="text" name="title" class="form-control" id="title" value="{{ $slide->title ?? old('title') }}">
            </div>
            <div class="mb-3">
                <label for="subtitle" class="form-label">Subtitle</label>
                <input type="text" name="subtitle" class="form-control" id="subtitle" value="{{ $slide->subtitle ?? old('subtitle') }}">
            </div>
            <div class="mb-3">
                <label for="description" class="form-label">Description</label>
                <textarea name="description" id="description" rows="3" class="form-control">{{ $slide->description ?? old('description') }}</textarea>
            </div>
            <div class="mb-3">
                <label for="order" class="form-label">Order</label>
                <input type="number" name="order" class="form-control" id="order" value="{{ $slide->order ?? old('order', 0) }}" required>
            </div>
            <div class="mb-3">
                <label for="image" class="form-label">Image</label>
                <input type="file" name="image" class="form-control" id="image" {{ isset($slide) ? '' : 'required' }}>
                @if(isset($slide) && $slide->image)
                    <div class="mt-2">
                        <img src="{{ asset('storage/' . $slide->image) }}" alt="Slide image" width="200">
                    </div>
                @endif
            </div>
            <button type="submit" class="btn btn-primary">{{ isset($slide) ? 'Update' : 'Create' }}</button>
            <a href="{{ route('admin.slides.index') }}" class="btn btn-secondary">Cancel</a>
        </form>
    </div>
</div>
@endsection
