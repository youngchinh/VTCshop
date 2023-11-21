<?php 
    include "/xampp/htdocs/VTCshop/config.php";
    // Tài khoản 

    function loadall_taikhoan(){
        $sql ="SELECT * FROM tb_taikhoan ORDER BY hovaten";
        $listtaikhoan = pdo_query($sql);
        return $listtaikhoan;
    }

    function loadall_role (){
        $sql = "SELECT * FROM tb_role ORDER BY id_vaitro DESC";
        $listrole = pdo_query($sql);
        return $listrole;
    }




    function insert_taikhoan( $hovaten, $tai_khoan, $mat_khau, $email, $sdt, $dia_chi, $id_vaitro){
        $sql = "INSERT INTO tb_taikhoan(hovaten, tai_khoan, mat_khau, email, sdt, dia_chi, id_vaitro) VALUES ('$hovaten', '$tai_khoan', '$mat_khau', '$email', '$sdt', '$dia_chi', '$id_vaitro')";
        pdo_execute($sql);
    }

    function update_taikhoan($idtk, $hovaten, $tai_khoan, $mat_khau, $email, $sdt, $dia_chi, $id_vaitro){
        $sql = "UPDATE tb_taikhoan SET hovaten='$hovaten', tai_khoan='$tai_khoan', mat_khau='$mat_khau', email='$email', sdt='$sdt', dia_chi='$dia_chi', id_vaitro='$id_vaitro' WHERE id_taikhoan=".$idtk;
        pdo_execute($sql);
    }


    //Bình Luận
    function loadall_binhluan(){
        $sql = "SELECT * FROM tb_binhluan ORDER BY id_binhluan";
        $listbinhluan = pdo_query($sql);
        return $listbinhluan;
    }

    //Sản Phẩm
    function loadall_sanpham(){
        $sql = "SELECT * FROM tb_sanpham ORDER BY id_sanpham";
        $listsanpham = pdo_query($sql);
        return $listsanpham;
    } 
   


    //Hệ Thống
    function loadall_hethong(){
        $sql = "SELECT * FROM tb_hethong ORDER BY id_logo";
        $listhethong = pdo_query($sql);
        return $listhethong;
    }


    function insert_hethong($img_logo, $ten_logo){
        $sql = "INSERT INTO `tb_hethong`(`img_logo`, `ten_logo`) VALUES ('$img_logo', '$ten_logo');";
        pdo_execute($sql);
    }
?>