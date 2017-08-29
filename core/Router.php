<?php

namespace App\Core;


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

            //return $this->routes[$method][$uri];
            list($controller, $action) = explode('@', $this->routes[$method][$uri]);
            return $this->callAction($controller, $action);

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

    private function callAction($controller, $action)
    {
        $controller = "App\\Controllers\\{$controller}";

        $controller = new $controller;

        if(!method_exists($controller, $action)){
            throw new Exception('this action does not exist');
        }

        return $controller->$action();

    }

}