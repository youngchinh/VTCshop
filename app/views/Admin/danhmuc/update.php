<?php 
    if (is_array($danhmuc)) {
        extract($danhmuc);
    }
?>

<div style="height: 840px;" class="content-wrapper">
    <div class="card card-primary">
        <div class="card-header">
            <h3 class="card-title">Cập nhập danh mục</h3>
        </div>
        <!-- /.card-header -->
        <!-- form start -->
        <form action="AdminController.php?act=updatedm" method="POST" role="form">
            <div class="card-body">
                <div class="form-group">
                    <label for="">Tên danh mục</label>
                    <input type="text" class="form-control" name="ten_danhmuc" value="<?=$ten_danhmuc?>">
                </div>
                <div class="form-group">
                    <label for="">Mô tả danh mục</label>
                    <input type="text" class="form-control" name="mota_danhmuc" value="<?=$mota_danhmuc?>">
                </div>

            <!-- /.card-body -->

            <div class="card-footer">
                <input type="hidden" name="id_danhmuc" value="<?=$id_danhmuc?>">
                <input class="btn btn-primary" name="capnhat" type="submit" value="Cập Nhật">
                <a href="AdminController.php?act=listdm"><input class="btn btn-primary" type="button" value="DANH SÁCH"></a>
            </div>
            <?php
              if(isset($thongbao)&& ($thongbao!="")){
                  echo $thongbao;
              }
              ?>
        </form>
    </div>
</div>