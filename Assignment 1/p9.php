<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>E-mail Validation</title>
</head>
<body>
    <form action = "p9.php" method = "POST">
        <lable>"Enter your E-mail Address: "</lable>
        <input type = "text" name = "email"> <br>
        <input type = "submit" name = "submit">
    </form>
</body>
</html>

<?php
if($_SERVER["REQUEST_METHOD"] == "POST") {
    $email = $_POST["email"];

    if(empty($email))
        echo "Email is required.";
    else if(!filter_var($email, FILTER_VALIDATE_EMAIL))
        echo "Invalid Email format. Please enter a valid E-mail address.";
}
?>
