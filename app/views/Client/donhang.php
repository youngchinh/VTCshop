<!--breadcrumbs area start-->
<div class="breadcrumbs_area">
    <div class="container">
        <div class="row">
            <div class="col-12">
                <div class="breadcrumb_content">
                    <ul>
                        <li><a href="ClientController.php">Trang Chủ</a></li>
                        <li ><a href="ClientController.php?act=account">Tài khoản</li>
                        <li>Đơn Hàng</li>
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
                                        <th class="product_name">Người nhận</th>
                                        <th class="product_name">Địa chỉ</th>
                                        <th class="product_quantity">Số điện thoại</th>
                                        <th class="product_quantity">Ngày đặt hàng</th>
                                        <th class="product_total">Tổng Tiền</th>
                                        <th class="product_total">Trạng thái</th>
                                        <th class="product_total">Xem</th>
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
                                    FROM tb_trangthai_donhang
                                    JOIN tb_donhang ON tb_trangthai_donhang.id_trangthai_dh = tb_donhang.id_trangthai_dh
                                    JOIN tb_chitietdonhang ON tb_donhang.id_donhang  = tb_chitietdonhang.id_donhang 
                                    WHERE tb_donhang.id_taikhoan= " . $id_user;
                                    $list = pdo_query($sql);
                                }

                                foreach ($list as $donhang) {
                                    extract($donhang);
        
                                    echo
                                    '
                                        <tbody>
                                        <tr>
                                            <td>' . $id_donhang . '</td>
                                            <td>' . $hovaten . '</td>
                                            <td>' . $dia_chi . '</td>
                                            <td>' . $sdt . '</td>
                                            <td>' . $ngay_dat_hang . '</td>
                                            <td>' . $tongtien . '</td>
                                                                       ';
                                    $sql = "SELECT * FROM tb_trangthai_donhang WHERE id_trangthai_dh =" . $id_trangthai_dh ;
                                    $trangthai = pdo_query($sql);
                                    foreach ($trangthai as $value) {
                                        extract($value);
                                        echo
                                        '
                                            <td>' . $ten_trangthai . '</td>
                                            <td>
                                                <a href="ClientController.php?act=chitietdh" <button type="submit" >Xem chi tiết đơn hàng</button>
                                            </td>
                                        </tr>
                                        </tbody>
                                        ';
                                    }
                                }


                                
                                // $stt = 1;

                                // foreach ($list as $value) {
                                //     extract($value);
                                //     echo
                                //     '
                                //         <tbody>
                                //             <tr>
                                //                 <td class="product_name"><a href="#">' . $stt . '</a></td>
                                //                 <td class="product_thumb"><a href="#"><img width=100px height=100px src="../upload/all_sp/' . $img_sanpham . '" alt=""></a></td>
                                //                 <td class="product_name"><a href="#">' . $ten_sanpham . '</a></td>
                                //                 <td id="dongia" class="product-price">' . $so_luong . '</td>
                                //                 <td id="dongia" class="product-price">' . $tongtien . '</td>
                                //                 <td>
                                //                     <a href="ClientController.php?act=chitietdh" <button type="submit" >Xem chi tiết đơn hàng</button>
                                //                 </td>
                                //             </tr>
                                //         </tbody>
                                   
                                //     ';
                                //     $stt += 1;
                                // }
                                ?>
                               
                            </table>
                        </div>
                    </div>
                </div>
            </div>

            <!--shopping cart area end -->