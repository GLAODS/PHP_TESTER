<?php
ini_set('display_errors', 1);
ini_set('display_startup_errors', 1);
error_reporting(E_ALL);

$servername = "sql212.infinityfree.com";
$username = "if0_36742561";
$password = "j2PIb1M59SSh";
$dbname = "if0_36742561_TEST_DB";
$port = 3306; // Optional

// Create connection
$conn = new mysqli($servername, $username, $password, $dbname, $port);

// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}
echo "Connected successfully";
?>
