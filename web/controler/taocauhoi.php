<?php
error_reporting(0);
// Include database, session, general info
require_once '../modal/init.php';
 
// Nếu tồn tại $user
if ($user)
{
    header('Location: index.php'); // Di chuyển đến trang chủ
}
else
{
if(isset($_POST['ok']))
{	
	$da=$_POST["dapan"];
	if($_POST["noidung"]==null||$_POST["diem"]==null||$_POST["lc1"]==null||$_POST["lc2"]==null||$_POST["lc3"]==null||$_POST["lc4"]==null)
	{
		echo "* Bạn vui lòng nhập đầy đủ thông tin";
	}
	else
	{
	 $sqla="INSERT INTO tbl_cauhoi(noidung, lc1, lc2, lc3, lc4, dapan, made,diem, trangthai)  
		VALUES ('$_POST[noidung]','$_POST[lc1]','$_POST[lc2]','$_POST[lc3]','$_POST[lc4]','$_POST[lc1]','$_POST[made]','$_POST[diem]','$_POST[hieuluc]')";
		
	 $sqlb="INSERT INTO tbl_cauhoi(noidung, lc1,lc2,lc3,lc4, dapan, made, trangthai)  
		VALUES('$_POST[noidung]','$_POST[lc1]','$_POST[lc2]','$_POST[lc3]','$_POST[lc4]','$_POST[lc2]','$_POST[made]','$_POST[diem]','$_POST[hieuluc]')";
		
	 $sqlc="INSERT INTO tbl_cauhoi(noidung, lc1,lc2,lc3,lc4, dapan, made, trangthai)  
		VALUES('$_POST[noidung]','$_POST[lc1]','$_POST[lc2]','$_POST[lc3]','$_POST[lc4]','$_POST[lc3]','$_POST[made]','$_POST[diem]','$_POST[hieuluc]')";
		
	 $sqld="INSERT INTO  tbl_cauhoi(noidung, lc1,lc2,lc3,lc4, dapan, made, trangthai)  
		VALUES('$_POST[noidung]','$_POST[lc1]','$_POST[lc2]','$_POST[lc3]','$_POST[lc4]','$_POST[lc4]','$_POST[made]','$_POST[diem]','$_POST[hieuluc]')";

		if($da==1)
		{ 
		     $db->query($sqla);
			 echo "Thêm câu hỏi thành công";
		}
		elseif($da==2)
		{
			$db->query($sqlb);
			echo "Thêm câu hỏi thành công";
		}
		elseif($da==3)
		{
			 $db->query($sqlc);
			 echo "Thêm câu hỏi thành công";
		}
		else
		{
			 $db->query($sqld);
			 echo "Thêm câu hỏi thành công";
		}
}
}
}
?>