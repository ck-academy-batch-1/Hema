

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
     <title>Electricity Billing System</title>
</head>
<body>
    <h1>Electricity Billing System</h1>
    <form method="post">
        <label for="units">Please enter the number of electricity units consumed:</label>
        <input type="number" id="units" name="units" min="0" required><br><br>
        <input type="submit" name="submit" value="Submit">
        <input type="submit" name="reset" value="Reset">
    </form>
    <?php
        if (isset($_POST['submit'])) {
            $units = $_POST['units'];
            $ratePerUnit = 10; // rate per unit  electricity
            $totalAmount = $units * $ratePerUnit;
            echo "<br><br><h3>Electricity bill for $units units:</h3>";
            echo "Rate per unit: $ratePerUnit<br>";
            echo "Total amount: $totalAmount";
        }
    ?>
</body>
</html>




<!--<body>
    <h1>Electricity Billing System</h1>
    <form method="post" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]);?>">
        <label for="units">Please enter the number of electricity units consumed:</label>
        <input type="number" id="units" name="units" min="0" required><br><br>
        <input type="submit" name="submit" value="Submit">
        <input type="submit" name="reset" value="Reset">
    </form>
    
        if ($_SERVER["REQUEST_METHOD"] == "POST") {
            $units = $_POST['units'];
            $ratePerUnit = 10; // rate per unit of electricity
            $totalAmount = $units * $ratePerUnit;
            echo "<br><br><h3>Electricity bill for $units units:</h3>";
            echo "Rate per unit: $ratePerUnit<br>";
            echo "Total amount: $totalAmount";
        }-->
  