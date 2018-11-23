<?php
include("../modal/init.php");
// lay gia tri cho tham so

$id_hs=$_GET['id_hs'];
$id_mon=$_GET['id_mon'];
$diem=$_GET['diem'];
$ngaythi=$_GET['ngaythi'];
$dotthi=$_GET['dotthi'];
$sql1=$db->hienthidethi();
$query1=$db->query($sql1);
$hocky=$_GET['hocky'];
$sql="insert into diemthi(id_diem,id,made,ngaythi,dotthi,diem,hocky) value('','$id_hs','$id_mon','$ngaythi','$dotthi','$diem','$hocky')";
$query=$db->query($sql);
if($query)
{
    echo "1";
}else{
    echo "0";
}

?>