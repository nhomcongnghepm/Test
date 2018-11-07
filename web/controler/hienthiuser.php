<?php 
			error_reporting(0);
			include('../modal/init.php');
			$sql="SELECT * FROM user";
			$results=$db->query($sql);
			while($rows =$db->lay_rows($results))
			{
				
			echo '<tr class="teacher">
			<td>' . '<input type="checkbox" name="selector[]" value="'.$rows['id'].'" />' . '</td>
			<td>'.$rows['ho'].'</td>
			<td>'.$rows['ten'].'</td>
			<td>'.$rows['user'].'</td>
			<td>'.$rows['email'].'</td>
			<td>'.$rows['birthdate'].'</td>
			<td>'.$rows['Gioitinh'].'</td>
			<td>'.$rows['quyen'].'</td>
			<td><a href="?menu=capnhattaikhoan&id='.$rows['id'].'"><img src= "../assets/image/go_right.gif" /></a></td>
			</tr>';
						                $_SESSION['id'] = $rows['id'];
						}
?>