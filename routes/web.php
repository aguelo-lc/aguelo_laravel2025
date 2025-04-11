<?php

use Illuminate\Support\Facades\Route;
use Illuminate\Http\Request;

Route::post('/login', function (Request $request) {
    $username = 'nica';
    $password = '123';

    if ($request->username === $username && $request->password === $password){
        return redirect()->route('dashboard');
    } else {
        return "Invalid credentials.";
    }
}) -> name('login.submit');

//
Route::get('/', function () {
    return view('welcome');
});

//for the route to the dashboard.
Route::get('/dashboard', function () {
    return view('dashboard');
}) -> name('dashboard');

//for the route to the login page.
Route::get('/login', function (){
    return view('login');
}) -> name('login');

