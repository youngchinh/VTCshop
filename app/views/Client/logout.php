<?php 
session_start();
unset($_SESSION['tai_khoan']);
echo "<script>location.href = '/../VTCshop/index.php';</script>";
?>