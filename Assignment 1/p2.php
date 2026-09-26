<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Hello!</title>
</head>
<body>
    <form action = "p2.php" method = "post">
        <lable> Enter your username: </lable>
        <input type = "text" name = "user"> <br>
        <input type = "submit" name = "submit"> <br>
</form>
</body>
</html>

<?php
if($_SERVER["REQUEST_METHOD"] == "POST") {
    $username = $_POST["user"];
    echo $username;
}
?>