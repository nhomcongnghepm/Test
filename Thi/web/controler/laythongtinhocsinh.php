<?php
require_once '../modal/init.php';
$u=$_SESSION['user'];
$sql=$db->laythongtin_hocsinh($u);
$a=$db->query($sql);
$row=$db->lay_rows($a);
?>