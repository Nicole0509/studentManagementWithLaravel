<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class StudentController extends Controller
{
    protected $name;
    public function __construct()
    {
        $this->name = 'My name';
    }

    public function index(){
        return 'hello from the controller';
    }

    public function aboutUs(){
        // $name = $this->priveteMethod();

        // return $name;
        return $this->name;
    }
    
    private function priveteMethod() {
        // This is a private method that can be used within this controller
        return 'This is a private method';
    }
}
