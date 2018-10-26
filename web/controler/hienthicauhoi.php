<?php 
			include('../modal/database_cauhoi.php');
			$results = mysqli_query($conn,"SELECT * FROM tbl_cauhoi,tbl_dethi WHERE tbl_dethi.made=tbl_cauhoi.made");
			while($rows = mysqli_fetch_array($results))
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
			}
?>