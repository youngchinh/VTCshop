
<div class="container-fluid">
    <div class="card">
        <div class="card-header">
            <h2>Danh sách danh mục</h2>
        </div>
        <div class="card-body">
            <table class="table">
                <tdead class="thead-drank"> 
                    <tr>
                        <th>id</th>
                        <th>Tên danh mục</th>
                        <th>Mô tả danh mục</th>
                        <th><a href="AdminController.php?act=adddm"><input class="btn btn-primary" type="button" value="Thêm Mới"> </a></th>
                    </tr>
                </tdead>
                <tbody>
                        <?php
                            foreach ($listdanhmuc as $danhmuc) {
                                extract($danhmuc);
                                $suadm = "AdminController.php?act=suadm&iddm=" .$id_danhmuc;
                                $xoadm = "AdminController.php?act=deletedm&iddm=" .$id_danhmuc;
                                  echo '
                                    <tr>
                                        <td>'   .$id_danhmuc.      '</td>
                                        <td>'   .$ten_danhmuc .    '</td>
                                        <td>'   .$mota_danhmuc.    '</td>
                                        <td>
                                            <a href="'.$suadm.'"><input type="button" value="Sửa"> </a>
                                            <a href="'.$xoadm.'"><input type ="button" value="Xóa" onclick="return confirm(\'Bạn có chắc chắn muốn xóa\')"></a>
                                        </td>
                            
                                    </tr>   
                                  ';
                            }
                        ?>
                </tbody>
            </table>
        </div>
        <div class="card-footer text-muted">
        </div>
    </div>

    <link rel="stylesheet" href="//netdna.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css">
</div>