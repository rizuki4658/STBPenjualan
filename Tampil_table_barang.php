<?php
		$link=mysqli_connect('localhost','root','','db_penjualan');
		$halaman = 10;
  		$page = isset($_GET["halaman"]) ? (int)$_GET["halaman"] : 1;
  		$mulai = ($page>1) ? ($page * $halaman) - $halaman : 0;
  		$result = mysqli_query($link,"SELECT * FROM barang");
  		$total = mysqli_num_rows($result);
  		$pages = ceil($total/$halaman);            
  		$query = mysqli_query($link,"select * from barang LIMIT $mulai, $halaman")or die(mysqli_error);
  		$no =$mulai+1;	
		
		if(mysqli_num_rows($result) > 0){
			echo "<table class='table'>";
			echo "<tr>";
			echo "<th><center>No</center>";
			echo "</th>";
			echo "<th><center>Nama Barang</center>";
			echo "</th>";
			echo "<th><center>Merk Barang</center>";
			echo "</th>";
			echo "<th><center>Spesifikasi</center>";
			echo "</th>";
			echo "<th><center>Satuan</center>";
			echo "</th>";
			echo "<th><center>Harga</center>";
			echo "</th>";
			echo "<th><center>Edit | Hapus</center>";
			echo "</th>";
			echo "</tr>";


		while ($data = mysqli_fetch_assoc($query)){

			
			echo "<tr>";
			echo "<td><center>".$no++;
			echo "</center></td>";
			echo "</center><td><center>".$data['nm_brg'];
			echo "</center></td>";
			echo "</center><td><center>".$data['merk_brg'];
			echo "</center></td>";
			echo "</center><td><center>".$data['spek_brg'];
			echo "</center></td>";
			echo "<td><center>".$data['satuan'];
			echo "</center></td>";
			echo"<td><div align='right'>"."Rp.". number_format($data['harga_brg']);
			echo "</div></td>";
			echo "<td><center>"."<a href='edit_barang.php?kode_brg=".$data['kode_brg']."' class='btn btn-warning btn-sm'>Edit</a> | ";?>
                        <a onclick="return confirm('Anda Yakin Akan Menghapus?')" href="<?php echo "delete_barang.php?kode_brg=$data[kode_brg]";?>" class="btn btn-danger btn-sm">Hapus</a></td></tr>
               <?php
               echo "</center></tr>";
		}
	}else{
		echo "Data tidak ditemukan";
		


	}?>