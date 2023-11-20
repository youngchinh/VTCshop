<?php
if (is_array($lienhe)) {
    extract($lienhe);
}

?>

<div style="height: 840px;" class="content-wrapper">
    <div class="card card-primary">
        <div class="card-header">
            <h3 class="card-title">Cập nhập phản hồi</h3>
        </div>
        <!-- /.card-header -->
        <!-- form start -->
        <form action="AdminController.php?act=updatelh" method="POST" role="form">
            <div class="card-body">
                <div class="form-group">
                    <label for="">Họ và tên</label>
                    <input disabled type="text" class="form-control" name="hovaten" value="<?=$hovaten?>">
                </div>

                <div class="form-group">
                    <label for="">số điện thoại</label>
                    <input disabled type="number" class="form-control" name="sdt" value="<?=$sdt?>">
                </div>

                <div class="form-group">
                    <label for="">Email</label>
                    <input disabled type="email" class="form-control" name="email" value="<?=$email?>">
                </div>

                <div class="form-group">
                    <label for="">Địa chỉ liên hệ</label>
                    <input disabled type="text" class="form-control" name="dia_chi_lienhe" value="<?=$dia_chi_lienhe?>">
                </div>

                <div class="form-group">
                    <label for="">Ngày gửi</label>
                    <input disabled type="text" class="form-control" name="ngay_gui" value="<?=$ngay_gui?>">
                </div>

                <div class="form-group">
                    <label for="">Nội dung</label>
                    <input disabled type="text" class="form-control" name="noi_dung_lienhe" value="<?=$noi_dung_lienhe?>">
                </div>

                <div class="form-group">
                    <label for="">Phản hồi</label>
                    <select name="id_trangthai" class="form-group">
                    <?php
                    foreach($listtrangthai as $key=>$value){
                        if($id_trangthai==$value['id_trangthai']){
                            echo '<option value="'.$value['id_trangthai'].'" selected>'.$value['ten_trangthai'].'</option>' ;
                        }else{
                            echo '<option value="'.$value['id_trangthai'].'">'.$value['ten_trangthai'].'</option>' ;
                        }
                    }
                    ?>
                    </select>

                </div>

                <!-- /.card-body -->

                <div class="card-footer">
                <input type="hidden" name="id_lienhe" value="<?=$id_lienhe?>">
                    <input class="btn btn-primary" name="capnhap" type="submit" value="Cập Nhập">
                    <a href="AdminController.php?act=listlh"><input class="btn btn-primary" type="button" value="DANH SÁCH"></a>
                </div>

                <?php
                if (isset($thongbao) && ($thongbao != "")) {
                    echo $thongbao;
                }
                ?>

        </form>
    </div>
</div>
