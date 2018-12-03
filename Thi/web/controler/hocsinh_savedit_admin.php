<link rel="stylesheet" href="febe/style.css" type="text/css" media="screen" charset="utf-8">
<?php
require_once '../modal/init.php';
if(isset($_POST["edit"]))
{
    if (isset($_GET['id'])) {
        $id = $_GET['id'];
    }
    $pass_signup = sha1(($_POST['pwd1']));
    $repass_signup = sha1($_POST['pwd2']);
    $partten = "/^([A-Z]){1}([\w_\.!@#$%^&*()]+){5,31}$/";
    if(!preg_match($partten ,$_POST['pwd1'], $matchs))
    {
        echo  "Mật khẩu bạn phải có cả ký tự chử cái hoa, thường, chử số, ký tự đặc biệt, dấu chấm, bắt đầu với ký tự in hoa
và có từ 6 đến 32 ký tự <a href='javascript: history.go(-1)'>Trở lại</a>";
        exit;
    }
    if ($pass_signup != $repass_signup) {
        echo("* Mật khẩu không trùng khớp. <a href='javascript: history.go(-1)'>Trở lại</a><br /> ");
        exit;
    }
    if($pass_signup!=null||$repass_signup!=null) {
        $sql = $db->capnhathocsinh_admin($pass_signup, $id);
        $rs = $db->query($sql);

        $sql1 = $db->capnhatuser_admin($pass_signup, $id);
        $ra = $db->query($sql1);
        if ($rs) {
            echo "<script>alert('Cập nhật thành công!');window.location='?menu=quanlyhocsinh'</script>";
        } else {
            echo "Có lỗi xảy ra";
        }
    }else{
        echo "*Bạn vui lòng nhập đầy đủ thông tin";
    }
}
?>