<?php
if(isset($_GET['menu'])){
    if($_GET['menu']=='quanlyhocsinh'){
        include "quanlyhocsinh.php";
    }else if($_GET['menu']=='quanlygiaovien'){
        include("quanlygiaovien.php");
    }else if($_GET['menu']=='giaovien_news'){
        include("dangky.php");
    }else if($_GET['menu']=='giaovien_edit'){
        include("giaovien_edit.php");
    }elseif($_GET['menu']=='giaovien_saveedit'){
        include "giaovien_saveedit.php";
    }else if($_GET['menu']=='giaovien_delete') {
        include("giaovien_delete.php");
    }else if($_GET['menu']=='quanlydiemthi'){
        include("../view/diemthi_pdt.php");
    }else if($_GET['menu']=='xembangdiem_pdt'){
        include("../view/xembangdiem_pdt.php");
    }else if($_GET['menu']=='quanlydethi'){
        include("quanlydethi.php");
    }else if($_GET['menu']=='dangthongbao'){
        include("dangthongbao.php");
    }else if($_GET['menu']=='xemdethi_listpdt'){
        include("xemdethi_listpdt.php");
    }
    if($_GET['menu']=='dethi_list'){
        include "../view/dethi_pdt.php";
    }elseif($_GET['menu']=='dethi_edit'){
        include "dethi_edit.php";
    }elseif($_GET['menu']=='dethi_saveedit'){
        include "dethi_saveedit.php";
    }else if($_GET['menu']=='dethi_delete'){
        include("dethi_delete.php");
    }else if($_GET['menu']=='dethi_news'){
        include("dethi_news.php");
    }
    if($_GET['menu']=='trangchu'){
        include "page1_pdt.php";
    }

    if($_GET['menu']=='hocsinh_edit'){
        include "hocsinh_edit.php";
    }elseif($_GET['menu']=='hocsinh_saveedit'){
        include "hocsinh_saveedit.php";
    }else if($_GET['menu']=='hocsinh_delete'){
        include("hocsinh_delete.php");
    }else if($_GET['menu']=='hocsinh_news'){
        include("dangkysinhvien.php");
    }
}else
    include "page1_pdt.php";
?>