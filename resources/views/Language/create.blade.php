@extends('language.layout')

@section('content')
<div class="card mt-5">
    <h2 class="card-header">Add New Language</h2>
    <div class="card-body">
        <form action="{{url('language/store')}}" method="post">
            @csrf

            <div>
                <label for="name" class="form-label">Language</label>
                <input type="text" name="name" class="form-control" id="name" placeholder="Enter your language">
            </div>

            <div>
                <label for="role" class="form-label">Country</label>
                <input type="text" name="country" class="form-control" id="role" placeholder="Enter your country">
            </div>

            <div>
                <label for="salary" class="form-label">Info</label>
                <input type="number" name="Info" class="form-control" id="salary" placeholder="Enter your info">
            </div>

            <div>
                <label for="age" class="form-label">Age</label>
                <input type="number" name="age" class="form-control" id="age" placeholder="Enter your age">
            </div>

            <button type="submit" class="mt-2 btn btn-success">Submit</button>
        </form>
    </div>
</div>
@endsection