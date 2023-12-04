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
        <div class="d-flex flex-column align-items-center justify-content-center" style="min-height: 300px">
            <h1 class="font-weight-semi-bold text-uppercase mb-3">Chi tiết sản phẩm</h1>
            <div class="d-inline-flex">
                <p class="m-0"><a href="">Trang chủ</a></p>
                <p class="m-0 px-2">-</p>
                <p class="m-0">Chi tiết sản phẩm</p>
            </div>
        </div>
    </div>
    <!-- Page Header End -->


    <!-- Shop Detail Start -->
    <?php require '../dao/hang-hoa.php';
    if (isset($_GET['productId'])) :

        $id_sp = $_GET['productId'];
        $sanpham = hang_hoa_select_by_id($id_sp);
        ?>
                <div class="container-fluid py-5">
                    <div class="row px-xl-5">
                        <div class="col-lg-5 pb-5">
                            <div id="product-carousel" class="carousel slide" data-ride="carousel">
                                <div class="carousel-inner border">
                                    <div class="carousel-item active">
                                        <img class="w-100 h-100" src="../uploads/products/<?= $sanpham['img'] ?>" alt="Image">
                                    </div>
                                    <div class="carousel-item">
                                        <img class="w-100 h-100" src="../uploads/products/product-2.jpg" alt="Image">
                                    </div>
                                    <div class="carousel-item">
                                        <img class="w-100 h-100" src="../uploads/products/product-3.jpg" alt="Image">
                                    </div>
                                    <div class="carousel-item">
                                        <img class="w-100 h-100" src="../uploads/products/product-4.jpg" alt="Image">
                                    </div>
                                </div>
                                <a class="carousel-control-prev" href="#product-carousel" data-slide="prev">
                                    <i class="fa fa-2x fa-angle-left text-dark"></i>
                                </a>
                                <a class="carousel-control-next" href="#product-carousel" data-slide="next">
                                    <i class="fa fa-2x fa-angle-right text-dark"></i>
                                </a>
                            </div>
                        </div>

                        <div class="col-lg-7 pb-5">
                            <h3 class="font-weight-semi-bold"><?= $sanpham['name'] ?></h3>
                            <div class="d-flex mb-3">
                                <div class="text-primary mr-2">
                                    <small class="fas fa-star"></small>
                                    <small class="fas fa-star"></small>
                                    <small class="fas fa-star"></small>
                                    <small class="fas fa-star-half-alt"></small>
                                    <small class="far fa-star"></small>
                                </div>
                                <small class="pt-1">(50 Reviews)</small>
                            </div>
                            <h3 class="font-weight-semi-bold mb-4 text-danger"><?= number_format($sanpham['sale']) ?></h3>
                            <div class="d-flex mb-3">
                                <p class="text-dark font-weight-medium mb-0 mr-3">Sizes:</p>
                                <form>
                                    <div class="custom-control custom-radio custom-control-inline">
                                        <input type="radio" class="custom-control-input" id="size-1" name="size">
                                        <label class="custom-control-label" for="size-1">XS</label>
                                    </div>
                                    <div class="custom-control custom-radio custom-control-inline">
                                        <input type="radio" class="custom-control-input" id="size-2" name="size">
                                        <label class="custom-control-label" for="size-2">S</label>
                                    </div>
                                    <div class="custom-control custom-radio custom-control-inline">
                                        <input type="radio" class="custom-control-input" id="size-3" name="size">
                                        <label class="custom-control-label" for="size-3">M</label>
                                    </div>
                                    <div class="custom-control custom-radio custom-control-inline">
                                        <input type="radio" class="custom-control-input" id="size-4" name="size">
                                        <label class="custom-control-label" for="size-4">L</label>
                                    </div>
                                    <div class="custom-control custom-radio custom-control-inline">
                                        <input type="radio" class="custom-control-input" id="size-5" name="size">
                                        <label class="custom-control-label" for="size-5">XL</label>
                                    </div>
                                </form>
                            </div>
                            <div class="d-flex mb-4">
                                <p class="text-dark font-weight-medium mb-0 mr-3">Màu sắc:</p>
                                <form>
                                    <div class="custom-control custom-radio custom-control-inline">
                                        <input type="radio" class="custom-control-input" id="color-1" name="color">
                                        <label class="custom-control-label" for="color-1">Black</label>
                                    </div>
                                    <div class="custom-control custom-radio custom-control-inline">
                                        <input type="radio" class="custom-control-input" id="color-2" name="color">
                                        <label class="custom-control-label" for="color-2">White</label>
                                    </div>
                                    <div class="custom-control custom-radio custom-control-inline">
                                        <input type="radio" class="custom-control-input" id="color-3" name="color">
                                        <label class="custom-control-label" for="color-3">Red</label>
                                    </div>
                                    <div class="custom-control custom-radio custom-control-inline">
                                        <input type="radio" class="custom-control-input" id="color-4" name="color">
                                        <label class="custom-control-label" for="color-4">Blue</label>
                                    </div>
                                    <div class="custom-control custom-radio custom-control-inline">
                                        <input type="radio" class="custom-control-input" id="color-5" name="color">
                                        <label class="custom-control-label" for="color-5">Green</label>
                                    </div>
                                </form>
                            </div>
                            <div class="d-flex align-items-center mb-4 pt-2">
                                <form action="cart-xuly.php" method="post">
                                    <input type="hidden" name="productId" id="" value="<?= $sanpham['productId'] ?>">
                                    <button type="submit" name="them" class="btn btn-primary px-3"><i class="fa fa-shopping-cart mr-1"></i>Thêm vào giỏ hàng</button>
                                </form>

                            </div>
                            <div class="d-flex pt-2">
                                <p class="text-dark font-weight-medium mb-0 mr-2">Chia sẻ:</p>
                                <div class="d-inline-flex">
                                    <a class="text-dark px-2" href="">
                                        <i class="fab fa-facebook-f"></i>
                                    </a>
                                    <a class="text-dark px-2" href="">
                                        <i class="fab fa-twitter"></i>
                                    </a>
                                    <a class="text-dark px-2" href="">
                                        <i class="fab fa-linkedin-in"></i>
                                    </a>
                                    <a class="text-dark px-2" href="">
                                        <i class="fab fa-pinterest"></i>
                                    </a>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="row px-xl-5">
                        <div class="col">
                            <div class="nav nav-tabs justify-content-center border-secondary mb-4">
                                <a class="nav-item nav-link active" data-toggle="tab" href="#tab-pane-1">Mô tả</a>
                                <a class="nav-item nav-link" data-toggle="tab" href="#tab-pane-2">Bình luận (0)</a>
                            </div>
                            <div class="tab-content">
                                <div class="tab-pane fade show active" id="tab-pane-1">
                                    <h4 class="mb-3">Mô tả sản phẩm</h4>
                                    <p><?= $sanpham['depict'] ?></p>                             
                                </div>                     
                                <?php include './comment.php' ?>      
                                <div class="col-md-6">
                                <div class="col-md-6">
    <div class="media mb-4">
        <?php 
        require '../dao/binh-luan.php';
        $id_sp = $_GET['productId'];
        $comments = getComments($id_sp);
        if (!empty($comments)) {
            foreach ($comments as $comment) {
                ?>
                <img src="../uploads/users/<?= $comment['img'] ?>" alt="Image" class="img-fluid mr-3 mt-1" style="width: 45px;">
                <div class="media-body">
                    <?php if (isset($comment['username'])): ?>
                        <h6><?= $comment['username'] ?><small> - <i><?= $comment['dateCmt'] ?></i></small></h6>
                    <?php endif; ?>
                    <?php if (isset($comment['content'])): ?>
                        <p><?= $comment['content'] ?></p>
                    <?php endif; ?>
                </div>
                <?php
            }
        } else {
            echo "<p>Chưa có bình luận nào.</p>";
        }
        ?>
    </div>
</div>
</div>                    
                            </div>
                        </div>
                    </div>
                </div>
                <!-- Shop Detail End -->
    <?php
          
    
    endif;
    ?>


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