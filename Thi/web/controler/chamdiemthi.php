<?php require_once '../modal/init.php' ;
$tv3= "SELECT tbl_cauhoi.dapan FROM tbl_cauhoi,tbl_dethi WHERE  tbl_dethi.made=tbl_cauhoi.made and tbl_cauhoi.made='".$_POST['monselect']."' and tbl_dethi.hocky='".$_POST['hockyselect']."' and tbl_dethi.ngaythi='".$_POST['ngaythi']."' and tbl_dethi.dotthi='".$_POST['dotthi']."'";
$tv4 = $db->query($tv3);
$cau=0;
while(($rows3=$db->lay_rows($tv4))!= NULL){
    $dap_an[$cau]=$rows3['dapan'];
    $cau++;
}
?>