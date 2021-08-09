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
                        <form action="/tutors/{{ $tutor->id }}" method="post" enctype="multipart/form-data">
                            @csrf
                            @method('put')

                            <div my-2>
                                <img src="{{ asset($tutor->photo) }}" alt="" width="150" style="border-radius: 50%">
                            </div>

                            
                            
                            <div class="row">
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <label for="name">Full Name</label>
                                        <input id="name" class="form-control" type="" name="name" value="{{ $tutor->name }}" disabled>
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
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection