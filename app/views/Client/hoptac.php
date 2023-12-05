
    <!--brand area start-->
    <div class="brand_area mb-70">
        <div class="container">
            <div class="row">
            <?php
                $sql = "SELECT * FROM tb_hethong";
                $banner = pdo_query($sql);
                foreach ($banner as $banner) {
                    extract($banner);
                    if ($ten_logo == 'banner4.1') {
                        $imgpath = "../upload/all_sp/" . $img_logo;
                        echo '
                        <div class="col-12">
                            <div class="brand_container owl-carousel">
                                <div class="brand_items">
                                <div class="brand_items">
                                    <div class="single_brand">
                                        <a href="#"><img src="../views/Client/assets/img/brand/brand2.jpg" alt=""></a>
                                    </div>
                                </div>
                            </div>
                        </div>
                ';
                    }
                }
                ?>
                
            </div>
        </div>
    </div>
    <!--brand area end-->