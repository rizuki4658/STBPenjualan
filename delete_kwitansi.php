<?php
	$link=mysqli_connect('localhost','root','','db_penjualan');

	$nomor = $_GET['no_kw'];

	$query = "DELETE FROM kwitansi WHERE no_kw='$nomor'";
	$hapus = mysqli_query($link, $query);

	if (!$query){
		echo "Data Gagal Dihapus";
	}else{
		echo "Data Berhasil Dihapus";
		header("location:Kwitansi.php");
	}
?>