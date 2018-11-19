<?php
include('../modal/init.php');
if(isset($_POST["bnm"]))
		{
			$made = $_POST["selector"];
            $delete=$db->dethi_delete($made);
			$a=$db->query($delete);

			if ($a) {
				header("location: ?menu=dethi_list");
			}
			else {
				echo "Có lỗi xảy ra";
			}
		}
		else
		{
			echo "<script>alert('Không thể xóa dữ liệu !');window.location='?menu=dethi_list'</script>";
		}
?>