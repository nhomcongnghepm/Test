<html xmlns="http://www.w3.org/1999/xhtml" dir="ltr" lang="en-US">
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
    <script type="text/javascript" src="../assets/hocsinh/js/bootstrap.min.js"></script>
	<script type="text/javascript">
        $(document).ready(function() {
        $("#resultTable thead tr th:first input:checkbox").click(function() {
            var checkedStatus = this.checked;
            $("#resultTable tbody tr td:first-child input:checkbox").each(function() {
                this.checked = checkedStatus;
            });
        });

            $("#resultTable").selectAllRows();

            $("#resultTable").selectAllRows({ column: 'last' });

            $("#resultTable").selectAllRows({
                column: '2',
                selectTip: 'Select All Students',
                unselectTip: 'Un-Select All Students'
                })
                .css("border-width", "10px");
        });
    </script>
    <?php require_once '../controler/chonallgiaovien.php';?>
</head>
<body>  
<div style="margin:20px 70px 10px; font-size:14px;">
<font size="2" face="Tahoma"><b>GIÁO VIÊN <img src="../assets/image/bl3.gif" border="0" /> QUẢN LÝ GIÁO VIÊN</b></font></div>
<hr size="1" color="#cadadd" style="margin:15px auto;" />
<div style="margin:20px 70px auto;">
<a href="?menu=giaovien_news"><img src="../assets/image/add_new.gif" align="absmiddle" border="0" /></a> <a href="?menu=giaovien_news">Thêm giáo viên</a>
</div>
<div class='wrapper'>
  <form action="?menu=giaovien_delete" method="post">
    <table cellpadding="1" cellspacing="1" id="resultTable">
			<thead>
				<tr>
					
					<th><input type="checkbox" name="checkid[]" id="checkid" value="<?=$counts?>" onClick="CheckALL(<?=$counts?>);" /></th>
                    <th>Mã số g.viên</th>
                    <th>Họ </th>
                    <th>Tên</th>
					<th>Tên Đăng Nhập</th>
                    <th>Email</th>
					<th>Ngày Sinh</th>
					<th>Giới Tính</th>
					<th>Bộ môn</th>
                    <th>Quyền</th>
					<th>Chỉnh sửa</th>
				</tr>
			</thead>
        <tbody>
		<?php
			require_once '../controler/hienthigiaovien.php';
		?>
        </tbody>
    </table>
	<input type="submit" name="bnm" value="Delete all" style="margin:3px 50px auto;">
	</form>
</div>
<div class="nav navbar-right" id="DinhHuong" style="transform:translateY(-35px)" >
    <ul class="nav  pager" >
        <li class="previous" >
            <a href="?menu=quanlygiaovien&page1prev=<?php echo $i?>">&larr;Trước</a>
        </li>
        <li class="next"><a href="?menu=quanlygiaovien&page1=<?php echo $i?>">Sau&rarr;</a></li>
    </ul>
</div>
  </body>
</html>
<script>
function CheckALL(counts)
{
	for(i=0;i<counts;i++)
	{
		
	if(document.getElementById("checkid").checked!="")
	{
	document.getElementById("checkid").checked	='checked';
	}else{
	document.getElementById("checkid").checked	='';	
	}
	}
}
</script>