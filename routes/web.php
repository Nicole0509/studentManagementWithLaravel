<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});

Route::get('about-us/{name}/{id}',function($name, $id){
    // $name = 'tester';
    // $email = 'tester@gmail.com';
    // return view('aboutus')->with('name',$name)->with('email',$email);
    // return view('aboutus', compact('name', 'email'));
    // return view('aboutus', ['name' => $name, 'email' => $email]);

    return view('aboutus', compact('name', 'id'));
});

// Route::view('contact-us', 'contactus',['name' => 'John Doe', 'email' => 'tester@gmail.com']);
Route::view('contact-us/{name}/{id}', 'contactus');


// Route::get('/',function(){
//     return 'Hello Nicole!';
// });

// Route::get ('about', function () {
//     return 'About Us Page';
// });


// Route::prefix('details')->group(function(){
//     Route::get ('/students', function () {
//         return 'Details of Students';
//     })->name('student-Details');

//     Route::get ('/teachers', function () {
//         return 'Details of Teachers';
//     })->name('teacher-Details');

// });

// Route::get('student/{id}/{reg}',function($id, $reg){
//     return 'Student ID is '.$id . ' and Registration Number is '.$reg;
// })->name('student-id');

// Route::fallback(function(){
//     return 'This is a fallback route. The page you are looking for does not exist.';
// });