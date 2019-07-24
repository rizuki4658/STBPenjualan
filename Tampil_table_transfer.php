<?php
		$link=mysqli_connect('localhost','root','','db_penjualan');
      $halaman = 10;
      $page = isset($_GET["halaman"]) ? (int)$_GET["halaman"] : 1;
      $mulai = ($page>1) ? ($page * $halaman) - $halaman : 0;
      $result = mysqli_query($link,"SELECT * FROM transfer");
      $total = mysqli_num_rows($result);
      $pages = ceil($total/$halaman);            
      $query = mysqli_query($link,"select * from transfer LIMIT $mulai, $halaman")or die(mysqli_error);
      $no =$mulai+1;
		if(mysqli_num_rows($result) > 0){
			echo "<table class='table'>";
			echo "<tr>";
			echo "<th>No";
			echo "</th>";
			echo "<th>No Referensi";
			echo "</th>";
			echo "<th>No Invoice";
			echo "</th>";
			echo "<th>Tanggal";
			echo "</th>";
			echo "<th>Jumlah Bayar";
			echo "</th>";
			echo "<th>Aksi";
			echo "</th>";
			echo "</tr>";


		while ($data = mysqli_fetch_assoc($query)){
			
			echo "<tr>";
			echo "<td>".$no++;
			echo "</td>";
			echo "<td>".$data['no_referensi'];
			echo "</td>";
			echo "<td>".$data['no_inv'];
			echo "</td>";
			echo "<td>".$data['tanggal'];
			echo "</td>";
			echo "<td>".$data['jml_bayar'];
			echo "</td>";
			echo "<td>"."<a href='edit_transfer.php?no_referensi=".$data['no_referensi']."' class='btn btn-warning btn-sm'>Edit</a> | ";?>
                        <a onclick="return confirm('Anda Yakin Akan Menghapus?')" href="<?php echo "delete_transfer.php?no_referensi=$data[no_referensi]";?>" class="btn btn-danger btn-sm">Hapus</a></td></tr>
               <?php
		}
	}else{
		echo "Data tidak ditemukan";
	}?>