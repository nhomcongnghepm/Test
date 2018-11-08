<?php 
			error_reporting(0);
			include('../modal/init.php');
			$sql=$db->hienthiuser();
			$results=$db->query($sql);
			while($rows =$db->lay_rows($results))
			{

			echo '<tr class="teacher">
            <td>'.$rows['id'].'</td>
			<td>'.$rows['ho'].'</td>
			<td>'.$rows['ten'].'</td>
			<td>'.$rows['user'].'</td>
			<td>'.$rows['email'].'</td>
			<td>'.$rows['birthdate'].'</td>
			<td>'.$rows['Gioitinh'].'</td>
			<td>'.$rows['quyen'].'</td>
			</tr>';
						}
?>