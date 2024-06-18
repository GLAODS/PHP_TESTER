<?php
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
<body>

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
