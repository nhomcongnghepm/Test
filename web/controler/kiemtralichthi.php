				
<?php include ('connect.php');?>
<?php 
$so=0;
		$tv3= "SELECT trangthai FROM tbl_dethi INNER JOIN lop
ON lop.id_khoi = lichthi.id_khoi 
INNER JOIN hoc_sinh
ON hoc_sinh.id_lop = lop.id_lop
where hoc_sinh.id_hs="."'". $_GET['idhs'] ."'"." and lichthi.id_mon="."'".$_GET['mamon']."'"." and lichthi.lanthithu="."'".$_GET['lanthi']."'";
		$tv4 = mysqli_query($connect,$tv3);
		
		while( ($rows3 = mysqli_fetch_assoc($tv4))!= NULL)
		{
			$so= $rows3[trangthai];
		}
			
?>
<?php echo $so; ?>
