<?php

function dd($value){
    echo '<pre>';
    die(var_dump($value));
    echo '</pre>';
}


function connectToDB(){
    try {

        return new PDO('mysql:host=127.0.0.1;dbname=phplearn;', 'root', 'password');

    } catch (Exception $e){
        echo $e->getMessage();
    }
}


function fetchAllTasks($pdo){
    $statement = $pdo->prepare('select * from todos');
    $statement->execute();

    return $statement->fetchAll(PDO::FETCH_CLASS, 'Task');
}