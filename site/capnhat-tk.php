<?php
require '../global.php';
require '../dao/khach-hang.php';


extract($_REQUEST);

if (exist_param("btn_edit")) {
    #lấy dữ liệu từ form
    $ma_kh = $_REQUEST['userId'];
    $khach_hang_info = khach_hang_select_by_id($ma_kh);
    extract($khach_hang_info);

    //show dữ liệu
    $items = khach_hang_select_by_id($ma_kh);
    require 'suatk.php.php';
}else if (exist_param("btn_update")) {
        
        $up_hinh = save_file("up_hinh", "$UPLOAD_URL/users/");
        $hinh = strlen($up_hinh) > 0 ? $up_hinh : $hinh;
    
        tai_khoan_update($ho_ten, $email, $hinh, $phone, $address, $ma_kh);
        // khach_hang_update();
        //hiển thị danh sách
    
        $items = khach_hang_select_all();
        require 'capnhattk-form.php';
}else if (exist_param("btn_list")) {

             //show dữ liệu
        $items = khach_hang_select_by_id($ma_kh);
        require 'capnhattk-form.php';
 }