<?php

$servername = "https://auth-db1367.hstgr.io/";  
$username = "u644123111_ojie72";     
$password = "L1nkstart!";     
$dbname = "u644123111_tugaskp";  


$conn = new mysqli($servername, $username, $password, $dbname);

// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}
?>
