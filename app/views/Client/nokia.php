<!--breadcrumbs area start-->
<div class="breadcrumbs_area">
    <div class="container">
        <div class="row">
            <div class="col-12">
                <div class="breadcrumb_content">
                    <ul>
                        <li><a href="ClientController.php">Trang Chủ</a></li>
                        <li>Danh mục</li>
                        <li>Nokia</li>
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
                                    $linkdm = "ClientController.php?act=danhmuc&iddm=" . $id_danhmuc;
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
                    foreach ($list_sp as $sp) {
                        extract($sp);
                        $imgpath = "../upload/all_sp/" . $img_sanpham;
                        $linkchitietsp = "ClientController.php?act=chitietsp&idsp=" . $id_sanpham;
                        echo
                        '
                            <div class="col-lg-4 col-md-4 col-12 ">
                                <article class="single_product">
                                    <figure>
                                        <div class="product_thumb">
                                            <a class="primary_img" href="'.$linkchitietsp.'"><img src="' . $imgpath . '"></a>
                                            <div class="label_product">
                                            </div>
                                            <div class="add_to_cart">
                                                <a href="cart.html" title="add to cart">Thêm vào giỏ hàng</a>
                                            </div>
                                        </div>
                                        <div class="product_content grid_content">
                                            <div class="price_box">
                                                <span class="old_price">' . $gia_ban_dau . '</span>
                                                <span class="current_price">' . $gia_khuyen_mai . '</span>
                                            </div>
                                            <div class="product_ratings">
                                                <ul>
                                                    <li><a href="#"><i class="ion-android-star-outline"></i></a></li>
                                                    <li><a href="#"><i class="ion-android-star-outline"></i></a></li>
                                                    <li><a href="#"><i class="ion-android-star-outline"></i></a></li>
                                                    <li><a href="#"><i class="ion-android-star-outline"></i></a></li>
                                                    <li><a href="#"><i class="ion-android-star-outline"></i></a></li>
                                                </ul>
                                            </div>
                                            <h3 class="product_name grid_name"><a href="'.$linkchitietsp.'">' . $ten_sanpham . '</a></h3>
                                        </div>
                                    </figure>
                                </article>
                                </div>
                                ';
                    }
                    ?>
                </div>

                <div class="shop_toolbar t_bottom">
                    <div class="pagination">
                        <ul>
                            <li><a href="#">1</a></li>
                            <li><a href="#">2</a></li>
                            <li><a href="#">3</a></li>
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