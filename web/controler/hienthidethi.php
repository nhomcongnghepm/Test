<?php
			require_once '../modal/init.php';
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
            $sql=$db->showdethi($i,$d);
            $results=$db->query($sql);
			while($rows = $db->lay_rows($results)) {
                echo '<tr class="truongbomon">
			<td>' . '<input type="checkbox" name="selector[]" value="' . $rows['made'] . '" />' . '</td>
			<td>' . $rows['tende'] . '</td>
			<td>' . $rows['ngaythi'] . '</td>
			<td>' . $rows['giothi'] . '</td>
			<td>' . $rows['tacgia'] . '</td>
		    <td>' . $rows['trangthai'] . '</td>
				<td><a href="?menu=dethi_edit&made='.$rows['made'].'"><img src="../assets/giaovien/images/home/u37.png" /></a></td>
			</tr>';
            }
                ?>