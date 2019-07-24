<!DOCTYPE html>
<html>
<head>
	<title>Proses</title>
</head>
<body>
	<?php
		session_start();
		$id=$_GET['id_k'];
		$link=mysqli_connect('localhost','root','','db_penjualan');
		$query="DELETE FROM konsumen WHERE id_k=$id";
		$hasil=mysqli_query($link, $query);
		if (!$hasil) {
			echo "data gagal dihapus";
			header("location:Konsumen.php");
		}else{
			$_SESSION['pesan_k_hapus']=" ";
			header("location:Konsumen.php");
		}
	?>
</body>
</html>