<?php
error_reporting(0);
// Include database, session, general info
require_once '../modal/init.php';
// Nếu tồn tại $user
if (!$user)
{
    header('Location: ../view/dangnhap.php'); // Di chuyển đến trang chủ
}
else if(isset($_POST['ok']))
{	
	$da=$_POST["dapan"];
	if($_POST["noidung"]==null||$_POST["diem"]==null||$_POST["lc1"]==null||$_POST["lc2"]==null||$_POST["lc3"]==null||$_POST["lc4"]==null)
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
			echo "Thêm câu hỏi thành công";
		}
		else if($da==2)
		{
			$a=$db->query($sqlb);
			echo "Thêm câu hỏi thành công";
		}
		else if($da==3)
		{
			 $a=$db->query($sqlc);
			 echo "Thêm câu hỏi thành công";
		}
		else
		{
			 $db->query($sqld);
			 echo "Thêm câu hỏi thành công";
		}
		
	}	
}
?>