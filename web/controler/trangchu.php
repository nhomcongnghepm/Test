<?php
if(isset($_GET['menu'])){
    if($_GET['menu']=='trangchu'){
        include "trangchu_1.php";
    }
    if($_GET['menu']=='gioithieu'){
        include "trangchu_2.php";
    }

    if($_GET['menu']=='lienhe'){
        include ("trangchu_3.php");
    }
    if($_GET['menu']=='thongbao'){
        include ("thongbao.php");
    }

}else
    include "trangchu_1.php";
?>