<?php
class space{
    public $planet;
    public $satellite;

    function __construct($planet,$satellite){
        $this->planet =$planet;
        $this->satellite=$satellite;
    }    
    function __destruct(){
        echo "The  {$this->planet} is satellite of {$this->satellite} ";
}
}
//obj
$s=new space('moon','earth');

?>