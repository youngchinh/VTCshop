<!--breadcrumbs area start-->
<div class="breadcrumbs_area">
    <div class="container">
        <div class="row">
            <div class="col-12">
                <div class="breadcrumb_content">
                    <ul>
                        <li><a href="ClientController.php">Trang Chủ</a></li>
                        <li>Liên hệ</li>
                    </ul>
                </div>
            </div>
        </div>
    </div>
</div>
<!--breadcrumbs area end-->

<!--contact map start-->
<div class="contact_map mt-60">
    <div class="map-area">
        <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d2484.6701389278105!2d-0.13442558407566274!3d51.48256882033922!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x48760532743b90e1%3A0x790260718555a20c!2sU.S.%20Embassy%2C%20London!5e0!3m2!1sen!2sbd!4v1623927462716!5m2!1sen!2sbd" style="border:0;" allowfullscreen="" loading="lazy"></iframe>
    </div>
</div>
<!--contact map end-->

<!--contact area start-->
<div class="contact_area">
    <div class="container">
        <div class="row">
            <div class="col-lg-6 col-md-12">
                <div class="contact_message content">
                    <h3>Liên Hệ</h3>
                    <p>Cơ sở Hà Nội
                        Cổng số 1, Tòa nhà FPT Polytechnic, 13 phố Trịnh Văn Bô, phường Phương Canh, quận Nam Từ Liêm, TP Hà Nội

                        Km12 Cầu Diễn, Phường Phúc Diễn, Quận Bắc Từ Liêm, Hà Nội
                        (024) 8582 0808
                    </p>
                    <ul>
                        <li><i class="fa fa-fax"></i> Địa Chỉ: Cổng số 1, Tòa nhà FPT Polytechnic, 13 phố Trịnh Văn Bô, phường Phương Canh, quận Nam Từ Liêm, TP Hà Nội</li>
                        <li><i class="fa fa-envelope-o"> </i> Email: vtcshop@gmail.com<a href="mailto:demo@example.com">vtcshop@gmail.com </a>
                        </li>
                        <li><i class="fa fa-phone"></i> Phone:<a href="tel: 0123456789"> 0123456789 </a> </li>
                    </ul>>
                </div>
            </div>
            <div class="col-lg-6 col-md-12">
                <div class="contact_message form">
                    <h3>Liên hệ với chúng tôi</h3>
                    <form action="ClientController.php?act=lienhe" method="POST" role="form">
                        <div class="card-body">
                            <div class="form-group">
                                <label> Họ và tên</label>
                                <input name="hovaten" placeholder="họ và tên *" type="text" required>
                            </div>

                            <div class="form-group">
                                <label> Email</label>
                                <input name="email" placeholder="Email *" type="email" required>
                            </div>

                            <div class="form-group">
                                <label> Số điện thoại</label>
                                <input name="sdt" placeholder="số điện thoại *" type="number" required>
                            </div>

                            <div class="form-group">
                                <label> Địa chỉ</label>
                                <input name="dia_chi_lienhe" placeholder="địa chỉ liên hệ *" type="text">
                            </div>

                            <input hidden name="ngay_gui" type="date">

                            <div class="form-group">
                                <label> Nội dung của bạn</label>
                                <textarea placeholder="nội dung *" name="noi_dung_lienhe" class="form-control2" required></textarea>
                            </div>

                            <!-- /.card-body -->

                            <div class="card-footer">
                                <input class="btn btn-primary" style="background-color: blue; color :#fff;" name="send" type="submit" value="Gửi">
                            </div>


                            <?php
                            if (isset($thongbao) && ($thongbao != "")) {
                                echo $thongbao;
                            }
                            // tránh người dùng có thể spam form vào database
                            // Load lại trang sau 2 giây
                            if (isset($_POST['send']) && ($_POST['send'])) {
                                echo '
                                    <script>
                                    setTimeout(function() {
                                    window.location.href = "ClientController.php?act=lienhe"; }, 2000);
                                    </script>
                                    ';
                            }
                            ?>

                    </form>

                </div>
            </div>
        </div>
    </div>
</div>

<!--contact area end-->