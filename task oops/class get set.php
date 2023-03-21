<?php
class Bicycle{
    //properties
    public $name;
    public $properties;

    function  set_name($name){
        $this ->name =$name;
    }
    function  get_name($name){
        return $this ->$name;
    }
 }
 ?>