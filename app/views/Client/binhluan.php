<link rel="stylesheet" href="../Client/assets/css/style.css">
<?php
session_start();
include "/xampp/htdocs/VTCshop/app/models/ClientModel/ClientModel.php";
if (isset($_GET['idsp'])) {
    // echo $_GET['idsp'];
    $idsp = $_GET['idsp'];
    
    $dsbl = loadall_binhluan($idsp);

    $html_bl = "";
}
if (isset($_POST['guibinhluan'])) {
    $id_sanpham1 = $_POST['idsp'];
    $hovaten = $_POST['hoten'];
    $noi_dung_binhluan = $_POST['noi_dung'];
    $ngay_binh_luan = date("Y-m-d");
    $id_taikhoan = $_SESSION['login']['id_taikhoan'];
    insert_binhluan($hovaten, $noi_dung_binhluan, $ngay_binh_luan, $id_sanpham, $id_taikhoan);
}

foreach ($dsbl as $bl) {
    extract($bl);
    //echo "\$a = $hovaten; \$b = $hovaten; \$c = $hovaten";
    $html_bl .= '<p> <h4>' . $hovaten . ' - ' . $hovaten . '</h4>' . $hovaten . '</p> <hr>';
}
?>
<!-- list bình luận -->
<h2>Bình luận về sản phẩm</h2>
<div class="reviews_comment_box">
    <div class="comment_thmb">
        <img src="../Client/assets/img/commen2.jpg" alt="">
    </div>
    <div class="comment_text">
        <div class="reviews_meta">
            <?= $html_bl ?>
        </div>
    </div>
</div>
<!-- list bình luận -->
<!-- Gửi bình luận -->
<div class="product_review_form">
    <?php
    if (isset($_SESSION['login']) && (count($_SESSION['login']) > 0)) {


    ?>
        <form action="#" method="POST">
            <div class="row">
                <div class="col-12">
                    <input type="hidden" name="idsp" value="<?= $idsp ?>">
                    <label for="review_comment">Bình luận </label>
                    <textarea name="noi_dung"></textarea>
                </div>
                <div class="col-lg-6 col-md-6">
                    <label for="author">Name</label>
                    <input name="hoten" type="text">
                </div>
            </div>
            <button name="guibinhluan" type="submit">Gửi</button>
        </form>
    <?php
    } else {
        $_SESSION['trang'] = "chitietsanpham";
        $_SESSION['idsp'] = $_GET['idsp'];
        echo "<a href='/../VTCshop/app/controllers/ClientController.php?act=login' target='_parent'>Đăng nhập để bình luận?</a>";
    }
    ?>
</div>