<div class="coupon_area">
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
</div>