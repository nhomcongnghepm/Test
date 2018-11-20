<?php $dap_an[0]=""; ?>
							 <?php include ('../modal/init.php');?>
<?php 

		$tv3= "SELECT * FROM  tbl_cauhoi,tbl_dethi where tende='".$_POST['monselect']."' and tbl_dethi.made=tbl_cauhoi.made and tbl_dethi.lanthi='".$_POST['hockyselect']."'";
		$tv4 = $db->query($tv3);
		$cau=0;
		while( ($rows3 =$db->lay_rows($tv4))!= NULL)
		{
			$dap_an[$cau]=$rows3['dapan'];
			$cau++;
		}	
?>