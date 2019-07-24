<?php
		 $link=mysqli_connect('localhost','root','','db_penjualan');
      $halaman = 10;
      $page = isset($_GET["halaman"]) ? (int)$_GET["halaman"] : 1;
      $mulai = ($page>1) ? ($page * $halaman) - $halaman : 0;
      $result = mysqli_query($link,"SELECT * FROM konsumen");
      $total = mysqli_num_rows($result);
      $pages = ceil($total/$halaman);            
      $query = mysqli_query($link,"select * from konsumen LIMIT $mulai, $halaman")or die(mysqli_error);
      $no =$mulai+1;
		 if( mysqli_num_rows($result) > 0){
		 	echo "<table class='table'>";
            echo "<tr>";
            echo "<th>No.";
            echo "</th>";
            echo "<th>Nama Konsumen";
            echo "</th>";
            echo "<th>Alamat Konsumen";
            echo "</th>";
            echo "<th>No. Telepon";
            echo "</th>";
            echo "<th>e-mail";
            echo "</th>";
            echo "<th>Edit | Hapus";
            echo "</th>";
            echo "</tr>";

             while ($data = mysqli_fetch_assoc($query)) {
                  

                  echo "<tr>";
                  echo "<td>".$no++;
                  echo "</td>";
                  echo "<td>".$data['nm_k'];
                  echo "</td>";
                  echo "<td>".$data['alamat_k'];
                  echo "</td>";
                  echo "<td>".$data['telp_k'];
                  echo "</td>";
                  echo "<td>".$data['email_k'];
                  echo "</td>";
                  echo "<td><a href='edit_konsumen.php?id_k=".$data['id_k']."' class='btn btn-warning btn-sm'>Edit</a> | ";?>
                        <a onclick="return confirm('Anda Yakin Akan Menghapus?')" href="<?php echo "hapus_konsumen.php?id_k=$data[id_k]";?>" class="btn btn-danger btn-sm">Hapus</a></td></tr>
               <?php
                  }
             }else{
             	echo "<center>";
             	echo "Data Tidak Ada !";
             	echo "</center>";
             }?>