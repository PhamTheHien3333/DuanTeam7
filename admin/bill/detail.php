<div class="container">
    <div class="page-title">

        <h4 class="mt-5 font-weight-bold text-center">Chi tiết hóa đơn</h4>
    </div>
    <div class="box box-primary">
        <div class="box-body">
            <form action="?btn_delete_all" method="post" class="table-responsive">

                <button type="submit" class="btn btn-danger mb-1" id="deleteAll" onclick="return checkDelete()">
                    Xóa mục đã chọn</button> <i class="ml-5">khách hàng: <b><?= $items[0]['username'] ?></b></i>
                <table width="100%" class="table table-hover table-bordered text-center">
                    <thead class="thead-dark">
                        <tr>
                            <th><input type="checkbox" id="select-all"></th>
                            <th>Người đặt hàng</th>
                            <th>Tổng tiền</th>
                            <th>Ngày đặt hàng</th>
                            <th>Số điện thoại</th>
                            <th>Địa chỉ</th>
                            <th></th>
                        </tr>
                    </thead>
                    <tbody>
                        <?php
                        foreach ($items as $item) {
                            extract($item);
                        ?>
                        <tr>
                            <td><input type="checkbox" name="ma_bill[]" value="<?= $billId ?>"></td>
                            <td><?= $fullName ?></td>
                            <td><?= $total ?></td>
                            <td><?= $oderTime ?></td>
                            <td><?= $phone ?></td>
                            <td><?= $address ?></td>
                            <td class="text-end">
                                <a href="index.php?btn_delete&ma_bill=<?= $billId ?>&ma_kh=<?= $userId ?>"
                                    class="btn btn-outline-danger btn-rounded" onclick="return checkDelete()"><i
                                        class="fas fa-trash"></i></a>
                            </td>
                        </tr>
                        <?php
                        }

                        ?>
                    </tbody>

                </table>
                <input type="hidden" name="ma_kh" value="<?= $userId ?>">
                <div class="mt-3" width="100%">
                    <ul class="pagination justify-content-center">
                        <?php for ($i = 1; $i <= $_SESSION['total_page']; $i++) { ?>

                        <li class="page-item <?= $_SESSION['page'] == $i ? 'active' : '' ?>">
                            <a class="page-link" href="?ma_kh=<?= $userId ?>&page=<?= $i ?>"><?= $i ?></a>
                        </li>

                        <?php } ?>

                    </ul>
                </div>
                <a class="btn btn-dark" href="index.php">Quay lại</a>
            </form>
        </div>
    </div>
</div>