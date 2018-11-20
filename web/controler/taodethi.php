<?php
error_reporting(0);
require_once '../modal/init.php';
		$u=$_SESSION['user'];
 if(isset($_POST['ok']))
{
        $sql3=$db->luutacgia($u);
        $c=$db->query($sql3);
        $rowws=$db->lay_rows($c);
        $tacgia=$rowws['ho'].' '.$rowws['ten'];
		$day = $_POST['day'];
        $month = $_POST['month'];
        $year = $_POST['year'];
		$hour = $_POST['hour'];
        $minutes = $_POST['minutes'];
        $seconds = $_POST['seconds'];
		$giothi=$hour.'h'.':'.$minutes.'p'.':'.$seconds.'s';
		$trangthai='Chưa duyệt';
	if($_POST["tende"]==null||$_POST["day"]==day||$_POST["month"]==month||$_POST["year"]==year||$_POST["hour"]==hour||$_POST["minutes"]==minutes||$_POST["seconds"]==seconds)
	{
		echo 'Bạn vui lòng nhập đầy đủ thông tin';
		exit;
	}
	else
	{
		$kiemtra=checkdate($_POST["month"],$_POST["day"],$_POST["year"]);
		if($kiemtra==false)
		{
		echo "Mời bạn kiểm tra lại ngày thi. <a href='javascript: history.go(-1)'>Trở lại</a>";
		exit;
		}
		else
		{
		  $ngaythi = $day . '/' . $month . '/' . $year;
			$day=date("d/m/y");
			$sql2=$db->themdethi($ngaythi,$giothi,$day,$tacgia,$trangthai);
			$a=$db->query($sql2);
			if($sql2)
			{
                echo "<script>alert('Thêm đề thi thành công !');window.location='?menu=dethi_list'</script>";
			}
			else echo 'Có lỗi xảy ra';
		}
	}
}
?>