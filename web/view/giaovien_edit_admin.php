<link rel="stylesheet" href="../assets/style.css" type="text/css" media="screen" charset="utf-8">
<script type="text/javascript" src="../assets/tiny_mce/tiny_mce.js"></script>
<script type="text/javascript" src="../assets/tiny_mce/int.load.js"></script>
<link rel="stylesheet" href="../assets/chinhsuacauhoi.css" type="text/css" media="screen" charset="utf-8">
<div style="margin:20px 70px 10px; font-size:14px;">
    <font size="2" face="Tahoma"><b><a href="">GIÁO VIÊN</a><img src="../assets/image/bl3.gif" border="0" /> Cập nhật THÔNG TIN GIÁO VIÊN</b></font></div>
<hr size="1" color="#cadadd" style="margin:15px auto;" />
<form action="" method="post" class="form1">
    <?php require_once '../controler/chinhsuagiaovien.php';?>
    <table width="750" border="0"  cellpadding="0" cellspacing="0" background="../assets/image/body.png">
        <tr>
            <td bgcolor="#CCCCCC"  height="38px"colspan="2" align="center" class="style1">CẬP NHẬT THÔNG TIN HỌC SINH</td>
        </tr>
        <tr>
            <td width="20%"  align="right">Mã giáo viên/(Trưởng bộ môn): </td>
            <td width="80%">&nbsp;&nbsp;<input size=30 type="text" name="id" readonly style="background-color:#CCC" value="<?php echo $id?>"/></td>
        </tr>
        <tr><td width="20%"  align="right">Cấp lại mật khẩu: </td>
            <td width="80%">&nbsp;&nbsp;<input size=30 type="password" name="pwd1"  /></td></tr>
        <tr><td width="20%"  align="right">Nhập lại mật khẩu: </td>
            <td width="80%">&nbsp;&nbsp;<input size=30 type="password" name="pwd2"  /></td></tr>
        <tr>
            <td colspan="2" style="padding: 10px 0px 10px 0px" align="center"><label>
                    <input type="submit" name="edit" id="edit" value="Cập nhật" />
                </label></td>
            <div class="a" <br style="color:red;"><?php require_once '../controler/giaovien_savedit_admin.php';?></div>
        </tr>
    </table>
</form>