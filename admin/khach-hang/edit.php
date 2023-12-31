<!-- <?php
foreach ($items as $item) {
    extract($item);
    $img_path = $UPLOAD_URL . '/users/' . $item['img'];
if (is_file($img_path)) {
    $img = "<img src='$img_path' height='100'>";
} else {
    $img = "no photo";
}
}
?> -->
<div class="row">
    <div class="col-lg-12">
        <div class="card">
            <div class="card-header text-center bg-dark text-white text-uppercase">Cập nhật khách hàng</div>
            <div class="card-body">
                <form action="index.php?btn_update" method="POST" enctype="multipart/form-data" id="admin_update_kh">
                    <div class="row">
                        <div class="form-group col-sm-6">
                            <label for="userId" class="form-label">MÃ KHÁCH HÀNG</label>
                            <input type="text" name="userId" id="userId" class="form-control" required
                                value="<?= $items['userId'] ?>">
                        </div>
                        <div class="form-group col-sm-6">
                            <label for="username" class="form-label">Tài khoản</label>
                            <input type="text" name="username" id="username" class="form-control" required
                                value="<?= $items['username'] ?>">
                        </div>
                    </div>
                    <div class="row">
                        <div class="form-group col-sm-6">
                            <label for="password" class="form-label">Mật khẩu</label>
                            <input type="password" name="password"  class="form-control" required
                                value="<?= $items['password'] ?>">
                        </div>
                        <div class="form-group col-sm-6">
                            <label for="fullname" class="form-label">Họ và tên</label>
                            <input type="text" name="fullname" class="form-control" required
                                value="<?= $items['fullName'] ?>">
                        </div>
                    </div>
                    <div class="row">
                        <div class="form-group col-sm-6">
                            <label for="phone" class="form-label">Phone</label>
                            <input type="phone" name="phone" id="phone" class="form-control" required
                                value="<?= $items['phone'] ?>">
                        </div>
                        <div class="form-group col-sm-6">
                            <label for="address" class="form-label">Địa chỉ</label>
                            <input type="text" name="address" class="form-control" required
                                value="<?= $items['address'] ?>">
                        </div>
                    </div>
                    <div class="row">
                        <div class="form-group col-sm-6">
                            <div class="row align-items-center">
                                <div class="col-sm-8">
                                    <label for="hinh" class="form-label">Ảnh</label>
                                    <input type="hidden" name="img" id="hinh" class="form-control"
                                        value="<?= $items['img'] ?>">
                                    <input type="file" name="up_hinh" id="hinh" class="form-control">
                                </div>
                                <div class="col-sm-4">
                                    <?= $items['img'] ?>
                                </div>
                            </div>

                        </div>
                        <div class="form-group col-sm-6">
                            <label for="email" class="form-label">Địa chỉ email</label>
                            <input type="email" name="email" id="email" class="form-control" required
                                value="<?= $items['email'] ?>">
                        </div>
                    </div>
                    <div class="row">
                        <div class="form-group col-sm-6"></div>
                            <label>Trạng thái?</label>
                            <div class="form-control">
                                <label class="radio-inline  mr-3">
                                    <input type="radio" value="0" name="status"
                                        <?= !$items['status'] ? 'checked' : '' ?>>Chưa kích
                                    hoạt
                                </label>
                                <label class="radio-inline">
                                    <input type="radio" value="1" name="status"
                                        <?= $items['status'] ? 'checked' : '' ?>>Kích hoạt
                                </label>
                            </div>
                        </div>
                        <div class="form-group col-sm-6">
                            <label>Vai trò?</label>
                            <div class="form-control">
                                <label class="radio-inline mr-3">
                                    <input type="radio" value="0" name="role" <?= !$items['role'] ? 'checked' : '' ?>>Khách
                                    hàng
                                </label>
                                <label class="radio-inline">
                                    <input type="radio" value="1" name="role" <?= isset($items['role']) && $items['role'] ? 'checked' : '' ?>>Nhân
                                    viên
                                </label>
                            </div>
                        </div>
                    </div>

                    <div class="mb-3 text-center mt-3">
                        <input type="hidden" name="userId" value="<?= $items['userId'] ?>">
                        <input type="reset" value="Nhập lại" class="btn btn-danger mr-3">
                        <input type="submit" name="btn_update" value="Cập nhật" class="btn btn-primary mr-3">
                        <a href="index.php?btn_list"><input type="button" class="btn btn-success" value="Danh sách"></a>
                    </div>

                </form>
            </div>
        </div>
    </div>
</div>