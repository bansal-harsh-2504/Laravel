<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class MyController extends Controller
{
    public function showView()
    {
        return view('welcome');
    }
    public function sendData()
    {
        $name = "John Doe";
        $age = 25;
        return view('user', compact('name', 'age'));
    }
}
