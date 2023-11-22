<!-- điều hướng luồng hoạt động của trang admin -->
<!-- nhận request từ phía client -> tương tác model và views -> output thích hợp -->
<?php
include "../models/AdminModel.php";
include "../views/Admin/header.php";
include "../views/Admin/sidebar.php";
if (isset($_GET['act']) && ($_GET['act'] != "")) {
    $act = $_GET['act'];
    switch ($act) {
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

            
        case "listlh";
            include "../views/Admin/phanhoi/list.php";
            break;
    }
}




include "../views/Admin/footer.php";
?>