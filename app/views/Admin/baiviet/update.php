<?php
if (is_array($bv)) {
    extract($bv);
}
$imgpath = "../upload/" . $img_baiviet;
if (is_file($imgpath)) {
    $imgpath = "<img src= '" . $imgpath . "' width='100px' height='100px'>";
} else {
    $imgpath = "No file img!";
}
?>

<div style="height: 840px;" class="content-wrapper">
    <div class="card card-primary">
        <div class="card-header">
            <h3 class="card-title">Sửa Bài Viết</h3>
        </div>
        <!-- /.card-header -->
        <!-- form start -->
        <form role="form" action="AdminController.php?act=updatebv" method="POST" enctype="multipart/form-data">
            <div class="card-body">
                <div class="form-group">
                    <label for="">Tiêu đề bài viết</label>
                    <input type="text" class="form-control" name="tenbaiviet" value="<?= $tieu_de ?>" placeholder="Nhập tiêu đề bài viết">
                </div>

                <div class="form-group">
                    <label for="">Ảnh bài viết</label>
                    <div class="input-group">
                        <div class="custom-file">
                            <input class="custom-file-label" type="file" name="img_baiviet" value="<?= $img_baiviet ?>">
                            <label>Chọn file</label>

                        </div>
                    </div>
                    <?php echo $imgpath ?>
                </div>

                <div class="form-group">
                    <label for="">Nội dung</label>
                    <input type="text" class="form-control" name="noidungbaiviet" value="<?= $noi_dung ?>" placeholder="Nhập nội dung">
                </div>
                <!-- /.card-body -->

                <div class="card-footer">
                    <input type="hidden" name="id_baiviet" value="<?= $id_baiviet ?>">
                    <input type="submit" name="capnhat" value="Cập Nhật">
                    <a href="AdminController.php?act=listbv"><input class="btn btn-primary" type="button" value="DANH SÁCH"></a>
                </div>
                <?php
                if (isset($thongbao) && ($thongbao != ""))
                    echo $thongbao;
                ?>
        </form>
    </div>
</div>