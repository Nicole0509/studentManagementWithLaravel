<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\StudentController;

Route::get('/', function () {
    return view('welcome');
});

// Route::get('about-us/',function(){
//     return view('aboutus');
// });

Route::view('contact-us/', 'contactus');

Route::controller(StudentController::class)->group(function()
{
    Route::get('students', 'index');
    Route::get('about-us/', 'aboutUs');
});
