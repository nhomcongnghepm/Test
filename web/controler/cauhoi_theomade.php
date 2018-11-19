<?php
error_reporting(0);
require_once '../modal/init.php';
if (isset($_GET['page1'])) {
    $i = $_GET['page1'];
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
$made=$_SESSION['made'];
$sql=$db->showcauhoi_dethi($made,$i,$d);
$results=$db->query($sql);
while($rows =$db->lay_rows($results))
{

    echo '<tr class="teacher">
			<td>'.$rows['ma_ch'].'</td>
			<td>'.$rows['made'].'</td>
			<td>'.$rows['tende'].'</td>
			<td>'.$rows['noidung'].'</td>
			<td>'.$rows['lc1'].'</td>
			<td>'.$rows['lc2'].'</td>
			<td>'.$rows['lc3'].'</td>
			<td>'.$rows['lc4'].'</td>
			<td>'.$rows['dapan'].'</td>
			</tr>';
}
?>