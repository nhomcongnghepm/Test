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
$sql1=$db->tonghopdiem_2($hocky);
$results1=$db->query($sql1);
$sql2=$db->tonghopdiem_3($hocky);
$results2=$db->query($sql2);
$sql3=$db->tonghopdiem_4($hocky);
$results3=$db->query($sql3);
$sql4=$db->tonghopdiem_5($hocky);
$results4=$db->query($sql4);
$sql5=$db->trungbinh($hocky);
$results5=$db->query($sql5);
while($rows=$db->lay_rows($results) and $row=$db->lay_rows($results1) and $row2=$db->lay_rows($results2) and $row3=$db->lay_rows($results3) and $row4=$db->lay_rows($results4) and $row5=$db->lay_rows($results5))
{
    if($row5['trungbinh']<3)
    {
        $danhgia='Kém';
    }
    else  if($row5['trungbinh']>=3&&$row5['trungbinh']<5)
    {
        $danhgia='Yếu';
    }
    else if($row5['trungbinh']>=5&&$row5['trungbinh']<6.5)
    {
        $danhgia='Trung Bình';
    }
    else if($row5['trungbinh']>=6.5&&$row5['trungbinh']<8.5)
    {
        $danhgia='Khá';
    }
    else{
        $danhgia='Giỏi';
    }
        echo '<tr class="teacher">
            <td>' . $rows['id'] . '</td>
            <td>' . $rows['ho'] . ' ' . $rows['ten'] . '</td>
            <td>' . $rows['birthdate'] . '</td>
            <td>' . $rows['Gioitinh'] . '</td>
            <td>' . $rows['ngaythi'] . '</td>
			<td>' . $rows['hocky'] . '</td>
			<td>' . $row['toan'] . '</td>
			<td>' . $row2['ly'] . '</td>
			<td>' . $row3['hoa'] . '</td>
			<td>' . $row4['anh'] . '</td>
			<td>' . $row5['trungbinh'] . '</td>
			<td>' . $danhgia . '</td>
			</tr>';
}
?>