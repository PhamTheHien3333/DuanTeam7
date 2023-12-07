<?php
require '../global.php';
require '../dao/hang-hoa.php';
require '../dao/loai.php';
//-------------------------------//


extract($_REQUEST);

if (exist_param("ma_loai")) {

    $name_loai = loai_select_by_id($ma_loai);
    extract($name_loai);
    $title_site = "Các sản phẩm thuộc loại : '$ten_loai' ";

    $items = hang_hoa_select_by_loai($ma_loai);
} else if (exist_param("dac_biet")) {
    $title_site = "Sản phẩm đặc biệt";
    $items = hang_hoa_select_dac_biet();
} else if (exist_param("timkiem")) {
    $kyw = $_GET['kyw'];

} else {

    $items = hang_hoa_select_keyword($kyw);
}
$hh_db = hang_hoa_select_dac_biet();
$ds_loai = loai_select_all();
require 'timkiem.php';