<?php
require_once '../modal/init.php';
if(isset($_POST["edit"]))
	{
        $now = getdate();
        $currentDate = $now["mday"] . "." . $now["mon"] . "." . $now["year"];
		$idmade = $_POST['idmade'];
		$tende=$_POST['tende'];
        $day = $_POST['day'];
        $month = $_POST['month'];
        $year = $_POST['year'];
        $hour = $_POST['hour'];
        $minutes = $_POST['minutes'];
        $seconds = $_POST['seconds'];
        $giothi = $hour . ':' . $minutes . ':' . $seconds;
		$timer=$_POST['timer'];
        $kiemtra = checkdate($month,$day,$year);

        if ($_POST["tende"] == null || $_POST["day"] == day || $_POST["month"] == month || $_POST["year"] == year || $_POST["hour"] == hour || $_POST["minutes"] == minutes || $_POST["seconds"] == seconds || $_POST["timer"] == null)
        {
            echo "* Bạn vui lòng nhập đầy đủ thông tin";
            exit;
        }  else if ($kiemtra == false) {
                echo "Mời bạn kiểm tra lại ngày thi. <a href='javascript: history.go(-1)'>Trở lại</a>";
                exit;
            } else {
                $ngaythi = $day . '/' . $month . '/' . $year;
			} if($ngaythi<$currentDate)
		{
			echo "* Ngày bạn chọn đã qua, mời bạn chọn ngày khác";
			exit;
		}
		else
		{
                 $sql="UPDATE tbl_dethi SET `tende` ='".$tende."',
							`ngaythi` ='".$ngaythi."',
							`giothi` ='".$giothi."',
							`timer` ='".$timer."'
						where made='".$idmade."'";
               $a=$db->query($sql);
                if($a) {
                echo "Cập nhật thành công";
				echo "<script>document.location.href='?menu=dethi_list' </script>";
            } else echo "Có lỗi xảy ra";
       }
	}
?>