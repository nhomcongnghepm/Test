<?php
include('../modal/init.php');
if(isset($_POST["bnm"]))
		{
			$ma_ch = $_POST["selector"];
            $delete=$db->cauhoi_delete($ma_ch);
			if ($db->query($delete)) {
                echo "<script>alert('Xóa thành công !');window.location='?menu=cauhoi_list'</script>";
			}
			else {
                echo "<script>alert('Không thể xóa dữ liệu !');window.location='?menu=cauhoi_list'</script>";
			}
		}
?>