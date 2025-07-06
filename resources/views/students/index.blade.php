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

        .search button{
            padding: 10px 15px;
            margin-left: 10px;
            background-color: #007bff;
            color: white;
            border: none;
            border-radius: 4px;
            cursor: pointer;
        }

        .search button:hover {
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
            background-color: #218838;
        }

        .deleteButton {
            background-color: #dc3545;
        }

        .deleteButton:hover {
            background-color: #c82333;
        }
    </style>
@endsection

@section('content')
    <section>
        <h2>Students List</h2>
        <form action={{ URL('student') }} method="GET">
            <div class="search">
                <input type="text" placeholder="Search by name or email" id="search" name="search">
                <button type="submit">Search</button>
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
                            <a href="#" class="editButton">Edit</a>
                            <a href="#" class="deleteButton">Delete</a>
                        </td>
                    </tr>
                @endforeach
            </tbody>
            {{-- <tbody>
                @foreach($students as $student)
                    <tr>
                        <td>{{ $student->name }}</td>
                        <td>{{ $student->email }}</td>
                        <td>
                            <a href="{{ route('students.edit', $student->id) }}" class="editButton">Edit</a>
                            <form action="{{ route('students.destroy', $student->id) }}" method="POST" style="display:inline;">
                                @csrf
                                @method('DELETE')
                                <button type="submit" class="deleteButton">Delete</button>
                            </form>
                        </td>
                    </tr>
                @endforeach
            </tbody> --}}
        </table>

        {{-- {{ $students->links() }} --}}
    </section>
@endsection
