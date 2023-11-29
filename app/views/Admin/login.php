<?php
session_start();
include "/xampp/htdocs/VTCshop/app/models/AdminModel/AdminLoginModel.php";
if ((isset($_POST['dangnhap']))) {
    $tai_khoan = $_POST['tai_khoan'];
    $mat_khau = $_POST['mat_khau'];
    // $thongbao = "Đăng nhập thành công";

    $taikhoan = get_taikhoan_tk_mk($tai_khoan, $mat_khau);
        // extract($taikhoan);
        if(is_array($taikhoan)) {
            $_SESSION['admin'] = $taikhoan;
            $_SESSION['tai_khoan'] = $tai_khoan;
            $_SESSION['mat_khau'] = $mat_khau;
            header('Location: /../VTCshop/app/controllers/AdminController.php');
        } else {
            $thongbao = "Tài khoản không tồn tại";
        }
}
?>

<link rel="stylesheet" href="./assets/css/login.css">
<div class="boxcenter">
    <h2 style="text-align: center;">Login ADMIN</h2>

    <form action="<?php echo $_SERVER['PHP_SELF'] ?>" method="post">

        <div class="container">
            <label for="uname"><b>Tài Khoản</b></label>
            <input type="text" placeholder="Nhập tài khoản" name="tai_khoan" required>

            <label for="psw"><b>Mật khẩu</b></label>
            <input type="password" placeholder="Nhập mật khẩu" name="mat_khau" required>

            <button type="submit" name="dangnhap">Đăng Nhập</button>

            <?php
            if (isset($thongbao) && ($thongbao != "")) {
                echo $thongbao;
            }
            ?>
    </form>
</div>