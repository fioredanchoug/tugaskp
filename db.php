<?php

$servername = "153.92.15.25";
$username = "ojie72";
$password = "L1nkstart!";
$dbname = "tugaskp";

$conn = new mysqli($servername, $username, $password, $dbname);

if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}
?>
