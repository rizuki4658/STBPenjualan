<?php 

require('menu_atas.php'); ?>

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
      <center>
      <h1>SOLUSI TEKNIS BANDUNG</h1>
      <br>
      <div class="alert alert-success" role="alert" style="<?php
                if(isset($_SESSION['pesan_k_berhasil'])){
                  echo $_SESSION['pesan_k_berhasil'];
                  unset($_SESSION['pesan_k_berhasil']);
                  }else{
                  echo "display:none;"; 
                  }
                  ?>">Konsumen Ditambahkan<button type="button" class="close" data-dismiss="alert" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
        </div>
        <div class="alert alert-danger" role="alert" style="<?php
                if(isset($_SESSION['pesan_k_hapus'])){
                  echo $_SESSION['pesan_brg_hapus'];
                  unset($_SESSION['pesan_k_hapus']);
                  }else{
                  echo "display:none;"; 
                  }
                  ?>">Konsumen Dihapus<button type="button" class="close" data-dismiss="alert" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
        </div>
        <div class="alert alert-warning" role="alert" style="<?php
                if(isset($_SESSION['pesan_k_ubah'])){
                  echo $_SESSION['pesan_k_ubah'];
                  unset($_SESSION['pesan_k_ubah']);
                  }else{
                  echo "display:none;"; 
                  }
                  ?>">Konsumen Diubah<button type="button" class="close" data-dismiss="alert" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
        </div>
      <br>
      <!-- table barang -->
      <div class="container">
            <div align="left"><a href="tambah_konsumen.php" class="btn btn-primary btn-sm"><span class="glyphicon glyphicon-plus"></span>
            &nbsp;Konsumen</a><div align="right">
              <form action="Konsumen.php" method="POST">
                <table>
                  <tr>
                  <td width="200"><input type="text" name="cari" placeholder="Kata Kunci Pencarian" class="form-control"></td>
                  <td>&nbsp;</td>
            <td><button type="submit" value="Cari" class="btn btn-light btn-sm"><i class="glyphicon glyphicon-zoom-out"></i></button></td>
            </tr>
          </table>
        </form>
            </div></div><p></p>
	
  <?php 
  if (isset($_POST['cari'])) {
    require ('result_konsumen.php');
  }else{
    unset($_POST['cari']);
    require ('Tampil_table_konsumen.php');

  }
  ?>

<!--Paging-->
<tr><td colspan="7">
  <nav aria-label="Page navigation example">
        <ul class="pagination justify-content-center">
          <?php
            if($page == 1){
            ?>
            <li class="disabled"><a href="#">First</a></li>
            <li class="disabled"><a href="#">&laquo;</a></li>
            <?php
            }else{
              $link_prev = ($page > 1)? $page - 1 : 1;
            ?>
            <li><a href="?halaman=1">First</a></li>
            <li><a href="?halaman=<?php echo $link_prev; ?>">&laquo;</a></li>
              <?php } ?>
              <?php for ($i=1; $i<=$pages ; $i++){$link_active = ($page == $i)? ' class="active"' : ''; ?>

        <li <?php echo $link_active."page-item";?>>
          <a href="?halaman=<?php echo $i; ?>"><?php echo $i; ?></a>
          <?php } ?>
        </li>
          <?php
            if($page == $total){
            ?>
              <li class="disabled"><a href="#">&raquo;</a></li>
              <li class="disabled"><a href="#">Last</a></li>
            <?php
            }else{ 
              $link_next = ($page < $total)? $page + 1 : $total;
            ?>
             <li><a href="?halaman=<?php echo $link_next; ?>">&raquo;</a></li>
              <li><a href="?halaman=<?php echo $total; ?>">Last</a></li>
            <?php
            }
            ?>
      
        </ul>
    </nav>
  </td></tr>








  <?php
              echo "</table>";
         mysqli_close($link);
	?>
             
      </div>
</center>

<?php require('modal_filter.php');?>

<?php require('menu_bawah.php');?>