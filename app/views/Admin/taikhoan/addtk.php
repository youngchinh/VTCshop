<div style="height: 840px;" class="content-wrapper">
    <div class="card card-primary">
        <div class="card-header">
            <h3 class="card-title">Thêm mới tài khoản </h3>
        </div>
        <!-- /.card-header -->
        <!-- form start -->
        <form method="POST" role="form" enctype="multipart/form-data" >
            <div class="card-body">
                <div class="form-group">
                    <label for="">Họ và tên </label>
                    <input type="text" class="form-control" name="hovaten" placeholder="Nhập họ và tên " required>
                </div>
                <div class="form-group">
                    <label for="">Tài khoản  </label>
                    <input type="text" class="form-control" name="tai_khoan" placeholder="Nhập tài khoản" required>
                </div>
                <div class="form-group">
                    <label for="">Mật khẩu</label>
                    <input type="text" class="form-control" name="mat_khau" placeholder="Nhập mật khẩu" required>
                </div>

                <div class="form-group">
                    <label for="">Email</label>
                    <input type="text" class="form-control" name="email" placeholder="Nhập email" required>
                </div>

                <div class="form-group">
                    <label for="">Sdt</label>
                    <input type="text" class="form-control" name="sdt" placeholder="Nhập số điện thoại" required>
                </div>

                <div class="form-group">
                    <label for="">Địa chỉ </label>
                    <input type="text" class="form-control" name="dia_chi" placeholder="Nhập địa chỉ" required>
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
                                <option value="'.$id_vaitro.'">'.$ten_vaitro.'</option>
                                ';
                            }
                        ?>
                    </select>
                   
                </div>

                <!-- /.card-body -->

                <div class="card-footer">
                <input class="btn btn-primary" name="themmoi" type="submit" value="Thêm mới">
                <a href="AdminController.php?act=listtk"><input class="btn btn-primary" type="button" value="DANH SÁCH"></a>
                </div>
                <?php
              if(isset($thongbao)&& ($thongbao!="")){
                  echo $thongbao;
              }
              ?> 
        </form>
    </div>
</div>