<!--breadcrumbs area start-->
<div class="breadcrumbs_area">
    <div class="container">
        <div class="row">
            <div class="col-12">
                <div class="breadcrumb_content">
                    <ul>
                        <li><a href="ClientController.php">Trang Chủ</a></li>
                        <li>Đăng Nhập</li>
                    </ul>
                </div>
            </div>
        </div>
    </div>
</div>
<!--breadcrumbs area end-->


<!-- customer login start -->
<div class="customer_login mt-60">
    <div class="container">
        <div class="row">
            <!--login area start-->
            <div class="col-lg-6 col-md-6">
                <div class="account_form">
                    <h2>Đăng Nhập</h2>
                    <form action="ClientController.php?act=login" method="post">
                        <p>
                            <label>Tên đăng nhập <span>*</span></label>
                            <input name="taikhoan" type="text">
                        </p>
                        <p>
                            <label>Mật khẩu <span>*</span></label>
                            <input name="matkhau" type="password">
                        </p>
                        <div class="login_submit">
                            <a href="#">Quên mật khẩu ?</a>
                            <label for="remember">
                                <input id="remember" type="checkbox">
                                Lưu mật khẩu
                            </label>
                            <button name="login" type="submit">Đăng Nhập</button>
                        </div>

                    </form>
                </div>
            </div>
            <!--login area start-->
        </div>
    </div>
</div>
<!-- customer login end -->
