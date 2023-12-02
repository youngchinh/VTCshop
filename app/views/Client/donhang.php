<!--breadcrumbs area start-->
<div class="breadcrumbs_area">
    <div class="container">
        <div class="row">
            <div class="col-12">
                <div class="breadcrumb_content">
                    <ul>
                        <li><a href="ClientController.php">Trang Chủ</a></li>
                        <li><a href="ClientController.php?act=account">Tài khoản</a></li>
                        <li><a href="ClientController.php?act=donhang">Đơn hàng</a></li>
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
                            <li><a href="ClientController.php?act=edit-account" class="nav-link">Sửa thông tin</a></li>
                            <li><a href="ClientController.php?act=donhang" class="nav-link">Đơn hàng</a></li>
                        </ul>
                    </div>
                </div>
                <div class="col-sm-12 col-md-9 col-lg-9">
                    <!-- Tab panes -->
                    <div class="tab-content">
                        <div class="tab-pane fade show active" id="account-details">
                            <div class="login">
                                <div class="login_form_container">
                                    <div class="account_login_form">
                                        <table class="table">
                                            <thead>
                                                <tr>
                                                    <th>STT</th>
                                                    <th>Tên người nhận</th>
                                                    <th>Ngày đặt hàng</th>
                                                    <th>Trạng thái</th>
                                                    <th>Thành Tiền</th>
                                                    <th>Actions</th>
                                                </tr>
                                            </thead>
                                                <?php
                                            
                                                    $id_user = $_SESSION['login']['id_taikhoan'];
                                                    $sql = "SELECT *
                                                    FROM tb_donhang
                                                    JOIN tb_trangthai_donhang ON tb_donhang.id_trangthai_dh = tb_trangthai_donhang.id_trangthai_dh
                                                    WHERE tb_donhang.id_taikhoan= " . $id_user;
                                                    $list = pdo_query($sql);
                                                    
                                                ?>
                                            <tbody>
                                                <?php 
                                                $i = 1;
                                                    foreach ($list as $dh) :
                                                        extract($dh);
                                                ?>
                                                <tr>
                                                    <td><?= $i++ ?></td>
                                                    <td><?= $hovaten ?></td>
                                                    <td><?= $ngay_dat_hang?> </td>
                                                    <td style="color: green;"><a href="#"><?= $ten_trangthai?></a></td>
                                                    <td><?= $tongtien?></td>
                                                    <td style="color: blue;"><a href="ClientController.php?act=chitietdh&iddh=<?=$id_donhang?>">Chi tiết</a></td>
                                                </tr>
                                                <?php 
                                                    endforeach;
                                                ?>
                                            </tbody>
                                        </table>
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