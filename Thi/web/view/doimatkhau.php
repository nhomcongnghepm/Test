<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Đổi Mật Khẩu</title>
<link rel="stylesheet" href="../assets/bootstrap-3.3.6/dist/css/bootstrap.min.css " />
    <script src="../assets/bootstrap-3.3.6/dist/js/bootstrap.min.js"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/js/jquery-1.11.1.min.js"></script>
<script src='https://www.google.com/recaptcha/api.js?hl=vi'></script></head>
<body>
  <div class="container"> 
 <h1 class="text-center">Đổi Mật Khẩu tại đây</h1> 
 <div class="row"> 
  <div class="col-xs-12 col-sm-12 col-md-4 well well-sm col-md-offset-4"> 
   <legend><a href=""><i class="glyphicon glyphicon-globe"></i></a> Đổi mật khẩu!
   </legend> 
   <legend> * Bạn vui lòng nhập đầy đủ thông tin!
   </legend> 
   <form action="../view/doimatkhau.php" method="post" class="form" role="form">
   	<div class="form-group">
     <div class="form-group"><input class="form-control"  name="old_pw" placeholder="Mật khẩu cũ" type="password"></div>  <div class="form-group"><input class="form-control"  name="new_pw" placeholder="Mật khẩu mới" type="password"></div>  <div class="form-group"> <input class="form-control" id="pwd2" name="pre_pw" placeholder="Nhập lại mật khẩu mới" type="password"></div>
    <button class="btn btn-lg btn-primary btn-block"  name="dongy">Thay Đổi</button> 
    <br><div class="a" <br style="color:red;"><?php include ("../controler/xulydoimatkhau.php")?></div><br>
    </div>
   </form>
  </div> 
 </div>
</div>
</body>
</html>
</body>
</html>