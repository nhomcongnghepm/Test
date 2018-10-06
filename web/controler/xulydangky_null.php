<?php
if (isset($_POST['login'])) {
    if ($_POST['ho'] == null) {
        echo("* Bạn hãy nhập họ <br />");
    } 
    if ($_POST['ten'] == null) {
        echo("* Bạn hãy nhập tên <br />");
    } 
    if ($_POST['username'] == null) {
        echo("* Bạn hãy nhập tên đăng nhập <br />");
    } else if (strlen('username') < 6 || strlen('username') > 24) {
        echo "* Tên đăng nhập phải nằm trong khoảng 6-24 ký tự.";

    } else if (preg_match('/\W/', 'username')) {
        echo "* Tên đăng nhập không được chứa ký tự đặc biệt và khoảng trắng.";
    } 
    if ($_POST['email'] == null) {
        echo("* Bạn hãy nhập email <br />");
    } 
    if ($_POST['pwd1'] == null) {
        echo("* Bạn hãy nhập mật khẩu <br />");
    } else if ($_POST['pwd2'] == null) {
        echo("* Bạn hãy nhập lại mật khẩu <br />");
    } else if ($_POST['pwd1'] != $_POST['pwd2']) {
        echo("* Mật khẩu không trùng khớp. <a href='javascript: history.go(-1)'>Trở lại</a><br /> ");
        exit;
    } 

    if ($_POST['day'] == "day" || $_POST['month'] == "month" || $_POST['year'] == "year") {
        echo("* Bạn hãy chọn ngày sinh <br />");
    } 
    if (isset($_POST['sex']) == null) {
        echo("* Bạn hãy chọn giới tính <br />");
    } 
	if ($_POST['quyen']=="quyen"){
		echo "* Bạn hãy phân quyên cho user <br />";
		}
	if(isset($_POST['g-recaptcha-response'])){
      $captcha = $_POST['g-recaptcha-response'];
   	}
   	if(!$captcha){
      echo '* Hãy tích vào tôi không phải là người máy ';
   	}else{
      $response = file_get_contents("https://www.google.com/recaptcha/api/siteverify?secret=6LeydXMUAAAAAO2GXuFOYC9IcMZG2_pXSFKwd1Rv-*****&response=".$captcha."&remoteip=".$_SERVER['REMOTE_ADDR']);
   }
}
    ?>