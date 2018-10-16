<?php
$server='localhost';
$user='root';
$pass='';
$db ="thitracnghiem";

$conn= mysqli_connect($server, $user, $pass);
mysqli_set_charset($conn,'utf8');
if ( !$conn ) {
	//Không kết nối được, thoát ra và báo lỗi
	die("Không nết nối được vào MySQL server!");
}
//chon CSDL de lam viec
mysqli_select_db($conn,$db) or die("Khong the chon duoc CSDL".mysqli_error($conn));
?>
