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
$hocky=$_SESSION['hocky'];
$sql=$db->tonghopdiem($hocky,$i,$d);
$results=$db->query($sql);
while($rows =$db->lay_rows($results))
{

    echo '<tr class="teacher">
            <td>'.$rows['id'].'</td>
            <td>'.$rows['ho'].' '.$rows['ten'].'</td>
            <th>'.$rows['birthdate'].'</th>
            <th>'.$rows['Gioitinh'].'</th>
            <td>'.$rows['ngaythi'].'</td>
			<td>'.$rows['hocky'].'</td>
			<td>'.$rows['tende'].'</td>
			<td>'.$rows['diem'].'</td>
			</tr>';
}
?>