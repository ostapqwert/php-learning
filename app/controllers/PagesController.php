<?php

namespace App\Controllers;

use App\Core\App;

class PagesController
{

    public function index()
    {

        $tasks = App::get('database')->selectAll('todos');

        return view('index');

    }

    public function contacts()
    {

        $phone = "223123123";
        return view('contacts', ['phone' => $phone]);

    }

    public function about()
    {

        App::get('database')->insert('users', ['name'=>'mani']);

        return view('about');

    }



}