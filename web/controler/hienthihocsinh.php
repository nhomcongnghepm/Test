<?php 
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
			$sql=$db->showhocsinh($i,$d);
			$results=$db->query($sql);
			while($rows =$db->lay_rows($results))
			{		
			echo '<tr class="teacher" name="id">
			<td>' . '<input type="checkbox" name="selector[]" value="'.$rows['id'].'" />' . '</td>
			<td>'.$rows['id'].'</td>
			<td>'.$rows['ho'].'</td>
			<td>'.$rows['ten'].'</td>
			<td>'.$rows['user'].'</td>
			<td>'.$rows['email'].'</td>
			<td>'.$rows['birthdate'].'</td>
			<td>'.$rows['Gioitinh'].'</td>
			<td>'.$rows['tenlop'].'</td>
			<td><a href="?menu=hocsinh_edit&id='.$rows['id'].'"><div name"cs"><img src= "../assets/image/go_right.gif" /></div></a></td>
			</tr>';
			}
?>