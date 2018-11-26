<?php
if(isset($_GET['menu'])){
    if($_GET['menu']=='quanlyhocsinh'){
        include "quanlyhocsinh.php";
    }else if($_GET['menu']=='quanlygiaovien'){
        include("quanlygiaovien.php");
    }else if($_GET['menu']=='quanlydiemthi'){
        include("quanlydiemthi.php");
    }else if($_GET['menu']=='quanlydethi'){
        include("quanlydethi.php");
    }else if($_GET['menu']=='dangthongbao'){
        include("dangthongbao.php");
    }

    if($_GET['menu']=='trangchu'){
        include "page1_pdt.php";
    }

    if($_GET['menu']=='hocsinh_edit'){
        include "chinhsuasinhvien.php";

    }elseif($_GET['menu']=='giaovien_edit'){
        include "chinhsuagiaovien.php";

    }
}else
    include "page1_pdt.php";
?>