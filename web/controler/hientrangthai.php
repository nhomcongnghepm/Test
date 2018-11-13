<?php
error_reporting(0);
require_once '../modal/init.php';
if (isset($_GET['ma_ch'])) {
    $ma_ch = $_GET['ma_ch'];
}
$sql=$db->chinhsuacauhoi($ma_ch);
$results=$db->query($sql);
while($rows = $db->lay_rows($results))
{
    $ma_ch = $rows['ma_ch'];
}
?>