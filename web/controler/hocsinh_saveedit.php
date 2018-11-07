<link rel="stylesheet" href="febe/style.css" type="text/css" media="screen" charset="utf-8">
<?php
require_once '../modal/init.php';
if(isset($_POST["edit"]))
{
	$id=$_POST['id'];
	$ho=$_POST['ho'];
	$ten=$_POST['ten'];
	$email=$_POST['email'];
	$lop=$_POST['lop'];
	$day = $_POST['day'];
    $month = $_POST['month'];
    $year = $_POST['year'];
	$kiemtra=checkdate($month,$day,$year);
	$sql2="SELECT email FROM sinhvien WHERE email='$email'";
	$b=$db->query($sql2);
	$regex = "/([a-z0-9_]+|[a-z0-9_]+\.[a-z0-9_]+)@(([a-z0-9]|[a-z0-9]+\.[a-z0-9]+)+\.([a-z]{2,4}))/i";
	if (!preg_match($regex, $email))
	{
			 echo "Email này không hợp lệ. Vui long nhập email khác.";
			exit;
	}
	else if ($db->num_rows($b) > 0)
		{
			 echo "Email này đã có người dùng. Vui lòng chọn Email khác. ";
			exit;
		}
	
	else if($kiemtra==false)
		{
		echo "Mời bạn kiểm tra lại ngày sinh.";
		exit;
		}
		else
		{
		  $birthdate = $day . '-' . $month . '-' . $year;
		}
        if (isset($_POST['sex']) != null) {
    	$gender = $_POST['sex'];
		}
	else if($_POST["ho"]==null||$_POST["ten"]==null||$_POST["email"]==null||$_POST["day"]==day||$_POST["month"]==month||$_POST["year"]==year)
	{
		echo "* Bạn vui lòng nhập đầy đủ thông tin";
		exit;
	}
	else
	{
	 $sql="UPDATE sinhvien SET
	ho ='".$ho."',
	ten ='".$ten."',
	email ='".$email."',
	birthdate ='".$birthdate."',
	tenlop ='".$lop."',
	Gioitinh ='".$gender."'
	where id='".$id."'";
	$rs=$db->query($sql);
	
	/*
	$sql1="UPDATE user SET `id' =  '".$id."',
	`ho` ='".$ho."',
	`ten` ='".$ten."',
	`email` ='".$email."',
	`birthdate` ='".$birthdate."',
	`Gioitinh` ='".$gender."'
	where id='".$id."'";
	$ra=$db->query($sql1);*/
	if($rs)
	{
		echo "Cập nhật thành công" ;
		echo"<script>document.location.href='?menu=quanlyhocsinh' </script>";
	}
	else
	{
		echo "Có lỗi xảy ra";
	}
	}
}
?>