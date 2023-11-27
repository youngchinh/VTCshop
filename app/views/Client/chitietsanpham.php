<!--breadcrumbs area start-->
<div class="breadcrumbs_area">
    <div class="container">
        <div class="row">
            <div class="col-12">
                <div class="breadcrumb_content">
                    <ul>
                        <li><a href="ClientController.php">Trang Chủ</a></li>
                        <li>Chi tiết sản phẩm</li>
                    </ul>
                </div>
            </div>
        </div>
    </div>
</div>
<!--breadcrumbs area end-->

<!--product details start-->
<?php
    if (is_array($chitietsp)) {
        extract($chitietsp);
        $imgpath = "../upload/all_sp/" . $img_sanpham;
    }
    echo
    '
        <div class="product_details mt-60 mb-60">
            <div class="container">
                <div class="row">
                    <div class="col-lg-6 col-md-6">
                        <div class="product-details-tab">
                            <div id="img-1" class="zoomWrapper single-zoom">
                                <a href="#">
                                    <img id="zoom1" src="'.$imgpath.'" data-zoom-image="'.$imgpath.'" alt="big-1">
                                </a>
                            </div>
                            
                        </div>
                    </div>
                    <div class="col-lg-6 col-md-6">
                        <div class="product_d_right">
                            <form action="#">
        
                                <h1>'.$ten_sanpham.'</h1>
                                <div class="product_nav">
                                </div>
                                <div class=" product_ratting">
                                    <ul>
                                        <li><a href="#"><i class="fa fa-star"></i></a></li>
                                        <li><a href="#"><i class="fa fa-star"></i></a></li>
                                        <li><a href="#"><i class="fa fa-star"></i></a></li>
                                        <li><a href="#"><i class="fa fa-star"></i></a></li>
                                        <li><a href="#"><i class="fa fa-star"></i></a></li>
                                        <li class="review"><a href="#"> (Đánh giá của khách hàng ) </a></li>
                                    </ul>
        
                                </div>
                                <div class="price_box">
                                    <span class="current_price">'.$gia_khuyen_mai.'</span>
                                    <span class="old_price">'.$gia_ban_dau.'</span>
        
                                </div>
                                <div class="product_desc">
                                    <p>'.$mota_sanpham.'</p>
                                    <span> Màu: <a style="color: blue;">'.$mau_sanpham.'</a></span> <br>
                                    <span> Dung lượng: <a style="color: blue;">'.$dung_luong.'</a></span> <br>
                                    <span> Số lượng: <a style="color: blue;">'.$so_luong.'</a></span>
                                </div>
                                <div class="product_timing">
                                    <div data-countdown="2023/12/15"></div>
                                </div>
        
                                <div class="product_variant quantity">
                                    <label>Số Lượng</label>
                                    <input min="1" max="'.$so_luong.'" value="1" type="number">
                                    <button class="button" type="submit">Thêm vào giỏ hàng</button>
                                </div>';
                                $sql = "SELECT * FROM tb_danhmuc WHERE id_danhmuc=" . $id_danhmuc;
                                $danhmuc = pdo_query($sql);
                                foreach ($danhmuc as $value) {
                                    extract($value);
                                    echo '
                                <div class="product_meta">
                                    <span>Danh Mục: <a href="ClientController.php?act=danhmuc&iddm='.$id_danhmuc.'">'.$ten_danhmuc.'</a></span>
                                </div>
                            </form>
                            <div class="priduct_social">
                                <ul>
                                    <li><a class="facebook" href="#" title="facebook"><i class="fa fa-facebook"></i>
                                            Like</a></li>
                                    <li><a class="twitter" href="#" title="twitter"><i class="fa fa-twitter"></i> tweet</a>
                                    </li>
                                    <li><a class="pinterest" href="#" title="pinterest"><i class="fa fa-pinterest"></i>
                                            save</a></li>
                                    <li><a class="google-plus" href="#" title="google +"><i class="fa fa-google-plus"></i>
                                            share</a></li>
                                    <li><a class="linkedin" href="#" title="linkedin"><i class="fa fa-linkedin"></i>
                                            linked</a></li>
                                </ul>
                            </div>
        
                        </div>
                    </div>
                </div>
            </div>
        </div>
        ';
                                }
?>
<!--product details end-->

