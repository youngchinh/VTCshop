<!--breadcrumbs area start-->
<div class="breadcrumbs_area">
    <div class="container">
        <div class="row">
            <div class="col-12">
                <div class="breadcrumb_content">
                    <ul>
                        <li><a href="ClientController.php">home</a></li>
                        <li><a href="ClientController.php?act=baiviet">Bài Viết</a></li>
                        <li><a href="#">Chi tiết bài viết</li>

                    </ul>
                </div>
            </div>
        </div>
    </div>
</div>
<!--breadcrumbs area end-->



<!--blog body area start-->
<div class="blog_details mt-60">
    <div class="container">
        <div class="row">
            <div class="blog_header">
                <h1>Bài viết chi tiết</h1>
            </div>
            <?php
            if (is_array($listbaiviet)) {
                extract($listbaiviet);
                $imgpath = "../upload/all_sp/" . $img_baiviet;
            }
            ?>


            <div class="col-lg-9 col-md-12">
                <!--blog grid area start-->
                <div class="blog_wrapper">
                    <article class="single_blog">
                        <figure>
                            <div class="blog_thumb">
                                <a href="#"><img src="<?= $imgpath ?>" alt=""></a>
                            </div>
                            <figcaption class="blog_content">
                                <h4><a href="#"><?= $tieu_de ?></a></h4>
                                <div class="blog_meta">
                                    <span class="author">Đăng bởi : <a href="#">admin</a> / </span>
                                    <span class="post_date">On : <a href="#">Hà Nội <?= $ngay ?></a></span>
                                </div>
                                <div class="blog_desc">
                                    <p> <?= $noi_dung ?></p>
                                </div>
                                <div class="blog_desc">
                                    <p> <?= $chitiet ?></p>
                                </div>
                                <footer class="readmore_button">
                                </footer>
                            </figcaption>
                        </figure>
                    </article>
                    <div class="related_posts">
                        <h3>Bài đăng gần đây </h3>

                        <div class="row">
                            <?php
                            foreach ($top3baiviet as $value) {
                                extract($value);
                                $imgpath = "../upload/all_sp/" . $img_baiviet;
                                $ctbv = "ClientController.php?act=chitietbaiviet&idbv=" . $id_baiviet;

                                echo
                                '
                                <div class="col-lg-4 col-md-6">
                                    <article class="single_related">
                                        <figure>
                                            <div class="related_thumb">
                                                <img src="' . $imgpath . '" alt="">
                                            </div>
                                            <figcaption class="related_content">
                                                <div class="blog_meta">
                                                    <span class="author">By : <a href="#">admin</a> / </span>
                                                    <span class="post_date"> Hà Nội  ' . $ngay . ' </span>
                                                </div>
                                                <h4><a href="' . $ctbv . '">' . $tieu_de . '</a></h4>
                                            </figcaption>
                                        </figure>
                                    </article>
                                </div>   
                                ';
                            };
                            ?>

                        </div>
                    </div>

                    <div class="comments_form">
                        <h3>Bình luận </h3>
                        <form action="#">
                            <div class="row">
                                <div class="col-12">
                                    <textarea style="height: 100px;" name="comment" id="review_comment"></textarea>
                                </div>
                                <div class="col-lg-4 col-md-4">
                                    <label for="author">Họ tên</label>
                                    <input id="author" type="text">

                                </div>
                                <div class="col-lg-4 col-md-4">
                                    <label for="email">Email </label>
                                    <input id="email" type="text">
                                </div>
                                <div class="col-lg-4 col-md-4">
                                    <label for="website">Website </label>
                                    <input id="website" type="text">
                                </div>
                            </div>
                            <button class="button" type="submit">Gửi bình luận</button>
                        </form>
                    </div>

                </div>
                <!--blog grid area start-->
            </div>
            <div class="col-lg-3 col-md-12">
                <div class="blog_sidebar_widget">
                    <div class="widget_list widget_search">
                        <h3>Search</h3>
                        <form action="#">
                            <input placeholder="Search..." type="text">
                            <button type="submit">Tìm kiếm</button>
                        </form>
                    </div>
                    <div class="widget_list widget_post">
                        <h3>Bài đăng gần đây</h3>
                        <?php
                        foreach ($top4baiviet as $baiviet) {
                            extract($baiviet);
                            $ctbv = "ClientController.php?act=chitietbaiviet&idbv=" . $id_baiviet;
                            $imgpath = "../upload/all_sp/" . $img_baiviet;

                            echo
                            '
                            <div class="post_wrapper">
                                <div class="post_thumb">
                                    <a href="' . $ctbv . '"><img src="' . $imgpath . '" alt=""></a>
                                </div>
                                <div class="post_info">
                                    <h3><a href="' . $ctbv . '">' . $tieu_de . '</a></h3>
                                    <span>Hà Nội   ' . $ngay . '</span>
                                </div>
                            </div>
                                    ';
                        }
                        ?>
                    </div>


                </div>
            </div>
        </div>
    </div>
</div>
<!--blog section area end-->