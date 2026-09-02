<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Closest Number</title>
</head>
<body>
    <h2>Find the closest number to 100</h2>
    <form action="p2.php" method="post">
        <label>First Number: </label>
        <input type="text" name="num1"> <br>
        <label>Second Number: </label>
        <input type="text" name="num2"> <br>
        <input type="submit" value="Check">
    </form>
</body>
</html>

<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {

    $num1 = $_POST['num1'];
    $num2 = $_POST['num2'];

    if ((abs(100 - $num1) < abs(100 - $num2))) {
        echo "The closest number to 100 is " . $num1;
    } else if ((abs(100 - $num1) > abs(100 - $num2))) {
        echo "The closest number to 100 is " . $num2;
    } else {
        echo "0";
    }
}

?>