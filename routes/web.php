<?php

use App\Http\Controllers\StudentController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\TeacherController;
use App\Models\Student;
use App\Models\Teacher;

Route::get('/', function () {
    return view('welcome');
});

Route::get('add-data',[StudentController::class, 'addData']);

Route::get('get-data', [StudentController::class,'getData']);