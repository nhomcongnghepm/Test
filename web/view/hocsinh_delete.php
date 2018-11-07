<link rel="stylesheet" href="febe/style.css" type="text/css" media="screen" charset="utf-8">
<?php
include('../modal/init.php');
if(isset($_POST["bnm"]))
		{
			$id = $_POST["selector"];
			$delete = "delete from sinhvien where id in(";
			foreach($id as $key=>$value)
			{
					$delete.="'".$value."',"; 
			}
			 $delete .= "'')";
			 echo $delete;
			
		 
			if ($db->query($delete)) {
				header("location:?menu=quanlyhocsinh");
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
				header("location:?menu=quanlyhocsinh");
			}
			else {
				echo "Có lỗi xảy ra";
			}
		}
		else
		{
			echo "<script>alert('Không thể xóa dữ liệu !');window.location='?menu=quanlyhocsinh'</script>";
		}
?>