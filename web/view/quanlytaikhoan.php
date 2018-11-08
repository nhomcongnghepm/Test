<html xmlns="http://www.w3.org/1999/xhtml" dir="ltr" lang="en-US">
<head profile="http://gmpg.org/xfn/11">
<meta http-equiv="Content-Type" content="text/html; charset=UTF-8" />
<title>Admin</title>
</title>
    	<link href="../assets/style.css" media="screen" rel="stylesheet" type="text/css" />
    <?php require_once '../controler/chonall.php';?>
</head>
<body>  
<div style="margin:20px 70px 10px; font-size:14px;">
<font size="2" face="Tahoma"><b>CÂU HỎI<img src="../assets/image/bl3.gif" border="0" /> QUẢN LÝ Tài Khoản</b></font></div>
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
  </body>
</html>