<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Cập Nhật Thông Tin</title>
    <link href="../assets/style.css" media="screen" rel="stylesheet" type="text/css" />
    <link rel="stylesheet" href="../assets/bootstrap-3.3.6/dist/css/bootstrap.min.css">
<body>
<?php include ("../controler/laythongtinuser.php")?>
<hr size="1" color="#ffff" style="margin:15px auto;" />
  <div class="container"> 
<div class="a" <br style="color:red;"><?php include ("../controler/xulydoithongtin.php")?></div>
 <div class="row"> 
  <div  class="col-xs-12 col-sm-12 col-md-4 well well-sm col-md-offset-4">    

   <legend><a href=""><i class="glyphicon glyphicon-globe"></i></a> Cập Nhật Thông Tin
   </legend> 
   <legend> * Bạn vui lòng nhập đầy đủ thông tin!
   </legend> 
   <form action="" method="post" class="form" role="form">
   	<div class="form-group">
       <div class="row">
     <div class="col-xs-6 col-md-6"> <input class="form-control" id="ho" name="ho" value="<?php echo $row['ho']?>" placeholder="Họ">
     </div> 
     <div class="col-xs-6 col-md-6"> <input class="form-control" id="ten" name="ten" value="<?php echo $row['ten']?>" placeholder="Tên" >
     </div> 
    </div> 
     <div class="form-group"><input class="form-control"  name="email" placeholder="Email" value="<?php echo $row['email']?>" type="email"></div>
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
       <label class="radio-inline"><input  id="inlineCheckbox1" name="sex" value="Nam" type="radio">Nam</label> <label  class="radio-inline"><input name="sex" id="inlineCheckbox2" value="Nữ" type="radio">Nữ </label>
    <br> 
     <br> 
    <br>
    <button class="btn btn-lg btn-primary btn-block"  name="ok"> Cập Nhật</button> 
    <br><br>
    </div>
   </form>
  </div> 
 </div>
</div>
</body>
</html>
</body>
</html>