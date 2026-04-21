@extends('layouts.admin')

@section('content')
<div class="d-flex justify-content-between align-items-center mb-4">
    <h2>Achievements</h2>
    <a href="{{ route('admin.achievements.create') }}" class="btn btn-primary">Add New Achievement</a>
</div>

<div class="card">
    <div class="card-body">
        <table class="table table-bordered table-striped">
            <thead>
                <tr>
                    <th>ID</th>
                    <th>Title</th>
                    <th>Actions</th>
                </tr>
            </thead>
            <tbody>
                @foreach($achievements as $achievement)
                <tr>
                    <td>{{ $achievement->id }}</td>
                    <td>{{ $achievement->title }}</td>
                    <td>
                        <a href="{{ route('admin.achievements.edit', $achievement->id) }}" class="btn btn-sm btn-info">Edit</a>
                        <form action="{{ route('admin.achievements.destroy', $achievement->id) }}" method="POST" class="d-inline">
                            @csrf
                            @method('DELETE')
                            <button type="submit" class="btn btn-sm btn-danger" onclick="return confirm('Are you sure?')">Delete</button>
                        </form>
                    </td>
                </tr>
                @endforeach
            </tbody>
        </table>
        {{ $achievements->links() }}
    </div>
</div>
@endsection
