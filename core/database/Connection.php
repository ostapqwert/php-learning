<?php

class Connection {

    public static function make($config)
    {

        try {

            return new PDO($config['connection'].";dbname=".$config['database'].";",

                $config['username'],
                $config['password'],
                $config['options']);

        } catch (Exception $e){
            echo $e->getMessage();
        }

    }
}