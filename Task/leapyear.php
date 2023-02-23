<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>leap year</title>
</head>
<body>
  
<?php 
/* 
$year = 2036;  
 
if((0 == $year % 4) & (0 != $year % 100) | (0 == $year % 400))
{
echo "$year is a Leap Year.";    
}
 
else  
{  
echo "$year is not a Leap Year.";    
}*/
?> 




<?php  

for($year=2000;$year<=2030;$year++)
{
    if($year%4==0)
    {



echo "$year: is a Leap Year.<br> <br>";    
}

else  
{  
echo "$year: is not a Leap Year.  <br><br>";    
}
}
?> 
 
    
 
    
</body>
</html>