<?php
		 $link=mysqli_connect('localhost','root','','db_penjualan');
      $halaman = 10;
      $page = isset($_GET["halaman"]) ? (int)$_GET["halaman"] : 1;
      $mulai = ($page>1) ? ($page * $halaman) - $halaman : 0;
      $result = mysqli_query($link,"SELECT * FROM admin");
      $total = mysqli_num_rows($result);
      $pages = ceil($total/$halaman);            
      $query = mysqli_query($link,"select * from admin LIMIT $mulai, $halaman")or die(mysqli_error);
      $no =$mulai+1;
		if(mysqli_num_rows($result) > 0){
			echo "<table class='table'>";
			echo "<tr>";
			echo "<th>No";
			echo "</th>";
			echo "<th>Nama";
			echo "</th>";
			echo "<th>Username";
			echo "</th>";
			echo "<th>Email";
			echo "</th>";
			echo "<th>Foto";
			echo "</th>";
			echo "<th><center>Aksi</center>";
			echo "</th>";
			echo "</tr>";


		while ($data = mysqli_fetch_assoc($query)){
			echo "<tr>";
			echo "<td>".$no++;
			echo "</td>";
			echo "<td>".$data['nama'];
			echo "</td>";
			echo "<td>".$data['username'];
			echo "</td>";
			echo "<td>".$data['email'];
		echo "</td>";?>
			<td><img src="file/<?php echo $data['foto']; ?>" width="50" height="50"></td>
      <?php
			echo "<td><center>"."<a href='edit_admin.php?username=".$data['username']."' class='btn btn-warning btn-sm'>";
			echo "Edit</a> | ";?>
			<a onclick="return confirm('Anda Yakin Akan Menghapus?')" href="<?php echo "delete_admin.php?username=$data[username]";?>" class="btn btn-danger btn-sm">Delete</a></center></td></tr>
	<?php		
		}
	}else{
		echo "Data tidak ditemukan";
	}?>