<!--product info start-->
<div class="product_d_info mb-60">
    <div class="container">
        <div class="row">
            <div class="col-12">
                <div class="product_d_inner">
                    <div class="product_info_button">
                        <ul class="nav" role="tablist">
                            <li>
                                <a data-bs-toggle="tab" href="#reviews" role="tab" aria-controls="reviews" aria-selected="false">Đánh giá</a>
                            </li>
                        </ul>
                    </div>
                    <div class="tab-content">
                        <div class="tab-pane fade" id="reviews" role="tabpanel">
                            <div class="reviews_wrapper">
                                <!-- list bình luận -->
                                <h2>1 bình luân về sản phẩm</h2>
                                <div class="reviews_comment_box">
                                    <div class="comment_thmb">
                                        <img src="../views/Client/assets/img/blog/comment2.jpg" alt="">
                                    </div>
                                    <div class="comment_text">
                                        <div class="reviews_meta">
                                            <div class="star_rating">
                                                <ul>
                                                    <li><a href="#"><i class="ion-ios-star"></i></a></li>
                                                    <li><a href="#"><i class="ion-ios-star"></i></a></li>
                                                    <li><a href="#"><i class="ion-ios-star"></i></a></li>
                                                    <li><a href="#"><i class="ion-ios-star"></i></a></li>
                                                    <li><a href="#"><i class="ion-ios-star"></i></a></li>
                                                </ul>
                                            </div>
                                            <p><strong>admin </strong>- September 12, 2022</p>
                                            <span>Sản phẩm đẹp</span>
                                        </div>
                                    </div>
                                </div>
                                <!-- list bình luận -->

                                <!-- đánh giá sao -->
                                <div class="product_ratting mb-10">
                                    <h3>Đánh giá</h3>
                                    <ul>
                                        <li><a href="#"><i class="fa fa-star"></i></a></li>
                                        <li><a href="#"><i class="fa fa-star"></i></a></li>
                                        <li><a href="#"><i class="fa fa-star"></i></a></li>
                                        <li><a href="#"><i class="fa fa-star"></i></a></li>
                                        <li><a href="#"><i class="fa fa-star"></i></a></li>
                                    </ul>
                                </div>
                                <!-- đánh giá sao -->

                                <!-- Gửi bình luận -->
                                <div class="product_review_form">
                                    <form action="#">
                                        <div class="row">
                                            <div class="col-12">
                                                <label for="review_comment">Bình luận </label>
                                                <textarea name="noi_dung"></textarea>
                                            </div>
                                            <div class="col-lg-6 col-md-6">
                                                <label for="author">Name</label>
                                                <input name="hovaten" type="text">
                                            </div>
                                        </div>
                                        <button name="send" type="submit">Gửi</button>
                                    </form>
                                </div>
                                <!-- Gửi bình luận -->
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<!--product info end-->

<!--product area start   SP tương tự-->
<section class="product_area related_products">
    <div class="container">
        <div class="row">
            <div class="col-12">
                <div class="section_title">
                    <h2>Sản Phẩm tương tự </h2>
                </div>
            </div>
        </div>
        <div class="product_carousel product_column5 owl-carousel">
        <?php 
            foreach ($sp_lienquan as $sp) {
                extract($sp);
                $linkchitietsp = "ClientController.php?act=chitietsp&idsp=" .$id_sanpham;
                $imgpath = "../upload/all_sp/" . $img_sanpham;
                echo 
            '
            <article class="single_product">
                <figure>
                    <div class="product_thumb">
                        <a class="primary_img" href="'.$linkchitietsp.'"><img src="'.$imgpath.'" alt=""></a>
                        <div class="label_product">
                            <span class="label_sale">sale</span>
                        </div>
                        <div class="add_to_cart">
                            <a href="cart.html" title="add to cart">Thêm vào giỏ hàng</a>
                        </div>
                    </div>
                    <figcaption class="product_content">
                        <div class="price_box">
                            <span class="old_price">'.$gia_ban_dau.'</span>
                            <span class="current_price">'.$gia_khuyen_mai.'</span>
                        </div>
                        <h3 class="product_name"><a href="'.$linkchitietsp.'">'.$ten_sanpham.'</a></h3>
                    </figcaption>
                </figure>
            </article>
        
            ';
            }
            
        ?>
        </div>
    </div>
</section>
<!--product area end-->