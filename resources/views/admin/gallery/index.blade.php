@extends('layouts.admin')

@section('content')
<div class="container-fluid">
    <div class="d-flex justify-content-between align-items-center mb-4">
        <h2>Gallery Management</h2>
        <a href="{{ route('admin.gallery.create') }}" class="btn btn-primary">Add New Event Gallery</a>
    </div>

    @if(session('success'))
        <div class="alert alert-success">{{ session('success') }}</div>
    @endif

    <div class="card">
        <div class="card-body">
            <table class="table table-bordered">
                <thead>
                    <tr>
                        <th>Event Name</th>
                        <th>Event Date</th>
                        <th>Images Count</th>
                        <th>Actions</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach($events as $event)
                    <tr>
                        <td>{{ $event->name }}</td>
                        <td>{{ $event->event_date ? \Carbon\Carbon::parse($event->event_date)->format('M d, Y') : 'N/A' }}</td>
                        <td>{{ $event->items_count }}</td>
                        <td>
                            <a href="{{ route('admin.gallery.edit', $event->id) }}" class="btn btn-sm btn-info">Edit</a>
                            <form action="{{ route('admin.gallery.destroy', $event->id) }}" method="POST" class="d-inline" onsubmit="return confirm('Are you sure you want to delete this event and all its images?')">
                                @csrf
                                @method('DELETE')
                                <button type="submit" class="btn btn-sm btn-danger">Delete</button>
                            </form>
                        </td>
                    </tr>
                    @endforeach
                </tbody>
            </table>
            <div class="mt-4">
                {{ $events->links() }}
            </div>
        </div>
    </div>
</div>
@endsection
