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

//rota de apagar users

Route::get('/delete-users/{id}',[UserController::class, 'deleteUsers'] )->name('users.delete');

//rota para ver /editar users
Route::get('/edit-users/{id}',[UserController::class, 'editUsers'] )->name('users.edit');


//rota de registar users
Route::post('/store-users', [UserController::class, 'storeUser'])->name('users.store');


//rota de actualizar users
Route::put('/update-user', [UserController::class, 'updateUser'])->name('users.update');



//rotas de tarefas
Route::get('/tasks', [TaskController::class, 'allTasks'])->name('tasks.all');
Route::get('/delete-tasks/{id}',[TaskController::class, 'deleteTasks'] )->name('tasks.delete');
Route::get('/edit-tasks/{id}',[TaskController::class, 'editTasks'] )->name('tasks.edit');

Route::get('/add-task',[TaskController::class, 'addTasks'] )->name('tasks.add');

Route::post('/store-add-task', [TaskController::class, 'storeTasks'])->name('tasks.store');





//rota fallback
Route::fallback(function(){
    return view('utils.fallback');
});


