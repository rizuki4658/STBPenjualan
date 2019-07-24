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
    <div style="height: 768px;">
	<center>
		<br>
		<h1>Tambah Barang</h1>
		<br>
		<!-- input data barang -->
		<form action="cek_tambah_brg.php" method="post">
							<div class="alert alert-danger" role="alert" style="<?php
								if(isset($_SESSION['pesan_brg_gagal'])){
 									echo " ";
	 								unset($_SESSION['pesan_brg_gagal']);
									}else{
									echo "display:none;";	
									}
									?>">ID Sudah digunakan<button type="button" class="close" data-dismiss="alert" aria-label="Close">
    								<span aria-hidden="true">&times;</span>
							</div>
							<div class="alert alert-info" role="alert" style="<?php
								if(isset($_SESSION['pesan_brg_kosong'])){
 									echo " ";
	 								unset($_SESSION['pesan_brg_kosong']);
									}else{
									echo "display:none;";	
									}
									?>">ID Sudah digunakan<button type="button" class="close" data-dismiss="alert" aria-label="Close">
    								<span aria-hidden="true">&times;</span>
							</div>		
				<table border="0">
							<tr>
								
								<td>ID Barang &nbsp;&nbsp;&nbsp;&nbsp;</td>
								<td>:&nbsp;&nbsp;</td>
								<td><input name="kode_brg" type="text" class="form-control"</td>
								
							</tr>

							<tr><td colspan="3"><br></td></tr>

							<tr>
								
								<td>Nama Barang &nbsp;&nbsp;&nbsp;&nbsp;</td>
								<td>:&nbsp;&nbsp;</td>
								<td><input name="nm_brg" type="text" class="form-control"></td>
								
							</tr>

							<tr><td colspan="3"><br></td></tr>
							<tr>
								
								<td>Merk Barang &nbsp;&nbsp;&nbsp;&nbsp;</td>
								<td>:&nbsp;&nbsp;</td>
								<td><input name="merk_brg" type="text" class="form-control"></td>
								
							</tr>

							<tr><td colspan="3"><br></td></tr>
							<tr>
								
								<td>Spesifikasi &nbsp;&nbsp;&nbsp;&nbsp;</td>
								<td>:&nbsp;&nbsp;</td>
								<td><textarea class="form-control" name="spek_brg"></textarea></td>
								
							</tr>

							<tr><td colspan="3"><br></td></tr>
							<tr>
								
								<td>Satuan &nbsp;&nbsp;&nbsp;&nbsp;</td>
								<td>:&nbsp;&nbsp;</td>
								<td><input name="satuan" type="text" class="form-control"></td>
								
							</tr>

							<tr><td colspan="3"><br></td></tr>
							<tr>
								
								<td>Harga &nbsp;&nbsp;&nbsp;&nbsp;</td>
								<td>:&nbsp;&nbsp;</td>
								<td><input name="harga_brg" type="text" class="form-control" onkeypress="return hanyaAngka(event)"></td>
								<script>
									function hanyaAngka(evt) {
									  var charCode = (evt.which) ? evt.which : event.keyCode
									   if (charCode > 31 && (charCode < 48 || charCode > 57))
							 
									    return false;
									  return true;
									}
								</script>
							</tr>
							<tr><td colspan="3"><br></td></tr>
							<tr>
								<td colspan="3"><p align="left"><input type="submit" class="btn btn-primary" value="Save">&nbsp;</p></td>
							</tr>
						</table>
					
		</form>
	</center>
</div>


<?php require('modal_filter.php');?>

<?php require('menu_bawah.php'); ?>