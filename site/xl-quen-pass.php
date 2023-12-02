
<?php
$result = null;
include '../dao/pdo.php';
include '../dao/khach-hang.php';
$conn = pdo_get_connection();

if (isset($_POST['btn_forgot_pass'])) {
  $username = $_POST['username'];
  $email = $_POST['email'];
    $password = ['password'];
  $query = "SELECT * FROM users WHERE username = '$username' AND email = '$email'";
$khachhang = khach_hang_select_all();
  if ($khachhang) {
foreach($khachhang as $khachhangf) {
    
}
    echo '<script>alert("Thông tin tài khoản và email chính xác. Mật khẩu của bạn là: 123456  ");</script>';

    header('location: ../index.php');
  } else {

    echo '<script>alert("Thông tin tài khoản hoặc email không chính xác. Vui lòng kiểm tra lại.");</script>';
  }
}

?>

