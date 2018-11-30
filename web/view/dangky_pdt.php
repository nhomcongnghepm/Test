<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Đăng Ký</title>
<link rel="stylesheet" href="../../assets/bootstrap-3.3.6/dist/css/bootstrap.min.css"><script src="../../assets/bootstrap-3.3.6/dist/js/bootstrap.min.js"></script>
<link rel="stylesheet" href="../../assets/dangky.css">
<body>
<br>
<div style="margin:20px 70px 10px; font-size:14px;">
<font size="2" face="Tahoma"><b>Quản lý tài khoản <img src="../../assets/image/bl3.gif" border="0" />Thêm tài khoản</b></font></div>
  <div class="container"> 
 <div class="row"> 
  <div class="col-xs-12 col-sm-12 col-md-4 well well-sm col-md-offset-4"> 
   <legend><a href=""><i class="glyphicon glyphicon-globe"></i></a> Đăng ký phòng đào tạo!   </legend> 
   <legend> * Bạn vui lòng nhập đầy đủ các ô!
   </legend> 
   <form action="?menu=taikhoan_news" method="post" class="form" role="form">
   	<div class="form-group">
        <div class="a" style="color:red;"><?php include ("../controler/xulydangkyadmin.php")?></div>
       <div class="row">
     <div class="col-xs-6 col-md-6"> <input class="form-control" id="ho" name="ho" placeholder="Họ">
     </div> 
     <div class="col-xs-6 col-md-6"> <input class="form-control" id="ten" name="ten" placeholder="Tên" > 
     </div> 
    </div> 
     <div class="form-group"><input class="form-control"  name="username" placeholder="Tên đăng nhập" type="text" id="username"></div>
     <div class="form-group"><input class="form-control"  name="email" placeholder="Email" type="email"></div>
     <div class="form-group"><input class="form-control"  name="pwd1" placeholder="Mật khẩu" type="password"> <input class="form-control" id="pwd2" name="pwd2" placeholder="Nhập lại mật khẩu" type="password"></div>
    <label for=""> Ngày sinh</label> 
    <div class="row"> 
    <?php include("../controler/function.php") ?>
     <div class="col-xs-4 col-md-4"> <select  class="form-control" name="day" placeholder="day"> <option value="day">Ngày <?php day();?></option></select> 
     </div> 
     <div class="col-xs-4 col-md-4"> <select  class="form-control" name="month"> <option value="month">Tháng <?php  thang();?></option></select>
     </div> 
     <div class="col-xs-4 col-md-4"> <select  class="form-control" name="year"> <option value="year">Năm <?php  nam();?></option></select>
     </div>
    </div>
   <label for="">Mời bạn hãy chọn quyền cho giáo viên</label>
        <select name="quyen" class="form-control">
           <option value="Admin">Admin</option>
           <option value="Phòng dào tạo">Phòng dào tạo</option>
         </select></div>
       <label for="">Giới tính</label><label class="radio-inline">&nbsp;&nbsp;<input  id="inlineCheckbox1" name="sex" value="Nam" type="radio">Nam</label> <label  class="radio-inline"><input name="sex" id="inlineCheckbox2" value="Nữ" type="radio">Nữ </label>
    <center><button class="btn btn-lg btn-primary btn-block"  name="login"> Đăng ký</button> </center>
    <br><br>
     <div class="a" <br style="color:red;"><?php include ("../controler/xulydangky_nulladmin.php")?></div>
    </div>
   </form>
  </div> 
 </div>
</div>
</body>
</html>
</body>
</html>