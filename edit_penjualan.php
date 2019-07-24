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
</div>
  <br>
	<center>
		<h1>Edit Data Penjualan</h1>
		<br>
		<br>
	</center>
<div style="height: 768px;">
  		<!-- input data barang -->
  		<form action='cek_edit_penjualan.php' method='post' name="edit_penjualan">

		<?php
		$link=mysqli_connect('localhost','root','','db_penjualan');

  		$no = $_GET['no_po'];

		$query = "SELECT * FROM penjualan WHERE no_po=$no";
  		$hasil = mysqli_query($link,$query);
  		if (mysqli_num_rows($hasil) > 0){

    	while ($data = mysqli_fetch_assoc($hasil)) {
		echo "
  			
<input value='".$data['no_po']."' type='hidden' name='no_po' class='form-control'>
<div class='col-md-4' style='margin-left:50px;'>
	<table width='500'>
		<tr>
			<td>
				Tgl. Po &nbsp;
			</td>
			<td>:&nbsp&nbsp</td>
			<td>
				<input value='".$data['tgl_po']."' type='date' name='tgl_po' class='form-control'>
			</td>
		</tr>

		<tr><td colspan='3'><br></td></td>
		
		<tr>
			<td>Tgl. Deadline &nbsp;&nbsp</td>
			<td>:&nbsp;&nbsp</td>
			<td><input value='".$data['tgl_deadline']."' type='date' name='tgl_deadline' class='form-control'></td>
		</tr>

		<tr><td colspan='3'><br></td></td>

		<tr>
			<td>ID Konsumen &nbsp;&nbsp;</td>
			<td></td>
			<td><select name='id_k' id='konsumen' onchange='changeValue(this.value)' class='form-control'>";?><?php
				$link=mysqli_connect('localhost','root','','db_penjualan');
				$hasil = mysqli_query($link,"select * from konsumen");
				$javaArray = "var KonsName = new Array();\n";
				echo "<option value='0' dselected/>Pilih</option>";
				while ($row = mysqli_fetch_array($hasil)) { 
				echo "<option value='".$row['id_k']."'>".$row['id_k']."</option>";
				$javaArray .= "KonsName['" . $row['id_k'] . "'] = {nama_kons:'" . addslashes($row['nm_k']) . "',alamat_kons:'".addslashes($row['alamat_k'])."',telepon_kons:'" . addslashes($row['telp_k']) . "',email_kons:'" . addslashes($row['email_k']) . "'};\n";
								}
				mysqli_close($link);
				?><?php
				echo "</select></td>
		</tr>

		<tr><td colspan='3'><br></td></td>


		<tr>
			<td>
				Nama Konsumen &nbsp;&nbsp;
			</td>
			<td>
				:&nbsp;&nbsp;
			</td>
			<td>
				<input value='".$data['nm_k']."' type='text' name='nm_k'  id='nama_kons' class='form-control' readonly='true'>
			</td>
		</tr>

		<tr><td colspan='3'><br></td></td>

		<tr>
			<td>
				Alamat Konsumen &nbsp;&nbsp;
			</td>
			<td>
				:&nbsp;&nbsp;
			</td>
			<td>
				<textarea name='alamat_k'  id='alamat_kons' class='form-control' readonly='true'>".$data['alamat_k']."</textarea>
			</td>
		</tr>

		<tr><td colspan='3'><br></td></td>

		<tr>
			<td>
				No.Telp &nbsp;&nbsp;
			</td>
			<td>
				:&nbsp;&nbsp;
			</td>
			<td>
				<input value='".$data['telp_k']."' type='text' name='telp_k'  id='telepon_kons' class='form-control' readonly='true'>
			</td>
		</tr>
			
		<tr><td colspan='3'><br></td></td>

		<tr>
			<td>
				e-mail &nbsp;&nbsp;
			</td>
			<td>
				:&nbsp;&nbsp;
			</td>
			<td>
				<input value='".$data['email_k']."' type='text' name='email_k' id='email_kons' class='form-control' readonly='true'>
			</td>
		</tr>

		<tr><td colspan='3'><br></td></td>

		<tr>
			<td>
				Nama Pekerjaan &nbsp;&nbsp;
			</td>
			<td>
				:&nbsp;&nbsp;
			</td>
			<td>
				<textarea type='text' name='nm_pekerjaan' class='form-control'>".$data['nm_pekerjaan']."</textarea>
			</td>
		</tr>
	</table>
</div>

<div class='col-md-4' style='margin-left:100px;'>
	<table width='400'>
		<tr>
			<td>Kode Barang &nbsp;&nbsp;</td>
			<td>:&nbsp&nbsp</td>
			<td><select name='kode_brg' id='Barang' onchange='changeValue1(this.value)' class='form-control'>";?>
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
			<?php
			echo "</select></td>
		</tr>

		<tr><td colspan='3'><br></td></td>

		<tr>
			<td>Nama Barang &nbsp;&nbsp;</td>
			<td></td>
			<td><input value='".$data['nm_brg']."' type='text' name='nm_brg' id='nama_barang' class='form-control' readonly='true'></td>
		</tr>

		<tr><td colspan='3'><br></td></td>

		<tr>
			<td>Merk Barang &nbsp;&nbsp;</td>
			<td></td>
			<td><input value='".$data['merk_brg']."' type='text' name='merk_brg' id='merek_barang' class='form-control' readonly='true'></td>
		</tr>

		<tr><td colspan='3'><br></td></td>

		<tr>
			<td>Spek Barang &nbsp;&nbsp;</td>
			<td></td>
			<td><textarea name='spek_brg'  id='sfek_barang' class='form-control' readonly='true'>".$data['spek_brg']."</textarea></td>
		</tr>

		<tr><td colspan='3'><br></td></td>

		<tr>
			<td>Quantity &nbsp;&nbsp;</td>
			<td></td>
			<td><input value='".$data['qty']."' type='text' name='qty' id='qty' class='form-control' onfocus='StartHitung();' onblur='StopHitung();' onkeypress='return hanyaAngka(event)'></td>
		</tr>

		<tr><td colspan='3'><br></td></td>

		<tr>
			<td>Satuan &nbsp;&nbsp;</td>
			<td></td>
			<td><input value='".$data['satuan']."' type='text' name='satuan' id='satuan_barang' class='form-control'readonly='true'></td>
		</tr>

		<tr><td colspan='3'><br></td></td>


		<tr>
			<td>Harga Satuan &nbsp;&nbsp;</td>
			<td></td>
			<td><input value='"."Rp.". number_format($data['harga_satuan'])."' type='text' name='harga_satuan' id='harga_barang' class='form-control'readonly='true' style='text-align:right;'></td>
		</tr>

		<tr><td colspan='3'><br></td></td>

		<tr>
			<td>Jumlah &nbsp;&nbsp;</td>
			<td></td>
			<td><input value='"."Rp.". number_format($data['jml'])."' type='text' name='jml' id='jml' class='form-control' readonly='true' style='text-align:right;'></td>
		</tr>

		<tr><td colspan='3'><br></td></td>

		<tr>
			<td>Sub Total &nbsp;&nbsp;</td>
			<td></td>
			<td><input value='"."Rp.". number_format($data['sub_total'])."' type='text' name='sub_total' id='sub_total' class='form-control' style='text-align:right;' readonly='true'></td>
		</tr>
	</table>
</div>

<table>
	<tr>
		<td>PPN &nbsp;&nbsp;</td>
			<td></td>
			<td><b><input value='"."Rp.". number_format($data['ppn'])."' type='text' name='ppn' id='ppn' class='form-control' style='text-align:right;' readonly='true'></b></td>
		</tr>

		<tr><td colspan='3'><br></td></td>

		<tr>
			<td>Total &nbsp;&nbsp;</td>
			<td></td>
			<td><b><input value='"."Rp.". number_format($data['total'])."' type='text' name='total' id='total' class='form-control' style='text-align:right;' readonly='true'></b></td>
		</tr>
		<tr><td colspan='3'><br></td></td>

		<tr>
			<td colspan='3'><p align='right'><button class='btn btn-primary'>Edit</button></p></td>
		</tr>
</table>
";			
							
		
	}
}
?>

</form>


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
	kuantitas = document.edit_penjualan.qty.value;
	harga = document.edit_penjualan.harga_barang.value;
	jumlah=kuantitas*harga;
	sub=jumlah;
	pajak=sub*0.1;
	bersih=sub-pajak;
	document.edit_penjualan.jml.value = (jumlah);
	document.edit_penjualan.sub_total.value=(sub);
	document.edit_penjualan.ppn.value=(pajak);
	document.edit_penjualan.total.value=(bersih);
	}
	function StopHitung(){
	clearInterval(interval);}
</script>
<script type="text/javascript" src="bootstrap-3.3.7/dist/js/bootstrap.js"></script>

<script type="text/javascript" src="jquery-3.3.1.js"></script>

<?php require('modal_filter.php');?>
<?php require('menu_bawah.php'); ?>
