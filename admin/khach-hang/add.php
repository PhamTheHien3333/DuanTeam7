<div class="row">
    <div class="col-lg-12">
        <div class="card">
            <div class="card-header text-center bg-dark text-white text-uppercase">Thêm mới khách hàng</div>
            <div class="card-body">
                <form action="index.php" method="POST" enctype="multipart/form-data" id="admin_add_kh">
                    <div class="row">
                        <div class="form-group col-sm-6">
                            <label for="userId" class="form-label">Mã khách hàng (tên đăng nhập)</label>
                            <input type="text" name="userId" id="userId" class="form-control" disabled>
                        </div>
                        <div class="form-group col-sm-6">
                            <label for="ho_ten" class="form-label">Tài khoản</label>
                            <input type="text" name="username" id="username" class="form-control" required>
                        </div>
                    </div>
                    <div class="row">
                        <div class="form-group col-sm-6">
                            <label for="password" class="form-label">Mật khẩu</label>
                            <input type="password" name="password" id="password" class="form-control" required>
                        </div>
                        <div class="form-group col-sm-6">
                            <label for="fullName" class="form-label">Họ và tên</label>
                            <input type="fullName" name="fullname" class="form-control" required>
                        </div>
                    </div>
                    <div class="row">
                        <div class="form-group col-sm-6">
                            <label for="img" class="form-label">Ảnh</label>
                            <input type="file" name="img" id="img" class="form-control">
                        </div>
                        <div class="form-group col-sm-6">
                            <label for="email" class="form-label">Địa chỉ email</label>
                            <input type="email" name="email" id="email" class="form-control" required>
                        </div>
                        <div class="form-group col-sm-6">
                            <label for="phone" class="form-label">Phone</label>
                            <input type="phone" name="phone" id="phone" class="form-control" required>
                        </div>
                        <div class="form-group col-sm-6">
                            <label for="address" class="form-label">Địa chỉ</label>
                            <input type="address" name="address" id="address" class="form-control" required>
                        </div>
                    </div>
                    <div class="row">
                        <div class="form-group col-sm-6">
                            <label>Trạng thái?</label>
                            <div class="form-control">
                                <label class="radio-inline  mr-3">
                                    <input type="radio" value="0" name="status">Chưa kích
                                    hoạt
                                </label>
                                <label class="radio-inline">
                                    <input type="radio" value="1" name="status" checked>Kích hoạt
                                </label>
                            </div>
                        </div>
                        <div class="form-group col-sm-6">
                            <label>Vai trò?</label>
                            <div class="form-control">
                                <label class="radio-inline mr-3">
                                    <input type="radio" value="0" name="role">Khách hàng
                                </label>
                                <label class="radio-inline">
                                    <input type="radio" value="1" name="role" checked>Nhân viên
                                </label>
                            </div>
                        </div>
                    </div>

                    <div class="mb-3 text-center mt-3">
                        <input type="reset" value="Nhập lại" class="btn btn-danger mr-3">
                        <input type="submit" name="btn_insert" value="Thêm mới" class="btn btn-primary mr-3">
                        <a href="index.php?btn_list"><input type="button" class="btn btn-success" value="Danh sách"></a>
                    </div>

                </form>
            </div>
        </div>
    </div>
</div>