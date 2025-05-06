<?php

use App\Http\Controllers\MyController;
use Illuminate\Support\Facades\Route;

Route::get('/*', function () {
    return view('welcome');
});

Route::get('user16', function () {
    return response()->json([
        'name' => 'John Doe',
        'age' => 25
    ]);
});

Route::get("user17", function () {
    return response("Header Set", 203)->header("Content-Type", "application/json");
});

Route::redirect('/about', '/home');

Route::get("programmers/engineering/b-tech/about", function () {
    return view('about');
})->name('about');

Route::get("programmers/engineering/b-tech/user", function () {
    return view('user');
})->name('user');

Route::get('/view', function () {
    return view('home');
});

Route::get('/welcome', [MyController::class, 'showView']);

Route::get('/send', [MyController::class, 'sendData']);

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

//4. with-name
Route::get('/with-name', function () {
    $x = 10;
    $y = 20;
    return view('user')
        ->withX($x)
        ->withY($y);
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

//middleware
Route::view('/home', 'home')->middleware([ageCheck::class]);

Route::get('/admin', function () {
    return view('admin');
});

Route::get("set", [SessionController::class, "set"]);
Route::get("get", [SessionController::class, "get"]);
Route::get("delete", [SessionController::class, "delete"]);
Route::get("flush", [SessionController::class, "flush"]);


Route::get("local", function () {
    return view('local');
});