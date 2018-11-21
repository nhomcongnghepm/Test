<!DOCTYPE html>
<html>
<head>
    <title>Home</title>
    <meta http-equiv="X-UA-Compatible" content="IE=edge"/>
    <meta http-equiv="content-type" content="text/html; charset=utf-8"/>
    <meta name="apple-mobile-web-app-capable" content="yes"/>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link href="../assets/repon.css" type="text/css" rel="stylesheet"/>
    <link href="../assets/giaovien/resources/css/jquery-ui-themes.css" type="text/css" rel="stylesheet"/>
    <link href="../assets/giaovien/resources/css/axure_rp_page.css" type="text/css" rel="stylesheet"/>
    <link href="../assets/giaovien/data/styles.css" type="text/css" rel="stylesheet"/>
    <link href="../assets/giaovien/files/page_5/styles.css" type="text/css" rel="stylesheet"/>
    <link href="../assets/style.css" media="screen" rel="stylesheet" type="text/css" />
    <link href="" type="text/css" rel="stylesheet"/>
    <link href="" type="text/css" rel="stylesheet"/>
    <script src="../assets/giaovien/resources/scripts/jquery-1.7.1.min.js"></script>
    <script src="../assets/giaovien/resources/scripts/jquery-ui-1.8.10.custom.min.js"></script>
    <script src="../assets/giaovien/resources/scripts/prototypePre.js"></script>
    <script src="../assets/giaovien/data/document.js"></script>
    <script src="../assets/giaovien/resources/scripts/prototypePost.js"></script>
    <script src="../assets/giaovien/files/page_5/data.js"></script>
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
    if($rows['quyen']=='Trưởng bộ môn') {
        echo "<script>alert('Bạn không có quyền vào trang này !');window.location='truongbomon.php'</script>";
    } else   if($rows['quyen']=='Học Sinh') {
        echo "<script>alert('Bạn không có quyền vào trang này !');window.location='hocsinh.php'</script>";
    }
    else if($rows['quyen']=='Phòng dào tạo') {
        echo "<script>alert('Bạn không có quyền vào trang này !');window.location='phongdaotao.php'</script>";
    } else  if($rows['quyen']=='Admin') {
        echo "<script>alert('Bạn không có quyền vào trang này !');window.location='admin.php'</script>";
    }
}
else if(!$user)
{
    header('Location: dangnhap.php');
}
?>

