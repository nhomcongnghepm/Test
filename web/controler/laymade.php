<?php
// Include database, session, general info
include '../modal/database_cauhoi.php';
		$sql = "select * from tbl_dethi";
		$rs = mysqli_query($conn,$sql);
echo "<select name='made'>";
while($r = mysqli_fetch_row($rs))
{
	echo "<option value='$r[0]'>".$r[1]."</option>";
}
echo "</select>";
		?>