<div style="height: 840px;" class="content-wrapper">
    <div class="container-fluid">
        <div class="card">
            <div class="card-header">
                <h2>Danh sách sản phẩm</h2>
            </div>
            <div class="card-body">
                <form action="#" method="POST">
                    <div class="row2 mb10 formds_loai">
                        <form action="AdminController.php?act=listsp" method="POST">
                            <input type="text" name="keyword">
                            <select name="id_danhmuc" id="">
                                <option value="0" selected>Tất cả</option>
                                <?php
                                foreach ($listdanhmuc as $danhmuc) {
                                    extract($danhmuc);
                                    echo '<option value="' . $id_danhmuc . '">' . $ten_danhmuc . '</option>';
                                }
                                ?>
                            </select>
                            <input class="btn btn-primary" type="submit" name="clickgo" value="GO">
                        </form>
                        <table class="table">
                            <tdead class="thead-drank">
                                <tr>
                                    <th>id</th>
                                    <th>Tên Sản phẩm </th>
                                    <th>Ảnh sản phẩm</th>
                                    <th>Mô tả</th>
                                    <th>Màu sản phẩm</th>
                                    <th>Giá ban đầu</th>
                                    <th>Giá Khuyến mãi</th>
                                    <th>Dung Lượng</th>
                                    <th>Số lượng</th>
                                    <th>trạng Thái</th>
                                    <th><a href="AdminController.php?act=addsp"><input class="btn btn-primary" type="button" value="Thêm Mới"> </a></th>
                                </tr>
                            </tdead>
                            <tbody>
                                <!-- <img src="/public/upload/" alt=""> -->
                                <?php
                                foreach ($listsanpham as $sanpham) {
                                    extract($sanpham);
                                    $imgpath = "../upload/" . $img_sanpham;
                                    if (is_file($imgpath)) {
                                        $imgpath = "<img src= '" . $imgpath . "' width='100px' height='100px'>";
                                    } else {
                                        $imgpath = "No file img!";
                                    }
                                    $suasp = "AdminController.php?act=suasp&idsp=" . $id_sanpham;
                                    $xoasp = "AdminController.php?act=xoasp&idsp=" . $id_sanpham;
                                    echo
                                    '
                            <tr>
                                <td>' . $id_sanpham . '</td>
                                <td>' . $ten_sanpham . '</td>
                                <td>' . $imgpath . '</td>
                                <td>' . $mota_sanpham . '</td>
                                <td>' . $mau_sanpham . '</td>
                                <td>' . $gia_ban_dau . '</td>
                                <td>' . $gia_khuyen_mai . '</td>
                                <td>' . $dung_luong . '</td>
                                <td>' . $so_luong . '</td>
                                <td>' . $trang_thai . '</td>
                                <td>
                                    <a href="' . $suasp . '"><input type="button" value="Sửa"> </a>
                                    <a href="' . $xoasp . '"><input type ="button" value="Xóa" onclick="return confirm(\'Bạn có chắc chắn muốn xóa\')"></a>
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