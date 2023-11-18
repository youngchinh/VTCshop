<div style="height: 840px;" class="content-wrapper">
    <div class="card card-primary">
        <div class="card-header">
            <h3 class="card-title">Thêm mới tài khoản </h3>
        </div>
        <!-- /.card-header -->
        <!-- form start -->
        <form method="POST" role="form" enctype="multipart/form-data">
            <div class="card-body">
                <div class="form-group">
                    <label for="">Họ và tên </label>
                    <input type="text" class="form-control" name="hovaten" placeholder="Nhập họ và tên ">
                </div>
                <div class="form-group">
                    <label for="">Tài khoản  </label>
                    <input type="text" class="form-control" name="tai_khoan" placeholder="Nhập tài khoản ">
                </div>
                <div class="form-group">
                    <label for="">Mật khẩu</label>
                    <input type="text" class="form-control" name="mat_khau" placeholder="Nhập mật khẩu">
                </div>

                <div class="form-group">
                    <label for="">Email</label>
                    <input type="text" class="form-control" name="email" placeholder="Nhập email">
                </div>

                <div class="form-group">
                    <label for="">Sdt</label>
                    <input type="text" class="form-control" name="sdt" placeholder="Nhập số điện thoại">
                </div>

                <div class="form-group">
                    <label for="">Địa chỉ </label>
                    <input type="text" class="form-control" name="dia_chi" placeholder="Nhập địa chỉ">
                </div>

                <div class="form-group">
                    <label for="">Tên vai trò </label>
                    <input type="text" class="form-control" name="ten_vaitro" placeholder="Nhập tên vai trò">
                </div>

                <div class="form-group">
                    <label for="">name vai trò </label>
                    <select id ="id_vaitro" class="form-group" id="">
                        <!-- <option value="">Khách hàng </option> -->
                      
                    </select>
                   
                </div>

                <!-- /.card-body -->

                <div class="card-footer">
                    <button type="submit" name="themmoi" class="btn btn-primary">Thêm Mới</button>
                </div>

                <?php 
                    if( isset($thongbao) && ($thongbao) != '' ){
                        echo $thongbao;
                    }
                ?>
        </form>
    </div>
</div>