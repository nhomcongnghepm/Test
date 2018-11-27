<?php
if (isset($_POST['ok'])) {
    $hocky=$_POST['hockyselect'];
    $_SESSION['hocky']=$hocky;
    include ('../view/hienthidiem_pdt.php');
}
?>