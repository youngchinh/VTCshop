<?php 
    if (is_array($list)) {
        extract($list);
    }
?>
<div style="height: 840px;" class="content-wrapper">
    <div class="card card-primary">
        <div class="card-header">
            <h3 class="card-title">Sửa tài khoản </h3>
        </div>
        <!-- /.card-header -->
        <!-- form start -->
        <form method="POST" action="AdminController.php?act=updatetk" role="form" >
            <div class="card-body">
               
               
                <div class="form-group">
                    <label for="">Họ và tên </label>
                    <input type="text" class="form-control" name="hovaten" value="<?=$hovaten?>" >
                </div>
                <div class="form-group">
                    <label for="">Tài khoản  </label>
                    <input type="text" class="form-control" name="tai_khoan"  value="<?=$tai_khoan?>" >
                </div>
                <div class="form-group">
                    <label for="">Mật khẩu</label>
                    <input type="text" class="form-control" name="mat_khau" value="<?=$mat_khau?>" >
                </div>

                <div class="form-group">
                    <label for="">Email</label>
                    <input type="text" class="form-control" name="email" value="<?=$email?>" >
                </div>

                <div class="form-group">
                    <label for="">Sdt</label>
                    <input type="text" class="form-control" name="sdt" value="<?=$sdt?>" >
                </div>

                <div class="form-group">
                    <label for="">Địa chỉ </label>
                    <input type="text" class="form-control" name="dia_chi" value="<?=$dia_chi?>" >
                </div>



                <div class="form-group">
                    <label for="">Tên vai trò </label>
                    <select name="id_vaitro" class="form-group" id="">
                        <!-- <option value="1">Khách hàng </option>
                        <option value="2">Admin </option> -->
                        <?php 
                            foreach($listrole as $key=>$value){
                                if($id_vaitro==$value['id_vaitro']){
                                    echo '<option value="'.$value['id_vaitro'].'" selected>'.$value['ten_vaitro'].'</option>' ;
                                }else{
                                    echo '<option value="'.$value['id_vaitro'].'">'.$value['ten_vaitro'].'</option>' ;
                                }
                            }
                        ?>
                    </select>
                   
                </div>

                <!-- /.card-body -->
                            
                <div class="card-footer">
                    <input type="hidden" name="idtk" value="<?=$id_taikhoan?>">
                    <input class="btn btn-primary" name="capnhat" type="submit" value="Cập Nhập">    
                    <th><a href="AdminController.php?act=addtk"><input class="btn btn-primary" type="button" value="Thêm Mới"> </a></th>
                    <a href="AdminController.php?act=listtk"><input class="btn btn-primary" type="button" value="DANH SÁCH"></a>
                </div>
                <?php
                if (isset($thongbao) && ($thongbao != "")) {
                    echo $thongbao;
                }
                ?>

        </form>
    </div>
</div>