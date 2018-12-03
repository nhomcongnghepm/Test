<?php
include("../modal/init.php");
if(isset($_POST['ok'])) {
    $u=$_SESSION['user'];
    $sql3 = $db->luutacgia($u);
    $c = $db->query($sql3);
    $rowws = $db->lay_rows($c);
    $tacgia = $rowws['ho'] . ''. $rowws['ten'];
    $chude = $_POST['chude'];
    $noidungtb = $_POST['noidungtb'];
    $thoigian= date('Y-m-d H:i:s');
    $sl =$db->dangthongbao($chude,$noidungtb,$tacgia,$thoigian);
    $a = $db->query($sl);
    if ($a) {
        echo "<script language='javascript'>alert('Thêm thành công');";
        echo "location.href='../view/pdt.php';</script>";
    }
}
?>