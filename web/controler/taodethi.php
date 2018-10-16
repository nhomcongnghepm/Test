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
	if($_POST["tende"]==null||$_POST["socau"]==null||$_POST["tacgia"]==null|$_POST["timer"]==null)
	{
		echo 'Bạn vui lòng nhập đầy đủ thông tin';
		exit;
	}
	else
	{
		$day=date("d/m/y");
		$sql2="INSERT INTO tbl_dethi(tende,socau,tacgia,ngaydang, timer)
		VALUES
		('$_POST[tende]','$_POST[socau]','$_POST[tacgia]','$day', '$_POST[timer]')";
        $a=$db->query($sql2);
		if($sql2)
	{
		echo 'Tạo đề thi thành công';
	}
	else echo 'Có lỗi xảy ra';
	}
	}
}
?>