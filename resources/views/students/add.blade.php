@extends('layouts.app')

@section('head')
    <title>Add Students</title>
@endsection

@section('content')
    <section>
        <div class="card shadow-lg p-3 mb-5 bg-body rounded">
            <div class="card-header bg-primary text-white">
                <h5 class="mb-0">Student Registration</h5>
            </div>

            <div class="card-body">
                <form action="{{ URL('student/create') }}" method="POST">
                    @csrf
                    <div class="mb-3">
                        <label for="name" class="form-label">Name</label>
                        <input type="text" class="form-control" id="name" name="name" required>
                    </div>

                    <div class="mb-3">
                        <label for="email" class="form-label">Email</label>
                        <input type="email" class="form-control" id="email" name="email" required>
                    </div>

                    <div class="mb-3">
                        <label for="age" class="form-label">Age</label>
                        <input type="number" class="form-control" id="age" name="age" required>
                    </div>

                    <div class="mb-3">
                        <label class="form-label">Gender</label><br>
                        <div class="form-check form-check-inline">
                            <input class="form-check-input" type="radio" name="gender" id="male" value ="M" required>
                            <label class="form-check-label" for="male">Male</label>
                        </div> 

                        <div class="form-check form-check-inline">
                            <input class="form-check-input" type="radio" name="gender" id="female" value="F" required>
                            <label class="form-check-label" for="Female">Female</label>
                        </div> 
                    </div>

                    <div class="mb-3">
                        <label for="dob" class="form-label">Date Of Birth</label>
                        <input type="date" class="form-control" id="dob" name="date_of_birth" required>
                    </div>

                    <div class="mb-3">
                        <label for="score" class="form-label">Score</label>
                        <input type="number" class="form-control" id="score" name="score" value="0" required>
                    </div>

                    <button type="submit" class="btn btn-success">Submit</button>
                </form>
            </div>
        </div>
    </section>
@endsection
