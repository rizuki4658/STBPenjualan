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
    <div style="height: 768px;">
	<center>
		<h1>Tambah Invoice</h1>
		<br>
	</center>
		<br>
		<!-- input data barang -->
		<form action="cek_tambah_invoice.php" method="post">
				<div class="col-md-3" style="margin-left: 180px;">
						<table>
							<tr>
								<td>No. Invoice &nbsp;&nbsp;</td>
								<td>:&nbsp;&nbsp;</td>
								<td><input type="text" name="no_inv" class="form-control"></td>
							</tr>
							<tr><td><br></td></tr>
							<tr>
								<td>Tgl. Invoice &nbsp;&nbsp;</td>
								<td>:&nbsp;&nbsp;</td>
								<td><input type="date" name="tgl_inv" class="form-control"></td>
							</tr>

							<tr><td><br></td></tr>
							<tr>
								<td>No. PO &nbsp;&nbsp;</td>
								<td>:&nbsp;&nbsp;</td>
								<td><select name="no_po" id="penjualan" onchange="changeValue(this.value)" class="form-control">
									<?php
									$link=mysqli_connect('localhost','root','','db_penjualan');
									$hasil = mysqli_query($link,"select * from penjualan");
									$javaArray = "var KonsName = new Array();\n";
									echo "<option value='0' dselected/>Pilih</option>";
									while ($row = mysqli_fetch_array($hasil)) {

										echo "<option value='".$row['no_po']."'>".$row['no_po']."</option>";
										$javaArray .= "KonsName['" . $row['no_po'] . "'] = {id_kons:'" . addslashes($row['id_k']) . "',nama_kons:'" . addslashes($row['nm_k']) . "',alamat_kons:'".addslashes($row['alamat_k'])."',telepon_kons:'" . addslashes($row['telp_k']) . "',email_kons:'" . addslashes($row['email_k']) . "',nama_pekerjaan:'" . addslashes($row['nm_pekerjaan']) ."',kode_brg:'" . addslashes($row['kode_brg']) ."',nama_brg:'" . addslashes($row['nm_brg']) ."',merk_brg:'" . addslashes($row['merk_brg']) ."',spek_brg:'" . addslashes($row['spek_brg']) ."',quantity:'" . addslashes($row['qty']) ."',satuan:'" . addslashes($row['satuan']) ."',hrg_satuan:'" . addslashes($row['harga_satuan']) ."',jumlah:'" . addslashes($row['jml']) ."',sub_total:'" . addslashes($row['sub_total']) ."',ppn:'" . addslashes($row['ppn']) ."',total:'" . addslashes($row['total']) ."'};\n";
									}
									mysqli_close($link);
									?>
								</select></td>
							</tr>
							<tr><td><br></td></tr>
							<tr>
								<td>ID Konsumen &nbsp;&nbsp;</td>
								<td>:&nbsp;&nbsp;</td>
								<td><input type="text" name="id_k" id="id_kons" class="form-control" readonly="true"></td>
							</tr>
							<tr><td><br></td></tr>
							<tr>
								<td>Nama Konsumen &nbsp;&nbsp;</td>
								<td>:&nbsp;&nbsp;</td>
								<td><input type="text" name="nm_k" id="nama_kons" class="form-control" readonly="true"></td>
							</tr>
							<tr><td><br></td></tr>
							<tr>
								<td>Alamat Konsumen &nbsp;&nbsp;</td>
								<td>:&nbsp;&nbsp;</td>
								<td><textarea name="alamat_k" id="alamat_kons" class="form-control" readonly="true"></textarea></td>
							</tr>

							<tr><td><br></td></tr>
							<tr>
								<td>No.Telp &nbsp;&nbsp;</td>
								<td>:&nbsp;&nbsp;</td>
								<td><input type="text" name="telp_k" id="telepon_kons" class="form-control" readonly="true"></td>
							</tr>
							<tr><td><br></td></tr>
							<tr>
								<td>e-mail &nbsp;&nbsp;</td>
								<td>:&nbsp;&nbsp;</td>
								<td><input type="text" name="email_k" id="email_kons" class="form-control" readonly="true"></td>
							</tr>
							<tr><td><br></td></tr>
							<tr>
								<td>Nama Pekerjaan &nbsp;&nbsp;</td>
								<td>:&nbsp;&nbsp;</td>
								<td><input type="text" name="nm_pekerjaan" id="nama_pekerjaan" class="form-control" readonly="true"></td>
							</tr>
						</table>
					</div>
					<div class="col-md-3" style="margin-left: 50px;">
						<table>
							<tr>
								<td>Kode Barang &nbsp;&nbsp;</td>
								<td>:&nbsp;&nbsp;</td>
								<td><input type="text" name="kode_brg" id="kode_barang" class="form-control" readonly="true"></td>
							</tr>
							<tr><td><br></td></tr>
							<tr>
								<td>Nama Barang &nbsp;&nbsp;</td>
								<td>:&nbsp;&nbsp;</td>
								<td><input type="text" name="nm_brg" id="nama_barang" class="form-control" readonly="true"></td>
							</tr>
							<tr><td><br></td></tr>
							<tr>
								<td>Merk Barang &nbsp;&nbsp;</td>
								<td>:&nbsp;&nbsp;</td>
								<td><input type="text" name="merk_brg" id="merek_barang" class="form-control" readonly="true"></td>
							</tr>
							<tr><td><br></td></tr>
							<tr>
								<td>Spek Barang &nbsp;&nbsp;</td>
								<td>:&nbsp;&nbsp;</td>
								<td><textarea name="spek_brg" id="sfek_barang" class="form-control" readonly="true"></textarea></td>
							</tr>
							<tr><td><br></td></tr>
							<tr>
								<td>Quantity &nbsp;&nbsp;</td>
								<td>:&nbsp;&nbsp;</td>
								<td><input type="text" name="qty" id="quantity" class="form-control" readonly="true"></td>
							</tr>
							<tr><td><br></td></tr>
							<tr>
								<td>Satuan &nbsp;&nbsp;</td>
								<td>:&nbsp;&nbsp;</td>
								<td><input type="text" name="satuan" id="satuan" class="form-control" readonly="true"></td>
							</tr>
							<tr><td><br></td></tr>
							<tr>
								<td>Harga Satuan &nbsp;&nbsp;</td>
								<td>:&nbsp;&nbsp;</td>
								<td><input type="text" name="harga_satuan" id="harga_satuan" class="form-control" readonly="true"></td>
							</tr>
							<tr><td><br></td></tr>
							<tr>
								<td>Jumlah &nbsp;&nbsp;</td>
								<td>:&nbsp;&nbsp;</td>
								<td><input type="text" name="jml" id="jumlah" class="form-control" readonly="true"></td>
							</tr>
							<tr><td><br></td></tr>
							<tr>
								<td>Sub Total &nbsp;&nbsp;</td>
								<td>:&nbsp;&nbsp;</td>
								<td><input type="text" name="sub_total" id="sub_total" class="form-control" readonly="true"></td>
							</tr>
						</table>
					</div>
						<div class="col-md-3" style="margin-left: 50px;">
						<table>
							<tr>
								<td>PPN &nbsp;&nbsp;</td>
								<td>:&nbsp;&nbsp;</td>
								<td><input type="text" name="ppn" id="ppn" class="form-control" readonly="true"></td>
							</tr>
							<tr><td><br></td></tr>
							<tr>
								<td>Total &nbsp;&nbsp;</td>
								<td>:&nbsp;&nbsp;</td>
								<td><input type="text" name="total" id="total" class="form-control" readonly="true"></td>
							</tr>
							<tr>
								<td><p align="left"><input type="submit" class="btn btn-primary" value="Save">&nbsp;</p></td>
								<td></td>
							</tr>
						</table>
					</div>
					</td>
				</tr>
			</table>
		</form>
