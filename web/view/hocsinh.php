<!DOCTYPE html>
<html>
<head>
    <title>Home</title>
    <meta http-equiv="X-UA-Compatible" content="IE=edge"/>
    <meta http-equiv="content-type" content="text/html; charset=utf-8"/>
    <meta name="apple-mobile-web-app-capable" content="yes"/>
    <link href="../assets/hocsinh/resources/css/jquery-ui-themes.css" type="text/css" rel="stylesheet"/>
    <link href="../assets/hocsinh/resources/css/axure_rp_page.css" type="text/css" rel="stylesheet"/>
    <link href="../assets/hocsinh/data/styles.css" type="text/css" rel="stylesheet"/>
    <link href="../assets/hocsinh/files/home/styles.css" type="text/css" rel="stylesheet"/>
    <link href="" type="text/css" rel="stylesheet"/>
    <link href="" type="text/css" rel="stylesheet"/>
    <script src="../assets/hocsinh/resources/scripts/jquery-1.7.1.min.js"></script>
    <script src="../assets/hocsinh/resources/scripts/jquery-ui-1.8.10.custom.min.js"></script>
    <script src="../assets/hocsinh/resources/scripts/prototypePre.js"></script>
    <script src="../assets/hocsinh/data/document.js"></script>
    <script src="../assets/hocsinh/resources/scripts/prototypePost.js"></script>
    <script src="../assets/hocsinh/files/home/data.js"></script>
    <script type="text/javascript">
        $axure.utils.getTransparentGifPath = function() { return 'resources/images/transparent.gif'; };
        $axure.utils.getOtherPath = function() { return 'resources/Other.html'; };
        $axure.utils.getReloadPath = function() { return 'resources/reload.html'; };
    </script>
