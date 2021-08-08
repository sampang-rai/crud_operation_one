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
                                    {{-- <th>Photo</th> --}}
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
                                        {{-- <td><img src="{{ asset($tutor->photo) }}" width="50" alt="" ></td> --}}
                                        <td>{{ $tutor->name }}</td>
                                        <td>{{ $tutor->address }}</td>
                                        <td>{{ $tutor->mobile }}</td>
                                        
                                        <td>
                                            <a href="tutors/{{ $tutor->id }}/edit" class="btn btn-primary btn-sm">Edit</a>
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