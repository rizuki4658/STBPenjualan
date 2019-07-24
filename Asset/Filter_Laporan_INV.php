<!DOCTYPE html>
<html>
<head>
	<title>LAPORAN INVOICE</title>
</head>
<body>
	<br>
	<br>
	<br>
	<center>
		<form action="Laporan_INV.php" method="Get">
			<?php echo "<select name='Kondisi1'>";
						    
						    $link = mysqli_connect('localhost','root','','db_penjualan');
							$hasil = mysqli_query($link,"select distinct * from invoice");
							echo "<option value='0' dselected/>Pilih</option>";
						    while ($row = mysqli_fetch_array($hasil)) { 

						    echo "<option value='".$row['no_inv']."' name='no_inv' id='no_inv'>".$row['no_inv']."</option>";
						   
							}
							mysqli_close($link);
						    
			echo "</select>";
			?>
			<?php echo "<select name='Kondisi2'>";
						    
						    $link = mysqli_connect('localhost','root','','db_penjualan');
							$hasil = mysqli_query($link,"select distinct * from invoice");
							echo "<option value='0' dselected/>Pilih</option>";
						    while ($row = mysqli_fetch_array($hasil)) { 

						    echo "<option value='".$row['no_po']."' name='no_po' id='no_po'>".$row['no_po']."</option>";
						   
							}
							mysqli_close($link);
						    
			echo "</select>";
			
			?>
			<button>Show</button>
		</form>
	</center>
</body>
</html>