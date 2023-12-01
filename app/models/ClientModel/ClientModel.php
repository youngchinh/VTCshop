<?php
include "/xampp/htdocs/VTCshop/config.php";

//login client
function checkuser($tai_khoan, $mat_khau)
{
    $sql = "SELECT * FROM tb_taikhoan WHERE tai_khoan = '".$tai_khoan."' AND mat_khau = '".$mat_khau."' AND id_vaitro = 2";
    $result = pdo_query_one($sql);
    return $result;
}
function insert_taikhoan( $hovaten, $tai_khoan, $mat_khau, $email, $sdt, $dia_chi){
    $sql = "INSERT INTO tb_taikhoan(hovaten, tai_khoan, mat_khau, email, sdt, dia_chi) VALUES ('$hovaten', '$tai_khoan', '$mat_khau', '$email', '$sdt', '$dia_chi')";
    pdo_execute($sql);
}
//edit account
function edit_account($hovaten, $tai_khoan, $mat_khau, $email, $sdt, $dia_chi, $id_taikhoan) {
    $sql = "UPDATE `tb_taikhoan` SET `hovaten` = '$hovaten', `tai_khoan` = '$tai_khoan',  `mat_khau` = '$mat_khau', `email` = '$email', `sdt` = '$sdt', `dia_chi` = '$dia_chi' WHERE `tb_taikhoan`.`id_taikhoan` = $id_taikhoan;";
    pdo_execute($sql);
}

//add dơn hàng
function add_DonHang($id_user, $hovaten, $sdt, $dia_chi, $email, $tongtien, $pttt){
    $sql = "INSERT INTO tb_donhang (id_taikhoan, hovaten, dia_chi, sdt, email, tongtien, pttt) VALUES ($id_user, '$hovaten', '$dia_chi', '$sdt', '$email', $tongtien, $pttt);";
    $id = pdo_executeid($sql);
    return $id;
}

function add_DonHangDetail($id_order, $id_pro, $name, $so_luong, $thanhtien){
    $sql="INSERT INTO tb_chitietdonhang (id_donhang, id_sanpham, ten_sanpham, soluong, thanh_tien) VALUES ($id_order, $id_pro, '$name', $so_luong, $thanhtien);";
    $id = pdo_executeid($sql);
    return $id;
}
// Danh Mục
function loadall_danhmuc()
{
    $sql = "SELECT * FROM tb_danhmuc ORDER BY id_danhmuc DESC";
    $listdanhmuc = pdo_query($sql);
    return $listdanhmuc;
}

function loadone_productCart($idList) {
    $sql = 'SELECT * FROM tb_sanpham WHERE id_sanpham IN ('.$idList.')';
    $result = pdo_query($sql);
    return $result;
}

//load san pham chi tiet
function loadone_sanpham($idsp)
{
    $sql = "SELECT * FROM tb_sanpham WHERE id_sanpham = " . $idsp;
    $result = pdo_query_one($sql);
    return $result;
}

//load sản phẩm tương tự
function loadsp_lienquan($idsp, $iddm)
{
    $sql = "SELECT * FROM tb_sanpham WHERE id_sanpham <> " . $idsp;
    $sql .= " AND id_danhmuc =" . $iddm;
    $result = pdo_query($sql);
    return $result;
}

// load sản phẩm trang 1
function loadall_sanpham()
{
    $sql = "SELECT * FROM tb_sanpham LIMIT 12";
    $result = pdo_query($sql);
    return $result;
}

// load sản phẩm trang 2
function loadall_sanpham_2()
{
    $soLuongDaHienThi = 12;
    $sql = "SELECT * FROM tb_sanpham LIMIT 12 OFFSET $soLuongDaHienThi";
    $result = pdo_query($sql);
    return $result;
}
// load sản phẩm trang 3
function loadall_sanpham_3()
{
    $soLuongDaHienThi = 24;
    $sql = "SELECT * FROM tb_sanpham LIMIT 12 OFFSET $soLuongDaHienThi";
    $result = pdo_query($sql);
    return $result;
}

