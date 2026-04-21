@extends('layouts.admin')

@section('content')
<div class="d-flex justify-content-between align-items-center mb-4">
    <h2>Future Projects</h2>
    <a href="{{ route('admin.future-projects.create') }}" class="btn btn-primary">Add New Project</a>
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
                @foreach($projects as $project)
                <tr>
                    <td>{{ $project->id }}</td>
                    <td>{{ $project->title }}</td>
                    <td>
                        <a href="{{ route('admin.future-projects.edit', $project->id) }}" class="btn btn-sm btn-info">Edit</a>
                        <form action="{{ route('admin.future-projects.destroy', $project->id) }}" method="POST" class="d-inline">
                            @csrf
                            @method('DELETE')
                            <button type="submit" class="btn btn-sm btn-danger" onclick="return confirm('Are you sure?')">Delete</button>
                        </form>
                    </td>
                </tr>
                @endforeach
            </tbody>
        </table>
        {{ $projects->links() }}
    </div>
</div>
@endsection
