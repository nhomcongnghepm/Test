<!DOCTYPE html>
<html>
<head>
    <title>Home</title>
    <meta http-equiv="X-UA-Compatible" content="IE=edge"/>
    <meta http-equiv="content-type" content="text/html; charset=utf-8"/>
    <meta name="apple-mobile-web-app-capable" content="yes"/>
    <link href="../assets/pdt/resources/css/jquery-ui-themes.css" type="text/css" rel="stylesheet"/>
    <link href="../assets/pdt/resources/css/axure_rp_page.css" type="text/css" rel="stylesheet"/>
    <link href="../assets/pdt/data/styles.css" type="text/css" rel="stylesheet"/>
    <link href="../assets/pdt/files/home/styles.css" type="text/css" rel="stylesheet"/>
    <script src="../assets/pdt/resources/scripts/jquery-1.7.1.min.js"></script>
    <script src="../assets/pdt/resources/scripts/jquery-ui-1.8.10.custom.min.js"></script>
    <script src="../assets/pdt/resources/scripts/prototypePre.js"></script>
    <script src="../assets/pdt/data/document.js"></script>
    <script src="../assets/pdt/resources/scripts/prototypePost.js"></script>
    <script src="../assets/pdt/files/home/data.js"></script>
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
    else if($rows['quyen']=='Giáo Viên') {
        echo "<script>alert('Bạn không có quyền vào trang này !');window.location='giaovien.php'</script>";
    } else  if($rows['quyen']=='Admin') {
        echo "<script>alert('Bạn không có quyền vào trang này !');window.location='admin.php'</script>";
    }
}
else if(!$user)
{
    header('Location: dangnhap.php');
}
?>

