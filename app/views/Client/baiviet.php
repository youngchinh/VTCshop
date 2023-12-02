<!--breadcrumbs area start-->
<div class="breadcrumbs_area">
    <div class="container">
        <div class="row">
            <div class="col-12">
                <div class="breadcrumb_content">
                    <ul>
                        <li><a href="ClientController.php">home</a></li>
                         <li><a href="ClientController.php?"></a>Home</a></li>
                        <li><a href="ClientController.php?act=baiviet">Bài Viết</a></li>
                    </ul>
                </div>
            </div>
        </div>
    </div>
</div>
<!--breadcrumbs area end-->

<!--blog area start-->
<div class="blog_page_section mt-60">
    <div class="container">
        <div class="row">
            <div class="col-lg-9">
                <div class="blog_wrapper">
                    <div class="blog_header">
                        <h1>Bài viết</h1>
                    </div>
                    <div class="row">
                        <?php
                        foreach ($listbaiviet as $baiviet) {
                            extract($baiviet);
                            $imgpath = "../upload/all_sp/" . $img_baiviet;
                            $ctbv = "ClientController.php?act=chitietbaiviet&idbv=".$id_baiviet ;

                            echo
                            '
                                    <div class="col-lg-6 col-md-6">
                                    <article class="single_blog mb-60">
                                        <figure>
                                            <div class="blog_thumb">
                                                <a href="'.$ctbv.'"><img src="' . $imgpath . '" alt=""></a>
                                            </div>
                                            <figcaption class="blog_content">
                                                <h4><a href="'.$ctbv.'">' . $tieu_de . '</a></h4>
                                                <div class="blog_meta">
                                                    <span class="author">Đăng bởi : <a href="#">admin</a> / </span>
                                                    <span class="post_date">On : <a href="#">Hà Nội    ' . $ngay . '</a></span>
                                                </div>
                                                <div class="blog_desc">
                                                    <p>' . $noi_dung . '</p>
                                                </div>
                                                <footer class="readmore_button">
                                                    <a href="'.$ctbv.'">Xem Thêm</a>
                                                </footer>
                                            </figcaption>
                                        </figure>
                                    </article>
                                </div>
                                    ';
                        }
                        ?>

                    </div>
                </div>
            </div>
            <div class="col-lg-3">
                <div class="blog_sidebar_widget">
                    <div class="widget_list widget_search">
                        <h3>Search</h3>
                        <form action="#">
                            <input placeholder="Search..." type="text">
                            <button type="submit">search</button>
                        </form>
                    </div>
                    <div class="widget_list comments">
                        
                    </div>
                    <div class="widget_list widget_post">

                        <h3>Recent Posts</h3>
                        <?php
                        foreach ($listbaiviet as $baiviet) {
                            extract($baiviet);
                            $ctbv = "ClientController.php?act=chitietbaiviet&idbv=".$id_baiviet ;
                            $imgpath = "../upload/all_sp/" . $img_baiviet;

                            echo
                            '
                            <div class="post_wrapper">
                                <div class="post_thumb">
                                    <a href="'.$ctbv.'"><img src="' . $imgpath . '" alt=""></a>
                                </div>
                                <div class="post_info">
                                    <h3><a href="'.$ctbv.'">' . $tieu_de . '</a></h3>
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
<!--blog area end-->

<!--blog pagination area start-->
<div class="blog_pagination">
    <div class="container">
        <div class="row">
            <div class="col-12">
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
        </div>
    </div>
</div>
<!--blog pagination area end-->