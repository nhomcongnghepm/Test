<?php error_reporting(0);?>
<!DOCTYPE html>
<html lang="vi">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>sinhvien</title>
    <link href="../assets/hocsinh/css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" type="text/css" href="../assets/hocsinh/css/sinhvien.css">
    <script type="text/javascript" src="../assets/hocsinh/js/jquery-3.1.1.min.js"></script>
    <script type="text/javascript" src="../assets/hocsinh/js/bootstrap.min.js"></script>
    <script src="../assets/hocsinh/js/angular.min.js"></script>
        </head>
        <body>
<div class=" tab-pane fade in active" id="thongbao" >
                       <table class="table table-hover">
                         <thead>
                           <tr>
                             <th>TIÊU ĐỀ</th>
                             <th>NGƯỜI GỬI</th>
                               <th>Thời Gian</th>
                             <th>Nội Dung</th>
                               <th>XEM CHI TIẾT</th>
                           </tr>
                         </thead>
                         <tbody>
						 	<?php include '../controler/hienthithongbao.php';?>
                         </tbody>
                       </table>
                    </div>
</body>
</html>