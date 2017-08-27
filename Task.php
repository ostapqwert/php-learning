<?php

class Task{

    public $description;

    public $completed;


    public function getDescription()
    {
        return strtoupper($this->description);
    }



//    public function __construct($description)
//    {
//        $this->description = $description;
//    }
//
//    public function isComplited()
//    {
//        return $this->completed;
//    }
//
//    public function complete()
//    {
//        $this->completed = true;
//    }


}