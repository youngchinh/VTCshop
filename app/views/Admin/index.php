<?php 
    include "header.php";
    include "sidebar.php";
    if(isset($_GET['act'])&&($_GET['act']!="")){
        $act=$_GET['act'];
        switch($act) {
            case "listdm";
            include "./danhmuc/list.php";
            break;

            case "adddm";
            include "./danhmuc/add.php";
            break;
        }

    }


    include "footer.php";
    ?>




 
