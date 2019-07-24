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
		<h1>Tambah Data Transfer</h1>

		<!-- input data barang -->
		<form action="cek_tambah_transfer.php" method="post">
			
						<table>
							<tr>
								<td>No Referensi &nbsp;&nbsp;&nbsp;&nbsp;</td>
								<td>:&nbsp;&nbsp;</td>
								<td><input name="no_referensi" type="text" class="form-control"></td>
							</tr>
							<tr><td colspan="3"><br></td></tr>
							<tr>
								<td>No Invoice &nbsp;&nbsp;&nbsp;&nbsp;</td>
								<td>:&nbsp;&nbsp;</td>
								<td><input name="no_inv" type="text" class="form-control"></td>
							</tr>
							<tr><td colspan="3"><br></td></tr>
							<tr>
								<td>Tanggal &nbsp;&nbsp;&nbsp;&nbsp;</td>
								<td>:&nbsp;&nbsp;</td>
								<td><input name="tanggal" type="date" class="form-control"></td>
							</tr>
							<tr><td colspan="3"><br></td></tr>
							<tr>
								<td>Jumlah Bayar &nbsp;&nbsp;&nbsp;&nbsp;</td>
								<td>:&nbsp;&nbsp;</td>
								<td><input name="jml_bayar" type="text" class="form-control"></td>
							</tr>
							<tr><td colspan="3"><br></td></tr>
							<tr>
								<td colspan="3"><p align="right"><input type="submit" class="btn btn-primary" value="Save">&nbsp;</p></td>
							</tr>
						</table>
				
		</form>
	</center>

<?php require('modal_filter.php');?>

<?php require('menu_bawah.php'); ?></div>