<!DOCTYPE html>
<html>
<head>
	<title>Proses</title>
</head>
<body>
	<?php
	session_start();
		$link=mysqli_connect('localhost','root','','db_penjualan');

		$no_id=$_POST['id_k'];
		$nama_kon=$_POST['nm_k'];
		$alamat_k=$_POST['alamat_k'];
		$telp_kon=$_POST['telp_k'];
		$email=$_POST['email_k'];
	
		$query="SELECT * FROM konsumen WHERE id_k= $no_id";
		$hasil=mysqli_query($link, $query);
		if( mysqli_num_rows($hasil) > 0){
				echo "Id sudah digunakan";
				$_SESSION['pesan_k_gagal']="display:inline;";
	           	header("location:tambah_konsumen.php");
		}else{
			$query2="INSERT INTO konsumen (id_k, nm_k, alamat_k, telp_k, email_k)
	                        VALUES('".$no_id."', '".$nama_kon."', '".$alamat_k."', '".$telp_kon."', '".$email."')";
	        $hasil2=mysqli_query($link, $query2);
	        if (!$hasil) {
	           	$_SESSION['pesan_k_gagal']="display:inline;";
	           	header("location:tambah_konsumen.php");
	         	}else{
	         	  	$_SESSION['pesan_k_berhasil']=" ";
	         	  	header("location:Konsumen.php");
	         	}  
			}	
	?>
</body>
</html>