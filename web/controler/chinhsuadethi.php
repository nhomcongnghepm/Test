<?php
	error_reporting(0);
	include('../modal/init.php');
	$made=$_SESSION['made'];
	$sql="SELECT * FROM tbl_dethi WHERE made='$made'";
	$results=$db->query($sql);
	while($rows = $db->lay_rows($results)) {
            $made = $rows['made'];
            $tende = $rows['tende'];
            $timer = $rows['timer'];
        }
?>