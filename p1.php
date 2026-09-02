<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Number in Range</title>
</head>
<body>
    <h1>Check if any number is in the range of 20 to 50</h1>
    <form action="p1.php" method="post">
        <label>First Number: </label>
        <input type="text" name="num1"> <br>
        <label>Second Number: </label>
        <input type="text" name="num2"> <br>
        <label>Third Number: </label>
        <input type="text" name="num3"> <br>
        <input type="submit" value="Check">
    </form>
</body>
</html>

<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $num1 = $_POST['num1'];
    $num2 = $_POST['num2'];
    $num3 = $_POST['num3'];

    $flag = 0;

    if ($num1 >= 20 and $num1 <= 50) {
        $flag = 1;
    }

    if ($num2 >= 20 and $num2 <= 50) {
        $flag = 1;
    }

    if ($num3 >= 20 and $num3 <= 50) {
        $flag = 1;
    }

    if ($flag == 1) {
        echo "True";
    } else {
        echo "False";
    }

}

?>
