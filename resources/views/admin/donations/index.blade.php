@extends('layouts.admin')

@section('content')
<div class="d-flex justify-content-between align-items-center mb-4">
    <h2>Donations</h2>
    <a href="{{ route('admin.donations.create') }}" class="btn btn-primary">Add New Donation Record</a>
</div>

<div class="card">
    <div class="card-body">
        <table class="table table-bordered table-striped">
            <thead>
                <tr>
                    <th>ID</th>
                    <th>Donor Name</th>
                    <th>Actions</th>
                </tr>
            </thead>
            <tbody>
                @foreach($donations as $donation)
                <tr>
                    <td>{{ $donation->id }}</td>
                    <td>{{ $donation->donor_name }}</td>
                    <td>
                        <a href="{{ route('admin.donations.edit', $donation->id) }}" class="btn btn-sm btn-info">Edit</a>
                        <form action="{{ route('admin.donations.destroy', $donation->id) }}" method="POST" class="d-inline">
                            @csrf
                            @method('DELETE')
                            <button type="submit" class="btn btn-sm btn-danger" onclick="return confirm('Are you sure?')">Delete</button>
                        </form>
                    </td>
                </tr>
                @endforeach
            </tbody>
        </table>
        {{ $donations->links() }}
    </div>
</div>
@endsection
