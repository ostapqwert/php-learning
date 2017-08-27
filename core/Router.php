<?php

class Router {

    protected $routes = [];

    public static function load($file){

        $router = new static;

        require $file;

        return $router;

    }

    public function define($router)
    {
        $this->routes = $router;
    }

    public function direct($uri)
    {

        if(array_key_exists($uri, $this->routes)){

            return $this->routes[$uri];
        }

        throw new Exception('This route '.$uri.' not found');

    }
}