// load sản phẩm theo danh mục
function load_sanpham_danhmuc($iddm, $limit)
{
    $sql = "SELECT * FROM tb_sanpham WHERE 1";
    if ($iddm > 0) {
        $sql .= " AND id_danhmuc=" . $iddm;
    }
    $sql .= " ORDER BY id_sanpham DESC LIMIT " . $limit;
    $result = pdo_query($sql);
    return $result;
}

//load trang chủ
function loadsanphamsale_top5()
{
    // $sql = "SELECT * FROM tb_sanpham WHERE 1 ORDER BY chien_dich DESC LIMIT 0,5";
    $sql = "SELECT * 
    FROM tb_sanpham 
    WHERE chien_dich = 'sale_top'
    ORDER BY chien_dich DESC
    LIMIT 5;";
    $result = pdo_query($sql);
    return $result;
}

function loadsanphamhot_top10()
{
    // $sql = "SELECT * FROM tb_sanpham WHERE 1 ORDER BY chien_dich DESC LIMIT 0,5";
    $sql = "SELECT * 
    FROM tb_sanpham 
    WHERE chien_dich = 'top_hot'
    ORDER BY chien_dich DESC
    LIMIT 10;";
    $result = pdo_query($sql);
    return $result;
}



//sanpham hot_deal
function sanpham_hotdeal()
{
    $sql = "SELECT * 
    FROM tb_sanpham
    WHERE chien_dich = 'hot_deal'
    ORDER BY chien_dich DESC
    LIMIT 10;";
    $result = pdo_query($sql);
    return $result;
}

// Truy vấn SQL để đếm số lượng sản phẩm thuộc chien_dich 'hot_deal'
function count_hotdeal()
{
    $sql = "SELECT COUNT(*) as total FROM tb_sanpham WHERE chien_dich = 'hot_deal'";
    $result = pdo_query($sql);
    return $result;
}


//sanpham sale
function loadsanpham_sale()
{
    // $sql = "SELECT * FROM tb_sanpham WHERE 1 ORDER BY chien_dich DESC LIMIT 0,5";
    $sql = "SELECT * 
    FROM tb_sanpham 
    WHERE chien_dich = 'sale'
    ORDER BY chien_dich DESC
    LIMIT 10;";
    $result = pdo_query($sql);
    return $result;
}


//sanpham nổi bật
function loadsanpham_noibat()
{
    // $sql = "SELECT * FROM tb_sanpham WHERE 1 ORDER BY chien_dich DESC LIMIT 0,5";
    $sql = "SELECT * 
    FROM tb_sanpham 
    WHERE chien_dich = 'noi_bat'
    ORDER BY chien_dich DESC
    LIMIT 10;";
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


//Bình luận
function insert_binhluan($hovaten, $noi_dung_binhluan, $ngay_binh_luan, $id_sanpham, $id_taikhoan){
    $sql = "INSERT INTO `tb_binhluan`(`hovaten`, `noi_dung_binhluan`, `ngay_binh_luan`, `id_sanpham`, `id_taikhoan`) 
    VALUES ('$hovaten', '$noi_dung_binhluan', '$ngay_binh_luan', '$id_sanpham', '$id_taikhoan')";
    pdo_execute($sql);
}

function loadall_binhluan(){
    $sql = "SELECT * FROM tb_binhluan ORDER BY id_binhluan DESC";
    return pdo_query($sql);
}

// Đơn hàng
function loadall_donhang(){
    $sql = "SELECT * FROM tb_donhang ORDER BY id_donhang DESC";
    $listdonhang = pdo_query($sql);
    return $listdonhang;
}

// Tài khoản
function loadall_taikhoan(){
    $sql ="SELECT * FROM tb_taikhoan ORDER BY hovaten";
    $listtaikhoan = pdo_query($sql);
    return $listtaikhoan;
}

//Bài viết
function loadall_baiviet(){
    $sql = "SELECT * FROM tb_baiviet ORDER BY id_baiviet DESC";
    $listbaiviet = pdo_query($sql);
    return $listbaiviet;
}

function loadone_baiviet($idbv)
{
    $sql = "SELECT * FROM tb_baiviet WHERE id_baiviet =".$idbv;
    $result = pdo_query_one($sql);
    return $result;
}

