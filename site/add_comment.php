<?php
session_start();
// Kết nối đến cơ sở dữ liệu

require '../dao/binh-luan.php';

// Kiểm tra xem có dữ liệu được gửi từ form hay không
if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    // Lấy dữ liệu từ form
    $user = $_SESSION['username'];
    $id_sp = $_POST['productId'];
    $comment = $_POST['note']; // Ghi chú
    $user_id = $_SESSION['userId']; // Thay thế bằng user_id của người dùng đăng nhập

    // Kiểm tra xem có nhập đầy đủ thông tin hay không
    if ($user) {
        // Gọi hàm binh_luan_insert để chèn dữ liệu vào bảng comments
        binh_luan_insert($user_id, $id_sp, $comment, date('Y-m-d'), 0);

        // Chuyển hướng về trang danh sách bình luận hoặc trang chi tiết bình luận
        header("Location: detail.php?productId=" . $id_sp);
        exit;
    } else {
       echo  $user_id;
    }
}