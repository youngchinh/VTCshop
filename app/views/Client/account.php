

<!--breadcrumbs area start-->
<div class="breadcrumbs_area">
    <div class="container">
        <div class="row">
            <div class="col-12">
                <div class="breadcrumb_content">
                    <ul>
                        <li><a href="ClientController.php">Trang Chủ</a></li>
                        <li><a href="ClientController.php?act=account">Tài khoản</a></li>
                        <li><a href="ClientController.php?act=account">Thông tin tài khoản</a></li>
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
                            <li><a href="ClientController.php?act=account" class="nav-link">Thông tin tài khoản</a></li>
                            <li><a href="ClientController.php?act=edit-account"  class="nav-link">Sửa thông tin</a></li>
                            <li><a href="ClientController.php?act=donhang"  class="nav-link">Đơn hàng</a></li>
                        </ul>
                    </div>
                </div>
                <div class="col-sm-12 col-md-9 col-lg-9">
                    <!-- Tab panes -->
                    <div class="tab-content">
                        <div class="tab-pane fade show active" id="account-details">
                            <h3>Thông tin tài khoản</h3>
                            <div class="login">
                                <div class="login_form_container">
                                    <div class="account_login_form">
                                        <?php 
                                            if (isset($_SESSION['login'])&&(is_array($_SESSION['login']))) {
                                                extract($_SESSION['login']);
                                            }
                                        ?>
                                        <form>
                                            <h4> Họ và tên :<a><?=$hovaten?></a></h4>  <br>
                                            <h4> Email : <a><?=$email?></a></h4>  <br>
                                            <h4> Tài khoản: <a><?=$tai_khoan?></a></h4>  <br>
                                            <h4> Password: <a>******</a></h4>  <br>
                                            <h4> Số điện thoại: <a>+84<?=$sdt?></a></h4>  <br>
                                            <h4> Địa Chỉ: <a><?=$dia_chi?></a></h4>  <br>

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