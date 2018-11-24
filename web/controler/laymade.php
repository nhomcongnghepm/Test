<?php
// Include database, session, general info
require_once '../modal/init.php';
$u=$_SESSION['user'];
$sql=$db->laythongtin_giaovien($u);
$query=$db->query($sql);
$row=$db->lay_rows($query);
$linhvuc=$row['bomon'];
		$sql=$db->hienthidethi($linhvuc);
		$rs=$db->query($sql);
echo "<select name='made'>";
while($r = $db->row($rs))
{
	echo "<option value='$r[0]'>".$r[1]."</option>";
}
echo "</select>";
		?>