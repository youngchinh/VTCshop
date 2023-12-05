<div class="banner_area mb-40">
        <div class="container">
            <div class="row">
            <?php
            $sql = "SELECT * FROM tb_hethong";
            $banner = pdo_query($sql);
            foreach($banner as $banner){
                extract($banner);
                if($ten_logo== 'banner1.1'){
                $imgpath = "../upload/all_sp/" . $img_logo;
                echo '
                <div class="col-lg-3 col-md-3">
                <div class="single_banner mb-30">
                    <div class="banner_thumb">
                        <a href="#"><img src="'.$imgpath.'" alt=""></a>
                    </div>
                </div>
            </div>
                ';
                }
                if($ten_logo== 'banner1.2'){
                $imgpath = "../upload/all_sp/" . $img_logo;
                    echo '
                    <div class="col-lg-6 col-md-6">
                    <div class="single_banner mb-30">
                        <div class="banner_thumb">
                            <a href="#"><img src="'.$imgpath.'" alt=""></a>
                        </div>
                    </div>
                </div>
                    ';
                }
                if($ten_logo== 'banner1.3'){
                $imgpath = "../upload/all_sp/" . $img_logo;
                    echo '
                    <div class="col-lg-3 col-md-3">
                    <div class="single_banner mb-30">
                        <div class="banner_thumb">
                            <a href="#"><img src="'.$imgpath.'" alt=""></a>
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
    <!--banner area end-->