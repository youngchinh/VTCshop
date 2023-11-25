<?php
include "/xampp/htdocs/VTCshop/config.php";
// Danh Mục
function loadall_danhmuc()
{
    $sql = "SELECT * FROM tb_danhmuc ORDER BY id_danhmuc DESC";
    $listdanhmuc = pdo_query($sql);
    return $listdanhmuc;
}

function loadsanphamsale_top5()
{
    // $sql = "SELECT * FROM tb_sanpham WHERE 1 ORDER BY chien_dich DESC LIMIT 0,5";
    $sql = "SELECT * 
    FROM tb_sanpham 
    WHERE chien_dich = 'sale'
    ORDER BY chien_dich DESC
    LIMIT 5;";
    $listsptop5 = pdo_query($sql);
    return $listsptop5;
}

//sanpham hot_deal
function sanpham_hotdeal()
{
    $sql = "SELECT * 
    FROM tb_sanpham
    WHERE chien_dich = 'hot_deal'
    ORDER BY chien_dich DESC
    LIMIT 10;";
    $listsphotdel = pdo_query($sql);
    return $listsphotdel;
}
// Truy vấn SQL để đếm số lượng sản phẩm thuộc chien_dich 'hot_deal'
function count_hotdeal()
{
    $sql = "SELECT COUNT(*) as total FROM tb_sanpham WHERE chien_dich = 'hot_deal'";
    $result = pdo_query($sql);
    return $result;
}

// liên hệ

function send_contact($hovaten, $sdt, $email, $dia_chi_lienhe, $ngay_gui, $noi_dung_lienhe)
{
    $sql = "INSERT INTO `tb_lienhe`(`hovaten`, `sdt`, `email`, `dia_chi_lienhe`, `ngay_gui`, `noi_dung_lienhe`) 
    VALUES ('$hovaten', '$sdt', '$email', '$dia_chi_lienhe', '$ngay_gui', '$noi_dung_lienhe')";
    pdo_execute($sql);
}