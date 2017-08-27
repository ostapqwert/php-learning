<?php

class Requests {

    public static function uri(){
        return trim($_SERVER['REQUEST_URI'], '/');
    }

}