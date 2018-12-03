				
<?php include ('../modal/init.php');?>
<?php 
$so=0;
		$tv3= "SELECT * FROM tbl_dethi
where tbl_dethi.made="."'".$_GET['mamon']."'"." and tbl_dethi.dotthi="."'".$_GET['dotthi']."'"." and tbl_dethi.ngaythi="."'".$_GET['lanthi']."' and tbl_dethi.hocky="."'".$_GET['hocky']."'";
		$tv4 = $db->query($tv3);
		
		while( ($rows3 = $db->lay_rows($tv4))!= NULL)
		{
			$so= $rows3['dotthi'];
		}
			
?>
<?php echo $so; ?>
