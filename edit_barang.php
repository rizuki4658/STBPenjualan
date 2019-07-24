<?php require('menu_atas.php');?>
  <center>
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
  <br>
  <h1>Edit Data Barang</h1>  <!-- input data barang -->
<?php
    $link=mysqli_connect('localhost','root','','db_penjualan');

     $kode = $_GET['kode_brg'];
     $query="SELECT * FROM barang WHERE kode_brg=$kode";
     $hasil = mysqli_query($link,$query);
     if (mysqli_num_rows($hasil) > 0){

      while ($data = mysqli_fetch_assoc($hasil)) {
        echo "<form action='cek_edit_barang.php' method='post'>
         <table border='0' style='border-color: #00008B'>
          <tr>
            <td>
                <table>
                  <tr>
                    <td>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</td>
                    <td colspan='5'><input value='".$data['kode_brg']."' name='kode_brg' type='hidden' class='form-control'></td>
                    <td>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</td>
                  </tr>
                  <tr>
                    <td>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</td>
                    <td>Nama Barang&nbsp;&nbsp;</td>
                    <td>:&nbsp;&nbsp;</td>
                    <td><input value='".$data['nm_brg']."' name='nm_brg' type='text' class='form-control'></td>
                    <td>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</td>
                  </tr>
                  <tr><td colspan='5'><p></p></td></tr>
                  <tr>
                    <td>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</td>
                    <td>Merk Barang&nbsp;&nbsp;</td>
                    <td>:&nbsp;&nbsp;</td>
                    <td><input value='".$data['merk_brg']."' name='merk_brg' type='text' class='form-control'></td>
                    <td>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</td>
                  </tr>
                  <tr><td colspan='5'><p></p></td></tr>
                  <tr>
                    <td>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</td>
                    <td>Spesifikasi&nbsp;&nbsp;</td>
                    <td>:&nbsp;&nbsp;</td>
                    <td><textarea class='form-control' name='spek_brg'>".$data['spek_brg']."</textarea></td>
                    <td>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</td>
                  </tr>
                  <tr><td colspan='5'><p></p></td></tr>
                  <tr>
                    <td>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</td>
                    <td>Satuan&nbsp;&nbsp;</td>
                    <td>:&nbsp;&nbsp;</td>
                    <td><input value='".$data['satuan']."' name='satuan' type='text' class='form-control'></td>
                    <td>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</td>
                  </tr>
                  <tr><td colspan='5'><p></p></td></tr>
                  <tr>
                    <td>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</td>
                    <td>Harga&nbsp;&nbsp;</td>
                    <td>:&nbsp;&nbsp;</td>
                    <td><input value="."Rp.". number_format($data['harga_brg'])." name='harga_brg' type='text' onkeypress='return hanyaAngka(event)' class='form-control'></td>
                    <td>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</td>
                  </tr>
                  <tr><td colspan='5'><br></td></tr>
                  <tr>
                    <td colspan='5'><p align='right'><button class='btn btn-warning'>Edit</button>&nbsp;</p></td>
                  </tr>
                </table>
              </td>
            </tr>
          </table>
  </form>";
}
}
?>
<br>
<br>
<br>
<br>
</center>
<script>
        function hanyaAngka(evt) {
           var charCode = (evt.which) ? evt.which : event.keyCode
           if (charCode > 31 && (charCode < 48 || charCode > 57))
               
          return false;
          return true;
          }
</script>
<?php require('modal_filter.php');?>


<?php require('menu_bawah.php'); ?></div>