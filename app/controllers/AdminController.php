<!-- điều hướng luồng hoạt động của trang admin -->
<!-- nhận request từ phía client -> tương tác model và views -> output thích hợp -->
<?php
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

        case "listsp":
            include "../views/Admin/sanpham/list.php";
            break;

        case "addsp":
            include "../views/Admin/sanpham/add.php";
            break;

        case "listbl":
            include "../views/Admin/binhluan/list.php";
            break;

        case "listbv":
            include "../views/Admin/baiviet/list.php";
            break;

        case "addbv":
            include "../views/Admin/baiviet/add.php";
            break;
    }
}


include "../views/Admin/footer.php";
?>