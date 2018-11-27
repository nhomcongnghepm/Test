<?php
if (isset($_POST['ok'])) {
    $hocky=$_POST['hocky'];
    $_SESSION['hocky']=$hocky;
    include ('../view/dethi_listpdt.php');
}
?>