<?php

namespace App\Controllers;

use App\Core\App;

class UsersController
{
    public function index()
    {
        $users = App::get('database')->selectAll('users');

        return view('index', ['users'=>$users]);
    }

    public function store()
    {

        App::get('database')->insert('users', [

            'name'=> $_POST['name']

        ]);

        return header('Location: /users');

    }
}