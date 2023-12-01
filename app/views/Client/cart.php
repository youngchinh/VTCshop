<!--breadcrumbs area start-->
<div class="breadcrumbs_area">
    <div class="container">
        <div class="row">
            <div class="col-12">
                <div class="breadcrumb_content">
                    <ul>
                        <li><a href="ClientController.php">Trang Chủ</a></li>
                        <li>Giỏ Hàng</li>
                    </ul>
                </div>
            </div>
        </div>
    </div>
</div>
<!--breadcrumbs area end-->

<!--shopping cart area start -->
<div class="shopping_cart_area mt-60">
    <div class="container">
        <form action="#">
            <div class="row">
                <div class="col-12">
                    <div class="table_desc">
                        <div class="cart_page table-responsive">

                            <?php
                            if (empty($dataDb)) {
                                echo '<h1>Chưa thêm sản phẩm vào giỏ hàng</h1>';
                            } else {
                            ?>
                                <table>
                                    <thead>
                                        <tr>
                                            <th class="product_remove">Xóa</th>
                                            <th class="product_thumb">STT</th>
                                            <th class="product_thumb">Ảnh Sản Phẩm</th>
                                            <th class="product_name">Sản Phẩm</th>
                                            <th class="product-price">Giá</th>
                                            <th class="product_quantity">Số Lượng</th>
                                            <th class="product_total">Tổng Tiền</th>
                                        </tr>
                                    </thead>
                                    <tbody id="order">
                                        <?php
                                        $sum_total = 0;
                                        $ship = 30000;
                                        foreach ($dataDb as $key => $product) :
                                            $imgpath = "../upload/all_sp/" . $product['img_sanpham'];
                                            //kiểm tra số lượng sản phẩm trong giỏ hàng
                                            $quantityInCart = 0;
                                            foreach ($_SESSION['cart'] as $item) {
                                                if ($item['id'] == $product['id_sanpham']) {
                                                    $quantityInCart = $item['quantity'];
                                                    break;
                                                }
                                            }
                                        ?>

                                            <tr>
                                                <td class="product_remove">
                                                    <a onclick="remoFormCart(<?= $product['id_sanpham'] ?> )"><i class="fa fa-trash-o"></i></a>
                                                </td>
                                                <td><?= $key + 1 ?></td>
                                                <td class="product_thumb"><a href="#">
                                                        <img src="<?= $imgpath ?>" alt=""></a>
                                                </td>
                                                <td class="product_name"><?= $product['ten_sanpham'] ?></td>
                                                <td class="product-price"><?= number_format((int)$product['gia_khuyen_mai'], 0, ",", ".") ?><u>đ</u></td>
                                                <td class="product_quantity">
                                                    <label>Số Lượng</label>
                                                    <input id="quantity_<?= $product['id_sanpham'] ?>" min="1" type="number" value="<?= (int)$quantityInCart ?>" oninput="updateQuantity(<?= $product['id_sanpham'] ?>, <?= $key ?> );">
                                                </td>
                                                <td class="product_total"><?= number_format((int)$product['gia_khuyen_mai'] * (int)$quantityInCart, 0, ",", ".") ?><u>đ</u></td>
                                            </tr>

                                        <?php
                                            $sum_total += (int)$product['gia_khuyen_mai'] * (int)$quantityInCart;
                                            $_SESSION['sumTotal'] = $sum_total;
                                            $sum_total_ship = $sum_total + $ship;
                                            $_SESSION['resultTotal'] = $sum_total_ship;
                                        endforeach;
                                        ?>
                                    </tbody>
                                </table>
                                <div class="cart_submit">
                                    <a href="ClientController.php?act=cart" class="button">Cập nhật giỏ hàng</a>
                                </div>
                                <!--coupon code area start-->
                                <div class="coupon_area">
                                    <div class="row">
                                        <div class="col-lg-6 col-md-6">
                                            
                                        </div>
                                        <div class="col-lg-6 col-md-6">
                                            <div class="coupon_code right">
                                                <h3>Tổng Tiền</h3>
                                                <div class="coupon_inner">
                                                    <div class="cart_subtotal">
                                                        <p>Giá sản phẩm</p>
                                                        <p class="cart_amount"><?= number_format((int)$sum_total, 0, ",", ".") ?><u>đ</u></p>
                                                    </div>
                                                    <div class="cart_subtotal">
                                                        <p>Phí vận chuyển</p>
                                                        <p class="cart_amount">30,000 <u>đ</u></p>
                                                    </div>

                                                    <div class="cart_subtotal">
                                                        <p>Tổng Tiền</p>
                                                        <p class="cart_amount"><?= number_format((int)$sum_total_ship, 0, ",", ".") ?><u>đ</u></p>
                                                    </div>
                                                    <div class="checkout_btn">
                                                    <div class="cart_submit">
                                                        <a href="ClientController.php?act=order " class="button">Xác nhận</a>
                                                    </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <!--coupon code area end-->
                            <?php
                            }
                            ?>

                        </div>

                    </div>
                </div>
            </div>

        </form>
    </div>
</div>
<!--shopping cart area end -->
<script src="https://code.jquery.com/jquery-3.7.1.min.js"></script>
<script>
    function updateQuantity(id, idex) {
        //lấy giá trị ô input
        let newQuantity = $('#quantity_' + id).val();
        if (newQuantity <= 0) {
            newQuantity = 1;
        }

        //gửi yêu cầu bằng ajax để cập nhật giỏ hàng
        $.ajax({
            type: 'POST',
            url: '../views/Client/updateQuantity.php',
            data: {
                id: id,
                quantity: newQuantity
            },
            success: function(response) {
                $.post('../views/Client/tableCartOrder.php', function(data) {
                    $('#order').html(data);
                })
            },
            error: function(error) {
                console.log(error);
            },
        })
    }

    function remoFormCart(id) {
        if (confirm("bạn có đồng ý xóa sản phẩm hay không")) {
            $.ajax({
                type: 'POST',
                url: '../views/Client/removeFromCart.php',
                data: {
                    id: id
                },
                success: function(response) {
                    $.post('../views/Client/tableCartOrder.php', function(data) {
                        $('#order').html(data);
                    })
                },
                error: function(error) {
                    console.log(error);
                },
            })
        }
    }
</script>