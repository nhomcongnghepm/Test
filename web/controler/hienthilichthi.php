<?php
error_reporting(0);
include('../modal/init.php');
$sql =$db->hienthidethi();
$results=$db->query($sql);
while($rows = $db->lay_rows($results)) {
    echo '<tr class="teacher">
			<td>' . $rows['tende'] . '</td>
			<td>' . $rows['ngaythi'] . '</td>
			<td>' . $rows['giothi'] . '</td>
					</tr>';
}
?>