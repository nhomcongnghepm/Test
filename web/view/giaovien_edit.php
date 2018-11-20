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
       <td bgcolor="#CCCCCC"  height="38px"colspan="2" align="center" class="style1">CẬP NHẬT THÔNG TIN GIÁO VIÊN</td>
    </tr>
   <tr>
	<td width="20%"  align="right">Mã học sinh: </td>
    <td width="80%">&nbsp;&nbsp;<input size=30 type="text" name="id" readonly style="background-color:#CCC" value="<?php echo $id?>"/></td>
	</tr>
     <tr>
    <td align="right">Họ</td>
    <td>&nbsp;&nbsp;<input size=35 type="text" name="ho" value="<?php echo $ho ?>"/></td>
  </tr>
  <tr>
    <td align="right">Tên</td>
    <td>&nbsp;&nbsp;<input size=35 type="text" name="ten" value="<?php echo $ten ?>"/></td>
  </tr>
  <tr>
    <td align="right">Email</td>
    <td>&nbsp;&nbsp;<input size=35 type="text" name="email" value="<?php  echo $email ?>"/></td>
  </tr>
  <tr>
    <td align="right">Tên môn giảng dạy</td>
    <td>&nbsp;&nbsp;<input size=35 type="text" name="bomon" value="<?php  echo $bomon ?>"/></td>
  </tr>
  <tr>
    <td align="right">Quyền</td>
    <td>&nbsp;&nbsp;<select name="quyen" class="form-control">
           <option value="Giáo Viên">Giáo viên</option>
           <option value="Trưởng bộ môn">Trưởng bộ môn</option>
         </select></td>
  </tr>
  <tr>
    <td align="right">Ngày Sinh</td>
    <td><div class="row"> 
    <?php include("../controler/function.php") ?>
     <div class="col-xs-4 col-md-4">&nbsp; <select  class="form-control" name="day" placeholder="day"> <option value="day">Ngày <?php day();?></option></select> 
       <select  class="form-control" name="month">
         <option value="month">Tháng
           <?php  thang();?>
           </option>
       </select>
       <select  class="form-control" name="year">
         <option value="year">Năm
           <?php  nam();?>
           </option>
       </select>
     </div> 
    </td>
  </tr>
  <tr>
    <td align="right">Giới tính </td>
    <td><label class="radio-inline">&nbsp;&nbsp;<input  id="inlineCheckbox1" name="sex" value="Nam" type="radio">Nam</label> <label  class="radio-inline"><input name="sex" id="inlineCheckbox2" value="Nữ" type="radio">Nữ </label></td>
  </tr>
    <tr>
      <td colspan="2" style="padding: 10px 0px 10px 0px" align="center"><label>
        <input type="submit" name="edit" id="edit" value="Cập nhật" />
      </label></td>
          <div class="a" <br style="color:red;"><?php require_once '../controler/giaovien_saveedit.php';?></div>
    </tr>
  </table>
</form>