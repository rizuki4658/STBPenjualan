
<?php
	session_start();
		$id=$_POST['id_k'];
		$nama=$_POST['nama_k'];
		$alamat=$_POST['alamat'];
		$telepon=$_POST['telepon'];
		$email=$_POST['mail'];

		$link=mysqli_connect('localhost','root','','db_penjualan');
    	$query1 ="UPDATE konsumen SET nm_k='$nama'  ,alamat_k='$alamat' ,telp_k='$telepon', email_k='$email' WHERE id_k='$id'";
    	$hasil	= mysqli_query($link, $query1);
    	if (!$hasil) {
    		echo "Data gagal diubah !";
    		header("location:edit_konsumen.php");
    	}else{
    		$_SESSION['pesan_k_ubah']=" ";
    		header("location:Konsumen.php");
    	}
	?>
