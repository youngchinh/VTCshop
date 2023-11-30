<!--breadcrumbs area start-->
<div class="breadcrumbs_area">
    <div class="container">
        <div class="row">
            <div class="col-12">
                <div class="breadcrumb_content">
                    <ul>
                        <li><a href="ClientController.php">Trang Chủ</a></li>
                        <li ><a href="ClientController.php?act=account">Tài khoản</li>
                        <li><a href="ClientController.php?act=donhang">Đơn Hàng</li>
                        <li> Chi Tiết Đơn Hàng</li>
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
                                        <th class="product_thumb">STT</th>
                                        <th class="product_thumb">Người Nhận</th>
                                        <th class="product_thumb">Địa Chỉ</th>
                                        <th class="product_thumb">Số điện thoại</th>
                                        <th class="product_name">Email</th> 
                                        <th class="product_name">Sản Phẩm</th>
                                        <th class="product_name">Tên Sản Phẩm</th>
                                        <th class="product_name">Ngày đặt hàng</th> 
                                        <th class="product_quantity">Số Lượng</th>
                                        <th class="product_total">Tổng Tiền</th>
                                        <th></th>
                                    </tr>
                                </thead>
                                <?php
                                if (isset($_SESSION['login']) && (is_array($_SESSION['login']))) {
                                    extract($_SESSION['login']);
                                    // $taikhoan = $tai_khoan;
                                    // $matkhau = $mat_khau;
                              


                                    $id_user = $_SESSION['login']['id_taikhoan'];

                                    $sql = "SELECT *
                                    FROM tb_donhang
                                    INNER JOIN tb_chitietdonhang ON tb_donhang.id_donhang  = tb_chitietdonhang.id_donhang 
                                    JOIN tb_sanpham ON tb_chitietdonhang.id_sanpham =  tb_sanpham.id_sanpham
                                    WHERE tb_donhang.id_taikhoan= " . $id_user;
                                    $list = pdo_query($sql);
                                }


                                
                                $stt = 1;

                                foreach ($list as $value) {
                                    extract($value);
                                    echo
                                    '
                                        <tbody>
                                            <tr>
                                                <td class="product_name"><a href="#">' . $stt . '</a></td>
                                                <td id="dongia" class="product-price">' . $hovaten . '</td>
                                                <td id="dongia" class="product-price">' . $dia_chi . '</td>
                                                <td id="dongia" class="product-price">' . $sdt . '</td>
                                                <td id="dongia" class="product-price">' . $email . '</td>
                                                <td class="product_thumb"><a href="#"><img width=100px height=100px src="../upload/all_sp/' . $img_sanpham . '" alt=""></a></td>
                                                <td class="product_name"><a href="#">' . $ten_sanpham . '</a></td>
                                                <td class="product_name"><a href="#">' . $ngay_dat_hang . '</a></td>
                                                <td id="dongia" class="product-price">' . $so_luong . '</td>
                                                <td id="dongia" class="product-price">' . $tongtien . '</td>
                                            </tr>
                                        </tbody>
                                   
                                    ';
                                    $stt += 1;
                                }
                                ?>
                               
                            </table>
                        </div>
                    </div>
                </div>
            </div>

            <!--shopping cart area end -->