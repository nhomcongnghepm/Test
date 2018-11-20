<?php
ob_start();
session_start();
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
    <br>
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
              <?php require_once '../modal/init.php'; 
			  
			  ?>
					 <?php  include_once("../controler/lambaithi.php"); ?>
    </div><!-- content -->
 <script type="text/javascript">
       $("#NutKiemTra").click(function(){
            var y= document.getElementById("NhapMaSoSinhVien").value.length;
             var z= document.getElementById("NhapSoCMND").value.length;
           if(y>0 && z>0 )
              {
                if(document.getElementById("NhapMaSoSinhVien").value=='<?php echo $_SESSION['tai_khoan']; ?>' && document.getElementById("NhapSoCMND").value=='<?php echo $_SESSION['mat_khau']; ?>')
                {
					document.cookie = "time_exam=3600;";
                  $("#True").slideDown("slow");
                  $("#NotFull").slideUp("quick");
                  $("#NotTrue").slideUp("quick");
                }
                else
                {
                  $("#True").slideUp("slow");
                  $("#NotFull").slideUp("quick");
                  $("#NotTrue").slideDown("quick");
                }
              }
            else
              {
                $("#NotFull").slideDown("slow");
                $("#True").slideUp("quick");
                $("#NotTrue").slideUp("quick");
			  }
       });
   </script>        
  </body>
</html>