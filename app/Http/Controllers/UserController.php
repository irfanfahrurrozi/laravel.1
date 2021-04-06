<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class UserController extends Controller
{
    public function index(){
        $name = 'Jennifer';
        $users = array(
            "name" => "Smith John",
            "email" => "smith@gmial.com",
            "phone" => "07773629"
        );
        return view('user',compact('name', 'users'));
    }
}
