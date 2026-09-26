<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Paragraph Search</title>
</head>
<body>
    <form action="p16.php" method="post">
        <lable>Enter your paragraph: </lable>
        <textarea name="para" rows="10" cols="30" > </textarea> <br>
        <lable>Enter the word you want to find: </lable>
        <input type="text" name="word" /> <br>
        <input type="submit" value="Submit"/>
    </form>
    
</body>
</html>

<?php
if($_SERVER["REQUEST_METHOD"] == "POST") { 
    $text = $_POST["para"];
    $word = $_POST["word"];

    $us = str_contains($text, $word);
    echo "$us";
}
?>