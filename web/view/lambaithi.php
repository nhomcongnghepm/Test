<?php
ob_start();
session_start();
?>
 <?php include ('Chucnang/chamdiemthi/chamdiemthi.php');?>

<!DOCTYPE html>
<html lang="vi">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>lambaithi</title>
    <link href="../assets/hocsinh/css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" type="text/css" href="../assets/hocsinh/css/sinhvien.css">
     <script type="text/javascript" src="../assets/hocsinh/js/jquery-3.1.1.min.js"></script>
       <script type="text/javascript" src="../assets/hocsinh/js/bootstrap.min.js"></script>
	     <script >
		 var mchon=new Array();

for(var i=0;i<40;i++) //khoi tao mang
	mchon[i]="sdfsdfsfsd";
function ghiketqua(getvl,getcauso){
mchon[getcauso]=getvl;
var sums= countquest();
document.getElementById("caudalam").innerHTML=sums+" câu";
document.getElementById("cauconlai").innerHTML=(40-sums)+" câu";
}



function countquest(){
	var dem=0;
	for(var i=0;i<mchon.length;i++)
	{
		if(mchon[i]!="sdfsdfsfsd"){
			dem++;
			
		}
		
		
	}
	return dem;
}


function chamdiem(s,s2,s3){
	var mchondung=0;
    if(mchon[0]==<?php echo $dap_an[0] ?>)  mchondung++;
	if(mchon[1]==<?php echo $dap_an[1] ?>)  mchondung++;
	if(mchon[2]==<?php echo $dap_an[2] ?>)  mchondung++;
	if(mchon[3]==<?php echo $dap_an[3] ?>)  mchondung++;
	if(mchon[4]==<?php echo $dap_an[4] ?>)   mchondung++;
	if(mchon[5]==<?php echo $dap_an[5] ?>)  mchondung++;
	if(mchon[6]==<?php echo $dap_an[6] ?>)   mchondung++;
	if(mchon[7]==<?php echo $dap_an[7] ?>)  mchondung++;
	if(mchon[8]==<?php echo $dap_an[8] ?>)  mchondung++;
	if(mchon[9]==<?php echo $dap_an[9] ?>)   mchondung++;
	if(mchon[10]==<?php echo $dap_an[10] ?>)  mchondung++;
	if(mchon[11]==<?php echo $dap_an[11] ?>)  mchondung++;
	if(mchon[12]==<?php echo $dap_an[12] ?>)  mchondung++;
	if(mchon[13]==<?php echo $dap_an[13] ?>)   mchondung++;
	if(mchon[14]==<?php echo $dap_an[14] ?>)  mchondung++;
	if(mchon[15]==<?php echo $dap_an[15] ?>)   mchondung++;
	if(mchon[16]==<?php echo $dap_an[16] ?>)  mchondung++;
	if(mchon[17]==<?php echo $dap_an[17] ?>)  mchondung++;
	if(mchon[18]==<?php echo $dap_an[18] ?>)  mchondung++;
	if(mchon[19]==<?php echo $dap_an[19] ?>)   mchondung++;
	if(mchon[20]==<?php echo $dap_an[20] ?>)  mchondung++;
	if(mchon[21]==<?php echo $dap_an[21] ?>)  mchondung++;
	if(mchon[22]==<?php echo $dap_an[22] ?>)   mchondung++;
	if(mchon[23]==<?php echo $dap_an[23] ?>)   mchondung++;
	if(mchon[24]==<?php echo $dap_an[24] ?>)  mchondung++;
	if(mchon[25]==<?php echo $dap_an[25] ?>)   mchondung++;
	if(mchon[26]==<?php echo $dap_an[26] ?>)   mchondung++;
	if(mchon[27]==<?php echo $dap_an[27] ?>)   mchondung++;
	if(mchon[28]==<?php echo $dap_an[28] ?>)   mchondung++;
	if(mchon[29]==<?php echo $dap_an[29] ?>)   mchondung++;
	if(mchon[30]==<?php echo $dap_an[30] ?>)   mchondung++;
	if(mchon[31]==<?php echo $dap_an[31] ?>)   mchondung++;
	if(mchon[32]==<?php echo $dap_an[32] ?>)   mchondung++;
	if(mchon[33]==<?php echo $dap_an[33] ?>)   mchondung++;
	if(mchon[34]==<?php echo $dap_an[34] ?>)   mchondung++;
	if(mchon[35]==<?php echo $dap_an[35] ?>)   mchondung++;
	if(mchon[36]==<?php echo $dap_an[36] ?>)  mchondung++;
	if(mchon[37]==<?php echo $dap_an[37] ?>)   mchondung++;
	if(mchon[38]==<?php echo $dap_an[38] ?>)   mchondung++;
	if(mchon[39]==<?php echo $dap_an[39] ?>)   mchondung++;
	
    document.getElementById("datren").innerHTML=mchondung;
	 document.getElementById("tongdiemthi").innerHTML=(10/40*mchondung);

	updatediem(s,s2,s3,(10/40*mchondung));

	
}
		   function getHTTPObject22(){
         
	if (window.ActiveXObject) return new ActiveXObject("Microsoft.XMLHTTP");// trinh duyet ie
	else if (window.XMLHttpRequest) return new XMLHttpRequest(); //trinh duyet chome,fifox...
	else {
	alert("Xin lỗi trình duyệt không hỗ trợ chức năng này!");
	return null;
	}
}
			function updatediem(id_hs,id_mon,lanthi,diem){
				  xmlhttp=getHTTPObject22();
                xmlhttp.open("GET","Chucnang/menu/menuphai/capnhapdiem.php?id_hs="+id_hs+" && id_mon="+id_mon+" && diem="+diem+" && lanthithu="+lanthi, true);
                xmlhttp.send();
                 xmlhttp.onreadystatechange =setOutputsss; 
			}
			function setOutputsss(){
				
	if(xmlhttp.readyState == 4 && xmlhttp.status == 200){ //gia tri 4 và 200 la mat định
	
		
            
			
        }
			}
		 </script>

