<?php
					if(isset($_GET['menu'])){
						if($_GET['menu']=='quanlytaikhoan'){
							include "../../view/quanlytaikhoan.php";
						}else if($_GET['menu']=='taikhoan_news') {
                            include("../../view/dangky_pdt.php");
                        }
						if($_GET['menu']=='quanlyhocsinh'){
							include ("../../view/quanlyhocsinh_admin.php");
						}elseif($_GET['menu']=='hocsinh_edit'){
							include "../../view/hocsinh_edit_admin.php";
						}elseif($_GET['menu']=='hocsinh_saveedit'){
							include "../../view/hocsinh_savedit_admin.php";
						}
						if($_GET['menu']=='quanlygiaovien'){
							include ("../../view/quanlygiaovien_admin.php");
						}elseif($_GET['menu']=='giaovien_edit'){
							include "../../view/giaovien_edit_admin.php";
						}elseif($_GET['menu']=='giaovien_saveedit'){
							include "../../view/giaovien_savedit_admin.php";
						}
						else if($_GET['menu']=='lout'){
							include("../controler/xulydangxuat.php");
						}
						
						
						
						else{
						}
					}else
						include "quanlytaikhoan.php";
				?>