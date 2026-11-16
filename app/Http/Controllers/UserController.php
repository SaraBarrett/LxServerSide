<?php

namespace App\Http\Controllers;

use App\Models\Task;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class UserController extends Controller
{
    public function allUsers() {
        $usersWDB = $this->loadUsersWDB();

        $usersFromDB = User::select('id','name', 'address', 'email','nif')
        ->get();
        //$usersFromDB = User::all();


        return view('users.allusers', compact('usersWDB','usersFromDB'));
    }

    public function addUsers () {
        $usersWDB = $this->loadUsersWDB();

        return view('users.addusers', compact('usersWDB'));
    }


    public function deleteUsers(int $id){

        //posso fazer um pedaço de código que por exemplo atribui as tarefas do user a outro user

        Task::where('user_id',$id)->delete();

        User::where('id', $id)->delete();

        return back();

    }


    public function editUsers(int $id){
        $userInfo = User::where('id', $id)->select('name','email', 'id', 'address','nif')->first();

        return view('users.edituser', compact('userInfo'));

    }

    private function loadUsersWDB(){
        $usersWithoutDB = [
            ['id'=>1, 'name' => 'Sara', 'email' => 'sara@gmail.com'],
            ['id'=>2, 'name' => 'Bruno', 'email' => 'Bruno@gmail.com'],
            ['id'=>3, 'name' => 'Marco', 'email' => 'Marco@gmail.com'],
            ['id'=>4, 'name' => 'António', 'email' => 'António@gmail.com']
        ];

        return $usersWithoutDB;
    }


}
