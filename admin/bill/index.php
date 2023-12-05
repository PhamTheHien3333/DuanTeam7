<?php

require_once "../../dao/pdo.php";
require_once "../../dao/don-hang.php";
require_once "../../dao/thong-ke.php";
require "../../global.php";
// check_login();

extract($_REQUEST);
if (exist_param("ma_kh")) {

    if (exist_param("btn_delete")) {
        try {
            don_hang_delete($ma_bill);
            $MESSAGE = "Xóa thành công";
        } catch (Exception $exc) {
            $MESSAGE = "Xóa thất bại";
        }
    } else if (exist_param("btn_delete_all")) {
        try {
            $arr_ma_bill = $_POST['ma_bill'];
            don_hang_delete($arr_ma_bill);
            $MESSAGE = "Xóa thành công!";
        } catch (Exception $exc) {
            $MESSAGE = "Xóa thất bại!";
        }
        // $items = binh_luan_select_by_hang_hoa($ma_hh);
        $VIEW_NAME = "detail.php";
    }

    $items = don_hang_select_by_khach_hang($ma_kh);

    if (count($items) == 0) {
        $items = thong_ke_don_hang();
        $VIEW_NAME = "list.php";
    } else {
        $VIEW_NAME = "detail.php";
    }
} else {
    $items = thong_ke_don_hang();
    $VIEW_NAME = "list.php";
}

require "../layout.php";