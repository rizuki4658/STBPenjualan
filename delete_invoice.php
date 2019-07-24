<?php
session_start();
	$link=mysqli_connect('localhost','root','','db_penjualan');

	$id = $_GET['id'];;

	$query = "DELETE FROM invoice WHERE id=$id";
	$hapus = mysqli_query($link, $query);

	if (!$query){
		echo "Data Gagal Dihapus";
		header("location:invoice.php");
	}else{
		$_SESSION['pesan_inv_hapus']=" ";
		header("location:invoice.php");
	}
?>