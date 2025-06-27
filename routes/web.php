<?php

use Illuminate\Support\Facades\Route;

// Route::get('/', function () {
//     return view('welcome');
// });


Route::get('/',function(){
    return 'Hello Nicole!';
});

Route::get ('about', function () {
    return 'About Us Page';
});


Route::prefix('details')->group(function(){
    Route::get ('/students', function () {
        return 'Details of Students';
    })->name('student-Details');

    Route::get ('/teachers', function () {
        return 'Details of Teachers';
    })->name('teacher-Details');

});

Route::get('student/{id}/{reg}',function($id, $reg){
    return 'Student ID is '.$id . ' and Registration Number is '.$reg;
})->name('student-id');

Route::fallback(function(){
    return 'This is a fallback route. The page you are looking for does not exist.';
});