<?php
error_reporting(0);
require_once '../modal/init.php';
    $u=$_SESSION['user'];
    $sql=$db->laythongtinuser($u);
	$query=$db->query($sql);
    $row=$db->lay_rows($query);
    $pw=$row['password'];
    $quyen=$row['quyen'];
    if(isset($_POST["dongy"]))
    {
            $old_pw = sha1(($_POST["old_pw"]));
            $new_pw = sha1(($_POST["new_pw"]));
            $pre_pw = sha1(($_POST["pre_pw"]));
            if ($_POST["old_pw"] == '' || $_POST["new_pw"] == '' || $_POST["pre_pw"] == '') {
                echo "* Bạn phải nhập nhập đầy đủ thông tin!";
                exit;
            } else if ($old_pw != $pw) {
                echo "* Mật khẩu cũ nhập không đúng!";
                exit;
            } else if ($new_pw != $pre_pw) {
                echo "* Mật khẩu xác nhận sai!";
                exit;
            } else {
                $thongtin=$db->laythongtinuser($u);
                $lay=$db->query($thongtin);
                $cot=$db->lay_rows($lay);
                $quyen=$cot['quyen'];
                if($quyen='Học Sinh')
                {
                    $sql = $db->doimatkhau($u, $new_pw);
                    $db->query($sql);

                    $sql1=$db->doimatkhauhocsinh($u,$new_pw);
                    $xu_ly1=$db->query($sql1);
                    if ($xu_ly1) {
                        echo "<script>alert('Đổi mật khẩu thành công !');window.location='?menu=dethi_list'</script>";
                    } else "Có lỗi xảy ra";
                } else if($quyen='Giáo Viên'||$quyen='Trưởng bộ môn') {
                        $sql3 = $db->doimatkhau($u, $new_pw);
                        $db->query($sq3);
                        $sql2=$db->doimatkhaugiaovien($u,$new_pw);
                        $xu_ly2=$db->query($sql2);
                        if ($xu_ly2) {
                            echo "<script>alert('Đổi mật khẩu thành công !');window.location='?menu=dethi_list'</script>";
                        } else "Có lỗi xảy ra";
            }else{
                    $sql4 = $db->doimatkhau($u, $new_pw);
                    $xuly3=$db->query($sql4);
                    if ($xu_ly3) {
                        echo "<script>alert('Đổi mật khẩu thành công !');window.location='javascript: history.go(-1)'</script>";
                    } else "Có lỗi xảy ra";
                }
            }
    }
?>
