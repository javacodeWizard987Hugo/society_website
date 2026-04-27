@extends('layouts.admin')

@section('content')
<div class="d-flex justify-content-between align-items-center mb-4">
    <h2>Team Members</h2>
    <a href="{{ route('admin.team.create') }}" class="btn btn-primary">Add New Member</a>
</div>

<div class="card">
    <div class="card-body">
        <table class="table table-bordered table-striped">
            <thead>
                <tr>
                    <th>Order</th>
                    <th>Image</th>
                    <th>Name</th>
                    <th>Position</th>
                    <th>Actions</th>
                </tr>
            </thead>
            <tbody>
                @foreach($members as $member)
                <tr>
                    <td>{{ $member->order }}</td>
                    <td>
                        @if($member->image)
                        <img src="{{ asset('img/team/' . $member->image) }}" width="50" alt="">

                        @else
                        No Image
                        @endif
                    </td>
                    <td>{{ $member->name }}</td>
                    <td>{{ $member->position }}</td>
                    <td>
                        <a href="{{ route('admin.team.edit', $member->id) }}" class="btn btn-sm btn-info">Edit</a>
                        <form action="{{ route('admin.team.destroy', $member->id) }}" method="POST" class="d-inline">
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
