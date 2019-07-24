<?php 

require('menu_atas.php');?>
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
	<center>
		<h1>Tambah Penjualan</h1>
		<br>
	</center>
	<div style="height: 768px">
	<br>

	<div class="alert alert-danger" role="alert" style="<?php
		if(isset($_SESSION['pesan_p_gagal'])){
 		echo " ";
	 	unset($_SESSION['pesan_p_gagal']);
		}else{
		echo "display: none;";	
		}
		?>">No Sudah digunakan<button type="button" class="close" data-dismiss="alert" aria-label="Close">
    	<span aria-hidden="true">&times;</span>
	</div>
	<br>
		<!-- input data barang -->
		<form action="cek_tambah_penjualan.php" method="post" name="penjualan">
						<div class="col-md-4">
						<table>
							<tr>
								<td>No. Po &nbsp;&nbsp;</td>
								<td>:&nbsp;</td>
								<td><input type="text" name="no_po" class="form-control"></td>
							</tr>

							<tr><td colspan="3"><br></td></tr>
							
							<tr>
								<td>Tgl. Po &nbsp;&nbsp;</td>
								<td>:&nbsp;</td>
								<td><input type="date" name="tgl_po" class="form-control"></td>
							</tr>

							<tr><td colspan="3"><br></td></tr>

							<tr>
								<td>Tgl. Deadline &nbsp;&nbsp;</td>
								<td>:&nbsp;&nbsp;</td>
								<td><input type="date" name="tgl_deadline" class="form-control"><p></p></td>
							</tr>
							<tr><td colspan="3"><br></td></tr>
							<tr>
								<td>ID Konsumen &nbsp;&nbsp;</td>
								<td>:&nbsp;&nbsp;</td>
								<td><select name="id_k" id="konsumen" onchange="changeValue(this.value)" class="form-control">
									<?php
									$link=mysqli_connect('localhost','root','','db_penjualan');
									$hasil = mysqli_query($link,"select * from konsumen");
									$javaArray = "var KonsName = new Array();\n";
									echo "<option value='0' dselected/>Pilih</option>";
									while ($row = mysqli_fetch_array($hasil)) {

										echo "<option value='".$row['id_k']."'>".$row['id_k']."</option>";
										$javaArray .= "KonsName['" . $row['id_k'] . "'] = {nama_kons:'" . addslashes($row['nm_k']) . "',alamat_kons:'".addslashes($row['alamat_k'])."',telepon_kons:'" . addslashes($row['telp_k']) . "',email_kons:'" . addslashes($row['email_k']) . "'};\n";
									}
									mysqli_close($link);
									?>
								</select><p></p></td>
							</tr>
							<tr><td colspan="3"><br></td></tr>
							<tr>
								<td>Nama Konsumen &nbsp;&nbsp;</td>
								<td>:&nbsp;&nbsp;</td>
								<td><input type="text" name="nm_k" id="nama_kons" class="form-control" readonly="true"></td>
							</tr>
							<tr><td colspan="3"><br></td></tr>
							<tr>
								<td>Alamat Konsumen &nbsp;&nbsp;</td>
								<td>:&nbsp;&nbsp;</td>
								<td><textarea name="alamat_k" id="alamat_kons" class="form-control" readonly="true"></textarea></td>
							</tr>
							<tr><td colspan="3"><br></td></tr>
							<tr>
								<td>No.Telp &nbsp;&nbsp;</td>
								<td>:&nbsp;&nbsp;</td>
								<td><input type="text" name="telp_k" id="telepon_kons" class="form-control" readonly="true"></td>
							</tr>
							<tr><td colspan="3"><br></td></tr>
							<tr>
								<td>e-mail &nbsp;&nbsp;</td>
								<td>:&nbsp;&nbsp;</td>
								<td><input type="text" name="email_k" id="email_kons" class="form-control" readonly="true"></td>
							</tr>
							<tr><td colspan="3"><br></td></tr>
							<tr>
								<td>Nama Pekerjaan &nbsp;&nbsp;</td>
								<td>:&nbsp;&nbsp;</td>
								<td><input type="text" name="nm_pekerjaan" class="form-control"></td>
							</tr>
					</table></div>

			<div class="col-md-4">
					<table>
							<tr>
								<td>Kode Barang &nbsp;&nbsp;</td>
								<td>:&nbsp;&nbsp;</td>
								<td><select name="kode_brg" id="Barang" onchange="changeValue1(this.value)" class="form-control">
									<?php
									$link1=mysqli_connect('localhost','root','','db_penjualan');
									$hasil1 = mysqli_query($link1,"select * from barang");
									$javaArray1 = "var KodsBarang = new Array();\n";
									echo "<option value='0' dselected/>Pilih</option>";
									while ($row1 = mysqli_fetch_array($hasil1)) { 

										echo "<option value='".$row1['kode_brg']."'>".$row1['kode_brg']."</option>";
										$javaArray1 .= "KodsBarang['" . $row1['kode_brg'] . "'] = {nama_brg:'" . addslashes($row1['nm_brg']) ."',merk_brg:'" . addslashes($row1['merk_brg']) ."',spek_brg:'" . addslashes($row1['spek_brg']) ."',satuan_brg:'" . addslashes($row1['satuan']) ."',harga_sat:'" . addslashes($row1['harga_brg']) ."'};\n";
									}
									mysqli_close($link);
									?>
								</select></td>
							</tr>
							<tr><td colspan="3"><br></td></tr>
							<tr>
								<td>Nama Barang &nbsp;&nbsp;</td>
								<td>:&nbsp;&nbsp;</td>
								<td><input type="text" name="nm_brg" id="nama_barang" class="form-control" readonly="true"></td>
							</tr>
							<tr><td colspan="3"><br></td></tr>
							<tr>
								<td>Merk Barang &nbsp;&nbsp;</td>
								<td>:&nbsp;&nbsp;</td>
								<td><input type="text" name="merk_brg" id="merek_barang" class="form-control" readonly="true"></td>
							</tr>
							<tr><td colspan="3"><br></td></tr>
							<tr>
								<td>Spek Barang &nbsp;&nbsp;</td>
								<td>:&nbsp;&nbsp;</td>
								<td><textarea name="spek_brg" id="sfek_barang" class="form-control" readonly="true"></textarea></td>
							</tr>
							<tr><td colspan="3"><br></td></tr>
							<tr>
								<td>Quantity &nbsp;&nbsp;</td>
								<td>:&nbsp;&nbsp;</td>
								<td><input type="text" name="qty" id="qty" class="form-control" onfocus="StartHitung();" onkeypress="return hanyaAngka(event)" onblur="StopHitung();"></td>
								<script>
									function hanyaAngka(evt) {
									  var charCode = (evt.which) ? evt.which : event.keyCode
									   if (charCode > 31 && (charCode < 48 || charCode > 57))
							 			
										return false;
									  return true;
									}
								</script>
								<script>
									function StartHitung(){
									interval = setInterval("calc()",1);}
									function calc(){
									kuantitas = document.penjualan.qty.value;
									harga = document.penjualan.harga_barang.value;
									jumlah=kuantitas*harga;
									sub=jumlah;
									pajak=sub*0.1;
									bersih=sub-pajak;
									document.penjualan.jml.value = (jumlah);
									document.penjualan.sub_total.value=(sub);
									document.penjualan.ppn.value=(pajak);
									document.penjualan.total.value=(bersih);
									}
									function StopHitung(){
									clearInterval(interval);}
								</script>
							</tr>
							<tr><td colspan="3"><br></td></tr>
							<tr>
								<td>Satuan &nbsp;&nbsp;</td>
								<td>:&nbsp;&nbsp;</td>
								<td><input type="text" name="satuan" class="form-control" id="satuan_barang" class="form-control" ></td>
							</tr>
							<tr><td colspan="3"><br></td></tr>
							<tr>
								<td>Harga Satuan &nbsp;&nbsp;</td>
								<td>:&nbsp;&nbsp;</td>
								<td><input type="text" name="harga_satuan" id="harga_barang" class="form-control" style="text-align: right;" readonly="true"></td>
							</tr>
							<tr><td colspan="3"><br></td></tr>
							<tr>
								<td>Jumlah &nbsp;&nbsp;</td>
								<td>:&nbsp;&nbsp;</td>
								<td><input type="text" name="jml" id="jml" class="form-control" style="text-align: right;" readonly="true"></td>
							</tr>
							<tr><td colspan="3"><br></td></tr>
							<tr>
								<td>Sub Total &nbsp;&nbsp;</td>
								<td>:&nbsp;&nbsp;</td>
								<td><input type="text" name="sub_total" id="sub_total" class="form-control" style="text-align: right;" readonly="true"></td>
							</tr>
						</table></div>
						
				<div class="col-md-4">
						<table>
							<tr>
								<td>PPN &nbsp;&nbsp;</td>
								<td>:&nbsp;&nbsp;</td>
								<td><b><input type="text" name="ppn" id="ppn" class="form-control" style="text-align: right;" readonly="true"></b></td>
							</tr>
							<tr><td colspan='3'><br></td></td>
							<tr>
								<td>Total &nbsp;&nbsp;</td>
								<td>:&nbsp;&nbsp;</td>
								<td><b><input type="text" name="total" id="total" class="form-control" style="text-align: right;" readonly="true"></b></td>
							</tr>
							<tr><td colspan='3' readonly="true"><br></td></td>
							<tr>
								<td colspan="3"><p align="left"><input type="submit" class="btn btn-primary" value="Save"></p></td>
							</tr>
					</table></div>
		</form>
	</div>
	<script type="text/javascript">  
	<?php echo $javaArray; ?>
	function changeValue(konsumen){
	document.getElementById('nama_kons').value = KonsName[konsumen].nama_kons;
	document.getElementById('alamat_kons').value = KonsName[konsumen].alamat_kons;
	document.getElementById('telepon_kons').value = KonsName[konsumen].telepon_kons;
	document.getElementById('email_kons').value = KonsName[konsumen].email_kons;
	};
	<?php echo $javaArray1; ?>
	function changeValue1(Barang){
	document.getElementById('nama_barang').value = KodsBarang[Barang].nama_brg;
	document.getElementById('merek_barang').value = KodsBarang[Barang].merk_brg;
	document.getElementById('sfek_barang').value = KodsBarang[Barang].spek_brg;
	document.getElementById('satuan_barang').value = KodsBarang[Barang].satuan_brg;
	document.getElementById('harga_barang').value = KodsBarang[Barang].harga_sat;
	};
	</script>

	<?php require('modal_filter.php');?>

<?php require('menu_bawah.php'); ?></div>