<?php

namespace App\Http\Controllers;

use App\Models\Student;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class StudentController extends Controller
{
   public function addData(){

    // Add a new student record to the 'student' table using Eloquent ORM
    $item = new Student();

    $item->name = 'tester';
    $item->email = 'tester@gmail.com';
    $item->age = 20;
    $item->date_of_birth = '2003-01-01';
    $item->gender = 'M';
    $item->score = 66;     
    $item->save();

    return 'Student added successfully';
   }

   public function getData(){
    $item = Student::all();
    // $item = Student::select('id', 'name', 'score', 'age')
    // ->where('id','>',19)
    // ->first();
    // ->find(19);


    return $item;
   }

   public function updateData(){
    // two ways to find a record in the 'student' table using Eloquent ORM
    $item = Student::find(19);
    // $item = Student::where('id', 19)->first();

    $item->name = 'updated name';
    $item->age = 100;
    $item->save();

    return 'Student updated successfully';
   }

   public function deleteData(){
    // $item = Student::findOrFail(19);
    // $item->delete();

    $item = Student::findOrFail(21)->delete();

    return 'Student deleted successfully';
   }
   
}
