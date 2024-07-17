<?php
// admin_users.php
header('Content-Type: application/json');

$sname= "localhost";
$unmae= "u644123111_ojie7248";
$password = "Ojie7248";

$db_name = "u644123111_kp";

// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);

// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

// Fetch users with usertype 'admin'
$sql = "SELECT * FROM users WHERE usertype = 'users'";
$result = $conn->query($sql);

$users = array();
if ($result) {
    while ($row = $result->fetch_assoc()) {
        $users[] = $row;
    }
} else {
    echo json_encode(["error" => "Error fetching users"]);
}

$conn->close();

echo json_encode($users);
?>
