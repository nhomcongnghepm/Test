<?php include ('../modal/init.php');
$now = getdate();
$currentDate = $now["mday"] . "/" . $now["mon"] . "/" . $now["year"];
$startTime = date("H:i:s");//khởi tạo
$tv3=$db->hienthide_duyet();
$tv4 =$db->query($tv3);
while( ($rows3 = $db->lay_rows($tv4))!= NULL)
{
    ?>
    <option value="<?php echo $rows3['made']; ?>"><?php echo $rows3['tende']; ?></option>
    <?php
}
$db->close();
?>