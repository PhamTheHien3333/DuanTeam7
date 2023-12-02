<!DOCTYPE html>
<html lang="en">


<head>
    <meta charset="utf-8">
    <title>CDH - Hóa Đơn</title>
    <meta content="width=device-width, initial-scale=1.0" name="viewport">
    <meta content="Free HTML Templates" name="keywords">
    <meta content="Free HTML Templates" name="description">

    <!-- Favicon -->
    <link href="img/favicon.ico" rel="icon">

    <!-- Google Web Fonts -->
    <link rel="preconnect" href="https://fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@100;200;300;400;500;600;700;800;900&display=swap"
        rel="stylesheet">

    <!-- Font Awesome -->
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.10.0/css/all.min.css" rel="stylesheet">

    <!-- Libraries Stylesheet -->
    <link href="../lib/owlcarousel/assets/owl.carousel.min.css" rel="stylesheet">

    <!-- Customized Bootstrap Stylesheet -->
    <link href="../css/style.css" rel="stylesheet">
</head>

<!-- body -->

<body class="main-layout inner_page">
    <!-- loader  -->
    <!-- end loader -->
    <!-- header -->

    <!-- end header -->
    <!-- contact -->
    <div class="contact">
        <div class="container-fluid" id="history">
            <div class="history">
                <h1 class="text-center">LỊCH SỬ ĐẶT HÀNG</h1>
                <table class="table table-striped">
                    <tr>

                        <th>
                            ID
                        </th>
                        <th>
                            Tên
                        </th>
                        <th>
                            Số lượng
                        </th>
                        <th>
                            Đơn giá
                        </th>
                        <th>
                            Tổng tiền
                        </th>
                        <th>
                            Thời gian đặt
                        </th>


                    </tr>

                    <?php
                    session_start();
                    if (isset($_SESSION['username'])) {
                        require '../dao/pdo.php';
                        $id_kh = $_SESSION['userId'];
                        $conn = pdo_get_connection();

                        try {
                            $hoadon = $conn->prepare("SELECT * FROM bill WHERE userId = :userId");
                            $hoadon->bindParam(':userId', $id_kh);
                            $hoadon->execute();

                            while ($hd = $hoadon->fetch(PDO::FETCH_ASSOC)) {
                                $id_hd = $hd['billId'];
                                $tongtien = $hd['total'];
                                $tgdat = $hd['oderTime'];

                                $chitiethoadon = $conn->prepare("SELECT * FROM detail_bills WHERE billId = :billId");
                                $chitiethoadon->bindParam(':billId', $id_hd);
                                $chitiethoadon->execute();

                                foreach ($chitiethoadon as $cthd) {
                                    $id_sp = $cthd['productId'];
                                    $sanpham = $conn->prepare("SELECT * FROM products WHERE productId = :productId");
                                    $sanpham->bindParam(':productId', $id_sp);
                                    $sanpham->execute();
                                    $sp = $sanpham->fetch(PDO::FETCH_ASSOC);
                                    $ten_sanpham = $sp['name'];
                                    echo "<tr>";
                                    echo "<td>{$id_hd}</td>";
                                    echo "<td>{$ten_sanpham}</td>";
                                    echo "<td>{$cthd['quantity']}</td>";
                                    echo "<td>" . number_format($cthd['price']) . "</td>";
                                    echo "<td>" . number_format($tongtien) . "</td>";
                                    echo "<td>{$tgdat}</td>";
                                    echo "</tr>";
                                }
                            }
                        } catch (PDOException $e) {
                            // Xử lý lỗi truy vấn
                            die("Lỗi truy vấn: " . $e->getMessage());
                        }

                        $conn = null; // Đóng kết nối PDO
                    }
                    ?>

                </table>
            </div>
        </div>
    </div>
    <?php include './footer.php'?>
    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js"
        integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous">
    </script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js"
        integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous">
    </script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js"
        integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous">
    </script>
</body>

</html>