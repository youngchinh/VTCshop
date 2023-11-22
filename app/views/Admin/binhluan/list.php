<div style="height: 840px;" class="content-wrapper">
    <div class="container-fluid">
        <div class="card">
            <div class="card-header">
                <h2>Danh sách bình luận</h2>
            </div>
            <div class="card-body">
                <table class="table">
                    <tdead class="thead-drank">
                        <tr>
                            <th>id</th>
                            <th>Nội dung</th>
                            <th>Ngày bình luận</th>
                            <th>ID sản phẩm</th>
                            <th>ID tài khoản</th>
                            <th>Thao Tác</th>
                        </tr>
                    </tdead>
                    <?php
                    foreach ($listbinhluan as $binhluan) {
                        extract($binhluan);
                        $xoabl = "AdminController.php?act=xoabl&idbl=".$id_binhluan;
                        echo
                        '
                            <tdead class="thead-drank">
                                <tr>
                                    <td>' . $id_binhluan . '</td>
                                    <td>' . $noi_dung_binhluan . '</td>
                                    <td>' . $ngay_binh_luan . '</td>
                                    <td>' . $id_sanpham . '</td>
                                    <td>' . $id_taikhoan . '</td>
                                    <td>
                                        <a href=" '.$xoabl.' "><input type ="button" value="Xóa" onclick="return confirm(\'Bạn có chắc chắn muốn xóa\')"></a>
                                    </td>
                                </tr>
                              </tdead>
                            ';
                    }
                    ?>


                        
                       
                    
                </table>
            </div>
            <div class="card-footer text-muted">
            </div>
        </div>
    </div>

    <link rel="stylesheet" href="//netdna.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css">
</div>