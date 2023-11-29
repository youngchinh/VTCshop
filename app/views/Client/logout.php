<?php 
session_start();
unset($_SESSION['login']);
$_SESSION['cart']=[];
echo "<script>location.href = '/../VTCshop/index.php';</script>";
?>