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
    //retrieve all student records from the 'student' table that have not been deleted
    $item = Student::all();

    //retrieve all student records from the 'student' table that have been soft deleted
    // $item = Student::onlyTrashed()->get();

    //retrieve all student records from the 'student' table, including those that have been soft deleted
    // but excluding those that have been permanently deleted
    // $item = Student::withTrashed()->get();

    //restoring a particular student record that was soft deleted from the 'student' table

    // $item = Student::withTrashed()->find(22)->restore();

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

    // for soft deleting a student record with id 19 and 22 from the 'student' table

    // $item = Student::findOrFail(19);
    // $item->delete();

    // $item = Student::findOrFail(22)->delete();

    //for permanently deleting a student record with id 22 from the 'student' table
    $item = Student::findOrFail(22)->forceDelete();

    return 'Student deleted successfully';

    // if(Student::where('deleted_at',null)->where('id', 29)->exists()){
    //     // Soft delete the student record with id 22
    //     Student::findOrFail(29)->delete();
    //     return 'Student was soft deleted successfully';
    // } else {
    //     // Permanently delete the student record with id 22
    //     Student::withTrashed()->findOrFail(29)->forceDelete();
    //     return 'Student permanently deleted successfully';
    // }

   }

   public function whereConditions(){

    //retrieve all students with age greater than 30 or score greater than or equal to 50

    // $items = Student::where('age', '>', 30)
    //                 ->orwhere('score', '>=', 50)
    //                 ->get();

    // retrieve all students with a score greater than or equal to 50
    // and age less than 20 or greater than 23

    // $items = Student::where('score', '>=', 50)
    //                 ->where(function($query) {
    //                     $query->where('age', '<', 20)
    //                     ->orWhere('age', '>', 23);
    //                 })
    //                 ->get();

    // retrieve all students with age between 18 and 20

    // $items = Student::whereBetween('age', [18,20])->get();

    // retrieve all students with age not between 18 and 20

    // $items = Student::whereNotBetween('age', [18,24])->get();

    //retrieve all students with id in the array [18,20,24]

    // $items = Student::whereIn('id', [18,20,24])->get();
    //retrieve all students with id not in the array [18,20,24]

    // $items = Student::whereNotIn('id', [18,20,24])->get();

    //2 ways to retrieve all students with age 25 or score 25

    // $items = Student::where('age',25)
    // ->orWhere('score', 25)
    // ->get();

    // $items = Student::whereAny(['age','score'],'=', 25)
    //     ->get();
    
    //2 ways to retrieve all students with age 25 and score 25 and id 25

    // $items = Student::where('age',25)
    // ->Where('score', 25)
    // ->where('id',25)
    // ->get();


    $items = Student::whereAll(['age','score','id'], '=', 25)->get();

    return $items;
   }

   public function callQueryScope1(){
    return Student::female()->get();
   }

   public function callQueryScope2(){
    return Student::female(20)->get();
   }
   
}
