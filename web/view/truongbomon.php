<!DOCTYPE html>
<html>
<head>
    <title>Page 1</title>
    <meta http-equiv="X-UA-Compatible" content="IE=edge"/>
    <meta http-equiv="content-type" content="text/html; charset=utf-8"/>
    <meta name="apple-mobile-web-app-capable" content="yes"/>
    <link href="../assets/truongbomon/resources/css/jquery-ui-themes.css" type="text/css" rel="stylesheet"/>
    <link href="../assets/truongbomon/resources/css/axure_rp_page.css" type="text/css" rel="stylesheet"/>
    <link href="../assets/truongbomon/data/styles.css" type="text/css" rel="stylesheet"/>
    <link href="../assets/truongbomon/files/page_1/styles.css" type="text/css" rel="stylesheet"/>
    <link href="" type="text/css" rel="stylesheet"/>
    <link href="" type="text/css" rel="stylesheet"/>
    <script src="../assets/truongbomon/resources/scripts/jquery-1.7.1.min.js"></script>
    <script src="../assets/truongbomon/resources/scripts/jquery-ui-1.8.10.custom.min.js"></script>
    <script src="../assets/truongbomon/resources/scripts/prototypePre.js"></script>
    <script src="../assets/truongbomon/data/document.js"></script>
    <script src="../assets/truongbomon/resources/scripts/prototypePost.js"></script>
    <script src="../assets/truongbomon/files/page_1/data.js"></script>
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
    } else if($rows['quyen']=='Học Sinh') {
        echo "<script>alert('Bạn không có quyền vào trang này !');window.location='hocsinh.php'</script>";
    } else if($rows['quyen']=='Phòng dào tạo') {
        echo "<script>alert('Bạn không có quyền vào trang này !');window.location='pdt.php'</script>";
    } else  if($rows['quyen']=='Admin') {
        echo "<script>alert('Bạn không có quyền vào trang này !');window.location='../gentelella-master/production/admin.php</script>";
    }
}
else if(!$user)
    {
        header('Location: dangnhap.php');
    }
