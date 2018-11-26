<script>
 function getHTTPObject(){
         
	if (window.ActiveXObject) return new ActiveXObject("Microsoft.XMLHTTP");// trinh duyet ie
	else if (window.XMLHttpRequest) return new XMLHttpRequest(); //trinh duyet chome,fifox...
	else {
	alert("Xin lỗi trình duyệt không hỗ trợ chức năng này!");
	return null;
	}
}
            function load_ajax(get)
            {
			   var malop=document.getElementById("chonmonthi");
			   var lanthi=document.getElementById("chonngaythi");
			   var dotthi=document.getElementById("chondotthi");
			   var hocky=document.getElementById("chonhocky");
                xmlhttp=getHTTPObject();
                xmlhttp.open("GET","../controler/kiemtralichthi.php?mamon="+malop.value+"&& lanthi="+lanthi.value+"&& dotthi="+dotthi.value+"&& hocky="+hocky.value, true);
                xmlhttp.send();
				
                 xmlhttp.onreadystatechange =setOutput;
				
            }
            function setOutput(){
	if(xmlhttp.readyState == 4 && xmlhttp.status == 200){ //gia tri 4 và 200 la mat định
	
	if(xmlhttp.responseText.trim()=="1"){ document.getElementById('True').innerHTML = " <label>Trong thời gian thi, nhấn nút Bắt đầu để thi!!!</label><br><input type='submit' class='btn btn-primary btn-lg' target='_blank' value='Bắt đầu' />  ";}
	if(xmlhttp.responseText.trim()=="0") document.getElementById('True').innerHTML = "   <label>Chưa tới ngày thi!!!</label>";
	
            }
			
        }
</script>
<div class=" tab-pane fade  " id="bailamthi" >
                     <h3>Nhập thông tin trước khi bắt đầu thi!</h3> 
                        <form name="MyForm" action="lambaithi.php" method="post" ">
                          <ul class="list-inline">						  
                          <li class="col-md-2">
                            <label >Chọn môn:</label>
                            <select class="form-control" name="monselect" id="chonmonthi">
                                    <?php include '../controler/dethi_daduyet.php';?>
                            </select>
                          </li >
                              <li class="col-md-2">
                            <label >Ngày thi:</label>
                            <input class="form-control" name="ngaythi" value="<?php echo $currentDate;?>" readonly="readonly" id="chonngaythi"></input>
                          </li >
						    <li class="col-md-2">
                            <label >Chọn kỳ thi:</label>
                            <select class="form-control" name="dotthi" id="chondotthi">
                              <option value="1">Ca sáng</option>
                              <option value="2">Ca chiều</option>
                            </select>
                          </li >
                              <li class="col-md-2">
                                  <label >Chọn học kỳ:</label>
                                  <select class="form-control" name="hockyselect" id="chonhocky">
                                      <option value="1">Học kỳ 1</option>
                                      <option value="2">Học kỳ 2</option>
                                  </select>
                              </li >
                          <li  class="col-md-3 col-md-offset-1"  >
                            <div type="button" id="NutKiemTra" class="btn btn-info btn-lg" onclick="load_ajax(<?php echo $_SESSION['id'] ?>)" >Kiểm tra</div>
                          </li>
                        </ul>
                        <br>
                        <br>
                         <br>
                        <br>
                        <div class="jumbotron text-center phanthi col-md-offset-2" id="True">
                          <label>Trong thời gian thi, nhấn nút Bắt đầu để thi!!!</label>
                          <br>
                          
						   <input type='submit' class='btn btn-primary btn-lg' target='_blank' value='Bắt đầu' /> 
						  
						   
                        </div>
						  </form>
                    </div>