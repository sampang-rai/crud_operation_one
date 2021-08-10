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
                            <button type="submit" class="btn btn-primary btn-sm">Save Image</button>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>    
@endsection