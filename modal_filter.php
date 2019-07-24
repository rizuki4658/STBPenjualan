<!--Modal Filter-->

<!--Laporan DO-->
<div class="modal fade" id="ModalDO" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
  <div class="modal-dialog modal-dialog-centered" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLongTitle">LAPORAN DELIVERY</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
        <form action="Laporan_DO.php" method="Get">
          <label class="text-md-center">Nomor Delivery</label><br>
      <?php echo "<select name='Kondisi' class='form-control'>";
                
              $link = mysqli_connect('localhost','root','','db_penjualan');
              $hasil = mysqli_query($link,"select * from delivery_filter");
              echo "<option value='0' dselected/>Pilih</option>";
                while ($row = mysqli_fetch_array($hasil)) { 

                echo "<option value='".$row['nomor_do']."' name='nomor_do' id='nomor_do'>".$row['nomor_do']."</option>";

              }
              mysqli_close($link);
                
      echo "</select>";
      ?><br>
      <label class="text-left">Nomor PO</label><br>
      <?php echo "<select name='Kondisi_2' class='form-control'>";
                
                $link = mysqli_connect('localhost','root','','db_penjualan');
              $hasil = mysqli_query($link,"select * from delivery_po");
              echo "<option value='0' dselected/>Pilih</option>";
                while ($row = mysqli_fetch_array($hasil)) { 

              echo "<option value='".$row['nomor_po']."' name='nomor_po' id='nomor_po'>".$row['nomor_po']."</option>";
      
              }
              mysqli_close($link);
                
      echo "</select>";

      ?><br>
      </div>
      
      <div class="modal-footer">
        <button class="btn btn-primary"><i class="glyphicon glyphicon-print"></i></button>
      <button type="reset" class="btn btn-secondary" value=""><i class="glyphicon glyphicon-refresh"></i></button>
        </form>
      </div>
    </div>
  </div>
</div>

<!--Laporan INV-->
<div class="modal fade" id="ModalINV" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
  <div class="modal-dialog modal-dialog-centered" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLongTitle">LAPORAN INVOICE</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
        <form action="Laporan_INV.php" method="Get">
          <label class="text-md-center">Nomor Invoice</label><br>
      <?php echo "<select name='Kondisi1' class='form-control'>";
                
                $link = mysqli_connect('localhost','root','','db_penjualan');
              $hasil = mysqli_query($link,"select * from invoice_filter");
              echo "<option value='0' dselected/>Pilih</option>";
                while ($row = mysqli_fetch_array($hasil)) { 

                echo "<option value='".$row['nomor_inv']."' name='no_inv' id='no_inv'>".$row['nomor_inv']."</option>";
               
              }
              mysqli_close($link);
                
      echo "</select>";
      ?><br>
      <label class="text-left">Nomor PO</label><br>
      <?php echo "<select name='Kondisi2'class='form-control'>";
                
                $link = mysqli_connect('localhost','root','','db_penjualan');
              $hasil = mysqli_query($link,"select * from invoice_po");
              echo "<option value='0' dselected/>Pilih</option>";
                while ($row = mysqli_fetch_array($hasil)) { 

                echo "<option value='".$row['nomor_po']."' name='no_po' id='no_po'>".$row['nomor_po']."</option>";
               
              }
              mysqli_close($link);
                
      echo "</select>";
      
      ?><br>
      </div>
      
      <div class="modal-footer">
        <button class="btn btn-primary"><i class="glyphicon glyphicon-print"></i></button>
      <button type="reset" class="btn btn-secondary" value=""><i class="glyphicon glyphicon-refresh"></i></button>
        </form>
      </div>
    </div>
  </div>
</div>

<!--Laporan Penjualan NO_PO-->
<div class="modal fade" id="ModalNPO" name="ModalNPO" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
  <div class="modal-dialog modal-dialog-centered" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLongTitle">LAPORAN PENJUALAN PER NOMOR PO</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
        <form action="Laporan_Penjualan_PO.php" method="post">
          <select name="nomor_po" class="form-control">
            <label class="text-left">Nomor PO</label>
            <option>Pilih Nomor</option>
              <?php
              $link0=mysqli_connect('localhost','root','','db_penjualan');
              $hasil0 = mysqli_query($link0,"select distinct * from penjualan");
              while ($row0 = mysqli_fetch_array($hasil0)) { 
                echo "<option value='".$row0['no_po']."'>".$row0['no_po']."</option>";
              }
              ?>
          </select>
        </div>
      
      <div class="modal-footer">
        <button class="btn btn-primary"><i class="glyphicon glyphicon-print"></i></button>
      <button type="reset" class="btn btn-secondary" value=""><i class="glyphicon glyphicon-refresh"></i></button>
        </form>
      </div>
    </div>
  </div>
