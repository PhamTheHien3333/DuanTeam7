<?php

session_start();
require '../dao/pdo.php';

if (isset($_POST['thanhtoan'])) {
    $phone = $_POST['phone'];
    $address = $_POST['address'];

    if ($phone == '' || $address == '') {
        echo "<script>
                alert('Không thể thanh toán vì thiếu thông tin');
              </script>";
    } else {
        if (isset($_SESSION['username'])) {
            $id_kh = $_POST['userId'];
            $tongtien = $_POST['tongtien'];
            $username = $_SESSION['username'];
            $sdt = $_POST['phone'];
            $diachi = $_POST['address'];

            if (isset($_COOKIE['cart'])) {
                $cookie_data = $_COOKIE['cart'];
                $cart_data = json_decode($cookie_data, true);

                $pdo = pdo_get_connection(); // Lấy đối tượng kết nối PDO

                $insert_hoadon = "INSERT INTO bill (phone, address, total, userId) VALUES (:phone, :address, :total, :userId)";
                $stmt = $pdo->prepare($insert_hoadon);
                $stmt->bindParam(':phone', $sdt);
                $stmt->bindParam(':address', $diachi);
                $stmt->bindParam(':total', $tongtien);
                $stmt->bindParam(':userId', $id_kh);
                if ($stmt->execute()) {
                    $id_hd = $pdo->lastInsertId();

                    $insert_chitiethoadon = "INSERT INTO detail_bills (billId, productId, quantity, price) VALUES (:billId, :productId, :quantity, :price)";
                    $stmt = $pdo->prepare($insert_chitiethoadon);
                    $stmt->bindParam(':billId', $id_hd);
                    $stmt->bindParam(':productId', $id_sp);
                    $stmt->bindParam(':quantity', $soluong);
                    $stmt->bindParam(':price', $gia);

                    foreach ($cart_data as $key => $value) {
                        $id_sp = $value['productId'];
                        $soluong = $value['soluong'];
                        $gia = $value['sale'];
                        $stmt->execute();
                    }

                    setcookie("cart", "", time() -  3600 * 24 * 30 * 12);
                    if (isset($_COOKIE['cart'])) {
                        setcookie("cart", "", time() -  3600 * 24 * 30 * 12);
                    }
                }
            }
        }
        header('location: bill.php');
    }
}
