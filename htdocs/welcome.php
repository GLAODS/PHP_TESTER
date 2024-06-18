<?php
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
    <link rel="stylesheet" type="text/css" href="css/styles.css">
    <script src="js/scripts.js" defer></script>
</head>
<body>
    <nav>
        <a href="/index.php">Home</a>
        <a href="/register.php">Register</a>
        <a href="/login.php">Login</a>
        <a href="/logout.php">Logout</a>
    </nav>
    <div class="container">
        <h2>Welcome Page</h2>
        <p>You have successfully logged in.</p>
    </div>
</body>
</html>
