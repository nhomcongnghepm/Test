<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<link rel="stylesheet" href="../assets/dethi.css" type="text/css" media="screen" charset="utf-8">
<title></title>

</head>

<body>
<hr size="1" color="#cadadd" style="margin:15px auto;" />
<form action="" name="frmthemdethi" id="contact" class="contact-form" onsubmit="return checkform();" method="post" enctype="multipart/form-data">
<table width="650" border="0"  cellpadding="0" cellspacing="0" background="../view/image/body.png" id="dethi_news">
    <tr>
      <td bgcolor="#CCCCCC"  height="38px"colspan="2" align="center" class="style1">THÊM ĐỀ THI MỚI</td>
    </tr>
    <tr>
      <td height="39" align="center" class="tbltitle">Tên đề:</td>
      <td width="454"> <input size=25 type="text" name="tende" value="" autocomplete = "off"></td>
    </tr>
   <tr>
   <br> <br />
       <?php include("../controler/function_thi.php") ?>
			<td height="42" align="center" class="tbltitle">Ngày Thi:</td>
	  <td><select  class="form-control" name="day"> <option value="day">Ngày <?php day();?></option></select>
		  <select  class="form-control" name="month"> <option value="month">Tháng <?php  thang();?></option></select>
		  <select  class="form-control" name="year"> <option value="year">Năm <?php  nam();?></option></select>
      </td> </tr>
    <tr>
        <br> <br />
        <td height="42" align="center" class="tbltitle">Ngày Thi:</td>
        <td><select  class="form-control" name="gio"> <option value="gio">Giờ <?php gio();?></option></select>
            <select  class="form-control" name="phut"> <option value="phut">Phút <?php  phut();?></option></select>
            <select  class="form-control" name="giay"> <option value="giay">Giây <?php  giay();?></option></select>
        </td> </tr>
    <tr>
        <br> <br />
        <td height="42" align="center" class="tbltitle">Học kỳ:</td>
        <td>  <select class="form-control" name="hocky" id="chondotthi">
                <option value="1">Học kỳ 1</option>
                <option value="2">Học kỳ 2</option>
            </select>
        </td>
    </tr>
    <tr>
        <br> <br />
        <td height="42" align="center" class="tbltitle">Đợt thi:</td>
        <td>  <select class="form-control" name="dotthi" id="chondotthi">
                <option value="1">Ca sáng</option>
                <option value="2">Ca chiều</option>
            </select>
        </td>
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