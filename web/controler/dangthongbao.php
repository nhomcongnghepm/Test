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
    $sl = "insert into thong_bao(id,chude,noidung,nguoigui) value('','$chude','$noidungtb','$tacgia')";
    $a = $db->query($sl);
    if ($a) {
        echo "<script language='javascript'>alert('thêm thanh cong');";
        echo "location.href='../view/pdt.php';</script>";
    }
}
?>