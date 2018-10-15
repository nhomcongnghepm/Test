<?php
error_reporting(0);
require_once '../modal/init.php';
    $u=$_SESSION['user'];
	if(isset($_POST["ok"]))
    {
		 $ho = $_POST['ho'];
        $ten = $_POST['ten'];
		$email = $_POST['email'];
		$day = $_POST['day'];
        $month = $_POST['month'];
        $year = $_POST['year'];
		$kiemtra=checkdate($month,$day,$year);
		if($kiemtra==false)
		{
		echo "Mời bạn kiểm tra lại ngày sinh. <a href='javascript: history.go(-1)'>Trở lại</a>";
		exit;
		}
		else
		{
		  $birthdate = $day . '-' . $month . '-' . $year;
		}
        if (isset($_POST['sex']) != null) {
    	$gender = $_POST['sex'];
		}
		 if($ho && $ten && $email && $birthdate && $gender)
		{
			$emailtontai=mysqli_query($connect,"SELECT email FROM user WHERE email='$email'");
			$regex = "/([a-z0-9_]+|[a-z0-9_]+\.[a-z0-9_]+)@(([a-z0-9]|[a-z0-9]+\.[a-z0-9]+)+\.([a-z]{2,4}))/i";
		if (!preg_match($regex, $email))
		{
			 echo "Email này không hợp lệ. Vui long nhập email khác. <a href='javascript: history.go(-1)'>Trở lại</a>";
			exit;
		}

		if (mysqli_num_rows($emailtontai) > 0)
		{
			 echo "Email này đã có người dùng. Vui lòng chọn Email khác. <a href='javascript: history.go(-1)'>Trở lại</a>";
			exit;
		}
		$sql= "UPDATE user SET ho='$ho', ten='$ten', email='$email', birthdate='$birthdate', Gioitinh='$gender' where user='$u'";
		$db->query($sql);
		if($sql)
		{
			echo "Cập nhật thành công";
		}
		else echo "Có lỗi trong quá trình cập nhật";
	}
	}
?>