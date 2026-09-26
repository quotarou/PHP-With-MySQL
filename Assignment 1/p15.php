<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <form action="p15.php" method="post">
      <lable>Enter your marks: </lable>
       <input type="number" name="num1" /> <br>
      
    <input type="submit" value="Submit"/> <br>
    </form>
    
</body>
</html>

<?php
if($_SERVER["REQUEST_METHOD"] == "POST") { 

    $x =$_POST["num1"];

    if ($x>800 and $x<=1000) {
    echo"$x is Class I.";
    } else if ($x>600 and $x<=800) {
    echo "$x is Class II.";
    } else if ($x>=400 and $x<=600) {
     echo "$x is Class III.";
    } else if ($x<400){
    echo"Fail.";
    } else {
    echo"Invalid input. Please enter valid marks.";
    }
}
?>