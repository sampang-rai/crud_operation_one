@extends('app')

@section('content')
    <div class="container-fluid">
        <div class="row">
            <div class="col-md-12">
                <div class="card">
                    <div class="card-header">
                        <a href="" >Back</a>
                    </div>
                    <div class="card-body">
                        <form action="" method="post">
                            @csrf
                            <div class="form-group">
                                <label for="name">Gallery Name</label>
                                <input id="name" class="form-control" type="text" name="name">
                            </div>

                            <div class="form-group">
                                <label for="images">Upload Image</label>
                                <input id="images" Upload Images="form-control" type="text" name="images">
                            </div>

                            <button type="submit">Save Image</button>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>    
@endsection