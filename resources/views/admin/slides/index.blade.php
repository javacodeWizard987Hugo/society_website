@extends('layouts.admin')

@section('content')
<div class="d-flex justify-content-between align-items-center mb-4">
    <h2>Slideshow</h2>
    <a href="{{ route('admin.slides.create') }}" class="btn btn-primary">Add New Slide</a>
</div>

<div class="card">
    <div class="card-body">
        <table class="table table-bordered table-striped">
            <thead>
                <tr>
                    <th>Order</th>
                    <th>Image</th>
                    <th>Title</th>
                    <th>Actions</th>
                </tr>
            </thead>
            <tbody>
                @foreach($slides as $slide)
                <tr>
                    <td>{{ $slide->order }}</td>
                    <td><img src="{{ asset('storage/' . $slide->image) }}" width="100" alt=""></td>
                    <td>{{ $slide->title }}</td>
                    <td>
                        <a href="{{ route('admin.slides.edit', $slide->id) }}" class="btn btn-sm btn-info">Edit</a>
                        <form action="{{ route('admin.slides.destroy', $slide->id) }}" method="POST" class="d-inline">
                            @csrf
                            @method('DELETE')
                            <button type="submit" class="btn btn-sm btn-danger" onclick="return confirm('Are you sure?')">Delete</button>
                        </form>
                    </td>
                </tr>
                @endforeach
            </tbody>
        </table>
    </div>
</div>
@endsection
