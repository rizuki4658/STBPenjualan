<?php
      
      $link=mysqli_connect('localhost','root','','db_penjualan');
      $halaman = 10;
      $page = isset($_GET["halaman"]) ? (int)$_GET["halaman"] : 1;
      $mulai = ($page>1) ? ($page * $halaman) - $halaman : 0;
      $result = mysqli_query($link,"SELECT * FROM delivery");
      $total = mysqli_num_rows($result);
      $pages = ceil($total/$halaman);            
      $query = mysqli_query($link,"select * from delivery LIMIT $mulai, $halaman")or die(mysqli_error);
      $no =$mulai+1;
     if( mysqli_num_rows($result) > 0){
     echo "<table class='table' width='800px'";
            echo "<tr>";
            echo "<th><center>No.</center>";
            echo "</th>";
            echo "<th><center>No. DO</center>";
            echo "</th>";
            echo "<th><center>Tanggal DO</center>";
            echo "</th>";
            echo "<th><center>No. PO</center>";
            echo "</th>";
            echo "<th><center>Kod. Barang</center>";
            echo "</th>";
            echo "<th><center>Nama Barang</center>";
            echo "</th>";
            echo "<th><center>Jumlah Barang</center>";
            echo "</th>";
            echo "<th><center>Satuan</center>";
            echo "</th>";
            echo "<th><center>Edit | Hapus</center>";
            echo "</th>";
            echo "</tr>";

             while ($data = mysqli_fetch_assoc($query)) {
                  

                  echo "<tr>";
                  echo "<td><center>".$no++."</center>";
                  echo "</td>";
                  echo "<td><center>".$data['no_do']."</center>";
                  echo "</td>";
                  echo "<td><center>".$data['tgl_do']."</center>";
                  echo "</td>";
                  echo"<td><center>".$data['no_po']."</center>";
                  echo "</td>";
                  echo "<td><center>".$data['kode_brg']."</center>";
                  echo "</td>";
                  echo "<td><center>".$data['nm_brg']."</center>";
                  echo "</td>";
                  echo "<td><div align='right'>".$data['jml_brg']."</div>";
                  echo "</td>";
                  echo "<td><center>".$data['satuan']."</center>";
                  echo "</td>";
                  echo "<td><center><a href='edit_delivery.php?id=".$data['id']."' class='btn btn-warning btn-sm'>Edit</a> | ";?>
                        <a onclick="return confirm('Anda Yakin Akan Menghapus?')" href="<?php echo "delete_delivery.php?id=$data[id]";?>" class="btn btn-danger btn-sm">Hapus</a></center></td></tr>
               <?php
            }
      }else{
            echo "Data tidak ditemukan";
      }?>