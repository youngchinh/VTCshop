<!-- điều hướng luồng hoạt động của trang admin -->
<!-- nhận request từ phía client -> tương tác model và views -> output thích hợp -->
<?php
include "../models/AdminModel.php";
include "../views/Admin/header.php";
include "../views/Admin/sidebar.php";
if (isset($_GET['act']) && ($_GET['act'] != "")) {
    $act = $_GET['act'];
    switch ($act) {
        // Danh Mục
        case "listdm";
            include "../views/Admin/danhmuc/list.php";
            break;

        case "adddm";
            include "../views/Admin/danhmuc/add.php";
            break;


        // Sản Phẩm
        case "listsp";
            include "../views/Admin/sanpham/list.php";
            break;

        case "addsp";
            include "../views/Admin/sanpham/add.php";
            break;


        // Bình Luận
        case "listbl";
            $listbinhluan = loadall_binhluan();
            include "../views/Admin/binhluan/list.php";

            break;

        case "xoabl";
            if(isset($_GET['idbl']) && $_GET['idbl'] > 0){
                $idbl = $_GET['idbl'];
                $sql = "DELETE FROM tb_binhluan WHERE id_binhluan=" .$idbl;
                pdo_execute($sql);
            }
            $listbinhluan = loadall_binhluan();
            include "../views/Admin/binhluan/list.php";
            break;

        
        // Bài Viết
        case "listbv";
            include "../views/Admin/baiviet/list.php";
            break;

        case "addbv";
            include "../views/Admin/baiviet/add.php";
            break;



        // Tài Khoản
        case "listtk";
            $listtaikhoan = loadall_taikhoan();
            $listrole = loadall_role();
            include "../views/Admin/taikhoan/list.php";
            break;

        case "addtk";
            if (isset($_POST['themmoi']) && $_POST['themmoi']) {
                $hovaten = $_POST['hovaten'];
                $tai_khoan = $_POST['tai_khoan'];
                $mat_khau = $_POST['mat_khau'];
                $email = $_POST['email'];
                $sdt = $_POST['sdt'];
                $dia_chi = $_POST['dia_chi'];
                $id_vaitro = $_POST['id_vaitro'];

                insert_taikhoan($hovaten, $tai_khoan, $mat_khau, $email, $sdt, $dia_chi, $id_vaitro);
                $thongbao = "Thêm thành công";
            }
            $listrole = loadall_role();

            include "../views/Admin/taikhoan/addtk.php";
            break;

        case "xoatk";
            if (isset($_GET['idtk']) && $_GET['idtk'] > 0) {
                $idtk = $_GET['idtk'];
                $sql = "DELETE FROM tb_taikhoan WHERE id_taikhoan=" . $idtk;
                pdo_execute($sql);
            }
            $listtaikhoan = loadall_taikhoan();
            include "../views/Admin/taikhoan/list.php";

        case "suatk";
            if (isset($_GET['idtk']) && $_GET['idtk'] > 0) {
                $idtk = $_GET['idtk'];
                $sql = "SELECT * FROM tb_taikhoan WHERE id_taikhoan=".$idtk;
                $list = pdo_query_one($sql);
            }
            $listrole = loadall_role();
            include "../views/Admin/taikhoan/update.php";
            break;

        case "updatetk";
            if (isset($_POST['capnhat']) && $_POST['capnhat']){
                $idtk = $_POST['idtk'];
                $hovaten = $_POST['hovaten'];
                $tai_khoan = $_POST['tai_khoan'];
                $mat_khau = $_POST['mat_khau'];
                $email = $_POST['email'];
                $sdt = $_POST['sdt'];
                $dia_chi = $_POST['dia_chi'];
                $id_vaitro = $_POST['id_vaitro'];
                update_taikhoan($idtk,$hovaten, $tai_khoan, $mat_khau, $email, $sdt, $dia_chi, $id_vaitro);
                $sql = "SELECT * FROM tb_taikhoan WHERE id_taikhoan=".$idtk;
                $list = pdo_query_one($sql);
                $thongbao = "Cập nhật thành công";
            }
            $listrole = loadall_role();
            $listtaikhoan = loadall_taikhoan();
            include "../views/Admin/taikhoan/update.php";
            break;


        // Đơn Hàng
        case "listdh";
            include "../views/Admin/donhang/listdh.php";
            break;
    


        // Hệ Thống
        case "listlogo";
            $listhethong = loadall_hethong();
            include "../views/Admin/hethong/listlogo.php";
            break;


        case "addlogo";
            if (isset($_POST['them']) && ($_POST['them'])) {
                $img_logo = $_FILES['img_logo']['name'];
                $ten_logo = $_POST['ten_logo'];
                $tmp_img = $_FILES['img_logo']['tmp_name'];
                $target_dir = "../upload/";
                move_uploaded_file($tmp_img,$target_dir.$img_logo);
                insert_hethong($img_logo, $ten_logo);
            }
            include "../views/Admin/hethong/add.php";
            break;
        
        case "xoaht";
            if (isset($_GET['idht']) && $_GET['idht'] > 0) {
                $idht = $_GET['idht'];
                $sql = "DELETE FROM tb_hethong WHERE id_logo=" .$idht;
                pdo_execute($sql);
            }
            $listhethong = loadall_hethong();
            include "../views/Admin/hethong/logo.php";
            break;

        case "suaht";
            if (isset($_GET['idht']) && $_GET['idht'] > 0) {
                $idht = $_GET['idht'];
                $sql = "SELECT * FROM tb_hethong WHERE id_logo=".$idht;
                $list = pdo_query_one($sql);
                if (isset($_POST['capnhat']) && ($_POST['capnhat'])){
                    $img_logo = $_FILES['img_logo']['name'];
                    $ten_logo = $_POST['ten_logo'];
                  
                    update_hethong($idht, $img_logo, $ten_logo);
                }
            }
            $listhethong = loadall_hethong();
            include "../views/Admin/hethong/update.php";
            break;

        // Liên Hệ
        case "listlh";
            include "../views/Admin/phanhoi/list.php";
            break;
    }
}




include "../views/Admin/footer.php";
?>