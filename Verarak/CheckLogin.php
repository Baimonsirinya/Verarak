<?php
session_start();
include "connect.php";

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $username = $_POST['username'];
    $password = $_POST['password'];

    $sql = "SELECT * FROM users WHERE username = :username AND password = :password";
    $stmt = $pdo->prepare($sql);
    $stmt->bindParam(':username', $username);
    $stmt->bindParam(':password', $password);
    $stmt->execute();

    $user = $stmt->fetch(PDO::FETCH_ASSOC);

    if ($user) {
        $_SESSION['username'] = $user['username'];
        $_SESSION['role'] = $user['role'];

        if ($user['role'] == 'user') {
            echo 'user';
        } elseif ($user['role'] == 'admin') {
            echo 'admin';
        } elseif ($user['role'] == 'doctor') {
            echo 'doctor';
        } 

    } else {
        echo 'failed'; // ส่งค่า 'failed' กลับไปให้ JavaScript เพื่อระบุว่าการเข้าสู่ระบบไม่สำเร็จ
    }
}
?>