<div id="base" class="">

    <div id="u0" class="ax_default" data-left="24" data-top="36" data-width="1278" data-height="156">
        <div id="u1" class="ax_default" data-label="Rectangle">
            <div id="u1_div" class=""></div>
        </div>

        <!-- Rectangle (Rectangle) -->
        <div id="u2" class="ax_default" data-label="Rectangle">
            <div id="u2_div" class=""></div>
        </div>

        <!-- Rectangle (Rectangle) -->
        <div id="u3" class="ax_default" data-label="Rectangle">
            <div id="u3_div" class=""></div>
        </div>

        <!-- menu (Menu) -->
        <div id="u4" class="ax_default" data-label="menu">
            <img id="u4_menu" class="img " src="../assets/pdt/images/home/menu_u4_menu.png" alt="u4_menu"/>

            <!-- Menu Horizontal (Table) -->
            <div id="u5" class="ax_default" data-label="Menu Horizontal">

                <!-- Unnamed (Menu Item) -->
                <div id="u6" class="ax_default table_cell">
                    <img id="u6_img" class="img " src="../assets/pdt/images/home/u6.png"/>
                    <div id="u6_text" class="text ">
                        <a href="?menu=dethi_list" >  <p><span>Quản lí đề thi</span></p></a>
                    </div>
                </div>

                <!-- Unnamed (Menu Item) -->
                <div id="u7" class="ax_default table_cell">
                    <img id="u7_img" class="img " src="../assets/pdt/images/home/u6.png"/>
                    <div id="u7_text" class="text ">
                        <a href="?menu=quanlyhocsinh" >   <p><span>Quản lí học sinh</span></p></a>
                    </div>
                </div>

                <!-- Unnamed (Menu Item) -->
                <div id="u8" class="ax_default table_cell">
                    <img id="u8_img" class="img " src="../assets/pdt/images/home/u6.png"/>
                    <div id="u8_text" class="text ">
                        <a href="?menu=quanlygiaovien">    <p><span>Quản lí giáo viên</span></p></a>
                    </div>
                </div>

                <!-- Unnamed (Menu Item) -->
                <div id="u9" class="ax_default table_cell">
                    <img id="u9_img" class="img " src="../assets/pdt/images/home/u6.png"/>
                    <div id="u9_text" class="text ">
                        <a href="?menu=quanlydiemthi" > <p><span>Quản lí điểm thi</span></p></a>
                    </div>
                </div>

                <!-- Unnamed (Menu Item) -->
                <div id="u10" class="ax_default table_cell">
                    <img id="u10_img" class="img " src="../assets/pdt/images/home/u6.png"/>
                    <div id="u10_text" class="text ">
                        <a href="?menu=dangthongbao">  <p><span>Đăng thông báo</span></p></a>
                    </div>
                </div>

                <!-- Unnamed (Menu Item) -->
                <div id="u11" class="ax_default table_cell">
                    <img id="u11_img" class="img " src="../assets/pdt/images/home/u11.png"/>
                    <div id="u11_text" class="text ">
                        <a href="../controler/xulydangxuat.php"  >   <p><span>Đăng xuất</span></p></a>
                    </div>
                </div>
            </div>
        </div>

        <!-- Unnamed (Rectangle) -->
        <div id="u12" class="ax_default label">
            <div id="u12_div" class=""></div>
            <div id="u12_text" class="text ">
                <a href="?menu=trangchu">    <p><span>PHÒNG ĐÀO TẠO</span></p></a>
            </div>
        </div>
    </div>

    <!-- Unnamed (Group) -->
    <div id="u13" class="ax_default" data-left="0" data-top="1553" data-width="1356" data-height="252">

        <!-- Rectangle (Rectangle) -->
        <div id="u14" class="ax_default" data-label="Rectangle">
            <div id="u14_div" class=""></div>
        </div>

        <!-- Unnamed (Group) -->
        <div id="u15" class="ax_default" data-left="59" data-top="1587" data-width="811" data-height="184">

            <!-- Unnamed (Group) -->
            <div id="u16" class="ax_default" data-left="59" data-top="1587" data-width="501" data-height="184">

                <!-- Unnamed (Rectangle) -->
                <div id="u17" class="ax_default paragraph">
                    <div id="u17_div" class=""></div>
                    <div id="u17_text" class="text ">
                        <p><span>Về chúng tôi</span></p>
                    </div>
                </div>

                <!-- Text (Rectangle) -->
                <div id="u18" class="ax_default paragraph" data-label="Text">
                    <div id="u18_div" class=""></div>
                    <div id="u18_text" class="text ">
                        <p><span>Email: thanhdat010797@gmail.com</span></p><p><span>Facebook: www.facebook.com/dat.dang.967</span></p><p><span>&nbsp;</span></p>
                    </div>
                </div>
            </div>

            <!-- Unnamed (Group) -->
            <div id="u19" class="ax_default" data-left="670" data-top="1587" data-width="200" data-height="62">

                <!-- F (Rectangle) -->
                <div id="u20" class="ax_default" data-label="F">
                    <div id="u20_div" class=""></div>
                    <div id="u20_text" class="text ">
                        <p><span>F</span></p>
                    </div>
                </div>

                <!-- t (Rectangle) -->
                <div id="u21" class="ax_default" data-label="t">
                    <div id="u21_div" class=""></div>
                    <div id="u21_text" class="text ">
                        <p><span>t</span></p>
                    </div>
                </div>

                <!-- G+ (Rectangle) -->
                <div id="u22" class="ax_default" data-label="G+">
                    <div id="u22_div" class=""></div>
                    <div id="u22_text" class="text ">
                        <p><span>G+</span></p>
                    </div>
                </div>
                <!-- G+ (Rectangle) -->
                <div id="u23" class="ax_default" data-label="G+">
                    <div id="u23_div" class=""></div>
                    <div id="u23_text" class="text ">
                        <p><span>in</span></p>
                    </div>
                </div>

                <!-- Unnamed (Rectangle) -->
                <div id="u24" class="ax_default paragraph">
                    <div id="u24_div" class=""></div>
                    <div id="u24_text" class="text ">
                        <p><span>Liên Lạc</span></p>
                    </div>
                </div>
            </div>

            <!-- Unnamed (Image) -->
            <div id="u25" class="ax_default image">
                <img id="u25_img" class="img " src="../assets/pdt/images/home/u25.png"/>
            </div>
        </div>
    </div>

    <!-- Unnamed (Rectangle) -->
    <div id="u26" class="ax_default box_1">
        <div id="u26_div" class="">
            <?php include ("../controler/xulypdt.php")?>
        </div>
    </div>
</div>
</body>
</html>
