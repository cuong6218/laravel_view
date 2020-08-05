<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class UserController extends Controller
{

    public function showListUser(){
        $users = [['id' => 1,
            'name' => 'Bob',
            'age' => 12,
            'email' => 'bob@gmail.com',
            'address' => 'England',
            'role_id' => 1],
            ['id' => 2,
                'name' => 'John',
                'age' => 13,
                'email' => 'john@gmail.com',
                'address' => 'Thailand',
                'role_id' => 2],
            ['id' => 3,
                'name' => 'Lidsey',
                'age' => 14,
                'email' => 'lidsey@gmail.com',
                'address' => 'America',
                'role_id' => 2],
            ['id' => 4,
                'name' => 'Adam',
                'age' => 15,
                'email' => 'adam@gmail.com',
                'address' => 'Viet Nam',
                'role_id' => 2]
        ];
        return view('layout.users.list', compact('users'));
    }
    public function showDetail($id){
        dd($id);
        return view('layout.users.list', compact('id'));
    }
}
