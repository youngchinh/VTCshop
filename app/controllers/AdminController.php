<!-- điều hướng luồng hoạt động của trang admin -->
<!-- nhận request từ phía client -> tương tác model và views -> output thích hợp -->
<?php 
    include "../views/Admin/header.php";
    include "../views/Admin/sidebar.php";
    if(isset($_GET['act'])&&($_GET['act']!="")){
        $act=$_GET['act'];
        switch($act) {
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
            include "../views/Admin/taikhoan/addtk.php";
            break;

            case "listdh";
            include "../views/Admin/donhang/listdh.php";
            break;

            case "listlogo";
            include "../views/Admin/hethong/logo.php";
            break;
        }

    }


    include "../views/Admin/footer.php";
?>



 
