<html xmlns="http://www.w3.org/1999/xhtml" dir="ltr" lang="en-US">
<head profile="http://gmpg.org/xfn/11">
<meta http-equiv="Content-Type" content="text/html; charset=UTF-8" />
<title>Admin</title>
</title>
    	<link href="../assets/taikhoan.css" media="screen" rel="stylesheet" type="text/css" />
    <link href="../assets/hocsinh/css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" type="text/css" href="../assets/hocsinh/css/sinhvien.css">
    <script type="text/javascript" src="../assets/hocsinh/js/jquery-3.1.1.min.js"></script>
    <script type="text/javascript" src="../assets/hocsinh/js/bootstrap.min.js"></script>
    <?php require_once '../controler/chonall.php';?>
</head>
<body>  
<div style="margin:20px 70px 10px; font-size:14px;">
<font size="2" face="Tahoma"><b>Tài khoản<img src="../assets/image/bl3.gif" border="0" /> QUẢN LÝ Tài Khoản</b></font></div>
<hr size="1" color="#cadadd" style="margin:15px auto;" />
<div style="margin:20px 70px auto;">
<a href="?menu=taikhoan_news"><img src="../assets/image/add_new.gif" align="absmiddle" border="0" /></a> <a href="?menu=taikhoan_news">Thêm tài khoản</a>
</div>
<div class='wrapper'>
  <form action="?menu=user_delete" method="post">
    <table cellpadding="1" cellspacing="1" id="resultTable">
			<thead>
				<tr>
                    <th>Mã tài khoản</th>
                    <th>Họ </th>
                    <th>Tên</th>
					<th>Tên Đăng Nhập</th>
                    <th>Email</th>
					<th>Ngày Sinh</th>
					<th>Giới Tính</th>
					<th>Quyền</th>
				</tr>
			</thead>
        <tbody>
		    <?php
			    require_once '../controler/hienthiuser.php';
			?>
        </tbody>
    </table>
	</form>
</div>
<br>
<div class="nav navbar-right" id="DinhHuong" style="transform:translateY(-35px)" >
<ul class="nav  pager" >
    <li class="previous" >
        <a href="?menu=quanlytaikhoan&page1prev=<?php echo $i?>" style=" background-color:#ffcccc"="">&larr;Trước</a>
    </li>
    <li class="next"><a href="?menu=quanlytaikhoan&page1=<?php echo $i?>" style=" background-color:#ffcccc"="">Sau&rarr;</a></li>
</ul>
</div>
  </body>
</html>