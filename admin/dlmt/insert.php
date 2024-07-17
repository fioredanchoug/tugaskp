<?php
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

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $name = $_POST['name'];
    $email = $_POST['email'];
    $password = $_POST['password'];

    $sql = "INSERT INTO users (username, password, email, usertype) VALUES ('$name', '$password', '$email', 'users')";

    if ($conn->query($sql) === TRUE) {
        header("Location: krl.php");
    } else {
        echo "Error: " . $sql . "<br>" . $conn->error;
    }

    $conn->close();
}
?>
