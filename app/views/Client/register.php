            <!--breadcrumbs area start-->
            <div class="breadcrumbs_area">
                <div class="container">
                    <div class="row">
                        <div class="col-12">
                            <div class="breadcrumb_content">
                                <ul>
                                    <li><a href="ClientController.php">Trang Chủ</a></li>
                                    <li>Đăng Ký</li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <!--breadcrumbs area end-->
            <!--register area start-->
            <div class="customer_login mt-60">
                <div class="container">
                    <div class="row">
                        <!--login area start-->
                        <div class="col-lg-6 col-md-6">
                            <div class="account_form register">
                                <h2>Đăng Ký</h2>
                                <form action="ClientController.php?act=dangky" method="POST" role="form">
                        <div class="card-body">
                            <div class="form-group">
                                <label> Họ và tên</label>
                                <input name="hovaten" placeholder="họ và tên *" type="text" required>
                            </div>

                            <div class="form-group">
                                <label> Email</label>
                                <input name="email" placeholder="Email *" type="email" required>
                            </div>

                            <div class="form-group">
                                <label> Tài Khoản</label>
                                <input name="tai_khoan" placeholder="Tài Khoản *" type="text" required>
                            </div>

                            <div class="form-group">
                                <label> Mật Khẩu</label>
                                <input name="mat_khau" placeholder="Mật Khẩu *" type="password" required>
                            </div>

                            <div class="form-group">
                                <label> Số điện thoại</label>
                                <input name="sdt" placeholder="số điện thoại *" type="number" >
                            </div>

                            <div class="form-group">
                                <label> Địa chỉ</label>
                                <input name="dia_chi" placeholder="địa chỉ liên hệ *" type="text">
                            </div>
                            <!-- /.card-body -->

                            <div class="card-footer">
                                <input class="btn btn-primary" style="background-color: blue; color :#fff;" name="dangky" type="submit" value="Đăng Ký">
                            </div>


                            <?php
                            if (isset($thongbao) && ($thongbao != "")) {
                                echo $thongbao;
                            }
                            // tránh người dùng có thể spam form vào database
                            // Load lại trang sau 2 giây
                            if (isset($_POST['dangky']) && ($_POST['dangky'])) {
                                echo '
                                    <script>
                                    setTimeout(function() {
                                    window.location.href = "ClientController.php?act=login"; }, 2000);
                                    </script>
                                    ';
                            }
                            ?>

                    </form>
                            </div>
                        </div>
                        <!--register area end-->
                    </div>
                </div>
            </div>
            <!-- customer login end -->