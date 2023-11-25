<!--header area start-->
<header>
    <!--header bottom satrt-->
    <div class="main_menu_area">
        <div class="container">
            <div class="row align-items-center">
                <div class="col-lg-3 col-md-12">
                    <div class="categories_menu">
                        <div class="categories_title">
                            <h2 class="categori_toggle">DANH MỤC</h2>
                        </div>
                        <div class="categories_menu_toggle">
                            <ul>
                            <?php 
                                foreach($loaddanhmuc as $danhmuc) {
                                    extract($danhmuc);
                                    $linkdm = "ClientController.php?act=sanpham&iddm=" .$id_danhmuc;
                                echo 
                                '
                                <li class="menu_item_children"><a href="'.$linkdm.'">'.$ten_danhmuc.'<i class="fa fa-angle-right"></i></a>
                                </li>
                                ';
                                }
                            ?>
                            </ul>
                        </div>
                    </div>
                </div>
                <div class="col-lg-9 col-md-12">
                    <div class="main_menu menu_position">
                        <nav>
                            <ul>
                                <li><a href="ClientController.php">Trang Chủ</a>

                                </li>
                                <li class="mega_items"><a href="#">shop<i class="fa fa-angle-down"></i></a>
                                    <div class="mega_menu">
                                        <ul class="mega_menu_inner">
                                            <li><a href="ClientController.php?act=sp_hotdeal">Sản phẩm bán chạy</a></li>
                                            <li><a href="ClientController.php?act=sp_new">Sản phẩm mới</a></li>
                                            <li><a href="ClientController.php?act=sp_sale">Sale</a></li>
                                            <li><a href="ClientController.php?act=sp_noibat">Sản phẩm nổi bật</a></li>
                                        </ul>
                                    </div>
                                </li>
                                <li><a href="ClientController.php?act=baiviet">BÀI VIẾT</a></li>
                                <li><a href="#">SẢN PHẨM </a></li>

                                <li><a href="ClientController.php?act=thongtin">THÔNG TIN</a></li>
                                <li><a href="ClientController.php?act=lienhe">LIÊN HỆ</a></li>
                            </ul>
                        </nav>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!--header bottom end-->
    </div>
</header>
<!--header area end-->