<?php
session_start();
	$link=mysqli_connect('localhost','root','','db_penjualan');

	$user = $_GET['username'];

	$query = "DELETE FROM admin WHERE username='$user'";
	$hapus = mysqli_query($link, $query);

	if (!$query){
		echo "Data Gagal Dihapus";
	}else{
		echo "Data Berhasil Dihapus";
		$_SESSION['pesan_adm_hapus']=" ";
		header("location:Admin.php");
	}
?>