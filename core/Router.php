<?php

class Router {

    protected $routes = [

        'GET' => [],
        'POST' => [],

    ];

    public static function load($file){

        $router = new static;

        require $file;

        return $router;

    }

    public function define($router)
    {
        $this->routes = $router;
    }

    public function direct($uri, $method)
    {

        if(array_key_exists($uri, $this->routes[$method])){

            return $this->routes[$method][$uri];
        }

        throw new Exception('This route '.$uri.' not found on this method'. $method);

    }

    public function get($uri, $controller)
    {

        $this->routes['GET'][$uri] = $controller;

    }

    public function post($uri, $controller)
    {

        $this->routes['POST'][$uri] = $controller;

    }

}