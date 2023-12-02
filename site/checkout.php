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
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@100;200;300;400;500;600;700;800;900&display=swap" rel="stylesheet">

    <!-- Font Awesome -->
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.10.0/css/all.min.css" rel="stylesheet">

    <!-- Libraries Stylesheet -->
    <link href="../lib/owlcarousel/assets/owl.carousel.min.css" rel="stylesheet">

    <!-- Customized Bootstrap Stylesheet -->
    <link href="../css/style.css" rel="stylesheet">
    <link rel="stylesheet" href="../css/stylePay.css">
</head>
<style>

</style>

<body>
    <?php
    include("headerCart.php");
    ?>


    <!-- Checkout Start -->
    <div class="container-fluid pt-5">
        <div class="row px-xl-5">
            <div class="col-lg-7">
                <div class="mb-4">
                    <h4 class="font-weight-semi-bold mb-4 text-center">Thông tin thanh toán</h4>
                    <div class="d-flex">
                        <div class="row col-md-6">
                            <div class="col-md-12 form-group">
                                <label class="font-weight-bold text-dark" for="name">Họ và tên:</label>
                                <input class="form-control custom-input" name="name" id="name" type="text" placeholder="Vui lòng nhập họ và tên">
                            </div>
                            <div class="col-md-12 form-group">
                                <label class="font-weight-bold text-dark" for="email">Email:</label>
                                <input class="form-control custom-input" name="email" id="email" type="email" placeholder="Vui lòng nhập email ">
                            </div>
                            <div class="col-md-12 form-group">
                                <label class="font-weight-bold text-dark" for="phone">Số điện thoại:</label>
                                <input class="form-control custom-input" name="phone" id="phone" type="phone" placeholder="Vui lòng nhập số điện thoại của bạn">
                            </div>
                            <div class="col-md-12 form-group">
                                <label class="font-weight-bold text-dark" for="address">Địa chỉ:</label>
                                <br>
                                <!-- <input class="form-control" type="text" placeholder="Vui lòng nhập địa chỉ hiện tại của bạn"> -->
                                <textarea class="custom-textarea" name="address" id="address" cols="100" rows="8"></textarea>
                            </div>
                        </div>
                        <div class="row col-md-6">
                            <h5 class="font-weight-semi-bold text-center thannhtoan">Chọn phương thức thanh toán</h5>
                            <div class="card-body-pay ">
                            <div class="d-flex checkbox-group ml-4">
                                    <div>
                                        <img src="../img/atm.png" style="width: 26px; height: 26px;" alt="">
                                        <label class="checkbox-label font-weight-bold text-dark text-pay" for="pay">Thẻ tín  dụng</label>
                                    </div>
                                    <input type="checkbox" class="checkbox" name="payment" id="pay" onclick="handleCheckboxChange(this)">
                                </div>
                                <div class="d-flex checkbox-group ml-4">
                                    <div>
                                        <img src="../img/payal.png" style="width: 26px; height: 26px;" alt="">
                                        <label class="checkbox-label-payal font-weight-bold text-dark text-pay" for="payal">Payal</label>
                                    </div>
                                    <input type="checkbox" class="checkbox" name="payment" id="payal" onclick="handleCheckboxChange(this)">
                                </div>
                                <div class="d-flex checkbox-group ml-4">
                                    <div>
                                        <img src="../img/momo.png" style="width: 26px; height: 26px;" alt="">
                                        <label class="checkbox-label-momo font-weight-bold text-dark text-pay" for="momo">Momo</label>
                                    </div>
                                    <input type="checkbox" class="checkbox" name="payment" id="momo" onclick="handleCheckboxChange(this)">
                                </div>
                                <div class="d-flex checkbox-group ml-4">
                                    <div>
                                        <img src="../img/thanhtoan.png" style="width: 26px; height: 26px;" alt="">
                                        <label class="checkbox-label-payment font-weight-bold text-dark text-pay" for="payment">Thanh toán khi nhận hàng</label>
                                    </div>
                                    <input type="checkbox" class="checkbox" name="payment" id="payment " onclick="handleCheckboxChange(this)">
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-lg-5">
                <div class="card border-secondary mb-5">
                    <div class="card-header bg-color-pay border-0">
                        <h4 class="font-weight-semi-bold m-0">Tổng dơn hàng</h4>
                    </div>
                    <div class="card-body">
                        <h5 class="font-weight-medium mb-3">Sản phẩm</h5>
                        <div class="d-flex justify-content-between">
                            <p>GIÀY THỂ THAO UNISEX REEBOK TURBO RESTYLE
                            <p class="text-dark font-weight-bold">x 2</p>
                            </p>
                            <p class="text-danger">2.190.000 VND</p>
                        </div>
                        <hr class="mt-0">
                        <div class="d-flex justify-content-between mb-3 pt-1">
                            <h6 class="font-weight-medium">Giá sản phẩm</h6>
                            <h6 class="font-weight-medium text-danger">2.190.000 VND</h6>
                        </div>
                    </div>
                    <div class="card-footer border-secondary bg-transparent">
                        <div class="d-flex justify-content-between mt-2">
                            <h5 class="font-weight-bold">Tổng tiền</h5>
                            <h5 class="font-weight-medium text-danger">2.190.000 VND</h5>
                        </div>
                    </div>

                </div>
                <div>
                    <button class="btn btn-primary btn-block font-weight-bold border-0 py-3 px-5 submit-pay" type="submit">Đặt hàng</button>
                </div>
            </div>
        </div>

    </div>
    <!-- Checkout End -->


    <?php
    include("footer.php");
    ?>


    <!-- Back to Top -->
    <a href="#" class="btn btn-primary back-to-top"><i class="fa fa-angle-double-up"></i></a>


    <!-- JavaScript Libraries -->
    <script src="https://code.jquery.com/jquery-3.4.1.min.js"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.bundle.min.js"></script>
    <script src="../lib/easing/easing.min.js"></script>
    <script src="../lib/owlcarousel/owl.carousel.min.js"></script>

    <!-- Contact Javascript File -->
    <script src="../mail/jqBootstrapValidation.min.js"></script>
    <script src="../mail/contact.js"></script>

    <!-- Template Javascript -->
    <script src="../content/js/main.js"></script>
    <script>
        function handleCheckboxChange(checkbox) {
            var checkboxes = document.getElementsByName(checkbox.name);
            checkboxes.forEach(function(item) {
                if (item !== checkbox) {
                    item.checked = false;
                }
            });
        }
    </script>
</body>

</html>