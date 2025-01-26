@extends('language.layout')
@section('content')

<div class="card mt-5">
    <h2 class="card-header">Edit Language</h2>
    <div class="card-body">
        <form action="{{url('language/update/' . $language->id)}}" method="POST">
            @csrf

            <div class="mt-2">
                <label for="language">Language</label>
                <input type="text" name="language" value="{{$language->language}}" placeholder="Enter language name">
            </div>

            <div class="mt-2">
                <label for="country">Country</label>
                <input type="text" name="country" value="{{$language->country}}" placeholder="Enter country name">
            </div>

            <div class="mt-2">
                <label for="info">Info</label>
                <input type="text" name="info" value="{{$language->info}}" placeholder="Enter additional info">
            </div>

            <div class="mt-2">
                <label for="age">Age</label>
                <input type="text" name="age" value="{{$language->age}}" placeholder="Enter age">
            </div>
                <p>
                </p>
            <button type="submit">Update</button>
        </form>
    </div>
</div>


@endsection
