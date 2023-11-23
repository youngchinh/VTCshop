<?php
session_start();
if (!isset($_SESSION['admin'])) {
    header('location: ../views/Admin/login.php');
} else {
    $tai_khoan = $_SESSION['tai_khoan'];
    $mat_khau = $_SESSION['mat_khau'];
}
?>

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
            $listdanhmuc = load_listdanhmuc();
            include "../views/Admin/danhmuc/list.php";
            break;

        case "adddm";
            if (isset($_POST['themmoi']) && ($_POST['themmoi'])) {
                $ten_danhmuc = $_POST['ten_danhmuc'];
                $mota_danhmuc = $_POST['mota_danhmuc'];
                insert_danhmuc($ten_danhmuc, $mota_danhmuc);
                $thongbao = "thêm thành công";
            }
            include "../views/Admin/danhmuc/add.php";
            break;
  
          case "deletedm":
            if (isset($_GET['iddm']) && ($_GET['iddm'] > 0)) {
                $iddm = ($_GET['iddm']);
                $sql = "DELETE FROM tb_danhmuc WHERE id_danhmuc=" . $iddm;
                pdo_execute($sql);
            }
            $listdanhmuc = load_listdanhmuc();
            include "../views/Admin/danhmuc/list.php";


        case "suadm";
            if (isset($_GET['iddm']) && ($_GET['iddm'] > 0)) {
                $iddm = ($_GET['iddm']);
                $sql = "SELECT * FROM tb_danhmuc WHERE id_danhmuc=" . $iddm;
                $danhmuc = pdo_query_one($sql);
            }
            include "../views/Admin/danhmuc/update.php";
            break;

        case 'updatedm';
            if (isset($_POST['capnhat']) && ($_POST['capnhat'])) {
                $ten_danhmuc = $_POST['ten_danhmuc'];
                $mota_danhmuc = $_POST['mota_danhmuc'];
                $id = $_POST['id_danhmuc'];
                $sql = "UPDATE `tb_danhmuc` SET `ten_danhmuc` = '$ten_danhmuc', `mota_danhmuc` = '$mota_danhmuc' WHERE `tb_danhmuc`.`id_danhmuc` = $id;";
                pdo_execute($sql);
                $thongbao = "cập nhật thành công!";
            }
            $listdanhmuc = loadall_danhmuc();
            include "../views/Admin/danhmuc/list.php";
            break;
        
        
        case "listsp";
            if (isset($_POST['clickgo']) && ($_POST['clickgo'])) {
                $keyword = $_POST['keyword'];
                $id_danhmuc = $_POST['id_danhmuc'];
            } else {
                $keyword = "";
                $id_danhmuc = 0;
            }
            $listdanhmuc = loadall_danhmuc();
            $listsanpham = loadall_sanpham($keyword, $id_danhmuc);
            include "../views/Admin/sanpham/list.php";
            break;

        case "addsp";
            if (isset($_POST['themmoi']) && ($_POST['themmoi'])) {
                $ten_sanpham = $_POST['ten_sanpham'];
                $mota_sanpham = $_POST['mota_sanpham'];
                $mau_sanpham = $_POST['mau_sanpham'];
                $gia_ban_dau = $_POST['gia_ban_dau'];
                $gia_khuyen_mai = $_POST['gia_khuyen_mai'];
                $dung_luong = $_POST['dung_luong'];
                $so_luong = $_POST['so_luong'];
                $trang_thai = $_POST['trang_thai'];
                $id_danhmuc = $_POST['id_danhmuc'];

                $img_sanpham = $_FILES['img_sanpham']['name'];
                $target_dir = "../upload/";
                $target_file = $target_dir . basename($_FILES['img_sanpham']['name']);

                if (move_uploaded_file($_FILES['img_sanpham']['tmp_name'], $target_file)) {
                    //                        echo "Bạn đã upload ảnh thành công";
                } else {
                    //                        echo "Upload ảnh không thành công";
                }
                insert_sanpham($ten_sanpham, $img_sanpham, $mota_sanpham, $mau_sanpham, $gia_ban_dau, $gia_khuyen_mai, $dung_luong, $so_luong, $trang_thai, $id_danhmuc);
                $thongbao = "Thêm thành công";
            }
            $listdanhmuc = loadall_danhmuc();
            include "../views/Admin/sanpham/add.php";
            break;
    

        case "xoasp";
            if (isset($_GET['idsp'])) {
                delete_sanpham($_GET['idsp']);
            }
            $listdanhmuc = loadall_danhmuc();
            $listsanpham = loadall_sanpham();
            include "../views/Admin/sanpham/list.php";
            break;

        case "suasp";
            if (isset($_GET['idsp']) && ($_GET['idsp'] > 0)) {
                $sanpham = loadone_sanpham($_GET['idsp']);
            }
            $listdanhmuc = loadall_danhmuc();
            include "../views/Admin/sanpham/update.php";
            break;

        case "updatesp";
            if (isset($_POST['capnhap']) && ($_POST['capnhap'])) {
                $id = $_POST['id_sanpham'];
                $ten_sanpham = $_POST['ten_sanpham'];
                $mota_sanpham = $_POST['mota_sanpham'];
                $mau_sanpham = $_POST['mau_sanpham'];
                $gia_ban_dau = $_POST['gia_ban_dau'];
                $gia_khuyen_mai = $_POST['gia_khuyen_mai'];
                $dung_luong = $_POST['dung_luong'];
                $so_luong = $_POST['so_luong'];
                $trang_thai = $_POST['trang_thai'];
                $id_danhmuc = $_POST['id_danhmuc'];

                $img_sanpham = $_FILES['img_sanpham']['name'];
                $target_dir = "../upload/";
                $target_file = $target_dir . basename($_FILES["img_sanpham"]["name"]);
                if (move_uploaded_file($_FILES["img_sanpham"]["tmp_name"], $target_file)) {
                    // echo "The file ". htmlspecialchars( basename( $_FILES["img_sanpham"]["name"])). " has been uploaded.";
                } else {
                    // echo "Sorry, there was an error uploading your file.";
                }
                update_sanpham($id, $ten_sanpham, $img_sanpham, $mota_sanpham, $mau_sanpham, $gia_ban_dau, $gia_khuyen_mai, $dung_luong, $so_luong, $trang_thai, $id_danhmuc);
                $thongbao = "cập nhật thành công!";
            }
            $listdanhmuc = loadall_danhmuc();
            $listsanpham = loadall_sanpham();
            include "../views/Admin/sanpham/list.php";
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
            $listbaiviet = loadall_baiviet();
            include "../views/Admin/baiviet/list.php";
            break;

        case "addbv";
            //Kiem tra xem nguoi dung co click vao nut add khong
            if (isset($_POST['themmoi']) && ($_POST['themmoi'])) {

                $tenbaiviet = $_POST['tenbaiviet'];
                $noidungbaiviet = $_POST['noidungbaiviet'];
                $filename = $_FILES['filename']['name'];
                $target_dir = "../upload/";
                $target_file = $target_dir . basename($_FILES["filename"]["name"]);
                if (move_uploaded_file($_FILES["filename"]["tmp_name"], $target_file)) {
                } else {
                }
                insert_baiviet($tenbaiviet, $filename, $noidungbaiviet);
                $thongbao = "Thêm Thành Công ";
            }
            $listbaiviet = loadall_baiviet();
            include "../views/Admin/baiviet/add.php";
            break;
        case "suabv";
            if (isset($_GET['id_baiviet']) && ($_GET['id_baiviet'] > 0)) {
                $sql = "SELECT * FROM tb_baiviet WHERE id_baiviet=" . $_GET['id_baiviet'];
                $bv = pdo_query_one($sql);
            }
            include "../views/Admin/baiviet/update.php";
            break;

        case "updatebv";

            if (isset($_POST['capnhat']) && ($_POST['capnhat'])) {
                $id_baiviet = $_POST['id_baiviet'];
                $tenbaiviet = $_POST['tenbaiviet'];
                $noidungbaiviet = $_POST['noidungbaiviet'];
                $filename = $_FILES['img_baiviet']['name'];
                $target_dir = "../upload/";
                $target_file = $target_dir . basename($_FILES["img_baiviet"]["name"]);
                if (move_uploaded_file($_FILES["img_baiviet"]["tmp_name"], $target_file)) {
                } else {
                }
                update_baiviet($id_baiviet, $tenbaiviet, $filename, $noidungbaiviet);
            }
            $sql = "SELECT * FROM tb_baiviet WHERE id_baiviet=" . $id_baiviet;
            $bv = pdo_query_one($sql);
            $listbaiviet = loadall_baiviet();
            include "../views/Admin/baiviet/list.php";
            break;

        case "xoabv";
            if (isset($_GET['id_baiviet']) && ($_GET['id_baiviet'] > 0)) {
                $sql = "DELETE FROM tb_baiviet WHERE id_baiviet=" . $_GET['id_baiviet'];
                pdo_execute($sql);
            }
            $sql = "SELECT * FROM tb_baiviet ORDER BY tieu_de";
            $listbaiviet = pdo_query($sql);
            include "../views/Admin/baiviet/list.php";
            break;



        // Tài Khoản
        case "listtk";
            if (isset($_POST['clickgo']) && ($_POST['clickgo'])) {
                $keyword = $_POST['keyword'];
                $id_vaitro = $_POST['id_vaitro'];
            } else {
                $keyword = "";
                $id_vaitro = 0;
            }
            $listtaikhoan = loadall_taikhoan_list($keyword, $id_vaitro);
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


            case "listdh";
            $listdonhang = uploadall_donhang();
            include "../views/Admin/donhang/listdh.php";
            break;
            
            case "xoadh";
            if (isset($_GET['iddh']) && ($_GET['iddh'] > 0)) {
                $sql = "DELETE FROM tb_donhang WHERE id_donhang=" . $_GET['iddh'];
                pdo_execute($sql);
            }
            $sql = "SELECT * FROM tb_donhang ORDER BY id_donhang";
            $listdonhang = pdo_query($sql);

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
                $thongbao = "Cập nhật thành công";
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
            if (isset($_POST['clickgo']) && ($_POST['clickgo'])) {
                $keyword = $_POST['keyword'];
                $id_trangthai = $_POST['id_trangthai'];
            } else {
                $keyword = "";
                $id_trangthai = 0;
            }
            $listtrangthai = loadall_trangthai();
            $listlienhe = loadall_lienhe($keyword, $id_trangthai);
            include "../views/Admin/phanhoi/list.php";
            break;

        case "sualh";
            if (isset($_GET['idlh']) && ($_GET['idlh'] > 0)) {
                $idlh = ($_GET['idlh']);
                $lienhe = loadone_lienhe($idlh);
            }
            $listtrangthai = loadall_trangthai();
            include "../views/Admin/phanhoi/update.php";
            break;

        case "updatelh";
            if (isset($_POST['capnhap']) && ($_POST['capnhap'])) {
                $id_trangthai = $_POST['id_trangthai'];
                $id = $_POST['id_lienhe'];
                // $hovaten = $_POST['hovaten'];
                // $sdt = $_POST['sdt'];
                // $email = $_POST['email'];
                // $dia_chi_lienhe = $_POST['dia_chi_lienhe'];
                // $ngay_gui = $_POST['ngay_gui'];
                // $noi_dung_lienhe = $_POST['noi_dung_lienhe'];
                // update_trangthai_lienhe($id, $id_trangthai, $hovaten, $sdt, $email, $dia_chi_lienhe, $ngay_gui, $noi_dung_lienhe);
                update_trangthai_lienhe($id, $id_trangthai);
                $lienhe = loadone_lienhe($id);
                $thongbao = "cập nhật thành công!";
            }
            $listtrangthai = loadall_trangthai();
            $listlienhe = loadall_lienhe();
            include "../views/Admin/phanhoi/update.php";
            break;
    }
}




include "../views/Admin/footer.php";
?>