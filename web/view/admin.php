<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<link rel="stylesheet" type="text/css" href="../assets/admin.css"/>
<link rel="shortcut icon" href="favicon.ico" />
<title></title>
</head>
<body>
<?php
error_reporting(0);
require_once '../modal/init.php';
		if(!$user) {
            header('Location: dangnhap.php'); // Di chuyển đến trang chủ
        }
?>    
<div id="page-wrap">
    	<div id="header">
        	<h1 id="logo"><a href="admin.php">logo</a></h1>
        </div>        
        <div id="top-bar">
        	<ul id="menu-page-menu" class="group">
            	<li><a href="../view/admin.php">Home</a></li>                 
                <li><a href="?menu=dethi_list">Quản lý đề thi</a></li>
                
                <li><a href="?menu=cauhoi_list">Quản lý câu hỏi</a></li>
                	
                <li><a href="?menu=quanlytaikhoan">Quản lý tài khoản</a></li>
                	
                <li><a href="?menu=quanlyhocsinh">Quản lý học sinh</a></li>
             
                <li><a href="#">Công cụ</a>
                	<ul>
                        <li><a href="">kết quả thi</a></li>
                        <li><a href="#">Thống kê</a></li>
                        <li><a href="#">Backup</a></li>
                        <li><a href="#">Sao lưu</a></li>
          			</ul>
                </li>
                <!--chao administrator-->
                <li style="color:#FF0; font-weight:bold; margin:3px 5px; font-size:14px;">Hello :
                        <li id="xinchao"><?php echo $_SESSION['user'];?></li>
                        <a href="../controler/xulydangxuat.php"><span style="margin:5px 5px;"><img border="0" src="../assets/image/logout.png"/></span></a>
                </li>	
            </ul>
          </div>
          <div id="rsidebar">
                <h5 style="margin-top:0px; margin-bottom:5px;"></h5>
				<?php include ("../controler/admin.php") ?>
            </div>
    </div><!-- end page-wrap-->
</body>
</html>