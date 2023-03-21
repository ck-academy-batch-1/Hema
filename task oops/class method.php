<?php
class Bicycle{
    //properties
    public $name;
    public $properties;

    function  set_name($name){
        $this->name =$name;
    }
    function  get_name(){
        return $this->name;
    }
    function  set_properties($properties){
        $this->properties =$properties;
     }
    
    function  get_properties(){
        return $this->properties;
    }
}

    $cycle=new Bicycle();
    $cycle->set_name('hero');
    $cycle->set_properties('glass');
    echo "name  :"." ".$cycle->get_name();
    echo"<br>";
    echo "properties  :"." ".$cycle->get_properties();
    echo"<br>";
?>