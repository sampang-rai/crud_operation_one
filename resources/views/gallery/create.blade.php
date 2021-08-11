@extends('app')

@section('content')
    <div class="container-fluid">
        <div class="row">
            <div class="col-md-12">
                <div class="card">
                    <div class="card-header">
                        <a href="/galleries" class="btn btn-primary btn-sm">Back</a>
                    </div>
                    <div class="card-body">
                        <form action="/galleries" method="post" enctype="multipart/form-data">
                            @csrf

                            <div class="form-group">
                                <label for="name">Gallery Name</label>
                                <input id="name" class="form-control" type="text" name="name">
                            </div>

                            <div class="form-group">
                                <label for="images">Upload</label>
                                <input id="imgges" class="form-control-file" type="file" name="images[]" multiple>
                            </div>
                            <button type="submit" class="btn btn-primary btn-sm">Save Image</button>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>    
@endsection