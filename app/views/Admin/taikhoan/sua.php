<div style="height: 840px;" class="content-wrapper">
    <div class="card card-primary">
        <div class="card-header">
            <h3 class="card-title">Sửa tài khoản </h3>
        </div>
        <!-- /.card-header -->
        <!-- form start -->
        <form method="POST" role="form" enctype="multipart/form-data" >
            <div class="card-body">
               
                <div class="form-group">
                    <label for="">ID Tài Khoản  :<?php echo ' '.$idtk ?> </label>
                </div>
                <div class="form-group">
                    <label for="">Họ và tên </label>
                    <input type="text" class="form-control" name="hovaten" value="<?php echo $list['hovaten']?>" placeholder="Nhập họ và tên " required>
                </div>
                <div class="form-group">
                    <label for="">Tài khoản  </label>
                    <input type="text" class="form-control" name="tai_khoan" value="<?php echo $list['tai_khoan']?>" placeholder="Nhập tài khoản" required>
                </div>
                <div class="form-group">
                    <label for="">Mật khẩu</label>
                    <input type="text" class="form-control" name="mat_khau" value="<?php echo $list['mat_khau']?>" placeholder="Nhập mật khẩu" required>
                </div>

                <div class="form-group">
                    <label for="">Email</label>
                    <input type="text" class="form-control" name="email" value="<?php echo $list['email']?>" placeholder="Nhập email" required>
                </div>

                <div class="form-group">
                    <label for="">Sdt</label>
                    <input type="text" class="form-control" name="sdt" value="<?php echo $list['sdt']?>" placeholder="Nhập số điện thoại" required>
                </div>

                <div class="form-group">
                    <label for="">Địa chỉ </label>
                    <input type="text" class="form-control" name="dia_chi" value="<?php echo $list['dia_chi']?>" placeholder="Nhập địa chỉ" required>
                </div>



                <div class="form-group">
                    <label for="">Tên vai trò </label>
                    <select name="id_vaitro" class="form-group" id="">
                        <!-- <option value="1">Khách hàng </option>
                        <option value="2">Admin </option> -->
                        <?php 
                            foreach ($listrole as $role){
                                extract($role);
                                echo
                                '
                                <option >'.$ten_vaitro.'</option>
                                ';
                            }
                        ?>
                    </select>
                   
                </div>

                <!-- /.card-body -->

                <div class="card-footer">
                <input class="btn btn-primary" name="capnhat" type="submit" value="Cập Nhập">
                </div>

        </form>
    </div>
</div>