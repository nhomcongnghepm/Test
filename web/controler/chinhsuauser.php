<?php
if (isset($_GET['id'])) {
    $id = $_GET['id'];
}
require_once '../modal/init.php';
$sql=$db->laythongtinpdt($id);
$results=$db->query($sql);
while($rows = $db->lay_rows($results))
{
    $id = $rows['id'];
    $ho=$rows['ho'];
    $ten=$rows['ten'];
    $email=$rows['email'];
}
?>