<!-- điều hướng luồng hoạt động của trang admin -->
<!-- nhận request từ phía client -> tương tác model và views -> output thích hợp -->
<?php
include "../../config.php";
include "../views/Admin/header.php";
include "../views/Admin/sidebar.php";
if (isset($_GET['act']) && ($_GET['act'] != "")) {
    $act = $_GET['act'];
    switch ($act) {
        case "listdm";
            include "../views/Admin/danhmuc/list.php";
            break;

        case "adddm";
            include "../views/Admin/danhmuc/add.php";
            break;

        case "listtk";
            include "../views/Admin/taikhoan/list.php";
            break;

        case "addtk";
            if (isset($_POST['themmoi']) && $_POST['themmoi']) {
                $hovaten = $_POST['hovaten'];
                $tai_khoan = $_POST['taikhoan'];
                $mat_khau = $_POST['matkhau'];
                $email = $POST['email'];
                $sdt = $_POST['sdt'];
                $dia_chi = $_POST['diachi'];
                $ten_vaitro = $_POST['tenvaitro'];

                $sql = "INSERT INTO tb_taikhoan(hovaten, tai_khoan, mat_khau, email, sdt, dia_chi, ten_vaitro) VALUES 
                                            ('$hovaten', '$tai_khoan', '$mat_khau', '$email', '$sdt', '$dia_chi', '$ten_vaitro')";
                pdo_execute($sql);
                $thongbao = "Thêm thành công";
            }
                
            include "../views/Admin/taikhoan/addtk.php";
            break;

        case "listdh";
            include "../views/Admin/donhang/listdh.php";
            break;

        case "listlogo";
            include "../views/Admin/hethong/logo.php";
            break;

        case "listsp";
            include "../views/Admin/sanpham/list.php";
            break;

        case "addsp";
            include "../views/Admin/sanpham/add.php";
            break;

        case "listbl";
            //Kiem tra xem nguoi dung co click vao ko

            include "../views/Admin/binhluan/list.php";
            break;

        case "listbv";
            include "../views/Admin/baiviet/list.php";
            break;

        case "addbv";
            include "../views/Admin/baiviet/add.php";
            break;
        
        case "listlh";
            include "../views/Admin/phanhoi/list.php";
            break;
    }
}




include "../views/Admin/footer.php";
?>