<?php

$servername = "153.92.15.25";
$username = "u644123111_ojie72";
$password = "L1nkstart!";
$dbname = "u644123111_tugaskp";

$conn = new mysqli($servername, $username, $password, $dbname);

if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}
?>
