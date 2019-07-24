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
	<center>
		<br>
		<h1>Tambah Konsumen</h1>
		<br>
	</center>
	<div style="height: 768px;">
		<!-- input data konsumen -->
		<form action="cek_tambah_konsumen.php" method="post">
			<div class="col-md-4" style="margin-left: 460px;">
						<div class="alert alert-danger" role="alert" style="<?php
								if(isset($_SESSION['pesan_k_gagal'])){
 									echo " ";
	 								unset($_SESSION['pesan_brg_gagal']);
									}else{
									echo "display:none;";	
									}
									?>">ID Sudah digunakan<button type="button" class="close" data-dismiss="alert" aria-label="Close">
    								<span aria-hidden="true">&times;</span>
							</div>
							<div class="alert alert-info" role="alert" style="<?php
								if(isset($_SESSION['pesan_k_kosong'])){
 									echo " ";
	 								unset($_SESSION['pesan_k_kosong']);
									}else{
									echo "display:none;";	
									}
									?>">ID Sudah digunakan<button type="button" class="close" data-dismiss="alert" aria-label="Close">
    								<span aria-hidden="true">&times;</span>
							</div>
						<table>
							<tr>
								<td>ID Konsumen &nbsp;&nbsp;&nbsp;&nbsp;</td>
								<td>:&nbsp;&nbsp;</td>
								<td><input name="id_k" type="text" class="form-control"></td>	
							</tr>
							<tr><td colspan="3"><br></td></tr>
							<tr>
								<td>Nama &nbsp;&nbsp;&nbsp;&nbsp;</td>
								<td>:&nbsp;&nbsp;</td>
								<td><input name="nm_k" type="text" class="form-control"></td>
							</tr>
							<tr><td colspan="3"><br></td></tr>
							<tr>
								<td>Alamat &nbsp;&nbsp;&nbsp;&nbsp;</td>
								<td>:&nbsp;&nbsp;</td>
								<td><textarea class="form-control" name="alamat_k"></textarea></td>	
							</tr>
							<tr><td colspan="3"><br></td></tr>
							<tr>
								<td>Telepon &nbsp;&nbsp;&nbsp;&nbsp;</td>
								<td>:&nbsp;&nbsp;</td>
								<td><input name="telp_k" type="" class="form-control"></td>
							</tr>
							<tr><td colspan="3"><br></td></tr>
							<tr>
								<td>Email &nbsp;&nbsp;&nbsp;&nbsp;</td>
								<td>:&nbsp;&nbsp;</td>
								<td><input name="email_k" type="" class="form-control"></td>
							</tr>
							<tr><td colspan="3"><br></td></tr>
							<tr>
								<td colspan="3"><p align="left"><input type="submit" class="btn btn-primary" value="Save" name="bts"></p></td>
							</tr>
						</table>
				</div>
		</form>
	</div>

<?php require('modal_filter.php');?>

<?php require('menu_bawah.php'); ?>