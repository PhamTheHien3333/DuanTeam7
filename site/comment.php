<?php 
if (isset($_SESSION['username'])){
    $username = $_SESSION['username'];
    $user_id = $_SESSION['userId'];
}
?>
<div class="tab-pane fade" id="tab-pane-2">
    <div class="row">
        <div class="col-md-6">
            <h4 class="mb-4">ĐÁNH GIÁ SẢN PHẨM</h4>
            <form class="review-form" action="add_comment.php" method="POST">
            <div class="form-group">
                    <label for="name">Họ và tên</label>
                    <input type="text" class="form-control" id="name" name="user" value="<?= $username ?>">
                </div>
                <div class="form-group">
                    <label for="message">Đánh giá</label>
                    <textarea id="message" name="note" cols="30" rows="5" class="form-control"></textarea>
                </div>
                <input type="hidden" name="productId" value="<?= $sanpham['productId'] ?>">
                <input type="hidden" name="username" id="" value="<?= $user_id ?>">
                <input type="hidden" name="userId" id="" value="<?= $username ?>">
                <button type="submit" class="btn btn-primary px-3">Xác nhận</button>
            </form>
        </div>
    </div>
</div>