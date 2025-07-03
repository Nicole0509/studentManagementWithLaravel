<?php

namespace App\Http\Controllers;

use App\Models\Teacher;
use Illuminate\Http\Request;

class TeacherController extends Controller
{
    //
    public function index()
    {
       return Teacher::all();
    }

    public function add()
    {
        $item = new Teacher();
        $item -> name= 'John Doe';
        $item -> save();

        return 'Teacher added successfully';
    }

    public function show($id){
        $item = Teacher::findOrFail($id);
        return $item;
    }

    public function update($id){
        $item = Teacher::findOrFail($id);
        $item->name = 'updated name';
        $item->save();

        return 'Teacher updated successfully';
    }

    public function delete($id){
        $item = Teacher::findOrFail($id);
        $item->delete();

        return 'Teacher deleted successfully';
    }
}
