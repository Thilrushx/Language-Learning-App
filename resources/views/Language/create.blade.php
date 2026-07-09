@extends('Language.layout')

@section('content')
<div class="card mt-5">
    <h2 class="card-header">Add New Language</h2>
    <div class="card-body">

        @if ($errors->any())
            <div class="alert alert-danger">
                <ul class="mb-0">
                    @foreach ($errors->all() as $error)
                        <li>{{ $error }}</li>
                    @endforeach
                </ul>
            </div>
        @endif

        <form action="{{ route('language.store') }}" method="POST">
            @csrf

            <div class="mb-3">
                <label for="language" class="form-label">Language</label>
                <input type="text" name="language" class="form-control @error('language') is-invalid @enderror"
                    id="language" value="{{ old('language') }}" placeholder="e.g. Spanish">
                @error('language')
                    <div class="invalid-feedback">{{ $message }}</div>
                @enderror
            </div>

            <div class="mb-3">
                <label for="country" class="form-label">Country</label>
                <input type="text" name="country" class="form-control @error('country') is-invalid @enderror"
                    id="country" value="{{ old('country') }}" placeholder="e.g. Spain">
                @error('country')
                    <div class="invalid-feedback">{{ $message }}</div>
                @enderror
            </div>

            <div class="mb-3">
                <label for="info" class="form-label">Info</label>
                <input type="text" name="info" class="form-control @error('info') is-invalid @enderror"
                    id="info" value="{{ old('info') }}" placeholder="e.g. Romance language spoken by 500M people">
                @error('info')
                    <div class="invalid-feedback">{{ $message }}</div>
                @enderror
            </div>

            <div class="mb-3">
                <label for="age" class="form-label">Age (years old)</label>
                <input type="number" name="age" class="form-control @error('age') is-invalid @enderror"
                    id="age" value="{{ old('age') }}" placeholder="e.g. 1000" min="0">
                @error('age')
                    <div class="invalid-feedback">{{ $message }}</div>
                @enderror
            </div>

            <a href="{{ route('language.index') }}" class="btn btn-secondary">Cancel</a>
            <button type="submit" class="btn btn-success">Save Language</button>
        </form>
    </div>
</div>
@endsection
