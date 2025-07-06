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
   
}
