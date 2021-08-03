@extends('app')
@section('content')
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <div class="card">
                    <div class="card-header">
                        <a href="/students" class="btn btn-primary btn-sm">Back</a>
                    </div>
                    <div class="card-body"></div>
                    <div class="my-2">
                        @if (session('message'))
                            <div class="alert alret-success" role="alert">
                                {{ session('message') }}
                            </div>
                        @endif
                    </div>
                    <form action="/students/{{ $student->id }}" method="post" enctype="multipart/form-data">
                        @csrf
                        @method('put')

                        <div my-2>
                            <img src="{{ asset($student->photo) }}" alt="" width="150">
                        </div>

                        <div class="form-group">
                            <label for="photo">Student Photo</label>
                            <input id="photo" class="form-control-file" type="file" name="photo">
                        </div>
                        <div class="form-group">
                            <label for="name">Full Name</label>
                            <input id="name" class="form-control" type="text" name="name" value="{{ $student->name }}">
                        </div>

                        @error('name')
                            <span class="text-danger">{{ $message }}</span>
                        @enderror

                        <div class="form-group">
                            <label for="mobile">Mobile</label>
                            <input id="mobile" class="form-control" type="text" name="mobile" value="{{ $student->mobile }}">
                        </div>

                        @error('mobile')
                            <span class="text-danger">{{ $message }}</span>
                        @enderror

                        <div class="form-group">
                            <label for="address">Address</label>
                            <input id="address" class="form-control" type="text" name="address" value="{{ $student->address }}">
                        </div>

                        @error('address')
                            <span class="text-danger">{{ $message }}</span>
                        @enderror

                        <div class="form-group">
                            <label for="guardian">Guardian</label>
                            <input id="guardian" class="form-control" type="text" name="guardian" value="{{ $student->guardian }}">
                        </div>

                        @error('guardian')
                            <span class="text-danger">{{ $message }}</span>
                        @enderror

                        <div class="form-group">
                            <label for="faculty_id">Faculty</label>
                            <select id="faculty_id" class="form-control" name="faculty_id">
                                @foreach ($faculties as $faculty)
                                    <option value="{{ $faculty->id }}" {{ $student->faculty_id == $faculty->id ? 'selected' : '' }}>{{ $faculty->name }}</option>
                                @endforeach
                            </select>
                        </div>

                        <button type="submit" class="btn btn-primary my-2">Update</button>
                    </form>
                </div>
            </div>
        </div>
    </div>
@endsection