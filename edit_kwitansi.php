<?php require('menu_atas.php');?>
  <center>
    <div style="background-image: url('gambar/Desktop.gif'); 
      height: 250px;
      background-repeat: no-repeat; 
      background-position: center;
      ">
      <div align="left"><?php require('dropdown.php'); ?></div>
  
  <center>
    <p style="text-align: center;
      font-family: sans-serif;
      color: #ffffff;">

      <img src="gambar/logo hi res5.png" width="150" height="150">
      <nav aria-label="Page navigation example">
  
    </p>
  </center>
  <br>
  <br>
  <br>
	<center>
		<h1>Edit Data Kwitansi</h1>

  		<!-- input data barang -->
		<?php
  		$link=mysqli_connect('localhost','root','','db_penjualan');

  		$nomor = $_GET['no_kw'];
  		$query="SELECT * FROM kwitansi WHERE no_kw=$nomor";
 		$hasil = mysqli_query($link,$query);
  		if (mysqli_num_rows($hasil) > 0){

    	while ($data = mysqli_fetch_assoc($hasil)) {
    		echo "<form action='cek_edit_kwitansi.php' method='post'>
  			<table border='0' style='border-color: #00008B'>
				<tr>
					<td>
						<table>
						<tr><td colspan='5'><input type='hidden' value='".$data['no_kw']."'></td</tr>
							<tr><td colspan='5'><p></p></td></tr>
							<tr>
								<td>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</td>
								<td>No Kwitansi&nbsp;&nbsp;</td>
								<td>:&nbsp;&nbsp;</td>
								<td><input value='".$data['no_kw']."' name='no_kw' type='text' class='form-control'><p></td></p>
								<td>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</td>
							</tr>
							<tr><td colspan='5'><p></p></td></tr>
							<tr>
								<td>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</td>
								<td>No Referensi&nbsp;&nbsp;</td>
								<td>:&nbsp;&nbsp;</td>
								<td><input value='".$data['no_referensi']."' name='no_referensi' type='text' class='form-control'><p></p></td>
								<td>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</td>
							</tr>
							<tr><td colspan='5'><p></p></td></tr>
							<tr>
								<td>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</td>
								<td>Tanggal Kwitansi&nbsp;&nbsp;</td>
								<td>:&nbsp;&nbsp;</td>
								<td><input value='".$data['tgl_kw']."' name='tgl_kw' type='date' class='form-control'><p></p></td>
								<td>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</td>
							</tr>
							<tr><td colspan='5'><p></p></td></tr>
							<tr>
								<td>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</td>
								<td>ID Konsumen&nbsp;&nbsp;</td>
								<td>:&nbsp;&nbsp;</td>
								<td><select name='id_k' id='konsumen' onchange='changeValue(this.value)' class='form-control'>;"?>
								<?php
							    $link=mysqli_connect('localhost','root','','db_penjualan');
								$hasil = mysqli_query($link,"select * from invoice");
								$javaArray = "var KonsName = new Array();\n";
							    echo "<option value='0' dselected/>Pilih</option>";
							    while ($row = mysqli_fetch_array($hasil)) { 

							    echo "<option value='".$row['id_k']."'>".$row['id_k']."</option>";
							    $javaArray .= "KonsName['" . $row['id_k'] . "'] = {nama_kons:'" . addslashes($row['nm_k']) . "',nama_pekerjaan:'".addslashes($row['nm_pekerjaan'])."',jumlah_bayar:'" . addslashes($row['total']) . "'};\n";
								}
								mysqli_close($link);
							    ?>
								<?php
								echo "</select><p></p></td>
								<td>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</td>
							</tr>
							<tr><td colspan='5'><p></p></td></tr>
							<tr>
								<td>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</td>
								<td>Nama Konsumen&nbsp;&nbsp;</td>
								<td>:&nbsp;&nbsp;</td>
								<td><input value='".$data['nm_k']."' name='nm_k' id='nama_kons' type='text' class='form-control'><p></p></td>
								<td>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</td>
							</tr>
							<tr><td colspan='5'><p></p></td></tr>
							<tr>
								<td>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</td>
								<td>Nama Pekerjaan&nbsp;&nbsp;</td>
								<td>:&nbsp;&nbsp;</td>
								<td><input value='".$data['nm_pekerjaan']."' name='nm_pekerjaan' id='nama_pekerjaan' type='text' class='form-control'><p></p></td>
								<td>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</td>
							</tr>
							<tr><td colspan='5'><p></p></td></tr>
							<tr>
								<td>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</td>
								<td>Jumlah Bayar&nbsp;&nbsp;</td>
								<td>:&nbsp;&nbsp;</td>
								<td><input value='".$data['jml_byr']."' name='jml_byr' id='jumlah_bayar' type='text' class='form-control'><p></p></td>
								<td>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</td>
							</tr>
							<tr><td colspan='5'><p></p></td></tr>
							<tr>

								<td colspan='5'><p align='right'><button class='btn btn-warning'>Edit</button></p></td>
								<td></td>
							</tr>
						</table>
					</td>
				</tr>
			</table>
		</form>";
}
}
?>
<br>
<br>
<br>
<br>
</center>

<?php require('modal_filter.php');?>

<?php require('menu_bawah.php'); ?></div>


<script type="text/javascript">  
	<?php echo $javaArray; ?>
	function changeValue(konsumen){
	document.getElementById('nama_kons').value = KonsName[konsumen].nama_kons;
	document.getElementById('nama_pekerjaan').value = KonsName[konsumen].nama_pekerjaan;
	document.getElementById('jumlah_bayar').value = KonsName[konsumen].jumlah_bayar;
	};
</script>

<script type="text/javascript" src="bootstrap-3.3.7/dist/js/bootstrap.js"></script>
</body>
</html>