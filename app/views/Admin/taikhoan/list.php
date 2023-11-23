<div style="height: 840px;" class="content-wrapper">
    <div class="container-fluid">
        <div class="card">
            <div class="card-header">
                <h2>Danh sách tài khoản </h2>
            </div>
            <div class="card-body">
                <form action="AdminController.php?act=listtk" method="POST">
                    <input type="text" name="keyword">
                    <select name="id_vaitro" id="">
                        <option value="0" selected>Tất cả</option>
                        <?php
                        foreach ($listrole as $vaitro) {
                            extract($vaitro);
                            echo '<option value="' . $id_vaitro . '">' . $ten_vaitro . '</option>';
                        }
                        ?>
                    </select>
                    <input class="btn btn-primary" type="submit" name="clickgo" value="GO">
                </form>
                <table class="table">
                    <tdead class="thead-drank">
                        <tr>
                            <th>id</th>
                            <th>Họ và tên </th>
                            <th>Tài khoản </th>
                            <th>Mật khẩu </th>
                            <th>Email</th>
                            <th>Sdt</th>
                            <th>Địa chỉ</th>
                            <th>id vai trò </th>
                            <th>Tên vai trò </th>
                            <th><a href="AdminController.php?act=addtk"><input class="btn btn-primary" type="button" value="Thêm Mới"> </a></th>
                        </tr>
                    </tdead>

                    <?php
                    foreach ($listtaikhoan as $taikhoan) {
                        extract($taikhoan);
                        $suatk = "AdminController.php?act=suatk&idtk=" . $id_taikhoan;
                        $xoatk = "AdminController.php?act=xoatk&idtk=" . $id_taikhoan;


                        echo '
                            <tbody>
                            <tr>
                                <td>' . $id_taikhoan . '</td>
                                <td>' . $hovaten . '</td>
                                <td>' . $tai_khoan . '</td>
                                <td>' . $mat_khau . '</td>
                                <td>' . $email . '</td>
                                <td>' . $sdt . '</td>
                                <td>' . $dia_chi . '</td>
                                <td>' . $id_vaitro . '</td>
                       ';

                        $sql = "SELECT * FROM tb_role WHERE id_vaitro=" . $id_vaitro;
                        $vaitro = pdo_query($sql);
                        foreach ($vaitro as $value) {
                            extract($value);
                            echo '
                                   <td>' . $ten_vaitro . '</td>
                                   <td>
                                       <a href="' . $suatk . '"><input type="button" value="Sửa"> </a>
                                       <a href="' . $xoatk . '"><input type ="button" value="Xóa" onclick="return confirm(\'Bạn có chắc chắn muốn xóa\')"></a>
                                   </td>
                               </tr>
                             </tbody>
                           ';
                        }
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