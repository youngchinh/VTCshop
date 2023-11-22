<div style="height: 840px;" class="content-wrapper">
    <div class="card card-primary">
        <div class="card-header">
            <h3 class="card-title">Thêm mới danh mục</h3>
        </div>
        <!-- /.card-header -->
        <!-- form start -->
        <form role="form" action="" method="POST">
            <div class="card-body">
                <div class="form-group">
                    <label for="">Tên danh mục</label>
                    <input type="text" class="form-control" name="tendanhmuc" placeholder="nhập tên">
                </div>
                <div class="form-group">
                    <label for="">Mô tả danh mục</label>
                    <input type="text" class="form-control" name="motadanhmuc" placeholder="nhập mô tả">
        <form action="AdminController.php?act=adddm" method="POST" role="form">
            <div class="card-body">
                <div class="form-group">
                    <label for="">Tên danh mục</label>
                    <input type="text" class="form-control" name="ten_danhmuc" placeholder="nhập tên">
                </div>
                <div class="form-group">
                    <label for="">Mô tả danh mục</label>
                    <input type="text" class="form-control" name="mota_danhmuc" placeholder="nhập mô tả">
            </div>
            <!-- /.card-body -->

            <div class="card-footer">
                <button type="submit" name="themmoi" class="btn btn-primary">Thêm Mới</button>
                <input class="btn btn-primary" name="themmoi" type="submit" value="THÊM MỚI">
                <a href="AdminController.php?act=listdm"><input class="btn btn-primary" type="button" value="DANH SÁCH"></a>

            </div>
            <?php
              if(isset($thongbao)&& ($thongbao!="")){
                  echo $thongbao;
              }
              ?>
        </form>
    </div>
</div>