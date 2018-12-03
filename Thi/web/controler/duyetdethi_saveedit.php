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
        echo "<script>alert('Duyệt đề thi thành công!');window.location='?menu=duyetdethi'</script>";
    }
    else echo "<script>alert('Có lỗi xảy ra!');window.location='?menu=duyetdethi'</script>";

}
