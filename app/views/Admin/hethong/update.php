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
                    <label for="">Ảnh đã chọn ID:<?php echo ' '.$idht ?>
                        <div class="input-group">
                            <div class="custom-file">
                                <input type="file" class="custom-file-input" name="img_logo" id="exampleInputFile">
                                <!-- <div style="width: 200px; height: 200px; ">
                                    <img  width="100px" height="100px" src="../upload/<?php //echo $list['img_logo']?>" alt="">
                                </div> -->
                                <label class="custom-file-label" for="exampleInputFile">Chọn file</label>
                            </div>
                        </div>
                </div>   
                
                <div class="form-group">
                    <label for="">Tên Logo</label>
                    <input type="text" class="form-control" name="ten_logo" value="<?php echo $list['ten_logo']?>" placeholder="Nhập tên logo " required>
                </div>
                         
                <!-- /.card-body -->

                <div class=" card-footer">
                    <input class="btn btn-primary" name="capnhat"  type="submit" value="Cập Nhập" input>
                    <th><a href="AdminController.php?act=addlogo"><input class="btn btn-primary" type="button" value="Thêm Mới"> </a></th>
                    <a href="AdminController.php?act=listlogo"><input class="btn btn-primary" type="button" value="DANH SÁCH"></a>
                </div>
                <?php
                if (isset($thongbao) && ($thongbao != "")) {
                    echo $thongbao;
                }
                ?>

        </form>
       
    </div>
</div>