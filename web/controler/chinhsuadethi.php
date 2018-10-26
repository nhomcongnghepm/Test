<?php
	include('../modal/database_cauhoi.php');
	$made=$_POST['made'];
	$results = mysqli_query($conn,"SELECT * FROM tbl_dethi WHERE made='$made'");
	while($rows = mysqli_fetch_array($results))
	  {
	  $made=$rows['made'];
	  $tende=$rows['tende'];
	  $timer=$rows['timer'];
	  $socau=$rows['socau'];
	  }
?>