<?php

namespace App\Http\Controllers;

use App\Models\Student;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class StudentController extends Controller
{
   public function index(Request $request){
      $students = Student::when($request->search,function($query)use($request){
         return $query->whereAny([
            'name',
            'age',
            'email',
            'gender',
            'date_of_birth',
            'score',
         ],'like', '%' .  $request->search . '%');
      })->paginate(10);

      return view('students.index',compact('students'));
   }

   public function create(Request $request){

      $request->validate([
         'name' => 'required | string |max:255',
         'email' => 'required | email | max:255 | unique:student,email',
         'age' => 'required | integer | min:0 | max:100',
         'date_of_birth' => 'required | date',
         'gender'=> 'required | in: M,F',
         'score' => 'required | numeric | min:0 | max:100',
      ],[
         'name.required' => 'Name is required',
         'email.required' => 'Email is required',
         'email.unique' => 'Email already exists',
         'age.required' => 'Age is required',
         'date_of_birth.required' => 'Date of birth is required',
         'gender.required' => 'Please choose an option for gender',
         'score.required' => 'Score is required',
      ]);

      $student = new Student();
      $student->name = $request->name;
      $student->email = $request->email;
      $student->age = $request->age;
      $student->gender  = $request->gender;
      $student->date_of_birth = $request->date_of_birth;
      $student->score = $request->score;
      $student->save();

      return redirect('student');  
   }

   public function edit($id){
      $student = Student::findOrFail($id);

      return view('students.edit', compact('student'));
   }

   public function update(Request $request, $id){
      $student = Student::findOrFail($id);

      $student->name = $request->name;
      $student->email = $request->email;
      $student->age = $request->age;
      $student->gender  = $request->gender;
      $student->date_of_birth = $request->date_of_birth;
      $student->score = $request->score;
      $student->update();

      return redirect('student');

   }

   public function destroy($id){
      $student = Student::findOrFail($id)->delete();

      return redirect('student');
   }
   
}
