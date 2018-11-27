<?php
error_reporting(0);
require_once '../modal/init.php';
$u=$_SESSION['user'];
$sql5=$db->laythongtinuser($u);
$lay=$db->query($sql5);
$rows=$db->lay_rows($lay);
// Nếu tồn tại $user
if ($user)
{
    if($rows['quyen']=='Học Sinh') {
        header('Location: hocsinh.php');
    }
    else if($rows['quyen']=='Giáo Viên'||$rows['quyen']=='Trưởng bộ môn') {
            header('Location: truongbomon.php');
        }
        else if($rows['quyen']=='Phòng dào tạo') {
            header('Location: phongdaotao.php');
        }
        else  header('Location: admin.php');
}
else if (isset($_POST['dangnhap']))
{
    $username = addslashes($_POST['username']);
    $password = addslashes($_POST['pwd']);
    $password=sha1($password);
    if (!$username || !$password) {
        echo "Vui lòng nhập đầy đủ tên đăng nhập và mật khẩu. <a href='javascript: history.go(-1)'>Trở lại</a>";
        exit;
    }
     
    $sql= $db->dangnhap($username);
    $query=$db->query($sql);
    if ($db->num_rows($query) == 0) {
        echo "Tên đăng nhập này không tồn tại. Vui lòng kiểm tra lại. <a href='javascript: history.go(-1)'>Trở lại</a>";
        exit;
    }
	$row=$db->lay_rows($query);
	 if ($password != $row['password']) {
        echo "Mật khẩu không đúng. Vui lòng nhập lại. <a href='javascript: history.go(-1)'>Trở lại</a>";
        exit;
    }
      if ($db->num_rows($query))
    {
        // Gửi dữ liệu để lưu session
        $session->send($username);
        // Giải phóng kết nối
        $db->close();
	}
	if($row['quyen']=="Admin") {
		header('Location: admin.php');   		 }
    	else if($row['quyen']=="Học Sinh")
    	{
            header('Location: hocsinh.php');
    	}
   		 else if($row['quyen']=="Giáo Viên")
    	{
            header('Location: giaovien.php');
    	}
   		 else if($row['quyen']=="Phòng dào tạo")
    	{
            header('Location: pdt.php');
		}
		else header('Location: truongbomon.php');
    die();
}
?>