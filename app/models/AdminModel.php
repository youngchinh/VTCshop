
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

// phản hồi
function loadall_lienhe($keyword = "", $id_trangthai = 0)
{
    $sql = "SELECT * from tb_lienhe where trang_thai = 0";
    // where 1 tức là nó đúng
    if ($keyword != "") {
        $sql .= " AND hovaten LIKE '%" . $keyword . "%'";
    }
    if ($id_trangthai > 0) {
        $sql .= " AND id_trangthai ='" . $id_trangthai . "'";
    }
    $sql .= " ORDER BY id_trangthai DESC";
    $listlienhe = pdo_query($sql);
    return  $listlienhe;
}

function loadall_trangthai()
{
    $sql = "SELECT * FROM tb_trangthai_lienhe order by id_trangthai DESC";
    $listtrangthai = pdo_query($sql);
    return $listtrangthai;
}

function loadone_lienhe($idlh)
{
    $sql = "SELECT * FROM tb_lienhe WHERE id_lienhe = " . $idlh;
    $result = pdo_query_one($sql);
    return $result;
}

function update_trangthai_lienhe($id, $id_trangthai) {
    $sql =  $sql = "UPDATE `tb_lienhe` SET `id_trangthai` = '$id_trangthai'  WHERE `tb_lienhe`.`id_lienhe` = $id;";
    pdo_execute($sql);
}


function loadall_taikhoan(){
    $sql ="SELECT * FROM tb_taikhoan ORDER BY hovaten";
    $listtaikhoan = pdo_query($sql);
    return $listtaikhoan;
}

function loadall_role (){
    $sql = "SELECT * FROM tb_role ORDER BY id_vaitro DESC";
    $listrole = pdo_query($sql);
    return $listrole;
    
}




function insert_taikhoan( $hovaten, $tai_khoan, $mat_khau, $email, $sdt, $dia_chi, $id_vaitro){
    $sql = "INSERT INTO tb_taikhoan(hovaten, tai_khoan, mat_khau, email, sdt, dia_chi, id_vaitro) VALUES ('$hovaten', '$tai_khoan', '$mat_khau', '$email', '$sdt', '$dia_chi', '$id_vaitro')";
    pdo_execute($sql);
}

function update_taikhoan($idtk, $hovaten, $tai_khoan, $mat_khau, $email, $sdt, $dia_chi, $id_vaitro){
    // $sql = "UPDATE tb_taikhoan SET hovaten='$hovaten', tai_khoan='$tai_khoan', mat_khau='$mat_khau', email='$email', sdt='$sdt', dia_chi='$dia_chi, id_vaitro='$id_vaitro'
    //  WHERE id_taikhoan=".$idtk;

    $sql = "UPDATE `tb_taikhoan` SET `hovaten` = '$hovaten', `tai_khoan` = '$tai_khoan',  `mat_khau` = '$mat_khau', `email` = '$email', `sdt` = '$sdt', `dia_chi` = '$dia_chi', `id_vaitro` = '$id_vaitro' WHERE `tb_taikhoan`.`id_taikhoan` = $idtk;";
    pdo_execute($sql);
}


//Bình Luận
function loadall_binhluan(){
    $sql = "SELECT * FROM tb_binhluan ORDER BY id_binhluan";
    $listbinhluan = pdo_query($sql);
    return $listbinhluan;
}


//Hệ Thống
function loadall_hethong(){
    $sql = "SELECT * FROM tb_hethong ORDER BY id_logo";
    $listhethong = pdo_query($sql);
    return $listhethong;
}


function update_hethong($idht, $img_logo, $ten_logo){
    if($img_logo != ''){
        $sql = "UPDATE tb_hethong SET img_logo='$img_logo', ten_logo='$ten_logo' WHERE id_logo=".$idht;
        pdo_execute($sql);
    }else{
        $sql = "UPDATE tb_hethong SET  ten_logo='$ten_logo' WHERE id_logo=".$idht;
        pdo_execute($sql);
    }
}


function insert_hethong($img_logo, $ten_logo){
    $sql = "INSERT INTO tb_hethong(img_logo, ten_logo) VALUES ('$img_logo', '$ten_logo');";
    pdo_execute($sql);
}

//Đơn hàng
function uploadall_donhang(){
    $sql = "SELECT * FROM tb_donhang ORDER BY id_donhang DESC";
    $listdonhang = pdo_query($sql);
    return $listdonhang;
}

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