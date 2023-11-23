<?php
session_start();
unset($_SESSION['admin']);
unset($_SESSION['tai_khoan']);
unset($_SESSION['mat_khau']);
header('LOCATION: login.php');
