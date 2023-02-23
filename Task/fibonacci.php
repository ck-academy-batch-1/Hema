<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>fibonacci</title>
</head>
<h2>fibonacci<h2>
<body>
    <?php
$n = 20; // Number of terms in the series
$f = 0;
$s= 1;

for($i=1; $i<=$n; $i++){
    echo $f." ";
    $t= $f + $s;
    $f = $s;
    $s = $t;
}
?>


    
</body>
</html>