<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<link rel="stylesheet" href="../assets/dethi.css" type="text/css" media="screen" charset="utf-8">
<title></title>

</head>

<body>
<div style="margin:20px 70px 10px; font-size:14px;">
<font size="2" face="Tahoma"><b><a href="?menu=dethi_list">Đề thi</a><img src="images/bl3.gif" border="0" /> thêm mới đề thi</b></font></div>
<hr size="1" color="#cadadd" style="margin:15px auto;" />
<form action="" name="frmthemdethi" id="contact" class="contact-form" onsubmit="return checkform();" method="post" enctype="multipart/form-data">
<table width="650" border="0"  cellpadding="0" cellspacing="0" background="images/body.png" id="dethi_news">
    <tr>
      <td bgcolor="#CCCCCC"  height="38px"colspan="2" align="center" class="style1">THÊM ĐỀ THI MỚI</td>
    </tr>
    <tr>
      <td height="39" align="center" class="tbltitle">Tên đề:</td>
      <td width="454"> <input size=25 type="text" name="tende" value="" autocomplete = "off"></td>
    </tr>
   <tr>
   <br> <br />
			<td height="42" align="center" class="tbltitle">Số câu hỏi:</td>
	  <td><input size=25 type="text" name="socau" value=""autocomplete = "off"/></td>
  </tr>

     <tr>
			<td height="39" align="center" class="tbltitle">Giáo viên: </td>
	   <td><input size=25 type="text" name="tacgia" value="" autocomplete = "off"/></td>
  </tr>
   <tr>
			<td height="51" align="center" class="tbltitle">Thời gian: </td>
	  <td><input size=25 type="text" name="timer" value="" autocomplete = "off"/></td>
  </tr>
    <tr>
      <td colspan="2"align="center"  style="padding:10px 0px 10px 0px"><label>
        <input type="submit" name="ok" id="ok" value="Thêm đề thi" />
                          <div class="a" <br style="color:red;"><?php include '../controler/taodethi.php';?></div>
      </label>
      </td>
    </tr>
  </table>
</form>
</body>
</html>