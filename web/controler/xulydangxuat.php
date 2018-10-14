<?php
require_once '../modal/init.php';
if (isset($_POST['dangxuat'])) {
// Xoá session
$session->destroy();
// Trở về trang chủ
header('Location: dangnhap.php');
}
?>