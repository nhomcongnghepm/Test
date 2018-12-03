<!DOCTYPE html>
<html lang="vi">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>sinhvien</title>
    <link href="../assets/hocsinh/css/dangthongbao.css" rel="stylesheet">
    <link rel="stylesheet" type="text/css" href="../assets/hocsinh/css/sinhvien.css">
    <script type="text/javascript" src="../assets/hocsinh/js/jquery-3.1.1.min.js"></script>
    <script type="text/javascript" src="../assets/hocsinh/js/bootstrap.min.js"></script>
    <script src="../assets/hocsinh/js/angular.min.js"></script>
</head>
<body>
<div class="tab-content">
    <div class="tab-pane fade in active" id="danglichthi1" style="margin-bottom:70px;">
        <div  class="col-md-offset-1" >
            <form action="../controler/dangthongbao.php" method="post">
                <ul class="nav nav-collapse nav-stacked">
                    <li>

                        <label class="control-label">Chủ đề:</label>
                        <input type="text" class="form-control" name="chude" ng-model="NguoiGui" required>
                    </li>
                    <li>
                        <label class="control-label">Nội dung:</label>
                        <textarea class="form-control" id="noidungtb" rows="3" name ="noidungtb"></textarea>
                    </li>
                    <br>
                    <li>
                        <div class="col-md-offset-4">
                            </center><input type="submit" name="ok" class="btn btn-success btn-lg col-md-2" value="ĐĂNG" />
                        </div>
                    </li>
            </form >
        </div>
    </div>
</div>
</body>
</html>