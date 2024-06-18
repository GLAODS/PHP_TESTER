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
<body>

<h2>Welcome Page</h2>
<p>You have successfully logged in.</p>
<a href="logout.php">Logout</a>

</body>
</html>