?>
<div id="base" class="">

    <!-- Carousel DP (Dynamic Panel) -->
    <div id="u39" class="ax_default" data-label="Carousel DP">
        <div id="u39_state0" class="panel_state" data-label="First slide" style="">
            <div id="u39_state0_content" class="panel_state_content">
            </div>
        </div>
        <div id="u39_state1" class="panel_state" data-label="Second slide" style="visibility: hidden;">
            <div id="u39_state1_content" class="panel_state_content">

                <!-- Unnamed (Image) -->
                <div id="u40" class="ax_default image1">
                    <img id="u40_img" class="img " src="../assets/truongbomon/images/home/u1.jpg"/>
                </div>
            </div>
        </div>
        <div id="u39_state2" class="panel_state" data-label="Third slide" style="visibility: hidden;">
            <div id="u39_state2_content" class="panel_state_content">

                <!-- Unnamed (Image) -->
                <div id="u41" class="ax_default image1">
                    <img id="u41_img" class="img " src="../assets/truongbomon/images/home/u2.jpg"/>
                </div>
            </div>
        </div>
    </div>

    <!-- Unnamed (Rectangle) -->
    <div id="u42" class="ax_default box_1">
        <div id="u42_div" class=""></div>
        <div id="u42_text" class="text ">
            <p><span>Tài Khoản Trưởng Bộ Môn</span></p>
        </div>
    </div>

    <!-- Unnamed (Rectangle) -->
    <div id="u43" class="ax_default icomoon">
        <div id="u43_div" class=""></div>
    </div>

    <!-- Unnamed (Menu) -->
    <div id="u44" class="ax_default">
        <img id="u44_menu" class="img " src="../assets/truongbomon/images/page_1/u44_menu.png" alt="u44_menu"/>

        <!-- Unnamed (Table) -->
        <div id="u45" class="ax_default">

            <!-- Unnamed (Menu Item) -->
            <div id="u46" class="ax_default menu_item">
                <img id="u46_img" class="img " src="../assets/truongbomon/images/home/u7.png"/>
                <div id="u46_text" class="text ">
                      <a href="truongbomon.php" >   <p><span>TRƯỞNG BỘ MÔN</span></p></a>
                </div>
            </div>

            <!-- Unnamed (Menu Item) -->
            <div id="u47" class="ax_default menu_item">
                <img id="u47_img" class="img " src="../assets/truongbomon/images/home/u8.png"/>
                <div id="u47_text" class="text ">
                    <a href="?menu=cauhoi_list" >   <p><span>&nbsp;&nbsp; &nbsp; &nbsp; &nbsp; Tạo câu hỏi thi</span></p></a>
                </div>
            </div>

            <!-- Unnamed (Menu Item) -->
            <div id="u48" class="ax_default menu_item">
                <img id="u48_img" class="img " src="../assets/truongbomon/images/home/u8.png"/>
                <div id="u48_text" class="text ">
                    <a href="?menu=dethi_list" >    <p><span>&nbsp;&nbsp; &nbsp; &nbsp; &nbsp;&nbsp; Tạo đề thi</span></p>
                </div>
            </div>

            <!-- Unnamed (Menu Item) -->
            <div id="u49" class="ax_default menu_item">
                <img id="u49_img" class="img " src="../assets/truongbomon/images/home/u8.png"/>
                <div id="u49_text" class="text ">
                    <a href="?menu=duyetdethi" >   <p><span>&nbsp;&nbsp; &nbsp; &nbsp; &nbsp; Duyệt đề thi</span></p>
                </div>
            </div>

            <!-- Unnamed (Menu Item) -->
            <div id="u50" class="ax_default menu_item">
                <img id="u50_img" class="img " src="../assets/truongbomon/images/home/u7.png"/>
                <div id="u50_text" class="text ">
                    <p><span>TÀI KHOẢN</span></p>
                </div>
            </div>

            <!-- Unnamed (Menu Item) -->
            <div id="u51" class="ax_default menu_item">
                <img id="u51_img" class="img " src="../assets/truongbomon/images/home/u11.png"/>
                <div id="u51_text" class="text ">
                    <a href="?menu=capnhatthongtin" > <p><span>&nbsp;&nbsp; &nbsp; &nbsp;&nbsp; Cập nhật thông tin</span></p></a>
                </div>
            </div>

            <!-- Unnamed (Menu Item) -->
            <div id="u52" class="ax_default menu_item">
                <img id="u52_img" class="img " src="../assets/truongbomon/images/home/u12.png"/>
                <div id="u52_text" class="text ">
                    <a href="?menu=doimatkhau" ><p><span>&nbsp;&nbsp; &nbsp; &nbsp; &nbsp; Đổi mật khẩu</span></p></a>
                </div>
            </div>

            <!-- Unnamed (Menu Item) -->
            <div id="u53" class="ax_default menu_item">
                <img id="u53_img" class="img " src="../assets/truongbomon/images/home/u13.png"/>
                <div id="u53_text" class="text ">
                    <a href="../controler/xulydangxuat.php">   <p><span>&nbsp;&nbsp; &nbsp; &nbsp; &nbsp; Đăng xuất</span></p></a>
                </div>
            </div>
        </div>
    </div>
    <!-- Unnamed (SVG) -->
    <div id="u55" class="ax_default image1">
        <img id="u55_img" class="img " src="../assets/truongbomon/images/home/u15.svg"/>
    </div>

    <!-- Unnamed (SVG) -->
    <div id="u56" class="ax_default image1">
        <img id="u56_img" class="img " src="../assets/truongbomon/images/home/u16.svg"/>
    </div>

    <!-- Unnamed (SVG) -->
    <div id="u57" class="ax_default image1">
        <img id="u57_img" class="img " src="../assets/truongbomon/images/home/u17.svg"/>
    </div>

    <!-- Unnamed (SVG) -->
    <div id="u58" class="ax_default image1">
        <img id="u58_img" class="img " src="../assets/truongbomon/images/home/u18.svg"/>
    </div>

    <!-- Unnamed (Image) -->
    <div id="u59" class="ax_default image">
        <img id="u59_img" class="img " src="../assets/truongbomon/images/home/u19.png"/>
    </div>

    <!-- Unnamed (Rectangle) -->
    <div id="u60" class="ax_default heading_11">
        <div id="u60_div" class=""></div>
        <div id="u60_text" class="text ">
            <p><span>08 17564369</span></p>
        </div>
    </div>

    <!-- Unnamed (Rectangle) -->
    <div id="u61" class="ax_default heading_11">
        <div id="u61_div" class=""></div>
        <div id="u61_text" class="text ">
            <p><span>lmTn@gmail.com</span></p>
        </div>
    </div>

    <!-- Unnamed (Image) -->
    <div id="u62" class="ax_default image">
        <img id="u62_img" class="img " src="../assets/truongbomon/images/home/u22.png"/>
    </div>

    <!-- Unnamed (Image) -->
    <div id="u63" class="ax_default image">
        <img id="u63_img" class="img " src="../assets/truongbomon/images/home/u23.png"/>
    </div>

    <!-- Unnamed (Rectangle) -->
    <div id="u64" class="ax_default heading_11">
        <div id="u64_div" class=""></div>
        <div id="u64_text" class="text ">
            <p><span>Copyright @ 2018 Edume. All right reserved </span></p>
        </div>
    </div>

    <!-- Unnamed (SVG) -->
    <div id="u65" class="ax_default image1">
        <img id="u65_img" class="img " src="../assets/truongbomon/images/home/u25.svg"/>
    </div>
    <div id="u67" class="ax_default icon">
        <img id="u67_img" class="img " src="../assets/truongbomon/images/page_1/u67.png"/>
    </div>
    <!-- Unnamed (Rectangle) -->
    <div id="u66" class="ax_default box_1">
        <div id="u66_div" class=""><?php include ("../controler/truongbomon.php")?></div>
    </div>
</div>
</body>
</html>
