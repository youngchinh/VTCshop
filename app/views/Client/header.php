<!doctype html>
<html class="no-js" lang="vn">


<!-- Mirrored from htmldemo.net/junko/junko/index.html by HTTrack Website Copier/3.x [XR&CO'2014], Thu, 23 Nov 2023 16:31:00 GMT -->

<head>
    <meta charset="utf-8">
    <meta http-equiv="x-ua-compatible" content="ie=edge">
    <title>VTC Shop</title>
    <meta name="description" content="">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- Favicon -->
    <link rel="shortcut icon" type="image/x-icon" href="../views/Client/assets/img/favicon.ico">

    <!-- CSS 
    ========================= -->

    <!-- Plugins CSS -->
    <link rel="stylesheet" href="../views/Client/assets/css/plugins.css">

    <!-- Main Style CSS -->
    <link rel="stylesheet" href="../views/Client/assets/css/style.css">

</head>

<body>
    <header>
        <div class="main_header">
            <!--header middel start-->
            <div class="header_middle">
                <div class="container">
                    <div class="row align-items-center">
                        <div class="col-lg-3 col-md-6">
                            <div class="logo">
                                <a href="ClientController.php"><img src="../views/Client/assets/img/logo/logovtc.png" alt=""></a>
                            </div>
                        </div>
                        <div class="col-lg-9 col-md-6">
                            <div class="middel_right">
                                <div class="search_container">
                                    <form action="#">
                                        <div class="search_box">
                                            <input placeholder="Tìm kiếm sản phẩm..." type="text">
                                            <button type="submit">Tìm Kiếm</button>
                                        </div>
                                    </form>
                                </div>
                                <div class="middel_right_info">

                                    <div class="mini_cart_wrapper">
                                        <a href="ClientController.php?act=cart"><i class="fa fa-shopping-bag" aria-hidden="true"></i></a>
                                        <span class="cart_quantity" id="totalProduct"><?= !empty($_SESSION['cart']) ? count($_SESSION['cart']) : 0 ?></span>
                                        <!--mini cart-->
                                        <!-- <div class="mini_cart">
                                            <div class="cart_item">
                                                <div class="cart_img">
                                                    <a href="#"><img src="../views/Client/assets/img/s-product/product.jpg" alt=""></a>
                                                </div>
                                                <div class="cart_info">
                                                    <a href="#">Sit voluptatem rhoncus sem lectus</a>
                                                    <p>Qty: 1 X <span> $60.00 </span></p>
                                                </div>
                                                <div class="cart_remove">
                                                    <a href="#"><i class="ion-android-close"></i></a>
                                                </div>
                                            </div>
                                            <div class="cart_item">
                                                <div class="cart_img">
                                                    <a href="#"><img src="../views/Client/assets/img/s-product/product2.jpg" alt=""></a>
                                                </div>
                                                <div class="cart_info">
                                                    <a href="#">Natus erro at congue massa commodo</a>
                                                    <p>Qty: 1 X <span> $60.00 </span></p>
                                                </div>
                                                <div class="cart_remove">
                                                    <a href="#"><i class="ion-android-close"></i></a>
                                                </div>
                                            </div>
                                            <div class="mini_cart_table">
                                                <div class="cart_total">
                                                    <span>Sub total:</span>
                                                    <span class="price">$138.00</span>
                                                </div>
                                                <div class="cart_total mt-10">
                                                    <span>total:</span>
                                                    <span class="price">$138.00</span>
                                                </div>
                                            </div>

                                            <div class="mini_cart_footer">
                                                <div class="cart_button">
                                                    <a href="ClientController.php?act=cart">View cart</a>
                                                </div>

                                            </div>

                                        </div> -->
                                        <!--mini cart end-->
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <!--header middel end-->
            <!--header top start-->
            <div class="header_top">
                <div class="container">
                    <div class="row align-items-center">
                        <div class="col-lg-6 col-md-6">
                            <div class="support_info">
                                <p>Số điện thoại: <a href="tel:0123456789">0123456789</a></p>
                            </div>
                        </div>
                        <div class="col-lg-6 col-md-6">
                            <div class="top_right text-end">
                                <?php
                                if (isset($_SESSION['tai_khoan'])) {
                                    // echo
                                    // '
                                    //     <script>
                                    //         alert("Đăng nhập thành công");
                                    //     </script>
                                    // ';
                                    echo
                                    '
                                        <ul>
                                            <li><a href="ClientController.php?act=account">Tài khoản</a></li>
                                            <li><a href="../views/Client/logout.php">Đăng xuất</a></li>
                                        </ul>
                                        ';
                                    //session_destroy();
                                } else {
                                    echo
                                    '
                                        <ul>
                                            <li><a href="ClientController.php?act=login">Đăng nhập</a></li>
                                            <li><a href="ClientController.php?act=dangky">Đăng ký</a></li>
                                        </ul>
                                        ';
                                }
                                ?>

                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <!--header top start-->