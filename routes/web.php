<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\TeacherController;
use App\Models\Teacher;

Route::get('/', function () {
    return view('welcome');
});

// Route::get('teachers',function(){
//     return Teacher::all();
// });

Route::get('teacher',[TeacherController::class,'index']);
Route::get('add-teacher',[TeacherController::class,'add']);
Route::get('show-teacher/{id}',[TeacherController::class,'show']);
Route::get('update-teacher/{id}',[TeacherController::class,'update']);
Route::get('delete-teacher/{id}',[TeacherController::class,'delete']);