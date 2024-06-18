<?php
// DB 연결 설정
include 'db.php';

// POST 요청으로 받은 사용자 입력 값
$username = $_POST['username'];
$password = $_POST['password'];

// 사용자 등록 로직 (기본적인 예시)
$query = "INSERT INTO users (username, password) VALUES ('$username', '$password')";
if (mysqli_query($conn, $query)) {
    echo "Registration successful";
    header('Location: login.php');
    exit;
} else {
    echo "Error: " . $query . "<br>" . mysqli_error($conn);
}
?>
