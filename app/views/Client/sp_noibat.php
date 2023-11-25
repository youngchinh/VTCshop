 <!--featured product area start  SP1: Featured Products-->
 <section class="featured_product_area mb-70">
        <div class="container">
            <div class="row">
                <div class="col-12">
                    <div class="section_title">
                        <h2>Sản phẩm nổi bật</h2>
                    </div>
                </div>
            </div>
            <div class="row featured_container featured_column3">
                <?php 
                    foreach($listsp_hot as $sp) {
                        extract($sp);
                        $imgpath = "../upload/sp_hot/" . $img_sanpham;
                        echo 
                        '
                        <div class="col-lg-4">
                            <article class="single_product">
                                <figure>
                                    <div class="product_thumb">
                                        <a class="primary_img" href="chitietsanpham.php"><img
                                                src="'.$imgpath.'" alt=""></a>
                                        <div class="label_product">
                                            <span class="label_sale">Hot</span>
                                        </div>
                                    </div>
                                    <figcaption class="product_content">
                                        <div class="price_box">
                                            <span class="current_price">'.$gia_khuyen_mai.'</span>
                                        </div>
                                        <h3 class="product_name"><a href="chitietsanpham.php">'.$ten_sanpham.'</a></h3>
                                        <div class="add_to_cart">
                                            <a href="cart.html" title="add to cart">Thêm vào giỏ hàng</a>
                                        </div>
                                    </figcaption>
                                </figure>
                            </article>
                        </div>
                        ';
                    } 
                ?>
            </div>
        </div>
    </section>
    <!--featured product area end-->