<?php
include('../modal/init.php');
if(isset($_POST["bnm"]))
		{
			$made = $_POST["selector"];
			$delete= "delete from tbl_dethi where made in(";
			foreach($made as $key=>$value)
			{
					$delete.="'".$value."',"; 
			}
			$delete .= "'')";
			 echo $delete;
			$a=$db->query($delete);
		 
			if ($a) {
				header("location:?menu=dethi_list");
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