</div>
	<script type="text/javascript">  
	<?php echo $javaArray; ?>
	function changeValue(penjualan){
	document.getElementById('id_kons').value = KonsName[penjualan].id_kons;
	document.getElementById('nama_kons').value = KonsName[penjualan].nama_kons;
	document.getElementById('alamat_kons').value = KonsName[penjualan].alamat_kons;
	document.getElementById('telepon_kons').value = KonsName[penjualan].telepon_kons;
	document.getElementById('email_kons').value = KonsName[penjualan].email_kons;
	document.getElementById('nama_pekerjaan').value = KonsName[penjualan].nama_pekerjaan;
	document.getElementById('kode_barang').value = KonsName[penjualan].kode_brg;
	document.getElementById('nama_barang').value = KonsName[penjualan].nama_brg;
	document.getElementById('merek_barang').value = KonsName[penjualan].merk_brg;
	document.getElementById('sfek_barang').value = KonsName[penjualan].spek_brg;
	document.getElementById('quantity').value = KonsName[penjualan].quantity;
	document.getElementById('satuan').value = KonsName[penjualan].satuan;
	document.getElementById('harga_satuan').value = KonsName[penjualan].hrg_satuan;
	document.getElementById('jumlah').value = KonsName[penjualan].jumlah;
	document.getElementById('sub_total').value = KonsName[penjualan].sub_total;
	document.getElementById('ppn').value = KonsName[penjualan].ppn;
	document.getElementById('total').value = KonsName[penjualan].total;
	};
	</script>

<?php require('modal_filter.php');?>

<?php require('menu_bawah.php');?>