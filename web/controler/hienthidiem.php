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
$u=$_SESSION['user'];
$sql1=$db->laythongtin_hocsinh($u);
$query=$db->query($sql1);
$row=$db->lay_rows($query);
$id=$row['id'];
$hocky=$_SESSION['hocky'];
$sql=$db->showdiem($id,$i,$d,$hocky);
$results=$db->query($sql);

while($rows =$db->lay_rows($results))
{

    echo '<tr class="teacher">
            <td>'.$rows['ngaythi'].'</td>
			<td>'.$rows['hocky'].'</td>
			<td>'.$rows['tende'].'</td>
			<td>'.$rows['diem'].'</td>
			</tr>';
}
?>