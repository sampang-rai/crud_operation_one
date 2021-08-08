@extends('app')
@section('content')
    <div class="container">
        <a href="/teachers/create" class="btn btn-primary btn-sm">Add Teacher</a>
        <table class="table">
            <tr>
                <th>#</th>
                <th>Photo</th>
                <th>Name</th>
                <th>Address</th>
                <th>Mobile</th>
                <th>Faculty</th>
                <th>Action</th>
            </tr>

            @foreach ($teachers as $teacher)
                <tr>
                    <td>{{ $teacher->id }}</td>
                    <td><img src="{{ $teacher->photo }}" alt="" width="60"></td>
                    <td>{{ $teacher->name }}</td>
                    <td>{{ $teacher->address }}</td>
                    <td>{{ $teacher->mobile }}</td>
                    <td>{{ $teacher->faculty->name }}</td>
                    <td>
                        <a href="" class="btn btn-primary btn-sm">Edit</a>
                    </td>
                </tr>
            @endforeach

        </table>
    </div>
    
@endsection