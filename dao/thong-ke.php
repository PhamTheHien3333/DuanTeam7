<?php
require_once 'pdo.php';
function thong_ke_hang_hoa()
{
    $sql = "SELECT lo.categoryId, lo.name,"
        . " COUNT(*) so_luong,"
        . " MIN(hh.price) gia_min,"
        . " MAX(hh.price) gia_max,"
        . " AVG(hh.price) gia_avg"
        . " FROM products hh "
        . " JOIN categories lo ON lo.categoryId=hh.categoryId "
        . " GROUP BY lo.categoryId, lo.name";
    return pdo_query($sql);
}
function thong_ke_binh_luan()
{
    $sql = "SELECT hh.productId, hh.name,"
        . " COUNT(*) so_luong,"
        . " MIN(bl.dateCmt) cu_nhat,"
        . " MAX(bl.dateCmt) moi_nhat"
        . " FROM comments bl "
        . " JOIN products hh ON hh.productId=bl.productId "
        . " GROUP BY hh.productId, hh.name"
        . " HAVING so_luong > 0";
    return pdo_query($sql);
}
function thong_ke_don_hang()
{
    $sql = "SELECT kh.userId, kh.username,"
        . " COUNT(*) so_luong,"
        . " MIN(b.oderTime) cu_nhat,"
        . " MAX(b.oderTime) moi_nhat"
        . " FROM bill b "
        . " JOIN users kh ON kh.userId=b.userId "
        . " GROUP BY kh.userId, kh.username"
        . " HAVING so_luong > 0";
    return pdo_query($sql);
}