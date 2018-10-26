<?php
			include('../modal/database_cauhoi.php');
			$results = mysqli_query($conn,"SELECT * FROM tbl_dethi");
			while($rows = mysqli_fetch_array($results))
			{	
			echo '<tr class="teacher">
			<td>' . '<input type="checkbox" name="selector[]" value="'.$rows['made'].'" />' . '</td>
			<td>'.$rows['tende'].'</td>
			<td>'.$rows['ngaythi'].'</td>
			<td>'.$rows['giothi'].'</td>
			<td>'.$rows['tacgia'].'</td>
				<td><a href="?menu=dethi_edit&made='.$rows['made'].'"><img src="../assets/image/go_right.gif" /></a></td>
			</tr>';
			}
		?>