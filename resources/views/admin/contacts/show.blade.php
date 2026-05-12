@extends('layouts.admin')

@section('content')
<div class="d-flex justify-content-between align-items-center mb-4">
    <h2>Message from {{ $contact->name }}</h2>
    <a href="{{ route('admin.contacts.index') }}" class="btn btn-secondary">Back to List</a>
</div>

<div class="card">
    <div class="card-body">
        <div class="mb-3">
            <strong>Name:</strong>
            <p>{{ $contact->name }}</p>
        </div>
        <div class="mb-3">
            <strong>Email:</strong>
            <p>{{ $contact->email }}</p>
        </div>
        <div class="mb-3">
            <strong>Phone:</strong>
            <p>{{ $contact->phone ?? 'N/A' }}</p>
        </div>
        <div class="mb-3">
            <strong>Date:</strong>
            <p>{{ $contact->created_at->format('F j, Y, g:i a') }}</p>
        </div>
        <div class="mb-3">
            <strong>Message:</strong>
            <div class="p-3 bg-light border">
                {!! nl2br(e($contact->description)) !!}
            </div>
        </div>

        <form action="{{ route('admin.contacts.destroy', $contact->id) }}" method="POST" class="mt-4">
            @csrf
            @method('DELETE')
            <button type="submit" class="btn btn-danger" onclick="return confirm('Are you sure you want to delete this message?')">Delete Message</button>
        </form>
    </div>
</div>
@endsection
