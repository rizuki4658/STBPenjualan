<!DOCTYPE html>
<html>
<head>
	<title>LAPORAN DELIVERY ORDER</title>
</head>
<body>
	<br>
	<br>
	<br>
	<center>
		<form action="Laporan_DO.php" method="Get">
			<?php echo "<select name='Kondisi'>";
						    
						    $link = mysqli_connect('localhost','root','','db_penjualan');
							$hasil = mysqli_query($link,"select distinct * from delivery");
							echo "<option value='0' dselected/>Pilih</option>";
						    while ($row = mysqli_fetch_array($hasil)) { 

						    echo "<option value='".$row['no_do']."' name='nomor_do' id='nomor_do'>".$row['no_do']."</option>";

							}
							mysqli_close($link);
						    
			echo "</select>";
			?>
			<?php echo "<select name='Kondisi_2'>";
						    
						    $link = mysqli_connect('localhost','root','','db_penjualan');
							$hasil = mysqli_query($link,"select distinct * from delivery");
							echo "<option value='0' dselected/>Pilih</option>";
						    while ($row = mysqli_fetch_array($hasil)) { 

							echo "<option value='".$row['no_po']."' name='nomor_po' id='nomor_po'>".$row['no_po']."</option>";
			
							}
							mysqli_close($link);
						    
			echo "</select>";

			?>
			<button>Show</button>						   
		</form>
	</center>
</body>
</html>