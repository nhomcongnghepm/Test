<?php
error_reporting(0);
include('../modal/init.php');
$made=$_SESSION['made'];
$sql=$db->showcauhoi_dethi($made);
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
    $_SESSION['ma_ch'] = $POST['ma_ch'];
}
?>