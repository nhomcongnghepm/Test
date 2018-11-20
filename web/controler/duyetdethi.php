<?php
if (isset($_POST['ok'])) {
    $made=$_POST['made'];
    $_SESSION['made']=$made;
    include ('../view/duyetdethi_list.php');
}
?>