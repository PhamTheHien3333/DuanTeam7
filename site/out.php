<?php
session_start(); // Bắt đầu phiên làm việc

// Kiểm tra xem người dùng đã đăng nhập hay chưa
if (isset($_SESSION['username'])) {
    // Xóa tất cả các biến phiên và hủy phiên làm việc
    $_SESSION = array();
    session_destroy();

    // Chuyển hướng người dùng đến trang đăng nhập hoặc trang chính của bạn
    header("Location: index.php");
    exit();
} else {
    // Nếu người dùng chưa đăng nhập, chuyển hướng người dùng đến trang đăng nhập hoặc trang chính của bạn
    header("Location: form.php");
    exit();
}
?>