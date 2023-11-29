<div style="height: 840px;" class="content-wrapper">
<div class="container-fluid">
    <div class="card">
        <div class="card-header">
            <h2>Danh sách vai trò</h2>
        </div>
        <div class="card-body">
            <table class="table">
                <tdead class="thead-drank"> 
                    <tr>
                        <th>id</th>
                        <th>Tên vai trò</th>
                        <th>Mô tả vai trò</th>

                        <th><a href="AdminController.php?act=addvt"><input class="btn btn-primary" type="button" value="Thêm Mới"> </a></th>
                    </tr>
                </tdead>
                <tbody>
                        <?php
                            foreach ($listvaitro as $vaitro) {
                                extract($vaitro);
                                $suavt = "AdminController.php?act=suavt&idvt=" .$id_vaitro;
                                $xoavt = "AdminController.php?act=xoavt&idvt=" .$id_vaitro;
                                  echo '
                                    <tr>
                                        <td>'   .$id_vaitro.      '</td>
                                        <td>'   .$ten_vaitro .    '</td>
                                        <td>'   .$mota_vaitro .    '</td>

                                        <td>
                                            <a href="'.$suavt.'"><input style="color: #fff; background-color: #17a2b8; border-color: #17a2b8; border: 0;" type="button" value="Sửa"> </a>
                                            <a href="'.$xoavt.'"><input style="color: #fff; background-color: #bd2130; border-color: #bd2130; border: 0;" type ="button" value="Xóa" onclick="return confirm(\'Bạn có chắc chắn muốn xóa\')"></a>
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
 </div>
