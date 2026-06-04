@extends('layouts.admin')

@section('content')
<div class="card">
    <div class="card-header">{{ isset($event) ? 'Edit' : 'Add' }} Gallery Event</div>
    <div class="card-body">
        <form action="{{ isset($event) ? route('admin.gallery.update', $event->id) : route('admin.gallery.store') }}" method="POST" enctype="multipart/form-data">
            @csrf
            @if(isset($event))
                @method('PUT')
            @endif
            <div class="mb-3">
                <label for="name" class="form-label">Event Name</label>
                <input type="text" name="name" class="form-control" id="name" value="{{ old('name', isset($event) ? $event->name : '') }}" required>
            </div>
            <div class="mb-3">
                <label for="event_date" class="form-label">Event Date</label>
                <input type="date" name="event_date" class="form-control" id="event_date" value="{{ old('event_date', isset($event) ? $event->event_date : '') }}">
            </div>
            <div class="mb-3">
                <label for="images" class="form-label">Upload Images</label>
                <input type="file" name="images[]" class="form-control" id="images" multiple onchange="previewImages(this)">
                <small class="text-muted">You can select multiple images.</small>
                <div id="imagePreview" class="mt-2 row"></div>
            </div>

            @if(isset($event) && $event->items->count() > 0)
                <hr>
                <h5>Existing Images</h5>
                <div class="row">
                    @foreach($event->items as $item)
                        <div class="col-md-2 mb-3 position-relative">
                            <img src="{{ asset('storage/' . $item->image) }}" class="img-fluid rounded shadow-sm" style="height: 120px; width: 100%; object-fit: cover;">
                            <button type="button" class="btn btn-danger btn-sm position-absolute top-0 end-0 m-1" onclick="deleteImage({{ $item->id }})">
                                <i class="fa fa-trash"></i>
                            </button>
                        </div>
                    @endforeach
                </div>
            @endif

            <button type="submit" class="btn btn-primary">{{ isset($event) ? 'Update' : 'Create' }} Event Gallery</button>
            <a href="{{ route('admin.gallery.index') }}" class="btn btn-secondary">Cancel</a>
        </form>
    </div>
</div>

@if(isset($event))
<form id="deleteImageForm" action="" method="POST" style="display: none;">
    @csrf
    @method('DELETE')
</form>
@endif

<script>
function previewImages(input) {
    var preview = document.getElementById('imagePreview');
    preview.innerHTML = '';
    if (input.files) {
        Array.from(input.files).forEach(file => {
            var reader = new FileReader();
            reader.onload = function (e) {
                var div = document.createElement('div');
                div.className = 'col-md-2 mb-3';
                var img = document.createElement('img');
                img.setAttribute('src', e.target.result);
                img.className = 'img-fluid rounded shadow-sm';
                img.style.height = '120px';
                img.style.width = '100%';
                img.style.objectFit = 'cover';
                div.appendChild(img);
                preview.appendChild(div);
            }
            reader.readAsDataURL(file);
        });
    }
}

@if(isset($event))
function deleteImage(itemId) {
    if (confirm('Are you sure you want to delete this image?')) {
        let form = document.getElementById('deleteImageForm');
        form.action = "{{ url('admin/gallery/image') }}/" + itemId;
        form.submit();
    }
}
@endif
</script>
@endsection
