<?php
session_start();
include "../models/ClientModel/ClientModel.php";
include "../views/Client/header.php";

// BEGIN funcion load trang chủ 
$loaddanhmuc = loadall_danhmuc();
$listsptop5 = loadsanphamsale_top5();
$listsp_hot = loadsanphamhot_top10();

// END funcion load trang chủ 
include "../views/Client/menu.php";
if (isset($_GET['iddm']) && ($_GET['iddm'] > 0)) {
    $iddm = $_GET['iddm'];
    switch ($iddm) {
        case '1':
            $list_sp = load_sanpham_danhmuc(1, 9);
            include "../views/Client/iphone.php";
            break;
        case '2':
            $list_sp = load_sanpham_danhmuc(2, 9);
            include "../views/Client/samsung.php";
            break;
        case '3':
            $list_sp = load_sanpham_danhmuc(3, 9);
            include "../views/Client/oppo.php";
            break;
        case '4':
            $list_sp = load_sanpham_danhmuc(4, 9);
            include "../views/Client/tainghe.php";
            break;
        case '5':
            $list_sp = load_sanpham_danhmuc(5, 9);
            include "../views/Client/xiaomi.php";
            break;
        case '6':
            $list_sp = load_sanpham_danhmuc(6, 9);
            include "../views/Client/nokia.php";
            break;
    }
}
if (isset($_GET['act']) && ($_GET['act'] != "")) {
    $act = $_GET['act'];
    switch ($act) {
            //giỏ hàng
        case "cart";
            if (!empty($_SESSION['cart'])) {
                $cart = $_SESSION['cart'];

                $productId = array_column($cart, 'id');
                $idList = implode(',', $productId);
                //Lấy sản phẩm trong bảng sản phẩm theo id
                $dataDb =  loadone_productCart($idList);
                if (isset($_POST['save'])) {
                    $hovaten = $_POST['hovaten'];
                    $sdt = $_POST['sdt'];
                    $dia_chi = $_POST['dia_chi'];
                    $id_taikhoan = $_POST['id_taikhoan'];
                    $_SESSION['login']  = checkuser($tai_khoan, $mat_khau);
                    $thongbao = "Lưu thành công!";
                }
            }

            include "../views/Client/cart.php";
            break;
        case "order";
            if (isset($_SESSION['cart'])) {
                $cart = $_SESSION['cart'];
                // print_r($cart);
                if (isset($_POST['order_confirm'])) {
                    $hovaten = $_POST['hovaten'];
                    $sdt = $_POST['sdt'];
                    $dia_chi = $_POST['dia_chi'];
                    $email = $_POST['email'];
                    $pttt = $_POST['pttt'];
                    // date_default_timezone_set('Asia/Ho_Chi_Minh');
                    // $currentDateTime = date('Y-m-d H:i:s');
                    if (isset($_SESSION['login'])) {
                        $id_user = $_SESSION['login']['id_taikhoan'];
                    } else {
                        $id_user = 0;
                    }
                    $idBill = add_DonHang($id_user, $hovaten, $sdt, $dia_chi, $email, $_SESSION['resultTotal'], $pttt);
                    foreach ($cart as $item) {
                        add_DonHangDetail($idBill, $item['id'], $item['name'], $item['quantity'], $item['price'] * $item['quantity']);
                        reupSanPham($item['id'], $item['quantity']);
                    }
                    $_SESSION['cart'] = [];
                    echo "<script>alert('Đặt hàng thành công!')</script>";
                    echo "<script>location.href = '/../VTCshop/app/controllers/ClientController.php';</script>";

                }
                include "../views/Client/order.php";
            } 
            break;
        case "login";
            if (isset($_POST['login'])) {
                $tai_khoan = $_POST['taikhoan'];
                $mat_khau = $_POST['matkhau'];
                $checkuser = checkuser($tai_khoan, $mat_khau);

                if (is_array($checkuser)) {
                    $_SESSION['login']  = $checkuser;
                    // $_SESSION['tai_khoan']  = $tai_khoan;
                    echo "<script>location.href = '/../VTCshop/index.php';</script>";
                } else {
                    $thongbao = "tài khoản không tồn tại";
                }
            }
            include "../views/Client/login.php";
            break;
        case "dangky";
            if (isset($_POST['dangky']) && ($_POST['dangky'])) {
                $tai_khoan = $_POST['tai_khoan'];
                $email = $_POST['email'];
                $mat_khau = $_POST['mat_khau'];
                $sdt = $_POST['sdt'];
                $dia_chi = $_POST['dia_chi'];
                $hovaten = $_POST['hovaten'];
                insert_taikhoan($hovaten, $tai_khoan, $mat_khau, $email, $sdt, $dia_chi);
                $thongbao = "Đã đăng ký thành công";
            }
            include "../views/Client/register.php";
            break;
        case "account";
            include "../views/Client/account.php";
            break;
        case "edit-account";
            if (isset($_POST['save'])) {
                $hovaten = $_POST['hovaten'];
                $email = $_POST['email'];
                $tai_khoan = $_POST['tai_khoan'];
                $mat_khau = $_POST['mat_khau'];
                $sdt = $_POST['sdt'];
                $dia_chi = $_POST['dia_chi'];
                $id_taikhoan = $_POST['id_taikhoan'];
                edit_account($hovaten, $tai_khoan, $mat_khau, $email, $sdt, $dia_chi, $id_taikhoan);
                $_SESSION['login']  = checkuser($tai_khoan, $mat_khau);
                $thongbao = "Lưu thành công!";
            }
            include "../views/Client/edit_account.php";
            break;
        case "chitietsp";
            if (isset($_GET['idsp']) && $_GET['idsp'] > 0) {
                $idsp = ($_GET['idsp']);
                $chitietsp = loadone_sanpham($idsp);
                //load sản phẩm liên quan
                $iddm = $chitietsp['id_danhmuc'];
                $sp_lienquan = loadsp_lienquan($idsp, $iddm);
            }
            include "../views/Client/chitietsanpham.php";
            break;

        case "sanpham";
            $list_sp = loadall_sanpham();
            include "../views/Client/sanpham.php";
            break;

        case "sanpham_2";
            $list_sp = loadall_sanpham_2();
            include "../views/Client/sanpham_2.php";
            break;

        case "sanpham_3";
            $list_sp = loadall_sanpham_3();
            include "../views/Client/sanpham_3.php";
            break;

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

        case "sp_hotdeal";
            $count_hotdeal = count_hotdeal();
            $sp_hotdeal = sanpham_hotdeal();
            $loaddanhmuc = loadall_danhmuc();
            include "../views/Client/sanpham_hotdeal.php";
            break;

        case "sp_sale";
            $sp_sale = loadsanpham_sale();
            $loaddanhmuc = loadall_danhmuc();
            include "../views/Client/sanpham_sale.php";
            break;

        case "sp_noibat";
            $sp_noibat = loadsanpham_noibat();
            $loaddanhmuc = loadall_danhmuc();
            include "../views/Client/sanpham_noibat.php";
            break;

        case "donhang";
            $loaddonhang = loadall_donhang();
           
            include "../views/Client/donhang.php";
            break;
        case "chitietdh";
            if (isset($_GET['iddh']) && $_GET['iddh'] > 0) {
                $iddh = ($_GET['iddh']);
            }
            include "../views/Client/chitietdonhang.php";
            break;

    }
} else {
    include "../views/Client/banner.php";
    include "../views/Client/tienich.php";
    include "../views/Client/sidebar.php";
}

include "../views/Client/footer.php";
