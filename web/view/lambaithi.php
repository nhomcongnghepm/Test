<?php
ob_start();
session_start();
?>
<?php
require_once  '../modal/init.php';
$u=$_SESSION['user'];
$user=$db->laythongtin_hocsinh($u);
$query=$db->query($user);
$row=$db->lay_rows($query);
$kiemtra=$db->kiemtraketquathi($row['id']);
$query1=$db->query($kiemtra);
$row1=$db->lay_rows($query1);
if($row1['made']==$_POST['monselect']and $row1['ngaythi']==$_POST['ngaythi']and $row1['dotthi']==$_POST['dotthi']and $row1['hocky']==$_POST['hockyselect']) {
    echo "<script>alert('Bạn đã thi xong mời bạn vào xem kết quả !');window.location='hocsinh.php'</script>";
    exit;
}
else{$_SESSION['id']=$row['id'];
$_SESSION['aidimon']=$_POST['monselect'];
$_SESSION['bailam']=$_POST['hockyselect'];
$_SESSION['dothi']=$_POST['dotthi'];
$_SESSION['ngaythi']=$_POST['ngaythi'];
?>
<?php require_once '../controler/chamdiemthi.php';?>
<!DOCTYPE html>
<html lang="vi">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>lambaithi</title>
    <link href="../assets/hocsinh/css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" type="text/css" href="../assets/hocsinh/css/sinhvien.css">
      <link rel="stylesheet" type="text/css" href="../assets/hocsinh/css/lambaithi.css">
      <script type="text/javascript" src="../assets/hocsinh/js/jquery-3.1.1.min.js"></script>
      <script type="text/javascript" src="../assets/hocsinh/js/bootstrap.min.js"></script>
      <script type="text/javascript" src="../assets/hocsinh/js/ghiketqua.js"></script>
           <script type="text/javascript">
		 var mchon=new Array();
for(var i=0;i<40;i++)
	mchon[i]="sdfsdfsfsd";
</script>
<script type="text/javascript">
    function chamdiem(s,s2,s3,s4,s5){
        var mchondung=0;
		var i=0;
		<?php for($i=0;$i<40;$i++)
		{
			?>
		 	var a=mchon[i].toString();
			var b="<?php echo $dap_an[$i];?>";
			var n=a.localeCompare(b);
			if(n==0) mchondung++;
			i++;
			<?php
		}
		?>
		
		document.getElementById("datren").innerHTML=mchondung;
        document.getElementById("tongdiemthi").innerHTML=(10/40*mchondung);
        updatediem(s,s2,s3,s4,s5,(10/40*mchondung));
    }
</script>
      <script>
          function getHTTPObject22(){

              if (window.ActiveXObject) return new ActiveXObject("Microsoft.XMLHTTP");// trinh duyet ie
              else if (window.XMLHttpRequest) return new XMLHttpRequest(); //trinh duyet chome,fifox...
              else {
                  alert("Xin lỗi trình duyệt không hỗ trợ chức năng này!");
                  return null;
              }
          }
          function updatediem(id_hs,id_mon,ngaythi,dotthi,hocky,diem){
              xmlhttp=getHTTPObject22();
              xmlhttp.open("GET","../controler/capnhatdiem.php?id_hs="+id_hs+" && id_mon="+id_mon+" && diem="+diem+" && ngaythi="+ngaythi+" && dotthi="+dotthi+" && hocky="+hocky, true);
              xmlhttp.send();
              xmlhttp.onreadystatechange =setOutputsss;
          }
          function setOutputsss(){

              if(xmlhttp.readyState == 4 && xmlhttp.status == 200){ //gia tri 4 và 200 la mat định
              }
          }
      </script>
  </head>
  <body>
    <div id="header">
        <nav class="navbar navbar-default navbar-fixed-top" role="navigation">
       <div class="container">
          <div class="navbar-header">
            <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#navbar-ex1-collapse">
              <span class="sr-only">Toggle navigation</span>
              <span class="icon-bar"></span>
              <span class="icon-bar"></span>
              <span class="icon-bar"></span>
            </button>
            <a class="navbar-brand trangchutxt" href="#">Phần mềm thi trắc nghiệm online</a>
          </div>
      
          <!-- Collect the nav links, forms, and other content for toggling -->
          <div class="collapse navbar-collapse navbar-ex1-collapse">
            
          </div><!-- /.navbar-collapse -->
       </div>
     </nav>
    </div><!-- header -->
    <div id="content">
        <div class="jumbotron">
               <br>
			   <nav id="fixNav">
               <ul class="list-inline col-md-offset-1">
                     <li>
                        <label> Môn thi:</label>
                      </li>
                      <li>
                         <div class="form-control " type="text"><?php echo $_POST['monselect']; ?></div>
                      </li>
                   <li>
                       <label> Ngày thi:</label>
                   </li>
                   <li>
                       <div class="form-control  type="text"><?php echo $_POST['ngaythi']; ?></div>
                   </li>
                    <li>
                         <label> Học kỳ:</label>
                    </li>
                     <li>
                         <div class="form-control  type="text"><?php echo $_POST['hockyselect']; ?></div>
                     </li>
                   <label> Ca thi:</label>
                   </li>
                   <li>
                       <div class="form-control "  type="text"><?php echo $_POST['dotthi']; ?></div>
                   </li>
                      <li>
                        <label > Thời gian còn lại:</label>
                      </li>
                      <li>
                        <div class="form-control btn-danger" id="demnguoc"></div>
						
                      </li>
					 
                      <li class=" col-md-offset-1">
                        <button id="myNopBai" type="button" class="btn btn-success btn-lg" onclick="chamdiem('<?php echo $_SESSION['id'];?>','<?php echo $_SESSION['aidimon']; ?>','<?php echo $_SESSION['ngaythi']; ?>','<?php echo $_SESSION['dothi'];?>','<?php echo $_SESSION['bailam'];?>')">Nộp bài</button>
                      </li>
               </ul>
			   </nav>
          </div>
        <div class="container">
          <div class="row">
            <section id="miSlide" class="carousel sline col-md-9" data-interval="false">
                          <div class="carousel-inner">
                              <div class="item active">
                                    <div class="phancauhoi">
                                        <?php include ('../modal/init.php');
                                        $tv3=$db->laynoidungcauhoi();
                                        $tv4 = $db->query($tv3);
                                        $cau=0;
                                        while( ($rows3 = $db->lay_rows($tv4))!= NULL)
                                        {
                                            $dap_an[$cau]=$rows3['dapan'];
                                            ?>
                                            <div class=" panel panel-danger ">
                                                <div class="panel-heading text-center">
                                                    <p style="font-size: 26px"><strong>Câu <?php echo ($cau+1); ?></strong></p>
                                                </div>
                                                <div class="panel-body">
                                                    <p><?php echo $rows3['noidung']; ?></p>

                                                    <div class="input-group cauhoi">
                                                        <div><input type="checkbox" name="<?php echo $rows3['ma_ch']; ?>" value="<?php echo $rows3['lc1']; ?>" id="cc" onclick="ghiketqua(this.value,<?php echo $cau ?>)"> A: <?php echo $rows3['lc1']; ?></div>
                                                        <div><input type="checkbox" name="<?php echo $rows3['ma_ch']; ?>" value="<?php echo $rows3['lc2']; ?>" onclick="ghiketqua(this.value,<?php echo $cau ?>)"> B: <?php echo $rows3['lc2']; ?></div>
                                                        <div><input type="checkbox" name="<?php echo $rows3['ma_ch']; ?>" value="<?php echo $rows3['lc3']; ?>" onclick="ghiketqua(this.value,<?php echo $cau ?>)"> C: <?php echo $rows3['lc3']; ?></div>
                                                        <div><input type="checkbox" name="<?php echo $rows3['ma_ch']; ?>" value="<?php echo $rows3['lc4']; ?>" onclick="ghiketqua(this.value,<?php echo $cau ?>)"> D: <?php echo $rows3['lc4']; ?></div>
                                                    </div>
                                                </div>
                                            </div>
                                            <?php
                                            $cau=$cau+1;
                                        }
                                        $db->close();?>
                                    </div>
                          </div>
                              <?php
                              $socau=40;
                              $cau=10;
                              for($i=1;$i<=3;$i++){  ?>
                                  <div class="item">
                                      <div class=" phancauhoi">
                                          <?php include ('../modal/init.php');
                                          $tv3= $db->laynoidungcauhoi_sau($cau);
                                          $tv4 = $db->query($tv3);

                                          while( ($rows3 = $db->lay_rows($tv4))!= NULL)
                                          {
                                              $dap_an[$cau]=$rows3['dapan'];
                                              ?>
                                              <div class=" panel panel-danger ">
                                                  <div class="panel-heading text-center">
                                                      <p style="font-size: 26px"><strong>Câu <?php echo ($cau+1); ?></strong></p>
                                                  </div>
                                                  <div class="panel-body">
                                                      <p><?php echo $rows3['noidung']; ?></p>
                                                      <div class="input-group cauhoi">
                                                          <div><input type="checkbox" name="<?php echo $rows3['ma_ch']; ?>" value="<?php echo $rows3['lc1']; ?>" id="cc" onclick="ghiketqua(this.value,<?php echo $cau ?>)"> A: <?php echo $rows3['lc1']; ?></div>
                                                          <div><input type="checkbox" name="<?php echo $rows3['ma_ch']; ?>" value="<?php echo $rows3['lc2']; ?>" onclick="ghiketqua(this.value,<?php echo $cau ?>)"> B: <?php echo $rows3['lc2']; ?></div>
                                                          <div><input type="checkbox" name="<?php echo $rows3['ma_ch']; ?>" value="<?php echo $rows3['lc3']; ?>" onclick="ghiketqua(this.value,<?php echo $cau ?>)"> C: <?php echo $rows3['lc3']; ?></div>
                                                          <div><input type="checkbox" name="<?php echo $rows3['ma_ch']; ?>" value="<?php echo $rows3['lc4']; ?>" onclick="ghiketqua(this.value,<?php echo $cau ?>)"> D: <?php echo $rows3['lc4']; ?></div>
                                                      </div>
                                                  </div>
                                              </div>
                                              <?php
                                              $cau=$cau+1;
                                          }
                                          $db->close();?>
                                      </div><!-- phancauhoi -->
                                  </div>
                              <?php } ?>
                          </div>

                      <div class="nav navbar-right" id="DinhHuong" style="transform:translateY(-35px)" >
                        <ul class="nav  pager" >
                            <li class="previous" >
                               <a href="#miSlide" style="background-color:#FFCCCC" data-slide="prev">&larr;Trước</a>
                            </li>
                            <li class="next"><a href="#miSlide" style="background-color:#FFCCCC"  data-slide="next">Sau&rarr;</a></li>
                        </ul>
                    </div>
                       
            </section>
            <nav id="fixNav2">
            <div class="col-md-11 socaulambai">
              <div class=" panel panel-success ">
                <div class="panel-heading text-center">
                  <p><strong>Số câu hỏi</strong></p>
                </div>
                <div class="panel-body">
                   <div class="input-group list-inline socauhoi">
                      <p>40 câu</p>
                     <p>Đã làm: <b id="caudalam">0 câu</b></p>
                      <p>Còn lại: <b id="cauconlai">40 câu</b></p>
                   </div><!-- socauhoi -->
                </div>
              </div>
            </div>
		</nav>        
   
         </div><!-- row -->
		
      </div>
	 
    </div><!-- content -->
   
       <script type="text/javascript">
            $('input[type="checkbox"]').on('change', function() {
          $('input[name="' + this.name + '"]').not(this).prop('checked', false);
           });
       </script>
       <script type="text/javascript">

           $('input[name="cau1"').change(function () {
           $('input[name="1"').prop('checked', $(this).prop("checked"));
            });
            $('input[name="cau2"').change(function () {
           $('input[name="2"').prop('checked', $(this).prop("checked"));
            });
             $('input[name="cau3"').change(function () {
           $('input[name="3"').prop('checked', $(this).prop("checked"));
            });   
       </script>
        <div class="modal fade" id="myModal" role="dialog">
            <div class="modal-dialog">
              <div class="modal-content">
                  <div class="modal-header text-center">
                        <h1>Kết quả thi</h1>
                  </div>
                  <div class="modal-body">
                        <ul class="list-inline">
                           <li>
                             <label >số câu đúng:  </label>
                           </li>
                          <li>
                             <div class="form-control "><b id="datren"> 0</b>/40</div>
                          </li>
                        </ul>
                         <ul class="list-inline">
                          <li>
                            <label> Tổng điểm: </label>
                          </li>
                          <li >
                            <div class="form-control "><b name="tongdiemthi" id="tongdiemthi">d</b></div>
                          </li>
                        </ul>
                  </div>
                  <div class="modal-footer">
                      <a href="../controler/xulydangxuat.php" class="btn btn-primary" >close</a>
                  </div>
              </div>
            </div>
        </div>
   <script>


     $(document).ready(function(){
          $("#myNopBai").click(function(){
			 
            $("#myModal").modal({backdrop:"static"});
			
          });
     });
   </script>
   <script type="text/javascript">
   function getCookie(cname) {
    var name = cname + "=";
    var decodedCookie = decodeURIComponent(document.cookie);
    var ca = decodedCookie.split(';');
    for(var i = 0; i <ca.length; i++) {
        var c = ca[i];
        while (c.charAt(0) == ' ') {
            c = c.substring(1);
        }
        if (c.indexOf(name) == 0) {
            return c.substring(name.length, c.length);
        }
    }
    return "";
}


    var time = getCookie("time_exam"); // đơn vị là giây
    var phut = Math.floor(time/80);
    var giay = time - phut * 80;
    var txtThoiGian = document.getElementById("demnguoc");

        var timer = setInterval(function() {
            if(giay == 0) {
                if(phut == 0) {
				 document.cookie = "time_exam=; expires=Thu, 01 Jan 1970 00:00:00 UTC;";
                    clearInterval(timer);
                    $("#myModal").modal({backdrop:"static"});
                    return;

                } else {
                    phut--;
                    giay = 80;
                }
            }

            if(phut > 0) {
                var sophut = phut + ' phút';
            } else {
                var sophut = '';
            }
            txtThoiGian.innerHTML = sophut + ' ' + giay + ' ' + 'giây';
            giay--;
			var ok=phut*80+giay;

			document.cookie = "time_exam="+ok;
        }, 1000);

  </script>
  </body>
</html>
<?php }?>