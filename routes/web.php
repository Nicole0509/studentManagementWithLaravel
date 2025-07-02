<?php

use App\Http\Controllers\SecondTestController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\StudentController;
use App\Http\Controllers\TestController;

Route::get('/', function () {
    return view('welcome');
});

Route::view('contact-us/', 'contactus');

Route::controller(StudentController::class)->group(function()
{
    Route::get('students', 'index');
    Route::get('about-us/', 'aboutUs');
});

Route::get('invoke',TestController::class);

Route::resource('second-test',SecondTestController::class);