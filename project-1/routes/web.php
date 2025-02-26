<?php

use Illuminate\Support\Facades\Route;

Route::get('/*', function () {
    return view('welcome');
});

Route::get('/view', function () {
    return view('home');
});

//Passing data to view
//1. Passing an associative array
Route::get('/array', function () {
    return view('user', ['name' => 'John Doe', 'age' => 25]);
});

//2. compact
Route::get('/compact', function () {
    // return view('compact', ['name' => 'John']);
    $name = 'Ajay';
    $age = 22;
    return view("user", compact('name', 'age'));
});

//3. with
Route::get('/with', function () {
    return view('user')
        ->with('name', 'John Doe')
        ->with('age', 25);
});

//required
Route::get('/para/{data}', function ($data) {
    return $data;
});

//optional
Route::get('/para/{data?}', function ($data) {
    return $data;
});

//default
Route::get('/para/{data?}', function ($data = 'hello') {
    return $data;
});
