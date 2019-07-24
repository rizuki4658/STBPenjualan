<?php require('menu_atas.php'); ?>

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
    <br>
      <br>
	<center>
		<h1>Tambah Data Kwitansi</h1>
		<br>
		<div style="height: 768px;">
		<!-- input data barang -->
		<form action="cek_tambah_kwitansi.php" method="post">
						
						<table>
							<tr>
								<td>No Kwitansi&nbsp;&nbsp;</td>
								<td>:&nbsp;&nbsp;</td>
								<td><input name="no_kw" type="text" class="form-control"></td>
							</tr>
							<tr><td colspan="3"><br></td></tr>
							<tr>
								<td>No Referensi&nbsp;&nbsp;</td>
								<td>:&nbsp;&nbsp;</td>
								<td><input name="no_referensi" type="text" class="form-control"></td>
							</tr>
							<tr><td colspan="3"><br></td></tr>
							<tr>
								<td>Tanggal Kwitansi&nbsp;&nbsp;</td>
								<td>:&nbsp;&nbsp;</td>
								<td><input name="tgl_kw" type="date" class="form-control"></td>
							</tr>
							<tr><td colspan="3"><br></td></tr>
							<tr>
								<td>ID Konsumen&nbsp;&nbsp;</td>
								<td>:&nbsp;&nbsp;</td>
								<td><select name="id_k" id="konsumen" onchange="changeValue(this.value)" class="form-control">
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
								</select></td>
							</tr>
							<tr><td colspan="3"><br></td></tr>
							<tr>
								<td>Nama Konsumen&nbsp;&nbsp;</td>
								<td>:&nbsp;&nbsp;</td>
								<td><input name="nm_k" type="text" id="nama_kons" class="form-control"></td>
							</tr>
							<tr><td colspan="3"><br></td></tr>
							<tr>
								<td>Nama Pekerjaan&nbsp;&nbsp;</td>
								<td>:&nbsp;&nbsp;</td>
								<td><input name="nm_pekerjaan" type="text" id="nama_pekerjaan" class="form-control"></td>
							</tr>
							<tr><td colspan="3"><br></td></tr>
							<tr>
								<td>Jumlah Bayar&nbsp;&nbsp;</td>
								<td>:&nbsp;&nbsp;</td>
								<td><input name="jml_byr" type="text" id="jumlah_bayar" class="form-control"></td>
							</tr>
							<tr><td colspan="3"><br></td></tr>
							<tr>
								<td colspan="3"><p align="right"><input type="submit" class="btn btn-primary" value="Save">&nbsp;</p></td>
							</tr>
						</table>
					
		</form>
		</div>
	</center>
	<script type="text/javascript">  
	<?php echo $javaArray; ?>
	function changeValue(konsumen){
	document.getElementById('nama_kons').value = KonsName[konsumen].nama_kons;
	document.getElementById('nama_pekerjaan').value = KonsName[konsumen].nama_pekerjaan;
	document.getElementById('jumlah_bayar').value = KonsName[konsumen].jumlah_bayar;
	};
</script>

<?php require('modal_filter.php');?>

<?php require('menu_bawah.php');?>