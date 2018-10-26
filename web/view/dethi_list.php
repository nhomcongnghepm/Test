<html xmlns="http://www.w3.org/1999/xhtml" dir="ltr" lang="en-US">
<head profile="http://gmpg.org/xfn/11">
<meta http-equiv="Content-Type" content="text/html; charset=UTF-8" />
<link href="../assets/style.css" media="screen" rel="stylesheet" type="text/css" />
        <script src="../assets/js/jquery.js" type="text/javascript"></script>
	  <script src="../assets/js/facebox.js" type="text/javascript"></script>
	
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
    <?php require_once '../controler/chonalldethi.php';?>
</head>
<body>  
<div style="margin:20px 70px 10px; font-size:14px;">
<font size="2" face="Tahoma"><b>CÂU HỎI<img src="../assets/image/bl3.gif" border="0" /> QUẢN LÝ ĐỀ THI</b></font></div>
<hr size="1" color="#cadadd" style="margin:15px auto;" />
<div style="margin:20px 70px auto;">
	<a href="?menu=dethi_news"><img src="../assets/image/add_new.gif" align="absmiddle" border="0" /></a> <a href="?menu=dethi_news">Đê thi mới</a>
</div>
<div class='wrapper'>
  <form action="?menu=dethi_delete" method="post">
    <table cellpadding="1" cellspacing="1" id="resultTable">
			<thead>
				<tr>
					<th><input type="checkbox" name="checkid[]" id="checkid" value="<?=$counts?>" onClick="CheckALL(<?=$counts?>);" /></th>
                    <th>Tên đề</th>
                    <th>Ngày Thi</th>
                    <th>Giờ Thi</th>
					<th>Tác giả</th>
					<th>Chỉnh sửa</th>
				</tr>
			</thead>
        <tbody>
		<?php require_once '../controler/hienthidethi.php'; ?>
        </tbody>
    </table>
	<input type="submit" name="bnm" value="Delete all" style="margin:3px 50px auto;">
	</form>
</div>
  </body>
</html>