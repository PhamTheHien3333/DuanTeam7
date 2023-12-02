<div class="container-fluid pt-5">
    <div class="row px-xl-5">
        <div class="col-lg-7">
            <div class="mb-4">
                <h4 class="font-weight-semi-bold mb-4 text-center">Thông tin</h4>
                <form action="index.php?btn_update" method="POST" enctype="multipart/form-data" id="admin_update_kh">
                <div class="d-flex">
                    <div class="row col-md-6">
                        <div class="col-md-12 form-group">
                            <label class="font-weight-bold text-dark" for="name">Họ và tên:</label>
                            <input class="form-control custom-input" name="name" id="name" type="text"
                                placeholder="Vui lòng nhập họ và tên">
                        </div>
                        <div class="col-md-12 form-group">
                            <label class="font-weight-bold text-dark" for="email">Email:</label>
                            <input class="form-control custom-input" name="email" id="email" type="email"
                                placeholder="Vui lòng nhập email ">
                        </div>
                        <div class="col-md-12 form-group">
                            <label class="font-weight-bold text-dark" for="phone">Số điện thoại:</label>
                            <input class="form-control custom-input" name="phone" id="phone" type="phone"
                                placeholder="Vui lòng nhập số điện thoại của bạn">
                        </div>
                        <div class="col-md-12 form-group">
                            <label class="font-weight-bold text-dark" for="address">Địa chỉ:</label>
                            <br>
                            <!-- <input class="form-control" type="text" placeholder="Vui lòng nhập địa chỉ hiện tại của bạn"> -->
                            <textarea class="custom-textarea" name="address" id="address" cols="100"
                                rows="8"></textarea>
                        </div>
                    </div>
                </div>
                <div class="mb-3 text-center mt-3">
                        <input type="hidden" name="userId" value="<?= $ma_kh ?>">
                        <input type="reset" value="Nhập lại" class="btn btn-danger mr-3">
                        <input type="submit" name="btn_update" value="Cập nhật" class="btn btn-primary mr-3">
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>