<?php

namespace App\Controllers;

use App\Core\App;

class PagesController
{

    public function index()
    {

        $tasks = App::get('database')->selectAll('todos');

        require 'views/index.view.php';

    }

    public function contacts()
    {

        $phone = "223123123";
        return view('contacts', ['phone' => $phone]);

    }

    public function about()
    {

        App::get('database')->insert('users', ['name'=>'mani']);
        require 'views/about.view.php';

    }



}