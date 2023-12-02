<div class="container">
    <div class="page-title">
        <h4 class="mt-5 font-weight-bold text-center">Danh sách khách hàng</h4>
    </div>
    <div class="box box-primary">
        <div class="box-body">
            <form action="?btn_delete_all" method="post" class="table-responsive">
                <button type="submit" class="btn btn-danger mb-1" id="deleteAll" onclick="return checkDelete()">
                    Xóa mục đã chọn</button>
                <table width="100%" class="table table-hover table-bordered text-center">
                    <thead class="thead-dark">
                        <tr>
                            <th><input type="checkbox" id="select-all"></th>
                            <th>Mã KH</th>
                            <th>Tài khoản</th>
                            <th>Họ và tên</th>
                            <th>Địa chỉ email</th>
                            <th>Ảnh</th>
                            <th>Phone</th>
                            <th>Địa chỉ</th>
                            <th>Vai trò</th>
                            <th>Kích hoạt</th>
                            <th><a href="index.php" class="btn btn-success text-white">Thêm mới
                                    <i class="fas fa-plus-circle"></i></a></th>
                        </tr>
                    </thead>
                    <tbody>
                        <?php

                        foreach ($items as $item) {
                            extract($item);
                            $suakh = "index.php?btn_edit&userId=" . $item['userId'];
                            $xoakh = "index.php?btn_delete&userId=" . $item['userId'];
                            $img_path = $UPLOAD_URL . '/users/' . $item['img'];
                            if (is_file($img_path)) {
                                $img = "<img src='$img_path' height='50' width='50' class='rounded-circle object-fit-cover'>";
                            } else {
                                $img = "no photo";
                            }

                        ?>
                        <tr>
                            <td><input type="checkbox" name="userId[]" value="<?= $ma_kh ?>"></td>
                            <td><?= $item['userId'] ?></td>
                            <td><?= $item['username'] ?></td>
                            <td><?= $item['fullName'] ?></td>
                            <td><?= $item['email'] ?></td>
                            <td><?= $img ?></td>
                            <td><?= $item['phone'] ?></td>
                            <td><?= $item['address'] ?></td>
                            <td><?= ($item['role'] == 1) ? "Nhân viên" : "Khách hàng"; ?></td>
                            <td><?= ($item['status'] == 1) ? "Rồi" : "Chưa"; ?></td>
                            <td class="text-end">
                                <a href="<?= $suakh ?>" class="btn btn-outline-info btn-rounded"><i
                                        class="fas fa-pen"></i></a>
                                <a href="<?= $xoakh ?>" class="btn btn-outline-danger btn-rounded"
                                    onclick="return checkDelete()"><i class="fas fa-trash"></i></a>
                            </td>
                        </tr>
                        <?php
                        }

                        ?>
                    </tbody>

                </table>
            </form>
        </div>
    </div>
</div>