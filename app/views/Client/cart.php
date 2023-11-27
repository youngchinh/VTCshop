
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
                                <table>
                                    <thead>
                                        <tr>
                                            <th class="product_remove">Xóa</th>
                                            <th class="product_thumb">Ảnh Sản Phẩm</th>
                                            <th class="product_name">Sản Phẩm</th>
                                            <th class="product-price">Giá</th>
                                            <th class="product_quantity">Số Lượng</th>
                                            <th class="product_total">Tổng Tiền</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        <tr>
                                            <td class="product_remove"><a href="#"><i class="fa fa-trash-o"></i></a>
                                            </td>
                                            <td class="product_thumb"><a href="#"><img
                                                        src="../views/Client/assets/img/s-product/product.jpg" alt=""></a></td>
                                            <td class="product_name"><a href="#">Handbag fringilla</a></td>
                                            <td class="product-price">£65.00</td>
                                            <td class="product_quantity"><label>Số Lượng</label> <input min="1"
                                                    max="100" value="1" type="number"></td>
                                            <td class="product_total">£130.00</td>


                                        </tr>

                                        <tr>
                                            <td class="product_remove"><a href="#"><i class="fa fa-trash-o"></i></a>
                                            </td>
                                            <td class="product_thumb"><a href="#"><img
                                                        src="../views/Client/assets/img/s-product/product2.jpg" alt=""></a></td>
                                            <td class="product_name"><a href="#">Handbags justo</a></td>
                                            <td class="product-price">£90.00</td>
                                            <td class="product_quantity"><label>Số Lượng</label> <input min="1"
                                                    max="100" value="1" type="number"></td>
                                            <td class="product_total">£180.00</td>


                                        </tr>
                                        <tr>
                                            <td class="product_remove"><a href="#"><i class="fa fa-trash-o"></i></a>
                                            </td>
                                            <td class="product_thumb"><a href="#"><img
                                                        src="../views/Client/assets/img/s-product/product3.jpg" alt=""></a></td>
                                            <td class="product_name"><a href="#">Handbag elit</a></td>
                                            <td class="product-price">£80.00</td>
                                            <td class="product_quantity"><label>Số Lượng</label> <input min="1"
                                                    max="100" value="1" type="number"></td>
                                            <td class="product_total">£160.00</td>


                                        </tr>

                                    </tbody>
                                </table>
                            </div>
                            <div class="cart_submit">
                                <button type="submit">Cập nhật giỏ hàng</button>
                            </div>
                        </div>
                    </div>
                </div>
                <!--coupon code area start-->
                <div class="coupon_area">
                    <div class="row">
                        <div class="col-lg-6 col-md-6">
                            <div class="coupon_code left">
                                <h3>Mã giảm giá</h3>
                                <div class="coupon_inner">
                                    <p>Nhập mã giảm giá của bạn</p>
                                    <input placeholder="Nhập mã" type="text">
                                    <button type="submit">Áp Dụng</button>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-6 col-md-6">
                            <div class="coupon_code right">
                                <h3>Tổng Tiền</h3>
                                <div class="coupon_inner">
                                    <div class="cart_subtotal">
                                        <p>Giá sản phẩm</p>
                                        <p class="cart_amount">£215.00</p>
                                    </div>
                                    <div class="cart_subtotal ">
                                        <p class="cart_amount"><span>Phí vận chuyển</span> 30.000 VND</p>
                                    </div>

                                    <div class="cart_subtotal">
                                        <p>Tổng Tiền</p>
                                        <p class="cart_amount">£245.00</p>
                                    </div>
                                    <div class="checkout_btn">
                                        <a href="#">Thanh Toán</a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <!--coupon code area end-->
            </form>
        </div>
    </div>
    <!--shopping cart area end -->