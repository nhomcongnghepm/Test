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
						
						if($_GET['menu']=='tintuc_list'){
							include "tintuc_list.php";
						}else if($_GET['menu']=='tintuc_news'){
							include("tintuc_news.php");
						}else if($_GET['menu']=='tintuc_delete'){
							include("tintuc_delete.php");
						}else if($_GET['menu']=='tintuc_edit'){
							include("tintuc_edit.php");
						}else if($_GET['menu']=='tintuc_saveedit'){
							include("tintuc_saveedit.php");
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
						}else if($_GET['menu']=='thong-ke'){
							include("thong-ke.php");
						}else if($_GET['menu']=='nhan-vien'){
							include("nhan-vien.php");
						}else if($_GET['menu']=='nhanvien_news'){
							include("nhanvien_news.php");
						}else if($_GET['menu']=='phan-quyen'){
							include("nhanvien-phanquyen.php");
						}
						
						else if($_GET['menu']=='lout'){
							include("../controler/xulydangxuat.php");
						}
						
						
						
						else{
						}
					}else
						include "dethi_list.php";
				?>