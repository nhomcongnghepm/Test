<?php require_once '../modal/init.php';
$tv3=$db->hienthithongbao();
$query=$db->query($tv3);
while(($rows3 =$db->lay_rows($query))!= NULL)
{
    ?>
    <tr>
        <td><?php echo $rows3['chude']?></td>
        <td><?php echo $rows3['nguoigui']?></td>
        <td><?php echo $rows3['thoigian']?></td>
        <td><?php echo $rows3['noidung']?></td>
        
    </tr>

    <?php
}
$db->close();
?>

