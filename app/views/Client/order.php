<div class="Checkout_section mt-60">
    <div class="container">
        <div class="row">

            <div class="checkout_form">
                <div class="row">
                    <div class="col-lg-6 col-md-6">
                        <form action="#" method="POST">
                            <h3>Thông tin giao hàng</h3>
                            <?php
                            if (isset($_SESSION['login']) && (is_array($_SESSION['login']))) {
                                extract($_SESSION['login']);
                            }
                            ?>
                            <div class="row">
                                <div class="col-12 mb-20">
                                    <label>Họ và tên</label>
                                    <input type="text" name="hovaten" value="<?= $hovaten ?>">
                                </div>
                            
                                <div class="col-12 mb-20">
                                    <label>Địa Chỉ <span>*</span></label>
                                    <input type="text" placeholder="Địa chỉ" name="dia_chi" value="<?= $dia_chi ?>">
                                </div>
                                
                                <div class="col-lg-6 mb-20">
                                    <label>Số điện thoại<span>*</span></label>
                                    <input type="text"  name="sdt" value="<?="0" . $sdt ?>">

                                </div>
                                <div class="col-lg-6 mb-20">
                                    <label> Địa chỉ email <span>*</span></label>
                                    <input type="text" name="email" value="<?= $email ?>">

                                </div>
                                
                                <!--  -->
                                <div class="payment_method">
                                <div class="panel-default">
                                    <input id="payment" name="pttt" id="" value="1"  type="radio">
                                    <label for="payment" data-bs-toggle="collapse" data-bs-target="#method" aria-controls="method">Thanh toán khi nhận hàng</label>                  
                                </div>
                                <div class="panel-default">
                                    <input id="payment_defult" name="pttt" id="" value="1" type="radio">
                                    <label for="payment_defult" data-bs-toggle="collapse" data-bs-target="#collapsedefult" aria-controls="collapsedefult">Thanh toán chuyển khoản <img src="../views/Client/assets/img/icon/papyel.png" alt=""></label>
                                </div>
                                <div class="order_button">
                                    <button name="order_confirm" type="submit">Đặt hàng</button>
                                </div>
                            </div>
                            </div>
                        </form>
                    </div>
                    <div class="col-lg-6 col-md-6">
                        <form action="#">
                            <h3>Đơn hàng của bạn</h3>
                            <div class="order_table table-responsive">
                                <table>
                                    <thead>
                                        <tr>
                                            <th>Sản phẩm</th>
                                            <th>Tổng tiền</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        <?php 
                                            foreach ($cart as $item) {
                                        ?>
                                        <tr>
                                            <td> <?php echo $item['name']; ?> <strong> × <?php echo $item['quantity']; ?></strong></td>
                                            <td> <?php echo number_format($item['quantity'] * $item['price'], 0, ",", "."); ?></td>
                                        </tr>
                                    <?php 
                                            }
                                    ?>
                                    </tbody>
                                    <tfoot>
                                        <tr>
                                            <th>Tổng tiền</th>
                                            <td><?php echo number_format($_SESSION['sumTotal'], 0, ",", "."); ?></td>
                                        </tr>
                                        <tr>
                                            <th>Phí vận chuyển</th>
                                            <td><strong>30.000</strong></td>
                                        </tr>
                                        <tr class="order_total">
                                            <th>Thành tiền<nav></nav></th>
                                            <td><strong><?php echo number_format($_SESSION['resultTotal'], 0, ",", "."); ?></strong></td>
                                        </tr>
                                    </tfoot>
                                </table>
                            </div>
                            
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!-- <div class="coupon_area">
    <div class="row">
        <div class="col-lg-6 col-md-6">
            <div class="coupon_code left">
                <h3>Thông tin giao hàng</h3>
                <div  class="coupon_inner">
                    <?php
                    if (isset($_SESSION['login']) && (is_array($_SESSION['login']))) {
                        extract($_SESSION['login']);
                    }
                    ?>
                    <form  method="POST">
                        <label>Họ và tên</label>
                        <input type="text" name="hovaten" value="<?= $hovaten ?>"><br>

                        <label>Email</label>
                        <input type="text" name="email" value="<?= $email ?>"><br>

                        <label>Số điện thoại</label>
                        <input type="text"  name="sdt" value="<?= $sdt ?>"><br>

                        <label>Địa Chỉ</label>
                        <input type="text" placeholder="Địa chỉ" name="dia_chi" value="<?= $dia_chi ?>"><br>
                        <label>Phương thức thanh toán</label>
                        <p><input type="radio" name="pttt" id="" value="1" required> Thanh toán khi giao hàng</p>
                        <p><input type="radio" name="pttt" id="" value="2" required> Chuyển khoản ngân hàng</p><br>

                        <button style="background-color: green; border: none; height: 40px; color: #fff;" name="order_confirm" type="submit">Đặt Hàng</button>
                        
                    </form>
                </div>
            </div>
        </div>
        <div class="col-lg-6 col-md-6">
            <div class="coupon_code right">
                <h3>Tổng Tiền</h3>
                <div class="coupon_inner">
                    <div class="sub-order">
                        <table>
                            <tr>
                                <th>Sản phẩm</th>
                                <th>Thành tiền</th>
                            </tr>
                            <?php
                            // print_r($cart);
                            foreach ($cart as $item) {
                            ?>
                                <tr>
                                    <td>
                                        <?php echo $item['name']; ?><br>
                                        <small>SL: <?php echo $item['quantity']; ?></small>
                                    </td>
                                    <td><?php echo number_format($item['quantity'] * $item['price'], 0, ",", "."); ?> ₫</td>
                                </tr>
                            <?php
                            }
                            ?>
                            <tr>
                                <td><b>Tổng tiền</b></td>
                                <td><b><?php echo number_format($_SESSION['resultTotal'], 0, ",", "."); ?> ₫</b></td>
                            </tr>
                        </table>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div> -->