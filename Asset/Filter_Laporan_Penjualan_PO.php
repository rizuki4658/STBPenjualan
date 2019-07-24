<!DOCTYPE html>
<html>
<head>
	<title>Laporan Penjualan</title>
</head>
<body>
<br>
<br>
<br>
<form action="Laporan_Penjualan_PO.php" method="post">
<select name="nomor_po">
	<option>Pilih</option>
		<?php
		$link0=mysqli_connect('localhost','root','','db_penjualan');
		$hasil0 = mysqli_query($link0,"select distinct * from penjualan");
		while ($row0 = mysqli_fetch_array($hasil0)) { 
			echo "<option value='".$row0['no_po']."'>".$row0['no_po']."</option>";
		}
		?>
</select>
<button>Show</button>
</form> 
</body>
</html>