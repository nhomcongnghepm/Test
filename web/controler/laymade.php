<?php
// Include database, session, general info
require_once '../modal/database_cauhoi.php';
		$results = mysqli_query($conn,"SELECT * FROM tbl_dethi");
			while($rows = mysqli_fetch_array($results))
		$rs = mysqli_query($conn,$sql);
echo "<select name='made'>";
while($r = mysqli_fetch_row($rs))
{
	echo "<option value='$r[0]'>".$r[1]."</option>";
}
echo "</select>";
		?>