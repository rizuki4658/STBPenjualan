<?php
session_start();
	$link=mysqli_connect('localhost','root','','db_penjualan');

	$no = $_GET['no_po'];

	$query = "DELETE FROM penjualan WHERE No_po=$no";
	$hapus = mysqli_query($link, $query);

	if (!$query){
		header("location:Penjualan.php");
	}else{
		$_SESSION['pesan_p_hapus']=" ";
		header("location:Penjualan.php");
	}
?>