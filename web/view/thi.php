<?php
ob_start();
session_start();
?>

<?php
$checkuser=isset($_SESSION['id_hs']);
if($checkuser)//nếu không tồn tại ss thì mới cho xem thông tin trang đăng nhâp;
{
?>
<!DOCTYPE html>
<html lang="vi">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>sinhvien</title>
    <link href="../assets/hocsinh/css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" type="text/css" href="../assets/hocsinh/css/sinhvien.css">
     <script type="text/javascript" src="../assets/hocsinh/js/jquery-3.1.1.min.js"></script>
       <script type="text/javascript" src="../assets/hocsinh/js/bootstrap.min.js"></script>
       <script src="../assets/hocsinh/js/angular.min.js"></script>
  </head>
  <body ng-app="" >
    <div id="content" >
	
         <div class="jumbotron" >
		 <!--menutrai-->
              <div class="col-md-2 danhsach">
                <ul class="nav nav-collapse nav-stacked ">
                  <li ><a href="#bailamthi" data-toggle="tab">Làm bài thi</a></li>
                </ul>
              </div>
			 <!--menutrai-->
			 
			   <!--menuphai-->
              <div  class="tab-content col-md-10 danhsach1">
					<!-- xemlichthi -->
					 <?php  include_once("../view/hocsinh_thi.php"); ?>	
 <?php }?>
  </body>
</html>