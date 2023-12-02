<?php
require_once 'pdo.php';
function khach_hang_insert_admin($tai_khoan, $mat_khau, $ho_ten, $email, $hinh, $phone, $address, $status, $role)
{
    $sql = "INSERT INTO users(username,password,fullName,email,img,phone,address,status,role) VALUES(?,?,?,?,?,?,?,?,?)";
    pdo_execute($sql, $tai_khoan, $mat_khau, $ho_ten, $email, $hinh, $phone, $address, $status, $role);
}
function khach_hang_insert($username, $mat_khau, $ho_ten, $email, $status, $role)
{
  try {
    $sql = "INSERT INTO users(username, password, fullName, email, status, role, address) VALUES (?, ?, ?, ?, ?, ?,'')";
    pdo_execute($sql, $username, $mat_khau, $ho_ten, $email, $status, $role);
  } catch (Exception $exc) {
    $MESSAGE = "Đăng ký thành viên thất bại! Lỗi: " . $exc->getMessage();
    echo "<script>alert('$MESSAGE');</script>";
  }
}
function khach_hang_update($tai_khoan, $mat_khau, $ho_ten, $email, $hinh, $phone, $address, $kich_hoat, $vai_tro, $ma_kh)
{
    $sql = "UPDATE users SET username=?,password=?,fullName=?,email=?,img=?,phone=?,address=?,status=?,role=? WHERE userId=?";
    pdo_execute($sql,$tai_khoan, $mat_khau, $ho_ten, $email, $hinh, $phone, $address,$kich_hoat, $vai_tro, $ma_kh);
}

function tai_khoan_update($tai_khoan, $ho_ten, $email, $hinh, $phone, $address, $ma_kh)
{
    $sql = "UPDATE users SET username=?,password=?,fullName=?,email=?,img=?,phone=?,address=?,status=?,role=? WHERE userId=?";
    pdo_execute($sql,$tai_khoan, $ho_ten, $email, $hinh, $phone, $address, $ma_kh);
}
function khach_hang_delete($ma_kh)
{
    $sql = "DELETE FROM users WHERE userId=?";
    if (is_array($ma_kh)) {
        foreach ($ma_kh as $ma) {
            pdo_execute($sql, $ma);
        }
    } else {
        pdo_execute($sql, $ma_kh);
    }
}
function khach_hang_select_all()
{
    $sql = "SELECT * FROM users";
    return pdo_query($sql);
}
function khach_hang_select_by_id($ma_kh)
{
    $sql = "SELECT * FROM users WHERE userId=?";
    return pdo_query_one($sql, $ma_kh);
}
function khach_hang_select_by_username($username)
{
    $sql = "SELECT * FROM users WHERE username=?";
    return pdo_query_one($sql, $username);
}
function khach_hang_exist_by_email($email) {
    $sql = "SELECT COUNT(*) FROM users WHERE email = ?";
    $row = pdo_query_one($sql, $email);

    return $row['COUNT(*)'] > 0;
}
function khach_hang_exist($username)
{
    $sql = "SELECT * FROM users WHERE username=?";
    return pdo_query_value($sql, $username);
}

function khach_hang_exist_email($email)
{
    $sql = "SELECT count(*) FROM users WHERE email=?";
    return pdo_query_value($sql, $email) > 0;
}

function khach_hang_change_password($ma_kh, $mat_khau_moi)
{

    $sql = "UPDATE users SET password=? WHERE userId=?";
    pdo_execute($sql, $mat_khau_moi, $ma_kh);
}