				
<?php include ('../modal/init.php');?>
<?php
$startTime = date("H:i:s");//khởi tạo
$so=0;
		$tv3=$db->kiemtralichthi();
		$tv4 = $db->query($tv3);
		while($rows3 = $db->lay_rows($tv4)) {
            $time=strtotime($rows3['giothi']);
            $time=$time+15*60;
            $cenvertedTime=date("H:i:s",$time);
            if ($startTime>=$rows3['giothi']) {
					if($startTime<=$cenvertedTime)
					{
						$so=1;
					}
            }
        }
?>
<?php echo $so; ?>
