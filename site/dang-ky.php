<?php
session_start();
require '../dao/khach-hang.php';

if (isset($_POST['btn_register'])) {
    $ma_kh = $_POST['id'];
    $password = $_POST['password'];
    $username = $_POST['username'];
    $ho_ten = $_POST['fullName'];
    $email = $_POST['email'];
    $status = $_POST['status'];
    $role = $_POST['role'];

    $mat_khau = md5($password);

    if (khach_hang_exist($username)) {
        $MESSAGE = "Tên đăng nhập đã tồn tại!";
        echo "<script>alert('$MESSAGE');</script>";
    } else {
        try {
            khach_hang_insert($username, $mat_khau, $ho_ten, $email, $status, $role);
            $_SESSION['id'] = $ma_kh;
            $_SESSION['password'] = $password;
            $_SESSION['username'] = $username;
            header('location: form.php');
          
        } catch (Exception $exc) {
            $MESSAGE = "Đăng ký thành viên thất bại! Lỗi: " . $exc->getMessage();

            echo "chưa rồi"; 
            echo "<script>alert('$MESSAGE');</script>";
        }
    }
}
?>