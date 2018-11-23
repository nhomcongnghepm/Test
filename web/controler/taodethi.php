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
		$hocky=$_POST['hocky'];
		$trangthai='Chưa duyệt';
		$tende=$_POST['tende'];
		$dotthi=$_POST['dotthi'];
		$sql4=$db->hienthidethi();
		$dethi=$db->query($sql4);
		$rows=$db->lay_rows($dethi);
	if($_POST["tende"]==null||$_POST["day"]==day||$_POST["month"]==month||$_POST["year"]==year)
	{
		echo 'Bạn vui lòng nhập đầy đủ thông tin';
		exit;
	}
	else if($rows['tende']==$tende) {
        echo 'Tên đề thi đã trùng';
        exit;
	}
	else{
		$kiemtra=checkdate($_POST["month"],$_POST["day"],$_POST["year"]);
		if($kiemtra==false)
		{
		echo "Mời bạn kiểm tra lại ngày thi. <a href='javascript: history.go(-1)'>Trở lại</a>";
		exit;
		}
		else
		{
		  $ngaythi = $day . '/' . $month . '/' . $year;
			$date=date("d/m/y");
			$sql2=$db->themdethi($ngaythi,$hocky,$date,$tacgia,$tende,$trangthai,$dotthi);
			$a=$db->query($sql2);
			if($a)
			{
                echo "<script>alert('Thêm đề thi thành công !');window.location='?menu=dethi_list'</script>";
			}
			else echo 'Có lỗi xảy ra';
		}
	}
}
?>