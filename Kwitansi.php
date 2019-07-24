<?php require('menu_atas.php'); ?>

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
    <br>
      <br>
      <center>
      <h1>SOLUSI TEKNIS BANDUNG</h1>
      <br>
      <br> <p align="right" style="margin-right: 80px;"><a href="#"  data-toggle="modal" data-target="#ModalKW" class="btn btn-primary btn-sm"><span class="glyphicon glyphicon-print"></span>&nbsp;Cetak</a></p>
  <div style="height: 768px;">
      <!-- table barang -->
      <div class="container">
            <div align="left"><a href="tambah_kwitansi.php" class="btn btn-primary btn-sm"><span class="glyphicon glyphicon-plus"></span>
            &nbsp;Kwitansi</a><div align="right">
              <form action="Kwitansi.php" method="POST">
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
    require ('result_kwitansi.php');
  }else{
    unset($_POST['cari']);
    require ('Tampil_table_kwitansi.php');

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
    

      </div>
        </ul>
    
  </td></tr>

	<?php
	echo "</table>";
	mysqli_close($link);
	?>
</nav>
	


 <div class="modal fade" id="ModalKW" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
  <div class="modal-dialog modal-dialog-centered" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLongTitle">CETAK KWITANSI</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
        <form action="Laporan_KW.php" method="Get">
          <label class="text-md-center">Nomor Kwitansi</label><br>
      <?php echo "<select name='Kwitansi' class='form-control'>";
                
                $link = mysqli_connect('localhost','root','','db_penjualan');
              $hasil = mysqli_query($link,"select distinct * from kwitansi");
              echo "<option value='0' dselected/>Pilih</option>";
                while ($row = mysqli_fetch_array($hasil)) { 

                echo "<option value='".$row['no_kw']."' name='nomor_kw' id='nomor_kw'>".$row['no_kw']."</option>";

              }
              mysqli_close($link);
                
      echo "</select>";
      ?>
      </div>
      
      <div class="modal-footer">
        <button class="btn btn-primary"><i class="glyphicon glyphicon-print"></i></button>
      <button type="reset" class="btn btn-secondary" value=""><i class="glyphicon glyphicon-refresh"></i></button>
        </form>
      </div>
    </div>
  </div>
</div>
</div>
</center>
<?php require('modal_filter.php');?>
<?php require('menu_bawah.php');?>