<?php
require '../global.php';
require '../dao/khach-hang.php';

// Khởi tạo biến $MESSAGE với giá trị ban đầu là rỗng
$MESSAGE = '';

// Khởi tạo biến kiểm tra lỗi
$errorOccurred = false;

if (exist_param("btn_login")) {
    $username =  $_POST["username"];
    $password = $_POST["password"];
    $mat_khau = md5($password);
    $user = khach_hang_select_by_username($username);
    if ($user) {
        if ($user['password'] == $mat_khau) {
            if ($user['role'] == 1) {
                header('Location: ../admin/trang-chinh');
                exit(); // Thêm dòng này để dừng thực thi mã tiếp theo
            } else {
                if (exist_param('ghi_nho')) {
                    add_cookie("username", $ma_kh, 30);
                    add_cookie("password", $mat_khau, 30);
                } else {
                    delete_cookie("username");
                    delete_cookie("password");
                }
                $_SESSION["user"] = $user;
                header('Location: ./index.php');
                exit(); // Thêm dòng này để dừng thực thi mã tiếp theo
            }
        } else {
            $MESSAGE = "Sai mật khẩu!";
            $errorOccurred = true; // Đánh dấu rằng có lỗi xảy ra
        }
    } else {
        $MESSAGE = "Sai tên đăng nhập!";
        $errorOccurred = true; // Đánh dấu rằng có lỗi xảy ra
    }

    // Nếu có lỗi, thực hiện Redirect để tải lại trang mà không giữ lại thông báo lỗi
    if ($errorOccurred) {
        require './form.php';
        exit(); // Thêm dòng này để dừng thực thi mã tiếp theo
    }
}

// Hiển thị form và thông báo lỗi

?>