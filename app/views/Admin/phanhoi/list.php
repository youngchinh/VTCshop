<div style="height: 840px;" class="content-wrapper">
    <div class="container-fluid">
        <div class="card">
            <div class="card-header">
                <h2>Phản hồi của khách hàng</h2>
            </div>
            <div class="card-body">
            <form action="#" method="POST">
                    <div class="row2 mb10 formds_loai">
                        <form action="AdminController.php?act=listlh" method="POST">
                            <input type="text" name="keyword">
                            <select name="id_trangthai" id="">
                                <option value="0" selected>Tất cả</option>
                                <?php
                                foreach ($listtrangthai as $trangthai) {
                                    extract($trangthai);
                                    echo '<option value="' . $id_trangthai . '">' . $ten_trangthai . '</option>';
                                }
                                ?>
                            </select>
                            <input class="btn btn-primary" type="submit" name="clickgo" value="GO">
                        </form>
                <table class="table">
                    <tdead class="thead-drank">
                        <tr>
                            <th>id</th>
                            <th>Họ và tên</th>
                            <th>Số điện thoại</th>
                            <th>Email</th>
                            <th>Địa chỉ</th>
                            <th>Nội dung</th>
                            <th>Ngày gửi</th>
                            <th>Trạng thái</th>
                        </tr>
                    </tdead>
                    <tbody>
                        <?php
                        foreach ($listlienhe as $lienhe) {
                            
                            extract($lienhe);
                            $suatrangthai = "AdminController.php?act=sualh&idlh=" . $id_lienhe;
                            echo
                            '
                                    <tr>
                                        <td>' . $id_lienhe . '</td>
                                        <td>' . $hovaten . '</td>
                                        <td>' . $sdt . '</td>
                                        <td>' . $email . '</td>
                                        <td>' . $dia_chi_lienhe . '</td>
                                        <td>' . $noi_dung_lienhe . '</td>
                                        <td>' . $ngay_gui . '</td>
                                        <td>
                                        <a href="' . $suatrangthai . '"><input type="button" value="Sửa"> </a>
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
    </div>

    <link rel="stylesheet" href="//netdna.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css">
</div>