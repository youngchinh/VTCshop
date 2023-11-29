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
                foreach ($listsp_hot as $sp) :
                    extract($sp);
                    $linkchitietsp = "ClientController.php?act=chitietsp&idsp=" . $id_sanpham;
                    $imgpath = "../upload/sp_hot/" . $img_sanpham;
                ?>
                 <div class="col-lg-4">
                     <article class="single_product">
                         <figure>
                             <div class="product_thumb">
                                 <a class="primary_img" href="<?= $linkchitietsp ?>"><img src="<?= $imgpath ?>" alt=""></a>
                                 <div class="label_product">
                                     <span class="label_sale">Hot</span>
                                 </div>
                             </div>
                             <figcaption class="product_content">
                                 <div class="price_box">
                                     <span class="current_price"><?= number_format((int)$gia_khuyen_mai, 0, ",", ".") ?><u>đ</u></span>
                                 </div>
                                 <h3 class="product_name"><a href="<?= $linkchitietsp ?>"><?= $ten_sanpham ?></a></h3>
                                 <div class="add_to_cart">
                                     <a data-id="<?= $id_sanpham ?>" onclick="addToCart(<?= $id_sanpham ?>, '<?= $ten_sanpham ?>', '<?= $gia_khuyen_mai ?>')">Thêm vào giỏ hàng</a>
                                 </div>
                             </figcaption>
                         </figure>
                     </article>
                 </div>
             <?php
                endforeach;
                ?>
         </div>
     </div>
 </section>
 <!--featured product area end-->

 <script src="https://code.jquery.com/jquery-3.7.1.min.js"></script>
 <?php
    if (isset($_SESSION['login'])) {

        echo "
        <script>
            let totalProduct = document.getElementById('totalProduct');
            function addToCart(productId, productName, productPrice) {
                console.log(productId, productName, productPrice);
                // Sử dụng jQuery
                $.ajax({
                    type: 'POST',
                    // Đường dẫ tới tệp PHP xử lý dữ liệu
                    url: '../views/Client/addToCart.php',
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
        </script>";
    } else {
        echo
        '
            <script>
                function addToCart(productId, productName, productPrice) {
                    alert("Bạn cần đăng nhập!")
                    }
            </script>
        ';
    }
    ?>