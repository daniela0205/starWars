<?php

// Login credentials
$servername = "127.0.0.1:3307";
$username = "root";
$password = "admin";
$database = "user";

//PUT@13Icn%0DJ/p@

// Create connection
$conn = mysqli_connect($servername, $username, $password, $database);

// Check connection
if (!$conn) {
    die("Connection failed: " . mysqli_connect_error());
}
//echo "Connected successfully";
?>

