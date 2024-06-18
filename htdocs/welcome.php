<?php
ini_set('display_errors', 1);
ini_set('display_startup_errors', 1);
error_reporting(E_ALL);

session_start();

if (!isset($_SESSION['username'])) {
    header("Location: login.php");
    exit();
}

echo "Welcome, " . $_SESSION['username'] . "!";
?>

<!DOCTYPE html>
<html>
<head>
    <title>Welcome</title>
</head>
<body>
    <nav>
        <a href="index.php">Home</a> |
        <a href="register.php">Register</a> |
        <a href="login.php">Login</a> |
        <a href="logout.php">Logout</a>
    </nav>
    <h2>Welcome Page</h2>
    <p>You have successfully logged in.</p>
</body>
</html>
