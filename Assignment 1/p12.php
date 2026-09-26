<?php

echo $undefinedvar;

$lasterror = error_get_last();

if($lasterror !== null) {
    echo "Error Type: " . $lasterror["type"] . "<br>";
    echo "Message: " . $lasterror["message"] . "<br>";
    echo "File: " . $lasterror["file"] . "<br>";
    echo "Line: " . $lasterror["line"] . "<br>";
} else {
    echo "No errors have occurred.";
}

?>