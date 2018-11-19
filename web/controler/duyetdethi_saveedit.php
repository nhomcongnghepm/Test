<?php
require_once '../modal/init.php';
if(isset($_POST["duyet"]))
{
    $b="Đã duyệt";
    $made=$_SESSION['made'];
    $sql=$db->duyetdethi($made,$b);
    $a=$db->query($sql);
    if($a)
    {
        echo "Duyệt thành công";
    }
    else echo "Có lõi xảy ra";
}
