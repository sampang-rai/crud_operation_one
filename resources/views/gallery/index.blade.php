@extends('app')
@section('content')
    <div class="container-fluid">
        <div class="row">
            <div class="col-md-12">
                <div class="card">
                    <div class="card-header">
                        <a href="/galleries/create" class="btn btn-primary btn-sm">Add Gallery</a>
                    </div>
                    
                    <div class="card-body">
                        <table class="table">
                            <thead>
                                <tr>
                                    <th>#</th>
                                    <th>Gallery Name</th>
                                    <th>Action</th>
                                </tr>
                            </thead>
                            <tbody>
                                @foreach ($galleries as $gallery)
                                    <tr>
                                        <td>{{ $gallery->id }}</td>
                                        <td>{{ $gallery->name }}</td>
                                        <td>
                                            <a href="/galleries/{{ $gallery->id }}" class="btn btn-primary btn-sm">View</a>
                                            <a href="/galleries/{{ $gallery->id }}/edit" class="btn btn-primary btn-sm">Edit</a>
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