<html xmlns="http://www.w3.org/1999/xhtml" dir="ltr" lang="en-US">
<head profile="http://gmpg.org/xfn/11">
    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8" />
    <link href="../assets/style.css" media="screen" rel="stylesheet" type="text/css" />
    <script src="../assets/js/jquery.js" type="text/javascript"></script>
    <script src="../assets/js/facebox.js" type="text/javascript"></script>
    <link rel="stylesheet" href="../assets/bootstrap-3.3.6/dist/css/bootstrap.min.css">
</head>
<body>
<div style="margin:20px 70px 10px; font-size:14px;">
    <font size="2" face="Tahoma"><b>Học Sinh<img src="../assets/image/bl3.gif" border="0" />Xem lịch thi</b></font></div>
<hr size="1" color="#cadadd" style="margin:15px auto;" />
<div class='wrapper'>
    <form action="" method="post">
        <table cellpadding="1" cellspacing="1" id="resultTable">
            <thead>
            <tr>
                <th>Tên đề</th>
                <th>Ngày Thi</th>
                <th>Ca Thi</th>
            </tr>
            </thead>
            <tbody>
            <?php require_once '../controler/hienthilichthi.php'; ?>
            </tbody>
        </table>
    </form>
    <br>
    <br>
    <div class="nav navbar-right" id="DinhHuong" style="transform:translateY(-35px)" >
        <ul class="nav  pager" >
            <li class="previous" >
                <a href="?menu=lichthi&page1prev=<?php echo $i?> style="background-color:#FFCCCC">&larr;Trước</a>
            </li>
            <li class="next"><a href="?menu=lichthi&page1=<?php echo $i?> style="background-color:#FFCCCC">Sau&rarr;</a></li>
        </ul>
    </div>
</div>
</body>
</html>