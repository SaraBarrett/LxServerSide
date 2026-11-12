<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
})->name('welcome');

Route::get('/hello/{message}', function ($message) {
    return '<h1>Hello '.$message.'</h1>';
});

//rota de homepage
Route::get('/homepage', function () {
    return view('home');
})->name('home');

//rotas de users
Route::get('/users', function () {
    return view('users.allusers');
})->name('users.all');

Route::get('/add-users', function () {
    return view('users.addusers');
})->name('users.add');


//rota fallback
Route::fallback(function(){
    return view('utils.fallback');
});


