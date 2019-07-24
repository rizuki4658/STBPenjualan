<?php
session_start();
	$link=mysqli_connect('localhost','root','','db_penjualan');

	$kode_brg = $_GET['kode_brg'];

	$query = "DELETE FROM barang WHERE kode_brg=$kode_brg";
	$hapus = mysqli_query($link, $query);

	if (!$query){
		echo "Data Gagal Dihapus";
	}else{
		$_SESSION['pesan_brg_hapus']="";
		header("location:list_barang.php");
	}
?>