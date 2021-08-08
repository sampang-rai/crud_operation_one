@extends('app')
@section('content')
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <div class="card">
                    <div class="card-header">
                        <a href="/tutors" class="btn btn-primary btn-sm">Back</a>
                    </div>
                    <div class="card-body">
                        <div class="my-2">
                            @if (session('message'))
                                <div class="alert alert-success" role="alert">
                                    {{ session('message') }}
                                </div>
                                
                            @endif
                        </div>
                        <form action="/tutors/{{ $tutor->id }}" method="post" enctype="multipart/form-data">
                            @csrf
                            @method('put')

                            <div my-2>
                                <img src="{{ asset($tutor->photo) }}" alt="" width="120">
                            </div>
                            
                            <div class="form-group">
                                <label for="photo">Tutor Photo</label>
                                <input id="photo" class="form-control-file" type="file" name="photo" >
                            </div>
                            <div class="row">
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <label for="name">Full Name</label>
                                        <input id="name" class="form-control" type="text" name="name" value="{{ $tutor->name }}">
                                    </div>
                                </div>

                                <div class="col-md-6">
                                    <div class="form-group">
                                        <label for="address">Address</label>
                                        <input id="address" class="form-control" type="text" name="address" value="{{ $tutor->address }}">
                                    </div>
                                </div>
                            </div>

                            <div class="row">
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <label for="mobile">Mobile</label>
                                        <input id="mobile" class="form-control" type="text" name="mobile" value="{{ $tutor->mobile }}">
                                    </div>
                        
                                </div>
                            </div>
                            <button type="submit" class="btn btn-primary my-2">Update</button>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection