<?php
require '../global.php';
require '../dao/khach-hang.php';



if (exist_param("btn_login")) {
    $username =  $_POST["username"];
    $password = $_POST["password"];
    $mat_khau = md5($password);
    $user = khach_hang_select_by_username($username);
    if ($user) {
        if ($user['password'] == $mat_khau) {

            if (exist_param('ghi_nho')) {
                add_cookie("username", $ma_kh, 30);
                add_cookie("password", $mat_khau, 30);
            } else {
                delete_cookie("username");
                delete_cookie("password");
            }
            $_SESSION["user"] = $user;
            
            $ten_vai_tro =  $user['role'] == 0 ? "" : "nhân viên ";
            header('Location: ./index.php ');
            $ten_vai_tro =  $user['role'] == 0 ? "" : "nhân viên ";
        }
        
        else {
            $MESSAGE = "Sai mật khẩu!";
            echo "<script>
        alert('Không thể đăng nhập vì . " . $MESSAGE . "'); 
   </script>";
        }
    } 
    else{
        $MESSAGE = "Sai tên đăng nhập!";
        echo "<script>
    alert('Không thể đăng nhập vì ." . $MESSAGE . "'); 
</script>";
    }
  
} else {

}
