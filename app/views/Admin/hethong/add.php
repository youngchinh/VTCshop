<div style="height: 840px;" class="content-wrapper">
    <div class="card card-primary">
        <div class="card-header">
            <h3 class="card-title">Thêm mới logo</h3>
        </div>
        <!-- /.card-header -->
        <!-- form start -->
        <form method="POST" role="form" action="AdminController.php?act=addlogo" enctype="multipart/form-data">
            <div class="card-body">
                <div class="form-group">
                    <label for="">Ảnh Logo</label>
                    <div class="input-group">
                        <div class="custom-file">
                            <input type="file" class="custom-file-input" name="img_logo" id="exampleInputFile">
                            <label class="custom-file-label" for="exampleInputFile">Chọn file</label>
                        </div>
                    </div>
                </div>

                <div class="form-group">
                    <label for="">Tên Logo</label>
                    <input type="text" class="form-control" name="ten_logo" placeholder="Nhập tên logo">
                </div>
               
                <!-- /.card-body -->

                <div class="card-footer">
                   <input class="btn btn-primary" name="them" type="submit" value="Thêm mới">
                    <a href="AdminController.php?act=listlogo"><input class="btn btn-primary" type="button" value="DANH SÁCH"></a>
                </div>
        </form>
    </div>
</div>