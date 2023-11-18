<div style="height: 840px;" class="content-wrapper">
    <div class="card card-primary">
        <div class="card-header">
            <h3 class="card-title">Thêm mới danh mục</h3>
        </div>
        <!-- /.card-header -->
        <!-- form start -->
        <form action="AdminController.php?act=addsp" method="POST" role="form" enctype="multipart/form-data">
            <div class="card-body">
                <div class="form-group">
                    <label for="">Tên sản phẩm</label>
                    <input type="text" class="form-control" name="ten_sanpham" placeholder="nhập tên">
                </div>
                <div class="form-group">
                    <label for="">Ảnh sản phẩm</label>
                    <div class="input-group">
                        <div class="custom-file">
                            <input class="custom-file-label" type="file" name="img_sanpham">
                            <label  for="exampleInputFile">Chọn file</label>
                        </div>
                    </div>
                </div>
                <div class="form-group">
                    <label for="">Mô tả sản phẩm</label>
                    <input type="text" class="form-control" name="mota_sanpham" placeholder="nhập mô tả">
                </div>

                <div class="form-group">
                    <label for="">Màu sản phẩm</label>
                    <input type="text" class="form-control" name="mau_sanpham" placeholder="Nhập màu sản phẩm">
                </div>

                <div class="form-group">
                    <label for="">Giá ban đầu</label>
                    <input type="text" class="form-control" name="gia_ban_dau" placeholder="Nhập giá sản phẩm">
                </div>

                <div class="form-group">
                    <label for="">Giá Khuyến mãi</label>
                    <input type="text" class="form-control" name="gia_khuyen_mai" placeholder="Nhập giá sản phẩm">
                </div>

                <div class="form-group">
                    <label for="">Dung Lượng</label>
                    <input type="text" class="form-control" name="dung_luong" placeholder="Nhập giá dung lượng">
                </div>

                <div class="form-group">
                    <label for="">Số lượng</label>
                    <input type="number" min="0" max="100" class="form-control" name="so_luong" placeholder="Nhập số lượng">
                </div>

                <div class="form-group">
                    <label for="">Trạng thái</label>
                    <input type="text" class="form-control" name="trang_thai" placeholder="Nhập giá trạng thái">
                </div>

                <div class="form-group">
                    <label for="">Danh mục</label>
                    <select name="id_danhmuc" class="form-group">
                        <?php
                        foreach ($listdanhmuc as $danhmuc) {
                            extract($danhmuc);
                            echo '<option value="' . $id_danhmuc . '">' . $ten_danhmuc . '</option>';
                        }
                        ?>
                    </select>

                </div>

                <!-- /.card-body -->

                <div class="card-footer">
                <input class="btn btn-primary" name="themmoi" type="submit" value="THÊM MỚI">
                    <a href="AdminController.php?act=listsp"><input class="btn btn-primary" type="button" value="DANH SÁCH"></a>
                </div>

                <?php
              if(isset($thongbao)&& ($thongbao!="")){
                  echo $thongbao;
              }
              ?>
                
        </form>
    </div>
</div>