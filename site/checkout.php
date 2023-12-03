<?php
session_start();
if (empty($_COOKIE['cart'])) {
    header('location: shop.php');
}

if (empty($_SESSION['username'])) {
    header('location: form.php');
}

?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <title>EShopper - Bootstrap Shop Template</title>
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
<style>
.boder-coler {
    border: 1px inset rgba(58, 4, 71, 0.75);
}

.border-coler {
    border-top: 1px inset rgba(58, 4, 71, 0.75);
    border-bottom: none;
    border-right: none;
    border-left: none;
}

/* .text-bill-primary {
    color: rgba(58, 4, 71, 0.75) !important;
} */
.ml {
    margin-left: 15rem;
}
</style>

<body class="main-layout inner_page">
    <!-- loader  -->
    <!-- end loader -->
    <!-- header -->
    <?php 
    session_abort();
    include './header-cart.php' ?>
    <!-- end header -->

    <h2 class="ml font-weight-semi-bold text-danger">Thanh Toán</h2>
    <!-- contact -->
    <div class="contact">
        <div class="container pt-5 ">

            <div class="row ">
                <div class="col-sm-6 boder-coler">
                    <h5 class="text-center text-danger text-bill-primary pt-5">ĐƠN HÀNG CỦA BẠN </h5>
                    <table class="table">
                        <thead>
                            <tr>
                                <th>ID</th>
                                <th>Tên</th>
                                <th>Giá</th>
                                <th>Số lượng</th>
                            </tr>
                        </thead>
                        <tbody>

                            <?php
                        $cookie_data = $_COOKIE['cart'];
                        $cart_data = json_decode($cookie_data, true);

                        $tongtatca = 0;
                        // var_dump($cart_data);
                        foreach ($cart_data as $sp) :
                            $tongtien = $sp['sale'] * $sp['soluong'];
                            $tongtatca += $tongtien;
                        ?>
                            <tr>
                                <td scope="row"><?= $sp['productId'] ?></td>
                                <td><?= $sp['name'] ?></td>
                                <td> <?= number_format($sp['sale']) ?> đ</td>
                                <td width="200px">
                                    <?= $sp['soluong'] ?>

                                </td>
                            </tr>
                            <?php
                        endforeach;
                        ?>

                            <tr>
                                <td colspan="3">Thanh toán</td>
                                <td>
                                    <b><?= number_format($tongtatca) ?> đ</b>
                                </td>
                                <td></td>
                            </tr>

                        </tbody>
                    </table>
                </div>
                <div class="col-sm-4 border-coler mx-5">
                    <?php
                $username = $_SESSION['username'];
        require '../dao/khach-hang.php';

        $khachhang = khach_hang_select_by_username($username);
                ?>

                    <h5 class="text-center text-danger text-bill-primary pt-5 ">THÔNG TIN THANH TOÁN</h5>

                    <form action="checkout-xuly.php" method="post">
                        <input type="hidden" name="userId" id="" value="<?= $khachhang['userId'] ?>">
                        <div class="form-group">
                            <label class="font-weight-semi-bold text-dark" for="fullName">Họ và Tên</label>
                            <input type="text" name="fullName" id="" value="<?= $khachhang['fullName'] ?>"
                                class="form-control">
                        </div>
                        <div class="form-group">
                            <label class="font-weight-semi-bold text-dark" for="phone">Số điện thoại</label>
                            <input type="text" name="phone" id="" value="<?= $khachhang['phone'] ?>"
                                class="form-control" required>
                        </div>
                        <div class="form-group">
                            <label class="font-weight-semi-bold text-dark" for="address">Địa chỉ</label>
                            <textarea name="address" id="" rows="5" class="form-control"
                                required><?= $khachhang['address'] ?></textarea>
                        </div>
                        <input type="hidden" name="tongtien" id="" value="<?= $tongtatca ?>">

                        <button class="btn btn-outline-dark rounded-lg" name="thanhtoan">ĐẶT HÀNG</button>
                    </form>
                </div>


            </div>
        </div>
    </div>
    <?php include './footer.php' ?>
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