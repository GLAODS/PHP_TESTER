<?php include 'header.php'; ?>
<div class="container">
    <h2>Register</h2>
    <form action="register_process.php" method="post">
        <input type="text" name="username" placeholder="Username" required>
        <input type="password" name="password" placeholder="Password" required>
        <input type="submit" value="Register">
    </form>
</div>
<?php include 'footer.php'; ?>
