<?php
			error_reporting(0);
			include('../modal/init.php');
			$sql ="SELECT * FROM tbl_dethi";
			$results=$db->query($sql);
			while($rows = $db->lay_rows($results)) {
                echo '<tr class="teacher">
			<td>' . '<input type="checkbox" name="selector[]" value="' . $rows['made'] . '" />' . '</td>
			<td>' . $rows['tende'] . '</td>
			<td>' . $rows['ngaythi'] . '</td>
			<td>' . $rows['giothi'] . '</td>
			<td>' . $rows['tacgia'] . '</td>
			<td>' . $rows['timer'] . '</td>
				<td><a href="?menu=dethi_edit&made=' . $rows['made'] . '"><img src="../assets/image/go_right.gif" /></a></td>
			</tr>';
						                $_SESSION['made'] = $_POST["selector"];
            }
                ?>