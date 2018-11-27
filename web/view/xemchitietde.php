<html xmlns="http://www.w3.org/1999/xhtml" xmlns:background-color="http://www.w3.org/1999/xhtml"
      xmlns="http://www.w3.org/1999/html" dir="ltr" lang="en-US">
<head profile="http://gmpg.org/xfn/11">
    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8" />
    <title>Test</title>
    </title>
    <!--sa poip up-->
    <link href="../assets/style.css" media="screen" rel="stylesheet" type="text/css" />
    <script src="../assets/js/jquery.js" type="text/javascript"></script>
    <script src="../assets/js/facebox.js" type="text/javascript"></script>
    <link href="../assets/hocsinh/css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" type="text/css" href="../assets/hocsinh/css/sinhvien.css">
    <script type="text/javascript" src="../assets/hocsinh/js/jquery-3.1.1.min.js"></script>
</head>
<body>
<div style="margin:20px 70px 10px; font-size:14px;">
    <hr size="1" color="#cadadd" style="margin:15px auto;" />
    <div class='wrapper'>
        <form action="" method="post">
            <table cellpadding="1" cellspacing="1" id="resultTable">
                <thead>
                <tr>
                    <th><div class='a' name='ma_ch' >Mã Câu Hỏi</div></th>
                    <th>Mã Đề </th>
                    <th>Tên Đề</th>
                    <th>Nội dung</th>
                    <th>LC1</th>
                    <th>LC2</th>
                    <th>LC3</th>
                    <th>LC4</th>
                    <th>Đáp án</th>
                </tr>
                </thead>
                <tbody>
                <?php
                require_once '../controler/cauhoi_theomade.php';
                ?>
                </tbody>
            </table>
            <br>
            <td colspan="3" style="padding: 10px 0px 10px 0px" align="center"><label>
                    <div class="nav navbar-right" id="DinhHuong" style="transform:translateY(-35px)" >
                    <ul class="nav  pager" >
                        <li class="previous" >
                            <a href="?menu=duyetdethi">Quay lại trang duyệt đề</a>
                        </li>
                    </ul>
                        <input type="submit" name="duyet" value=" Duyệt đề thi" />
                        <div class="a" <br style="color:red;"><?php include '../controler/duyetdethi_saveedit.php';?></div>
                    </div>
    </form>
        <br>
        <br>
        <div class="nav navbar-right" id="DinhHuong" style="transform:translateY(-35px)" >
            <ul class="nav  pager" >
                <li class="previous" >
                    <a href="?menu=xemchitietde&page1prev=<?php echo $i?>" style=" background-color:#ffcccc"="">&larr;Trước</a>
                </li>
                <li class="next"><a href="?menu=xemchitietde&page1=<?php echo $i?>" style=" background-color:#ffcccc"="">Sau&rarr;</a></li>
            </ul>
        </div>
    </div>
</body>
</html>