@extends('Language.layout')

@section('content')
<div class="card mt-5">
    <div class="card-header d-flex justify-content-between align-items-center">
        <h2 class="mb-0">Language Details</h2>
        <a href="{{ route('language.create') }}" class="btn btn-success">+ Add Language</a>
    </div>
    <div class="card-body">

        @if (session('success'))
            <div class="alert alert-success alert-dismissible fade show" role="alert">
                {{ session('success') }}
                <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
            </div>
        @endif

        <table class="table table-bordered table-hover">
            <thead class="table-dark">
                <tr>
                    <th>#</th>
                    <th>Language</th>
                    <th>Country</th>
                    <th>Info</th>
                    <th>Age (years)</th>
                    <th>Actions</th>
                </tr>
            </thead>
            <tbody>
                @forelse ($languages as $language)
                    <tr>
                        <td>{{ $loop->iteration }}</td>
                        <td>{{ $language->language }}</td>
                        <td>{{ $language->country }}</td>
                        <td>{{ $language->info }}</td>
                        <td>{{ $language->age ?? '—' }}</td>
                        <td>
                            <a href="{{ route('language.edit', $language->id) }}" class="btn btn-sm btn-primary">Edit</a>
                            <form action="{{ route('language.delete', $language->id) }}" method="POST" class="d-inline"
                                onsubmit="return confirm('Delete this language?')">
                                @csrf
                                @method('DELETE')
                                <button type="submit" class="btn btn-sm btn-danger">Delete</button>
                            </form>
                        </td>
                    </tr>
                @empty
                    <tr>
                        <td colspan="6" class="text-center text-muted">No languages added yet.</td>
                    </tr>
                @endforelse
            </tbody>
        </table>
    </div>
</div>
@endsection
