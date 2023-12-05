<?php
require_once 'pdo.php';
function don_hang_insert($ma_kh, $ma_hh, $noi_dung, $ngay_bl, $rating)
{
    $sql = "INSERT INTO bill(userId, productId, content, dateCmt, rating) VALUES (?,?,?,?,?)";

    pdo_execute($sql, $ma_kh, $ma_hh, $noi_dung, $ngay_bl, $rating);
}

function don_hang_delete($ma_bill)
{
    $sql = "DELETE FROM comments WHERE cmtId=?";
    if (is_array($ma_bill)) {
        foreach ($ma_bill as $ma) {
            pdo_execute($sql, $ma);
        }
    } else {
        pdo_execute($sql, $ma_bill);
    }
}
function don_hang_select_all()
{
    $sql = "SELECT * FROM bill b ORDER BY orderTime DESC";
    return pdo_query($sql);
}
function don_hang_select_by_id($ma_bill)
{
    $sql = "SELECT * FROM bill WHERE billId=?";
    return pdo_query_one($sql, $ma_bill);
}
function don_hang_exist($ma_bill)
{
    $sql = "SELECT count(*) FROM bill WHERE billId=?";
    return pdo_query_value($sql, $ma_bl) > 0;
}
function don_hang_select_by_khach_hang($ma_kh, $limit = 10)
{
    if (!isset($_REQUEST['page'])) {
        $_SESSION['page'] = 1;
    }
    if (!isset($_SESSION['total_page'])) {
        $_SESSION['total_page'] = 1;
    }
    $query = "SELECT count(*) FROM bill b
    JOIN users u ON u.userId = b.userId
    WHERE b.userId  = $ma_kh ORDER BY billId DESC";

    $_SESSION['total_bill'] = pdo_query_value($query);
    if (exist_param("page")) {
        $_SESSION['page'] = $_REQUEST['page'];
    }
    $begin = ($_SESSION['page'] - 1) * $limit;
    $_SESSION['total_page'] = ceil($_SESSION['total_bill'] / $limit);
    $sql = "SELECT b.*, k.username, k.fullName, k.img FROM bill b
    JOIN users k ON k.userId =b.userId WHERE b.userId=? ORDER BY billId DESC LIMIT $begin,$limit";
    return pdo_query($sql, $ma_kh);
}
