<?php
error_reporting(0);
require_once '../modal/init.php';
    $u=$_SESSION['user'];
    $sql= "SELECT user, password, quyen FROM user WHERE user='$u'" ;
	$query=$db->query($sql);
    $row=$db->lay_rows($query);
    $pw=$row['password'];
    if(isset($_POST["dongy"]))
    {
     	$old_pw=sha1(($_POST["old_pw"]));
   	 	$new_pw=sha1(($_POST["new_pw"]));
    	$pre_pw=sha1(($_POST["pre_pw"]));   
        if($_POST["old_pw"] == '' || $_POST["new_pw"] == '' || $_POST["pre_pw"]== '')
        {
            echo "* Bạn phải nhập nhập đầy đủ thông tin!";
            exit;
        }
    
        else if($old_pw!=$pw)
        {
            echo "* Mật khẩu cũ nhập không đúng!";
            exit;
        }
        else if($new_pw!=$pre_pw)
        {
            echo "* Mật khẩu xác nhận sai!";
            exit;
        }
        else 
        {
            $sql="UPDATE user SET password='$new_pw' WHERE user='$u'";
			$db->query($sql);
			if($sql)
			{
            echo "Mật khẩu đã thay đổi";
			}
			else "Có lỗi xảy ra";        
		}
    }
?>
