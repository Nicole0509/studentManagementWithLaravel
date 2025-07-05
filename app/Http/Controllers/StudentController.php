<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class StudentController extends Controller
{
   public function addData(){

    // Insert a single student record into the 'student' table
    // DB::table('student')->insert([
    //     'name' => 'tester',
    //     'email' => 'tester@gmail.com',
    //     'age' => 20,
    //     'date_of_birth' => '2003-01-01',       
    //     'gender' => 'M',       
    // ]);

    // Insert multiple student records into the 'student' table

    DB::table('student')->insert([
        ['name' => 'gffgfgf',
        'email' => 'testfgfgfger@gmail.com',
        'age' => 80,
        'date_of_birth' => '2003-01-01',       
        'gender' => 'M', 
        ],
        ['name' => 't687778gg',
        'email' => 'gytrtytry@gmail.com',
        'age' => 6,
        'date_of_birth' => '2003-01-01',       
        'gender' => 'F', 
        ],
        ['name' => 'tester',
        'email' => 'tester8888@gmail.com',
        'age' => 78,
        'date_of_birth' => '2793-01-01',       
        'gender' => 'M', 
        ],
    ]);

    return 'Student added successfully';
   }

   public function getData(){
    $items = DB::table('student')
    ->where('id', '=', 2)
    ->orWhere('name', 'like', '%test%')
    ->orderBy('id', 'desc')
    ->select('id', 'name',)
    ->get();
    return $items;
   }
}
