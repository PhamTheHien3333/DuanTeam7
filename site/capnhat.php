<!DOCTYPE html>
<html lang="en">

<head>
<meta charset="utf-8">
    <title>CDH - Sản phẩm</title>
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
<!-- body -->

<body class="main-layout inner_page">
    <!-- loader  -->
    <!-- end loader -->
    <!-- header -->
  
    <!-- end header -->
    <!-- contact -->
    <div class="contact">
        <div class="container">
            <table class="table table-striped">
                <h2 class="text-center text-light bg-dark my-3 py-2">Thông tin đăng nhập</h2>
                <tr>
                    <th>ID</th>
                    <th>Username</th>
                    <th>Họ và tên</th>
                    <th>Số điện thoại</th>
                    <th>Email</th>
                    <th>Địa chỉ</th>
                    <th></th>
                </tr>

                <?php
         
                require '../dao/khach-hang.php';
                // Gọi hàm getUser() để lấy danh sách người dùng
          
                $id = $_GET['userId'];
                $users = getId($id);

                foreach ($users as $user) :
                ?>
                    <tr>
                        <th><?= $user['userId'] ?></th>
                        <td><?= $user['username'] ?></td>
                        <td><?= $user['fullName'] ?></td>
                        <td><?= $user['phone'] ?></td>
                        <td><?= $user['email'] ?></td>
                        <td><?= $user['address'] ?></td>
                        <td> <a href="./sua.php?user_id=<?= $id?>"><i class="btn btn-dark bi bi-pencil-square"></i></a></td>
                    </tr>
                <?php endforeach; ?>
            </table>
        </div>
    </div>
   
</body>

</html>