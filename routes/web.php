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

Route::get('update-data', [StudentController::class,'updateData']);

Route::get('delete-data', [StudentController::class,'deleteData']);

Route::get('where-conditions', [StudentController::class,'whereConditions']);

Route::get('query-scope1',[StudentController::class, 'callQueryScope1']);
Route::get('query-scope2',[StudentController::class, 'callQueryScope2']);