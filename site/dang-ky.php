<?php
session_start();
require '../dao/khach-hang.php';

// Khởi tạo biến $MESSAGE với giá trị ban đầu là rỗng
$MESSAGE = "";

if (isset($_POST['btn_register'])) {
    $ma_kh = isset($_POST['id']) ? $_POST['id'] : '';
    $password = $_POST['password'];
    $username = $_POST['username'];
    $ho_ten = $_POST['fullName'];
    $email = $_POST['email'];
    $status = isset($_POST['status']) ? $_POST['status'] : '';
    $role = isset($_POST['role']) ? $_POST['role'] : '';

    $mat_khau = md5($password);

    if (khach_hang_exist($username)) {
        $MESSAGE = "Tên đăng nhập đã tồn tại!";
    }
    elseif (khach_hang_exist_by_email($email)) {
        $MESSAGE  = "Email đã được sử dụng";
    } else {
        try {
            khach_hang_insert($username, $mat_khau, $ho_ten, $email, $status, $role);
            $_SESSION['id'] = $ma_kh;
            $_SESSION['password'] = $password;
            $_SESSION['username'] = $username;
            header('location: form.php');
            exit();
        } catch (Exception $exc) {
            $MESSAGE = "Đăng ký thành viên thất bại! Lỗi: " . $exc->getMessage();
        }
    }
}

// Hiển thị form và thông báo lỗi
require './dangkyloi.php';
?>