<style>

#fixNav{
  width: 100%;
  height: 50px;
  background-color: 	#228B22;
  display: block;
  box-shadow: 0px 2px 2px rgba(0,0,0,0.5); /*Đổ bóng cho menu*/
  position: fixed; /*Cho menu cố định 1 vị trí với top và left*/
  top: 0; /*Nằm trên cùng*/
  left: 0; /*Nằm sát bên trái*/
  z-index: 100000; /*Hiển thị lớp trên cùng*/
}

#fixNav2{
  width: 300px;
  height: 300px;
 
  display: block;

  position: fixed; /*Cho menu cố định 1 vị trí với top và left*/
  top: 300; /*Nằm trên cùng*/
  right: 0; /*Nằm sát bên trái*/
  z-index: 100000; /*Hiển thị lớp trên cùng*/
}
</style>
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
			   <nav id="fixNav">
               <ul class="list-inline col-md-offset-1">
                     <li>
                        <label> Môn thi:</label>
                      </li>
                      <li>
                         <div class="form-control " type="text"><?php echo $_POST['monselect']; ?></div>
                      </li>
                      <li>
                        <label > Thời gian bắt đầu:</label>
                      </li>
                      <li>
                         <div class="form-control" type="text">8:30</div>
                      </li>
                      <li>
                        <label > Thời gian còn lại:</label>
                      </li>
                      <li>
                        <div class="form-control btn-danger" id="demnguoc"></div>
						
                      </li>
					 
                      <li class=" col-md-offset-1">
                        <button id="myNopBai" type="button" class="btn btn-success btn-lg" onclick="chamdiem('<?php echo $_SESSION['aidihs']; ?>','<?php echo $_SESSION['aidimon']; ?>','<?php echo $_SESSION['bailam']; ?>')">Nộp bài</button>
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
							
							
							 <?php include ('connect.php');?>
