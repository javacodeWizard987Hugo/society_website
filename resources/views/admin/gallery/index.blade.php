@extends('layouts.admin')

@section('content')
<div class="d-flex justify-content-between align-items-center mb-4">
    <h2>Gallery</h2>
    <a href="{{ route('admin.gallery.create') }}" class="btn btn-primary">Add New Image</a>
</div>

<div class="card">
    <div class="card-body">
        <div class="row">
            @foreach($items as $item)
            <div class="col-md-3 mb-4">
                <div class="card h-100">
                    <img src="{{ asset('storage/' . $item->image) }}" class="card-img-top" alt="{{ $item->title }}" style="height: 200px; object-fit: cover;">
                    <div class="card-body">
                        <h6 class="card-title">{{ $item->title }}</h6>
                        <form action="{{ route('admin.gallery.destroy', $item->id) }}" method="POST" class="d-inline">
                            @csrf
                            @method('DELETE')
                            <button type="submit" class="btn btn-sm btn-danger" onclick="return confirm('Are you sure?')">Delete</button>
                        </form>
                    </div>
                </div>
            </div>
            @endforeach
        </div>
        {{ $items->links() }}
    </div>
</div>
@endsection
