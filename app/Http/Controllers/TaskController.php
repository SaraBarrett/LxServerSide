<?php

namespace App\Http\Controllers;

use App\Models\Task;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class TaskController extends Controller
{
    public function allTasks(){
        $tasks=$this->getAllTasks();

        //tarefas do id 4
        // Task::TaskByUser(4);

        //chamar pela variável do modelo
        // Task::STATUS_COMPLETED;

        return view('tasks.allTasks', compact('tasks'));
    }


    protected function getAllTasks(){
        $tasks= Task::join('users', 'tasks.user_id','=' ,'users.id')
        ->select('tasks.id', 'tasks.due_at', 'tasks.status', 'tasks.name','users.name as user_name')
        ->get();



        return $tasks;
    }
}
