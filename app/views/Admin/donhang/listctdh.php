<div style="height: 840px;" class="content-wrapper">
    <div class="container-fluid">
        <div class="card">
            <div class="card-header">
                <h2>Chi tiết đơn hàng</h2>
            </div>
            <div class="card-body">
                <table class="table">
                    <h4>Đơn Hàng: <?=$iddh?></h4>   
                    <tdead class="thead-drank">
                        <tr>
                            <th>STT</th>
                            <th>Họ và tên </th>
                            <th>Tên sản phẩm</th>
                            <th>Ngày đặt hàng</th>
                            <th>Ảnh sản phẩm</th>
                            <th>Màu sản phẩm</th>
                            <th>Dung Lượng</th>
                            <th>Số Lượng</th>
                            <th>Địa chỉ</th>
                            <th>Tổng tiền </th>
                            <th>Trạng Thái</th>
                            <th></th>
                            <img src="" alt="">
                        </tr>
                    </tdead>
                    <tbody>
                        <?php
                            $sql = "SELECT *
                            FROM tb_donhang
                            INNER JOIN tb_chitietdonhang ON tb_donhang.id_donhang  = tb_chitietdonhang.id_donhang 
                            JOIN tb_sanpham ON tb_chitietdonhang.id_sanpham =  tb_sanpham.id_sanpham;";
                            $i = 1;
                            $chitietdonhang =pdo_query($sql);
                            foreach ($chitietdonhang as $value){
                                extract($value);
                                if(isset($_GET['iddh']) && $_GET['iddh'] && $_GET['iddh'] == $id_donhang){
                                    echo
                                    '
                                    <tbody>
                                    <tr>
                                        <td>' . $i++ . '</td>
                                        <td>' . $hovaten. '</td>
                                        <td>' . $ten_sanpham . '</td>
                                        <td>' . $ngay_dat_hang. '</td>
                                        <td><img width="100px" height="100px" src="../upload/all_sp/'.$img_sanpham .'" alt=""></td>
                                        <td>'.$mau_sanpham.'</td>
                                        <td>'.$dung_luong.'</td>
                                        <td>' . $soluong . '</td>
                                        <td>' . $dia_chi. '</td>
                                        <td>' . $thanh_tien . '</td>
                                        
                                    ';
    
                                    $sql = "SELECT * FROM tb_trangthai_donhang WHERE id_trangthai_dh =" . $id_trangthai_dh ;
                                $trangthai = pdo_query($sql);
                                foreach ($trangthai as $value) {
                                    extract($value);
                                    echo
                                    '
                                        <td>' . $ten_trangthai . '</td>
                                    </tr>
                                    </tbody>
                                    ';
                                }
                                }
                               
                            }
                      
                        ?>
                    </tbody>
                </table>
            </div>
            <div class="card-footer text-muted">
            <a href="AdminController.php?act=listdh"><input class="btn btn-primary" type="button" value="DANH SÁCH ĐƠN HÀNG"></a>
            </div>
        </div>
        
    </div>

    <link rel="stylesheet" href="//netdna.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css">
</div>