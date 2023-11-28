 <!--product area start   Hot Deals Products-->
 <section class="product_area mb-46">
     <div class="container">
         <div class="row">
             <div class="col-12">
                 <div class="section_title">
                     <h2>Sản phẩm Sale</h2>
                 </div>
             </div>
         </div>


         <div class="product_carousel product_column5 owl-carousel">
             <!-- // 5 sp  Hot Deals Products -->
             <?php
                foreach ($listsptop5 as $top5) {
                    extract($top5);
                    $imgpath = "../upload/sp_topsale/" . $img_sanpham;
                    $linkchitietsp = "ClientController.php?act=chitietsp&idsp=" . $id_sanpham;
                    echo
                    '
                        <article class="single_product">
                    <figure>
                        <div class="product_thumb">
                            <a class="primary_img" href="' . $linkchitietsp . '"><img
                                    src="' . $imgpath . '"></a>
                            <div class="label_product">
                                <span class="label_sale">sale</span>
                            </div>
                            <div class="add_to_cart">
                            <a data-id="'.$id_sanpham.'" onclick="addToCart('.$id_sanpham.', '.$ten_sanpham.', '.$gia_khuyen_mai.')">Thêm vào giỏ hàng</a>
                            </div>
                        </div>
                        <figcaption class="product_content">
                            <div class="price_box">
                                <span class="old_price">' . $gia_ban_dau . '</span>
                                <span class="current_price">' . $gia_khuyen_mai . '</span>
                            </div>
                            <h3 class="product_name"><a href="' . $linkchitietsp . '">' . $ten_sanpham . '</a></h3>
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

 <script src="https://code.jquery.com/jquery-3.7.1.min.js"></script>
 <script>
     let totalProduct = document.getElementById('totalProduct');
     function addToCart(productId, productName, productPrice) {
        //  console.log(productId, productName, productPrice);
         // Sử dụng jQuery
         $.ajax({
             type: 'POST',
             // Đường dẫ tới tệp PHP xử lý dữ liệu
             url: './Client/addToCart.php',
             data: {
                 id: productId,
                 name: productName,
                 price: productPrice
             },
             success: function(response) {
                 totalProduct.innerText = response;
                 alert('Bạn đã thêm sản phẩm vào giỏ hàng thành công!')
             },
             error: function(error) {
                 console.log(error);
             }
         });
     }
 </script>