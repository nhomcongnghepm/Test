<?php
require_once '../modal/init.php';
if(isset($_POST["edit"]))
{
	if (isset($_GET['id'])) {
		$id = $_GET['id'];
	}
	$ho=$_POST['ho'];
	$ten=$_POST['ten'];
	$email=$_POST['email'];
	$bomon=$_POST['bomon'];
	$day = $_POST['day'];
    $month = $_POST['month'];
    $year = $_POST['year'];
	$quyen=$_POST['quyen'];
	$sql2=$db->emailgiaovien($email);
	$b=$db->query($sql2);
	$rows=$db->lay_rows($b);
	$regex = "/([a-z0-9_]+|[a-z0-9_]+\.[a-z0-9_]+)@(([a-z0-9]|[a-z0-9]+\.[a-z0-9]+)+\.([a-z]{2,4}))/i";
	$kiemtra=checkdate($month,$day,$year);
	if (!preg_match($regex, $email))
	{
			 echo "Email này không hợp lệ. Vui long nhập email khác.";
			exit;
	}
	else if ($db->num_rows($b)>0&&$rows['email']!=$email)
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
	 if($day!=day&&$month!=month&&$year!=year&&$gender)
	{
		 $sql=$db->capnhatgiaovien($ho,$ten,$email,$birthdate,$gender,$bomon,$quyen,$id);
	 	 $rs=$db->query($sql);

		 $sql1=$db->capnhatuser($ho,$ten,$email,$birthdate,$gender,$quyen,$id);
	 	 $ra=$db->query($sql1);
		 if($rs!=null)
		 {
			 		echo"<script>document.location.href='?menu=quanlygiaovien' </script>";
		 }
	}
	else
	{
		echo "*Bạn vui lòng nhập đầy đủ thông tin";
	}
}
?>