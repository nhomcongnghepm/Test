<?php
require_once '../modal/init.php';
// Xoá session
$session->destroy();
// Trở về trang chủ
header('Location: ../../view/dangnhap.php');
?>