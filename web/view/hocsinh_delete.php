<?php
include('../modal/init.php');
if(isset($_POST["bnm"]))
		{
			$id = $_POST["selector"];
            $delete=$db->hocsinh_delete($id);
			if ($db->query($delete)) {
				header("location:?menu=quanlyhocsinh");
			}
			else {
				echo "Có lỗi xảy ra";
			}
            $id=$_POST['selector'];
            $delete1=$db->user_delete($id);
			if ($db->query($delete1)) {
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