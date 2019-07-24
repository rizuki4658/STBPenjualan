<?php 
$link = mysqli_connect("localhost", "root", "", "db_penjualan");
if (!$link){
	die('ada error'. mysqli_connect_error());
}
?>