<?php
					if(isset($_GET['menu'])){	
						if($_GET['menu']=='cauhoi_list'){
							include "cauhoi_list.php";
						}else if($_GET['menu']=='cauhoi_news'){
							include("cauhoi_news.php");
						}else if($_GET['menu']=='cauhoi_delete'){
							include("cauhoi_delete.php");
						}else if($_GET['menu']=='cauhoi_edit'){
							include("cauhoi_edit.php");
						}else if($_GET['menu']=='cauhoi_saveedit'){
							include("cauhoi_saveedit.php");
						}
                        if($_GET['menu']=='capnhatthongtin'){
                            include "doithongtin.php";
                        }
                        if($_GET['menu']=='doimatkhau'){
                            include "page3_gv.php";
                        }

						if($_GET['menu']=='quanlytaikhoan'){
							include "quanlytaikhoan.php";
						}else if($_GET['menu']=='taikhoan_news') {
                            include("dangky_pdt.php");
                        }
                        if($_GET['menu']=='duyetdethi'){
                            include("../view/duyetdethi.php");
                        }
						
						if($_GET['menu']=='dethi_list'){
							include ("dethi_list.php");
						}elseif($_GET['menu']=='dethi_edit'){
							include "dethi_edit.php";
						}elseif($_GET['menu']=='dethi_saveedit'){
							include "dethi_saveedit.php";
						}else if($_GET['menu']=='dethi_delete'){
							include("dethi_delete.php");
						}else if($_GET['menu']=='dethi_news'){
							include("dethi_news.php");
						}
						if($_GET['menu']=='quanlyhocsinh'){
							include ("quanlyhocsinh.php");
						}elseif($_GET['menu']=='hocsinh_edit'){
							include "hocsinh_edit.php";
						}elseif($_GET['menu']=='hocsinh_saveedit'){
							include "hocsinh_saveedit.php";
						}else if($_GET['menu']=='hocsinh_delete'){
							include("hocsinh_delete.php");
						}else if($_GET['menu']=='hocsinh_news'){
							include("dangkysinhvien.php");
						}
						
						if($_GET['menu']=='quanlygiaovien'){
							include ("quanlygiaovien.php");
						}elseif($_GET['menu']=='giaovien_edit'){
							include "giaovien_edit.php";
						}elseif($_GET['menu']=='giaovien_saveedit'){
							include "giaovien_saveedit.php";
						}else if($_GET['menu']=='giaovien_delete'){
							include("giaovien_delete.php");
						}else if($_GET['menu']=='giaovien_news'){
							include("dangky.php");
						}
						else if($_GET['menu']=='lout'){
							include("../controler/xulydangxuat.php");
						}
						
						
						
						else{
						}
					}else
						include "quanlytaikhoan.php";
				?>