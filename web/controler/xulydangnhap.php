<?php
error_reporting(0);
require_once '../modal/init.php';
 
// Nếu tồn tại $user
if ($user)
{
    header('Location: index.php'); // Di chuyển đến trang chủ
}
else
{
 
if (isset($_POST['dangnhap'])) 
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
       	 echo "Xin chào " . $username . ". Bạn đã đăng nhập thành công. <a href='/pdt.php'>Vào trang phòng đào tạo</a>";
		}
		else header('Location: truongbomon.php');
    die();
}
}
?>