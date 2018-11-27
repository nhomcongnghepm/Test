<?php
include("../modal/init.php");
// lay gia tri cho tham so
$chars = "0123456789";
$size = strlen($char);
$str = substr(str_shuffle($chars), 0, 5);
for ($i = 0; $i < $length; $i++) {
    $str .= $chars[rand(0, $size - 1)];
}
$my_string =$str;
$toan='T'.$my_string;
$ly='L'.$my_string;
$hoa='H'.$my_string;
$anh='A'.$my_string;
$id_hs=$_GET['id_hs'];
$id_mon=$_GET['id_mon'];
$diem=$_GET['diem'];
$ngaythi=$_GET['ngaythi'];
$dotthi=$_GET['dotthi'];
$sql2=$db->kiemtradethi($id_mon);
$query2=$db->query($sql2);
$kiemtra=$db->lay_rows($query2);
$sql1=$db->hocsinh_hienthidethi();
$query1=$db->query($sql1);
$hocky=$_GET['hocky'];
if($kiemtra['linhvuc']=='Toán') {
    $sql = "insert into diemthi(id_diem,id,made,ngaythi,dotthi,diem,hocky) value('$toan','$id_hs','$id_mon','$ngaythi','$dotthi','$diem','$hocky')";
    $query = $db->query($sql);
    if ($query) {
        echo "1";
    } else {
        echo "0";
    }
}else if($kiemtra['linhvuc']=='Vật lý') {
    $sql = "insert into diemthi(id_diem,id,made,ngaythi,dotthi,diem,hocky) value('$ly','$id_hs','$id_mon','$ngaythi','$dotthi','$diem','$hocky')";
    $query = $db->query($sql);
    if ($query) {
        echo "1";
    } else {
        echo "0";
    }
} else if($kiemtra['linhvuc']=='Hóa') {
    $sql = "insert into diemthi(id_diem,id,made,ngaythi,dotthi,diem,hocky) value('$hoa','$id_hs','$id_mon','$ngaythi','$dotthi','$diem','$hocky')";
    $query = $db->query($sql);
    if ($query) {
        echo "1";
    } else {
        echo "0";
    }
}else if($kiemtra['linhvuc']=='Tiếng Anh') {
    $sql = "insert into diemthi(id_diem,id,made,ngaythi,dotthi,diem,hocky) value('$toan','$id_hs','$id_mon','$ngaythi','$dotthi','$diem','$hocky')";
    $query = $db->query($sql);
    if ($query) {
        echo "1";
    } else {
        echo "0";
    }
}
?>