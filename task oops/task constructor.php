<?php
class computer{
    public $indevice;
    public $outdevice;

function __construct($in,$out){
    $this->indevice=$in;
    $this->outdevice=$out;
}
}
//obj
$system=new computer('mouse','moniter');
echo $system->indevice;
echo "<br>";
echo $system->outdevice;
?>