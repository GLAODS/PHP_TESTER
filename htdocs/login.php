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
