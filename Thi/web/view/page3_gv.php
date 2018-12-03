<!DOCTYPE html>
<html>
<head>
    <title>Page 3</title>
    <meta http-equiv="X-UA-Compatible" content="IE=edge"/>
    <meta http-equiv="content-type" content="text/html; charset=utf-8"/>
    <meta name="apple-mobile-web-app-capable" content="yes"/>
    <link href="../assets/giaovien/resources/css/jquery-ui-themes.css" type="text/css" rel="stylesheet"/>
    <link href="../assets/giaovien/resources/css/axure_rp_page.css" type="text/css" rel="stylesheet"/>
    <link href="../assets/giaovien/data/styles.css" type="text/css" rel="stylesheet"/>
    <link href="../assets/giaovien/files/page_3/styles.css" type="text/css" rel="stylesheet"/>
    <link href="" type="text/css" rel="stylesheet"/>
    <link href="" type="text/css" rel="stylesheet"/>
    <script src="../assets/giaovien/resources/scripts/jquery-1.7.1.min.js"></script>
    <script src="../assets/giaovien/resources/scripts/jquery-ui-1.8.10.custom.min.js"></script>
    <script src="../assets/giaovien/resources/scripts/prototypePre.js"></script>
    <script src="../assets/giaovien/data/document.js"></script>
    <script src="../assets/giaovien/resources/scripts/prototypePost.js"></script>
    <script src="../assets/giaovien/files/page_3/data.js"></script>
    <script type="text/javascript">
        $axure.utils.getTransparentGifPath = function() { return 'resources/images/transparent.gif'; };
        $axure.utils.getOtherPath = function() { return 'resources/Other.html'; };
        $axure.utils.getReloadPath = function() { return 'resources/reload.html'; };
    </script>
</head>
<?php
require_once '../modal/init.php';
?>
<body>
    <form action="?menu=doimatkhau" method="post" class="form" role="form">
                <!-- Unnamed (Rectangle) -->
                <div id="u140" class="ax_default shape">
                    <div id="u140_div" class=""></div>
                    <div id="u140_text" class="text ">
                        <p><span>Mật khẩu cũ :</span></p>
                    </div>
                </div>

                <!-- Unnamed (Rectangle) -->
                <div id="u141" class="ax_default shape">
                    <div id="u141_div" class=""></div>
                    <div id="u141_text" class="text ">
                        <p><span>Thay đổi mật khẩu</span></p>
                    </div>
                </div>

                <!-- Unnamed (Horizontal Line) -->
                <div id="u142" class="ax_default horizontal_line">
                    <img id="u142_img" class="img " src="../assets/giaovien/images/page_3/u142.png"/>
                </div>

                <!-- Unnamed (Rectangle) -->
                <div id="u143" class="ax_default shape">
                    <div id="u143_div" class=""></div>
                    <div id="u143_text" class="text ">
                        <p><span>Mật khẩu mới :</span></p>
                    </div>
                </div>

                <!-- Unnamed (Rectangle) -->
                <div id="u144" class="ax_default shape">
                    <div id="u144_div" class=""></div>
                    <div id="u144_text" class="text ">
                        <p><span>Nhập lại mật khẩu mới :</span></p>
                    </div>
                </div>
        <!-- Unnamed (Rectangle) -->
                <div id="u145" class="ax_default shape">
                    <button class="btn btn-lg btn-primary btn-block"  name="dongy">Thay Đổi</button>
        </div>
        <!-- Unnamed (Text Field) -->
                <div id="u146" class="ax_default text_field">
                    <input id="u146_input" name="old_pw" type="password" value=""/>
                </div>

                <!-- Unnamed (Text Field) -->
                <div id="u147" class="ax_default text_field">
                    <input id="u147_input" name="new_pw" type="password" value=""/>
                </div>

                <!-- Unnamed (Text Field) -->
                <div id="u148" class="ax_default text_field">
                    <input id="u148_input" name="pre_pw" type="password" value=""/>
                </div>
                <br><div class="a" <br style="color:red;"><?php include ("../controler/xulydoimatkhau.php")?></div><br>
        </form>
</div>
</body>
</html>
