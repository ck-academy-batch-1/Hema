<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>pattern</title>
</head>
<body>
    <?php

// this loop prints the upper half of the star pattern
for($i=1; $i<=5; $i++) {
for($j=1; $j<=$i; $j++) {
echo '*';
}
echo '<br>';
}
// this loop prints the lower half of the pattern
for($i=1; $i<=5; $i++) {
for($j=5; $j>=$i; $j--) //loop to print stars
{
echo '*';
}
echo '<br>';
}
?>
    
</body>
</html>