<?php 
$id_khoidefault="";
$tv33= "select khoi.id_khoi from khoi INNER JOIN lop
ON khoi.id_khoi = lop.id_khoi
INNER JOIN hoc_sinh
ON lop.id_lop = hoc_sinh.id_lop where hoc_sinh.tai_khoan='".$_POST['MaSoSinhVien']."'";
		$tv44 = mysqli_query($connect,$tv33);
		
		while(($rows33 = mysqli_fetch_assoc($tv44))!= NULL)
		{
			$id_khoidefault=$rows33['id_khoi'];
			
		}

		$tv3= "SELECT * FROM  cau_hoi where id_khoi='".$id_khoidefault."' and id_mon='".$_POST['monselect']."' and unit='".$_POST['hockyselect']."' LIMIT 0 , 10";
		$tv4 = mysqli_query($connect,$tv3);
		$cau=0;
		while( ($rows3 = mysqli_fetch_assoc($tv4))!= NULL)
		{
			$dap_an[$cau]=$rows3['da_dung'];
			
?>
							
							
                            <div class=" panel panel-danger ">
                              <div class="panel-heading text-center">
                                <p style="font-size: 26px"><strong>Câu <?php echo ($cau+1); ?></strong></p>
                              </div>
                              <div class="panel-body">
                                 <p><?php echo $rows3['cau_hoi']; ?></p>
								 
                                 <div class="input-group cauhoi">
                                    <div><input type="checkbox" name="<?php echo $rows3['id_cauhoi']; ?>" value="<?php echo $rows3['da_1']; ?>" id="cc" onclick="ghiketqua(this.value,<?php echo $cau ?>)"> A: <?php echo $rows3['da_1']; ?></div>
                                    <div><input type="checkbox" name="<?php echo $rows3['id_cauhoi']; ?>" value="<?php echo $rows3['da_2']; ?>" onclick="ghiketqua(this.value,<?php echo $cau ?>)"> B: <?php echo $rows3['da_2']; ?></div>
                                    <div><input type="checkbox" name="<?php echo $rows3['id_cauhoi']; ?>" value="<?php echo $rows3['da_3']; ?>" onclick="ghiketqua(this.value,<?php echo $cau ?>)"> C: <?php echo $rows3['da_3']; ?></div>
                                    <div><input type="checkbox" name="<?php echo $rows3['id_cauhoi']; ?>" value="<?php echo $rows3['da_4']; ?>" onclick="ghiketqua(this.value,<?php echo $cau ?>)"> D: <?php echo $rows3['da_4']; ?></div>
                                 </div>
                              </div>
                            </div>
							
	<?php
	$cau=$cau+1;
}
mysqli_close($connect);
?>						
							
							
							
                           </div><!-- phancauhoi -->
                      </div>
					<?php 
					 $socau=40;
					  $cau=10;
					for($i=1;$i<=3;$i++){  ?>
					
					
					  
                      <div class="item">
                             <div class=" phancauhoi">
							 
							 							 <?php include ('connect.php');?>
<?php 

       
		$tv3= "SELECT * FROM  cau_hoi where id_khoi='1' and id_mon='0' and unit='1' LIMIT ".($cau).",10";
		$tv4 = mysqli_query($connect,$tv3);
		
		while( ($rows3 = mysqli_fetch_assoc($tv4))!= NULL)
		{
			$dap_an[$cau]=$rows3['da_dung'];
?>
                            	
                            <div class=" panel panel-danger ">
                              <div class="panel-heading text-center">
                                <p style="font-size: 26px"><strong>Câu <?php echo ($cau+1); ?></strong></p>
                              </div>
                              <div class="panel-body">
                                 <p><?php echo $rows3['cau_hoi']; ?></p>
                                 <div class="input-group cauhoi">
                                    <div><input type="checkbox" name="<?php echo $rows3['id_cauhoi']; ?>" value="<?php echo $rows3['da_1']; ?>" id="cc" onclick="ghiketqua(this.value,<?php echo $cau ?>)"> A: <?php echo $rows3['da_1']; ?></div>
                                    <div><input type="checkbox" name="<?php echo $rows3['id_cauhoi']; ?>" value="<?php echo $rows3['da_2']; ?>" onclick="ghiketqua(this.value,<?php echo $cau ?>)"> B: <?php echo $rows3['da_2']; ?></div>
                                    <div><input type="checkbox" name="<?php echo $rows3['id_cauhoi']; ?>" value="<?php echo $rows3['da_3']; ?>" onclick="ghiketqua(this.value,<?php echo $cau ?>)"> C: <?php echo $rows3['da_3']; ?></div>
                                    <div><input type="checkbox" name="<?php echo $rows3['id_cauhoi']; ?>" value="<?php echo $rows3['da_4']; ?>" onclick="ghiketqua(this.value,<?php echo $cau ?>)"> D: <?php echo $rows3['da_4']; ?></div>
                                 </div>
                              </div>
                            </div>
				<?php
	$cau=$cau+1;
}
mysqli_close($connect);
?>						
					
							
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
                             <label >số câu đúng:  </lable>
                           </li>
                          <li>
                             <div class="form-control "><b id="datren"> 0</b>/40</div>
                          </li>
                        </ul>
                         <ul class="list-inline">
                          <li>
                            <label> Tổng điểm: </lable>
                          </li>
                          <li >
                            <div class="form-control "><b id="tongdiemthi">d</b></div>
                          </li>
                        </ul>
                  </div>
                  <div class="modal-footer">
                    <a href="xoacookie.php" class="btn btn-primary" >close</a>
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
    var phut = Math.floor(time/60);
    var giay = time - phut * 60;
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
                    giay = 60;
                }
            }

            if(phut > 0) {
                var sophut = phut + ' phút';
            } else {
                var sophut = '';
            }
            txtThoiGian.innerHTML = sophut + ' ' + giay + ' ' + 'giây';
            giay--;
			var ok=phut*60+giay;
			
			document.cookie = "time_exam="+ok;
        }, 1000);
    
  </script>
  
   
  </body>
</html>