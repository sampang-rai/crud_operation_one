@extends('app')
@section('content')
    <div class="container">
        <a href="/tutor" class="btn btn-primary btn-sm">Back</a>
        <form action="/tutor" method="post" enctype="multipart/form-data">
            @csrf
            <div class="form-group">
                <label for="photo">Tutor Photo</label>
                <input id="photo" class="form-control-file" type="file" name="photo">
            </div>

            <div class="form-group">
                <label for="name">Full Name</label>
                <input id="name" class="form-control" type="text" name="name">
            </div>

            <div class="form-group">
                <label for="address">Address</label>
                <input id="address" class="form-control" type="text" name="address">
            </div>

            <div class="form-group">
                <label for="mobile">Mobile</label>
                <input id="mobile" class="form-control" type="text" name="mobile">
            </div>

            <button type="submit" class="btn btn-primary my-2">Save Record</button>
        </form>
    </div>
@endsection