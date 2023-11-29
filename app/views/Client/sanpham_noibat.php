<!--breadcrumbs area start-->
<div class="breadcrumbs_area">
    <div class="container">
        <div class="row">
            <div class="col-12">
                <div class="breadcrumb_content">
                    <ul>
                        <li><a href="ClientController.php">Trang Chủ</a></li>
                        <li>Shop </li>
                        <li>Sản phẩm Nổi bật</li>
                    </ul>
                </div>
            </div>
        </div>
    </div>
</div>
<!--breadcrumbs area end-->

<!--shop  area start-->
<div class="shop_area shop_reverse mt-60 mb-60">
    <div class="container">
        <div class="row">
            <!-- Danh mục  start-->
            <div class="col-lg-3 col-md-12">
                <!--sidebar widget start-->
                <aside class="sidebar_widget">
                    <div class="widget_inner">
                        <div class="widget_list widget_categories">
                            <h2>Danh mục sản phẩm</h2>
                            <ul>
                                <?php
                                foreach ($loaddanhmuc as $danhmuc) {
                                    extract($danhmuc);
                                    $linkdm = "ClientController.php?act=sanpham&iddm=" . $id_danhmuc;
                                    echo
                                    '
                                <li class="menu_item_children"><a href="' . $linkdm . '">' . $ten_danhmuc . '</a>
                                </li>
                                ';
                                }
                                ?>
                            </ul>
                        </div>
                        <div class="widget_list widget_filter">
                            <h2>Lọc giá</h2>
                            <form action="#">
                                <div id="slider-range"></div>
                                <button type="submit">Filter</button>
                                <input type="text" name="text" id="amount" />

                            </form>
                        </div>

                    </div>
                </aside>
                <!--sidebar widget end-->
            </div>
            <!-- Danh mục end -->

            <div class="col-lg-9 col-md-12">
                <!--shop wrapper start-->

                <div class="shop_toolbar_wrapper">
                    <div class="shop_toolbar_btn">
                        <button data-role="grid_3" type="button" class="active btn-grid-3" data-bs-toggle="tooltip" title="3"></button>

                        <button data-role="grid_4" type="button" class=" btn-grid-4" data-bs-toggle="tooltip" title="4"></button>

                        <button data-role="grid_list" type="button" class="btn-list" data-bs-toggle="tooltip" title="List"></button>
                    </div>
                    <!-- xắp xếp giá -->
                    <div class=" niceselect_option">
                        <form class="select_option" action="#">
                            <select name="orderby" id="short">
                                <option selected value="1">Sắp xếp theo đánh giá</option>
                                <option value="2">Sắp xếp theo Tên</option>
                                <option value="3">Sắp xếp theo giá giảm dần</option>
                                <option value="4">Sắp xếp theo giá tăng dần</option>
                            </select>
                        </form>
                    </div>
                    <div class="page_amount">
                        <?php

                        ?>

                    </div>
                </div>
                <!--tìm kiếm theo tên end-->

                <!-- sản phẩm hot_deal -->
                <div class="row shop_wrapper">

                    <?php
                    foreach ($sp_noibat as $sp) :
                        extract($sp);
                        $imgpath = "../upload/sp_noibat/" . $img_sanpham;
                        $linkchitietsp = "ClientController.php?act=chitietsp&idsp=" . $id_sanpham;
                    ?>
                        <div class="col-lg-4 col-md-4 col-12 ">

                            <article class="single_product">
                                <figure>
                                    <div class="product_thumb">
                                        <a class="primary_img" href="<?= $linkchitietsp ?>"><img src="<?= $imgpath ?>"></a>
                                        <div class="label_product">
                                            <span class="label_sale">sale</span>
                                        </div>
                                        <div class="add_to_cart">
                                            <a data-id="<?= $id_sanpham ?>" onclick="addToCart(<?= $id_sanpham ?>, '<?= $ten_sanpham ?>', '<?= $gia_khuyen_mai ?>')">Thêm vào giỏ hàng</a>
                                        </div>
                                    </div>
                                    <figcaption class="product_content">
                                        <div class="price_box">
                                            <span class="old_price"><?= number_format((int)$gia_ban_dau, 0, ",", ".") ?><u>đ</u></span>
                                            <span class="current_price"><?= number_format((int)$gia_khuyen_mai, 0, ",", ".") ?><u>đ</u></span>
                                        </div>
                                        <h3 class="product_name"><a href="<?= $linkchitietsp ?>"><?= $ten_sanpham ?></a></h3>
                                    </figcaption>
                                </figure>
                            </article>
                        </div>
                    <?php endforeach;

                    ?>
                </div>

                <div class="shop_toolbar t_bottom">
                    <div class="pagination">
                        <ul>
                            <li class="current">1</li>
                            <li><a href="#">2</a></li>
                            <li><a href="#">3</a></li>
                            <li class="next"><a href="#">next</a></li>
                            <li><a href="#">>></a></li>
                        </ul>
                    </div>
                </div>
                <!--shop toolbar end-->
                <!--shop wrapper end-->
            </div>
        </div>
    </div>
</div>
<!--shop  area end-->
<script src="https://code.jquery.com/jquery-3.7.1.min.js"></script>
<?php
if (isset($_SESSION['login'])) {

    echo "
        <script>
            let totalProduct = document.getElementById('totalProduct');
            function addToCart(productId, productName, productPrice) {
                console.log(productId, productName, productPrice);
                // Sử dụng jQuery
                $.ajax({
                    type: 'POST',
                    // Đường dẫ tới tệp PHP xử lý dữ liệu
                    url: '../views/Client/addToCart.php',
                    data: {
                        id: productId,
                        name: productName,
                        price: productPrice
                    },
                    success: function(response) {
                        totalProduct.innerText = response;
                        alert('Bạn đã thêm sản phẩm vào giỏ hàng thành công!')
                    },
                    error: function(error) {
                        console.log(error);
                    }
                });
            }
        </script>";
} else {
    echo
    '
            <script>
                function addToCart(productId, productName, productPrice) {
                    alert("Bạn cần đăng nhập!")
                    }
            </script>
        ';
}
?>