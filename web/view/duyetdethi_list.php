<html xmlns="http://www.w3.org/1999/xhtml" dir="ltr" lang="en-US">
<head profile="http://gmpg.org/xfn/11">
    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8" />
    <title>Test</title>
    </title>
    <!--sa poip up-->
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
    <?php require_once '../controler/chonall.php';?>
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
    </form>
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