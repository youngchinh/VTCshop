<?php
include "../models/ClientModel/ClientModel.php";
// include "../models/ClientModel/sanpham.php";
include "../views/Client/header.php";

$loaddanhmuc = loadall_danhmuc();
$listsptop5 = loadsanphamsale_top5();

include "../views/Client/menu.php";
if (isset($_GET['act']) && ($_GET['act'] != "")) {
    $act = $_GET['act'];
    switch ($act) {
        case "baiviet";
            include "../views/Client/baiviet.php";
            break;
        case "thongtin";
            include "../views/Client/thongtin.php";
            break;
        case "lienhe";
            if (isset($_POST['send']) && ($_POST['send'])) {
                $hovaten = $_POST['hovaten'];
                $email = $_POST['email'];
                $sdt = $_POST['sdt'];
                $dia_chi_lienhe = $_POST['dia_chi_lienhe'];
                $_POST['ngay_gui'] = date("Y-m-d");
                $ngay_gui = $_POST['ngay_gui'];
                $noi_dung_lienhe = $_POST['noi_dung_lienhe'];
                send_contact($hovaten, $sdt, $email, $dia_chi_lienhe, $ngay_gui, $noi_dung_lienhe);
                $thongbao = "Gửi thành công";
            }

            include "../views/Client/lienhe.php";
            break;
    }
} else {
    include "../views/Client/banner.php";
    include "../views/Client/tienich.php";
    include "../views/Client/sidebar.php";
}

include "../views/Client/footer.php";
