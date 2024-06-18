<?php
session_start();

// DB 연결 설정
include 'db.php';

// POST 요청으로 받은 사용자 입력 값
$username = $_POST['username'];
$password = $_POST['password'];

// 사용자 인증 로직
$query = "SELECT * FROM users WHERE username = '$username' AND password = '$password'";
$result = mysqli_query($conn, $query);

if (mysqli_num_rows($result) > 0) {
    // 인증 성공
    $_SESSION['username'] = $username;
    header('Location: welcome.php');
    exit;
} else {
    // 인증 실패
    echo "Invalid username or password";
}
?>
