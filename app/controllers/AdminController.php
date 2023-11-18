<!-- điều hướng luồng hoạt động của trang admin -->
<!-- nhận request từ phía client -> tương tác model và views -> output thích hợp -->
<?php
include "../models/AdminModel.php";
include "../views/Admin/header.php";
include "../views/Admin/sidebar.php";
if (isset($_GET['act']) && ($_GET['act'] != "")) {
    $act = $_GET['act'];
    switch ($act) {
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
            break;

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
            $listsanpham = loadall_sanpham();
            include "../views/Admin/sanpham/list.php";
            break;

        case "suasp";
        if(isset($_GET['idsp'])&&($_GET['idsp']>0)){
            $sanpham=loadone_sanpham($_GET['idsp']);
        }
        $listdanhmuc=loadall_danhmuc();
            include "../views/Admin/sanpham/update.php";
            break;

        case "updatesp";
        if(isset($_POST['capnhap'])&&($_POST['capnhap'])){
            $id_sanpham = $_POST['id_sanpham'];
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
                echo "The file ". htmlspecialchars( basename( $_FILES["img_sanpham"]["name"])). " has been uploaded.";
            } else {
                echo "Sorry, there was an error uploading your file.";
            }
            update_sanpham($id_sanpham, $ten_sanpham, $img_sanpham ,$mota_sanpham, $mau_sanpham, $gia_ban_dau, $gia_khuyen_mai, $dung_luong, $so_luong, $trang_thai, $id_danhmuc);
            $thongbao="cập nhật thành công!";
        }
        $listsanpham=loadall_sanpham("",0);
        $listdanhmuc=loadall_danhmuc();
        include "../views/Admin/sanpham/list.php";
        break;

        case "listbl";
            include "../views/Admin/binhluan/list.php";
            break;

        case "listbv";
            include "../views/Admin/baiviet/list.php";
            break;

        case "addbv";
            include "../views/Admin/baiviet/add.php";
            break;

        case "listtk";
            include "../views/Admin/taikhoan/list.php";
            break;

        case "addtk";
            include "../views/Admin/taikhoan/addtk.php";
            break;

        case "listdh";
            include "../views/Admin/donhang/listdh.php";
            break;

        case "listlogo";
            include "../views/Admin/hethong/logo.php";
            break;

        case "listlh";
            include "../views/Admin/phanhoi/list.php";
            break;
    }
}




include "../views/Admin/footer.php";
?>