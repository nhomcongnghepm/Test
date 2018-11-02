<?php 
			error_reporting(0);
			include('../modal/init.php');
			$sql="SELECT * FROM tbl_cauhoi,tbl_dethi WHERE tbl_dethi.made=tbl_cauhoi.made";
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
			<td><a href="?menu=cauhoi_edit&ma_ch='.$rows['ma_ch'].'"><img src= "../assets/image/go_right.gif" /></a></td>
			</tr>';
			                $_SESSION['ma_ch'] = $rows['ma_ch'];
			}
?>