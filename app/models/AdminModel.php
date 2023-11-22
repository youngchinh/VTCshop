<?php
include "/xampp/htdocs/VTCshop/config.php";
//Bai viet
function loadall_baiviet(){
    $sql = "SELECT * FROM tb_baiviet ORDER BY id_baiviet DESC";
    $listbaiviet = pdo_query($sql);
    return $listbaiviet;
}

function insert_baiviet($tenbaiviet,$filename,$noidungbaiviet){
    $sql = "INSERT INTO `tb_baiviet` (`tieu_de`,`img_baiviet`,`noi_dung`) VALUES ('$tenbaiviet','$filename','$noidungbaiviet')";
    pdo_execute($sql);
}

function update_baiviet($id_baiviet,$tenbaiviet,$filename,$noidungbaiviet){
    if($filename != ""){

        $sql = "UPDATE `tb_baiviet` SET `tieu_de` = '$tenbaiviet', `img_baiviet` = '$filename',  `noi_dung` = '$noidungbaiviet' WHERE `tb_baiviet`.`id_baiviet` = $id_baiviet;";
    } else{
        $sql = "UPDATE `tb_baiviet` SET `tieu_de` = '$tenbaiviet', `noi_dung` = '$noidungbaiviet' WHERE `tb_baiviet`.`id_baiviet` = $id_baiviet;";
    }
    pdo_execute($sql);
}

//Đơn hàng
function uploadall_donhang(){
    $sql = "SELECT * FROM tb_donhang ORDER BY id_donhang DESC";
    $listdonhang = pdo_query($sql);
    return $listdonhang;
}

function update_donhang($id_donhang,$don_gia,$trang_thai,$ten_sanpham){
    if($id_donhang != ""){

        $sql = "UPDATE `tb_donhang` SET `don_gia` = '$don_gia', `trang_thai` = '$trang_thai',  `ten_sanpham` = '$ten_sanpham' WHERE `tb_donhang`.`id_donhang` = $id_donhang;";
    } else{
        $sql = "UPDATE `tb_donhang` SET `don_gia` = '$don_gia', `trang_thai` = '$trang_thai',  `ten_sanpham` = '$ten_sanpham' WHERE `tb_donhang`.`id_donhang` = $id_donhang;";
    }
    pdo_execute($sql);
}


?>