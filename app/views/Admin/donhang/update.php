<?php
if (is_array($donhang)) {
    extract($donhang);
}

?>

<div style="height: 840px;" class="content-wrapper">
    <div class="card card-primary">
        <div class="card-header">
            <h3 class="card-title">Cập nhập trạng thái đơn hàng</h3>
        </div>
       
        <form action="AdminController.php?act=updatedh" method="POST" role="form">
            <div class="card-body">
               
                <div class="form-group">
                    <label for="">Trạng thái</label>
                    <select name="id_trangthai_dh" class="form-group">
                    <?php
                    foreach($listtrangthai as $key=>$value){
                        if($id_trangthai_dh == $value['id_trangthai_dh']){
                            echo '<option value="'.$value['id_trangthai_dh'].'" selected>'.$value['ten_trangthai'].'</option>' ;
                        }else{
                            echo '<option value="'.$value['id_trangthai_dh'].'">'.$value['ten_trangthai'].'</option>' ;
                        }
                    }
                    ?>
                    </select>

                </div>

                <!-- /.card-body -->

                <div class="card-footer">
                <input type="hidden" name="id_donhang" value="<?=$id_donhang?>">
                    <input class="btn btn-primary" name="capnhap" type="submit" value="Cập Nhập">
                    <a href="AdminController.php?act=listdh"><input class="btn btn-primary" type="button" value="DANH SÁCH"></a>
                </div>

                <?php
                if (isset($thongbao) && ($thongbao != "")) {
                    echo $thongbao;
                }
                ?>

        </form>
    </div>
</div>
