@extends('app')
@section('content')
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <div class="card">
                    <div class="card-header">
                        <a href="/students/create" class="btn btn-primary btn-sm">Add Student</a>
                    </div>
                    <div class="card-body">
                        <table class="table">
                            <thead>
                                <tr>
                                    <th>#</th>
                                    <th>Photo</th>
                                    <th>Name</th>
                                    <th>Address</th>
                                    <th>Mobile</th>
                                    <th>Faculty</th>
                                    <th>Action</th>
                                </tr>
                            </thead>
                            <tbody>
                                @foreach ($students as $index=> $student)
                                    <tr>
                                        <td>{{ ++$index }}</td>
                                        <td><img src="{{ asset($student->photo) }}" alt="" width="50"></td>
                                        <td>{{ $student->name }}</td>
                                        <td>{{ $student->address }}</td>
                                        <td>{{ $student->mobile }}</td>
                                        <td>{{ $student->faculty->name }}</td>
                                        <td>
                                            <form action="/students/{{ $student->id }}" method="post">
                                                @csrf
                                                @method('delete')
                                                <a href="/students/{{ $student->id }}/edit" class="badge bg-primary text-decoration-none" >Edit</a>
                                                <button type="submit" onclick="return confirm('Are you sure you want to delete?')" class="btn badge bg-danger text-decoration-none">Delete</button>
                                            </form>
                                        </td>
                                    </tr>
                                @endforeach
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection