<?php 
    if (is_array($vaitro)) {
        extract($vaitro);
    }
?>

<div style="height: 840px;" class="content-wrapper">
    <div class="card card-primary">
        <div class="card-header">
            <h3 class="card-title">Cập nhập vai trò</h3>
        </div>
        <!-- /.card-header -->
        <!-- form start -->
        <form action="AdminController.php?act=updatevt" method="POST" role="form">
            <div class="card-body">
                <div class="form-group">
                    <label for="">Tên vai trò</label>
                    <input type="text" class="form-control" name="ten_vaitro" value="<?=$ten_vaitro?>">
                </div>
                <div class="form-group">
                    <label for="">Mô tả vai trò</label>
                    <input type="text" class="form-control" name="mota_vaitro" value="<?=$mota_vaitro?>">
                </div>

            <!-- /.card-body -->

            <div class="card-footer">
                <input type="hidden" name="id_vaitro" value="<?=$id_vaitro?>">
                <input class="btn btn-primary" name="capnhat" type="submit" value="Cập Nhật">
                <a href="AdminController.php?act=listvt"><input class="btn btn-primary" type="button" value="DANH SÁCH"></a>
            </div>
            <?php
              if(isset($thongbao)&& ($thongbao!="")){
                  echo $thongbao;
              }
              ?>
        </form>
    </div>
</div>