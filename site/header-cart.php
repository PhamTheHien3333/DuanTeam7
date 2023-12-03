<?php session_start();
?>
<style>
  .header-btn {
    width: 50px;
    height: 50px;
    display: inline-flex;
    justify-content: center;
    position: relative;
    margin-left: 20px;
    transition: 0.3s;
    background-color: white;
    border-radius: 50%;
    align-items: center;
  }

  .cart-number {
    position: absolute;
    top: -10px;
    right: -10px;
    width: 22px;
    height: 22px;
    display: flex;
    justify-content: center;
    align-items: center;
    border-radius: 50%;
    background: #e82e2e;
    font-size: 12px;
    border: 1px solid #bfbfbf;
    color: white;
  }

  .header-btn:hover {
    background: linear-gradient(145deg, #dcdcdc, #ffffff);
    box-shadow: 20px 20px 60px #cfcfd0, -20px -20px 60px #ffffff;
  }

  .img-user {
    width: 40px;
    height: 40px;
    border-radius: 50%;
  }

  header {
    position: relative;
  }

  .background-cart {
    background-color: #829BF3 !important;
  }

  .background-center-cart {
    border: solid 1px #829BF3;
  }
</style>
<div class="d-flex py-3 px-xl-5">
  <div class="col-lg-3 d-none d-lg-block">
    <a href="" class="text-decoration-none">
      <h1 class="m-0 display-5 font-weight-semi-bold"><span class="text-primary font-weight-bold border px-3 mr-1">C</span>DH</h1>
    </a>
  </div>
  <div class="col-lg-6 col-6 text-left">
    <form action="">
      <div class="input-group">
        <input type="text" class="form-control" placeholder="Tìm kiếm">
        <div class="input-group-append">
          <span class="input-group-text bg-transparent text-primary">
            <i class="fa fa-search"></i>
          </span>
        </div>
      </div>
    </form>
  </div>
  <div class="col-lg-3 col-6 text-right">
    <a href="./form.php" class="border header-btn">
      <i>
        <img src="../img/cat-1.jpg" class="img-user" alt="">
      </i>
    </a>

    <a href="cart.php" class=" border header-btn header-cart">
      <i class="fas fa-shopping-cart "></i>
      <span class="cart-number">3</span>
    </a>
  </div>
</div>

<!-- Topbar End -->


<!-- Navbar Start -->
<div class="container-fluid mb-5 background-cart">
  <div class="row border-top justify-content-center px-xl-5 ">
    <div class="col-lg-9 ">
      <nav class="navbar navbar-expand-lg bg-light navbar-light py-3 py-lg-0 px-0 background-center-cart">
        <a href="" class="text-decoration-none d-block d-lg-none">
          <h1 class="m-0 display-5 font-weight-semi-bold"><span class="text-primary font-weight-bold border px-3 mr-1">E</span>Shopper</h1>
        </a>
        <button type="button" class="navbar-toggler" data-toggle="collapse" data-target="#navbarCollapse">
          <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarCollapse">
          <div class="navbar-nav mr-auto py-0">
            <a href="index.php" class="nav-item nav-link active">Trang chủ</a>
            <a href="shop.php" class="nav-item nav-link">Sản phẩm</a>
            <a href="gioithieu.php" class="nav-item nav-link">Giới thiệu</a>
            <a href="baiviet.php" class="nav-item nav-link">Bài viết</a>
            <a href="contact.php" class="nav-item nav-link">Liên hệ</a>
          </div>
        </div>
      </nav>
    </div>
  </div>
</div>
<!-- Navbar End -->