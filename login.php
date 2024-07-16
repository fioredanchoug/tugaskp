<?php
session_start();
require('db_conn.php'); // Your database connection script

$username = $_POST['username'];
$password = $_POST['password'];

// Example: check in table1
$query1 = "SELECT * FROM users WHERE username = ?";
$stmt1 = $pdo->prepare($query1);
$stmt1->execute([$username]);
$user1 = $stmt1->fetch();

// Example: check in table2
$query2 = "SELECT * FROM admin WHERE username = ?";
$stmt2 = $pdo->prepare($query2);
$stmt2->execute([$username]);
$user2 = $stmt2->fetch();

if ($user1 && password_verify($password, $user1['password'])) {
    $_SESSION['user_table'] = 'users';
    header('Location: welcome.php');
    exit();
} elseif ($user2 && password_verify($password, $user2['password'])) {
    $_SESSION['user_table'] = 'admin';
    header('Location: welcome.php');
    exit();
} else {
    // Handle incorrect login
    header('Location: login.php?error=1');
    exit();
}
?>
