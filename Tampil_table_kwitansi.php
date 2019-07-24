<?php
		$link=mysqli_connect('localhost','root','','db_penjualan');
      $halaman = 10;
      $page = isset($_GET["halaman"]) ? (int)$_GET["halaman"] : 1;
      $mulai = ($page>1) ? ($page * $halaman) - $halaman : 0;
      $result = mysqli_query($link,"SELECT * FROM kwitansi");
      $total = mysqli_num_rows($result);
      $pages = ceil($total/$halaman);            
      $query = mysqli_query($link,"select * from kwitansi LIMIT $mulai, $halaman")or die(mysqli_error);
      $no =$mulai+1;
		if(mysqli_num_rows($result) > 0){
			echo "<table class='table'>";
			echo "<tr>";

			echo "<th><center>No.</center>";
			echo "</th>";
			echo "<th><center>No Kwitansi</center>";
			echo "</th>";
			echo "<th><center>No Referensi</center>";
			echo "</th>";
			echo "<th><center>Tanggal Kwitansi</center>";
			echo "</th>";
			echo "<th><center>ID Konsumen</center>";
			echo "</th>";
			echo "<th><center>Nama Konsumen</center>";
			echo "</th>";
			echo "<th>Nama Pekerjaan";
			echo "</th>";
			echo "<th><center>Jumlah Bayar</center>";
			echo "</th>";
			echo "<th><center>Edit | Hapus";
			echo "</th></center>";
			echo "</tr>";


		while ($data = mysqli_fetch_assoc($query)){
			
			echo "<tr>";
			echo "<td><center>".$no++;
			echo "</td></center>";
			echo "<td><center>".$data['no_kw'];
			echo "</td></center>";
			echo "<td><center>".$data['no_referensi'];
			echo "</td></center>";
			echo "<td>".$data['tgl_kw'];
			echo "</td></center>";
			echo "<td><center>".$data['id_k'];
			echo "</td></center>";
			echo "<td><center>".$data['nm_k'];
			echo "</td></center>";
			echo "<td>".$data['nm_pekerjaan'];
			echo "</td>";
			echo "<td><div align='right'>"."Rp.".number_format($data['jml_byr']);
			echo "</td></div></center>";
			echo "<td><center>"."<a href='edit_kwitansi.php?no_kw=".$data['no_kw']."' class='btn btn-warning btn-sm'>Edit</a> | ";?>
                        <a onclick="return confirm('Anda Yakin Akan Menghapus?')" href="<?php echo "delete_kwitansi.php?no_kw=$data[no_kw]";?>" class="btn btn-danger btn-sm">Hapus</a></center></td></tr>
               <?php
		}
	}else{
		echo "Data tidak ditemukan";
	}?>