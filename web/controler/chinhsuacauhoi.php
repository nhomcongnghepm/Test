<?php
	error_reporting(0);
	require_once '../modal/init.php';
	if (isset($_GET['ma_ch'])) {
		$ma_ch = $_GET['ma_ch'];
	}	
	$sql="SELECT * FROM tbl_cauhoi WHERE ma_ch='$ma_ch'";
	$results=$db->query($sql);
    while($rows = $db->lay_rows($results))
	{
	  $ma_ch = $rows['ma_ch'];
	  $noidung=$rows['noidung'];
	  $lc1=$rows['lc1'];
	  $lc2=$rows['lc2'];
	  $lc3=$rows['lc3'];
	  $lc4=$rows['lc4'];
	  $dapan=$rows['dapan'];
	  $diem=$rows['diem'];
	}
?>