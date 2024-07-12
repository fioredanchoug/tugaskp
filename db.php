<?php

session_start();

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $username = $_POST['username'];
    $password = $_POST['password'];


$servername = "153.92.15.25";
$username = "u644123111_ojie72";
$password = "L1nkstart!";
$dbname = "u644123111_tugaskp";

$conn = new mysqli($servername, $username, $password, $dbname);

if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}
?>
