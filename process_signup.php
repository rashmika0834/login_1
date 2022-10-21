<?php

if (empty($_POST["name"])){
    die("Name is required");
}

if( ! filter_var($_POST["email"], FILTER_VALIDATE_EMAIL)){
    die("Not a valid email address");
}

$mysqli = require __DIR__ . "/signup.php";
print_r($_POST);
?>
