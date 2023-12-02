  <!-- Topbar Start -->
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
      .img-user{
        width: 40px;
        height: 40px;
        border-radius: 50%;
      }
  </style>
  <div class="d-flex py-3 px-xl-5">
      <div class="col-lg-3 d-none d-lg-block">
          <a href="" class="text-decoration-none">
              <h1 class="m-0 display-5 font-weight-semi-bold"><span class="text-primary font-weight-bold border px-3 mr-1">C</span>DH</h1>
          </a>
      </div>
      <div class="col-lg-6 col-6 text-left">
          <form action="liet-ke.php" method="POST">
              <div class="input-group">
                  <input type="text" class="form-control" name="kyw" placeholder="Tìm kiếm">
                  <div class="input-group-append">
                      <button class="btn bg-primary" type="submit" name="timkiem">
                          <i class="fa fa-search"></i>
                      </button>
                  </div>
              </div>
          </form>
      </div>
      <div class="col-lg-3 col-6 text-right">
      <div class="dropdown widget-header icontext">
                    <a href="#" class="icon icon-sm rounded-circle border" id="dropdownMenu1" data-toggle="dropdown"
                        aria-haspopup="true" aria-expanded="false">                    
                        <i><img src="../img/cat-1.jpg" class="img-user" alt=""></i> 
                        <i class="fas fa-shopping-cart "></i>
                        <span class="cart-number">3</span>
                    </a>             
                    <div class="text">
                        <span class="text-dark"></span>
                        <a href="./form.php" class="d-block text-info">Đăng nhập</a>
                        <div class="dropdown-menu" aria-labelledby="dropdownMenu1">
                            <a class="dropdown-item pl-3 py-2" href="">Quản trị admin</a>
                            <a class="dropdown-item pl-3 py-2" href="suatk.php">Cập nhật tài khoản</a>
                            <a class="dropdown-item pl-3 py-2" href="doimk-form.php">Đổi mật khẩu</a>
                            <a class="dropdown-item pl-3 py-2" href="">Đăng xuất</a>
                            <a class="dropdown-item pl-3 py-2" href="">Đăng nhập</a>
                            <a class="dropdown-item pl-3 py-2" href="">Đăng ký</a>
                        </div>
                    </div>
                </div>
          
      </div>
  </div>

  <!-- Topbar End -->


  <!-- Navbar Start -->
  <div class="container-fluid mb-5">
      <div class="row border-top px-xl-5">
          <div class="col-lg-3 d-none d-lg-block">
              <a class="btn shadow-none d-flex align-items-center justify-content-between bg-primary text-white w-100" data-toggle="collapse" href="#navbar-vertical" style="height: 65px; margin-top: -1px; padding: 0 30px;">
                  <h6 class="m-0">Danh mục</h6>
                  <i class="fa fa-angle-down text-dark"></i>
              </a>
              <nav class="collapse show navbar navbar-vertical navbar-light align-items-start p-0 border border-top-0 border-bottom-0" id="navbar-vertical">
                  <div class="navbar-nav w-100 overflow-hidden" style="height: 410px">
                    <a href="#" class="nav-link" data-toggle="dropdown">Nike</a>                     
                    <a href="" class="nav-item nav-link">Adidas</a>
                    <a href="" class="nav-item nav-link">Converse</a>
                  </div>
              </nav>
          </div>
          <div class="col-lg-9">
              <nav class="navbar navbar-expand-lg bg-light navbar-light py-3 py-lg-0 px-0">
                  <a href="" class="text-decoration-none d-block d-lg-none">
                      <h1 class="m-0 display-5 font-weight-semi-bold"><span class="text-primary font-weight-bold border px-3 mr-1">E</span>Shopper</h1>
                  </a>
                  <button type="button" class="navbar-toggler" data-toggle="collapse" data-target="#navbarCollapse">
                      <span class="navbar-toggler-icon"></span>
                  </button>
                  <div class="collapse navbar-collapse justify-content-between" id="navbarCollapse">
                      <div class="navbar-nav mr-auto py-0">
                          <a href="index.php" class="nav-item nav-link active">Trang chủ</a>
                          <a href="shop.php" class="nav-item nav-link">Sản phẩm</a>
                          <a href="gioithieu.php" class="nav-item nav-link">Giới thiệu</a>
                          <a href="baiviet.php" class="nav-item nav-link">Bài viết</a>
                          <a href="contact.php" class="nav-item nav-link">Liên hệ</a>

                      </div>
                  </div>
              </nav>
              <div id="header-carousel" class="carousel slide" data-ride="carousel">
                  <div class="carousel-inner">
                      <div class="carousel-item active" style="height: 410px;">
                          <img class="img-fluid" src="../content/images/banners/carousel-1.jpg" alt="Image">
                          <div class="carousel-caption d-flex flex-column align-items-center justify-content-center">
                              <div class="p-3" style="max-width: 700px;">
                                  <h4 class="text-light text-uppercase font-weight-medium mb-3">Mua 2 sản phẩm cùng loại giảm 20%</h4>
                                  <h3 class="display-4 text-white font-weight-semi-bold mb-4">Ngày lễ vàng</h3>
                                  <a href="" class="btn btn-light py-2 px-3">Mua ngay</a>
                              </div>
                          </div>
                      </div>
                      <div class="carousel-item" style="height: 410px;">
                          <img class="img-fluid" src="../content/images/banners/carousel-2.jpg" alt="Image">
                          <div class="carousel-caption d-flex flex-column align-items-center justify-content-center">
                              <div class="p-3" style="max-width: 700px;">
                                  <h4 class="text-light text-uppercase font-weight-medium mb-3">Tặng 10 phần quà bắt ngờ</h4>
                                  <h3 class="display-4 text-white font-weight-semi-bold mb-4">Khi mua tại Shop</h3>
                                  <a href="" class="btn btn-light py-2 px-3">Mua ngay</a>
                              </div>
                          </div>
                      </div>
                  </div>
                  <a class="carousel-control-prev" href="#header-carousel" data-slide="prev">
                      <div class="btn btn-dark" style="width: 45px; height: 45px;">
                          <span class="carousel-control-prev-icon mb-n2"></span>
                      </div>
                  </a>
                  <a class="carousel-control-next" href="#header-carousel" data-slide="next">
                      <div class="btn btn-dark" style="width: 45px; height: 45px;">
                          <span class="carousel-control-next-icon mb-n2"></span>
                      </div>
                  </a>
              </div>
          </div>
      </div>
  </div>
  <!-- Navbar End -->