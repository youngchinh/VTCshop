<?php
include "/xampp/htdocs/VTCshop/config.php";
// Danh Mục
function loadall_danhmuc()
{
    $sql = "SELECT * FROM tb_danhmuc ORDER BY id_danhmuc DESC";
    $listdanhmuc = pdo_query($sql);
    return $listdanhmuc;
}

function load_listdanhmuc()
{
    $sql = "select * from tb_danhmuc order by ten_danhmuc";
    $listdanhmuc = pdo_query($sql);
    return $listdanhmuc;
}

function insert_danhmuc($ten_danhmuc, $mota_danhmuc)
{
    $sql = "INSERT INTO `tb_danhmuc`(`ten_danhmuc`, `mota_danhmuc`) VALUES('$ten_danhmuc', '$mota_danhmuc');";
    pdo_execute($sql);
}

// Sản phẩm
function loadall_sanpham($keyword = "", $id_danhmuc = 0)
{
    $sql = "SELECT * from tb_sanpham where trang_thai = 0";
    // where 1 tức là nó đúng
    if ($keyword != "") {
        $sql .= " AND ten_sanpham LIKE '%" . $keyword . "%'";
    }
    if ($id_danhmuc > 0) {
        $sql .= " AND id_danhmuc ='" . $id_danhmuc . "'";
    }
    $sql .= " ORDER BY id_danhmuc DESC";
    $listsanpham = pdo_query($sql);
    return  $listsanpham;
}

function loadone_sanpham($id)
{
    $sql = "SELECT * FROM tb_sanpham WHERE id_sanpham = " . $id;
    $result = pdo_query_one($sql);
    return $result;
}

function update_sanpham($id, $ten_sanpham, $img_sanpham, $mota_sanpham, $mau_sanpham, $gia_ban_dau, $gia_khuyen_mai, $dung_luong, $so_luong, $trang_thai, $id_danhmuc)
{
    if ($img_sanpham != "") {
        // UPDATE `tb_sanpham` SET `ten_sanpham` = 'iphone1', `mota_sanpham` = 'da1', `mau_sanpham` = 'da1', `gia_ban_dau` = '122', `gia_khuyen_mai` = '213', `dung_luong` = '213', `so_luong` = '214', `trang_thai` = 'com1', `id_danhmuc` = '11' WHERE `tb_sanpham`.`id_sanpham` = 3;
        $sql = "UPDATE `tb_sanpham` SET `ten_sanpham` = '$ten_sanpham', `img_sanpham` = '$img_sanpham',  `mota_sanpham` = '$mota_sanpham', `mau_sanpham` = '$mau_sanpham', `gia_ban_dau` = '$gia_ban_dau', `gia_khuyen_mai` = '$gia_khuyen_mai', `dung_luong` = '$dung_luong', `so_luong` = '$so_luong', `trang_thai` = '$trang_thai', `id_danhmuc` = '$id_danhmuc' WHERE `tb_sanpham`.`id_sanpham` = $id;";
    } else {
        $sql = "UPDATE `tb_sanpham` SET `ten_sanpham` = '$ten_sanpham', `mota_sanpham` = '$mota_sanpham', `mau_sanpham` = '$mau_sanpham', `gia_ban_dau` = '$gia_ban_dau', `gia_khuyen_mai` = '$gia_khuyen_mai', `dung_luong` = '$dung_luong', `so_luong` = '$so_luong', `trang_thai` = '$trang_thai', `id_danhmuc` = '$id_danhmuc' WHERE `tb_sanpham`.`id_sanpham` = $id;";
    }
    pdo_execute($sql);
}

function insert_sanpham($ten_sanpham, $img_sanpham, $mota_sanpham, $mau_sanpham, $gia_ban_dau, $gia_khuyen_mai, $dung_luong, $so_luong, $trang_thai, $id_danhmuc)
{
    $sql = "INSERT INTO `tb_sanpham`(`ten_sanpham`, `img_sanpham`, `mota_sanpham`, `mau_sanpham`, `gia_ban_dau`, `gia_khuyen_mai`, `dung_luong`, `so_luong` , `trang_thai`, `id_danhmuc`) 
                VALUES ('$ten_sanpham', '$img_sanpham', '$mota_sanpham', '$mau_sanpham', '$gia_ban_dau', '$gia_khuyen_mai', '$dung_luong', '$so_luong', '$trang_thai', '$id_danhmuc');";
    pdo_execute($sql);
}

function delete_sanpham($idsp)
{
    $sql = "DELETE FROM tb_sanpham WHERE id_sanpham=" . $idsp;
    pdo_execute($sql);
}
