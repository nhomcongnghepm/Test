<?php
include('../modal/init.php');
if(isset($_POST["bnm"]))
		{
			$id_gv = $_POST["selector"];
			$delete=$db->giaovien_delete($id_gv);
			$a=$db->query($delete);
			if ($a) {
				header("location:?menu=quanlygiaovien");
			}
			else {
				echo "Có lỗi xảy ra";
			}
			$id=$_POST['selector'];
            $delete1=$db->user_delete($id);
			if ($db->query($delete1)) {
                echo "<script>alert('Xóa thành công!');window.location='?menu=quanlygiaovien'</script>";
			}
			else {
                echo "<script>alert('Không thể xóa dữ liệu !');window.location='?menu=quanlygiaovien'</script>";
			}
		}
		?>