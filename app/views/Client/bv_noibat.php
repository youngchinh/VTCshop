   <!--Bài viết nổi bật-->
   <?php
    $top3_baiviet = loadtop3_baiviet();
    ?>


   <section class="blog_section mb-70">
       <div class="container">
           <div class="row">
               <div class="col-12">
                   <div class="section_title" >
                       <h2>Bài viết nổi bật</h2>
                   </div>
               </div>
           </div>
           <div class="row">
               <?php

                foreach ($top3_baiviet as $value) {
                    extract($value);
                    $imgpath = "../upload/all_sp/" . $img_baiviet;
                    $ctbv = "ClientController.php?act=chitietbaiviet&idbv=" . $id_baiviet;

                    echo
                    '
                    <div class="col-lg-4 col-md-6">
                        <article class="single_related">
                            <figure>
                                <div class="related_thumb">
                                <a href="' . $ctbv . '"> <img src="' . $imgpath . '" alt=""></a>
                                   
                                </div>
                                <figcaption class="related_content">
                                    <div class="blog_meta">
                                        <span class="author">By : <a href="#">admin</a> / </span>
                                        <span class="post_date"> Hà Nội  ' . $ngay . ' </span>
                                    </div>
                                    <p style="font-family: Rubik,sans-serif-serif;font-size: 24; font-weight: 500;color:royalblue">
                                        <a href="' . $ctbv . '">' . $tieu_de . '</a>
                                    </p>
                                </figcaption>
                            </figure>
                        </article>
                    </div>   
                ';
                };
                ?>
           </div>
       </div>

       
   </section >
   <!--blog area end-->