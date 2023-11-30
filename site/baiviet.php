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
<?php
    include("header.php");
?>


    <!-- Page Header Start -->
    <div class="container-fluid bg-secondary mb-5">
        <div class="d-flex flex-column align-items-center justify-content-center" style="min-height: 200px">
            <h1 class="font-weight-semi-bold text-uppercase mb-3">Bài viết</h1>
            <div class="d-inline-flex">
                <p class="m-0"><a href="">Trang chủ</a></p>
                <p class="m-0 px-2">-</p>
                <p class="m-0">Bài viết</p>
            </div>
        </div>
    </div>
    <!-- Page Header End -->


    <!-- Contact Start -->
    <div class="container-fluid pt-5">
        <div class="text-center mb-4">
            <h2 class="section-title px-5"><span class="px-2">Các bài viết của chúng tôi</span></h2>
        </div>
        <div class="row px-xl-5">
            <div class="col-lg-7 mb-5">
                <div class="contact-form">
                    <div id="success"></div>
                        <div class="control-group mb-4">
                            <b>Lịch sử</b>
                            <p><a href="#">Sự ra đời của giày thể thao</a></p>
                        </div>
                        <div class="control-group mb-4">
                           <b>Lịch sử</b>
                           <p><a href="#">Đôi giày thể thao đầu tiên</a></p>
                        </div>
                        <div class="control-group mb-4">
                           <b>Công nghệ</b>
                           <p><a href="#">Cấu tạo của giày thể thao</a></p>
                        </div>
                        <div class="control-group mb-4">
                           <b>Công ty</b>
                           <p><a href="#">Công ty sản xuất giày thể thao nhiều nhất thể giới</a></p>
                        </div>
                </div>
            </div>
            <div class="col-lg-5 mb-5">
                <h5 class="font-weight-semi-bold mb-3">CDH</h5>
                <p>CDH luôn là những lựa chọn cho những người thích và đam mê các loại giày xịn, đẹp và đặt biệt là rẻ. Vì thế, hãy đến với CDH
                    nơi bạn có thể săn đón được những đôi giày mà bạn yêu thích cũng những là xịn xò nhất mà bạn từng được thấy.
                </p>
                <div class="d-flex flex-column mb-4">
                    <h5 class="font-weight-semi-bold mb-3">Địa chỉ</h5>
                    <p class="mb-3"><i class="fa fa-map-marker-alt text-primary mr-3"></i>Lê Bình, Cái Răng, Cần Thơ</p>
                    <p class="mb-3"><i class="fa fa-envelope text-primary mr-3"></i>mcanhXXXX@gmail.com</p>
                    <p class="mb-3"><i class="fa fa-phone-alt text-primary mr-3"></i>084688XXXX</p>
                </div>
            </div>
        </div>
    </div>
    <!-- Contact End -->


    <!-- Footer Start -->
    <?php
    include("footer.php");
    ?>
    <!-- Footer End -->


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