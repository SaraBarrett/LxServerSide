<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class TaskController extends Controller
{
    public function allTasks(){
        $tasks=$this->getAllTasks();

        return view('tasks.allTasks', compact('tasks'));
    }


    protected function getAllTasks(){
        $tasks= DB::table('tasks')
        ->join('users', 'tasks.user_id','=' ,'users.id')
        ->select('tasks.id', 'tasks.due_at', 'tasks.status', 'tasks.name','users.name as user_name')
        ->get();



        return $tasks;
    }
}
