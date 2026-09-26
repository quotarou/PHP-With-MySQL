<?php

if (!empty($_SERVER['HTTPS']) && $_SERVER["HTTPS"] !== "off")
    echo "This request is using HTTPS.";
else
    echo "This request is using HTTP.";

?>