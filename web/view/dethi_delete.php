<link rel="stylesheet" href="febe/style.css" type="text/css" media="screen" charset="utf-8">
<?php
include('../modal/database_cauhoi.php');
if(isset($_POST["bnm"]))
		{
			$made = $_POST["selector"];
			$delete = "delete from tbl_dethi where made in(";
			foreach($made as $key=>$value)
			{
					$delete.="'".$value."',"; 
					//echo $value;
			}
			$delete .= "'')";
			 echo $delete;
			
		 
			if (mysqli_query($conn,$delete)) {
				header("location:?menu=dethi_list");
			}
			else {
				echo "<br>Error inserting database: " . mysql_error();
			}
			mysqli_close ($con);  
			 
		}
		else
		{
			echo "<script>alert('Không thể xóa dữ liệu !');window.location='?menu=dethi_list'</script>";
		}
?>