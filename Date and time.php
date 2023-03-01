<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <style>
        h1{
            text-align:center;
            color:purple;
        }
        h2{
            color:gray;
        }
        body{
            margin-left:20px;
        }
       
    </style>
</head>

<body>

<h1>Date and time</h1>
    <h2>Date:</h2>
    <?php
    echo "Today is  " . date("l")."<br>";
    echo "Today is " . date("Y/m/d") . "<br>";
    echo "Today is " . date("Y.m.d") . "<br>";
    echo "Today is " . date("Y-m-d") . "<br>";
 ?>
 <hr>
 <h2>Time:</h2>
    <?php
    date_default_timezone_set("Asia/kolkata");
    echo "The time is " . date("h:i:sa");
    ?>
    </br>
    <hr>
<h2>mk time:</h2>
    
    &copy; 2020-<?php echo date("Y");?>
    <?php
   $t=mktime(4, 00, 1, 3, 1, 2023);
   echo "Created date is " . date("Y-m-d h:i:sa", $t);
   ?>
   <hr>

   <h2>Time zone:</h2>
   
   <?php
    date_default_timezone_set("Asia/kolkata");
    echo "The time is " . date("h:i:sa");
    ?>
    <br>
     <?php
    date_default_timezone_set("Asia/kolkata");
    echo "The time is " . date("H:i:sa");
    ?>
    </br>
    <hr>
   

<h2>String to time:</h2>
<?php
$d=strtotime("4:00pm march 1 2023");
echo "Created date is " . date("Y-m-d h:ia", $d);
?>
<hr>    
</body>
</html>