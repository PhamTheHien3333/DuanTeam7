<?php

// Include the database connection file
require_once '../dao/pdo.php';
require_once '../dao/khach-hang.php';
$login_url = '../site/form.php';


$username = $_POST['username'];
$email = $_POST['email'];


if (empty($username) || empty($email)) {
   
    echo "<script>alert('Vui lòng nhập đầy đủ username và email.');</script>";
    include '../site/quen_pass.php';
    exit();
}else{
  
}


$sql = "SELECT * FROM users WHERE username = :username AND email = :email";


try {
    $conn = pdo_get_connection();
    $stmt = $conn->prepare($sql);
} catch (PDOException $e) {
    
    echo "<script>alert('Lỗi: " . $e->getMessage() . "');</script>";
    exit();
}


$stmt->bindParam(':username', $username);
$stmt->bindParam(':email', $email);


try {
    $stmt->execute();
} catch (PDOException $e) {
    
    echo "<script>alert('Lỗi: " . $e->getMessage() . "');</script>";
    exit();
}


$row = $stmt->fetch(PDO::FETCH_ASSOC);


if ($row === null) {
    
    echo "<script>alert('Username và email không tồn tại trong cơ sở dữ liệu.');</script>";
    exit();
}


if($row){
  $password = $row['password'];
  
  echo "<script>alert('Mật khẩu của bạn là: $password');</script>";
}else{
  include '../site/quen_pass.php';
}



if (!empty($password)) {
  header('Location: ' . $login_url);
}
if ($stmt->rowCount() === 0) {
  echo "<script>alert('Username hoặc email không chính xác.');</script>";
  exit();
}else{
  include '../site/quen_pass.php';
}


