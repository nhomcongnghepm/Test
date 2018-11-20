				
<?php include ('../modal/init.php');?>
<?php 
$so=0;
		$tv3= "SELECT trangthai FROM tbl_dethi INNER JOIN lop
ON lop.id_khoi = lichthi.id_khoi 
INNER JOIN hoc_sinh
ON hoc_sinh.id_lop = lop.id_lop
where hoc_sinh.id_hs="."'". $_GET['idhs'] ."'"." and lichthi.id_mon="."'".$_GET['mamon']."'";
		$tv4 = $db->query($tv3);
		
		while( ($rows3 =$db->lay_rows($tv4))!= NULL)
		{
			$so= $rows3['trangthai'];
		}
			
?>
<?php echo $so; ?>
