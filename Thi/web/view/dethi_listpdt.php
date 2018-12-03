<html xmlns="http://www.w3.org/1999/xhtml" xmlns:background-color="http://www.w3.org/1999/xhtml" dir="ltr" lang="en-US"><head profile="http://gmpg.org/xfn/11">
    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
    <link href="../assets/style.css" media="screen" rel="stylesheet" type="text/css">
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
</head><body>
<hr size="1" color="#cadadd" style="margin:15px auto;">
<div class="wrapper">
    <form action="" method="post">
        <table cellpadding="1" cellspacing="1" id="resultTable">
            <thead>
            <tr>
                <th><input type="checkbox" name="checkid[]" id="checkid" value="<?=$counts?>" onclick="CheckALL(<?=$counts?>);"></th>
                <th>Tên đề</th>
                <th>Ngày Thi</th>
                <th>Học kỳ</th>
                <th>Tác giả</th>
                <th>Trạng Thái đề thi</th>
                <th>Môn học</th>
            </tr>
            </thead>
            <tbody>
            <?php require_once '../controler/hienthidethi_pdt.php'; ?>
            </tbody>
        </table>
    </form>
    <br>
    <br>
    <div class="nav navbar-right" id="DinhHuong" style="transform:translateY(-35px)">
        <ul class="nav  pager">
            <li class="next"><a href="?menu=xemdethi_listpdt" style=" background-color:#ffcccc"="">Xem tất cả các đề</a></li>
        </ul>
    </div>
</div></body></html>