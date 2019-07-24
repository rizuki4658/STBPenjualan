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
		<h1>Edit Data Konsumen</h1>

  		<!-- input data barang -->
		<?php 

		$link=mysqli_connect('localhost','root','','db_penjualan');
		 
		$id=$_GET['id_k'];
		$query="SELECT * FROM konsumen WHERE id_k=$id";
		$hasil=mysqli_query($link, $query);
		if( mysqli_num_rows($hasil) > 0){

		while ($data = mysqli_fetch_assoc($hasil)) {	
			echo "<form action='cek_edit_konsumen.php' method='Post'>
  			<table border='0' style='border-color: #00008B'>
				<tr>
					<td>
						<table>
							<tr><td colspan='5'><input type='hidden' name='id_k' value='".$data['id_k']."'></td</tr>
							<tr><td colspan='5'><p></p></td></tr>
							<tr>
								<td>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</td>
								<td>Nama Konsumen</td>
								<td>:&nbsp;&nbsp;</td>
								<td><input type='text' value='".$data['nm_k']."' name='nama_k' class='form-control'></td>
								<td>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</td>
							</tr>
							<tr><td colspan='5'><p></p></td></tr>
							<tr>
								<td>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</td>
								<td>Alamat</td>
								<td>:&nbsp;&nbsp;</td>
								<td><textarea name='alamat' class='form-control'>".$data['alamat_k']."</textarea></td>
								<td>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</td>
							</tr>
							<tr><td colspan='5'><p></p></td></tr>
							<tr>
								<td>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</td>
								<td>No. Telepon</td>
								<td>:&nbsp;&nbsp;</td>
								<td><input type='text' value='".$data['telp_k']."' name='telepon' class='form-control'></td>
								<td>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</td>
							</tr>
							<tr><td colspan='5'><p></p></td></tr>
							<tr>
								<td>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</td>
								<td>e-mail</td>
								<td>:&nbsp;&nbsp;</td>
								<td><input type='text' value='".$data['email_k']."' name='mail' class='form-control'></td>
								<td>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</td>
							</tr>
							<tr><td colspan='5'><p></p></td></tr>
							<tr>
								
								<td colspan='5'><p align='right'><button class='btn btn-warning'>Edit</button></td>
								</td>
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