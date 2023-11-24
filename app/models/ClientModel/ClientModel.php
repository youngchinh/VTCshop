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
    $sql = "SELECT * FROM tb_sanpham WHERE 1 ORDER BY chien_dich DESC LIMIT 0,5";
    $listsptop5 = pdo_query($sql);
    return $listsptop5;
}

