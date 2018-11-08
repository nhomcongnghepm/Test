<?php
include('../modal/init.php');
if(isset($_POST["bnm"]))
		{
			$id_gv = $_POST["selector"];
			$delete= "delete from giaovien where id_gv in(";
			foreach($id_gv as $key=>$value)
			{
					$delete.="'".$value."',"; 
			}
			$delete .= "'')";
			 echo $delete;
			$a=$db->query($delete);
		 
			if ($a) {
				header("location:?menu=quanlygiaovien");
			}
			else {
				echo "Có lỗi xảy ra";
			}
			
			$id = $_POST["selector"];
			$delete = "delete from user where id in(";
			foreach($id as $key=>$value)
			{
					$delete.="'".$value."',"; 
			}
			 $delete .= "'')";
			 echo $delete;
			
		 
			if ($db->query($delete)) {
				header("location:?menu=quanlygiaovien");
			}
			else {
				echo "Có lỗi xảy ra";
			}
		}
		else
		{
			echo "<script>alert('Không thể xóa dữ liệu !');window.location='?menu=quanlygiaovien'</script>";
		}
		?>