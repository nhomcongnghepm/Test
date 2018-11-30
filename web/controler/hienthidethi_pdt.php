<?php
require_once '../modal/init.php';
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
$hocky=$_SESSION['hocky'];
$sql=$db->hienthidethi_pdt($i,$d,$hocky);
$results=$db->query($sql);
while($rows = $db->lay_rows($results)) {
    echo '<tr class="truongbomon">
			<td>' . '<input type="checkbox" name="selector[]" value="' . $rows['made'] . '" />' . '</td>
			<td>' . $rows['tende'] . '</td>
			<td>' . $rows['ngaythi'] . '</td>
			<td>' . $rows['hocky'] . '</td>
			<td>' . $rows['tacgia'] . '</td>
		    <td>' . $rows['trangthai'] . '</td>
		    <td>' . $rows['linhvuc']   . '</td>
			</tr>';
}
?>