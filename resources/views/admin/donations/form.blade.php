@extends('layouts.admin')

@section('content')
<div class="card">
    <div class="card-header">{{ isset($donation) ? 'Edit Donation Record' : 'Create Donation Record' }}</div>
    <div class="card-body">
        <form action="{{ isset($donation) ? route('admin.donations.update', $donation->id) : route('admin.donations.store') }}" method="POST">
            @csrf
            @if(isset($donation))
                @method('PUT')
            @endif
            <div class="mb-3">
                <label for="donor_name" class="form-label">Donor Name</label>
                <input type="text" name="donor_name" class="form-control" id="donor_name" value="{{ $donation->donor_name ?? old('donor_name') }}" required>
            </div>
            <div class="mb-3">
                <label for="date" class="form-label">Date (optional)</label>
                <input type="date" name="date" class="form-control" id="date" value="{{ $donation->date ?? old('date') }}">
            </div>
            <div class="mb-3">
                <label for="description" class="form-label">Description / Items Donated</label>
                <textarea name="description" id="description" rows="5" class="form-control" required>{{ $donation->description ?? old('description') }}</textarea>
            </div>
            <button type="submit" class="btn btn-primary">{{ isset($donation) ? 'Update' : 'Create' }}</button>
            <a href="{{ route('admin.donations.index') }}" class="btn btn-secondary">Cancel</a>
        </form>
    </div>
</div>
@endsection
