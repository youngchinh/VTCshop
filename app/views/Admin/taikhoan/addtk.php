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
                    <input type="text" class="form-control" id="hovaten" placeholder="Nhập họ và tên ">
                </div>
                <div class="form-group">
                    <label for="">Tài khoản  </label>
                    <input type="text" class="form-control" id="taikhoan" placeholder="Nhập tài khoản ">
                </div>
                <div class="form-group">
                    <label for="">Mật khẩu</label>
                    <input type="text" class="form-control" id="matkhau" placeholder="Nhập mật khẩu">
                </div>

                <div class="form-group">
                    <label for="">Email</label>
                    <input type="text" class="form-control" id="email" placeholder="Nhập email">
                </div>

                <div class="form-group">
                    <label for="">Sdt</label>
                    <input type="text" class="form-control" id="sdt" placeholder="Nhập số điện thoại">
                </div>

                <div class="form-group">
                    <label for="">Địa chỉ </label>
                    <input type="text" class="form-control" id="diachi" placeholder="Nhập địa chỉ">
                </div>

                <div class="form-group">
                    <label for="">Tên vai trò </label>
                    <input type="text" class="form-control" id="tenvaitro" placeholder="Nhập tên vai trò">
                </div>

                <div class="form-group">
                    <label for="">id vai trò </label>
                    <select name="idvaitro" class="form-group" id="">
                        <option value="">Admin </option>
                        <option value="">Khách hàng </option>
                    </select>
                   
                </div>

                <!-- /.card-body -->

                <div class="card-footer">
                    <button type="submit" class="btn btn-primary">Thêm Mới</button>
                </div>
        </form>
    </div>
</div>