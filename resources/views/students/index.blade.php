@extends('layouts.app')

@section('head')
    <title>Students</title>
@endsection

@section('styles')
    <style>
        table {
            width: 100%;
            border-collapse: collapse;
        }

        th, td {
            padding: 10px;
            text-align: left;
            border-bottom: 1px solid #ddd;
        }
        th {
            background-color: #f2f2f2;
        }

        tr:nth-child(even) {
            background-color: #f9f9f9;
        }

        tr:hover {
            background-color: #f5f5f5;
        }

        h2{
            text-align: center;
            margin-top: 20px;
            color: #333;
        }

        a{
            text-decoration:none;
        }

        .search{
            display: flex;
            justify-content: center;
            margin-bottom: 20px;
        }

        .search input{
            padding: 10px;
            width: 50%;
            border: 1px solid #ccc;
            border-radius: 4px;
        }

        .search button, 
        .addStudentButton{
            padding: 10px 15px;
            margin-left: 10px;
            background-color: #007bff;
            color: white;
            border: none;
            border-radius: 4px;
            cursor: pointer;
        }

        .search button:hover,
        .addStudentButton:hover {
            color: white;
            background-color: #0056b3;
        }

        .editButton, .deleteButton {
            padding: 5px 10px;
            color: white;
            border: none;
            border-radius: 4px;
            cursor: pointer;
        }

        .editButton {
            background-color: #28a745;
        }

        .editButton:hover {
            color: white;
            background-color: #218838;
        }

        .deleteButton {
            background-color: #dc3545;
        }

        .deleteButton:hover {
            color: white;
            background-color: #c82333;
        }
    </style>
@endsection

@section('content')
    <section>
        <h2>Students List</h2>
        <form action={{ URL('student') }} method="GET">
            <div class="search">
                <input type="text" placeholder="Search" id="search" name="search" value="{{ request('search') }}">
                <button type="submit">Search</button>
                <a class="addStudentButton" href="{{ URL('student/add') }}">Add Student</a>
            </div>
        </form>
        
        <table>
            <thead>
                <tr>
                    <th>ID</th>
                    <th>Name</th>
                    <th>Email</th>
                    <th>Age</th>
                    <th>Date Of Birth</th>
                    <th>Gender</th>
                    <th>Score</th>
                    <th>Actions</th>
                </tr>
            </thead>
            <tbody>
                @foreach ($students as $student )
                    <tr>
                        <td>{{$student->id}}</td>
                        <td>{{$student->name}}</td>
                        <td>{{$student->email}}</td>
                        <td>{{$student->age}}</td>
                        <td>{{$student->date_of_birth}}</td>
                        <td>{{$student->gender}}</td>
                        <td>{{$student->score}}</td>
                        <td>
                            <a href="{{ URL('student/edit', $student->id) }}" class="editButton">Edit</a>

                            <form action="{{ URL('student/delete', $student->id) }}" method="POST" style="display:inline;"
                            onsubmit="return confirm('Are you sure you want to delete this student?');">
                                @csrf
                                @method('DELETE')
                                <button type="submit" class="btn btn-danger btn-sm">Delete</button>
                            </form>
                        </td>
                    </tr>
                @endforeach
            </tbody>
        </table>

        <div class="paginationDiv">
            {{ $students->appends(request()->query())->links('pagination::bootstrap-5') }}
        </div>
    </section>
@endsection
