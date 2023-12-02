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
                        <li><a href="ClientController.php?act=chitietdh">Chi tiết đơn hàng</a></li>
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
                            <div class="account_login_form">

                                <div class="row d-flex justify-content-center align-items-center h-100">
                                    <div class="col-lg-10 col-xl-8">
                                        <div class="card" style="border-radius: 10px;">
                                            <?php
                                            $id_user = $_SESSION['login']['hovaten'];
                                            ?>

                                            <div class="card-header px-4 py-5">
                                                <h5 class="text-muted mb-0">Cảm ơn bạn đã tin tưởng VTC-shop, <span style="color: #078fe0;"><?= $id_user ?></span>!</h5>
                                            </div>
                                            <div class="card-body p-4">
                                                <div class="d-flex justify-content-between align-items-center mb-4">
                                                    <p class="lead fw-normal mb-0" style="color: #078fe0;">Chi tiết đơn hàng</p>
                                                </div>
                                                <?php
                                                    $sql = "SELECT *
                                                    FROM tb_chitietdonhang
                                                    JOIN tb_sanpham ON tb_chitietdonhang.id_sanpham = tb_sanpham.id_sanpham
                                                    JOIN tb_donhang ON tb_chitietdonhang.id_donhang = tb_donhang.id_donhang
                                                    WHERE tb_chitietdonhang.id_donhang = " .$iddh;               
                                                    $list = pdo_query($sql);

                                                ?>
                                                <div class="card shadow-0 border mb-4">
                                                    <?php
                                                    foreach ($list as $ctdh) :
                                                        extract($ctdh);
                                                    ?>
                                                        <div class="card-body">
                                                            <div class="row">
                                                                <div class="col-md-2">
                                                                    <img src="../upload/all_sp/<?= $img_sanpham ?>" class="img-fluid" alt="Phone">
                                                                </div>
                                                                <div class="col-md-2 text-center d-flex justify-content-center align-items-center">
                                                                    <p class="text-muted mb-0"><?= $ten_sanpham ?></p>
                                                                </div>
                                                                <div class="col-md-2 text-center d-flex justify-content-center align-items-center">
                                                                    <p class="text-muted mb-0 small"><?= $mau_sanpham ?></p>
                                                                </div>
                                                                <div class="col-md-2 text-center d-flex justify-content-center align-items-center">
                                                                    <p class="text-muted mb-0 small">Dung lượng: <?= $dung_luong ?></p>
                                                                </div>
                                                                <div class="col-md-2 text-center d-flex justify-content-center align-items-center">
                                                                    <p class="text-muted mb-0 small">SL: <?= $soluong ?></p>
                                                                </div>
                                                                <div class="col-md-2 text-center d-flex justify-content-center align-items-center">
                                                                    <p class="text-muted mb-0 small"><?= number_format($gia_khuyen_mai, 0, ",", ".") ?></p>
                                                                </div>
                                                            </div>
                                                            <hr class="mb-4" style="background-color: #078fe0; opacity: 1;">
                                                        </div>
                                                    <?php
                                                    endforeach;
                                                    ?>
                                                </div>


                                                <div class="d-flex justify-content-between pt-2">
                                                    <p class="fw-bold mb-0">Order Details</p>
                                                    <p class="text-muted mb-0"><span class="fw-bold me-4">Tổng tiền</span><?= number_format($tongtien - 30000, 0, ",", ".")?></p>
                                                </div>

                                                

                                                <div class="d-flex justify-content-between mb-5">
                                                    <!-- <p class="text-muted mb-0">Recepits Voucher : 18KU-62IIK</p> -->
                                                    <p class="text-muted mb-0"><span class="fw-bold me-4">Phí Vận Chuyển</span> 30.000</p>
                                                </div>
                                            </div>
                                            <div class="card-footer border-0 px-4 py-5" style="background-color: #078fe0; border-bottom-left-radius: 10px; border-bottom-right-radius: 10px;">
                                                <h5 class="d-flex align-items-center justify-content-end text-white text-uppercase mb-0">Thành tiền: 
                                                    <span class="h2 mb-0 ms-2"><?= number_format($tongtien, 0, ",", ".")?></span></h5>
                                            </div>
                                        </div>
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