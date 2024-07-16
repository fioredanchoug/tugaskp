<?php
session_start();

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    require_once "db.php";

    $username = $_POST['username'];
    $password = $_POST['password'];

    // Validate input
    $username = mysqli_real_escape_string($conn, $username);

    // Query the database for user
    $sql = "SELECT id, username, password_hash FROM users WHERE username = '$username'";
    $result = $conn->query($sql);

    if ($result->num_rows == 1) {
        // User found, verify password
        $row = $result->fetch_assoc();
        if (password_verify($password, $row['password_hash'])) {
            // Password is correct, start a session
            $_SESSION['user_id'] = $row['id'];
            $_SESSION['username'] = $row['username'];
            header("Location: welcome.php");  // Redirect to logged-in page
            exit;
        } else {
            $login_err = "Invalid username or password";
        }
    } else {
        $login_err = "Invalid username or password";
    }

    $conn->close();
}
?>
