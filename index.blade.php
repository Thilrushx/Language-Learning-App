@extends('employee.layout')
@section('content')

<div class="card mt-5">
    @if (session('success'))
        <div class="alert alert-success">{{session('success')}}</div>
    @endif
    <div>
        <a href="{{url('language/create')}}" class="btn btn-success">CREATE</a>
    </div>
    <h2>Language Details</h2>

    <table class="table table-bordered">
        <thead>
            <tr>
                <th>Language</th>
                <th>Country</th>
                <th>Info</th>
                <th>Age</th>
                
            </tr>
        </thead>
        <tbody>
            @forelse ($language as $em)
                <tr>
                    <td>{{$em->language}}</td>
                    <td>{{$em->country}}</td>
                    <td>{{$em->info}}</td>
                    <td>{{$em->age}}</td>
                    <td>
                        <form action="{{url('language/delete/' . $em->id)}}" method="POST">
                            <a href="{{url('language/' . $em->id . '/edit')}}" class="btn btn-primary">EDIT</a>
                            @csrf
                            @method('DELETE')
                            <button type="submit" class="btn btn-danger">DELETE</button>
                        </form>
                    </td>
                </tr>
            @empty
                <tr>
                    <td colspan="4">There are no data.</td>
                </tr>
            @endforelse
        </tbody>
    </table>
</div>

@endsection