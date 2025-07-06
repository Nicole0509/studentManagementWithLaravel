@extends('layouts.app')

@section('head')
    <title>Edit Student</title>
@endsection

@section('content')
    <section>
        <div class=" card shadow-lg">
            <div class="card-header bg-warning text-white">
                <h5 class="mb-0">Edit Student</h5>
            </div>

            <div class="card-body">
                <form action="{{ URL('student/update',$student->id) }}" method="POST">
                    @csrf
                    <div class="mb-3">
                        <label for="name" class="form-label">Name</label>
                        <input type="text" class="form-control" id="name" name="name" required value="{{ old('name', $student->name) }}">
                    </div>

                    <div class="mb-3">
                        <label for="email" class="form-label">Email</label>
                        <input type="email" class="form-control" id="email" name="email" required value="{{ old('name', $student->email) }}">
                    </div>

                    <div class="mb-3">
                        <label for="age" class="form-label">Age</label>
                        <input type="number" class="form-control" id="age" name="age" required value="{{ old('name', $student->age) }}">
                    </div>

                    <div class="mb-3">
                        <label for="date_of_birth" class="form-label">Date Of Birth</label>
                        <input type="date" class="form-control" id="date_of_birth" name="date_of_birth" required value="{{ old('name', $student->date_of_birth) }}">
                    </div>

                    <div class="mb-3">
                        <label class="form-label">Gender</label><br>
                        <div class="form-check form-check-inline">
                            <input class="form-check-input" type="radio" name="gender" id="male" value ="M" {{ $student->gender == 'M' ? 'checked' : '' }} required>
                            <label class="form-check-label" for="male">Male</label>
                        </div> 

                        <div class="form-check form-check-inline">
                            <input class="form-check-input" type="radio" name="gender" id="female" value="F" {{ $student->gender == 'F' ? 'checked' : '' }} required>
                            <label class="form-check-label" for="Female">Female</label>
                        </div> 
                    </div>

                    <div class="mb-3">
                        <label for="score" class="form-label">Score</label>
                        <input type="number" class="form-control" id="score" name="score" required value="{{$student->score}}">
                    </div>

                    <button type="submit" class="btn btn-primary">Update</button>
                </form>
            </div>
        </div>
    </section>
@endsection