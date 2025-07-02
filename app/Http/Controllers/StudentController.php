<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class StudentController extends Controller
{
    //

    public function index(){
        return 'hello from the controller';
    }

    public function aboutUs(){
        return 'this is hi from the aboutUs mathod from the controller';
    }
}
