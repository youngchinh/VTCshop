<div style="height: 840px;" class="content-wrapper">
    <div class="container-fluid">
        <div class="card">
            <div class="card-header">
                <h2>Danh sách đơn hàng</h2>
            </div>
            <div class="card-body">
                <form action="AdminController.php?act=listdh" method="POST">
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
                </form>
                <table class="table">
                    <tdead class="thead-drank">
                        <tr>
                            <th>id đơn hàng</th>
                            <th>id tài khoản</th>
                            <th>Đơn giá </th>
                            <th>Trạng Thái </th>
                            <th>Chọn</th>
                          
                        </tr>
                    </tdead>
                    <tbody>
                        <?php
                      
                        foreach ($listdonhang as $donhang) {
                            extract($donhang);

                            is_array($listtrangthai);
                            extract($listtrangthai);
                            $suatrangthai = "AdminController.php?act=suadh&iddh=" . $id_donhang ;
                            $xem ="AdminController.php?act=listctdh&iddh=" . $id_donhang ;
                            echo
                            '
                                <tbody>
                                <tr>
                                    <td>' . $id_donhang . '</td>
                                    <td>' . $id_taikhoan . '</td>
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
                                         <a href="' . $suatrangthai . '"><input style="color: #fff; background-color: #17a2b8; border-color: #17a2b8; border: 0;" type="button" value="Sửa"> </a>
                                         <a href="' . $xem . '"><input style="color: #fff; background-color: #17ccb8; border-color: #17a2b8; border: 0;" type="button" value="Xem"> </a>
                                    </td>
                                </tr>
                                </tbody>
                                ';
                            }
                        }

                        $sql = "SELECT *
                        FROM tb_chitietdonhang
                        INNER JOIN tb_donhang ON tb_chitietdonhang.id_donhang  = tb_donhang.id_donhang ;";

                        $chitietdonhang =pdo_query($sql);
                        foreach ($chitietdonhang as $value){
                            
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