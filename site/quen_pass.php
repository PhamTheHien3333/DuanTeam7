
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../css/form.css">
    <link href='https://unpkg.com/boxicons@2.1.4/css/boxicons.min.css' rel='stylesheet'>
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.10.0/css/all.min.css" rel="stylesheet">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css">
    <style>
        .img-user {
            width: 40px;
            height: 40px;
            border-radius: 50%;
        }

        .logo {
            margin-top: 25%;
            height: 80px;
            width: 80px;
            border-radius: 50%;
            border: black 1px solid;
        }

        .error1 {
            display: none;
        }
    </style>
    <!-- <link rel="stylesheet" href="style.css"> -->
    <title>Đăng Nhập & Đăng Ký</title>
</head>

<body>
    <div class="wrapper">
        <nav class="nav">
            <div class="nav-logo">
                <a href="./index.php" class="text-decoration-none">
                    <img class="logo" src="../img/logo.jpg" alt="">
                </a>
            </div>
            <div class="nav-menu" id="navMenu">
                <ul>
                    <li><a href="index.php" class="link active">Trang Chủ</a></li>
                    <li><a href="shop.php" class="link">Sản Phẩm</a></li>
                    <li><a href="#" class="link">Giới Thiệu</a></li>
                    <li><a href="contact.php" class="link">Liên Hệ</a></li>
                </ul>
            </div>
            <!-- <div class="nav-button">
                <button class="btn white-btn" id="loginBtn" onclick="login()">Đăng nhập</button>
                <button class="btn" id="registerBtn" onclick="register()">Đăng ký</button>
            </div> -->
            <div class="nav-menu-btn">
                <i class="bx bx-menu" onclick="myMenuFunction()"></i>
            </div>
        </nav>

        <!----------------------------- Form box ----------------------------------->
        <div class="form-box">

            <!------------------- login form -------------------------->

            <div class="login-container" id="">
                <div class="top">
                    <span>Bạn chưa có tài khoản? <a href="form.php" >Đăng ký</a></span>
                    <header>Quên thông tin tài khoản</header>
                </div>
                <form action="../site/xl-quen-pass.php" method="POST" id="form_quen_mk" >
                    <div class="input-box">
                        <input type="text" class="input-field" name="username" id="username" placeholder="Tên đăng nhập" >
                        <i class="bx bx-user"></i>
                    </div>
                    <span id="login-username-error" class="text-danger error-message"></span>
                    <div class="input-box">
                        <input type="text" class="input-field" name="email" id="email" placeholder="Email" >
                        <i class="bx bx-lock-alt"></i>
                    </div>
                    <i class=" text-danger"><?= (isset($MESSAGE) && (strlen($MESSAGE) > 0)) ? $MESSAGE : "" ?></i>
                    <span id="login-password-error" class="text-danger error-message"></span>
                    <span id="register-fullname-error" class="error-message"></span>
                    <div class="input-box">
                        <input type="submit" name="btn_forgot_pass" class="submit" value="Lấy mật khẩu">
                    </div>
                </form>
            </div>

        </div>
    </div>


    <script>
        function myMenuFunction() {
            var i = document.getElementById("navMenu");

            if (i.className === "nav-menu") {
                i.className += " responsive";
            } else {
                i.className = "nav-menu";
            }
        }
    </script>

    <script>
        var a = document.getElementById("loginBtn");
        var b = document.getElementById("registerBtn");
        var x = document.getElementById("login");
        var y = document.getElementById("register");

        function login() {
            x.style.left = "4px";
            y.style.right = "-520px";
            a.className += " white-btn";
            b.className = "btn";
            x.style.opacity = 1;
            y.style.opacity = 0;
        }

        function register() {
            x.style.left = "-510px";
            y.style.right = "5px";
            a.className = "btn";
            b.className += " white-btn";
            x.style.opacity = 0;
            y.style.opacity = 1;
        }
    </script>
    <script src="../content/js/validate.js"></script>
</body>

</html>