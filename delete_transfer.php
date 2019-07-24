<?php
	$link=mysqli_connect('localhost','root','','db_penjualan');

	$nomor = $_GET['no_referensi'];

	$query = "DELETE FROM transfer WHERE no_referensi='$nomor'";
	$hapus = mysqli_query($link, $query);

	if (!$query){
		echo "Data Gagal Dihapus";
	}else{
		echo "Data Berhasil Dihapus";
		header("location:Transfer.php");
	}
?>