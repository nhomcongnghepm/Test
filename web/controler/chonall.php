<?php
			include('../modal/database_cauhoi.php');
			$counts=0;
			$rscount = mysqli_query($conn,"SELECT * FROM tbl_cauhoi");
			while($rowscounts = mysqli_fetch_array($rscount))
			{
				$counts++;
			}
?>