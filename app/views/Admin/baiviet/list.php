<div style="height: 840px;" class="content-wrapper">
    <div class="container-fluid">
        <div class="card">
            <div class="card-header">
                <h2>Danh sách bài viết</h2>
            </div>
            <div class="card-body">
                <table class="table">
                    <thead class="thead-drank">
                        <tr>
                            <th>id</th>
                            <th>Tiêu đề</th>
                            <th>Ảnh</th>
                            <th>Nội dung</th>
                        </tr>
                    </thead>
                    <tbody>
                        <?php
                        foreach ($listbaiviet as $baiviet) {
                            extract($baiviet);
                            $suabv="AdminController.php?act=suabv&id_baiviet=".$id_baiviet;
                            $xoabv="AdminController.php?act=xoabv&id_baiviet=".$id_baiviet;
                            $imgpath = "../upload/" . $img_baiviet;
                            if (is_file($imgpath)) {
                                $imgpath = "<img src= '" . $imgpath . "' width='100px' height='100px'>";
                            } else {
                                $imgpath = "No file img!";
                            }
                            echo ' <tr>
                                <td> '.$id_baiviet.' </td>
                                <td> '.$tieu_de.' </td>
                                <td><img height=100px with=100px src="../upload/'.$img_baiviet.'" alt=""></td>
                                <td> '.$noi_dung.' </td>
                                <td>
                                    <a href="' . $suabv . '"><input type="button" value="Sửa"> </a>
                                    <a href="' . $xoabv . '"><input type ="button" value="Xóa" onclick="return confirm(\'Bạn có chắc chắn muốn xóa\')"></a>
                                </td>
                                <th><a href="AdminController.php?act=addbv"><input class="btn btn-primary" type="button" value="Thêm Mới"> </a></th>
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