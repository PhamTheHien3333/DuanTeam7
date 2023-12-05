<div class="container">
    <div class="page-title">
        <h4 class="mt-5 font-weight-bold text-center">Tổng hợp đơn hàng</h4>
    </div>
    <div class="box box-primary">
        <div class="box-body">
            <table width="100%" class="table table-hover table-bordered text-center">
                <thead class="thead-dark">
                    <tr>
                        <th>Khách hàng</th>
                        <th>Số đơn hàng</th>
                        <th>Cũ nhất</th>
                        <th>Mới nhất</th>
                        <th></th>
                    </tr>
                </thead>
                <tbody>
                    <?php

                    foreach ($items as $item) {
                        extract($item);

                    ?>
                    <tr>
                        <td><?= $username ?></td>
                        <td><?= $so_luong ?></td>
                        <td><?= $cu_nhat ?></td>
                        <td><?= $moi_nhat ?></td>
                        <td class="text-end">
                            <a href="../bill/index.php?ma_kh=<?= $userId ?>"
                                class="btn btn-outline-info btn-rounded">Chi tiết <i
                                    class="fas fa-info-circle"></i></i></a>
                        </td>
                    </tr>
                    <?php
                    }

                    ?>
                </tbody>

            </table>
        </div>
    </div>
</div>