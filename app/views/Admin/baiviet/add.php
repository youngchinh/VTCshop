<div style="height: 840px;" class="content-wrapper">
    <div class="card card-primary">
        <div class="card-header">
            <h3 class="card-title">Thêm mới bài viết</h3>
        </div>
        <!-- /.card-header -->
        <!-- form start -->
        <form role="form" action="AdminController.php?act=addbv" method="POST" enctype="multipart/form-data">
            <div class="card-body">
                <div class="form-group">
                    <label for="">Tiêu đề bài viết</label>
                    <input type="text" class="form-control" name="tenbaiviet" placeholder="Nhập tiêu đề bài viết">
                </div>

                <div class="form-group">
                    <label for="">Ảnh bài viết</label>
                    <div class="input-group">
                        <div class="custom-file">
                            <input type="file" class="custom-file-input" name="filename">
                            <label class="custom-file-label" for="exampleInputFile">Chọn Ảnh</label>
                        </div>
                    </div>
                </div>

                <div class="form-group">
                    <label for="">Nội dung</label>
                    <input type="text" class="form-control" name="noidungbaiviet" placeholder="Nhập nội dung">
                </div>

                <div class="form-group">
                    <label for="">Ngày Đăng</label>
                    <input type="text" class="form-control" name="ngay" >
                </div>

                <div class="form-group">
                    <label for="">Nội dung chi tiết</label>
                    <input type="text" class="form-control" name="noidung_chitiet" placeholder="Nhập nội dung chi tiết">
                </div>
                <!-- /.card-body -->

                <div class="card-footer">
                    <input type="submit" name="themmoi" value="Thêm Mới">
                    <a href="AdminController.php?act=listbv"><input class="btn btn-primary" type="button" value="DANH SÁCH"></a>
                </div>
                <?php
                if (isset($thongbao) && ($thongbao != ""))
                    echo $thongbao;
                ?>
        </form>
    </div>
</div>