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
      <br>
      <center>
      <h1>Data Transfer</h1>
      <br>
      <br>
      <!-- table barang -->
      <div class="container">
            <div align="left"><a href="tambah_transfer.php" class="btn btn-primary btn-sm"><span class="glyphicon glyphicon-plus"></span>
            &nbsp;Transfer</a><div align="right">
              <form action="Transfer.php" method="POST">
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
    require ('result_transfer.php');
  }else{
    unset($_POST['cari']);
    require ('Tampil_table_transfer.php');

  }
  ?>

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

<?php require('menu_bawah.php'); ?></div>