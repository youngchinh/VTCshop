<?php 
include "/xampp/htdocs/VTCshop/config.php";

function get_taikhoan_tk_mk($tai_khoan, $mat_khau) {
    $sql = "SELECT * FROM tb_taikhoan WHERE tai_khoan = '".$tai_khoan."' AND mat_khau = '".$mat_khau."' AND id_vaitro = 1";
    $checktaikhoan = pdo_query_one($sql);
    return $checktaikhoan;
}
