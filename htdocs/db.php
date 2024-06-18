<?php
$servername = "sql212.infinityfree.com";
$username = "if0_36742561";
$password = "j2PTb1M595Sh"; // 실제 비밀번호 사용
$dbname = "if0_36742561_TEST_DB";

// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);

// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}
?>
