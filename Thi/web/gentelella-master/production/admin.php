<?php
error_reporting(0);
require_once '../modal/init.php';
$u=$_SESSION['user'];
$sql=$db->laythongtinuser($u);
$a=$db->query($sql);
$rows=$db->lay_rows($a);
if($user) {
    if($rows['quyen']=='Giáo Viên') {
        echo "<script>alert('Bạn không có quyền vào trang này !');window.location='../../view/giaovien.php'</script>";
    }
    else if($rows['quyen']=='Trưởng bộ môn') {
        echo "<script>alert('Bạn không có quyền vào trang này !');window.location='../../view/truongbomon.php'</script>";
    } else if($rows['quyen']=='Phòng dào tạo') {
        echo "<script>alert('Bạn không có quyền vào trang này !');window.location='../../view/pdt.php'</script>";
    } else  if($rows['quyen']=='Học Sinh') {
        echo "<script>alert('Bạn không có quyền vào trang này !');window.location='../../view/hocsinh.php'</script>";
    }
}
else if(!$user)
{
    header('Location: ../../view/dangnhap.php');
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
    <!-- Meta, title, CSS, favicons, etc. -->
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>Admin </title>

    <!-- Bootstrap -->
    <link href="../vendors/bootstrap/dist/css/bootstrap.min.css" rel="stylesheet">
    <!-- Font Awesome -->
    <link href="../vendors/font-awesome/css/font-awesome.min.css" rel="stylesheet">
    <!-- NProgress -->
    <link href="../vendors/nprogress/nprogress.css" rel="stylesheet">
    <!-- bootstrap-wysiwyg -->
    <link href="../vendors/google-code-prettify/bin/prettify.min.css" rel="stylesheet">

    <!-- Custom styling plus plugins -->
    <link href="../build/css/custom.min.css" rel="stylesheet">
</head>
<body class="nav-md">
<div class="container body">
    <div class="main_container">
        <div class="col-md-3 left_col">
            <div class="left_col scroll-view">
                <div class="navbar nav_title" style="border: 0;">
                    <a href="admin.php" class="site_title"><i class="fa fa-paw"></i> <span>Admin!</span></a>
                </div>
                <div class="clearfix"></div>
                <!-- menu profile quick info -->
                <div class="profile clearfix">
                    <div class="profile_pic">
                        <img src="images/img.jpg" alt="..." class="img-circle profile_img">
                    </div>
                    <div class="profile_info">
                        <span>Welcome,</span>
                        <h2><?php echo $rows['ho'].' '.$rows['ten'];?></h2>
                    </div>
                </div>
                <br />
                <div id="sidebar-menu" class="main_menu_side hidden-print main_menu">
                    <div class="menu_section">
                        <h3>Admin</h3>
                        <ul class="nav side-menu">
                            <li><a href="?menu=home"><i class="fa fa-home"></i> Home</a></li>
                            </li>
                            <li><a href="?menu=quanlytaikhoan"><i class="fa fa-home"></i> Quản lý tài khoản </a>
                            </li>
                            <li><a href="?menu=quanlyhocsinh"><i class="fa fa-edit"></i> Quản lý học sinh</a
                                ></li>
                            <li><a href="?menu=quanlygiaovien"><i class="fa fa-desktop"></i> Quản lý giáo viên </a>
                            </li>
                            <li><a href="../controler/xulydangxuat.php"><i class="fa fa-desktop"></i> Đăng xuất </a>
                            </li>
                        </ul>
                    </div>
                </div>
                <div class="sidebar-footer hidden-small">
                    <a data-toggle="tooltip" data-placement="top" title="Logout" href="login.html">
                        <span class="glyphicon glyphicon-off" aria-hidden="true"></span>
                    </a>
                </div>
            </div>
        </div>
        <div class="top_nav">
            <div class="nav_menu">
                <nav>
                    <div class="nav toggle">
                        <a id="menu_toggle"><i class="fa fa-bars"></i></a>
                    </div>

                    <ul class="nav navbar-nav navbar-right">
                        <li class="">
                            <a href="javascript" class="user-profile dropdown-toggle" data-toggle="dropdown" aria-expanded="false">
                                <img src="images/img.jpg" alt=""><?php echo $rows['ho'].' '.$rows['ten'];?>
                            </a>
                            <ul class="dropdown-menu dropdown-usermenu pull-right">
                                <li><a href="../controler/xulydangxuat.php"><i class="fa fa-sign-out pull-right"></i> Log Out</a></li>
                            </ul>
                        </li>
                    </ul>
                    </li>
                    </ul>
                </nav>
            </div>
        </div>
        <div class="right_col" role="main">
            <div class="row">
                <div class="col-md-12">
                    <?php include('../controler/admin.php')?>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- jQuery -->
<script src="../vendors/jquery/dist/jquery.min.js"></script>
<!-- Bootstrap -->
<script src="../vendors/bootstrap/dist/js/bootstrap.min.js"></script>
<!-- FastClick -->
<script src="../vendors/fastclick/lib/fastclick.js"></script>
<!-- NProgress -->
<script src="../vendors/nprogress/nprogress.js"></script>
<!-- bootstrap-wysiwyg -->
<script src="../vendors/bootstrap-wysiwyg/js/bootstrap-wysiwyg.min.js"></script>
<script src="../vendors/jquery.hotkeys/jquery.hotkeys.js"></script>
<script src="../vendors/google-code-prettify/src/prettify.js"></script>

<!-- Custom Theme Scripts -->
<script src="../build/js/custom.min.js"></script>

</body>
</html>