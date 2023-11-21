<div style="height: 840px;" class="content-wrapper">
    <div class="card card-primary">
        <div class="card-header">
            <h3 class="card-title">Thêm mới logo</h3>
        </div>
        <!-- /.card-header -->
        <!-- form start -->
        <form method="POST" role="form" enctype="multipart/form-data">
            <div class="card-body">
                
                <div class="form-group">
                    <label for="">Ảnh Logo</label>
                    <div class="input-group">
                        <div class="custom-file">
                            <input type="file" class="custom-file-input" name="anh" id="exampleInputFile">
                            <label class="custom-file-label" for="exampleInputFile">Chọn file</label>
                        </div>
                    </div>
                </div>

                <div class="form-group">
                    <label for="">Tên Logo</label>
                    <input type="text" class="form-control" id="ten_logo" value="<?php echo $listhethong['']?>" placeholder="Nhập tên logo">
                </div>
               
                <!-- /.card-body -->

                <div class="card-footer">
                    <button type="submit" class="btn btn-primary" name="capnhat">Cập Nhật</button>
                </div>
        </form>
    </div>
</div>