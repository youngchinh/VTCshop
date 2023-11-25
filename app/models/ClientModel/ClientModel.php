<?php
include "/xampp/htdocs/VTCshop/config.php";
// Danh Mục
function loadall_danhmuc()
{
    $sql = "SELECT * FROM tb_danhmuc ORDER BY id_danhmuc DESC";
    $listdanhmuc = pdo_query($sql);
    return $listdanhmuc;
}

function loadsanphamsale_top5(){
    // $sql = "SELECT * FROM tb_sanpham WHERE 1 ORDER BY chien_dich DESC LIMIT 0,5";
    $sql = "SELECT * 
    FROM tb_sanpham 
    WHERE chien_dich = 'sale'
    ORDER BY chien_dich DESC
    LIMIT 5;";
    $listsptop5 = pdo_query($sql);
    return $listsptop5;
}

// liên hệ

function send_contact($hovaten, $sdt, $email, $dia_chi_lienhe, $ngay_gui, $noi_dung_lienhe) {
    $sql = "INSERT INTO `tb_lienhe`(`hovaten`, `sdt`, `email`, `dia_chi_lienhe`, `ngay_gui`, `noi_dung_lienhe`) 
    VALUES ('$hovaten', '$sdt', '$email', '$dia_chi_lienhe', '$ngay_gui', '$noi_dung_lienhe')";
    pdo_execute($sql);
}