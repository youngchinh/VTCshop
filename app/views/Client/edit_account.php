

<!--breadcrumbs area start-->
<div class="breadcrumbs_area">
    <div class="container">
        <div class="row">
            <div class="col-12">
                <div class="breadcrumb_content">
                    <ul>
                        <li><a href="ClientController.php">Trang Chủ</a></li>
                        <li><a href="ClientController.php?act=account">Tài khoản</a></li>
                        <li><a href="ClientController.php?act=edit-account">Sửa thông tin</a></li>
                    </ul>
                </div>
            </div>
        </div>
    </div>
</div>
<!--breadcrumbs area end-->

<!-- my account start  -->
<section class="main_content_area">
    <div class="container">
        <div class="account_dashboard">
            <div class="row">
                <div class="col-sm-12 col-md-3 col-lg-3">
                    <!-- Nav tabs -->
                    <div class="dashboard_tab_button">
                        <ul role="tablist" class="nav flex-column dashboard-list">
                            <li><a href="ClientController.php?act=account"  class="nav-link">Thông tin tài khoản</a></li>
                            <li><a href="ClientController.php?act=edit-account"  class="nav-link">Sửa thông tin</a></li>
                            <li><a href="ClientController.php?act=donhang"  class="nav-link">Đơn hàng</a></li>
                        </ul>
                    </div>
                </div>
                <div class="col-sm-12 col-md-9 col-lg-9">
                    <!-- Tab panes -->
                    <div class="tab-content">
                        <div class="tab-pane fade show active" id="account-details">
                            <h3>Sửa thông tin</h3>
                            <div class="login">
                                <div class="login_form_container">
                                    <div class="account_login_form">
                                        <?php 
                                            if (isset($_SESSION['login'])&&(is_array($_SESSION['login']))) {
                                                extract($_SESSION['login']);
                                            }
                                        ?>
                                        <form action="ClientController.php?act=edit-account" method="POST">
                                            <label>Họ và tên</label>
                                            <input type="text" name="hovaten" value="<?=$hovaten?>">

                                            <label>Email</label>
                                            <input type="text" name="email" value="<?=$email?>">

                                            <label>Tài khoản</label>
                                            <input type="text" name="tai_khoan" value="<?=$tai_khoan?>">

                                            <label>Password</label>
                                            <input type="text" name="mat_khau" value="<?=$mat_khau?>">

                                            <label>Số điện thoại</label>
                                            <input type="text" placeholder="MM/DD/YYYY" name="sdt" value="<?=$sdt?>">

                                            <label>Địa Chỉ</label>
                                            <input type="text" placeholder="Địa chỉ" name="dia_chi" value="<?=$dia_chi?>">

                                            <input type="hidden" name="id_taikhoan" value="<?=$id_taikhoan?>">
                                            <button style="background-color: green; border: none; height: 40px; color: #fff;" name="save" type="submit">Lưu thông tin</button>
                                            <?php
                                                if (isset($thongbao) && ($thongbao != "")) {
                                                    echo $thongbao;
                                                }
                                            ?>
                                        </form>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<!-- my account end   -->