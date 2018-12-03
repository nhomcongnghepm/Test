<?php
error_reporting(0);
include('../modal/init.php');
if (isset($_GET['page1'])) {
    $i = $_GET['page'];
    $i=$i+10;
    $d=$d+10;
}
else if(isset($_GET['pagep1rev']))
{
    $i = $_GET['page1prev'];
    $i = $i - 10;
    $d=10;
}
else {
    $i = 0;
    $d=10;
}
$sql =$db->showlichthi($i,$d);
$results=$db->query($sql);
while($rows = $db->lay_rows($results)) {
    echo '<tr class="teacher">
			<td>' . $rows['tende'] . '</td>
			<td>' . $rows['ngaythi'] . '</td>
			<td>' . $rows['dotthi'] . '</td>
					</tr>';
}
?>