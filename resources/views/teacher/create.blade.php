@extends('app')
@section('content')
    <div class="container">
        <a href="/teacher" class="btn btn-primary btn-sm">Back</a>
        <form action="/teacher" method="post">
            @csrf
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

            <div class="form-group">
                <label for="faculty_id">Faculty</label>
                <select id="faculty_id" class="form-control" name="faculty_id">
                    @foreach ($faculties as $faculty)
                        <option value="{{ $faculty->id }}">{{ $faculty->name }}</option>
                    @endforeach
                </select>
            </div>

            <button type="submit" class="btn btn-primary my-2">Save Record</button>
        </form>
    </div>
@endsection