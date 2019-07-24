<?php 

require('menu_atas.php'); ?>

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
<body>
	<div style="height: 768px;">
	<center>
		<h1>Tambah Delivery</h1>
		<br>
		<br>
		<!-- input data barang -->
		<form action="cek_tambah_delivery.php" method="post">
						<div class="col-md-4" style="margin-left: 200px;">
						<table>
							<tr>
								<td>No. Do &nbsp;&nbsp;</td>
								<td>:&nbsp;&nbsp;</td>
								<td><input type="text" name="no_do" class="form-control"></td>
								<td>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</td>
							</tr>
							<tr><td colspan="3"><br></td></tr>
							<tr>
								<td>No. PO &nbsp;&nbsp;</td>
								<td>:&nbsp;&nbsp;</td>
								<td><select name="no_po" id="Penjualan" onchange="changeValue(this.value)" class="form-control">
									<?php
									$link=mysqli_connect('localhost','root','','db_penjualan');
									$hasil = mysqli_query($link,"select * from penjualan");
									$javaArray = "var Penj = new Array();\n";
									echo "<option value='0' dselected/>Pilih</option>";
									while ($row = mysqli_fetch_array($hasil)) {

										echo "<option value='".$row['no_po']."'>".$row['no_po']."</option>";
										$javaArray .= "Penj['" . $row['no_po'] . "'] = {id_kons:'" . addslashes($row['id_k']) . "',nama_kons:'".addslashes($row['nm_k'])."',alamat_kons:'" . addslashes($row['alamat_k']) . "',telepon_kons:'" . addslashes($row['telp_k']) . "',email_kons:'" . addslashes($row['email_k']) . "',Kode_Bar:'" . addslashes($row['kode_brg']) . "',nama_brg:'" . addslashes($row['nm_brg']) ."',jumlah_brg:'" . addslashes($row['qty']) ."',satuan_brg:'" . addslashes($row['satuan']) ."'};\n";
									}
									mysqli_close($link);
									?>
								</select></td>
							</tr>
							<tr><td colspan="3"><br></td></tr>
							<tr>
								<td>Tgl. Do &nbsp;&nbsp;</td>
								<td>:&nbsp;&nbsp;</td>
								<td><input type="date" name="tgl_do" class="form-control"></td>
							</tr>
							<tr><td colspan="3"><br></td></tr>
							<tr>
								<td>ID Konsumen &nbsp;&nbsp;</td>
								<td>:&nbsp;&nbsp;</td>
								<td><input type="text" name="id_ko" id="id_k" class="form-control"></td>
							</tr>
							<tr><td colspan="3"><br></td></tr>
							<tr>
								<td>Nama Konsumen &nbsp;&nbsp;</td>
								<td>:&nbsp;&nbsp;</td>
								<td><input type="text" name="nm_k" id="nm_k" class="form-control"></td>
							</tr>
							<tr><td colspan="3"><br></td></tr>
							<tr>
								<td>Alamat Konsumen &nbsp;&nbsp;</td>
								<td>:&nbsp;&nbsp;</td>
								<td><textarea name="alamat_k" id="alamat_k" class="form-control"></textarea></td>
							</tr>
						</table>
						</div>

						<div class="col-md-4">
						<table>
							<tr>
								<td>No.Telp &nbsp;&nbsp;</td>
								<td>:&nbsp;&nbsp;</td>
								<td><input type="text" name="telp_k" id="telp_k" class="form-control"></td>
							</tr>
							<tr><td colspan="3"><br></td></tr>
							<tr>
								<td>e-mail &nbsp;&nbsp;</td>
								<td>:&nbsp;&nbsp;</td>
								<td><input type="text" name="email_k" id="email_k" class="form-control"></td>
							</tr>
							<tr><td colspan="3"><br></td></tr>
							<tr>
								<td>Kode Barang &nbsp;&nbsp;</td>
								<td>:&nbsp;&nbsp;</td>
								<td><input type="text" name="kode_bar" id="kode_b" class="form-control"></td>
							</tr>
							<tr><td colspan="3"><br></td></tr>
							<tr>
								<td>Nama Barang &nbsp;&nbsp;</td>
								<td>:&nbsp;&nbsp;</td>
								<td><input type="text" name="nm_brg" id="nm_brg" class="form-control"></td>
							</tr>
							<tr><td colspan="3"><br></td></tr>
							<tr>
								<td>Jumlah Barang &nbsp;&nbsp;</td>
								<td>:&nbsp;&nbsp;</td>
								<td><input type="text" name="jml_brg" id="jml_brg" class="form-control"></td>
							</tr>
							<tr><td colspan="3"><br></td></tr>
							<tr>
								<td>Satuan &nbsp;&nbsp;</td>
								<td>:&nbsp;&nbsp;</td>
								<td><input type="text" name="satuan" id="satuan" class="form-control"></td>
							</tr>
							<tr><td colspan="3"><br></td></tr>
							<tr>
								
								<td colspan="3"><p align="left"><input type="submit" class="btn btn-primary" value="Save">&nbsp;</p></td>
							</tr>
						</table>
					</div>
	
				</form>
				</div>
	</center>

	<script type="text/javascript">  
	<?php echo $javaArray; ?>
	function changeValue(Penjualan){
	document.getElementById('id_k').value = Penj[Penjualan].id_kons;
	document.getElementById('nm_k').value = Penj[Penjualan].nama_kons;
	document.getElementById('alamat_k').value = Penj[Penjualan].alamat_kons;
	document.getElementById('telp_k').value = Penj[Penjualan].telepon_kons;
	document.getElementById('email_k').value = Penj[Penjualan].email_kons;

	document.getElementById('kode_b').value = Penj[Penjualan].Kode_Bar;
	document.getElementById('nm_brg').value = Penj[Penjualan].nama_brg;
	document.getElementById('jml_brg').value = Penj[Penjualan].jumlah_brg;
	document.getElementById('satuan').value = Penj[Penjualan].satuan_brg;
	};
	</script>

<?php require('modal_filter.php');?>

<?php require('menu_bawah.php');?>