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
        <td> <a href="#" id="ChiTiet<?php echo $rows3['id'] ?>" class="btn-link" >chi tiết<a></td>
    </tr>

    <?php
}
$db->close();
?>

