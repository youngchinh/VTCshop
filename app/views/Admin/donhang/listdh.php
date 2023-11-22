<div style="height: 840px;" class="content-wrapper">
    <div class="container-fluid">
        <div class="card">
            <div class="card-header">
                <h2>Danh sách đơn hàng</h2>
            </div>
            <div class="card-body">
                <table class="table">
                    <tdead class="thead-drank">
                        <tr>
                            <th>id</th>
                            <th>Đơn giá </th>
                            <th>Trạng thái</th>
                            <th>Tên sản phẩm </th>
                        </tr>
                    </tdead>
                    <tbody>
                        <?php
                        foreach ($listdonhang as $donhang) {
                            extract($donhang);
                            $suadh = "AdminController.php?act=suadh&iddh=" . $id_donhang;
                            $xoadh = "AdminController.php?act=xoadh&iddh=" . $id_donhang;
                            echo ' <tr>
                                <td>' . $id_donhang . '</td>
                                <td>' . $don_gia . '</td>
                                <td>' . $trang_thai . '</td>
                                <td>' . $ten_sanpham . '</td>
                                <td>
                                    <a href="' . $suadh . '"><input type="button" value="Sửa"> </a>
                                    <a href="' . $xoadh . '"><input type ="button" value="Xóa" onclick="return confirm(\'Bạn có chắc chắn muốn xóa\')"></a>
                                </td>
                            </tr>';
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