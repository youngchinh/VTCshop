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
            include "../views/Client/lienhe.php";
            break;
    }
} else {
    include "../views/Client/banner.php";
    include "../views/Client/tienich.php";
    include "../views/Client/sidebar.php";
}

include "../views/Client/footer.php";
