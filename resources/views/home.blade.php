@extends('Language.layout')

@section('content')
<div class="py-5 text-center">
    <h1 class="display-4 fw-bold">🌐 Language Learning App</h1>
    <p class="lead text-muted mt-3">
        Explore and manage a catalogue of world languages — where they're spoken, how old they are, and more.
    </p>
    <div class="mt-4 d-flex justify-content-center gap-3">
        <a href="{{ route('language.index') }}" class="btn btn-dark btn-lg">Browse Languages</a>
        <a href="{{ route('language.create') }}" class="btn btn-success btn-lg">+ Add a Language</a>
    </div>
</div>

<hr>

<div class="row mt-5 text-center g-4">
    <div class="col-md-4">
        <div class="card h-100 shadow-sm">
            <div class="card-body">
                <div class="fs-1">📋</div>
                <h5 class="card-title mt-2">Browse</h5>
                <p class="card-text text-muted">View all languages in a clean, sortable table.</p>
                <a href="{{ route('language.index') }}" class="btn btn-outline-dark btn-sm">View All</a>
            </div>
        </div>
    </div>
    <div class="col-md-4">
        <div class="card h-100 shadow-sm">
            <div class="card-body">
                <div class="fs-1">➕</div>
                <h5 class="card-title mt-2">Add</h5>
                <p class="card-text text-muted">Add a new language along with its country and background info.</p>
                <a href="{{ route('language.create') }}" class="btn btn-outline-success btn-sm">Add Language</a>
            </div>
        </div>
    </div>
    <div class="col-md-4">
        <div class="card h-100 shadow-sm">
            <div class="card-body">
                <div class="fs-1">✏️</div>
                <h5 class="card-title mt-2">Manage</h5>
                <p class="card-text text-muted">Edit or remove existing language records at any time.</p>
                <a href="{{ route('language.index') }}" class="btn btn-outline-primary btn-sm">Manage</a>
            </div>
        </div>
    </div>
</div>
@endsection
