<?php
require_once '../modal/init.php';
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
		$bomon=$_POST['bomon'];
		 if ($username== null) {
        echo("* Bạn hãy nhập tên đăng nhập <br /> <a href='javascript: history.go(-1)'>Trở lại</a>");
		
    	} else if (strlen($username) < 6) {
        echo "* Tên đăng nhập phải lớn hơn 6 kí tự <a href='javascript: history.go(-1)'>Trở lại</a>";
		exit;
		 } else if (preg_match('/\W/', $username)) {
        echo "* Tên đăng nhập không được chứa ký tự đặc biệt và khoảng trắng. <a href='javascript: history.go(-1)'>Trở lại</a>";
		exit;
   		} 
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
		if ($pass_signup != $repass_signup) {
        echo("* Mật khẩu không trùng khớp. <a href='javascript: history.go(-1)'>Trở lại</a><br /> ");
		exit;
    	} 
        if($_POST['quyen']!="quyen"){$quyen=$_POST['quyen'];}
        if (isset($_POST['sex']) != null) {
    	$gender = $_POST['sex'];
		}
        if($ho && $ten && $username && $email && $pass_signup && $birthdate && $gender && $bomon)
		{
			$sql=$db->usergiaovien($username);
			$sql1=$db->emailgiaovien($email);
			$a=$db->query($sql);
			$b=$db->query($sql1);
		if ($db->num_rows($a) > 0){
			 echo "Tên đăng nhập này đã có người dùng. Vui lòng chọn tên đăng nhập khác. <a href='javascript: history.go(-1)'>Trở lại</a>";
			exit;
		}
		$regex = "/([a-z0-9_]+|[a-z0-9_]+\.[a-z0-9_]+)@(([a-z0-9]|[a-z0-9]+\.[a-z0-9]+)+\.([a-z]{2,4}))/i";
		if (!preg_match($regex, $email))
		{
			 echo "Email này không hợp lệ. Vui long nhập email khác. <a href='javascript: history.go(-1)'>Trở lại</a>";
			exit;
		}
		$partten = "/^([A-Z]){1}([\w_\.!@#$%^&*()]+){5,31}$/";
		if(!preg_match($partten ,$_POST['pwd1'], $matchs))
		{
   		echo  "Mật khẩu bạn phải có cả ký tự chử cái hoa, thường, chử số, ký tự đặc biệt, dấu chấm, bắt đầu với ký tự in hoa
và có từ 6 đến 32 ký tự <a href='javascript: history.go(-1)'>Trở lại</a>";
		exit;
		}
		if ($db->num_rows($b) > 0)
		{
			 echo "Email này đã có người dùng. Vui lòng chọn Email khác. <a href='javascript: history.go(-1)'>Trở lại</a>";
			exit;
		}
            $chars = "0123456789";
            $size = strlen($char);
            $str = substr(str_shuffle($chars), 0, 5);
            for ($i = 0; $i < $length; $i++) {
                $str .= $chars[rand(0, $size - 1)];
            }
            $my_string =$str;
            $giaovien='GV'.$my_string;
            $tbm='TBM'.$my_string;
            if($quyen=="Giáo Viên") {
            $addmember = $db->themgiaovien($giaovien,$ho, $ten, $username, $pass_signup, $email, $birthdate, $gender, $bomon, $quyen);
            $db->query($addmember);

            $sql = $db->hienthigiaovien();
            $results = $db->query($sql);
            while ($row = $db->lay_rows($results)) {
                $id = $row['id_gv'];
            }
            $addmember1 = $db->themuser($id, $ho, $ten, $username, $email, $pass_signup, $birthdate, $gender, $quyen);
            $db->query($addmember1);
            if ($addmember1)
                echo "<script>alert('Đăng ký thành công !');window.location='?menu=quanlygiaovien'</script>";
            else
                echo "Có lỗi xảy ra trong quá trình đăng ký. <a href='dangky.php'>Thử lại</a>";
        }
        else{
            $addmember = $db->themgiaovien($tbm,$ho, $ten, $username, $pass_signup, $email, $birthdate, $gender, $bomon, $quyen);
            $db->query($addmember);

            $sql = $db->hienthigiaovien();
            $results = $db->query($sql);
            while ($row = $db->lay_rows($results)) {
                $id = $row['id_gv'];
            }
            $addmember1 = $db->themuser($id, $ho, $ten, $username, $email, $pass_signup, $birthdate, $gender, $quyen);
            $db->query($addmember1);
            if ($addmember1)
                echo "<script>alert('Đăng ký thành công !');window.location='?menu=quanlygiaovien'</script>";
            else
                echo "Có lỗi xảy ra trong quá trình đăng ký. <a href='dangky.php'>Thử lại</a>";
		}
	}
	}
?>     
