<div style="height: 840px;" class="content-wrapper">
    <div class="card card-primary">
        <div class="card-header">
            <h3 class="card-title">Thêm mới danh mục</h3>
        </div>
        <!-- /.card-header -->
        <!-- form start -->
        <form method="POST" role="form" enctype="multipart/form-data">
            <div class="card-body">
                <div class="form-group">
                    <label for="">Tên sản phẩm</label>
                    <input type="text" class="form-control" id="tensanpham" placeholder="nhập tên">
                </div>
                <div class="form-group">
                    <label for="">Ảnh sản phẩm</label>
                    <div class="input-group">
                        <div class="custom-file">
                            <input type="file" class="custom-file-input" id="exampleInputFile">
                            <label class="custom-file-label" for="exampleInputFile">Chọn file</label>
                        </div>
                    </div>
                </div>
                <div class="form-group">
                    <label for="">Mô tả sản phẩm</label>
                    <input type="text" class="form-control" id="motasanpham" placeholder="nhập mô tả">
                </div>

                <div class="form-group">
                    <label for="">Giá sản phẩm</label>
                    <input type="text" class="form-control" id="giasanpham" placeholder="Nhập giá sản phẩm">
                </div>

                <div class="form-group">
                    <label for="">Màu sản phẩm</label>
                    <input type="text" class="form-control" id="mausanpham" placeholder="Nhập màu sản phẩm">
                </div>

                <div class="form-group">
                    <label for="">Danh mục</label>
                    <select name="iddanhmuc" class="form-group" id="">
                        <option value="">Iphone</option>
                        <option value="">Oppo</option>
                        <option value="">SamSung</option>
                    </select>
                   
                </div>

                <!-- /.card-body -->

                <div class="card-footer">
                    <button type="submit" class="btn btn-primary">Thêm Mới</button>
                </div>
        </form>
    </div>
</div>