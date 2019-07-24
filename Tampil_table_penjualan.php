<?php
			
      $link=mysqli_connect('localhost','root','','db_penjualan');
      $halaman = 10;
      $page = isset($_GET["halaman"]) ? (int)$_GET["halaman"] : 1;
      $mulai = ($page>1) ? ($page * $halaman) - $halaman : 0;
      $result = mysqli_query($link,"SELECT * FROM penjualan");
      $total = mysqli_num_rows($result);
      $pages = ceil($total/$halaman);            
      $query = mysqli_query($link,"select * from penjualan LIMIT $mulai, $halaman")or die(mysqli_error);
      $no =$mulai+1;
		 if( mysqli_num_rows($result) > 0){
		echo "<table class='table'";
            echo "<tr>";
            echo "<th><center>No.</center>";
            echo "</th>";
            echo "<th><center>Tanggal PO</center>";
            echo "</th>";
            echo "<th><center>Tanggal Deadline</center>";
            echo "</th>";
            echo "<th><center>ID Konsumen</center>";
            echo "</th>";
            echo "<th>Nama Pekerjaan";
            echo "</th>";
            echo "<th><center>Kode Barang</center>";
            echo "</th>";
            echo "<th><center>Harga Satuan</center>";
            echo "</th>";
            echo "<th><center>Jumlah</center>";
            echo "</th>";
            echo "<th><center>Sub Total</center>";
            echo "</th>";
            echo "<th><center>PPN</center>";
            echo "</th>";
            echo "<th><center>Total</center>";
            echo "</th>";
            echo "<th><center>Edit | Hapus</center>";
            echo "</th>";
            echo "</tr>";

             while ($data = mysqli_fetch_assoc($query)) {
                  

                  echo "<tr>";
                  echo "<td><center>".$no++."</center>";
                  echo "</td>";
                  echo "<td><center>".$data['tgl_po']."</center>";
                  echo "</td>";
                  echo "<td><center>".$data['tgl_deadline']."</center>";
                  echo "</td>";
                  echo "<td><center>".$data['id_k']."</center>";
                  echo "</td>";
                  echo "<td>".$data['nm_pekerjaan'];
                  echo "</td>";
                  echo "<td><center>".$data['kode_brg']."<center>";
                  echo "</td>";
                  echo"<td><div align='right'>"."Rp.". number_format($data['harga_satuan'])."</div>";
                  echo "</td>";
                  echo "<td><center>"."Rp.". number_format($data['jml'])."</center>";
                  echo "</td>";
                  echo "<td><center>"."Rp.". number_format($data['sub_total'])."</center>";
                  echo "</td>";
                  echo "<td><center>"."Rp.". number_format($data['ppn'])."</center>";
                  echo "</td>";
                  echo "<td><div align='right'>"."Rp.". number_format($data['total'])."</div>";
                  echo "</td>";
                  echo "<td><center><a href='edit_penjualan.php?no_po=".$data['no_po']."' class='btn btn-warning btn-sm'>Edit</a> | ";?>
                        <a onclick="return confirm('Anda Yakin Akan Menghapus?')" href="<?php echo "delete_penjualan.php?no_po=$data[no_po]";?>" class="btn btn-danger btn-sm">Hapus</a></center></td></tr>
               <?php
            }
      }else{
            echo "Data tidak ditemukan";
      }?>