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
                        if($_GET['menu']=='giaovien'){
                            include "Page5_gv.php";
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
                    }else
                        include "Page5_gv.php";
				?>