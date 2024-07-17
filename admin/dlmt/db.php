<?php
// admin_users.php
header('Content-Type: application/json');

$servername = "localhost";
$username = "root";
$password = "";
$dbname = "test";

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
