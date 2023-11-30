<div style="height: 840px;" class="content-wrapper">
    <div class="container-fluid">
        <div class="card">
            <div class="card-header">
                <h2>Chi tiết đơn hàng</h2>
            </div>
            <div class="card-body">
                <form action="AdminController.php?act=listctdh" method="POST">
                    <input type="text" name="keyword">
                    <select name="id_trangthai" id="">
                        <option value="0" selected>Tất cả</option>
                        <?php
                        foreach ($listtrangthai as $trangthai) {
                            extract($trangthai);
                            echo '<option value="' . $id_trangthai_dh  . '">' . $ten_trangthai . '</option>';
                        }
                        ?>
                    </select>
                    <input class="btn btn-primary" type="submit" name="clickgo" value="GO">
                    <th>
                        <a href="AdminController.php?act=listdh"><input style="color: #fff; margin-left: 20px; background-color: #17a2b8; border-color: #17a2b8; border: 0;" type="button" value="Danh sách đơn hàng"> </a>
                    </th>
                </form>
                <table class="table">
                    <tdead class="thead-drank">
                        <tr>
                            <th>id chi tiết dh</th>
                            <th>id đơn hàng</th>
                            <th>Ngày đặt hàng</th>
                            <th>Tên sản phẩm</th>
                            <th>Ảnh sản phẩm</th>
                            <th>Họ và tên </th>
                            <th>Địa chỉ</th>
                            <th>Số Lượng</th>

                            <th>Thành Tiền </th>
                            <th>Trạng Thái</th>
                            <th></th>
                            <img src="" alt="">
                        </tr>
                    </tdead>
                    <tbody>
                        <?php
                            $sql = "SELECT *
                            FROM tb_chitietdonhang
                            INNER JOIN tb_donhang ON tb_chitietdonhang.id_donhang  = tb_donhang.id_donhang ;";
    
                            $chitietdonhang =pdo_query($sql);
                            foreach ($chitietdonhang as $value){
                                extract($value);
                                if(isset($_GET['iddh']) && $_GET['iddh'] && $_GET['iddh'] == $id_donhang){
                                    echo
                                    '
                                    <tbody>
                                    <tr>
                                        <td>' . $id_chitietdonhang. '</td>
                                        <td>' . $id_donhang . '</td>
                                        <td>' . $ngay_dat_hang. '</td>
                                        <td>' . $ten_sanpham . '</td>
                                        <td><img width="100px" height="100px" src="../upload/all_sp/'.$img_sanpham .'" alt=""></td>
                                        <td>' . $hovaten. '</td>
                                        <td>' . $dia_chi. '</td>
                                        <td>' . $so_luong . '</td>
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
            </div>
        </div>
    </div>

    <link rel="stylesheet" href="//netdna.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css">
</div>