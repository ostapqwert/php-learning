<?php
use App\Core\App;

App::bind('config', require 'config.php');
App::bind('database', new QueryBuilder(Connection::make(App::get('config')['database'])));


function view($view, $data = null)
{
    if($data)
        extract($data);

    require "views/{$view}.view.php";
}

