<?php 
    include "../views/Client/header.php";
    include "../views/Client/menu.php";
?>

    <!--breadcrumbs area start-->
    <div class="breadcrumbs_area">
        <div class="container">
            <div class="row">
                <div class="col-12">
                    <div class="breadcrumb_content">
                        <ul>
                            <li><a href="index.php">home</a></li>
                            <li>Tài khoản</li>
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
                        <form action="#">
                            <p>
                                <label>Tên đăng nhập hoặc Email <span>*</span></label>
                                <input type="text">
                            </p>
                            <p>
                                <label>Mật khẩu <span>*</span></label>
                                <input type="password">
                            </p>
                            <div class="login_submit">
                                <a href="#">Quên mật khẩu ?</a>
                                <label for="remember">
                                    <input id="remember" type="checkbox">
                                    Lưu mật khẩu
                                </label>
                                <button type="submit">Đăng Nhập</button>
                            </div>

                        </form>
                    </div>
                </div>
                <!--login area start-->

                <!--register area start-->
                <div class="col-lg-6 col-md-6">
                    <div class="account_form register">
                        <h2>Đăng Ký</h2>
                        <form action="#">
                            <p>
                                <label>Địa chỉ email <span>*</span></label>
                                <input type="text">
                            </p>
                            <p>
                                <label>Mật Khẩu <span>*</span></label>
                                <input type="password">
                            </p>
                            <div class="login_submit">
                                <button type="submit">Đăng Ký</button>
                            </div>
                        </form>
                    </div>
                </div>
                <!--register area end-->
            </div>
        </div>
    </div>
    <!-- customer login end -->

  <?php 
    include "../views/Client/footer.php";
  ?>