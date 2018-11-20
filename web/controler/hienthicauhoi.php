<?php
			include('../modal/init.php');
if (isset($_GET['page'])) {
    $i = $_GET['page'];

        $i=$i+10;
        $d=$d+10;
}
else if(isset($_GET['pageprev']))
{
    $i = $_GET['pageprev'];

        $i = $i - 10;
        $d=10;
}
else {
    $i = 0;
    $d=10;
}
            $sql=$db->showcauhoidethi($i,$d);
			$results=$db->query($sql);
			while($rows =$db->lay_rows($results))
			{
			echo '<tr class="teacher">
			<td>' . '<input type="checkbox" name="selector[]" value="'.$rows['ma_ch'].'" />' . '</td>
			<td>'.$rows['ma_ch'].'</td>
			<td>'.$rows['made'].'</td>
			<td>'.$rows['tende'].'</td>
			<td>'.$rows['noidung'].'</td>
			<td>'.$rows['lc1'].'</td>
			<td>'.$rows['lc2'].'</td>
			<td>'.$rows['lc3'].'</td>
			<td>'.$rows['lc4'].'</td>
			<td>'.$rows['dapan'].'</td>
			<td><a href="?menu=cauhoi_edit&ma_ch='.$rows['ma_ch'].'"><img src= "../assets/giaovien/images/page_1/u74.png" /></a></td>
			</tr>';
			}
?>