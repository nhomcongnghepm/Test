<?php
require_once '../modal/init.php';
if(isset($_POST["edit"]))
	{
		$idmade = $_POST['idmade'];
		$tende=$_POST['tende'];
        $day = $_POST['day'];
        $month = $_POST['month'];
        $year = $_POST['year'];
        $hour = $_POST['hour'];
        $minutes = $_POST['minutes'];
        $seconds = $_POST['seconds'];
        $giothi = $hour .'h'. ':' . $minutes .'p'. ':' . $seconds.'s';
        $kiemtra = checkdate($month,$day,$year);
        $date=date("d/m/y");
        if ($_POST["tende"] == null || $_POST["day"] == day || $_POST["month"] == month || $_POST["year"] == year || $_POST["hour"] == hour || $_POST["minutes"] == minutes || $_POST["seconds"] == seconds)
        {
            echo "* Bạn vui lòng nhập đầy đủ thông tin";
            exit;
        }  else if ($kiemtra == false) {
                echo "Mời bạn kiểm tra lại ngày thi. <a href='javascript: history.go(-1)'>Trở lại</a>";
                exit;
            } else {
                $ngaythi = $day . '/' . $month . '/' . $year;
				 $sql=$db->capnhatdethi($tende,$ngaythi,$giothi,$idmade,$date);
                 $a=$db->query($sql);
                if($a) {
                    echo "<script>alert('Cập nhật thành công!');window.location='?menu=dethi_list'</script>";

                } else echo "<script>alert('Có lỗi xảy ra!');window.location='?menu=dethi_list'</script>";

        }
	}
?>