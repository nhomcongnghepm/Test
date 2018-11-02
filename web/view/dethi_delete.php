<link rel="stylesheet" href="febe/style.css" type="text/css" media="screen" charset="utf-8">
<?php
include('../modal/init.php');
if(isset($_POST["bnm"]))
		{
			$made = $_POST["selector"];
			$sql= "delete from tbl_dethi where made in(";
			foreach($made as $key=>$value)
			{
					$delete.="'".$value."',"; 
					//echo $value;
			}
			$delete .= "'')";
			 echo $delete;
			
		 
			if ($db->query($sql)) {
				header("location:?menu=dethi_list");
			}
			else {
				echo "Có lỗi xảy ra";
			}
            $db->close();			 
		}
		else
		{
			echo "<script>alert('Không thể xóa dữ liệu !');window.location='?menu=dethi_list'</script>";
		}
?>