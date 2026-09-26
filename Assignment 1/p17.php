<!DOCTYPE html>
<html>
<head>
    <title>Register</title>
</head>
<body>
    <h2>User Registration</h2>
    <form action="p17.php" method="post">
        <label>Full Name: </label>
        <input type="text" name="fullname"> <br>
        <label>Date of Birth: </label>
        <input type="date" name="dob"> <br>
        <label>Email: </label>
        <input type="text" name="email"> <br>
        <label>Mobile (10 digits): </label>
        <input type="text" name="mobile"> <br>
        <button type="submit">Register</button>
    </form>
</body>
</html>

<?php

if ($_SERVER['REQUEST_METHOD'] == 'POST') {

    $fullname = trim($_POST['fullname']);
    $dob = $_POST['dob'];
    $email = trim($_POST['email']);
    $mobile = trim($_POST['mobile']);

    $flag = 0;

    $words = array_filter(explode(' ', $fullname));

    if (count($words) !== 2) {
        echo 'Full name must be exactly two words. <br>';
        $flag = 1;
    }

    if ($dob) {
        $birth = new DateTime($dob);
        $age = (new DateTime())->diff($birth)->y;
        if ($age < 18) {
            echo "You are $age. Must be 18 or older. <br>";
            $flag = 1;
        }
    } else {
        echo 'Date of birth is required. <br>';
        $flag = 1;
    }

    if (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
        echo 'Enter a valid email address. <br>';
        $flag = 1;
    }

    if (!preg_match('/^[0-9]{10}$/', $mobile)) {
        echo 'Mobile must be exactly 10 digits. <br>';
        $flag = 1;
    }

    if ($flag == 0)
        echo 'Registration Successful!';
}

?>
