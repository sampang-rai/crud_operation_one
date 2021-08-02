@extends('app')
@section('content')
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <div class="card">
                    <div class="card-header">
                        <a href="/student" class="btn btn-primary btn-sm">Back</a>
                    </div>
                    <div class="card-body"></div>
                    <div class="my-2">
                        @if (session('message'))
                            <div class="alert alret-success" role="alert">
                                {{ session('message') }}
                            </div>
                        @endif
                    </div>
                    <form action="/student" method="post">
                        @csrf
                        <div class="form-group">
                            <label for="name">Full Name</label>
                            <input id="name" class="form-control" type="text" name="name" value="{{ old('name') }}">
                        </div>

                        @error('name')
                            <span class="text-danger">{{ $message }}</span>
                        @enderror

                        <div class="form-group">
                            <label for="mobile">Mobile</label>
                            <input id="mobile" class="form-control" type="text" name="mobile" value="{{ old('mobile') }}">
                        </div>

                        @error('mobile')
                            <span class="text-danger">{{ $message }}</span>
                        @enderror

                        <div class="form-group">
                            <label for="address">Address</label>
                            <input id="address" class="form-control" type="text" name="address" value="{{ old('address') }}">
                        </div>

                        @error('address')
                            <span class="text-danger">{{ $message }}</span>
                        @enderror

                        <div class="form-group">
                            <label for="guardian">Guardian</label>
                            <input id="guardian" class="form-control" type="text" name="guardian" value="{{ old('guardian') }}">
                        </div>

                        @error('guardian')
                            <span class="text-danger">{{ $message }}</span>
                        @enderror

                        <div class="form-group">
                            <label for="faculty_id">Faculty</label>
                            <select id="faculty_id" class="form-control" name="faculty_id">
                                @foreach ($faculties as $faculty)
                                    <option value="{{ $faculty->id }}">{{ $faculty->name }}</option>
                                @endforeach
                            </select>
                        </div>

                        <button type="submit" class="btn btn-primary my-2">Save</button>
                    </form>
                </div>
            </div>
        </div>
    </div>
@endsection