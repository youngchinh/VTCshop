<?php 
    include "header.php";
    include "menu.php";
?>

    <!--breadcrumbs area start-->
    <div class="breadcrumbs_area">
        <div class="container">
            <div class="row">
                <div class="col-12">
                    <div class="breadcrumb_content">
                        <ul>
                            <li><a href="index.php">home</a></li>
                            <li>Chi tiết bài viết</li>
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

                <div class="col-lg-9 col-md-12">
                    <!--blog grid area start-->
                    <div class="blog_wrapper">
                        <article class="single_blog">
                            <figure>
                                <div class="post_header">
                                    <h3 class="post_title">Blog image post (sticky)</h3>
                                    <div class="blog_meta">
                                        <span class="author">Posted by : <a href="#">admin</a> / </span>
                                        <span class="post_date">On : <a href="#">April 10, 2022</a> /</span>
                                        <span class="post_category">In : <a href="#">Company, Image, Travel</a></span>
                                    </div>
                                </div>
                                <div class="blog_thumb">
                                    <a href="#"><img src="assets/img/blog/blog-big1.jpg" alt=""></a>
                                </div>
                                <figcaption class="blog_content">
                                    <div class="post_content">
                                        <p>Aenean et tempor eros, vitae sollicitudin velit. Etiam varius enim nec quam
                                            tempor, sed efficitur ex ultrices. Phasellus pretium est vel dui vestibulum
                                            condimentum. Aenean nec suscipit nibh. Phasellus nec lacus id arcu facilisis
                                            elementum. Curabitur lobortis, elit ut elementum congue, erat ex bibendum
                                            odio, nec iaculis lacus sem non lorem. Duis suscipit metus ante, sed
                                            convallis quam posuere quis. Ut tincidunt eleifend odio, ac fringilla mi
                                            vehicula nec. Nunc vitae lacus eget lectus imperdiet tempus sed in dui. Nam
                                            molestie magna at risus consectetur, placerat suscipit justo dignissim. Sed
                                            vitae fringilla enim, nec ullamcorper arcu.</p>
                                        <blockquote>
                                            <p>Quisque semper nunc vitae erat pellentesque, ac placerat arcu
                                                consectetur. In venenatis elit ac ultrices convallis. Duis est nisi,
                                                tincidunt ac urna sed, cursus blandit lectus. In ullamcorper sit amet
                                                ligula ut eleifend. Proin dictum tempor ligula, ac feugiat metus. Sed
                                                finibus tortor eu scelerisque scelerisque.</p>
                                        </blockquote>
                                        
                                    </div>
                                    <div class="entry_content">
                                        <div class="post_meta">
                                            <span>Tags: </span>
                                            <span><a href="#">, fashion</a></span>
                                            <span><a href="#">, t-shirt</a></span>
                                            <span><a href="#">, white</a></span>
                                        </div>

                                        <div class="social_sharing">
                                            <p>share this post:</p>
                                            <ul>
                                                <li><a href="#" title="facebook"><i class="fa fa-facebook"></i></a></li>
                                                <li><a href="#" title="twitter"><i class="fa fa-twitter"></i></a></li>
                                                <li><a href="#" title="pinterest"><i class="fa fa-pinterest"></i></a>
                                                </li>
                                                <li><a href="#" title="google+"><i class="fa fa-google-plus"></i></a>
                                                </li>
                                                <li><a href="#" title="linkedin"><i class="fa fa-linkedin"></i></a></li>
                                            </ul>
                                        </div>
                                    </div>
                                </figcaption>
                            </figure>
                        </article>
                        
                        <div class="comments_box">
                          
                           
                        </div>
                        <div class="comments_form">
                            <h3>Phản hồi </h3>
                            <p>Địa chỉ email của bạn sẽ không được công bố. Các trường bắt buộc được đánh dấu *</p>
                            <form action="#">
                                <div class="row">
                                    <div class="col-12">
                                        <label for="review_comment">Bình luận </label>
                                        <textarea name="comment" id="review_comment"></textarea>
                                    </div>
                                    <div class="col-lg-4 col-md-4">
                                        <label for="author">Name</label>
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
                                <button type="submit">search</button>
                            </form>
                        </div>
                        <div class="widget_list comments">
                            <h3>Recent Comments</h3>
                            <div class="post_wrapper">
                                <div class="post_thumb">
                                    <a href="chitiet_baiviet.php"><img src="assets/img/blog/comment2.png.jpg" alt=""></a>
                                </div>
                                <div class="post_info">
                                    <span> <a href="#">demo</a> says:</span>
                                    <a href="chitiet_baiviet.php">Quisque semper nunc</a>
                                </div>
                            </div>
                            <div class="post_wrapper">
                                <div class="post_thumb">
                                    <a href="chitiet_baiviet.php"><img src="assets/img/blog/comment2.png.jpg" alt=""></a>
                                </div>
                                <div class="post_info">
                                    <span><a href="#">admin</a> says:</span>
                                    <a href="chitiet_baiviet.php">Quisque orci porta...</a>
                                </div>
                            </div>
                            <div class="post_wrapper">
                                <div class="post_thumb">
                                    <a href="chitiet_baiviet.php"><img src="assets/img/blog/comment2.png.jpg" alt=""></a>
                                </div>
                                <div class="post_info">
                                    <span><a href="#">demo</a> says:</span>
                                    <a href="chitiet_baiviet.php">Quisque semper nunc</a>
                                </div>
                            </div>
                            <div class="post_wrapper">
                                <div class="post_thumb">
                                    <a href="chitiet_baiviet.php"><img src="assets/img/blog/comment2.png.jpg" alt=""></a>
                                </div>
                                <div class="post_info">
                                    <span><a href="#">admin</a> says:</span>
                                    <a href="chitiet_baiviet.php">Quisque semper nunc</a>
                                </div>
                            </div>
                        </div>
                        <div class="widget_list widget_post">
                            <h3>Recent Posts</h3>
                            <div class="post_wrapper">
                                <div class="post_thumb">
                                    <a href="chitiet_baiviet.php"><img src="assets/img/blog/blog12.jpg" alt=""></a>
                                </div>
                                <div class="post_info">
                                    <h3><a href="chitiet_baiviet.php">Blog image post</a></h3>
                                    <span>March 16, 2022 </span>
                                </div>
                            </div>
                            <div class="post_wrapper">
                                <div class="post_thumb">
                                    <a href="chitiet_baiviet.php"><img src="assets/img/blog/blog13.jpg" alt=""></a>
                                </div>
                                <div class="post_info">
                                    <h3><a href="chitiet_baiviet.php">Post with Gallery</a></h3>
                                    <span>March 16, 2022 </span>
                                </div>
                            </div>
                            <div class="post_wrapper">
                                <div class="post_thumb">
                                    <a href="chitiet_baiviet.php"><img src="assets/img/blog/blog14.jpg" alt=""></a>
                                </div>
                                <div class="post_info">
                                    <h3><a href="chitiet_baiviet.php">Post with Audio</a></h3>
                                    <span>March 16, 2022 </span>
                                </div>
                            </div>
                            <div class="post_wrapper">
                                <div class="post_thumb">
                                    <a href="chitiet_baiviet.php"><img src="assets/img/blog/blog15.jpg" alt=""></a>
                                </div>
                                <div class="post_info">
                                    <h3><a href="chitiet_baiviet.php">Post with Video</a></h3>
                                    <span>March 16, 2022 </span>
                                </div>
                            </div>
                        </div>
                        
                       
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!--blog section area end-->

<?php 
    include "footer.php";
?>