<?php
include 'db.php';

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $username = $_POST['username'];
    $password = password_hash($_POST['password'], PASSWORD_DEFAULT);

    echo "Username: $username<br>";
    echo "Password Hash: $password<br>";

    $sql = "INSERT INTO users (username, password) VALUES ('$username', '$password')";

    echo "SQL: $sql<br>";

    if ($conn->query($sql) === TRUE) {
        echo "New record created successfully";
    } else {
        echo "Error: " . $sql . "<br>" . $conn->error;
    }
} else {
    echo "No POST data received.<br>";
}
?>

<!DOCTYPE html>
<html>
<head>
    <title>Register</title>
    <link rel="stylesheet" type="text/css" href="css/styles.css">
</head>
<body>
    <nav>
        <a href="/index.php">Home</a>
        <a href="/register.php">Register</a>
        <a href="/login.php">Login</a>
    </nav>
    <div class="container">
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
    </div>
</body>
</html>
