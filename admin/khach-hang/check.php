<?php
require '../../global.php';
require '../../dao/khach-hang.php';
if (isset($_GET['userId'])) {

    $result = khach_hang_exist($_GET['userId']);
    if ($result == true) {
        echo json_encode(false);
    } else {
        echo json_encode(true);
    }
}
if (isset($_GET['email'])) {
    $result = khach_hang_exist_email($_GET['email']);
    if ($result == true) {
        echo json_encode(false);
    } else {
        echo json_encode(true);
    }
}
if (isset($_POST['userId'])) {
    # code...
    $result = khach_hang_exist($_POST['userId']);
    if ($result == true) {
        echo json_encode(true);
    } else {
        echo json_encode(false);
    }
}