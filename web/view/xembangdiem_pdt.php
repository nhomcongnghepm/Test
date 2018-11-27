<html xmlns="http://www.w3.org/1999/xhtml" dir="ltr" lang="en-US">
<head profile="http://gmpg.org/xfn/11">
    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8" />
    <title>Admin</title>
    </title>
    <link href="../assets/style.css" media="screen" rel="stylesheet" type="text/css" />
    <link href="../assets/hocsinh/css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" type="text/css" href="../assets/hocsinh/css/sinhvien.css">
    <script type="text/javascript" src="../assets/hocsinh/js/jquery-3.1.1.min.js"></script>
    <script type="text/javascript" src="../assets/hocsinh/js/bootstrap.min.js"></script>
</head>
<body>
<div style="margin:20px 70px 10px; font-size:14px;">
    <font size="2" face="Tahoma"><b>Học Sinh<img src="../assets/image/bl3.gif" border="0" /> Xem bảng điểm</b></font></div>
<hr size="1" color="#cadadd" style="margin:15px auto;" />
<div class='wrapper'>
    <form action="?menu=user_delete" method="post">
        <table cellpadding="1" cellspacing="1" id="resultTable">
            <thead>
            <tr>
                <th>Mã số sinh viên</th>
                <th>Họ tên sinh viên</th>
                <th>Ngày Sinh</th>
                <th>Giới Tính</th>
                <th>Ngày thi</th>
                <th>Học kỳ</th>
                <th>Tên đề</th>
                <th>Điểm</th>
            </tr>
            </thead>
            <tbody>
            <?php
            require_once '../controler/hienthidiem_pdt.php';
            ?>
            </tbody>
        </table>
    </form>
</div>
<br>
<br>
<div class="nav navbar-right" id="DinhHuong" style="transform:translateY(-35px)" >
    <ul class="nav  pager" >
        <li class="previous" >
            <a href="?menu=quanlybangdiem" style=" background-color:#ffcccc"="">&larr;Quay lại trang bảng điểm</a>
        </li>
        <li class="previous" >
            <a href="?menu=xembangdiem_pdt&page1prev=<?php echo $i?>" style=" background-color:#ffcccc"="">&larr;Trước</a>
        </li>
        <li class="next"><a href="?menu=xembangdiem_pdt&&page1=<?php echo $i?>" style=" background-color:#ffcccc"="">Sau&rarr;</a></li>
    </ul>
</div>
</body>
</html>