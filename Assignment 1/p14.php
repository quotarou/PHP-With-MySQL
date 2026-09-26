<!DOCTYPE html>
<html>
<head>
    <title>Circle Calculator</title>
</head>
<body>
    <h2>Circle Calculator</h2>
    <form action="p14.php" method="post">
        <label for="radius">Enter Radius:</label>
        <input type="number" step="any" name="radius" id="radius" required>
        <button type="submit" name="calculate">Calculate</button>
    </form>
</body>
</html>

<?php
if($_SERVER["REQUEST_METHOD"] == "POST") {  

    $radius = floatval($_POST['radius']);

    if ($radius > 0) {
        $circumference = 2 * M_PI * $radius;
        $area = M_PI * pow($radius, 2);
        echo "<h3>Results:</h3>";
        echo "Radius: " . $radius . "<br>";
        echo "Circumference: " . number_format($circumference, 2) . "<br>";
        echo "Area: " . number_format($area, 2) . "<br>";
    } else {
        echo "Please enter a positive number for the radius.";
    }
}
?>