</head>
<body>
<?php
error_reporting(0);
require_once '../modal/init.php';
$u=$_SESSION['user'];
$sql=$db->laythongtinuser($u);
$a=$db->query($sql);
$rows=$db->lay_rows($a);
if($user) {
    if($rows['quyen']=='Giáo Viên') {
        echo "<script>alert('Bạn không có quyền vào trang này !');window.location='giaovien.php'</script>";
    }
    else if($rows['quyen']=='Trưởng bộ môn') {
        echo "<script>alert('Bạn không có quyền vào trang này !');window.location='truongbomon.php'</script>";
    } else if($rows['quyen']=='Phòng dào tạo') {
        echo "<script>alert('Bạn không có quyền vào trang này !');window.location='pdt.php'</script>";
    } else  if($rows['quyen']=='Admin') {
        echo "<script>alert('Bạn không có quyền vào trang này !');window.location='../gentelella-master/production/admin.php'</script>";
    }
}
else if(!$user)
{
    header('Location: dangnhap.php');
}
?>
<div id="base" class="">

    <!-- Carousel DP (Dynamic Panel) -->
    <div id="u0" class="ax_default" data-label="Carousel DP">
        <div id="u0_state0" class="panel_state" data-label="First slide" style="">
            <div id="u0_state0_content" class="panel_state_content">
            </div>
        </div>
        <div id="u0_state1" class="panel_state" data-label="Second slide" style="visibility: hidden;">
            <div id="u0_state1_content" class="panel_state_content">

                <!-- Unnamed (Image) -->
                <div id="u1" class="ax_default image1">
                    <img id="u1_img" class="img " src="../assets/hocsinh/images/home/u1.jpg"/>
                </div>
            </div>
        </div>
        <div id="u0_state2" class="panel_state" data-label="Third slide" style="visibility: hidden;">
            <div id="u0_state2_content" class="panel_state_content">

                <!-- Unnamed (Image) -->
                <div id="u2" class="ax_default image1">
                    <img id="u2_img" class="img " src="../assets/hocsinh/images/home/u2.jpg"/>
                </div>
            </div>
        </div>
    </div>

    <!-- Unnamed (Rectangle) -->
    <div id="u3" class="ax_default box_1">
        <div id="u3_div" class=""></div>
        <div id="u3_text" class="text ">
            <p><span>Tài Khoản Học Sinh</span></p>
        </div>
    </div>

    <!-- Unnamed (Rectangle) -->
    <div id="u4" class="ax_default icomoon">
        <div id="u4_div" class=""></div>
    </div>

    <!-- Unnamed (Menu) -->
    <div id="u5" class="ax_default">
        <img id="u5_menu" class="img " src="../assets/hocsinh/images/home/u5_menu.png" alt="u5_menu"/>

        <!-- Unnamed (Table) -->
        <div id="u6" class="ax_default">

            <!-- Unnamed (Menu Item) -->
            <div id="u7" class="ax_default menu_item">
                <img id="u7_img" class="img " src="../assets/hocsinh/images/home/u7.png"/>
                <div id="u7_text" class="text ">
                    <a href="hocsinh.php" >  <p><span>HỌC SINH</span></p></a>
                </div>
            </div>

            <!-- Unnamed (Menu Item) -->
            <div id="u8" class="ax_default menu_item">
                <img id="u8_img" class="img " src="../assets/hocsinh/images/home/u8.png"/>
                <div id="u8_text" class="text ">
                        <img id="u26_img" class="img " src="../assets/hocsinh/images/home/u26.svg"/>
                    <a href="?menu=thi" > <p><span>&nbsp;&nbsp; &nbsp; &nbsp; Thi</span></p></a>
                </div>
            </div>

            <!-- Unnamed (Menu Item) -->
            <div id="u9" class="ax_default menu_item">
                <img id="u9_img" class="img " src="../assets/hocsinh/images/home/u8.png"/>
                <div id="u9_text" class="text ">
                    <img id="u27_img" class="img " src="../assets/hocsinh/images/home/u27.svg"/>
                    <a href="?menu=diemthi" ><p><span>&nbsp;&nbsp; &nbsp; &nbsp;&nbsp; Xem bảng điểm</span></p></a>
                </div>
            </div>

            <!-- Unnamed (Menu Item) -->
            <div id="u10" class="ax_default menu_item">
                <img id="u10_img" class="img " src="../assets/hocsinh/images/home/u8.png"/>
                <div id="u10_text" class="text ">
                    <img id="u28_img" class="img " src="../assets/hocsinh/images/home/u28.svg"/>
                    <a href="?menu=lichthi"><p><span>&nbsp;&nbsp; &nbsp; &nbsp;&nbsp; Xem lịch thi</span></p></a>
                </div>
            </div>

            <!-- Unnamed (Menu Item) -->
            <div id="u11" class="ax_default menu_item">
                <img id="u11_img" class="img " src="../assets/hocsinh/images/home/u7.png"/>
                <div id="u11_text" class="text ">
                    <p><span>TÀI KHOẢN</span></p>
                </div>
            </div>

            <!-- Unnamed (Menu Item) -->
            <div id="u12" class="ax_default menu_item">
                <img id="u12_img" class="img " src="../assets/hocsinh/images/home/u12.png"/>
                <div id="u12_text" class="text ">
                    <a href="?menu=capnhatthongtin">  <p><span>&nbsp;&nbsp; &nbsp; &nbsp; Cập nhật thông tin</span></p></a>
                </div>
            </div>

            <!-- Unnamed (Menu Item) -->
            <div id="u13" class="ax_default menu_item">
                <img id="u13_img" class="img " src="../assets/hocsinh/images/home/u13.png"/>
                <div id="u13_text" class="text ">
                    <a href="?menu=doimatkhau"> <p><span>&nbsp;&nbsp; &nbsp; &nbsp; Đổi mật khẩu</span></p></a>
                </div>
            </div>

            <!-- Unnamed (Menu Item) -->
            <div id="u14" class="ax_default menu_item">
                <img id="u14_img" class="img " src="../assets/hocsinh/images/home/u14.png"/>
                <div id="u14_text" class="text ">
                    <a href="../controler/xulydangxuat.php"> <p><span>&nbsp;&nbsp; &nbsp; &nbsp; Đăng xuất</span></p></a>
                </div>
            </div>
        </div>
    </div>
    <!-- Unnamed (SVG) -->
    <div id="u16" class="ax_default image1">
        <img id="u16_img" class="img " src="../assets/hocsinh/images/home/u16.svg"/>
    </div>

    <!-- Unnamed (SVG) -->
    <div id="u17" class="ax_default image1">
        <img id="u17_img" class="img " src="../assets/hocsinh/images/home/u17.svg"/>
    </div>

    <!-- Unnamed (SVG) -->
    <div id="u18" class="ax_default image1">
        <img id="u18_img" class="img " src="../assets/hocsinh/images/home/u18.svg"/>
    </div>

    <!-- Unnamed (Image) -->
    <div id="u19" class="ax_default image">
        <img id="u19_img" class="img " src="../assets/hocsinh/images/home/u19.png"/>
    </div>

    <!-- Unnamed (Rectangle) -->
    <div id="u20" class="ax_default heading_11">
        <div id="u20_div" class=""></div>
        <div id="u20_text" class="text ">
            <p><span>08 17564369</span></p>
        </div>
    </div>

    <!-- Unnamed (Rectangle) -->
    <div id="u21" class="ax_default heading_11">
        <div id="u21_div" class=""></div>
        <div id="u21_text" class="text ">
            <p><span>lmTn@gmail.com</span></p>
        </div>
    </div>

    <!-- Unnamed (Image) -->
    <div id="u22" class="ax_default image">
        <img id="u22_img" class="img " src="../assets/hocsinh/images/home/u22.png"/>
    </div>

    <!-- Unnamed (Image) -->
    <div id="u23" class="ax_default image">
        <img id="u23_img" class="img " src="../assets/hocsinh/images/home/u23.png"/>
    </div>

    <!-- Unnamed (Rectangle) -->
    <div id="u24" class="ax_default heading_11">
        <div id="u24_div" class=""></div>
        <div id="u24_text" class="text ">
            <p><span>Copyright @ 2018 Edume. All right reserved </span></p>
        </div>
    </div>

    <!-- Unnamed (Rectangle) -->
    <div id="u25" class="ax_default box_1">
        <div id="u25_div" class=""><?php include("../controler/hocsinh.php")?></div>
    </div>


    <!-- Unnamed (SVG) -->
    <div id="u28" class="ax_default image1">
    </div>
</div>
</body>
</html>
