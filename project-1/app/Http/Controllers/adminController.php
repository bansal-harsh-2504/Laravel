<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class adminController extends Controller
{
    public function display()
    {
        return "Hello world";
    }
    public function displayHtml()
    {
        return "<h1>Hello world</h1>";
    }
    public function displayCss()
    {
        return "<h1 style='color: red;'>Hello world</h1>";
    }
    public function displayJs()
    {
        return "<h1 style='color: red;'>Hello world</h1><script>alert('Hello world')</script>";
    }
}
