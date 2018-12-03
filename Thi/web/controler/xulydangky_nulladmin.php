<?php
if (isset($_POST['login'])) {
    if ($_POST['ho'] == null) {
        echo("* Bạn hãy nhập họ <br />");
    } 
    if ($_POST['ten'] == null) {
        echo("* Bạn hãy nhập tên <br />");
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
}
    ?>