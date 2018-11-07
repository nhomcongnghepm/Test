<?php
	error_reporting(0);
	require_once '../modal/init.php';
	echo $a;
	$id=$a;
	$sql="SELECT * FROM sinhvien WHERE id='$id'";
	$results=$db->query($sql);
    while($rows = $db->lay_rows($results))
	{
	  $id = $rows['id'];
	  $ho=$rows['ho'];
	  $ten=$rows['ten'];
	  $email=$rows['email'];
	  $ngaysinh=$rows['birthdate'];
	  $gioitinh=$rows['Gioitinh'];
	  $lop=$rows['tenlop'];
	}
?>