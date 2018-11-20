<?php
error_reporting(0);
// Include database, session, general info
require_once '../modal/init.php';
if(isset($_POST['ok']))
{	
	$da=$_POST["dapan"];
	if($_POST["noidung"]==null||$_POST["lc1"]==null||$_POST["lc2"]==null||$_POST["lc3"]==null||$_POST["lc4"]==null)
	{
		echo "* Bạn vui lòng nhập đầy đủ thông tin";
		exit;
	}
	else
	{
	 $sqla=$db->themcauhoi1();
		
	 $sqlb=$db->themcauhoi2();
		
	 $sqlc=$db->themcauhoi3();
		
	 $sqld=$db->themcauhoi4();
		if($da==1)
		{ 
			$a=$db->query($sqla);
            echo "<script>alert('Thêm đề thi thành công !');window.location='?menu=cauhoi_list'</script>";
		}
		else if($da==2)
		{
			$a=$db->query($sqlb);
            echo "<script>alert('Thêm đề thi thành công !');window.location='?menu=cauhoi_list'</script>";
		}
		else if($da==3)
		{
			 $a=$db->query($sqlc);
            echo "<script>alert('Thêm đề thi thành công !');window.location='?menu=cauhoi_list'</script>";
		}
		else
		{
			 $db->query($sqld);
            echo "<script>alert('Thêm đề thi thành công !');window.location='?menu=cauhoi_list'</script>";
		}
		
	}	
}
?>