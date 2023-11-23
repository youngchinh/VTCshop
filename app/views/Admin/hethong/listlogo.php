<div style="height: 840px;" class="content-wrapper">
    <div class="container-fluid">
        <div class="card">
            <div class="card-header">
                <h2>Danh sách Logo</h2>
            </div>
            <div class="card-body">
                <table class="table">
                    <tdead class="thead-drank">
                        <tr>
                            <th>id</th>
                            <th>Ảnh logo</th>
                            <th>Tên logo</th>
                            <th><a href="AdminController.php?act=addlogo"><input class="btn btn-primary" type="button" value="Thêm Mới"> </a></th>
                        </tr>
                    </tdead>

                    <?php
                    foreach ($listhethong as $listlogo) {
                        extract($listlogo);
                        $suaht = "AdminController.php?act=suaht&idht=" . $id_logo;
                        $xoaht = "AdminController.php?act=xoaht&idht=" . $id_logo;
                        echo
                        '
                            <tbody>
                                <tr>
                                    <td>'.$id_logo.'</td>
                                    <td> <img width="100px" height="100px" src="../upload/'.$img_logo.'" alt=""></td>
                                    <td>'.$ten_logo.'</td>
                                    <td>
                                        <a href="' . $suaht . '"><input style="color: #fff; background-color: #17a2b8; border-color: #17a2b8; border: 0;" type="button" value="Sửa"> </a>
                                        <a href="' . $xoaht . '"><input style="color: #fff; background-color: #bd2130; border-color: #bd2130; border: 0;" type ="button" value="Xóa" onclick="return confirm(\'Bạn có chắc chắn muốn xóa\')"></a>
                                    </td>
                                </tr>
                                
                            </tbody>
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