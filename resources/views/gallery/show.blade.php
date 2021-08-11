@extends('app')
@section('content')
<div class="container">
    <div class="card">
        <div class="card-header">
            <a href="/galleries" class="btn btn-primary btn-sm">Back</a>
        </div>
        <div class="card-body">
            <div class="row">
                @foreach ($photos as $photo)
                    <div class="col-md-4">
                        <img src="{{ asset($photo->name) }}" alt="" class="img-fluid">
                    </div>
                @endforeach
            </div>
        </div>
    </div>
</div>
    
@endsection