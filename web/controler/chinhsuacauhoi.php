<?php
	require_once '../modal/database_cauhoi.php';
	$results = mysqli_query($conn,"SELECT * FROM tbl_cauhoi WHERE ma_ch='$ma_ch'");
	while($rows = mysqli_fetch_array($results))
	{
	  $ma_ch=$rows['ma_ch'];
	  $noidung=$rows['noidung'];
	  $lc1=$rows['lc1'];
	  $lc2=$rows['lc2'];
	  $lc3=$rows['lc3'];
	  $lc4=$rows['lc4'];
	  $dapan=$rows['dapan'];
	}
?>