</div>

<!--Laporan Penjualan TG_PO-->
<div class="modal fade" id="ModalTGPO" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
  <div class="modal-dialog modal-dialog-centered" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLongTitle">LAPORAN PER TANGGAL PO</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body" style="height: 200px;">
        <form action="Laporan_Penjualan_TG_PO.php" method="post">
          <label class="text-left">Dari</label><br>
            <input type="date" name="dari" class="form-control"><br>
            <label class="text-left">Sampai</label><br>
            <input type="date" name="sampai" class="form-control">
        </div>
      
      <div class="modal-footer">
        <button class="btn btn-primary"><i class="glyphicon glyphicon-print"></i></button>
      <button type="reset" class="btn btn-secondary" value=""><i class="glyphicon glyphicon-refresh"></i></button>
        </form>
      </div>
    </div>
  </div>
</div>

<!--Laporan Penjualan TG_DL-->
<div class="modal fade" id="ModalTGDL" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
  <div class="modal-dialog modal-dialog-centered" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLongTitle">LAPORAN PER TANGGAL DEADLINE</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body" style="height: 200px;">
        <form action="Laporan_Penjualan_TG_DL.php" method="post">
          <label class="text-left">Dari</label><br>
            <input type="date" name="dari1" class="form-control"><br>
            <label class="text-left">Sampai</label><br>
            <input type="date" name="sampai1" class="form-control">
        </div>
     
      <div class="modal-footer">
        <button class="btn btn-primary"><i class="glyphicon glyphicon-print"></i></button>
      <button type="reset" class="btn btn-secondary" value=""><i class="glyphicon glyphicon-refresh"></i></button>
        </form>
      </div>
    </div>
  </div>
</div>

<!--Laporan Penjualan K-->
<div class="modal fade" id="ModalK" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
  <div class="modal-dialog modal-dialog-centered" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLongTitle">LAPORAN PENJUALAN PER KONSUMEN</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
          <form action="Laporan_Penjualan_Konsumen.php" method="post">
          <select name="id_konsumen" class="form-control">
            <label class="text-left">ID Konsumen</label>
            <option>Pilih</option>
            <?php
              
              $link=mysqli_connect('localhost','root','','db_penjualan');
              $hasil = mysqli_query($link,"select * from konsumen");
              while ($row = mysqli_fetch_array($hasil)) { 
              echo "<option value='".$row['id_k']."'>".$row['id_k']."</option>";
                 
              }
              ?>  
          </select>
        </div>
      <div class="modal-footer">
        <button class="btn btn-primary"><i class="glyphicon glyphicon-print"></i></button>
      <button type="reset" class="btn btn-secondary" value=""><i class="glyphicon glyphicon-refresh"></i></button>
        </form>
      </div>
    </div>
  </div>
</div>

<!--Laporan Penjualan B-->
<div class="modal fade" id="ModalBB" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
  <div class="modal-dialog modal-dialog-centered" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLongTitle">LAPORAN PENJUALAN PER BARANG</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
        <form action="Laporan_Penjualan_Barang.php" method="get">
            <select name="id_barang" class="form-control">
              <label class="text-left">Kode Barang</label>
              <option>Pilih</option>
              <?php
                $link1=mysqli_connect('localhost','root','','db_penjualan');
                $hasil1 = mysqli_query($link1,"select * from barang");
                while ($row1 = mysqli_fetch_array($hasil1)) { 
                    echo "<option value='".$row1['kode_brg']."'>".$row1['kode_brg']."</option>";
                }
                ?>
            </select><br>
      </div>
      
      <div class="modal-footer">
        <button class="btn btn-primary"><i class="glyphicon glyphicon-print"></i></button>
      <button type="reset" class="btn btn-secondary" value=""><i class="glyphicon glyphicon-refresh"></i></button>
        </form>
      </div>
    </div>
  </div>
</div>
