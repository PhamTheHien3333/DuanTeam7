<?php
require_once "../../dao/pdo.php";
require_once "../../dao/khach-hang.php";
require "../../global.php";
// check_login();

extract($_REQUEST);
if (exist_param("btn_list")) {

    //show dữ liệu
    $items = khach_hang_select_all();
    $VIEW_NAME = "list.php";
} else if (exist_param("btn_insert")) {
    #lấy dữ liệu từ form
    
    $tai_khoan = $_POST['username'];
    $ho_ten = $_POST['fullname'];
    $mat_khau = md5($_POST['password']);
    $email = $_POST['email'];
    $phone = $_POST['phone'];
    $address = $_POST['address'];
    $kich_hoat = $_POST['status'];
    $vai_tro = $_POST['role'];

    // Upload file lên host
    $hinh = save_file('img', "../../uploads/users/");
    //insert vào db
    khach_hang_insert($username, $mat_khau, $ho_ten, $email, $hinh, $address, $phone, $status, $role);

    //show dữ liệu
    $items = khach_hang_select_all();
    $VIEW_NAME = "list.php";
} else if (exist_param("btn_edit")) {
    #lấy dữ liệu từ form
    $ma_kh = $_REQUEST['userId'];
    $khach_hang_info = khach_hang_select_by_id($ma_kh);
    extract($khach_hang_info);

    //show dữ liệu
    $items = khach_hang_select_by_id($ma_kh);
    $VIEW_NAME = "edit.php";
} else if (exist_param("btn_delete")) {

    $ma_kh = $_REQUEST['userId'];
    khach_hang_delete($ma_kh);
    //hiển thị danh sách

    $items = khach_hang_select_all();
    $VIEW_NAME = "list.php";
} else if (exist_param("btn_delete_all")) {
    try {
        $arr_ma_kh = $_POST['userId'];
        khach_hang_delete($arr_ma_kh);
        $MESSAGE = "Xóa thành công!";
    } catch (Exception $exc) {
        $MESSAGE = "Xóa thất bại!";
    }
    $items = khach_hang_select_all();
    $VIEW_NAME = "list.php";
} else if (exist_param("btn_update")) {
    $ma_kh = $_POST['userId'];
    $tai_khoan = $_POST['username'];
    $ho_ten = $_POST['fullname'];
    $mat_khau = md5($_POST['password']);
    $email = $_POST['email'];
    $phone = $_POST['phone'];
    $address = $_POST['address'];
    $kich_hoat = $_POST['status'];
    $vai_tro = $_POST['role'];


    $up_hinh = save_file("up_hinh", "../../uploads/users/");
    $hinh = strlen($up_hinh) > 0 ? $up_hinh : $hinh;

    khach_hang_update($tai_khoan, $mat_khau, $ho_ten, $email, $hinh, $phone, $address, $kich_hoat, $vai_tro, $ma_kh);
    // khach_hang_update();
    //hiển thị danh sách

    $items = khach_hang_select_all();
    $VIEW_NAME = "list.php";
} else {
    $VIEW_NAME = "add.php";
}
require "../layout.php";