<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Bootstrap 3 Vertical Form Layout</title>
    <link rel="stylesheet" href="http://maxcdn.bootstrapcdn.com/bootstrap/3.2.0/css/bootstrap.min.css">
    <link rel="stylesheet" href="http://maxcdn.bootstrapcdn.com/bootstrap/3.2.0/css/bootstrap-theme.min.css">
    <link href="../assets/bang.css" type="text/css" rel="stylesheet"/>
    <script src="http://ajax.googleapis.com/ajax/libs/jquery/1.11.1/jquery.min.js"></script>
    <script src="http://maxcdn.bootstrapcdn.com/bootstrap/3.2.0/js/bootstrap.min.js"></script>
    <style type="text/css">
        .example{
            margin: 20px;
        }
    </style>
</head>
<body>
<?php require_once '../controler/laythongtinhocsinh.php'?>
<h4 id="vd">Thông tin chung</h4>
<form class="form-horizontal">
    <div class="form-group">
        <label class="control-label col-sm-2"for="myTel1">Họ và tên</label>
        <div class="col-sm-10">
            <input class="form-control" type="tel" readonly="readonly" value="<?php echo $row['ho'].' '.$row['ten'];?>" id="myTel1">
        </div>
    </div>
    <div class="form-group">
        <label class="control-label col-sm-2"for="myTel1">Email</label>
        <div class="col-sm-10">
            <input class="form-control" type="tel" readonly="readonly" value="<?php echo $row['email'];?>" id="myTel1">
        </div>
    </div>
    <div class="form-group">
        <label class="control-label col-sm-2"  for="myTel1">Giới tính</label>
        <div class="col-sm-10">
            <input class="form-control" type="tel"readonly="readonly" value="<?php echo $row['Gioitinh'];?>" id="myTel1">
        </div>
    </div>
    <div class="form-group">
        <label class="control-label col-sm-2"for="myTel1">Ngày sinh</label>
        <div class="col-sm-10">
            <input class="form-control"type="tel"readonly="readonly" value="<?php echo $row['birthdate'];?>" id="myTel1">
        </div>
    </div>
    <div class="form-group">
        <label class="control-label col-sm-2"for="myTel1">Lớp</label>
        <div class="col-sm-10">
            <input class="form-control"type="tel"readonly="readonly" value="<?php echo $row['tenlop'];?>" id="myTel1">
        </div>
    </div>
</form>

</body>
</html>