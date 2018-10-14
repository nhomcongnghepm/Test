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
 // Nếu không phải là sự kiện đăng ký thì không xử lý
	if (isset($_POST['login'])) {
        $ho = $_POST['ho'];
        $ten = $_POST['ten'];
        $username = $_POST['username'];
        $email = $_POST['email'];
        $pass_signup = sha1(($_POST['pwd1']));
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
        $repass_signup = sha1($_POST['pwd2']);
        if($_POST['quyen']!="quyen"){$quyen=$_POST['quyen'];}
        if (isset($_POST['sex']) != null) {
    	$gender = $_POST['sex'];
		}
		if(isset($_POST['g-recaptcha-response'])){
      	$captcha = $_POST['g-recaptcha-response'];
   		}
   		if($captcha){
      $response = file_get_contents("https://www.google.com/recaptcha/api/siteverify?secret=6LeydXMUAAAAAO2GXuFOYC9IcMZG2_pXSFKwd1Rv-*****&response=".$captcha."&remoteip=".$_SERVER['REMOTE_ADDR']);
        if($ho && $ten && $username && $email && $pass_signup && $birthdate && $gender && $quyen)
		{
			$taikhoantontai=mysqli_query($connect,"SELECT user FROM user WHERE user='$username'");
			$emailtontai=mysqli_query($connect,"SELECT email FROM user WHERE email='$email'");
		if (mysqli_num_rows($taikhoantontai) > 0){
			 echo "Tên đăng nhập này đã có người dùng. Vui lòng chọn tên đăng nhập khác. <a href='javascript: history.go(-1)'>Trở lại</a>";
			exit;
		}
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

		$addmember = "INSERT INTO user VALUE (
				'',
				'{$ho}',
				'{$ten}',
				'{$username}',
				'{$email}',
				'{$pass_signup}',
				'{$birthdate}',
				'{$gender}',
				'{$quyen}'
		)";
		$db->query($addmember);
		// Gửi dữ liệu để lưu session
   		 $session->send($username);
    	// Giải phóng kết nối
    	$db->close();
     
		if ($addmember)
			echo "Quá trình đăng ký thành công.";
		else
			echo "Có lỗi xảy ra trong quá trình đăng ký. <a href='dangky.php'>Thử lại</a>";
		}
	}
	}
}
?>     
