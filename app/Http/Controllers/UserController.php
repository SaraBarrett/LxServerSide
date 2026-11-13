<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class UserController extends Controller
{
    public function allUsers() {
        $usersWDB = $this->loadUsersWDB();

        $usersFromDB = DB::table('users')
        ->select('name', 'address', 'email')
        ->get();
        
        dd($usersFromDB);

        return view('users.allusers', compact('usersWDB'));
    }

    public function addUsers () {
        $usersWDB = $this->loadUsersWDB();

        return view('users.addusers', compact('usersWDB'));
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
