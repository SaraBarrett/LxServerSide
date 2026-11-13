<?php

use App\Http\Controllers\TaskController;
use App\Http\Controllers\UserController;
use App\Http\Controllers\UtilController;
use Illuminate\Support\Facades\Route;

Route::get('/', [UtilController::class, 'loadWelcome'])->name('welcome');


Route::get('/hello/{message}', function ($message) {
    return '<h1>Hello '.$message.'</h1>';
});

//rota de homepage
Route::get('/homepage', [UtilController::class, 'loadHomepage'])->name('home');

//rotas de users
Route::get('/users', [UserController::class, 'allUsers'])->name('users.all');

Route::get('/add-users',[UserController::class, 'addUsers'] )->name('users.add');

//rotas de tarefas
Route::get('/tasks', [TaskController::class, 'allTasks'])->name('tasks.all');


//rota fallback
Route::fallback(function(){
    return view('utils.fallback');
});


