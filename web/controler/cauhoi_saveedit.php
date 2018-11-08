<link rel="stylesheet" href="febe/style.css" type="text/css" media="screen" charset="utf-8">
<?php
require_once '../modal/init.php';
if(isset($_POST["edit"]))
{
	$idch=$_POST['idch'];
	$noidung=$_POST['noidung'];
	$lc1=$_POST['lc1'];
	$lc2=$_POST['lc2'];
	$lc3=$_POST['lc3'];
	$lc4=$_POST['lc4'];
	$dapan=$_POST['dapan'];
	$diem=$_POST['diem'];
	if($_POST["noidung"]==null||$_POST["diem"]==null||$_POST["lc1"]==null||$_POST["lc2"]==null||$_POST["lc3"]==null||$_POST["lc4"]==null)
	{
		echo "* Bạn vui lòng nhập đầy đủ thông tin";
		exit;
	}
	else
	{
	 $sql=$db->capnhatcauhoi($idch,$noidung,$lc1,$lc2,$lc3,$lc4,$dapan);
	$rs=$db->query($sql);
	if($rs)
	{
		echo"<script>document.location.href='?menu=cauhoi_list' </script>";
	}
	else
	{
		echo "Có lỗi xảy ra";
	}
	}
}
?>