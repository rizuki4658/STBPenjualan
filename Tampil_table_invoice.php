<?php
			
		$link=mysqli_connect('localhost','root','','db_penjualan');
      $halaman = 10;
      $page = isset($_GET["halaman"]) ? (int)$_GET["halaman"] : 1;
      $mulai = ($page>1) ? ($page * $halaman) - $halaman : 0;
      $result = mysqli_query($link,"SELECT * FROM invoice");
      $total = mysqli_num_rows($result);
      $pages = ceil($total/$halaman);            
      $query = mysqli_query($link,"select * from invoice LIMIT $mulai, $halaman")or die(mysqli_error);
      $no =$mulai+1;
		 if( mysqli_num_rows($result) > 0){
		 	echo "<table class='table'>";
            echo "<tr>";
            echo "<th>No.";
            echo "</th>";
            echo "<th>Tanggal Invoice";
            echo "</th>";
            echo "<th>Nama Barang";
            echo "</th>";
            echo "<th>Satuan";
            echo "</th>";
            echo "<th>Kuantitas";
            echo "</th>";
            echo "<th>Harga Satuan";
            echo "</th>";
            echo "<th>Jumlah";
            echo "</th>";
            echo "<th>Edit | Hapus";
            echo "</th>";
            echo "</tr>";

             while ($data = mysqli_fetch_assoc($query)) {
                  

                  echo "<tr>"; 
                  echo "<td>".$no++;
                  echo "</td>";
                  echo "<td>".$data['tgl_inv'];
                  echo "</td>";
                  echo "<td>".$data['nm_brg'];
                  echo "</td>";
                  echo "<td>".$data['satuan'];
                  echo "</td>";
                  echo "<td>".$data['qty'];
                  echo "</td>";
                  echo "<td>"."Rp".number_format($data['harga_satuan']);
                  echo "</td>";
                  echo "<td>"."Rp".number_format($data['jml']);
                  echo "</td>";
                  echo "<td><a href='edit_invoice.php?id=".$data['id']."' class='btn btn-warning btn-sm'>Edit</a> | ";?>
                        <a onclick="return confirm('Anda Yakin Akan Menghapus?')" href="<?php echo "delete_invoice.php?id=$data[id]";?>" class="btn btn-danger btn-sm">Hapus</a></td></tr>
               <?php  
                  }
             }else{
             	echo "<center>";
             	echo "Data Tidak Ada !";
             	echo "</center>";
             }?>