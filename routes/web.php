<?php

use App\Http\Controllers\StudentController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\TeacherController;
use App\Models\Student;
use App\Models\Teacher;

Route::get('/', function () {
    return view('welcome');
});

Route::prefix('students')->controller(StudentController::class)->group(function () {
    Route::get('/', 'index');
});