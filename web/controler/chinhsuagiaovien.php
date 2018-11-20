<?php
	if (isset($_GET['id'])) {
		$id = $_GET['id'];
	}
	require_once '../modal/init.php';
	$sql=$db->laythongtingiaovien($id);
	$results=$db->query($sql);
    while($rows = $db->lay_rows($results))
	{
	  $id = $rows['id_gv'];
	  $ho=$rows['ho'];
	  $ten=$rows['ten'];
	  $email=$rows['email'];
	  $ngaysinh=$rows['birthdate'];
	  $gioitinh=$rows['Gioitinh'];
	  $bomon=$rows['bomon'];
	}
?>