<div id="base" class="conten">

    <!-- Carousel DP (Dynamic Panel) -->
    <div id="u174" class="ax_default" data-label="Carousel DP">
        <div id="u174_state0" class="panel_state" data-label="First slide" style="">
            <div id="u174_state0_content" class="panel_state_content">
            </div>
        </div>
        <div id="u174_state1" class="panel_state" data-label="Second slide" style="visibility: hidden;">
            <div id="u174_state1_content" class="panel_state_content">

                <!-- Unnamed (Image) -->
                <div id="u175" class="ax_default image1">
                    <img id="u175_img" class="img " src="../assets/giaovien/images/home/u1.jpg"/>
                </div>
            </div>
        </div>
        <div id="u174_state2" class="panel_state" data-label="Third slide" style="visibility: hidden;">
            <div id="u174_state2_content" class="panel_state_content">

                <!-- Unnamed (Image) -->
                <div id="u176" class="ax_default image1">
                    <img id="u176_img" class="img " src="../assets/giaovien/images/home/u2.jpg"/>
                </div>
            </div>
        </div>
    </div>

    <!-- Unnamed (Rectangle) -->
    <div id="u177" class="ax_default box_1">
        <div id="u177_div" class=""></div>
        <div id="u177_text" class="text ">
            <p><span>Tài Khoản Giáo Viên</span></p>
        </div>
    </div>

    <!-- Unnamed (Rectangle) -->
    <div id="u178" class="ax_default icomoon">
        <div id="u178_div" class=""></div>
    </div>

    <!-- Unnamed (Menu) -->
    <div id="u179" class="ax_default">
        <img id="u179_menu" class="img " src="../assets/giaovien/images/page_5/u179_menu.png" alt="u179_menu"/>

        <!-- Unnamed (Table) -->
        <div id="u180" class="ax_default">

            <!-- Unnamed (Menu Item) -->
            <div id="u181" class="ax_default menu_item">
                <img id="u181_img" class="img " src="../assets/giaovien/images/home/u7.png"/>
                <div id="u181_text" class="text ">
                    <a href="?menu=giaovien"  >   <p><span>GIÁO VIÊN</span></p></a>
                </div>
            </div>

            <!-- Unnamed (Menu Item) -->
            <div id="u182" class="ax_default menu_item">
                <img id="u182_img" class="img " src="../assets/giaovien/images/home/u8.png"/>
                <div id="u182_text" class="text ">
                    <a href="?menu=cauhoi_list">       <p><span>&nbsp;&nbsp; &nbsp; &nbsp;&nbsp; Tạo câu hỏi thi</span></p></a>
                </div>
            </div>

            <!-- Unnamed (Menu Item) -->
            <div id="u183" class="ax_default menu_item">
                <img id="u183_img" class="img " src="../assets/giaovien/images/home/u8.png"/>
                <div id="u183_text" class="text ">
                    <a href="?menu=dethi_list">   <p><span>&nbsp;&nbsp; &nbsp; &nbsp; &nbsp; Tạo đề thi</span></p></a>
                </div>
            </div>

            <!-- Unnamed (Menu Item) -->
            <div id="u184" class="ax_default menu_item">
                <img id="u184_img" class="img " src="../assets/giaovien/images/home/u7.png"/>
                <div id="u184_text" class="text ">
                    <p><span>TÀI KHOẢN</span></p>
                </div>
            </div>

            <!-- Unnamed (Menu Item) -->
            <div id="u185" class="ax_default menu_item">
                <img id="u185_img" class="img " src="../assets/giaovien/images/home/u10.png"/>
                <div id="u185_text" class="text ">
                    <a href="?menu=capnhatthongtin" >     <p><span>&nbsp;&nbsp; &nbsp; &nbsp; Cập nhật thông tin</span></p></a>
                </div>
            </div>

            <!-- Unnamed (Menu Item) -->
            <div id="u186" class="ax_default menu_item">
                <img id="u186_img" class="img " src="../assets/giaovien/images/home/u11.png"/>
                <div id="u186_text" class="text ">
                    <a href="?menu=doimatkhau" >   <p><span>&nbsp;&nbsp; &nbsp; &nbsp; Đổi mật khẩu</span></p></a>
                </div>
            </div>

            <!-- Unnamed (Menu Item) -->
            <div id="u187" class="ax_default menu_item">
                <img id="u187_img" class="img " src="../assets/giaovien/images/home/u12.png"/>
                <div id="u187_text" class="text ">
                    <a href="../controler/xulydangxuat.php" >    <p><span>&nbsp;&nbsp; &nbsp; &nbsp; Đăng xuất</span></p></a>
                </div>
            </div>
        </div>
    </div>



    <!-- Unnamed (SVG) -->
    <div id="u189" class="ax_default image1">
        <img id="u189_img" class="img " src="../assets/giaovien/images/home/u14.svg"/>
    </div>

    <!-- Unnamed (SVG) -->
    <div id="u190" class="ax_default image1">
        <img id="u190_img" class="img " src="../assets/giaovien/images/home/u15.svg"/>
    </div>

    <!-- Unnamed (SVG) -->
    <div id="u191" class="ax_default image1">
        <img id="u191_img" class="img " src="../assets/giaovien/images/home/u16.svg"/>
    </div>

    <!-- Unnamed (Image) -->
    <div id="u192" class="ax_default image">
        <img id="u192_img" class="img " src="../assets/giaovien/images/home/u17.png"/>
    </div>

    <!-- Unnamed (Rectangle) -->
    <div id="u193" class="ax_default heading_11">
        <div id="u193_div" class=""></div>
        <div id="u193_text" class="text ">
            <p><span>08 17564369</span></p>
        </div>
    </div>

    <!-- Unnamed (Rectangle) -->
    <div id="u194" class="ax_default heading_11">
        <div id="u194_div" class=""></div>
        <div id="u194_text" class="text ">
            <p><span>lmTn@gmail.com</span></p>
        </div>
    </div>

    <!-- Unnamed (Image) -->
    <div id="u195" class="ax_default image">
        <img id="u195_img" class="img " src="../assets/giaovien/images/home/u20.png"/>
    </div>

    <!-- Unnamed (Image) -->
    <div id="u196" class="ax_default image">
        <img id="u196_img" class="img " src="../assets/giaovien/images/home/u21.png"/>
    </div>

    <!-- Unnamed (Rectangle) -->
    <div id="u197" class="ax_default heading_11">
        <div id="u197_div" class=""></div>
        <div id="u197_text" class="text ">
            <p><span>Copyright @ 2018 Edume. All right reserved </span></p>
        </div>
    </div>

    <!-- Unnamed (SVG) -->
    <div id="u198" class="ax_default image1">
        <img id="u198_img" class="img " src="../assets/giaovien/images/home/u24.svg"/>
    </div>

    <div id="u200" class="ax_default icon">
        <img id="u200_img" class="img " src="../assets/giaovien/images/page_5/u200.png"/>
    </div>
    <!-- Unnamed (Rectangle) -->
    <div id="u199" class="ax_default box_1">
        <div id="u199_div" class=""><div id="u25_div" class=""><?php include ("../controler/giaovien.php")?></div></div>
    </div>

    <!-- Unnamed (Shape) -->

</div>

</body>
</html>
