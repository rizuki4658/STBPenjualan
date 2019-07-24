<?php
session_start();
	$link=mysqli_connect('localhost','root','','db_penjualan');

	$id_d = $_GET['id'];

	$query = "DELETE FROM delivery WHERE id=$id_d";
	$hapus = mysqli_query($link, $query);

	if (!$query){
		header("location:delivery_order.php");
	}else{
		$_SESSION['pesan_do_hapus']=" ";
		header("location:delivery_order.php");
	}
?>