
<?php
class mobile{
    public $video;
    public $audio;
    function __construct($up,$down){
    $this->audio=$up;
    $this->video=$down;
}
}
$Mobile=new mobile('Increment','Decrememt');
echo$Mobile->video;
echo "<br>";
echo$Mobile->audio;
?>
