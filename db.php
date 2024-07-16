<?php

$servername = "localhost";  
$username = "u644123111_ojie7248";     
$password = "Ojie7248";     
$dbname = "u644123111_kp";  


$conn = new mysqli($servername, $username, $password, $dbname);

// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}
?>
