<?php
trait space{
    public function msg(){
        echo "world";
    }
}
class earth{
    use space;
}
$obj=new earth();
$obj->msg();
?>

