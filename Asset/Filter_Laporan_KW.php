<!DOCTYPE html>
<html>
<head>
	<title>KWITANSI</title>
</head>
<body>
	<h1>KWITANSI</h1>
	<form action="Laporan_KW.php" method="GET">
		<table>
			<tr>
				<td>No. Kwitansi &nbsp;&nbsp;</td>
				<td>:&nbsp;&nbsp;</td>
				<td><select name="no_kw" id="Kwitansi" onchange="changeValue(this.value)">
					<?php
						    $link=mysqli_connect('localhost','root','','db_penjualan');
							$hasil = mysqli_query($link,"select distinct * from kwitansi");
							$javaArray = "var KwName = new Array();\n";
						    echo "<option value='0' dselected/>Pilih</option>";
						    while ($row = mysqli_fetch_array($hasil)) { 

						    echo "<option value='".$row['no_kw']."'>".$row['no_kw']."</option>";
						    $javaArray .= "KwName['" . $row['no_kw'] . "'] = {nama_kons:'" . addslashes($row['nm_k']) . "',jumlah_bayar:'" . addslashes($row['jml_byr']) ."',nama_pekerjaan:'" . addslashes($row['nm_pekerjaan']) ."'};\n";
							}
							mysqli_close($link);
						    ?>
							</select><p></p></td>
			</tr>
			<tr>
				<td>Telah terima dari &nbsp;&nbsp;</td>
				<td>:&nbsp;&nbsp;</td>
				<td><input type="text" name="nm_k" id="nama_kons"><p></p></td>
			</tr>
			<tr>
				<td>Uang sejumlah &nbsp;&nbsp;</td>
				<td>:&nbsp;&nbsp;</td>
				<td><input type="text" name="jml_byr" id="jumlah_bayar"><p></p></td>
			</tr>
			<tr>
				<td>Untuk pembayaran &nbsp;&nbsp;</td>
				<td>:&nbsp;&nbsp;</td>
				<td><input type="text" name="nm_pekerjaan" id="nama_pekerjaan"><p></p></td>
			</tr>
			<tr>
			<td><button>Show</button></td>
		</tr>
		</table>
	</form>
	<script type="text/javascript">  
	<?php echo $javaArray; ?>
	function changeValue(Kwitansi){
	document.getElementById('nama_kons').value = KwName[Kwitansi].nama_kons;
	document.getElementById('jumlah_bayar').value = KwName[Kwitansi].jumlah_bayar;
	document.getElementById('nama_pekerjaan').value = KwName[Kwitansi].nama_pekerjaan;
	};
</script>

</body>
</html>