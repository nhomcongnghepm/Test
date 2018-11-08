<?php
include('../modal/init.php');
if(isset($_POST["bnm"]))
		{
			$ma_ch = $_POST["selector"];
            $delete=$db->cauhoi_delete($ma_ch);
			if ($db->query($delete)) {
				header("location:?menu=cauhoi_list");
			}
			else {
				echo "Có lỗi xảy ra";
			}
		}
		else
		{
			echo "<script>alert('Không thể xóa dữ liệu !');window.location='?menu=cauhoi_list'</script>";
		}
?>