<?php
if(isset($_GET['menu'])){
    if($_GET['menu']=='capnhatthongtin'){
        include "doithongtin.php";
    }
    if($_GET['menu']=='doimatkhau'){
        include "page3_gv.php";
    }
    if($_GET['menu']=='lichthi'){
        include "lichthi.php";
    }

}else
    include "quanlytaikhoan.php";
?>