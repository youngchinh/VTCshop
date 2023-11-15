
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
        }

    }


    include "../views/Admin/footer.php";
?>



 
