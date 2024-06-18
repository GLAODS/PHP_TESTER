<?php
include 'db.php';
session_start();

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $username = $_POST['username'];
    $password = $_POST['password'];

    echo "Username: $username<br>";
    echo "Password: $password<br>";

    $sql = "SELECT * FROM users WHERE username='$username'";
    $result = $conn->query($sql);

    if ($result->num_rows > 0) {
        $row = $result->fetch_assoc();
        echo "User found: " . $row['username'] . "<br>";

        if (password_verify($password, $row['password'])) {
            $_SESSION['username'] = $username;
            echo "Login successful<br>";
            header("Location: welcome.php");
            exit();
        } else {
            echo "Invalid password<br>";
        }
    } else {
        echo "No user found<br>";
    }
} else {
    echo "No POST data received.<br>";
}
?>

<!DOCTYPE html>
<html>
<head>
    <title>Login</title>
    <link rel="stylesheet" type="text/css" href="css/styles.css">
</head>
<body>
    <nav>
        <a href="/index.php">Home</a>
        <a href="/register.php">Register</a>
        <a href="/login.php">Login</a>
    </nav>
    <div class="container">
        <h2>Login</h2>
        <form method="post" action="login.php">
            Username:<br>
            <input type="text" name="username" required>
            <br>
            Password:<br>
            <input type="password" name="password" required>
            <br><br>
            <input type="submit" value="Login">
        </form>
    </div>
</body>
</html>
