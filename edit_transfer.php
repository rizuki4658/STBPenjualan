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
  	<h1>Edit Data Transfer</h1>

  	<!-- input data barang -->
  	<?php
  	$link=mysqli_connect('localhost','root','','db_penjualan');

  	$nomor = $_GET['no_referensi'];
  	$query="SELECT * FROM transfer WHERE no_referensi=$nomor";
  	$hasil = mysqli_query($link,$query);
  	if (mysqli_num_rows($hasil) > 0){

  		while ($data = mysqli_fetch_assoc($hasil)) {
  			echo "<form action='cek_edit_transfer.php' method='post'>
  			
						<table>
							<tr>
								<td><input value='".$data['no_referensi']."' name='no_referensi' type='hidden' class='form-control'></td>
							</tr>
							<tr><td><br></td></tr>
							<tr>
								<td>No Invoice&nbsp;&nbsp;</td>
								<td>:&nbsp;&nbsp;</td>
								<td><input value='".$data['no_inv']."' name='no_inv' type='text' class='form-control'></td>
							</tr>
							<tr><td><br></td></tr>
							<tr>
								<td>Tanggal&nbsp;&nbsp;</td>
								<td>:&nbsp;&nbsp;</td>
								<td><input value='".$data['tanggal']."' name='tanggal' type='date' class='form-control'></td>
							</tr>
							<tr><td><br></td></tr>
							<tr>
								<td>Jumlah Bayar&nbsp;&nbsp;</td>
								<td>:&nbsp;&nbsp;</td>
								<td><input value='".$data['jml_bayar']."' name='jml_bayar' type='text' class='form-control'></td>
							</tr>
							<tr><td><br></td></tr>
							<tr>
								<td><p align='right'><button class='btn btn-primary'>edit</button></p></td>
								
							</tr>
						</table>
					
		</form>";
}
}
?>
</center>

<?php require('modal_filter.php');?>

<?php require('menu_bawah.php'); ?></div>