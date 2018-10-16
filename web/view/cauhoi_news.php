<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<link rel="stylesheet" href="../assets/cauhoi.css" type="text/css" media="screen" charset="utf-8">
<script type="text/javascript" src="../assets/tiny_mce/tiny_mce.js"></script>
<script type="text/javascript" src="../assets/tiny_mce/int.load.js"></script>
	<script type="text/javascript" src="../assets/js/jquery-1.7.2.min.js"></script>
	<script type="text/javascript" src="../assets/js/jquery.validate.min.js"></script>
	<script type="text/javascript" src="../assets/js/messages_vi.js"></script>
<title></title>
</head>
<body>
<?php include '../controler/taocauhoi.php' ?>
<div class="form1">
<hr size="1" color="#cadadd" style="margin:15px auto;" />
<form action="" name="frmthemdethi" id="contact" class="contact-form" onsubmit="return checkform();" method="post" enctype="multipart/form-data">
<table width="850" border="0"  cellpadding="0" cellspacing="0" background="images/body.png" id="cauhoi_news">
    <tr>
     <td bgcolor="#CCCCCC"  height="38px"colspan="2" align="center" class="style1">THÊM CÂU HỎI MỚI</td>
    </tr>
    <tr>
      <td width="116" align="right">Nội dung:<span style="color:red;font-size:22px">*</span>  </td>
	    <td width="634"><textarea name="noidung" id="textarea_full" class="required" cols="20" rows="2"> </textarea></td>
    </tr>
    
     <tr>
		<td align="right" class="tbltitle">Lựa chọn A: <span style="color:red;font-size:22px">*</span> </td>
		<td><input class="required" size=30 type="text" name="lc1" value=""autocomplete = "off"/></td>
  	</tr>
    
    <tr>
    	<td align="right" class="tbltitle">Lựa chọn B:<span style="color:red;font-size:22px">*</span> </td>
		<td><input class="required" size=30 type="text" name="lc2" value=""autocomplete = "off"/></td>
    </tr>
    
    <tr>
     	<td align="right" class="tbltitle">Lựa chọn C: <span style="color:red;font-size:22px">*</span> </td>
		<td><input size=30 class="required" type="text" name="lc3" value=""autocomplete = "off"/></td>
    </tr>
    
    <tr>
     	<td align="right" class="tbltitle">Lựa chọn D: <span style="color:red;font-size:22px">*</span> </td>
		<td><input size=30 class="required" type="text" name="lc4" value=""autocomplete = "off"/></td>
    </tr>
    
    <tr>
       	<td align="right" class="tbltitle2">Đáp án: <span style="color:red;font-size:22px">*</span></td>
		<td>
        	<select name='dapan'>
			<option value="1">Đáp án A</option>
			<option value="2">Đáp án B</option>
			<option value="3">Đáp án C</option>
			<option value="4">Đáp án D</option>
		  </select>
        </td>
     </tr> 
   <tr>
		<td align="right" class="tbltitle2">Tên đề: <span style="color:red;font-size:22px">*</span></td>
		<td>      
		<?php include '../controler/laymade.php'; ?> 
		</td>
	<tr/>
    <td width="116" align="right">Điểm: <span style="color:red;font-size:22px">*</span>  </td>
	    <td><input size=30 class="required" type="text" name="diem" value=""autocomplete = "off"/></td>
    </tr>
   <tr>
       	<td align="right" class="tbltitle2">Trang thái: <span style="color:red;font-size:22px">*</span></td>
		<td>
        	<select name='hieuluc'>
			<option value='1'>1-Duyet va dang bai</option>
			<option value='2'>2-Khong duyet</option>
		  </select><br />
        </td>
     </tr> 
    <tr>
      <td colspan="2"align="center"  style="padding:10px 0px 10px 0px">
      <label>
       	 <input type="submit" name="ok" id="ok" value="Thêm câu hỏi" />
      </label>
      </td>
    </tr>
  </table>
</form>
</div>
</body>
</html>
