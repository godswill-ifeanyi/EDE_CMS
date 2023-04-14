<?php

$dbHost = "localhost";
$dbUser = "root";
$dbPass = "";
$dbName = "my_ede_cms";

$conn = mysqli_connect($dbHost,$dbUser,$dbPass, $dbName);

if (!$conn) {
    die("Database connection failed");
}

?>