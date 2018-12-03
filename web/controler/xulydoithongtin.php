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
		 if($ho==null || $ten==null || $email==null || $gender==null)
		{
			echo "* Bạn vui lòng nhập đầy đủ thông tin";
		}
		else
		{
		    $sql=$db->emailadmin($email);
            $regex = "/([a-z0-9_]+|[a-z0-9_]+\.[a-z0-9_]+)@(([a-z0-9]|[a-z0-9]+\.[a-z0-9]+)+\.([a-z]{2,4}))/i";
		if (!preg_match($regex, $email))
		{
			 echo "Email này không hợp lệ. Vui long nhập email khác. <a href='javascript: history.go(-1)'>Trở lại</a>";
			exit;
		}

		$sql=$db->capnhatthongtin($ho,$ten,$email,$birthdate,$gender,$u);
		$a=$db->query($sql);
		$sql1=$db->doithongtingiaovien($ho,$ten,$email,$birthdate,$gender,$u);
		$b=$db->query($sql1);
		$sql2=$db->doithongtinhocsinh($ho,$ten,$email,$birthdate,$gender,$u);
		$c=$db->query($sql2);
		if($c)
		{
            echo "<script>alert('Cập nhật thông tin thành công !');window.location='?menu=capnhatthongtin'</script>";
		}
		else echo "Có lỗi trong quá trình cập nhật";
	}
	}
?>