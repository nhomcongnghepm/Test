				
<?php include ('../modal/init.php');?>
<?php 
$so=0;
		$tv3= "SELECT trangthai FROM tbl_dethi" ;
		$tv4 = $db->query($tv3);
		
		while( ($rows3 =$db->lay_rows($tv4))!= NULL)
		{
			$so= $rows3['trangthai'];
		}
			
?>
<?php echo $so; ?>
