<link rel="stylesheet" href="febe/style.css" type="text/css" media="screen" charset="utf-8">
<?php
include('../modal/init.php');
if(isset($_POST["bnm"]))
		{
			$ma_ch = $_POST["selector"];
			$delete = "delete from tbl_cauhoi where ma_ch in(";
			foreach($ma_ch as $key=>$value)
			{
					$delete.="'".$value."',"; 
					//echo $value;
			}
			 $delete .= "'')";
			 echo $delete;
			
		 
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