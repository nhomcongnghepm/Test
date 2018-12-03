<link rel="stylesheet" href="../assets/style.css" type="text/css" media="screen" charset="utf-8">
<link rel="stylesheet" href="../assets/chinhsuadethi.css" type="text/css" media="screen" charset="utf-8">
<div style="margin:20px 70px 10px; font-size:14px;">
<font size="2" face="Tahoma"><b><a href="?menu=dethi_list">Đề thi</a><img src="../assets/image/bl3.gif" border="0" /> Sửa thông tin đề thi</b></font></div>
<hr size="1" color="#cadadd" style="margin:15px auto;" />
<form action="?menu=dethi_edit" method="post" class="dethi_edit">
<?php include ('../controler/chinhsuadethi.php')?>
  <table width="600" border="0"  cellpadding="0" cellspacing="0" background="../assets/image/body.png">
    <tr>
     <td bgcolor="#CCCCCC"  height="38px"colspan="2" align="center" class="style1">Cập nhật thông tin đề thi</td>
    </tr>
   <tr>
	<td width="20%"  align="right">Mã đề</td>
    <td width="80%"> <input size=30 type="text" name="idmade" readonly="readonly" style="background-color:#CCC" value="<?php echo $made?>"/></td>
	</tr>
	<tr>
	<td align="right">Tên đề</td>
        <td> <input size=35 type="text" name="tende" readonly="readonly" style="background-color:#CCC" value="<?php echo $tende?>"></td></tr>
  <tr>
    <?php include("../controler/function_thi.php") ?>
		<td align="right">Ngày Thi: </td>
          <td><span class="tbltitle">
            <select  class="form-control" name="day">
              <option value="day">Ngày
                <?php day();?>
              </option>
            </select>
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
          </span></td>
  </tr>
      <tr>
         <td align="right">Giờ Thi: </td>
          <td><span class="tbltitle">
            <select  class="form-control" name="gio">
              <option value="gio">Giờ
                  <?php gio();?>
              </option>
            </select>
          <select  class="form-control" name="phut">
              <option value="phut">Phút
                  <?php  phut();?>
            </option>
          </select>
          <select  class="form-control" name="giay">
            <option value="giay">Giây
                <?php  giay();?>
            </option>
          </select>
          </span></td>
      </tr>
      <tr>
          <td align="right" class="tbltitle">Học kỳ:</td>
          <td>  <select class="form-control" name="hocky" id="chondotthi">
                  <option value="1">Học kỳ 1</option>
                  <option value="2">Học kỳ 2</option>
              </select>
          </td>
      </tr>
      <tr>
          <td align="right" class="tbltitle">Đợt thi:</td>
          <td>  <select class="form-control" name="dotthi" id="chondotthi">
                  <option value="1">Ca sáng</option>
                  <option value="2">Ca chiều</option>
              </select>
          </td>
      </tr>
    <tr>
      <td colspan="2" style="padding: 10px 0px 10px 0px" align="center"><label>
        <input type="submit" name="edit" id="edit" value="Cập nhật" />
      </label></td>
    </tr>
    <div class="a" <br style="color:red;"><?php require_once '../controler/dethi_saveedit.php';?></div>
  </table>
</form>