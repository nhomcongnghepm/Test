<?php
require_once '../modal/init.php';
if(isset($_POST["edit"]))
	{
		$idmade = $_POST['idmade'];
		$tende=$_POST['tende'];
        $day = $_POST['day'];
        $month = $_POST['month'];
        $year = $_POST['year'];
        $hocky=$_POST['hocky'];
        $dotthi=$_POST['dotthi'];
        $kiemtra = checkdate($month,$day,$year);
        $date=date("d/m/y");
        $gio = $_POST['gio'];
        $phut = $_POST['phut'];
        $giay = $_POST['giay'];
        if ($_POST["tende"] == null || $_POST["day"] == day || $_POST["month"] == month || $_POST["year"] == year || $_POST["gio"] == gio || $_POST["phut"] == phut || $_POST["giay"] == giay)
        {
            echo "* Bạn vui lòng nhập đầy đủ thông tin";
            exit;
        }  else if ($kiemtra == false) {
                echo "Mời bạn kiểm tra lại ngày thi. <a href='javascript: history.go(-1)'>Trở lại</a>";
                exit;
            } else {
            if($gio<10)
            {
                $day='0'.$day;
            }
            if($phut<10)
            {
                $phut='0'.$phut;
            }
            if($giay<10)
            {
                $giay='0'.$giay;
            }
            $giothi = $gio . ':' . $phut . ':' . $giay;
            $ngaythi = $day . '/' . $month . '/' . $year;
				 $sql=$db->capnhatdethi($tende,$ngaythi,$hocky,$idmade,$date,$dotthi,$giothi);
                 $a=$db->query($sql);
                if($a) {
                    echo "<script>alert('Cập nhật thành công!');window.location='?menu=dethi_list'</script>";

                } else echo "<script>alert('Có lỗi xảy ra!');window.location='?menu=dethi_list'</script>";

        }
	}
?>