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
</head>

<body>
<div class="container-fluid pt-5">
    <div class="row px-xl-5">
        <div class="col-lg-7">
            <div class="mb-4">
                <h4 class="font-weight-semi-bold mb-4 text-center">Thông tin</h4>
                <form action="capnhat-tk.php?btn_update" method="POST" enctype="multipart/form-data" id="admin_update_kh">
                <div class="d-flex">
                    <div class="row col-md-6">
                        <div class="col-md-12 form-group">
                             <label class="font-weight-bold text-dark" for="userId">ID:</label>
                             <input class="form-control custom-input" name="userId" id="userId" type="number"
                                 placeholder="Vui lòng nhập mã tài khoản" value="<?= $userId ?>" disabled>
                        </div>
                        <div class="col-md-12 form-group">
                            <label class="font-weight-bold text-dark" for="name">Họ và tên:</label>
                            <input class="form-control custom-input" name="fullName" id="name" type="text"
                                placeholder="Vui lòng nhập họ và tên" value="<?= $fullName ?>">
                        </div>
                        <div class="col-md-12 form-group">
                            <label class="font-weight-bold text-dark" for="email">Email:</label>
                            <input class="form-control custom-input" name="email" id="email" type="email"
                                placeholder="Vui lòng nhập email " value="<?= $email ?>">
                        </div>
                        <div class="col-md-12 form-group">
                            <label class="font-weight-bold text-dark" for="up_hinh">Hình:</label>
                            <input class="form-control custom-input" name="up_hinh" id="up_hinh" type="file"
                                placeholder="" value="<?= $img ?>">
                        </div>
                        <div class="col-md-12 form-group">
                            <label class="font-weight-bold text-dark" for="phone">Số điện thoại:</label>
                            <input class="form-control custom-input" name="phone" id="phone" type="phone"
                                placeholder="Vui lòng nhập số điện thoại của bạn" value="<?= $phone ?>">
                        </div>
                        <div class="col-md-12 form-group">
                            <label class="font-weight-bold text-dark" for="address">Địa chỉ:</label>
                            <br>
                            <!-- <input class="form-control" type="text" placeholder="Vui lòng nhập địa chỉ hiện tại của bạn"> -->
                            <input class="form-control custom-input" name="address" id="address" type="text"
                                  placeholder="" value="<?= $address ?>">
                        </div>
                    </div>
                </div>
                <div class="mb-3 text-center mt-3">
                        <input type="hidden" name="userId" value="<?= $userId ?>">
                        <input type="submit" name="btn_update" value="Cập nhật" class="btn btn-primary mr-3">
                        <input type="submit" name="btn_list" value="Chi tiết" class="btn btn-primary mr-3">
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>
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
</body>

</html>