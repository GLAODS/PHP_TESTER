<?php
ini_set('display_errors', 1);
ini_set('display_startup_errors', 1);
error_reporting(E_ALL);

include 'db.php';

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $username = $_POST['username'];
    $password = password_hash($_POST['password'], PASSWORD_DEFAULT);

    $sql = "INSERT INTO users (username, password) VALUES ('$username', '$password')";

    if ($conn->query($sql) === TRUE) {
        echo "New record created successfully";
    } else {
        echo "Error: " . $sql . "<br>" . $conn->error;
    }
}
?>

<!DOCTYPE html>
<html>
<head>
    <title>Register</title>
</head>
<body>
    <nav>
        <a href="index.php">Home</a> |
        <a href="register.php">Register</a> |
        <a href="login.php">Login</a>
    </nav>
    <h2>Register</h2>
    <form method="post" action="register.php">
        Username:<br>
        <input type="text" name="username" required>
        <br>
        Password:<br>
        <input type="password" name="password" required>
        <br><br>
        <input type="submit" value="Register">
    </form>
</body>
</html>
