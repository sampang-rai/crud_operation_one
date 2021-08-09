@extends('app')
@section('content')
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <div class="card">
                    <div class="card-header">
                        <a href="/tutors/create" class="btn btn-primary btn-sm">Add Tutor</a>
                    </div>
                    <div class="card-body">
                        <table class="table">
                            <thead>
                                <tr>
                                    <th>#</th>
                                    <th>Photo</th>
                                    <th>Full Name</th>
                                    <th>Address</th>
                                    <th>Mobile</th>
                                    <th>Action</th>
                                </tr>
                            </thead>

                            <tbody>
                                @foreach ($tutors as $index => $tutor)
                                    <tr>
                                        <td>{{ ++$index }}</td>
                                        <td><img src="{{ asset($tutor->photo) }}" alt="" width="60"></td>
                                        <td>{{ $tutor->name }}</td>
                                        <td>{{ $tutor->address }}</td>
                                        <td>{{ $tutor->mobile }}</td>
                                        
                                        <td>
                                            <form action="/tutors/{{ $tutor->id }}" method="POST">
                                                @csrf
                                                @method('delete')
                                                
                                                <a href="tutors/{{ $tutor->id }}" class="btn btn-primary btn-sm">view</a>
                                                <a href="tutors/{{ $tutor->id }}/edit" class="btn btn-primary btn-sm">Edit</a>
                                                <button type="submit" onclick="return confirm('Are you sure you want to delete?')" class="btn btn-danger btn-sm">Delete</button>
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