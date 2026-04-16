<?php
$host = "localhost";
$user = "root";
$password = "";
$dbname = "hotel";

$con = mysqli_connect($host, $user, $password, $dbname);

if (!$con) {
    die("Database connection failed: " . mysqli_connect_error());
}
?>