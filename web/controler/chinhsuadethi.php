<?php
	include('../modal/init.php');
	if (isset($_GET['made'])) {
		$made = $_GET['made'];
	}
	$sql="SELECT * FROM tbl_dethi WHERE made='$made'";
	$results=$db->query($sql);
	while($rows = $db->lay_rows($results)) {
            $made = $rows['made'];
            $tende = $rows['tende'];
            $timer = $rows['timer'];
        }
?>