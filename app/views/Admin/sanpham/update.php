<?php
if (is_array($sanpham)) {
    extract($sanpham);
}
$imgpath = "../upload/" . $img_sanpham;
if (is_file($imgpath)) {
    $imgpath = "<img src= '" . $imgpath . "' width='100px' height='100px'>";
} else {
    $imgpath = "No file img!";
}
?>

<div style="height: 840px;" class="content-wrapper">
    <div class="card card-primary">
        <div class="card-header">
            <h3 class="card-title">Cập nhập sản phẩm</h3>
        </div>
        <!-- /.card-header -->
        <!-- form start -->
        <form action="AdminController.php?act=updatesp" method="POST" role="form" enctype="multipart/form-data">
            <div class="card-body">
                <div class="form-group">
                    <label for="">Tên sản phẩm</label>
                    <input type="text" class="form-control" name="ten_sanpham" value="<?=$ten_sanpham?>">
                </div>
                <div class="form-group">
                    <label for="">Ảnh sản phẩm</label>
                    <div class="input-group">
                        <div class="custom-file">
                            <input class="custom-file-label" type="file" name="img_sanpham" value="<?=$img_sanpham?>">
                            <label>Chọn file</label>
                            
                        </div>
                    </div>
                    <?php echo $imgpath ?>
                </div>
                <div class="form-group">
                    <label for="">Mô tả sản phẩm</label>
                    <input type="text" class="form-control" name="mota_sanpham" value="<?=$mota_sanpham?>">
                </div>

                <div class="form-group">
                    <label for="">Màu sản phẩm</label>
                    <input type="text" class="form-control" name="mau_sanpham" value="<?=$mau_sanpham?>">
                </div>

                <div class="form-group">
                    <label for="">Giá ban đầu</label>
                    <input type="text" class="form-control" name="gia_ban_dau" value="<?=$gia_ban_dau?>">
                </div>

                <div class="form-group">
                    <label for="">Giá Khuyến mãi</label>
                    <input type="text" class="form-control" name="gia_khuyen_mai" value="<?=$gia_khuyen_mai?>">
                </div>

                <div class="form-group">
                    <label for="">Dung Lượng</label>
                    <input type="text" class="form-control" name="dung_luong" value="<?=$dung_luong?>">
                </div>

                <div class="form-group">
                    <label for="">Số lượng</label>
                    <input type="number" min="0" max="100" class="form-control" name="so_luong" value="<?=$so_luong?>">
                </div>

                <div class="form-group">
                    <label for="">Chiến dịch</label>
                    <input type="text" class="form-control" name="chien_dich" value="<?=$chien_dich?>">
                </div>

                <div class="form-group">
                    <label for="">Trạng thái</label>
                    <input type="text" class="form-control" name="trang_thai" value="<?=$trang_thai?>">
                </div>

                <div class="form-group">
                    <label for="">Danh mục</label>
                    <select name="id_danhmuc" class="form-group">
                    <?php
                    foreach($listdanhmuc as $key=>$value){
                        if($id_danhmuc==$value['id_danhmuc']){
                            echo '<option value="'.$value['id_danhmuc'].'" selected>'.$value['ten_danhmuc'].'</option>' ;
                        }else{
                            echo '<option value="'.$value['id_danhmuc'].'">'.$value['ten_danhmuc'].'</option>' ;
                        }
                    }
                    ?>
                    </select>

                </div>

                <!-- /.card-body -->

                <div class="card-footer">
                <input type="hidden" name="id_sanpham" value="<?=$id_sanpham?>">
                    <input class="btn btn-primary" name="capnhap" type="submit" value="Cập Nhập">
                    <a href="AdminController.php?act=listsp"><input class="btn btn-primary" type="button" value="DANH SÁCH"></a>
                </div>

                <?php
                if (isset($thongbao) && ($thongbao != "")) {
                    echo $thongbao;
                }
                ?>

        </form>
    </div>
</div>